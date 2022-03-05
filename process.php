<?php
    $path =  preg_replace('/wp-content. /','',_DIR_);
    
    require_once ($path. "wp-load.php");
    
      if(isset($_POST['form_exaple_contact_submit']))
    {
        /* get the data from the fields */
        
       
      
        /* target directory and target file */
        $target_dir_array = wp_upload_dir();
        $target_dir       = $target_dir_array ['path'];                         
        $target_file      = $target_dir . basename($_FILES ['my_unique_file']['name']);
      
        $message .= 'Hi, <br /><br /> The following information has been submitted.<br />';
       
                   
                     
                    
        wp_mail('mail.com','Testing Form Submission', $message);
        
  }

?>
