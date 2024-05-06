<?php 
    // Template Name: Contact Us
    get_header(); 
?>


<div id="crBannerCarasoul" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner carasoulMinHeight">
        <div class="card carasoulMinHeight carousel-item active text-white border-0 w-100">
            <div class="row carasoulMinHeight h-100 w-100 p-0 mx-auto">
                <div class="CarasoulCardText carasoulMinHeight col-12 col-xl-6 p-0 mx-auto bgColor-Primary">
                    <div class="overlay-text mx-auto position-absolute">
                        <h6 class="strike-Text w-75 text-right">
                            <span class="bgColor-Primary">Get In Touch</span>
                        </h6>
                        <h1 class="mt-5">
                            Contact
                            <span>Us</span>
                        </h1>
                    </div>
                </div>
                <div class="CarasoulCardImg carasoulMinHeight d-none d-xl-block col-xl-6 p-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img-slider-02.png" class="w-100 h-100" alt="...">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-main card text-white rounded-0 w-100">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/contact-bg.jpg" class="card-img h-100 w-100 rounded-0" alt="...">
    <div class="card-img-overlay container row p-sm-0 mx-auto">
        <div class="contact-form col-12 col-md-8 col-lg-5 bgColor-Primary mx-auto">
            <h3 class="text-center mx-auto">Contact Us</h3>
            <form method="post" onsubmit="submitForm(event)" class="my-5">
                <input type="text" name="applicant_name" class="form-control mb-4 mx-auto shadow" placeholder="Name">
                <input type="email" name="applicant_email" class="form-control my-4 mx-auto shadow" placeholder="Email">
                <input type="text" name="applicant_company" class="form-control my-4 mx-auto shadow" placeholder="Company">
                <p class="mt-4 mb-2 ml-1">Write a Note to us,</p>
                <textarea name="applicant_description" class="form-control mb-2 shadow" rows="4" placeholder="Message"></textarea>
                <input type="hidden" name="action" value="CR_Contact" />
                <p class="text-warning font-weight-bold text-center" id="conFormErr"></p>
                <button type="submit" class="btn btn-light btn-block shadow mt-2 py-2">SUBMIT</button>
            </form>
        </div>
        <div class="contact-details col-12 col-md-8 col-lg-7 bgColor-Secoundery textColor-Black mx-auto">
            <div class="detail-body mt-5 mt-lg-0">
                <h3 class="mb-3">Chanak Resources Solution Pvt. Ltd.</h3>
                <h4 class="mb-2">CIN : U74999WB2020PTC241738</h4>
                <a class="textColor-Black d-block w-100 mb-1" target="_blank" href="mailto:support@chanakresources.com">
                    <i class="fas fa-envelope textColor-Primary mr-md-2"></i>
                    support@chanakresources.com
                </a>
                <a class="textColor-Black d-block w-100 mb-1" href="tel:+918337097993">
                    <i class="fas fa-phone-alt textColor-Primary mr-md-2"></i>
                    +91 8337097993
                </a>
                <div class="address w-100 my-3">
                    <h4 class="textColor-Primary w-75 pb-1 my-1">
                        <i class="fas fa-map-marker-alt textColor-Primary mr-2"></i>
                        Office Address
                    </h4>
                    <p>
                        Address: 4th Floor, A/127, Rd Number 4 H B Town, Sodepur, Kolkata: 700110 West Bengal, India
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    if( $_SERVER['REQUEST_METHOD'] == 'POST' && !empty( $_POST['action'] ) && $_POST['action'] == "CR_Contact") {
        $array_interest = array(
            'applicant_name' => sanitize_text_field($_REQUEST['applicant_name']),
            'applicant_email' => is_email($_REQUEST['applicant_email']),
            'applicant_company' => $_REQUEST['applicant_company'],
            'applicant_description' => $_REQUEST['applicant_description']
        );
        
        $interest_post = array(
            'post_title'   => wp_strip_all_tags('New Contact Enquiry: '. $array_interest['applicant_name'] ),
            'post_content' => $_REQUEST['applicant_description'],
            'post_status'  => 'publish',
            'post_type'    => 'contact_enquiry',
        );
        $PostID = wp_insert_post($interest_post);
        update_post_meta($PostID,'contact_meta_key', $array_interest);

        if (isset($PostID) && $PostID == TRUE) {
            $to = get_option('admin_email');
            $subject = "New Enquiry From".$_REQUEST['applicant_email'];
            $body = 'The email body content';

            $headers = array('Content-Type: text/html; charset=UTF-8');
            $sent = wp_mail( $to, $subject, $body, $headers );
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
            <strong>Success</strong>.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>

        <?php
        }
    }
?>

<script type="text/javascript">
    const submitForm = (event) => {
        const conFormErr = document.getElementById('conFormErr');
        const formData = event.target.elements;
        let errorText = null;
        
        if(formData.applicant_name.value == ''){
            errorText = "Name field is required.";
        }
        else if(formData.applicant_email.value == ''){
            errorText = "Email field is required.";
        }
        else if(formData.applicant_description.value == ''){
            errorText = "Enter your message."; 
        }

        if(errorText){
            conFormErr.innerText = errorText;
            event.preventDefault();
        }
    }
</script>


<?php get_footer(); ?>