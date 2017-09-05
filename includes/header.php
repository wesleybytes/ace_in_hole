<!DOCTYPE html>

<!-- 
File Name: header.php
 Date: 08/15/17
 Programmer: Wesley Harrison
 -->

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="author" content="Wesley Harrison">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SEO info - keyword rich description, less than 160 characters -->

    <title>
        <?php echo $title ?>
    </title>

    <meta name="description" content="<?php echo $description ?>">


    <!-- END SEO   -->

   
    <link href="styles/styles.css" rel="stylesheet" type="text/css">

</head>
    
     <script>
        function openSlideMenu() {
            document.getElementById('side-menu').style.width = '250px';
            document.getElementById('main').style.marginLeft = '250px';
        }

        function closeSlideMenu() {
            document.getElementById('side-menu').style.width = '0';
            document.getElementById('main').style.marginLeft = '0';
        }

    </script>

<body class="jsOff">
    <header>
        <div class="logo"><img src="images/ace%20banner.png" alt="Ace in the Hole logo"></div>

    </header>

    <nav class="navbar">
        <span class="open-slide">
      <a href="#" onclick="openSlideMenu()">
        <svg width="30" height="30">
            <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
            <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
            <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
        </svg>
      </a>
    </span>

        <ul class="navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="registration.php">Registration</a></li>
            <li><a href="courses.php">Course Details</a></li>
            <li><a href="faqs.php">FAQ's</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>

    <div id="side-menu" class="side-nav">
        <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
        <a href="index.php">Home</a>
        <a href="registration.php">Registration</a>
        <a href="courses.php">Course Details</a>
        <a href="faqs.php">FAQ's</a>
        <a href="contact.php">Contact</a>
    </div>







    <main id="main">