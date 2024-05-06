<footer class="container-fluid text-white pb-1">
        <div class="row mx-auto">
            <div class="col-xl-4 col-md-12 mb-xl-0 mb-5">
                <a class="row footerLogo w-auto ml-2 border-bottom" href="index.html">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/chanak-resources_Logo_white.svg" alt="" srcset="">
                </a>
                <div class="row footerLogoText text-justify w-auto mr-xl-3 ml-2 mt-4">
                    At the time when everything is changing so rapidly, industries are evolving
                    overnight, focus is the key. Hence at Chanakya Resources we believe in
                    mastering one rather than being jack of all trades. Today we are one of the
                    leading IT Human/Talent Resources Consultants in India helping to shape
                    the change. Our key domain of service is Information Technology(Software,
                    Web Application Development, UI/UX Design, Cloud Computing, AI and
                    so on).
                </div>
            </div>
            <div class="col-xl-2 col-md-6 mb-xl-0 mb-5">
                <div class="row footerHeading w-auto mr-md-5 border-bottom ml-2 ml-xl-4 pt-1 pb-2">Links</div>
                <div class="row list-group footerList w-75 ml-2 ml-xl-4 mt-3 pt-1 pb-2">
                    <a href="<?php echo site_url(); ?>" class="list-group-item p-0 my-1 border-0">Home</a>
                    <a href="<?php echo site_url(); ?>/#all-services" class="list-group-item p-0 my-1 border-0">Services</a>
                    <!-- <a href="#" class="list-group-item p-0 my-1 border-0">Our Team</a> -->
                    <a href="<?php echo get_template_directory_uri(); ?>/contact-us" class="list-group-item p-0 my-1 border-0">Contact Us</a>
                    <a href="<?php echo get_template_directory_uri(); ?>/about-us" class="list-group-item p-0 my-1 border-0">About Us</a>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-xl-0 mb-5">
                <div class="row footerHeading w-auto mr-md-5 border-bottom ml-2 pt-1 pb-2">Contacts</div>
                <div class="row list-group footerList w-75 ml-2 mt-3 pt-1 pb-2">
                    <div class="list-group-item p-0 my-1 border-0">4th Floor, A/127, Rd Number 4 H B Town, Sodepur, Kolkata: 700110 West Bengal, India</div>
                    <a target="_blank" href="mailto:support@chanakresources.com" class="list-group-item p-0 my-1 border-0">support@chanakanalytics.com</a>
                    <a href="tel:+918337097993" class="list-group-item p-0 my-1 border-0">+91 8337097993</a>
                </div>
            </div>
            <div class="col-xl-3 col-md-12 mb-xl-0 mb-5">
                <div class="row footerHeading w-100 border-bottom ml-2 pt-1 pb-2">Sign Up</div>
                <div class="row list-group footerList w-100 ml-2 mt-3 pt-1 pb-2">
                    <div class="list-group-item p-0 my-1 border-0">
                        Keep me up to date with content, updates, and offers from
                        Chanakya Analytics
                    </div>
                    <div class="list-group-item p-0 my-1 border-0">
                        <form method="post" class="emailForm form-inline mt-4">
                            <div class="form-group mb-2">
                                <input type="email" name="email" class="form-control bg-transparent w-100 rounded-0 border-right-0" placeholder="Enter your Email Here" required>
                                <input type="hidden" name="action" value="Sub_Newsletter" />
                            </div>
                            <button type="submit" class="btn btn-outline-light mb-2 rounded-0">SUBMIT</button>
                        </form>
                        <?php
                            if( $_SERVER['REQUEST_METHOD'] == 'POST' && !empty( $_POST['action'] ) && $_POST['action'] == "Sub_Newsletter") {
                                $array_interest = array(
                                    'email' => is_email($_REQUEST['email'])
                                );

                                $Sub_Letter = array(
                                    'post_title'   => wp_strip_all_tags('Newsletter Subscribed: '. $array_interest['email'] ),
                                    'post_content' => $array_interest['email'],
                                    'post_status'  => 'publish',
                                    'post_type'    => 'sub_newsletter',
                                );
                                $PostID = wp_insert_post($Sub_Letter);
                                update_post_meta($PostID,'newsletter_meta_key', $array_interest);


                                if (isset($PostID) && $PostID==TRUE) {
                                ?>

                                <script type="text/javascript">
                                    document.querySelector('body').classList.add('position-relative');
                                    setTimeout(() => {
                                        var alertNode = document.querySelector('.alert')
                                        if (alertNode) { alertNode.lastElementChild.click(); }
                                        document.querySelector('body').classList.remove('position-relative');
                                    }, 5000);
                                </script>

                                <div class="alert floating alert-success alert-dismissible fade show m-0" role="alert">
                                    <i class="fa-solid fa-circle-check me-2"></i>
                                    <strong>Submitted</strong>.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="fa-solid fa-xmark"></i>
                                    </button>
                                </div>

                                <?php
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <p class="teademarkText text-center w-100 py-1 mx-auto">
            © 2021 Chanak Resources . All Rights Reserved.
        </p>
    </footer>

    <?php wp_footer(); ?>

    <!-- Custom JS -->

    <script type="text/JavaScript">
        $(window).bind('scroll', function () {
            if ($(window).scrollTop() > 75) {
                $('.navbar').removeClass('position-absolute top').addClass('fixed-top');
            } else {
                $('.navbar').removeClass('fixed-top').addClass('position-absolute top');
            }
        });
    </script>
    
    <?php if(is_home()){ ?>
    <script type="text/JavaScript">
        $(document).ready(function () {
            $('.client-carousel').owlCarousel({
                loop: true,
                nav: true,
                margin: 10,
                touchDrag: true,
                dots: false,
                autoplay: true,
                autoplayHoverPause: true,
                responsiveClass: true,
                responsive: {
                    0: { items: 1, autoplayTimeout: 1000, },
                    576: { items: 2, autoplayTimeout: 1500, },
                    768: { items: 3, autoplayTimeout: 2000, },
                    992: { items: 4, autoplayTimeout: 2500, },
                    1200: { items: 5, autoplayTimeout: 3000, }
                },
                navText: [
                    '<i class="fas fa-chevron-left fa-2x"></i>',
                    '<i class="fas fa-chevron-right fa-2x"></i>'
                ]
            })
        })
    </script>
    <?php } ?>
</body>

</html>