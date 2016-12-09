<?php
/**
 * Search Form Template
 *
 * Typically used in headers or Top Bars
 *
 * @since {%= base_version %}
 *
 * @package {%= class_name %}
 * @subpackage Search
 */

?>

<?php do_action( 'hatch_searchform_before' ); ?>

<form role="search" method="get" id="searchform" action="<?php esc_html_e( home_url( '/' ) ); ?>">
	<div class="row collapse">
		<?php do_action( 'hatch_searchform_inner_before' ); ?>

		<div class="small-8 columns">
			<input type="text" value="" name="s" id="s" placeholder="<?php esc_attr_e( 'Search', '{%= text_domain %}' ); ?>">
		</div>

		<div class="small-4 columns">

			<?php do_action( 'hatch_searchform_search_button_before' ); ?>

			<input type="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', '{%= text_domain %}' ); ?>" class="prefix button">

			<?php do_action( 'hatch_searchform_search_button_after' ); ?>
		</div>

		<?php do_action( 'hatch_searchform_inner_after' ); ?>
	</div>
</form>

<?php do_action( 'hatch_searchform_after' );
