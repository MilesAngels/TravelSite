<?php 
    /** 
     * 
     * Template Name: Contact-Page
     * 
     * @package TravelSite
     * 
     **/
?>

<?php get_header(); ?>
<?php get_template_part("template-parts/hero"); ?>

<!-- Start of Contact Form -->
<div class="contact-section row">
    <form action="#" class="contact-form contact-column">
        <div class="form-content">
            <h2>
                Please Contact Us
            </h2>
            <label for="fName">First Name</label>
            <input type="text">
            <label for="lName">Last Name</label>
            <input type="text">

            <label for="eMail">Email</label>
            <input type="email" name="" id="">

            <label for="message">Message</label>
            <textarea name="message" id="message"></textarea>

            <input type="submit">
        </div>
    </form>

    <aside class="contact-column">
        <ul>
            <li><i class="fa-solid fa-envelope">&emsp; Email</i>&emsp;travel@somewhere.com</li>
            <li><i class="fa-solid fa-mobile">&emsp; Phone</i>&emsp;(000) 000 - 0000</li>
            <li><i class="fa-solid fa-map-location">&emsp; Address</i>
            &emsp; 404 Middle Street<br>
            &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &ensp;Nowhere, NF 11000
            </li>
        </ul>
    </aside>
</div>
<!-- End of Contact Form -->
<?php get_template_part("template-parts/banner");?>
<?php get_template_part("template-parts/to-top");?>
<?php get_footer();?>