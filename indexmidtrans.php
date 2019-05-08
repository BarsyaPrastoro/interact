<?php
require_once(dirname(__FILE__) . '/veritrans-php-master/Veritrans.php');



//Set Your server key
Veritrans_Config::$serverKey = "SB-Mid-server-xmrSqP0_04cvjnDiHXZiztTX";

// Uncomment for production environment
// Veritrans_Config::$isProduction = true;

Veritrans_Config::$isSanitized = true;
Veritrans_Config::$is3ds = true;

// Fill transaction details
$transaction_details = array(
  'order_id' => rand(),
  'gross_amount' => 145000, // no decimal allowed
);

// Mandatory for Mandiri bill payment and BCA KlikPay
// Optional for other payment methods
$item1_details = array(
    'id' => $_GET['idevent'],
    'price' => $_GET['harga'],
    'quantity' => 1,
    'name' => $_GET['nama']
);



$item_details = array ($item1_details);

// Optional
$billing_address = array(
    'first_name'    => "Andri",
    'last_name'     => "Litani",
    'address'       => "Mangga 20",
    'city'          => "Jakarta",
    'postal_code'   => "16602",
    'phone'         => "081122334455",
    'country_code'  => 'IDN'
);

// Optional
$shipping_address = array(
    'first_name'    => "Obet",
    'last_name'     => "Supriadi",
    'address'       => "Manggis 90",
    'city'          => "Jakarta",
    'postal_code'   => "16601",
    'phone'         => "08113366345",
    'country_code'  => 'IDN'
);

$customer_details = array(
    'first_name'    => "Andri", //optional
    'last_name'     => "Litani", //optional
    'email'         => "andri@litani.com", //mandatory
    'phone'         => "081122334455", //mandatory
    'billing_address'  => $billing_address, //optional
    'shipping_address' => $shipping_address //optional
);

// Fill transaction details
$transaction = array(
    'transaction_details' => $transaction_details,
    'customer_details' => $customer_details,
    'item_details' => $item_details,
);

$snapToken = Veritrans_Snap::getSnapToken($transaction);
?>

<html>
<head>
    <script type="text/javascript"
    src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="SB-Mid-client-NyZhTcg8BJgtHY9u"></script>

    <style type="text/css">
        #pay-button{
            padding: 15px;
            margin-left: 47%;
            margin-top: 20%;
            background-color: khaki;
            box-shadow: 10px 10px 10px 10px solid black;
            border-radius: 10%;
            font-size: 50px;
        }
        #pay-button:hover{
            transition: 0.2s ease-in-out;
            background-color: yellow;
        }
    </style> 
</head>
<body>
    <button id="pay-button">Pay!</button>
    <script type="text/javascript">
      var payButton = document.getElementById('pay-button');
      payButton.addEventListener('click', function () {
        snap.pay('<?php echo $snapToken; ?>'); // store your snap token here
    });
  </script>
</body>
</html>