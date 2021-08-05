let preprocessor = 'sass', // Preprocessor (sass, less, styl); 'sass' also work with the Scss syntax in blocks/ folder.
		fileswatch   = 'html,htm,txt,json,php,md,woff2' // List of files extensions for watching & hard reload

const { src, dest, parallel, series, watch } = require('gulp')
const browserSync  = require('browser-sync').create()
const bssi         = require('browsersync-ssi')
const ssi          = require('ssi')
const webpack      = require('webpack-stream')
const sass         = require('gulp-sass')
const sassglob     = require('gulp-sass-glob')
const less         = require('gulp-less')
const lessglob     = require('gulp-less-glob')
const styl         = require('gulp-stylus')
const stylglob     = require("gulp-noop")
const cleancss     = require('gulp-clean-css')
const autoprefixer = require('gulp-autoprefixer')
const rename       = require('gulp-rename')
const imagemin     = require('gulp-imagemin')
const newer        = require('gulp-newer')
const rsync        = require('gulp-rsync')
const del          = require('del')

function browsersync() {
	browserSync.init({
		proxy: 'http://localhost/redgroupvanna',
		// server: {
		// 	baseDir: 'app/',
		// 	middleware: bssi({ baseDir: 'app/', ext: '.html' })
		// },
		ghostMode: { clicks: false },
		notify: false,
		// online: true,
		// tunnel: 'yousutename', // Attempt to use the URL https://yousutename.loca.lt
	})
}

function scripts() {
	return src(['../mytheme/js/*.js', '!../mytheme/js/*.min.js'])
		.pipe(webpack({
			mode: 'production',
			externals: {
				// require("jquery") is external and available
				//  on the global var jQuery
				"jquery": "jQuery"
			},	
			performance: { hints: false },
			module: {
				rules: [
					{
						test: /\.(js)$/,
						exclude: /(node_modules)/,
						loader: 'babel-loader',						
						query: {
							presets: ['@babel/env'],
							plugins: ['babel-plugin-root-import']
						}
					},					
				],
			}
		})).on('error', function handleError() {
			this.emit('end')
		})
		.pipe(rename('app.min.js'))
		.pipe(dest('../mytheme/js'))
		.pipe(browserSync.stream())
}

function styles() {
	return src([`../mytheme/styles/${preprocessor}/*.*`, `!../mytheme/styles/${preprocessor}/_*.*`])
		.pipe(eval(`${preprocessor}glob`)())
		.pipe(eval(preprocessor)())
		.pipe(autoprefixer({ overrideBrowserslist: ['last 10 versions'], grid: true }))
		.pipe(cleancss({ level: { 1: { specialComments: 0 } },/* format: 'beautify' */ }))
		.pipe(rename({ suffix: ".min" }))
		.pipe(dest('../mytheme/css'))
		.pipe(browserSync.stream())
}

function images() {
	return src(['../mytheme/images/src/**/*'])
		.pipe(newer('../mytheme/images/dist'))
		.pipe(imagemin())
		.pipe(dest('../mytheme/images/dist'))
		.pipe(browserSync.stream())
}

function buildcopy() {
	return src([
		'{../mytheme/js,app/css}/*.min.*',
		'../mytheme/images/**/*.*',
		'!../mytheme/images/src/**/*',
		'../mytheme/fonts/**/*'
	], { base: '../mytheme/' })
	.pipe(dest('dist'))
}

async function buildhtml() {
	let includes = new ssi('../mytheme/', 'dist/', '/**/*.html')
	includes.compile()
	del('dist/parts', { force: true })
}

function cleandist() {
	return del('dist/**/*', { force: true })
}

function deploy() {
	return src('dist/')
		.pipe(rsync({
			root: 'dist/',
			hostname: 'username@yousite.com',
			destination: 'yousite/public_html/',
			// clean: true, // Mirror copy with file deletion
			include: [/* '*.htaccess' */], // Included files to deploy,
			exclude: [ '**/Thumbs.db', '**/*.DS_Store' ],
			recursive: true,
			archive: true,
			silent: false,
			compress: true
		}))
}

function startwatch() {
	watch(`../mytheme/styles/${preprocessor}/**/*`, { usePolling: true }, styles)
	watch(['../mytheme/js/**/*.js', '!../mytheme/js/**/*.min.js'], { usePolling: true }, scripts)
	watch('../mytheme/images/src/**/*.{jpg,jpeg,png,webp,svg,gif}', { usePolling: true }, images)
	watch(`../mytheme/**/*.{${fileswatch}}`, { usePolling: true }).on('change', browserSync.reload)
}

exports.scripts = scripts
exports.styles  = styles
exports.images  = images
exports.deploy  = deploy
exports.assets  = series(scripts, styles, images)
exports.build   = series(cleandist, scripts, styles, images, buildcopy, buildhtml)
exports.default = series(scripts, styles, images, parallel(browsersync, startwatch))
