<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();

?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				
			get_template_part( 'template-parts/content/content', 'single' );

				if ( is_singular( 'attachment' ) ) {
					// Parent post navigation.
					the_post_navigation(
						array(
							/* translators: %s: parent post link */
							'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'twentynineteen' ), '%title' ),
						)
					);
				} elseif ( is_singular( 'post' ) ) {
					// Previous/next post navigation.
					the_post_navigation(
						array(
							'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next Post', 'twentynineteen' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Next post:', 'twentynineteen' ) . '</span> <br/>' .
								'<span class="post-title">%title</span>',
							'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous Post', 'twentynineteen' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Previous post:', 'twentynineteen' ) . '</span> <br/>' .
								'<span class="post-title">%title</span>',
						)
					);
				}?>
			  <div class="row version-specifications">
                  <div class="col-md-6">
                     <div class="mb40">
                        <h2>Dimensions and Weights</h2>
                        	<table class="table table-striped table-bordered">
								<?php 

								$fields = get_specifications_fields(43);				
	
								
								if( $fields ): ?>
										<?php foreach( $fields as $name => $value ): ?>
										<tr>
											<td><b><?php echo $name; ?></b></td>
											<td> <?php echo $value['value']; ?></td>
										</tr>
										<?php endforeach; ?>
								<?php endif; ?>
								
							<table>
						</div>
						<div class="col-md-6">
                     		<div class="mb40">
							 <h2>Dimensions and Weights</h2>
							<table class="table table-striped table-bordered">
								<?php 

								$fields = get_specifications_fields(43);				
	
							
								if( $fields ): ?>
										<?php foreach( $fields as $name => $value ): ?>
										<tr>
											<td><b><?php echo $name; ?></b></td>
											<td> <?php echo $value['value']; ?></td>
										</tr>
										<?php endforeach; ?>
								<?php endif; ?>
								
							<table>
						</div>
					</div>
					
				</div>
				<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End of the loop.
			?>
		
	
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
function get_specifications_fields($id) {

	global $post;
	
	$specifications_group_id = $id; // Post ID of the specifications field group.
	$specifications_fields = array();
	
	$fields = acf_get_fields( $specifications_group_id );
	
	foreach ( $fields as $field ) {
		$field_value = get_field( $field['name'] );
		
		if ( $field_value && !empty( $field_value ) ) {
			$specifications_fields[$field['name']] = $field;
			$specifications_fields[$field['name']]['value'] = $field_value;
		}
	}
	
	return $specifications_fields;

}
get_footer();
