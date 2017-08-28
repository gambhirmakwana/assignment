<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap">
				<?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );

				if ( has_nav_menu( 'social' ) ) : ?>
					<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'social',
								'menu_class'     => 'social-links-menu',
								'depth'          => 1,
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
							) );
						?>
					</nav><!-- .social-navigation -->
				<?php endif;

				get_template_part( 'template-parts/footer/site', 'info' );
				?>
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

<?php
$crnt_id=get_the_ID();
	global $wpdb;
	$table_name = $wpdb->prefix . 'simple_alert';
	$sql = "SELECT * FROM $table_name";
	$result = $wpdb->get_results($sql);
	$cnt=0;
    foreach( $result as $results ) {
	    $pst_ids=$result[$cnt]->post_ids;
	    $txt=$result[$cnt]->title;
	    $cnt=count($pst_ids);
	    if($pst_ids!='')
	    {
	    	$epst_ids=explode(",",$pst_ids);
	    	$ecnt=count($epst_ids);

	    	for($a=0; $a<$ecnt;$a++)
			{
				if($epst_ids[$a]==$crnt_id)
				{
					echo "<script> alert('".$txt."'); </script>";
				}

			}
	    }
	    $cnt+=1;
    }
?>
</body>
</html>
