<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Pairs</title>
    <link rel="stylesheet" href="link.css"> 
</head>
<body>
    <div class="main"> 
        <embed src="X2Download.app - Undertale OST - Nyeh Heh Heh! Extended (128 kbps).mp3" loop="true" autostart="true" width="2" height="0">
        <audio src="Game Start Sound Effect.mp3" id ="game-start" preload="auto"></audio>
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
                <li  id="remove-cookie-btn"><a>Logout</a></li>
                <li class="header-emoji">
                
                <?php
                    

                    
                     // If eyes cookie is set in handler2.php, selected the corresponding image
                        if (isset($_COOKIE['eye'])) {
                            $eyeNum = $_COOKIE['eye'];
                                if ($eyeNum == 1) {
                                    $eyeSrc = "emoji assets/emoji assets/eyes/closed.png";
                                } elseif ($eyeNum == 2) {
                                    $eyeSrc = "emoji assets/emoji assets/eyes/laughing.png";
                                } elseif ($eyeNum == 3) {
                                    $eyeSrc = "emoji assets/emoji assets/eyes/long.png";
                                } elseif ($eyeNum == 4) {
                                    $eyeSrc = "emoji assets/emoji assets/eyes/normal.png";// Set eyes, mouth, and skin be empty
                                } elseif ($eyeNum == 5) {
                                    $eyeSrc = "emoji assets/emoji assets/eyes/rolling.png";
                                } elseif ($eyeNum == 6) {
                                    $eyeSrc = "emoji assets/emoji assets/eyes/winking.png";
                                }
                            }

                            // If mouth cookie is set, use the corresponding image
                        if (isset($_COOKIE['mouth'])) {
                            $mouthNum = $_COOKIE['mouth'];
                            if ($mouthNum == 1) {
                                $mouthSrc = "emoji assets/emoji assets/mouth/open.png";
                            } elseif ($mouthNum == 2) {
                                $mouthSrc = "emoji assets/emoji assets/mouth/sad.png";
                            } elseif ($mouthNum == 3) {
                                $mouthSrc = "emoji assets/emoji assets/mouth/smiling.png";
                            } elseif ($mouthNum == 4) {
                                $mouthSrc = "emoji assets/emoji assets/mouth/straight.png";
                            } elseif ($mouthNum == 5) {
                                $mouthSrc = "emoji assets/emoji assets/mouth/surprise.png";
                            } elseif ($mouthNum == 6) {
                                $mouthSrc = "emoji assets/emoji assets/mouth/teeth.png";
                            }
                        }

                            // If skin cookie is set, use the corresponding image
                        if (isset($_COOKIE['skin'])) {
                            $skinNum = $_COOKIE['skin'];
                            if ($skinNum == 1) {
                                $skinSrc = "emoji assets/emoji assets/skin/green.png";
                            } elseif ($skinNum == 2) {
                                $skinSrc = "emoji assets/emoji assets/skin/red.png";
                            } elseif ($skinNum == 3) {
                                $skinSrc = "emoji assets/emoji assets/skin/yellow.png";
                            }
                        }
                        if (isset($_COOKIE['eye']) && isset($_COOKIE['mouth']) && isset($_COOKIE['skin'])){
                            echo "<div>";
                        }
                        else {
                            echo "<div style='display:none;'>";
                        }
                    ?>
                            <div class="icon">
                                <img src="<?php echo $eyeSrc; ?>" id="eye">
                                <img src="<?php echo $mouthSrc; ?>" id="mouth">
                                <img src="<?php echo $skinSrc; ?>" id="skin">
                             </div>
                            <!-- display the selected img of emoji -->
                            
        
                        </div>
                        
                   

                
                </li>
            </ul>
            
           
        </nav>
            
         
        
        </div>

        <?php
        if (isset($_COOKIE['Name'])){
            echo '<div class="title">';
            echo '<h1 class="title ">Welcome to pairs</h1>';
            echo '</div>';
            echo '<div class= "index-button">';

            echo '<button style="margin-top: 200px;" ><a>Click&nbsp;     &nbsp; here &nbsp;&nbsp;to &nbsp;&nbsp;play</a></button>';

            echo '</div>';
            
            
                
        }else {
            echo '<div class="title">';
            echo '<h1 class="title ">Welcome to pairs</h1><br>';
            echo '<h2 class="title">Youre&nbsp; not &nbsp;in&nbsp;&nbsp; a&nbsp; registered&nbsp&nbsp;session?</h2>';
            echo '<a href="registration.php" class="menu-button">Register</a>';
            echo '</div>';
            
            

        }
        ?>      
    </div>
    <script src="logout.js"></script>       
    <script src="buttonSound.js"></script>          
</body>
</html>

