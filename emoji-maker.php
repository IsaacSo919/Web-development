<!DOCTYPE html>
<html>
<head>
    <title>Create your character</title>
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
    <div class="emoji-maker">
        <div class="eye-container">
            <!-- //button when press got to handler2.php post request (get post) -->
            <h2>&nbsp Select an eye:</h2>
            <br>
            <img src="emoji assets/emoji assets/eyes/closed.png" id="1"      onclick="selectEyes(this)">
            <img src="emoji assets/emoji assets/eyes/laughing.png" id="2"    onclick="selectEyes(this)">
            <img src="emoji assets/emoji assets/eyes/long.png" id="3"        onclick="selectEyes(this)">
            <img src="emoji assets/emoji assets/eyes/normal.png" id="4"      onclick="selectEyes(this)">
            <img src="emoji assets/emoji assets/eyes/rolling.png" id="5"     onclick="selectEyes(this)">
            <img src="emoji assets/emoji assets/eyes/winking.png" id="6"     onclick="selectEyes(this)">
        </div>
        <div class="mouth-container">
            <h2>&nbsp Select a mouth:</h2>
            <br>
            <img src="emoji assets/emoji assets/mouth/open.png" id="1"     onclick="selectmouth(this)">
            <img src="emoji assets/emoji assets/mouth/sad.png" id="2"      onclick="selectmouth(this)">
            <img src="emoji assets/emoji assets/mouth/smiling.png" id="3"  onclick="selectmouth(this)">
            <img src="emoji assets/emoji assets/mouth/straight.png" id="4" onclick="selectmouth(this)">
            <img src="emoji assets/emoji assets/mouth/surprise.png" id="5"  onclick="selectmouth(this)">
            <img src="emoji assets/emoji assets/mouth/teeth.png" id="6"    onclick="selectmouth(this)">
        </div>    
        <div class= "skin-container">
            <h2>&nbsp Select the skin:</h2>
            <br>
            <img src="emoji assets/emoji assets/skin/green.png" id="1"     onclick="selectskin(this)">
            <img src="emoji assets/emoji assets/skin/red.png" id="2"       onclick="selectskin(this)">
            <img src="emoji assets/emoji assets/skin/yellow.png" id="3"    onclick="selectskin(this)">
        </div>

        <form action="handler2.php" method="POST">
            <div style="display:none">    
                <input type="radio" name="eye" value="1">
                <input type="radio" name="eye" value="2">
                <input type="radio" name="eye" value="3">
                <input type="radio" name="eye" value="4">
                <input type="radio" name="eye" value="5">
                <input type="radio" name="eye" value="6">
            </div>
            
            <div style="display:none">
                <input type="radio" name="mouth" value="1">
                <input type="radio" name="mouth" value="2">
                <input type="radio" name="mouth" value="3">
                <input type="radio" name="mouth" value="4">
                <input type="radio" name="mouth" value="5">
                <input type="radio" name="mouth" value="6">
            </div>

            <div style="display:none">
                <input type="radio" name="skin" value="1">
                <input type="radio" name="skin" value="2">
                <input type="radio" name="skin" value="3">
            </div>
            
            <button href="handler2.php" class="submit" style="float:right">submit</button>
        </form>
        
    </div>
    <script src="function selectEmoji.js"></script>
</body>
    
</html>