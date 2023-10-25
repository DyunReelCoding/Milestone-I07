<?php
    session_start();
    if (!isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: index.php");
        die();
    }

    include 'config.php';

    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");

    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);

        echo "<div class='nav-bar'>";

        echo "" . $row['name'] . " <a href='logout.php'>Logout</a>";

        echo "</div>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Video Game Homepage</title>
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
  <div class="home">
    <h2 class="home__title">Welcome to the Video Game Homepage</h2>
    <p class="home__subtitle">Check out these awesome video games:</p>
    <div class="games">
      <!-- Game Item -->
      <div class="game">
        <img src="images/gta.png" alt="Game 1" class="game__image">
        <div class="game__details">
          <h3 class="game__title">GTA 5</h3>
          <p class="game__description">Explore Manhattan and do some crime time.</p>
          <p class="game__price">$59.99</p>
          <button class="game__buy-button">Buy</button>
        </div>
      </div>
      <!-- Add more game items as needed -->
    </div>
  </div>

  <!-- Modal for purchase confirmation -->
  <div class="modal">
    <div class="modal-header">Confirm Purchase</div>
    <div class="modal-body">Are you sure you want to purchase this game?</div>
    <div class="modal-footer">
      <button class="modal-button modal-confirm-button">Yes</button>
      <button class="modal-button modal-cancel-button">No</button>
    </div>
  </div>


</body>
</html>