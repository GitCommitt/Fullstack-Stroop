<?php if(!empty($pageType) && $pageType === 'index'): ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $pageTitle?></title>
  <link rel="stylesheet" href="./assets/css/styles.css">
  <link rel="stylesheet" href="./assets/css/header-nav.css">
  <script src="./assets/js/script.js" defer></script>
</head>

<?php elseif(!empty($pageType) && $pageType === 'media'): ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $pageTitle?></title>
  <link rel="stylesheet" href="./assets/css/media.css">
  <link rel="stylesheet" href="./assets/css/header-nav.css">
  <script src="./assets/js/script.js" defer></script>
</head>

<?php else: ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $pageTitle?></title>
  <link rel="stylesheet" href="../assets/css/game.css">
  <link rel="stylesheet" href="../assets/css/header-nav.css">
  <script src="../assets/js/script.js" defer></script>
</head>
<?php endif; ?>