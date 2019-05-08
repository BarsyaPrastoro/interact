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



if ($_POST) {
    $total = 0;

        // form submitted
    if( !empty( $_POST['choice'] ) && is_array( $_POST['choice'] ) )
    {
        $i = 0;
        foreach ($_POST["choice"] as $item) {
            $id       = trim( $item['id'] );
            $name     = trim( $item['name'] );
            $price    = floatval( $item['price'] );
            $quantity = intval( $item['quantity'] );

            if( isset( $item['checked'] ) && $quantity > 0 )
            {
                $item_details = array(
                    'id' => $id,
                    'price' => $price,
                    'quantity' => $quantity,
                    'name' => $name
                );
                $items_detail[$i] = $item_details;
            }
            $i += 1;
        }
    }
        // echo json_encode($items_detail);
    // Mandatory for Mandiri bill payment and BCA KlikPay
    // Optional for other payment methods
    // $item1_details = array(
    //     'id' => 'a1',
    //     'price' => 50000,
    //     'quantity' => 3,
    //     'name' => "Apple"
    //     );

    // // Optional
    // $item2_details = array(
    //     'id' => 'a2',
    //     'price' => 45000,
    //     'quantity' => 1,
    //     'name' => "Orange"
    //     );

    // $item_details = array ($item1_details, $item2_details);

    // Optional

    $billing_address = array(
        'first_name'    => $_POST["namadepan"],
        'last_name'     => $_POST["namabelakang"],
        'address'       => $_POST["alamat"],
        'city'          => $_POST["kota"],
        'postal_code'   => $_POST["kodepos"],
        'phone'         => $_POST["notelp"]
        //'country_code'  => $_POST["negara"]
    );

    // Optional
    $shipping_address = array(
        'first_name'    => $_POST["namadepans"],
        'last_name'     => $_POST["namabelakangs"],
        'address'       => $_POST["alamats"],
        'city'          => $_POST["kotas"],
        'postal_code'   => $_POST["kodeposs"],
        'phone'         => $_POST["notelps"]
        //'country_code'  => $_POST["negaras"]
    );

    $customer_details = array(
        'first_name'    => $_POST["namadepand"], //optional
        'last_name'     => $_POST["namabelakangd"], //optional
        'email'         => $_POST["email"], //mandatory
        'phone'         => $_POST["notelpd"], //mandatory
        'billing_address'  => $billing_address, //optional
        'shipping_address' => $shipping_address //optional
    );

    // Fill transaction details
    $transaction = array(
        'transaction_details' => $transaction_details,
        'customer_details' => $customer_details,
        'item_details' => $items_detail,
    );

    $snapToken = Veritrans_Snap::getSnapToken($transaction);
}

?>

<html>
<head>
    <script type="text/javascript"
    src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="SB-Mid-client-NyZhTcg8BJgtHY9u"></script> 
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body class="w3-container">
    <form class="w3-panel" action="checkout.php" method="post">
        <div class="w3-container">
          <h2>INTERACT</h2>
          
          <div class="w3-display-topmiddle w3-dropdown-hover">

            <h2 class="w3-button w3-round-xlarge w3-panel " style="text-shadow:2px 3px 0 #444">ITEM LIST  <i class="fa fa-arrow-down"></i></h2>
            <div class="w3-dropdown-content w3-bar-block w3-border">
              <div class="w3-container">
                <img src="data:image/webp;base64,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" height="80px"/>
                <div class="w3-container">
                    <input type="checkbox" name="choice[0][checked]" />
                    <span>xiaomi note 6, harga : Rp2.000.000,00</span>
                    <input type="hidden" name="choice[0][id]" value="a1" />
                    <input type="number" name="choice[0][quantity]" value="1" />
                    <input type="hidden" name="choice[0][price]" value="2000000" />
                    <input type="hidden" name="choice[0][name]" value="xiaomi note 6" />
                </div>
            </div>
            <div class="w3-container">
                <img src="https://api.sonymobile.com/files/xperia-Z1-hero-black-1240x840-3c449514e1daf8b0652a5dc235530ebc.jpg" height="80px"/>
                <div class="w3-container">


                    <input type="checkbox" name="choice[1][checked]" />
                    <span>xperia z, harga : Rp5.000.000,00</span>
                    <input type="hidden" name="choice[1][id]" value="a2" />
                    <input type="number" name="choice[1][quantity]" value="1" />
                    <input type="hidden" name="choice[1][price]" value="5000000" />
                    <input type="hidden" name="choice[1][name]" value="xperia z" />
                </div>
            </div>
            <div class="w3-container">
                <img src="http://www.three.co.uk/static/images/device_pages/MobileVersion/Apple/iPhone_Xs_Max/Gold/desktop/1.jpg" height="80px"/>
                <div class="w3-container">
                    <input type="checkbox" name="choice[2][checked]" />
                    <span>iphone xs max, harga : Rp25.000.000,00</span>
                    <input type="hidden" name="choice[2][id]" value="a3" />
                    <input class="" type="number" name="choice[2][quantity]" value="1" />
                    <input type="hidden" name="choice[2][price]" value="25000000" />
                    <input type="hidden" name="choice[2][name]" value="iphone xs max" />
                </div>
            </div>

        </div>
    </div>
