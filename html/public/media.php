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
                    <img src="/assets/img/fotos/_MG_3654.jpg" alt="Foto 1" class="slider-image is-active">
                    <img src="/assets/img/fotos/_MG_3657.jpg" alt="Foto 2" class="slider-image">
                    <img src="/assets/img/fotos/_MG_3658.jpg" alt="Foto 3" class="slider-image">
                    <img src="/assets/img/fotos/_MG_3664.jpg" alt="Foto 4" class="slider-image">
                    <img src="/assets/img/fotos/_MG_3667.jpg" alt="Foto 5" class="slider-image">
                    <img src="/assets/img/fotos/_MG_3670.jpg" alt="Foto 6" class="slider-image">
                    <img src="/assets/img/fotos/_MG_3672.jpg" alt="Foto 7" class="slider-image">
                    <img src="/assets/img/fotos/_MG_3676.jpg" alt="Foto 8" class="slider-image">
                    <img src="/assets/img/fotos/_MG_3678.jpg" alt="Foto 9" class="slider-image">
                    <img src="/assets/img/fotos/_MG_3681.jpg" alt="Foto 10" class="slider-image">
                    <img src="/assets/img/fotos/_MG_3686.jpg" alt="Foto 11" class="slider-image">
                    <img src="/assets/img/fotos/_MG_3689.jpg" alt="Foto 12" class="slider-image">
                    <img src="/assets/img/fotos/_MG_3692.jpg" alt="Foto 13" class="slider-image">
                    <img src="/assets/img/fotos/_MG_3696.jpg" alt="Foto 14" class="slider-image">
                    <img src="/assets/img/fotos/_MG_3698.jpg" alt="Foto 15" class="slider-image">
                    <img src="/assets/img/fotos/_MG_3710.jpg" alt="Foto 16" class="slider-image">
                    <img src="/assets/img/fotos/_MG_3724.jpg" alt="Foto 17" class="slider-image">
                    <img src="/assets/img/fotos/_MG_3732.jpg" alt="Foto 18" class="slider-image">
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
