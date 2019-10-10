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
    </style>

    <title>My INE project</title>
  </head>

  <body>

    <!-- LAYOUT: HEADER -->

      <!-- SECTION: Menu principal -->
      <nav class="navbar navbar-expand-sm" style="background:pink">
        <a class="navbar-brand" href="#" style = "color:#34B343"><h2>Vidya gaems</h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" >
          <span class="navbar-toggler-icon"></span>
        </button>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="buscar" placeholder="Buscar" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="#" style = "color:black">Autenticación</a></li>
            <a href='#'><img src="ico/shopping-cart.png" width ="35" height = "35"/></a>
          </ul>
        </div>  
      </nav>

    <!-- LAYOUT: CENTER -->
    <div class="container-fluid" style="margin-top:30px">
      <!-- BLOCK: CENTER -->
      <div class="row">
        <div class="col-sm-10"> 
          <h3>Ofertas del día</h3>
          <div class="row">
            <div class="col-xs-3">
              <figure>
                <a class ="aFooter" href='#'>
                  <img src="img/Red-Dead-Redemption-2.jpg" width='200' height = '250' style="margin-left: 20px;">
                </a>
                <figcaption style="margin-left: 20px;"><b>34.95€</b></figcaption>
                </figure>
            </div>
            <div class="col-xs-3">
              <figure style="margin-left: 20px;">
                <a class ="aFooter" href='#'>
                  <img src="img/NierAutomata.png" width='250' height = '250' style="margin-left: 20px;">
                </a>
              <figcaption style="margin-left: 60px;"><b>29.95€</b></figcaption>
              </figure>
            </div>
            <div class="col-xs-3">
              <figure style="margin-left: 20px;">
                <a class ="aFooter" href='#'>
                  <img src="img/JC4.jpg" width='200' height = '250' style="margin-left: 3em;">
                </a>
              <figcaption style="margin-left: 3em;"><b>29.95€</b></figcaption>
              </figure>
            </div>
            <div class="col-xs-3">
              <figure style="width: 200px; height: 250px; margin-left: 3em;">
                <a class ="aFooter" href='#'>
                  <img src="img/Detroit.png" width='200' height = '250'>
                </a>
              <figcaption style="margin-left: 1em;"><b>29.95€</b></figcaption>
              </figure>
            </div>
          </div>
        </div>
        <!-- BLOCK: RIGHT -->
        <div class="col-sm-2 sidenav" style="background-color: #eeeeee">
          <!-- SECTION: Los más vendidos -->
          <h6>Los más vendidos</h6>
          <ol class="list-unstyled">
            <li class="estiloOl">1<a href='#'><img src="img/FEThreeHouses.png" width='70' height = '100' style="margin-left: 15px;"></a></li>
            <li class="estiloOl">2<a href='#'><img src="img/spider-man-caratula.png" width='100' height = '100'></a></li>
            <li class="estiloOl">3<a href='#'><img src="img/mk11.png" width='100' height = '100'></a></li>
          </ol>
        </div>
      </div>
      

      <div class="row">
        <div class="col-md-10">
        <h3>Nuevos productos</h3>
           <div class="row">
            <div class="col-xs-3">
              <figure>
                <a class ="aFooter" href='#'>
                  <img src="img/Gears5.jpg" width='200' height = '250' style="margin-left: 20px;">
                </a>
                <figcaption style="margin-left: 20px;"><b>69.95€</b></figcaption>
                </figure>
            </div>
            <div class="col-xs-3">
              <figure style="margin-left: 20px;">
                <a class ="aFooter" href='#'>
                  <img src="img/Borderlands3.jpg" width='200' height = '250' style="margin-left: 20px;">
                </a>
              <figcaption style="margin-left: 20px;"><b>69.95€</b></figcaption>
              </figure>
            </div>
            <div class="col-xs-3">
              <figure style="margin-left: 20px;">
                <a class ="aFooter" href='#'>
                  <img src="img/FEThreeHouses.png" width='150' height = '250' style="margin-left: 3em;">
                </a>
              <figcaption style="margin-left: 3em;"><b>54.95€</b></figcaption>
              </figure>
            </div>
          </div>
       </div>
       <div class="col-sm-2 sidenav"  style="background-color: #eeeeee">
          <!-- SECTION: Los más vendidos -->
          <ol class="list-unstyled">
            <li class="estiloOl">4<a href='#'><img src="img/EdithFinch.png" width='100' height = '100'></a></li>
            <li class="estiloOl">5<a href='#'><img src="img/KH3.png" width='100' height = '100'></a></li>
          </ol>
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Ver más juegos</button>
        </div>
      </div>
    </div>
    <hr class="clearfix v='100' b-md-noun">
    <!-- LAYOUT: FOOTER -->
    <div class="row" style="background: pink">
      <div class="col-md-3 mx-auto clearfix" style="padding-left: 3.5em;">
      <br>

       <b>Acerca de</b>
       <ul class="list-unstyled ulEspaciado">
        <li><a href="#" class="small aFooter">Quiénes somos</a></li>
        <li><a href="#" class="small aFooter">Trabaja con nosotros</a></li>
        <li><a href="#" class="small aFooter">Aviso legal</a></li>
       </ul>
      </div>
      <div class="col-md-3 mx-auto clearfix">
        <br>
        <b>Navegación</b>
        <ul class="list-unstyled ulEspaciado">
          <li><a href="#" class="small aFooter">Idioma / languages</a></li>
          <li><a href="#" class="small aFooter">Mapa del sitio</a></li>
       </ul>
      </div>
      <div class="col-md-3 mx-auto clearfix">
        <br>
        <b>Ayuda</b>
        <ul class="list-unstyled ulEspaciado">
          <li><a href="#" class="small aFooter">Gestionar compras</a></li>
          <li><a href="#" class="small aFooter">Tarifas y políticas de envío</a>
            <a href='#'>
              <img src="ico/gorjeo.png" width = '16' height = '16' style = "position: relative; right: -165px;"> 
            </a>
          </li>
          <li><a href="#" class="small aFooter">Devolver o reemplazar productos</a></li>
          <li><a href="#" class="small aFooter">Contacto para ayuda</a></li>
          <li><a href="#" class="small aFooter">IVA sobre los bienes</a></li>
          <li><a href="#" class="small aFooter">Métodos de pago</a></li>
       </ul>
       <br>
      </div>
      <div class="col-md-3 mx-auto clearfix">
        <br>
        <b>Contacto</b>
        <ul class="list-unstyled ulEspaciado">
          <li><a href="#" class="small aFooter">Atención al cliente</a></li>
          <li><a href="#" class="small aFooter">Twitter</a></li>
          <li><a href="#" class="small aFooter">Facebook</a></li>
          <li><a href="#" class="small aFooter">Youtube</a></li>
          <li><a href="#" class="small aFooter">Instagram</a></li>
       </ul>
      </div>
    </div>

    <!-- Loading Javascripts -->   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>')</script>
    <!-- <script src="js/popper.min.js"></script> -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>