<?php
$pageTitle = "Media";
$pageType = 'media';
include "../source/views/head.php" 
?> 
<body>

<?php include_once "../source/views/header.php"?>

<main>
    <section class="group_section">
        <div class="group_photo">
            <img src="/assets/img/group-photo/team-media.jpg" alt="Group photo">
        </div>

        <div class="group_info">
            <h1>Group roles</h1>
            <ul>
                <li>Lisa van Galen – Photographic Designer</li>
                <li>Paulina Figurina – Graphic Designer</li>
                <li>Evin Ocklind – Media Designer</li>
                <li>Esmée van der Landss – Audiovisual</li>
                <li>Milan Schildknegt – Audiovisual</li>
                <li>Lyna Israil – Audiovisual</li>
            </ul>
        </div>
    </section>

    <section class="albums">
        <article class="album">
            <img src="/assets/img/gameplay.png" alt="Foto album">
            <h2>Foto album</h2>
        </article>

        <article class="album">
            <img src="/assets/img/gameplay.png" alt="Shorts album">
            <h2>Shorts album</h2>
        </article>
    </section>
</main>

<?php include "../source/views/footer.php"; ?>

</body>
</html>
