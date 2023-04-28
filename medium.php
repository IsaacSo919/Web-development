<!DOCTYPE html>
<html>

<head>
    <title>Play Pairs</title>
    <link rel="stylesheet" href="link.css">
</head>

<body>
<div class="main">
    <embed src="onlymp3.to - Undertale OST 059 - Spider Dance-YZ3XjVVNagU-256k-1654161509285.mp3" loop="true" autostart="true" width="2" height="0">
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
        <div class="game-container-medium"></div>
        <button id="stop" class="hide">Stop the game</button>    
    </div>
    <div class="controls-container">
        <p id="result"></p> 
        <h2>Pair Game difficulty:Medium</h2>
        <button id="start">Start the game</button>
        <button id="choose-difficulty">Choose the difficulty</button>
        <button id="submit-result">submit</button>
    </div>

    <script src="Pairs-functions-medium.js"></script>
    
</div>
</body>

</html>
