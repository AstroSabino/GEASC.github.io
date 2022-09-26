<!DOCTYPE html>

<html>
    <head>
        <title>GEASC</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


        <link href="https://fonts.googleapis.com/css?family=Handlee"rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="app/css/stylegeasc.css">
	    <link rel="shortcut icon" href="app/img/content/LogoGEASC.png" sizes="32x32" type="image/png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
    <div id="mySidebar" class="sidebar" align="center">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a href="?i=home" id="home" method="get" action="index.php">Home</a>
        <a href="?i=events" id="events" method="get" action="index.php">Nossos eventos</a>
        <a href="?i=statistics" id="statistics" method="get" action="index.php">Estatísticas</a>
        <a href="?i=works" id="works" method="get" action="index.php">Apresentações</a>
        <a href="?i=links" id="links" method="get" action="index.php">Links úteis</a>
        <a href="?i=about">Quem somos</a>
    </div>
                
    <div id="main" >
        <button class="openbtn" onclick="openNav()">☰ Menu</button>  
    </div>

    <script>
        function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
            document.getElementById("main").style.marginLeft = "0px";
        }
                        
        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("main").style.marginLeft= "0";
        }
    </script>
        <div class="media">
            <img src="/app/img/content/LogoGEASC.png" class="align-self-start mr-3" height="150px" width="200px">
            <div>
                <br>
                <br>
                <h1 class="media-body"><span>   Grupo de Eventos Astronômicos de
                        São Cristóvão</span></h1>
            </div>
        </div>

    


    <header>

    </header>
