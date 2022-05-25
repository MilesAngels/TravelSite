<?php 
    /** 
     * 
     * Template Name: Contact
     * 
     * @package TravelSite
     * 
     **/
?>

<?php get_header(); ?>

<div class="form">
    <form action="#" class="contact-form">
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
    </form>
</div>

<?php get_footer();?>