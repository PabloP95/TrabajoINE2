<!-- SECTION: Menu principal -->
@extends('masters.master-welcome')
@section('Login')
<!-- OJO, esto puede cambiar si el usuario se mete. Así que habria que poner un section y un yield -->
<div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" href="#" style = "color:black">Autenticación</a></li>
        <a href='#'><img src="ico/shopping-cart.png" width ="35" height = "35"/></a>
    </ul>
</div> 
@endsection 
</nav>

<!-- LAYOUT: CENTER -->
<!-- BLOCK: CENTER -->
@section('PanelCentral')
<div class="row"> 
    <!-- En la columna siguiente se encuentran las ofertas del día -->
    <div class="col-sm-10"> 
        <!-- Aqui se encuentran las ofertas del día -> Van a tener que cambiar, OJO -->
        <h3>Ofertas del día</h3>
        <!-- Ponemos otra fila dentro de la columna de 10 para poder poner las imagenes y precio correspondientes -->
        <div class="row">
            <div class="col-xs-3 zoom">
                <figure>
                    <a class ="aFooter" href='#'>
                        <img src="img/Red-Dead-Redemption-2.jpg" width='200' height = '250' style="margin-left: 20px;">
                    </a>
                    <figcaption style="margin-left: 20px;"><b>34.95€</b></figcaption> <!-- Este es el texto a pie de la foto -->
                </figure>
            </div>
            <div class="col-xs-3 zoom">
                <figure style="margin-left: 20px;">
                    <a class ="aFooter" href='#'>
                        <img src="img/NierAutomata.png" width='250' height = '250' style="margin-left: 20px;">
                    </a>
                    <figcaption style="margin-left: 60px;"><b>29.95€</b></figcaption>
                </figure>
            </div>
            <div class="col-xs-3 zoom">
                <figure style="margin-left: 20px;">
                    <a class ="aFooter" href='#'>
                        <img src="img/JC4.jpg" width='200' height = '250' style="margin-left: 3em;">
                    </a>
                    <figcaption style="margin-left: 3em;"><b>29.95€</b></figcaption>
                </figure>
            </div>
            <div class="col-xs-3 zoom">
                <figure style="width: 200px; height: 250px; margin-left: 3em;">
                    <a class ="aFooter" href='#'>
                        <img src="img/Detroit.png" width='200' height = '250'>
                    </a>
                    <figcaption style="margin-left: 1em;"><b>29.95€</b></figcaption>
                </figure>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10">
                <h3>Nuevos productos</h3>
                <div class="row">
                    <div class="col-xs-3 zoom">
                        <figure>
                            <a class ="aFooter" href='#'>
                                <img src="img/Gears5.jpg" width='200' height = '250' style="margin-left: 20px;">
                            </a>
                            <figcaption style="margin-left: 20px;"><b>69.95€</b></figcaption>
                        </figure>
                    </div>
                    <div class="col-xs-3 zoom">
                        <figure style="margin-left: 20px;">
                            <a class ="aFooter" href='#'>
                                <img src="img/Borderlands3.jpg" width='200' height = '250' style="margin-left: 20px;">
                            </a>
                            <figcaption style="margin-left: 20px;"><b>69.95€</b></figcaption>
                        </figure>
                    </div>
                    <div class="col-xs-3 zoom">
                        <figure style="margin-left: 20px;">
                            <a class ="aFooter" href='#'>
                                <img src="img/FEThreeHouses.png" width='150' height = '250' style="margin-left: 3em;">
                            </a>
                            <figcaption style="margin-left: 3em;"><b>54.95€</b></figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    <!-- BLOCK: RIGHT -->
    <!-- Bloque de la derecha, donde se encuentran los artículos más vendidos -->
    <!-- Como puede cambiar, haría falta poner un section y un yield en el master -->
    @section('PanelLateral')
    <div class="col-sm-2 sidenav" style="background-color: #eeeeee">
        <!-- SECTION: Los más vendidos -->
        <h6>Los más vendidos</h6>
        <ol class="list-unstyled">
            <li class="estiloOl zoom">1<a href='#'><img src="img/FEThreeHouses.png" width='70' height = '100' style="margin-left: 15px;"></a></li>
            <li class="estiloOl zoom">2<a href='#'><img src="img/spider-man-caratula.png" width='100' height = '100'></a></li>
            <li class="estiloOl zoom">3<a href='#'><img src="img/mk11.png" width='100' height = '100'></a></li>
            <li class="estiloOl zoom">4<a href='#'><img src="img/EdithFinch.png" width='100' height = '100'></a></li>
            <li class="estiloOl zoom">5<a href='#'><img src="img/KH3.png" width='100' height = '100'></a></li>
        </ol>
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Ver más juegos</button>
    </div>
</div>
</div>
@endsection