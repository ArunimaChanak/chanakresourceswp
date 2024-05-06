<?php
    //////////////////////// Contact Us /////////////////////

    function  contact_meta_box() {
        add_meta_box(
            'contact_enquiry',
            __( 'Contact Enquiry', 'contact_enquiry' ),
            'contact_enquiry_html',
            'contact_enquiry',
            'normal',
            'default'
        );
    }

    add_action( 'add_meta_boxes', 'contact_meta_box' );

    function  contact_enquiry_html($post) {
        wp_nonce_field( '_contact_enquiry_nonce', 'contact_enquiry_nonce' );
        $contact_enquiry = get_post_meta( $post->ID, 'contact_meta_key',true );
        ?>

        <div class="contact-style">
            <div class="form-row">
                <h1><b>Name:</b> <?php echo ( $contact_enquiry['applicant_name'] ); ?></h1>
            </div>
            <div class="form-row">
                <h1><b>Email:</b> <?php echo ( $contact_enquiry['applicant_email'] ); ?></h1>
            </div>
            <div class="form-row">
                <h1><b>Company:</b> <?php echo ( $contact_enquiry['applicant_company'] ); ?></h1>
            </div>
            <div class="form-row">
                <h1><b>Description: </b></h1>
                <h2 style="padding-inline: 0; font-size: 19px;">
                    <?php echo ( $contact_enquiry['applicant_description'] ); ?>
                </h2>
            </div>
        </div>

        <?php
    }



    //////////////////////// Newsletter /////////////////////

    function  Sub_newsletter_meta_box() {

        add_meta_box(
            'sub_newsletter',
            __( 'Newsletter', 'sub_newsletter' ),
            'sub_newsletter_html',
            'sub_newsletter',
            'normal',
            'default'
        );
    }

    add_action( 'add_meta_boxes', 'Sub_newsletter_meta_box' );

    function  sub_newsletter_html($post) {
        wp_nonce_field( '_sub_newsletter_nonce', 'sub_newsletter_nonce' );
        $sub_newsletter = get_post_meta( $post->ID, 'newsletter_meta_key',true );
        ?>

        <div class="contact-style">
            <div class="form-row">
                <h1><b>Email:</b> <?php echo ( $sub_newsletter['email'] ); ?></h1>
            </div>
        </div>

        <?php
    }
?> 