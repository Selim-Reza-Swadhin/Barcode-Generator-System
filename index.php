<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP Barcode Generator Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-3.5.0.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body  style="background-color:darkolivegreen">

<div class="container">
  <div style="margin: 10%;">
  	<h2 class="text-center">PHP BARCODE GENERATOR</h2>
  	<form class="form-horizontal" method="post" action="barcode.php" target="_blank">
  	<div class="form-group">
      <label class="control-label col-sm-2" for="product">Product:</label>
      <div class="col-sm-10">
        <input autocomplete="ON" type="text" class="form-control" id="product" name="product" required="" autofocus>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="product_id">Product ID:</label>
      <div class="col-sm-10">
        <input autocomplete="ON" type="text" class="form-control" id="product_id" name="product_id" required="" autofocus>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="rate">Price|Rate</label>
      <div class="col-sm-10">          
        <input autocomplete="ON" type="text" class="form-control" id="rate"  name="rate" required="" autofocus>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="print_qty">Barcode Quantity</label>
      <div class="col-sm-10">          
        <input autocomplete="ON" type="print_qty" class="form-control" id="print_qty"  name="print_qty" required="" autofocus>
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
  </div>
</div>

</body>
</html>
