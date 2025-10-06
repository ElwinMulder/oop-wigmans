<?php
session_start();

// Check of de gebruiker is ingelogd
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Welkom</title>
</head>
<body>
<div class="container">
    <h2>Welkom, <?php echo htmlspecialchars($_SESSION['user_name']); ?>!</h2>
    <p>Je bent nu ingelogd 🎉</p>

    <form action="logout.php" method="post">
        <button type="submit" name="logout">Uitloggen</button>
    </form>

    <section class="video-background">
  <video id="bg-video" loop>
    <source src="videos/bloxburg tv man.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
</section>

<script>
  window.addEventListener('click', () => {
    const video = document.getElementById('bg-video');

    video.muted = false;      // Unmute
    video.volume = 0.2;       // Set volume to 20%
    video.play();             // Play the video

  }, { once: true }); // Only run this on the first click
</script>

</div>
</body>
</html>

    <style>

            /* video background */
.video-background {
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  z-index: -1;
  overflow: hidden;
}

#bg-video {
  width: 100vw;
  height: 100vh;
  object-fit: cover;
  position: absolute;
  top: 0;
  left: 0;
}

        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
            text-align: center;
        }
        button {
            background: #dc3545;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #c82333;
        }
    </style>
