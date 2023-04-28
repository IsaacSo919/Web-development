<!DOCTYPE html>
<html>

<head>
    <title>Play Pairs</title>
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

    <div class="wrapper">
        
        <div class="stats-container">
            
            <div id="moves-count"></div>
            <div id='time'></div>  
        </div>
        <div class="game-container"></div>
        <button id="stop" class="hide">Stop the game</button>    
    </div>
    <div class="controls-container">
        <p id="result"></p> 
        <h1>Pair Game difficulty:easy</h1>
        <button id="start">Start the game</button>
    </div>

    <script src="Pairs-functions.js"></script>
    
</div>
</body>

</html>
