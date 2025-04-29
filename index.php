<?php

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");
date_default_timezone_set('America/Mexico_City');

$id = (isset($_GET['id'])) ? $_GET['id'] : '';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width
initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>UTFV - Administración 2025-2</title>
</head>
<body oncontextmenu="return false">
    <div id="app" >
        <div class="wrapper">

            <nav id="sidebar">
                <div class="sidebar-header">
                    <img src="img/logo.svg" class="img-fluid">
                        <div class="btnSideBarSe">
                            <button type="button" id="sidebarCollapse2" class="btn btn-secondary mt-3">
                                <i class="fas fa-align-left"></i>
                                <span>Menú</span>
                            </button>
                        </div>
                </div>

                <!-- LINKS MENU -->
                <?php include 'assets/inc/menu.inc'; ?>
                <!-- LINKS MENU -->


            </nav>

            <div id="content">

                <!-- BOTON MENU -->
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <button type="button" id="sidebarCollapse" class="btn btn-infoDos">
                            <i class="fas fa-align-left"></i>
                            <span> Mostrar Menú</span>
                        </button>
                    </div>
                </nav>
                <!-- BOTON MENU -->

                <!-- CONTENIDO -->
                <div class="container animate__animated animate__fadeIn">
                    
                    <?php
                        switch ($id) {
                            case 'inicio':
                                include 'assets/inc/inicio.inc';
                                break;
                            case 'progEduca':
                                include 'assets/inc/progEduca.inc';
                                break;
                            case 'listas':
                                include 'assets/inc/listas2025_2.inc';
                                break;
                            case 'horarios':
                                include 'assets/inc/horarios2025_2.inc';
                                break;
                            case 'especiales':
                                include 'assets/inc/especiales2025_2.inc';
                                break;
                            case 'estadias':
                                include 'assets/inc/estadias2025_2.inc';
                                break;
                            case 'docentes':
                                include 'assets/inc/docentes.inc';
                                break;
                            case 'mapa':
                                include 'assets/inc/mapaCurrilular2023_3.inc';
                                break;
                            
                            default:
                                include 'assets/inc/inicio.inc';
                                break;
                        }
                    ?>
                    
                </div>
                <!-- CONTENIDO -->                
                
            </div>

        </div>
    </div>

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse2').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    
    
</body>
</html>