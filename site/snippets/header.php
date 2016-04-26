<!DOCTYPE HTML>
<html lang="de-DE">
<head>
  <meta charset="UTF-8">
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>

  <link rel="shortcut icon" href="http://der-zyklop.de/assets/images/favicon.png" type="image/png">

  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">

  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />

  <?php echo css('assets/styles/styles.css') ?>
    <link rel="stylesheet" href="../ysdn4004/assets/styles/responsive-nav.css">
    <script src="../ysdn4004/assets/js/responsive-nav.js"></script>

<link href='https://fonts.googleapis.com/css?family=Alegreya:400,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
</head>

<body>
  <div id="body-inner">
    <header>
      <h1><a href="<?php echo url() ?>">Design Workshop</a></h1>
      <?php snippet('menu') ?>

      <!-- Don't forget to set the correct height and with, like this: -->
      <!--
        <h1><a href="<?php echo url() ?>"><img src="<?php echo url('assets/images/logo.svg') ?>" height="86" width="240" alt="<?php echo html($site->title()) ?>" /></a></h1>
      -->

    </header>
    <section id="main">