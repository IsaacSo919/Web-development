<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register for Pairs</title>
    <link rel="stylesheet" href="link.css"> 
</head>

<body>
    <div class="main"> 
        <div class="navbar">
        <nav>
            <ul>    
                <li><a href="index.php">Home</a></li> 
            </ul>
        </nav>
        <nav>
            <ul>    
                <li><a href="pairs.php">Play Pairs</a></li>
                <li><a href="leaderboard.php">Leaderboard</a></li> 
            </ul>
        </nav>  
        </div>

       
        <div class="title">
            <h2>Register &nbsp;&nbsp; for &nbsp;&nbsp; Pairs</h2>
        </div>

        <div class="registrybox">
        <?php
        if(isset($_GET['error'])) {
            $errorMsg = '';
            switch($_GET['error']) {
                case 'emptymessage':
                    $errorMsg = 'Name cannot be empty.';
                    break;
                case 'invalid':
                    $errorMsg = 'invalid characters.';
                    break;
                // add more cases for other error messages
                default:
                    $errorMsg = 'Something went wrong. Please try again.';
            }
            echo '<p>' . $errorMsg . '</p>';
        }
        ?>
        <p style="color: white;font-size: 24px;">Enter your name:</p>
        <form action="handler.php" method="POST">
            <input name="Name"> 
            <button href="handler.php">submit</button>
        </form>
        </div>
        
        
       
        

       
    </div>
</body>
</html>

