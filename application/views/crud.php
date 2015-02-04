<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
 
<?php 
foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
 
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
 
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
 
<style type='text/css'>
body
{
    font-family: Arial;
    font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
    text-decoration: underline;
}
</style>
</head>
<body>
<!-- Beginning header -->
    <div>
        
        <div style="text-align: center;" class="page-header">
            <h1 style="text-align: center;"><img style="width: 50%" src="<?php echo base_url("images/ScriptGurus Name.png") ?>" /></h1>
            
            <a href='<?php echo site_url('index/certs')?>'>Certificates</a> | 
            <a href='<?php echo site_url('index/logout')?>'>Logout</a>
        </div>
        
    </div>
<!-- End of header-->
    <div style='height:20px;'></div>  
    <div>
        <?php echo $output; ?>
 
    </div>
<!-- Beginning footer -->
<!-- div>Footer</div -->
<!-- End of Footer -->
</body>
</html>