</div>





<h2 class=" w3-panel w3-round-xlarge w3-grey">Shipping Address</h2>

<table class="w3-table">
    <tr>
        <td>
            Nama Depan
        </td>
        <td>
            : <input type="text" name="namadepans"/>
        </td>
    </tr>
    <tr>
        <td>
            Nama Belakang
        </td>
        <td>
            : <input type="text" name="namabelakangs"/>
        </td>
    </tr>
    <tr>
        <td>
            Alamat
        </td>
        <td>
            : <input type="text" name="alamats"/>
        </td>
    </tr>
    <tr>
        <td>
            Kota
        </td>
        <td>
            : <input type="text" name="kotas"/>
        </td>
    </tr>
    <tr>
        <td>
            Kode Pos
        </td>
        <td>
            : <input type="text" name="kodeposs"/>
        </td>
    </tr>
    <tr>
        <td>
            No.Telpon
        </td>
        <td>
            : <input type="text" name="notelps"/>
        </td>
    </tr>
    <tr>
        <td>
            Kode Negara
        </td>
        <td>
            : <input type="text" name="negaras"/>
        </td>
    </tr>
</table>


<!-- billing address -->

<h2 class=" w3-panel w3-round-xlarge w3-grey">Billing Address</h2>

<table class="w3-table">
    <tr>
        <td>
            Nama Depan
        </td>
        <td>
            : <input type="text" name="namadepan"/>
        </td>
    </tr>
    <tr>
        <td>
            Nama Belakang
        </td>
        <td>
            : <input type="text" name="namabelakang"/>
        </td>
    </tr>
    <tr>
        <td>
            Alamat
        </td>
        <td>
            : <input type="text" name="alamat"/>
        </td>
    </tr>
    <tr>
        <td>
            Kota
        </td>
        <td>
            : <input type="text" name="kota"/>
        </td>
    </tr>
    <tr>
        <td>
            Kode Pos
        </td>
        <td>
            : <input type="text" name="kodepos"/>
        </td>
    </tr>
    <tr>
        <td>
            No.Telpon
        </td>
        <td>
            : <input type="text" name="notelp"/>
        </td>
    </tr>
    <tr>
        <td>
            Kode Negara
        </td>
        <td>
            : <input type="text" name="negara"/>
        </td>
    </tr>
</table>

<h2 class=" w3-panel w3-round-xlarge w3-grey">Detail Kustomer</h2>

<table class="w3-table">
    <tr>
        <td>
            Nama Depan
        </td>
        <td>
            : <input type="text" name="namadepand"/>
        </td>
    </tr>
    <tr>
        <td>
            Nama Belakang
        </td>
        <td>
            : <input type="text" name="namabelakangd"/>
        </td>
    </tr>
    <tr>
        <td>
            Email
        </td>
        <td>
            : <input type="email" name="email"/>
        </td>
    </tr>
    <tr>
        <td>
            No.Telpon
        </td>
        <td>
            : <input type="text" name="notelpd"/>
        </td>
    </tr>
</table>

<input class=" w3-round-large w3-button w3-black" type="submit" name="">
</form>

<button style="margin-left: 17px;" class="w3-round-large w3-button w3-black" id="pay-button">Bayar</button>
<script type="text/javascript">
  var payButton = document.getElementById('pay-button');
  payButton.addEventListener('click', function () {
        snap.pay('<?php echo $snapToken; ?>'); // store your snap token here
    });
</script>
</body>
</html>