</main>

    <footer>
            <div class="section startsnow">
                    <div class="container">
                        <div class="head-subhead">
                            <h3>Start now!</h3>
                            <p>Send a request to check our environment
                                or just simply talk with one of our experts.</p>
                        </div>
        
                        <div class="getcontact-btn">
                            <a href="" class="btn btn-white">GET STARTED <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            <a href="<?= url('contact') ?>" class="btn btn-border">CONTACT US <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
        
                        </div>
        
                    </div>
                </div>

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
                                    <p><a href="<?= url('gpu_servers') ?>">Servers</a></p>
                                    <p><a href="<?= url('networking') ?>">Network</a></p>
                                    <p><a href="<?= url('storage') ?>">Storage</a></p>
                                    <p><a href="<?= url() ?>">Locations</a></p>
                                </div>
                                <div class="col-md-3">
                                    <h3>Company
                                        </h3>
                                    <p><a href="<?= url('professional_services') ?>">Professional Services</a></p>
                                    <p><a href="<?= url('pricing') ?>">Pricing</a></p>
                                    <p><a href="<?= url('contact') ?>">Contact Us</a></p>
                                    <p><a href="<?= url('') ?>">About Us</a></p>
                                    <p><a href="<?= url('') ?>">Career</a></p>
                                    <p><a href="<?= url('') ?>">Privacy Policy</a></p>
                                </div>
                                <div class="col-md-3">
                                    <h3>Datacentre Location</h3>
                                    <p><a href="<?= url('') ?>">Location #1</a></p>
                                    <p><a href="<?= url('') ?>">Location #2</a></p>
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
                // $("header ul.nav.navbar-nav.navbar-right").css({ "margin-top": "0px" });
                // $(".weblogo img").css({ "width": "140px", "margin-top": "-3px" });


    
            } 
            else {
                $("#main_header").css("background", "none");
                $("#main_header li a").css({"color": "#fff"});
                // $("header ul.nav.navbar-nav.navbar-right").css({ "margin-top": "18px" });
                // $(".weblogo img").css({ "width": "auto" });


            }
        });
    
        
    
    });
    </script>

</html>