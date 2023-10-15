<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batch Organics</title>
    <link rel="stylesheet" href="style.css">
    <!-- boxicons link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css"/>
    <?php wp_head(); ?>
</head>
<body style="max-width: 1960px; margin:auto;" id="home">

    <div class="overlay" id="overlay"></div>
    
    <div class="menu" id="menu">
        <i id="menuIconOpen" class='bx bx-menu open-menu' ></i>

    </div>
    <nav class="nav" id="nav">
        <div class="leftNav">
            <a href="<?php echo site_url(''); ?>" class="nav_link">Create a Box</a>
            <a href="<?php echo site_url(''); ?>" class="nav_link">For Business</a>
        </div>
        <div class="centerNav">
            <a href="<?php echo site_url(''); ?>" class="centerNav_logo">batch <span class="centerNav_logo_block">organics.</span></a>
        </div>
        <div class="rightNav">
            <a href="<?php echo site_url('index.php/faq'); ?>" class="nav_link">FAQ</a>
            <a href="#" class="nav_link">My Account</a>
            <a href="#" class="nav_link">Cart</a>
            <a href="#" class="nav_link nav_btn">0</a>
        </div>
        
    </nav>
    <a id="floatingCircle" class="floating-circle" href="#home">&uarr;</a>