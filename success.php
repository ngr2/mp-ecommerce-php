<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<p class="jumbotron">
  Muchas gracias por su compra!<br />
  Su pago ID <?=$_REQUEST['payment_id']?$_REQUEST['payment_id']:$_REQUEST['collection_id)']?> ha sido aprobado.<br />
  Método de pago: <?=$_REQUEST['payment_method_id']?>.<br />
  Referencia Externa: <?=$_REQUEST['external_reference']?>.<br />
</p>
