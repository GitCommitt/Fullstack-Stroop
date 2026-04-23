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
            <div class="photo-slider" aria-label="Foto album slider" tabindex="0">
                <button class="slider-btn slider-btn-prev" type="button" aria-label="Vorige foto">&#10094;</button>
                <div class="slider-track">
                    <img src="/assets/img/group-photo/team-media.jpg" alt="Groepsfoto team" class="slider-image is-active">
                    <img src="/assets/img/group-photo/team-1.jpg" alt="Groepsfoto 1" class="slider-image">
                    <img src="/assets/img/group-photo/team-2.jpg" alt="Groepsfoto 2" class="slider-image">
                    <img src="/assets/img/group-photo/team-3.jpg" alt="Groepsfoto 3" class="slider-image">
                    <img src="/assets/img/group-photo/team-4.jpg" alt="Groepsfoto 4" class="slider-image">
                    <img src="/assets/img/group-photo/team-5.jpg" alt="Groepsfoto 5" class="slider-image">
                </div>
                <button class="slider-btn slider-btn-next" type="button" aria-label="Volgende foto">&#10095;</button>
            </div>
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
