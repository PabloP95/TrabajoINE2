<!doctype html>
<!-- Bootstrap first template for Internet y Negocio Electrónico, University of Cadiz,
     since 2019, based on https://www.w3schools.com/bootstrap4/bootstrap_templates.asp -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">      
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet"> 

        <style>
            .fakeimg { height: 100px; background: #aaa; }
            .aFooter{ text-decoration: none; color: black; }
            .ulEspaciado{padding-top: 5px;}
            .estiloOl{font-size: 30px; font-family: 'Quicksand', sans-serif; font-weight: bold; color: #9b9b9b;}
            .zoom {transition: transform .2s; /* Animation */}
            .zoom:hover {transform: scale(1.08);/* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */}
        </style>

        <title>Vidya gaems</title>
    </head>

    <body>
        @include('layouts.layout-header')
        @yield('Login')
    </nav>
    <div class="container-fluid" style="margin-top:30px">
        @yield('PanelCentral')
        @yield('PanelLateral')
        @include ('layouts.layout-footer')
        <!-- Loading Javascripts -->   
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>')</script>
        <!-- <script src="js/popper.min.js"></script> -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
