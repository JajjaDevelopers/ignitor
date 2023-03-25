<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="<?=base_url("assets/dashboard/vend/bootstrap/css/bootstrap.min.css")?>">
  <link href="<?=base_url("assets/toastr/toastr.css")?>" rel="stylesheet">
</head>
<body>
  <?=$this->renderSection("login");?>
  <script src="<?=base_url("assets/dashboard/vend/bootstrap/js/bootstrap.bundle.min.js")?>"></script>
  <script src="<?=base_url("assets/jquery-3.6.0.min.js")?>"></script>
  <script src="<?=base_url("assets/toastr/toastr.js")?>"></script>
  <?=$this->renderSection("script")?>
</body>
</html>