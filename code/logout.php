<?php
    session_start();
    
    //destroy all the session
    if (session_destroy()){ 
        header('Location: index.php'); // Redirect to the index page:
        
    }
?>