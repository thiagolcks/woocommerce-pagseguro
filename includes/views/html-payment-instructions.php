<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! isset( $data['type'] ) ) {
	return;
}

?>

<?php if ( 2 == $data['type'] ) : ?>

	<div class="woocommerce-message">
		<span><a class="button" href="<?php echo esc_url( $data['link'] ); ?>" target="_blank"><?php _e( 'Pay the Banking Ticket', 'woocommerce-pagseguro' ); ?></a><?php _e( 'Please click in the following button to view your Banking Ticket.', 'woocommerce-pagseguro' ); ?><br /><?php _e( 'You can print and pay in your internet banking or in a lottery retailer.', 'woocommerce-pagseguro' ); ?><br /><?php _e( 'After we receive the ticket payment confirmation, your order will be processed.', 'woocommerce-pagseguro' ); ?></span>
	</div>

<?php elseif ( 3 == $data['type'] ) : ?>

	<div class="woocommerce-message">
		<span><a class="button" href="<?php echo esc_url( $data['link'] ); ?>" target="_blank"><?php _e( 'Pay at your bank', 'woocommerce-pagseguro' ); ?></a><?php _e( 'Please use the following button to make the payment in your bankline.', 'woocommerce-pagseguro' ); ?><br /><?php _e( 'After we receive the confirmation from the bank, your order will be processed.', 'woocommerce-pagseguro' ); ?></span>
	</div>

<?php else : ?>

	<div class="woocommerce-message">
		<span><?php echo sprintf( __( 'You just made the payment in %s using the %s.', 'woocommerce-pagseguro' ), '<strong>' . $data['installments'] . 'x</strong>', '<strong>' . $data['method'] . '</strong>' ); ?><br /><?php _e( 'As soon as the credit card operator confirm the payment, your order will be processed.', 'woocommerce-pagseguro' ); ?></span>
	</div>

<?php
endif;
