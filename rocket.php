<?php

// Load WordPress.
$folder_path = "/home/your_username/public_html/wp-content/cache/min/1/"; 

$files = glob($folder_path.'/*');  
   

foreach($files as $file) { 
   
    if(is_file($file))  
    
        // Delete the given file 
        unlink($file);  
}

require( 'wp-load.php' );

// Clear cache.

if ( function_exists( 'rocket_clean_domain' ) ) {

                rocket_clean_domain();

}

// Preload cache.

if ( function_exists( 'run_rocket_sitemap_preload' ) ) {

                run_rocket_sitemap_preload();

}
