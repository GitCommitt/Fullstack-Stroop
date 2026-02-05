<?php
$pageTitle = "Homepage";
$pageType = 'index';
include "../source/views/head.php";
?>

<body>

<?php include_once "../source/views/header.php"; ?>

<section class="section-1">
  <div class="group-1">
    <div class="text-Info">
      <p>hallo</p>
    </div>
    <div class="whole-group-photo"></div>
    <div class="teacher-photo"></div>
  </div>
</section>

 </section>

     <section class="games_section">
        <h1>Games</h1>
        <div class="games_grid">
            <article class="game_card">
                <img src="/assets/img/gameplay.png" alt="Game 1">
                <h2>Ikea delivery Game</h2>
                <a href="game/game1.php" class="game_link">Speel Game</a>
            </article>

            <article class="game_card">
                <img src="/assets/img/gameplay.png" alt="Game 2">
                <h2>Cheese heist Game</h2>
                <a href="game/game2.php" class="game_link">Speel Game</a>
            </article>

            <article class="game_card">
                <img src="/assets/img/gameplay.png" alt="Game 3">
                <h2>Viking Game</h2>
                <a href="game/game3.php" class="game_link">Speel Game</a>
            </article>

            <article class="game_card">
                <img src="/assets/img/gameplay.png" alt="Game 4">
                <h2>Train Game</h2>
                <a href="game/game4.php" class="game_link">Speel Game</a>
            </article>

            <article class="game_card">
                <img src="/assets/img/gameplay.png" alt="Game 5">
                <h2>Gnome Game</h2>
                <a href="game/game5.php" class="game_link">Speel Game</a>
            </article>
        </div>
    </section>

<?php include "../source/views/footer.php"; ?>

</body>
</html>