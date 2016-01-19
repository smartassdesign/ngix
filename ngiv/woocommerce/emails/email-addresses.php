<?php
/**
 * Email Addresses
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates/Emails
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?><table cellspacing="0" cellpadding="0" style="width: 100%; vertical-align: top;" border="0">

	<tr>

		<td valign="top" width="50%">

			<p style="font-family: Arial; font-size: 14px; line-height: 150%; text-align: left; color:#262626;"><strong>Billing Address:</strong><br>
			<?php echo $order->get_formatted_billing_address(); ?></p>

		</td>

		<?php if ( get_option( 'woocommerce_ship_to_billing_address_only' ) === 'no' && ( $shipping = $order->get_formatted_shipping_address() ) ) : ?>

		<td valign="top" width="50%">

			<p><strong><?php _e( 'Shipping address', 'woocommerce' ); ?></strong></p>

			<p><?php echo $shipping; ?></p>

		</td>

		<?php endif; ?>

	</tr>

</table>