<!DOCTYPE html>
<html>

<head>
    <title>Leaderboard</title>
    <link rel="stylesheet" href="link.css">
</head>

<body>
<div class="main">
<embed src="onlymp3.to - Undertale OST - It's Raining Somewhere Else Extended-y1LIsrFdEuU-256k-1656045677463.mp3" loop="true" autostart="true" width="2" height="0">
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
    <div class="leaderboard-table-wrapper ">
    <div class="leaderboard-table">
        <table id="easy-leaderboard-table">
            <thead>     
            <tr>
                <th >Rank</th>
                <th >name</th>
                <th >score</th>
            </tr>
            </thead>
            <tbody>
            <!-- leaderboard rows will be added here by retrieveData.js -->
            </tbody>     
        </table>
         
        <table id="medium-leaderboard-table">
            <thead>     
            <tr>
                <th >Rank</th>
                <th >name</th>
                <th >score</th>
            </tr>
            </thead>
            <tbody>
            <!-- leaderboard rows will be added here by retrieveData.js -->
            </tbody>     
        </table>

        <table id="complex-leaderboard-table">
            <thead>     
            <tr>
                <th >Rank</th>
                <th >name</th>
                <th >score</th>
            </tr>
            </thead>
            <tbody>
            <!-- leaderboard rows will be added here by retrieveData.js -->
            </tbody>     
        </table>
    </div>
    </div>
</div>
<script src="retrieveData.js"></script>
</body>

</html>
