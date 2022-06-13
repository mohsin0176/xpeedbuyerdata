
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Submission</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script type = "text/javascript" src="validate.js"></script>
  <script type="text/javascript" src="search.js"></script>
</head>
<body>
<div class="container">
<div class="card-body">
<div class="row">
<div class="col-sm-4" style="border: 1px solid gold;padding:10px; margin: 5px;">
  <h4>Form Submission:</h4>
 <form action="#" method="post" enctype="multipart/form-data" >
  <div class="form-group">
    <label for="id">ID:</label>
    <input type="text" class="form-control" id="id" name="id">
  </div>
  <div class="form-group">
    <label for="amount">Amount:</label>
    <input type="text" class="form-control" id="amount" name="amount">
  </div>
  <div class="form-group">
    <label for="buyer">Buyer:</label>
    <input type="text" class="form-control" id="buyer" name="buyer" >
  </div>
  <div class="form-group">
    <label for="receipt-id">Receipt-ID:</label>
    <input type="text" class="form-control" id="receipt-id" name="receipt-id">
  </div>
  <div class="form-group">
    <label for="items">Items:</label>
    <input type="text" class="form-control" id="items" name="items">
  </div>
  <div class="form-group">
    <label for="buyer-email">Buyer-Email:</label>
    <input type="email" class="form-control" id="buyer-email" name="buyer-email">
  </div>
  <div class="form-group">
    <label for="buyer-ip">Buyer-IP:</label>
    <input type="text" class="form-control" id="buyer-ip" name="buyer-ip" value="<?php echo $_SERVER['REMOTE_ADDR'];?>">
  </div>
  <div class="form-group">
    <label for="note">Note:</label>
    <textarea id="note" name="note" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="city">City:</label>
    <input type="text" class="form-control" id="city" name="city">
  </div>
  <div class="form-group">
    <label for="phone">Phone:</label>
    <div class="row" style="margin: 5px;">
    <select id="phone-code" name="phone-code" class="form-control col-sm-3">
    <?php
    include('db-connection.php');
    $database = new Database();
    $database->connect_db();
    $result = $database->read();
    while($r = mysqli_fetch_assoc($result)){
    ?>  
    <option value="<?php echo '+'.$r['code']; ?>"><?php echo "+".$r['code']; ?></option>
    </select>
    <?php
    }
    ?>  
    </select>
    <input type="text" class="form-control col-sm-9 col-sm-offset-1" id="phone" name="phone">
    </div>
  </div>
  <div class="form-group">
    <label for="hash-key">Hash-Key:</label>
    <input type="text" class="form-control" id="hash-key" name="hash-key">
  </div>
  <div class="form-group">
    <label for="entry-at">Entry-At:</label>
    <input type="date" class="form-control" id="entry-at" name="entry-at">
  </div>
  <div class="form-group">
    <label for="entry-by">Entry-By:</label>
    <input type="text" class="form-control" id="entry-by" name="entry-by" placeholder="Place 0 for Admin and others for members">
  </div>
  <button type="submit" class="btn btn-primary" id="submit">Submit</button>
</form> 
</div>  
<div class="col-sm-7 col-sm-offset-1" style="border: 1px solid gold;padding: 10px;margin: 5px;">
<h4>Find Report:</h4>
<form action="" method="post" enctype="multipart/form-data" >
<div class="form-group">
    <label for="search-by-id">Search By ID:</label>
    <input type="text" class="form-control" id="search-by-id" name="search-by-id">
</div>  
<div class="form-group">
    <label for="search-by-date">Search By Date:</label>
    <input type="text" class="form-control" id="search-by-date" name="search-by-date">
</div>
<button type="submit" class="btn btn-success" id="search" name="search">Search</button>
</form>
<p>Receipt-ID : R_ID</p>
<p>Buyer-Email : B.E.</p>
<p>Buyer-IP : B.I.</p>
<p>Hash-Key : H.K.</p>
<p>Entry-At : E.A.</p>
<p>Entry-By : E.B.</p>

<table id="table">
<thead><td>ID</td><td>Amount</td><td>Buyer</td><td>R-ID</td><td>Items</td><td>B.E.</td><td>B.I.</td><td>Note</td><td>City</td><td>Phone</td><td>H.K.</td><td>E.A.</td><td>E.B.</td></thead>
<tbody></tbody>  
</table>
</div>  
</div>
</div>
</div>

</body>
</html>
