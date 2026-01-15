<?php
$pageTitle = "Media";
$pageType = 'media';
include "../source/views/head.php" 
?> 
<body>

<?php include_once "../source/views/header.php"?>

<main>

    <!-- GROUP SECTION -->
    <section class="group_section">
        <div class="group_photo">
            <img src="/assets/img/gameplay.png" alt="Group photo">
        </div>

        <div class="group_info">
            <h1>Group roles</h1>
            <ul>
                <li>Lorem ipsum – software developer</li>
                <li>Lorem ipsum – software developer</li>
                <li>Lorem ipsum – software developer</li>
                <li>Lorem ipsum – software developer</li>
                <li>Lorem ipsum – software developer</li>
                <li>Lorem ipsum – software developer</li>
                <li>Lorem ipsum – software developer</li>
                <li>Lorem ipsum – software developer</li>
                <li>Lorem ipsum – software developer</li>
            </ul>
        </div>
    </section>

    <!-- ALBUMS -->
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

<footer>
    <div class="footer_inner">

        <div class="footer_block">
            <h3>Website</h3>
            <p>Daan Pronk</p>
            <p>Jesper van Niekerk</p>
            <p>Luella Hanen</p>
            <p>Micha Vas</p>
            <p>Johan Yongxian</p>
        </div>

        <div class="footer_block">
            <h3>Media</h3>
            <p>Lisa van Galen</p>
            <p>Paulina Figurina</p>
            <p>Evin Ocklind</p>
            <p>Esmée van der Land</p>
            <p>Milan Schildknegt</p>
            <p>Lyna Israil</p>
        </div>

        <div class="footer_block footer_collab">
            <p>LBS Södra</p>
            <p>LBS Norra</p>
            <span>X</span>
            <p>Media College</p>
        </div>

    </div>

    <div class="footer_copy">
        copyright 2025 – Stroop
    </div>
</footer>

</body>
</html>
