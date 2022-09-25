<!DOCTYPE html>
<html lang="pl">
<head>
  <title><?php appName()?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?php echo FRONTEND_ASSET . 'img/favicon.ico'; ?>" type="image/png">
  
  <link rel="stylesheet" href="<?php echo FRONTEND_ASSET . 'css/style.css'; ?>">
</head>
<body>
<header>
  <a href="/">
    <img src="<?php echo FRONTEND_ASSET . 'img/wins-logo.png'; ?>" alt="">
  </a>
  <h1><?php echo $title?></h1>
  <h3><?php echo $subtitle?></h3>
</header>


