<!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="main_header" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand weblogo" href="<?= url(); ?>">
                        
                        <img src="assets/img/leanfra-logo-PNG.png" class="img-responsive" alt="Image">
                        
                    </a>
                </div>
                <?php if($title != 'Contact' && $title != 'Thank you'){ ?>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">OUR ENVIRONMENT
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?= url('professional_services'); ?>">PROFESSIONAL SERVICES</a>
                        </li>
                        <li>
                            <a href="<?= url(''); ?>">COMPANY</a>
                        </li>
                        <li>
                            <a href="<?= url('pricing'); ?>">PRICING</a>
                        </li>
                        <li>
                            <a href="<?= url('contact'); ?>">CONTACT US</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
                <?php } ?>
            </div>
            <!-- /.container -->
        </nav>