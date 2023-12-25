<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.9.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_cart' ); ?>

<!-- CART TITLE -->
<div class="col-12 checkout-title">
	<h2 class="fs-2 fw-700 text-gray-700 mb-3">سفارش شما</h2>
	<div class="checkout-divider bg-primary-100 mb-6"></div>
</div>

<form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
	<?php do_action( 'woocommerce_before_cart_table' ); ?>

	<div class="row shop_table shop_table_responsive cart woocommerce-cart-form__contents">
		<div class="row">
			<?php do_action( 'woocommerce_before_cart_contents' ); ?>

		<!-- CART ITEM CONTAINER-->
		<div class="col-12">
			<?php foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ): ?>
				<?php $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key ); ?>
				<?php $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key ); ?>
				<?php $product_name = apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ); ?>
				<?php if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ): ?>
					<?php $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key ); ?>
					<div class="row woocommerce-cart-form__cart-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">

						<?php $featured_image_id = get_post_thumbnail_id($product_id); ?>
						<?php $image_url = wp_get_attachment_url($featured_image_id); ?>
						<?php $image_alt = get_post_meta($featured_image_id, '_wp_attachment_image_alt', true); ?>

						<!-- Product Image -->
						<div class="col-12 col-md-3">
							<img class="w-100 product-image mb-4" src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
						</div>

						<!-- Product Info's -->
						<div class="col-12 col-md-9">

							<!-- Product Title -->
							<h4 class="fs-2 text-black-500 fw-700"><?php echo $product_name; ?></h4>

							<!-- Product Excerpt -->
							<p class="fs-4 text-gray-500 fw-400">هیچ جای شکی نیست که ترکیب چوب با هر سبک دکوری از پیشخوان فروشگاه شما، جذاب خواهد شد. برای اطلاعات بیشتر کلیک کنید.</p>
							
							
							<div class="row">

								<!-- Product Price -->
								<div class="font-pinar fw-700 fs-2 text-success col-12 col-md-6" data-title="<?php esc_attr_e( 'Price', 'woocommerce' ); ?>">
									<?php echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok. ?>
								</div>

								<!-- Product Quantity -->
								<div class="col-12 col-md-6 d-flex align-items-center justify-content-end" data-title="<?php esc_attr_e( 'Quantity', 'woocommerce' ); ?>">
									
									<?php
										echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
											'woocommerce_cart_item_remove_link',
											sprintf(
												'<a href="%s" class="remove ms-3" aria-label="%s" data-product_id="%s" data-product_sku="%s">
												<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M21.0697 5.73C19.4597 5.57 17.8497 5.45 16.2297 5.36V5.35L16.0097 4.05C15.8597 3.13 15.6397 1.75 13.2997 1.75H10.6797C8.34967 1.75 8.12967 3.07 7.96967 4.04L7.75967 5.32C6.82967 5.38 5.89967 5.44 4.96967 5.53L2.92967 5.73C2.50967 5.77 2.20967 6.14 2.24967 6.55C2.28967 6.96 2.64967 7.26 3.06967 7.22L5.10967 7.02C10.3497 6.5 15.6297 6.7 20.9297 7.23C20.9597 7.23 20.9797 7.23 21.0097 7.23C21.3897 7.23 21.7197 6.94 21.7597 6.55C21.7897 6.14 21.4897 5.77 21.0697 5.73Z" fill="#F04438"/>
												<path opacity="0.3991" d="M19.2297 8.64C18.9897 8.39 18.6597 8.25 18.3197 8.25H5.67975C5.33975 8.25 4.99975 8.39 4.76975 8.64C4.53975 8.89 4.40975 9.23 4.42975 9.58L5.04975 19.84C5.15975 21.36 5.29975 23.26 8.78975 23.26H15.2097C18.6997 23.26 18.8398 21.37 18.9497 19.84L19.5697 9.59C19.5897 9.23 19.4597 8.89 19.2297 8.64Z" fill="#F04438"/>
												<path fill-rule="evenodd" clip-rule="evenodd" d="M9.58008 17.5C9.58008 17.0858 9.91586 16.75 10.3301 16.75H13.6601C14.0743 16.75 14.4101 17.0858 14.4101 17.5C14.4101 17.9142 14.0743 18.25 13.6601 18.25H10.3301C9.91586 18.25 9.58008 17.9142 9.58008 17.5Z" fill="#F04438"/>
												<path fill-rule="evenodd" clip-rule="evenodd" d="M8.75 13.5C8.75 13.0858 9.08579 12.75 9.5 12.75H14.5C14.9142 12.75 15.25 13.0858 15.25 13.5C15.25 13.9142 14.9142 14.25 14.5 14.25H9.5C9.08579 14.25 8.75 13.9142 8.75 13.5Z" fill="#F04438"/>
												</svg>
												</a>',
												esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
												/* translators: %s is the product name */
												esc_attr( sprintf( __( 'Remove %s from cart', 'woocommerce' ), wp_strip_all_tags( $product_name ) ) ),
												esc_attr( $product_id ),
												esc_attr( $_product->get_sku() )
											),
											$cart_item_key
										);
									?>

									<?php
									if ( $_product->is_sold_individually() ) {
										$min_quantity = 1;
										$max_quantity = 1;
									} else {
										$min_quantity = 0;
										$max_quantity = $_product->get_max_purchase_quantity();
									}

									
									$product_quantity = '<div class="input-quantity-product"><button type="button" class="minus">-</button>';
									$product_quantity .= woocommerce_quantity_input(
										array(
											'input_name'   => "cart[{$cart_item_key}][qty]",
											'input_value'  => $cart_item['quantity'],
											'max_value'    => $max_quantity,
											'min_value'    => $min_quantity,
											'product_name' => $product_name,
											'classes'  => 'pe-none input-text qty text',
										),
										$_product,
										false
									);
									$product_quantity .= '<button type="button" class="plus">+</button></div>';
									

									echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
									?>
								</div>
							</div>
						</div>

					</div>
					<hr>
				<?php endif; ?>
			<?php endforeach; ?>
		</div>

		<!-- CART SUBTOTAL, TOTAL & SHIPPING METHOD -->
		<div class="col-12">

			<!-- Subtotal -->
			<div class="cart-subtotal d-flex justify-content-between pb-6">
				<span class="title fs-2 text-gray-500 fw-600">جمع جزء</span>
				<span class="amount fs-3 text-gray-800 fw-500" data-title="<?php esc_attr_e( 'Subtotal', 'woocommerce' ); ?>">
				<?php wc_cart_totals_subtotal_html(); ?>
				</span>
			</div>

			<!-- Coupon -->
			<?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
				<div class="cart-subtotal d-flex justify-content-between pb-6 cart-discount coupon-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
					<span class="title fs-2 text-gray-500 fw-600"><?php wc_cart_totals_coupon_label( $coupon ); ?></span>
					<span class="amount fs-3 text-gray-800 fw-500"><?php wc_cart_totals_coupon_html( $coupon ); ?></span>
				</div>
			<?php endforeach; ?>

			<!-- Shipping -->
			<div class="cart-shipping d-flex justify-content-between pb-6">
				<span class="title fs-2 text-gray-500 fw-600">حمل و نقل</span>
				<span class="amount fs-3 text-success fw-500">
					<?php
					$current_shipping_method = WC()->session->get( 'chosen_shipping_methods' );
					$packages = WC()->shipping()->get_packages();
					$package = $packages[0];
					$available_methods = $package['rates'];
					
					foreach ($available_methods as $key => $method) {
						if ($current_shipping_method[0] == $method->id) {
							$shipping_label = $method->label;
							echo $shipping_label;
						}
					}
					?>
				</span>
			</div>

			<!-- Total -->
			<div class="cart-total d-flex justify-content-between pt-6">
				<span class="title fs-2 text-gray-500 fw-600">مجموع</span>
				<span class="amount display-5 text-gray-800 fw-700"><?php wc_cart_totals_order_total_html(); ?></span>
			</div>

		</div>

			<?php do_action( 'woocommerce_cart_contents' ); ?>

			<tr>
				<td colspan="6" class="actions">

					<?php if ( wc_coupons_enabled() ) { ?>
						<div class="coupon">
							<label for="coupon_code" class="screen-reader-text"><?php esc_html_e( 'Coupon:', 'woocommerce' ); ?></label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" /> <button type="submit" class="button<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>"><?php esc_html_e( 'Apply coupon', 'woocommerce' ); ?></button>
							<?php do_action( 'woocommerce_cart_coupon' ); ?>
						</div>
					<?php } ?>

					<button type="submit" class="button<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>"><?php esc_html_e( 'Update cart', 'woocommerce' ); ?></button>

					<?php do_action( 'woocommerce_cart_actions' ); ?>

					<?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
				</td>
			</tr>

			<?php do_action( 'woocommerce_after_cart_contents' ); ?>
		</div>
	</div>
	<?php do_action( 'woocommerce_after_cart_table' ); ?>
</form>

<?php do_action( 'woocommerce_before_cart_collaterals' ); ?>

<!-- <div class="cart-collaterals"> -->
	<?php
		/**
		 * Cart collaterals hook.
		 *
		 * @hooked woocommerce_cross_sell_display
		 * @hooked woocommerce_cart_totals - 10
		 */
		//do_action( 'woocommerce_cart_collaterals' );
	?>
<!-- </div> -->

<?php do_action( 'woocommerce_after_cart' ); ?>





