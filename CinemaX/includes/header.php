<?php require_once("includes/config.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset= "utf-8">
        <title>CinemaX</title>
        <link rel="stylesheet" type= "text/css" href="assets/Css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script src="assets/js/commonAction.js"></script>
    </head>
    <body>
        <div id= pageContainer>

            <div id= mastHeadContainer>
                <button class="navShowHide">
                    <img src="assets/image/icons8-menu-24.png" alt="">
                </button>
                <a class="logoContainer" href="index.html">
                    <img src="assets/image/VideoTube.png" alt="site Logo" title="logo" >
                </a>
                <div class="searchBarContainer">
                    <form action="search.html" method="GET">
                        <input type="text" class="searchBar" name="term" placeholder="Search...">
                        <button class="searchButton">
                            <img src="assets/image/icons8-search-24.png" alt="site Logo" title="logo">
                        </button>
                    </form>
                </div>

                <div class="rightIcons">
                    <a href="upload.php">
                        <img class="upload" src="assets/image/icons8-upload-48.png" alt="">
                    </a>
                    <a href="#">
                        <img class="upload" src="assets/image/icons8-user-40.png" alt="">
                    </a>
                </div>


            </div>

            <div id= sideNavContainer style="display: none;">

            </div>

            <div id= mainSectionContainer>

                <div id="mainContentContainer">