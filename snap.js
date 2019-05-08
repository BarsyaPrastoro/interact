<html>
  <head>
    <script type="text/javascript"
            src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="XXXXX CHANGE WITH YOUR CLIENT KEY XXXXXX"></script> 
  </head>
  <body>
    <button id="pay-button">Pay!</button>
    <script type="text/javascript">
      var payButton = document.getElementById('pay-button');
      payButton.addEventListener('click', function () {
        snap.pay('<?php echo $snap_Token; ?>'); // store your snap token here
      });
    </script>
  </body>
</html>