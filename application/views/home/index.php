<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <script type="text/javascript" src="<?php echo base_url('assets'); ?>/bower_components/pace/pace.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/bower_components/pace/themes/blue/pace-theme-minimal.css" />
    <!-- UiKit Css -->
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/bower_components/uikit/css/uikit.css" />
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/custom.css" />
    <title>Uikit example</title>
</head>
<body>
    <header class="header">
    <nav class="uk-navbar">
        <ul class="uk-navbar-nav">
            <li class="uk-active logo"><a href=""><i class=""></i> Huoju</a></li>
            <li><a href=""><i class="uk-icon-home"></i> <?php echo lang('home_index') ?></a></li>
            <li><a href="">Events</a></li>
        </ul>
        <div class="uk-navbar-flip">
            <ul class="uk-navbar-nav">
                <li><a href="">Login/Sugn up <i class="uk-icon-user"></i></a></li>
            </ul>
        </div>
    </nav>
    </header>

    <hr>
    <div class="uk-grid">
        <input class="uk-button uk-button-success uk-width-1-4" type="button" value="Click" />
        <button class="uk-button uk-button-danger uk-width-3-4">Danger</button>
    </div>

    <div class="uk-grid">
        <div class="uk-width-1-3 uk-alert-success">one</div>
        <div class="uk-width-1-3 uk-alert-warning uk-text-center"><code>two</code></div>
        <div class="uk-width-1-3 uk-alert-danger">three</div>
    </div>
    <footer class="footer uk-clearfix">
        <div class="uk-float-left">
        <span class="copyright uk-hidden-small"><i class="uk-icon-copyright"></i> Huoju. Built with <i class="uk-icon-heart uk-text-danger"></i></span>
        <a class="menu" href="">Language</a>
        <a class="menu" href="about">About</a>
        <a class="menu" href="faq">FAQ</a>
        <a class="menu" href="terms">Terms</a>
        </div>
        <div class="uk-float-right">
            <i class="uk-icon-wechat"></i>
        </div>
    </footer>
</body>
</html>