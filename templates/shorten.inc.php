<?php
    
    # Defining functions

    /**
    * Returns a 6 character long alphanumeric string, based on the MD5 of the destination url.
    */

    function generate_ext($dest_url, $start_pos = 0){ 
        
        $extension = md5($dest_url); 
        $ext = substr($extension, $start_pos, 6); 
        return $ext; 
    }


    /**
    * Checks whether the generated extension has already been used. 
    * If unused, it is addded to the associative array, with the destination url as the value. 

    * If the extension has already been used, a new extension is generated. 
    * Assumes that the second time the extension is generated, it will not be a repeat. 
    */ 
    function unique_ext($gen_ext, $dest_url){

        global $ext_array; 

        $ext_check = array_key_exists($gen_ext, $ext_array); 
        if( $ext_check ){
            $gen_ext = generate_ext($dest_url, $start_pos = 6);
        }

        $ext_array[$gen_ext] = $dest_url;

        return $gen_ext;

    }

    /** 
    * Returns the shortened url, by cocatenating the extension to the domain name.
    */
    function generate_short($gen_ext){

        $domain = "bit.ly";
        $gen_url = "$domain/$gen_ext/"; 
        return $gen_url;

    }

    
?> 


