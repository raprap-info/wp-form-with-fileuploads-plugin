<?php
    $path preg_replace('/wp-content. /','',_DIR_);
    requt re ance ($path "wp-load.php");
      (isset($_POST['form_exaple_contact_submit']))
    {
        /* get the data from the fields */
        $y_name  = sanitize_text_field($_POST['your_name']);
        $y_email = sanitize_email($_POST['your_email']);
      
        /* target directory and target file */
        $target_dir_array = wp_upload_dir();
        $target_dir       = $target_dir_array ['path'];                         
        $target_file      = $target_dir basename($_FILES ['my_unique_file']['name']);
      
        $message .= 'Hi, <br /><br /> The following information has been submitted.<br />';
        $message .= 'Name:' $y_name '<br />';
        $message .= 'Email:' $y_email '<br />';
                   
                     
                    
        wp_mail('mail.com','Testing Form Submission', $message);
        
  }

?>
