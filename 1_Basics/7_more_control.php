<?php

// switch case

$paymentStatus = 'rejected';
switch($paymentStatus) {
    case 'paid':
        echo 'Payment done.';
        break;
    case 'declined':
    case 'rejected':
        echo 'Payment declined';
        break;
    case 'pending':
        echo 'Payment pending';
        break;
    default:
        echo 'Unknown Payment';
}
echo '</br>';

// match case

$paymentMethod = 'paytm';
match($paymentMethod) {
    'paypal' => print 'payment done using paypal',
    'paytm' => print 'payment done using paytm',
    'GPay' => print 'payment done using GPay',
};
echo '</br>';

// require, require_once, include, include_once
require ('./partials/demo.php');
$x++;
echo '</br>';
echo $x;
echo '</br>';
require ('./partials/demo.php');
?>
