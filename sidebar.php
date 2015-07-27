<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package nano-progga
 */

if ( ! is_active_sidebar( 'right_sidebar' ) ) {
	return;
}
$column_class = is_home() ? ' col-md-3' : ' col-sm-3';
?>

<div id="secondary" class="widget-area <?php echo $column_class; ?>" role="complementary">
	<?php dynamic_sidebar( 'right_sidebar' ); ?>
</div><!-- #secondary -->
