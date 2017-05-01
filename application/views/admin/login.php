<!DOCTYPE html>
<html>
  <base href="<?php echo base_url('assets/user/')?> /">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="../css/bootstrap.css">
    <link rel="stylesheet" media="screen" href="../css/custom.css">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <title>Minimum Bootstrap HTML Skeleton</title>
  </head>
  <body>

    <div style="width:300px; margin:auto;" class="login thumbnail" >

      <form action="" method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Username</label>
        <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Username">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
      </form>

    </div>
  </body>
</html>
