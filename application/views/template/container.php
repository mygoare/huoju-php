<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <script type="text/javascript" src="<?php echo base_url('assets'); ?>/bower_components/pace/pace.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/bower_components/pace/themes/blue/pace-theme-minimal.css" />
    <!-- UiKit Css -->
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/bower_components/uikit/css/uikit.css" />
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/custom.css" />
    <title>Uikit example</title>
</head>
<body>
<?php $this->load->view('template/header'); ?>
<?php $this->load->view($content); ?>
<?php $this->load->view('template/footer'); ?>
<script src="<?php echo base_url('assets'); ?>/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/bower_components/uikit/js/uikit.min.js"></script>
</body>
</html>