<?php
require_once 'vendor/autoload.php';

$client = new \LemonSqueezy\LemonSqueezy();
$client->authenticate('yourApiToken'); // Replace with your actual token

// Get the donation amount from the form
$amount = $_POST['amount'];

// Define the store and product ID (this is just an example; adjust according to your setup)
$storeId = 12345;
$productId = 67890;

// Create a checkout for the donation
$checkout = $client->checkout();

// Create a checkout session with the amount as a product variant
$checkoutSession = $checkout->createCheckout([
    'store_id' => $storeId,
    'product_id' => $productId,
    'quantity' => 1,
    'custom_fields' => [
        'donation_amount' => $amount,
    ],
]);

// Redirect the user to the LemonSqueezy checkout page
header("Location: " . $checkoutSession->url);
exit();
?>
