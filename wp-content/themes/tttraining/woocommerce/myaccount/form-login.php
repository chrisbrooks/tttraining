<?php
/**
 * Login Form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.2.6
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php do_action( 'woocommerce_before_customer_login_form' ); ?>

<section class="section form-login">
	<div class="container">
		<div class="row">

			<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
				<?php wc_print_notices(); ?>
			</div>

			<div class="login-forms">
				
				<div class="col2-set col-xs-12 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

					<div class="col2-set tab-container" id="customer_login">

						<ul class='etabs col-xs-12'>
							<li class='tab col-xs-6'><a href="#login">Login</a></li>
							
							<?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>
								<li class='tab col-xs-6'><a href="#register">Register</a></li>
							<?php endif; ?>

						</ul>

						<div class="col-xs-12">

							<div class="row tab-content-outer">

								<div class="tab-content">

									<div class="col-1" id="login">

										<!--<h2><?php _e( 'Login', 'woocommerce' ); ?></h2>-->

										<form method="post" class="login">

											<?php do_action( 'woocommerce_login_form_start' ); ?>

											<p class="form-row form-row-wide">
												<label for="username"><?php _e( 'Username or email address', 'woocommerce' ); ?> <span class="required">*</span></label>
												<input type="text" class="input-text" name="username" id="username" placeholder="Username or Email Address *" value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( $_POST['username'] ); ?>" />
											</p>
											<p class="form-row form-row-wide">
												<label for="password"><?php _e( 'Password', 'woocommerce' ); ?> <span class="required">*</span></label>
												<input class="input-text" type="password" name="password" id="password" placeholder="Password *" />
											</p>

											<?php do_action( 'woocommerce_login_form' ); ?>

											<p class="form-row">
												<?php wp_nonce_field( 'woocommerce-login' ); ?>
												<input type="submit" class="button btn" name="login" value="<?php esc_attr_e( 'Login', 'woocommerce' ); ?>" />
												<label for="rememberme" class="inline">
													<input name="rememberme" type="checkbox" id="rememberme" value="forever" /> <?php _e( 'Remember me', 'woocommerce' ); ?>
												</label>
											</p>
											<p class="lost_password">
												<a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php _e( 'Lost your password?', 'woocommerce' ); ?></a>
											</p>

											<?php do_action( 'woocommerce_login_form_end' ); ?>

										</form>

									</div>

									<?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>

										<div class="col-2" id="register">

											<!--<h2><?php _e( 'Register', 'woocommerce' ); ?></h2>-->

											<form method="post" class="register">

												<?php do_action( 'woocommerce_register_form_start' ); ?>

												<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

													<p class="form-row form-row-wide">
														<label for="reg_username"><?php _e( 'Username', 'woocommerce' ); ?> <span class="required">*</span></label>
														<input type="text" class="input-text" name="username" id="reg_username" placeholder="Username *" value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( $_POST['username'] ); ?>" />
													</p>

												<?php endif; ?>

												<p class="form-row form-row-wide">
													<label for="reg_email"><?php _e( 'Email address', 'woocommerce' ); ?> <span class="required">*</span></label>
													<input type="email" class="input-text" name="email" id="reg_email" placeholder="Email Address *" value="<?php if ( ! empty( $_POST['email'] ) ) echo esc_attr( $_POST['email'] ); ?>" />
												</p>

												<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

													<p class="form-row form-row-wide">
														<label for="reg_password"><?php _e( 'Password', 'woocommerce' ); ?> <span class="required">*</span></label>
														<input type="password" class="input-text" name="password" placeholder="Password *" id="reg_password" />
													</p>

												<?php endif; ?>

												<!-- Spam Trap -->
												<div style="<?php echo ( ( is_rtl() ) ? 'right' : 'left' ); ?>: -999em; position: absolute;"><label for="trap"><?php _e( 'Anti-spam', 'woocommerce' ); ?></label><input type="text" name="email_2" id="trap" tabindex="-1" /></div>

												<?php do_action( 'woocommerce_register_form' ); ?>
												<?php do_action( 'register_form' ); ?>

												<p class="form-row">
													<?php wp_nonce_field( 'woocommerce-register' ); ?>
													<input type="submit" class="button btn" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>" />
												</p>

												<?php do_action( 'woocommerce_register_form_end' ); ?>

											</form>

										</div>

									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
						

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
