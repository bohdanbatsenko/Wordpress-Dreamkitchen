google search 

WordPress display loop in 2 columns - Stack Overflow

how to display wordpress categories in two columns?

// Grab all the categories from the database that have posts.

$args = array(
	//'show_option_all'    => '',
	'title_li' => '',
	'orderby'            => 'name',
	'order'              => 'ASC',
	'style'              => 'list',
	//'show_count'         => 1,
	'hide_empty'         => 1,
	'child_of'           => 3,
	'hierarchical'       => true,
	'number'             => NULL,
	//'echo'               => 1,
	'depth'              => 0,
	'walker'             => 'Walker_Category',
	'hide_title_if_empty' => false,
	//'separator'          => '<br />',
);

$categories = get_terms( 'category', $args);
//https://stackoverflow.com/questions/60984111/wordpress-display-loop-in-2-columns
//get size of category
$catSize = sizeof($categories);
$j = 1;
$n = 1;
// Loop through categories
foreach ( $categories as $category ) {
if($n == 1){
echo '<div class="row">';
}
echo'<div class="col-6">';
// Display category name
//echo '<h2 class="post-title">' . $category->name . '</h2>';
echo '<div class="post-list">';
// WP_Query arguments
$args = array(
	'cat' => $category->term_id,
	'child_of' => 3,
	'order' => 'ASC',
	'orderby' => 'title',
);

// The Query
$query = new WP_Query( $args );
// The Loop
if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
		$query->the_post();
		?>

		<p><a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>
		<?php
		} // End while
} // End if
echo '</div></div>';

if($n == 1){
		if($j == $catSize){
				echo '<div class="col-6"></div>
				</div>';
		}
		else{
				$n = 2;
		}
}
else{
		echo '</div>';
		$n =1;
}
$j++;
}
// Restore original Post Data
wp_reset_postdata(); ?>






















// Grab all the categories from the database that have posts.

$args = array(
	//'show_option_all'    => '',
	'parent'         => 3,
	'count' => 1
	//child_of'           => 3,

);

$categories = get_terms( 'category', $args);
// Loop through categories
echo '"<div class="new-column">';
$counter = 0;
foreach ( $categories as $category ) {
   if($counter % 4 == 0 && $counter !=0){
       echo '<div class="new-column">';
    }
// Display category name
//echo '<h2 class="post-title">' . $category->name . '</h2>';
echo '<div class="post-list">';
// WP_Query arguments
$args = array(
    'cat' => $category->term_id,
    'order' => 'ASC',
    'orderby' => 'title',
		'showposts' => 1, 
);
// The Query
$query = new WP_Query( $args );
// The Loop
if ( $query->have_posts() ) {
while ( $query->have_posts() ) {
$query->the_post();
?>
<p><a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>
<?php
} // End while
} // End if
echo '</div>';
// Restore original Post Data
wp_reset_postdata();
$counter++;
if($counter % 4 == 0){
  echo "</div>";
}
} // End foreach
if($counter % 4 != 0){
 echo '</div>';
}