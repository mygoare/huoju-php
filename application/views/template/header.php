    <header class="header">
    <nav class="uk-navbar">
        <ul class="uk-navbar-nav">
            <li class="uk-active logo"><a href="<?php echo base_url(); ?>"><i class=""></i> Huoju</a></li>
            <li class="uk-hidden-mini"><a href="<?php echo base_url(); ?>"><i class="uk-icon-home"></i> <?php echo lang('header_index') ?></a></li>
            <li class="uk-hidden-mini"><a href="<?php echo base_url(); ?>events"><i class="uk-icon-calendar"></i> Events</a></li>
        </ul>
        <div class="uk-navbar-flip">
            <ul class="uk-navbar-nav">
                <li class="uk-hidden-mini"><a href="<?php echo base_url(); ?>user/login">Login/Sign up <i class="uk-icon-user"></i></a></li>
                <li class="uk-visible-mini"><a data-uk-offcanvas="{target: '#mobile-nav-bar'}"><i class="uk-icon-bars"></i></a></li>
            </ul>
        </div>
    </nav>
    </header>
    <div id="mobile-nav-bar" class="uk-offcanvas">
    <div class="uk-offcanvas-bar uk-offcanvas-bar-flip">
        <ul class="uk-nav uk-nav-offcanvas" data-uk-nav>
            <li><a href="<?php echo base_url(); ?>"><i class="uk-icon-home"></i> Home</a></li>
            <li><a href="<?php echo base_url(); ?>events"><i class="uk-icon-calendar"></i> Events</a></li>
            <li class="uk-nav-divider"></li>
            <li><a href="<?php echo base_url(); ?>~mygoare"><i class="uk-icon-user"></i> Profile</a></li>
            <li><a href="<?php echo base_url(); ?>user/settings"><i class="uk-icon-cog"></i> Settings</a></li>
            <li><a href="<?php echo base_url(); ?>user/settings#change_password"><i class="uk-icon-edit"></i> Change Password</a></li>
            <li><a href=""><i class="uk-icon-sign-out"></i> Sign Out</a></li>
        </ul>
    </div>
    </div>