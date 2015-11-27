<?php
/**
 * Edit account form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.2.7
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>


<section class="section form-edit-account">
	<div class="container">
		<div class="row">
			<div class="col2-set col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

				<?php wc_print_notices(); ?>
				
				<div class="form-container clearfix">

					<h1>Account Details</h1>

					<form action="" method="post">

						<?php do_action( 'woocommerce_edit_account_form_start' ); ?>

						<p class="form-row form-row-first col-xs-12 col-sm-6">
							<label for="account_first_name"><?php _e( 'First name', 'woocommerce' ); ?> <span class="required">*</span></label>
							<input type="text" class="input-text" name="account_first_name" placeholder="First Name" id="account_first_name" value="<?php echo esc_attr( $user->first_name ); ?>" />
						</p>
						<p class="form-row form-row-last col-xs-12 col-sm-6">
							<label for="account_last_name"><?php _e( 'Last name', 'woocommerce' ); ?> <span class="required">*</span></label>
							<input type="text" class="input-text" name="account_last_name" id="account_last_name" placeholder="Last Name" value="<?php echo esc_attr( $user->last_name ); ?>" />
						</p>

						<p class="form-row form-row-wide col-xs-12 col-sm-6">
							<label for="account_email"><?php _e( 'Email address', 'woocommerce' ); ?> <span class="required">*</span></label>
							<input type="email" class="input-text" name="account_email" id="account_email" placeholder="Email Address" value="<?php echo esc_attr( $user->user_email ); ?>" />
						</p>

						<p class="form-row form-row-wide col-xs-12 col-sm-6">
							<label for="password_current"><?php _e( 'Current Password (leave blank to leave unchanged)', 'woocommerce' ); ?></label>
							<input type="password" class="input-text" name="password_current" placeholder="Current Password" id="password_current" />
						</p>
						<p class="form-row form-row-wide col-xs-12 col-sm-6">
							<label for="password_1"><?php _e( 'New Password (leave blank to leave unchanged)', 'woocommerce' ); ?></label>
							<input type="password" class="input-text" name="password_1" id="password_1" placeholder="New Password" />
						</p>
						<p class="form-row form-row-wide col-xs-12 col-sm-6">
							<label for="password_2"><?php _e( 'Confirm New Password', 'woocommerce' ); ?></label>
							<input type="password" class="input-text" name="password_2" id="password_2" placeholder="Confirm Password" />
						</p>

						<?php do_action( 'woocommerce_edit_account_form' ); ?>

						<p class="col-xs-12">
							<?php wp_nonce_field( 'save_account_details' ); ?>
							<input type="submit" class="button btn" name="save_account_details" value="<?php esc_attr_e( 'Save changes', 'woocommerce' ); ?>" />
							<input type="hidden" name="action" value="save_account_details" />
						</p>

						<?php do_action( 'woocommerce_edit_account_form_end' ); ?>

					</form>

				</div>
			</div>
		</div>
	</div>
</section>