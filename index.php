<?php require_once "controllerList.php"; ?>

<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"/>

<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

<script src="https://kit.fontawesome.com/5d0c07b8e7.js" crossorigin="anonymous"></script>

<style>
*{font-family: 'Roboto', sans-serif;margin:0;padding:0;}
body{background:#000;color:#fff;}
a{text-decoration:none;}

::selection{
    background:#ffe919;
    color:#000;
}

.socialMedias ul li{
    list-style:none;
    float:left;
    font-size:20px;
}

.socialMedias ul li a{
    display:block;
    padding:15px;
    color:#333;
}

#header{
    display:flex;
    align-items:center;
    justify-content:center;
    flex-flow:column;
    height:50vh;
}

#header img{
    width:40%;
}

#container{
    display:flex;
    justify-content:center;
    width:80%;
    margin:25px auto;
}

#articles{
    display:grid;
    grid-gap:25px;
    grid-template-columns:1fr 1fr 1fr;
}

.article{
    background:linear-gradient(to right,#000,#0a0a0a);
    border-radius:5px;
}

.article:hover{
    background:linear-gradient(to left, #000, #0a0a0a);
}

.article h1{
    text-transform:uppercase;
    font-size:20px;
    font-weight:bold;
    padding:20px;
    text-align:center;
    /*font-family: 'Josefin Sans', sans-serif;*/
    font-family: 'Raleway', sans-serif;
}

.article ul{
    list-style:none;
    color:#666;
    padding:0 20px;
    font-size:15px;
}

.article a{
    text-align:center;
    display:block;
    color:#ffe919;
    padding:20px;
    text-transform:uppercase;
    font-size:12px;
    font-weight:bold;
}

#footer{
    display:flex;
    align-items:center;
    justify-content:center;
    height:25vh;
}
</style>

<div id="header">
    <img src="logo.png" />
    <?php include_once "menu.php"; ?>
</div>

<div id="container">
    <div class="page">
        <div id="articles">
            <?php new ControllerList(); ?>
        </div>
    </div>
</div>

<div id="footer">
    <h1>&copy; 2020 - <a href="#" target="blank">Raphael Lima</a></h1>
</div>