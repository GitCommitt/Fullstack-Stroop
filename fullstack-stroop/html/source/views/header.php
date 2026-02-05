<?php if(!empty($pageType) && $pageType === 'index'): ?>
<header class="intro">
  <div class="video-bg">
    <video autoplay muted loop playsinline id="bg-video">
      <source src="img/waterbg.mp4" type="video/mp4">
    </video>
    </div>

    <svg class="wave-1" viewBox="0 0 960 540">...</svg>

        <nav class="navi">
          <div class="logo-container">
            <img src="../assets/img/logo.png" alt="logo">
          </div>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="media.php">Media</a></li>
            <li><a href="game/game1.php">game 1</a></li>
            <li><a href="game/game2.php">game 2</a></li>
            <li><a href="game/game3.php">game 3</a></li>
            <li><a href="game/game4.php">game 4</a></li>
            <li><a href="game/game5.php">Gnome</a></li>
          </ul>
        </nav>


      <div class="page-title">
        <h1 id="typing-text">Welcome!</h1>
      </div>

      <div class="frontpage-video">
      <iframe
        src="https://www.youtube.com/embed/GUrDI6OkJfU"
        title="#"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture ; web-share"
        allowfullscreen
    ></iframe>
      </div>

  <svg class="wave-1" viewBox="0 0 960 540" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
    <path class="wave wave1" d="M0 440L26.7 436.8C53.3 433.7 106.7 427.3 160 424.5C213.3 421.7 266.7 422.3 320 419.5C373.3 416.7 426.7 410.3 480 414.8C533.3 419.3 586.7 434.7 640 441.3C693.3 448 746.7 446 800 442.5C853.3 439 906.7 434 933.3 431.5L960 429L960 541L0 541Z" fill="#0080ff"></path>
    <path class="wave wave2" d="M0 474L26.7 470.2C53.3 466.3 106.7 458.7 160 454C213.3 449.3 266.7 447.7 320 447C373.3 446.3 426.7 446.7 480 451.3C533.3 456 586.7 465 640 470.8C693.3 476.7 746.7 479.3 800 479.3C853.3 479.3 906.7 476.7 933.3 475.3L960 474L960 541L0 541Z" fill="#0058b0"></path>
    <path class="wave wave3" d="M0 512L26.7 507.5C53.3 503 106.7 494 160 494C213.3 494 266.7 503 320 505.5C373.3 508 426.7 504 480 498.5C533.3 493 586.7 486 640 483.7C693.3 481.3 746.7 483.7 800 489.3C853.3 495 906.7 504 933.3 508.5L960 513L960 541L0 541Z" fill="#003367"></path>
  </svg>
</header>


<?php elseif (!empty($pageType) && $pageType === 'media'): ?>
  <header class="intro">
    <nav class="navi">
      <div class="logo-container">
        <img src="../assets/img/logo.png" alt="logo">
      </div>
        <ul>
          <li><a href="../index.php">Home</a></li>
          <li><a href="../media.php">Media</a></li>
          <li><a href="game/game1.php">Ikea</a></li>
          <li><a href="game/game2.php">Cheese</a></li>
          <li><a href="game/game3.php">Viking</a></li>
          <li><a href="game/game4.php">Train</a></li>
          <li><a href="game/game5.php">Gnome</a></li>
        </ul>
    </nav>
  </header>

<?php else: ?>
  <header class="intro">
    <nav class="navi">
      <div class="logo-container">
        <img src="../assets/img/logo.png" alt="logo">
      </div>
      <ul>
         <li><a href="../index.php">Home</a></li>
         <li><a href="../media.php">Media</a></li>
         <li><a href="game1.php">Ikea</a></li>
         <li><a href="game2.php">Cheese</a></li>
         <li><a href="game3.php">Viking</a></li>
         <li><a href="game4.php">Train</a></li>
         <li><a href="game5.php">Gnome</a></li>
      </ul>
    </nav>
  </header>
<?php endif; ?>