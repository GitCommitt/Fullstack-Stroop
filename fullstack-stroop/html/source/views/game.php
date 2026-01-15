<?php
$pageTitle = $game['title'];
include "../../source/views/head.php";
?>
<body>
<?php include "../../source/views/header.php"; ?>

<main>
    <img src="<?= $game['image'] ?>" class="game_image">

    <div class="details_row">
        <section class="info_section">
            <section class="game_title">
                <h1><?= $game['title'] ?></h1>
            </section>

            <section class="game_genre">
                <p>Genre: <?= $game['genre'] ?></p>
            </section>

            <section class="game_info">
                <p><?= $game['description'] ?></p>
            </section>
        </section>

        <div class="group_section">
            <section class="group_Photoarea">
                <img src="<?= $game['image'] ?>" class="group_Photo">
            </section>
            <section class="group_info">
                <section class="group_roles">
                    <h1>Group roles.</h1>
                    <ul>
                        <?php foreach ($game['roles'] as $role): ?>
                            <li><?= $role ?></li>
                        <?php endforeach; ?>
                    </ul>
                </section>
            </section>
        </div>
    </div>

    <section class="download_button">
       <section class="download_button">
            <button><a href="../game-downloads/<?= $game['downloadFunction'] ?>" download>Download Here</a></button>
        </section>
    </section>
</main>

<?php include "../../source/views/footer.php"; ?>
 
</body>

</html>