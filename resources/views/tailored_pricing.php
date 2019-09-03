<?php include('Layout/header.php') ?>

    <header class="header-innerpages">
        <?php include('Layout/navbar.php') ?>

<div class="clearfix"></div>

<div class="headertxttwocol cpuinnerheaderbg choiceinnerheader">
        <div class="container">
            <div class="section leanfra-pro">
                <div class="">
                    <div class="head-subhead">
                        <h3>Tailored Pricing
                            </h3>
                        <p>Contact us and we will help to build you a quote<br>
                            that matches your requirements
                            </p>
                    </div>
    
                    <div class="enterprice_trial_price">
                        <div class="">
                            <div class="enterpricebox">
                                
                                <img src="assets/img/object-enterprise.png" class="img-responsive" alt="object-enterprise.png">
                                <h4>ENTERPRISE</h4>
                                <p>Contact us<br>
                                    for enterprise pricing</p>

                                <a href="#" class="btn btn-border bgcolorthree">GET STARTED <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                
                            </div>
                            <div class="enterpricebox trailbox">
                                
                                <img src="assets/img/object-trial.png" class="img-responsive" alt="Image">
                                <h4>TRIAL</h4>
                                <p>Try Leanfra
                                        <br>
                                        for enterprise pricing</p>

                                <a href="#" class="btn btn-border boderthreecolors">TRY IT YOURSELF <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    </header>

    <main class="content_section">
        
            <div class="container">
                    <!-- <div class="pageheadparaall">
                            <h2>GPU Servers</h2>
                            <p>Tiers to suit your every need</p>
                    </div> -->
                </div>   
     
 </main>

    <footer>
        <div class="middle-footer">
    <div class="container">
            <div class="row">
                    <div class="col-md-3">
                        <img src="assets/img/200px-png-white-bg.png" class="img-responsive" alt="Image">
                        <div class="socailmedia">
                            <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                            <a href="#"></a><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                            <a href="#"></a><i class="fa fa-envelope" aria-hidden="true"></i></a>
                            <a href="#"></a><i class="fa fa-github" aria-hidden="true"></i></a>
                            <a href="#"></a><i class="fa fa-volume-control-phone" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h3>Our Environment</h3>
                        <p><a href="#">Servers</a></p>
                        <p><a href="#">Network</a></p>
                        <p><a href="#">Storage</a></p>
                        <p><a href="#">Locations</a></p>
                    </div>
                    <div class="col-md-3">
                        <h3>Company
                            </h3>
                        <p><a href="#">Professional Services</a></p>
                        <p><a href="#">Pricing</a></p>
                        <p><a href="#">Contact Us</a></p>
                        <p><a href="#">About Us</a></p>
                        <p><a href="#">Career</a></p>
                        <p><a href="#">Privacy Policy</a></p>
                    </div>
                    <div class="col-md-3">
                        <h3>Datacentre Location</h3>
                        <p><a href="#">Location #1</a></p>
                        <p><a href="#">Location #2</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer">
                <div class="container">
                    <p>Leanfra Inc. © 2019. All rights reserved</p>
                </div>
            </div>
    </footer>

</body>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        // Main Header nav
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll > 70) {
                $("#main_header").css({
                    "background": "rgba(0,0,0,0.8)"
                });
                $("#main_header li a").css({
                    "color": "#fff"
                });
                $("a.navbar-brand.websitelogo-home").css({ "padding-top": "8px" });
    
            } 
            else {
                $("#main_header").css("background", "none");
                $("#main_header li a").css({"color": "#fff"});
            }
        });
    
        
    
    });
    </script>
</html>