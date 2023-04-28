<?php
if (isset($_POST['Name'])){
    if(empty($_POST['Name'])) {
        header('Location: registration.php?error=emptymessage');
        echo "empty";
    }
    else {
        $name = $_POST['Name'];
        // check for invalid characters in the name field
        if (preg_match('/[!@#%&*()+^\{\}\[\]\-;:"\'<>\?\/]/', $name)) {
            header('Location: registration.php?error=invalid');
            echo "invalid characters";
            exit();
        }
        echo $name;
        setcookie('Name', $name);
        header('Location: emoji-maker.php');
    }
}
else {
    echo "not set";
    header('Location: registration.php?error=invalid');
}
?>
