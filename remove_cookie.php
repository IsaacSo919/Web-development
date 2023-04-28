<?php
    // Remove the cookie by setting the expiration time in the past
    setcookie('eye', '', time() - 3600);
    setcookie('mouth', '', time() - 3600);
    setcookie('skin', '', time() - 3600);
    setcookie('Name', '', time() - 3600);
    // Return a success response
    echo 'Cookie removed successfully.';
?>