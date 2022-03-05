<?php
/**
* Plugin Name: Form Example Process Submit
* Description: Form Example Process Submit Description.
**/
function form_include()
{
    /* create a variable to hold the html information */
    $content '; /* creates a string variable */
    /* open the form tag */
    $content .= '<form method="post" action="' plugin_dir_url(_FILE_) 'process/">'
    $content .= '<input type="text" name="your_name" placeholder="Your Full Name" />';
    $content .= '<input type="email" name="your_email" placeholder="Enter Your Email">';
    $content .= '<input type="file" name="my_uniqų" />';
    $content .= '<input type="submit" name="form_exaple_contact_submit" value="SUBMIT">';
    
    /* close the form tag */
    
    $content '</form>';
    return $content;
    
    
add_shortcode('form_example','form_include');


?>
