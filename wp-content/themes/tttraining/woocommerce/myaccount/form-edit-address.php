<?php
/**
 * Edit address form
 *
 * @author      WooThemes
 * @package     WooCommerce/Templates
 * @version     2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $current_user;

$page_title = ( $load_address === 'billing' ) ? __( 'Billing Address', 'woocommerce' ) : __( 'Shipping Address', 'woocommerce' );

get_currentuserinfo();

?>

<section class="section form-edit-address">
	<div class="container">
		<div class="row">
			<div class="col2-set col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

	<?php wc_print_notices(); ?>

	<div class="form-container clearfix">

		<?php if ( ! $load_address ) : ?>

			<?php wc_get_template( 'myaccount/my-address.php' ); ?>

		<?php else : ?>

			<form method="post">

				<h1><?php echo apply_filters( 'woocommerce_my_account_edit_address_title', $page_title ); ?></h1>

				<?php do_action( "woocommerce_before_edit_address_form_{$load_address}" ); ?>

				<?php foreach ( $address as $key => $field ) : ?>

					<div class="col-xs-12 col-sm-6">

					<?php woocommerce_form_field( $key, $field, ! empty( $_POST[ $key ] ) ? wc_clean( $_POST[ $key ] ) : $field['value'] ); ?>
					</div>
				<?php endforeach; ?>

				<?php do_action( "woocommerce_after_edit_address_form_{$load_address}" ); ?>

				<div class="col-xs-12">
					<input type="submit" class="button btn" name="save_address" value="<?php esc_attr_e( 'Save Address', 'woocommerce' ); ?>" />
					<?php wp_nonce_field( 'woocommerce-edit_address' ); ?>
					<input type="hidden" name="action" value="edit_address" />
				</p>

			</form>

		<?php endif; ?>

	</div>
			</div>
		</div>
	</div>
</section>