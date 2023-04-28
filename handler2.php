<?php
    if (isset($_POST['eye'])) {
        echo $_POST['eye'];
        setcookie('eye',$_POST['eye'],time() + 3600);
    }else {
        echo "eyes notset\n";
    }

    if(isset($_POST['mouth'])){
        echo $_POST['mouth'];
        setcookie('mouth',$_POST['mouth']);
    }else {
        echo "mouth notset";
    }

    if(isset($_POST['skin'])){
        echo $_POST['skin'];
        setcookie('skin',$_POST['skin'],);
    }else {
        echo "skin notset";
    }

 header('Location: index.php');