<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Simple Login Template | PrepBootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets_login/bootstrap/css/bootstrap.min.css") ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets_login/font-awesome/css/font-awesome.min.css") ?>" />

    <script type="text/javascript" src="<?php echo base_url("assets_login/js/jquery-1.10.2.min.js") ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets_login/bootstrap/js/bootstrap.min.js") ?>"></script>
</head>
<body>

<div class="container">

<div class="page-header">
    <h1 style="text-align: center;"><img style="width: 50%" src="<?php echo base_url("images/ScriptGurus Name.png") ?>" /></h1>
</div>

<!-- Simple Login - START -->
<form class="col-md-12" method="POST" action="<?php echo site_url("index/checklogin"); ?>">
    <div class="form-group">
        <input name="username" type="text" class="form-control input-lg" placeholder="Username">
    </div>
    <div class="form-group">
        <input name="password" type="password" class="form-control input-lg" placeholder="Password">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-lg btn-block">Sign In</button>
        <!--span><a href="#">Need help?</a></span>
        <span class="pull-right"><a href="#">New Registration</a></span-->
    </div>
</form>
<!-- Simple Login - END -->

</div>

</body>
</html>