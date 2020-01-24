<header class="clearfix">
    <div class="container">

        <div class="header-wrap-top right">
            <ul class="top-menu">
                <li><a href="https://www.linkedin.com/in/charles-marceau-9881a285/" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
            </ul>
        </div>

        <div class="header-wrap">
            <a class="left" href="<?php echo BASE_URL; ?>">
                <img class="logo" src="<?php echo BASE_URL; ?>www/images/cm_logo.png">
            </a>
            <nav class="main-menu right">
                <ul>
                    <li><a class="<?= (PAGE == 'home' ? 'active' : ''); ?>" href="<?php echo BASE_URL; ?>">Intro</a></li>
                    <li><a class="<?= (PAGE == 'sites' ? 'active' : ''); ?>" href="<?php echo BASE_URL; ?>sites/">Sites</a></li>
                    <li><a class="<?= (PAGE == 'competences' ? 'active' : ''); ?>" href="<?php echo BASE_URL; ?>competences/">Compétences</a></li>
                    <li><a class="<?= (PAGE == 'interets' ? 'active' : ''); ?>" href="<?php echo BASE_URL; ?>interets/">Intérêts</a></li>
                    <li><a class="<?= (PAGE == 'contact' ? 'active' : ''); ?>" href="<?php echo BASE_URL; ?>contact/">Contact</a></li>
                </ul>
            </nav>
        </div>

        <div class="hamburger right"><span></span></div>

    </div>

    <!-- MENU MOBILE -->
    <div class="menu-mobile txt-align-ctr">
        <ul>
            <li><a href="<?php echo BASE_URL; ?>">Intro</a></li>
            <li><a href="<?php echo BASE_URL; ?>sites/">Sites</a></li>
            <li><a href="<?php echo BASE_URL; ?>competences/">Compétences</a></li>
            <li><a href="<?php echo BASE_URL; ?>interets/">Intérêts</a></li>
            <li><a href="<?php echo BASE_URL; ?>contact/">Contact</a></li>
            <li><a href="https://www.linkedin.com/in/charles-marceau-9881a285/" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
        </ul>

    </div>
    
</header>

