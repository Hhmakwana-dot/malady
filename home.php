<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home.css">
    <title>Music Player</title>
  </head>
  <body background="WhatsApp Image 2024-04-09 at 10.23.48 PM.jpeg">
    <div class="container">
      <h1 class="heading" style="color:white">Music Player</h1>
      
      <div class="music-container">
        <div id="cover-box">
          <img src="cover1.jpg" alt="cover-image" id="cover">
        </div>
        <div id="music-box">
          <audio id="disc"></audio>
          <div id="music-info">
            <h2 id="title"></h2>
            <h3 id="artist"></h3>
            <div id="progress-container">
              <div id="progress"></div>
            </div>
            <div id="timer-bar">
              <span id="timer">0:00</span>
              <span id="duration"></span>
            </div>
          </div>
          <div id="control-box">
            <i id="prev" class="btn fas fa-backward"></i>
            <i id="play" class="special-btn fas fa-play"></i>
            <i id="next" class="btn fas fa-forward"></i>
          </div>
        </div>
        <h3><a href="logout.php" id="logout" style="text-decoration: none;
      color: black;
      background-color: white;
      padding: 10px;
     ">Logout</a></h3>
      </div>
    </div>
    <script src="script.js"></script>
</body>
</html>