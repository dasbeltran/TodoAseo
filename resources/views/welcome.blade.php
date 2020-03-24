<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TODO ASEO </title>

    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css')}}">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand  lynotay" href="#"> TODO ASEO 'La Luciernaga'</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav ">
                <li class="nav-item active ml-3">
                    <a class="nav-link" href="{{asset('')}}"> INICIO <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ml-3">
                    <div class="dropdown show">
                        <a class="btn btn-secondary dropdown-toggle" href="" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            CATEGORIAS
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{asset('productohogar.blade.php')}}"> Productos hogar </a>
                            <a class="dropdown-item" href="#"> Productos Institucionales </a>
                            <a class="dropdown-item" href="#"> Productos Varios </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item ml-3" style="margin-right: 100px; margin-left: 50px">
                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
                        CONTACTENOS
                    </button>
                <li class="nav-item ml-3" style="margin-right: 30px">
                    <div class="dropdown show">
                        <a class="btn btn-secondary dropdown-toggle" href="" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            INICIAR SESION
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('login') }}"> Ya tengo Cuenta </a>
                            <a class="dropdown-item" href="{{ route('register') }}"> Registrarse </a>
                        </div>
                    </div>
                </li>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="exampleModalLabel"> CONTACTENOS </h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h6> Telefonos :</h6>
                                311 572 0772 - 311 807 4819
                                <h6>Correo Electronico</h6>
                                Todoaseolaluciernaga@gmail.com
                                <h6> UBIQUENOS </h6>
                                Carrera 7 #3-47
                                Barbosa (Santander)
                                <h6> Horarios de Atencion:</h6>
                                Lunes a Sabado ( 8:00 Am - 7:00 Pm) <br>
                                Domingo ( 9:00 Am - 2:00 Pm)
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger"> Enviar Correo </button>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"> Cerrar </button>
                            </div>
                        </div>
                    </div>
                </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('img/carusel4.jpg')}}" class="d-block w-100 " alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/carusel4.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/carusel4.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/carusel4.jpg')}}" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


    <div class="container col-12">
        <div class="contitulo">
            <h1 class="titulo"> PRODUCTOS GENERALES </h1>
        </div>
        <div class="row m-3">

            <div class="col-12 col-md-3 col-lg-3 text-center mb-4">
                <div class="card " style="width: 18rem;">
                    <img src="{{asset('img/trapero.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> TRAPERO 1000 Gr</h5>
                        <p class="card-text"> Trapero en algodon de 1000g
                            Con palo de madera
                        </p>
                        <a href="#" class="btn btn-primary"> COMPRAR </a>
                        <button type="button" class="btn btn-danger"> $9.000 </button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 text-center">
                <div class="card " style="width: 18rem;">
                    <img src="{{asset('img/plastico.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> CANECA BASURA </h5>
                        <p class="card-text"> Caneca para basura tipo residuo peligroso
                            Capacidad: 130 lts
                        </p>
                        <a href="#" class="btn btn-primary"> COMPRAR </a>
                        <button type="button" class="btn btn-danger"> $32.000 </button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 text-center">
                <div class="card " style="width: 18rem;">
                    <img src="{{asset('img/jabon.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> JABON LIQUIDO ROPA </h5>
                        <p class="card-text"> Jabon liquido para ropa de color
                            Con aroma a flores
                        </p>
                        <a href="#" class="btn btn-primary"> COMPRAR </a>
                        <button type="button" class="btn btn-danger"> $18.000 </button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 text-center">
                <div class="card " style="width: 18rem;">
                    <img src="{{asset('img/cesta.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> CESTA PARA ROPA </h5>
                        <p class="card-text"> Cesta para la ropa con tapa
                            Capacidad 15 Kilos
                        </p>
                        <a href="#" class="btn btn-primary"> COMPRAR </a>
                        <button type="button" class="btn btn-danger"> $13.000 </button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 text-center">
                <div class="card " style="width: 18rem;">
                    <img src="{{asset('img/trapero.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> TRAPERO 1000 Gr</h5>
                        <p class="card-text"> Trapero en algodon de 1000g
                            Con palo de madera
                        </p>
                        <a href="#" class="btn btn-primary"> COMPRAR </a>
                        <button type="button" class="btn btn-danger"> $9.000 </button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 text-center">
                <div class="card " style="width: 18rem;">
                    <img src="{{asset('img/plastico.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> CANECA BASURA </h5>
                        <p class="card-text"> Caneca para basura tipo residuo peligroso
                            Capacidad: 130 lts
                        </p>
                        <a href="#" class="btn btn-primary"> COMPRAR </a>
                        <button type="button" class="btn btn-danger"> $32.000 </button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 text-center">
                <div class="card " style="width: 18rem;">
                    <img src="{{asset('img/jabon.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> JABON LIQUIDO ROPA </h5>
                        <p class="card-text"> Jabon liquido para ropa de color
                            Con aroma a flores
                        </p>
                        <a href="#" class="btn btn-primary"> COMPRAR </a>
                        <button type="button" class="btn btn-danger"> $18.000 </button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 text-center">
                <div class="card " style="width: 18rem;">
                    <img src="{{asset('img/cesta.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> CESTA PARA ROPA </h5>
                        <p class="card-text"> Cesta para la ropa con tapa
                            Capacidad 15 Kilos
                        </p>
                        <a href="#" class="btn btn-primary"> COMPRAR </a>
                        <button type="button" class="btn btn-danger"> $13.000 </button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <footer class="bg-dark text-white text-center py-4">
        <div class="row">
            <br>
            <div class="col col-6 col-md-6">
                <h6> CONTACTENOS :</h6>
                <p> 311 572 0772
                    <br>
                    311 807 4819 </p>
                <h6>Correo Electronico</h6>
                <p> Todoaseolaluciernaga@gmail.com</p>
            </div>
            <div class="col col-6 col-md-6">
                <h6> UBIQUENOS </h6>
                <p> Carrera 7 #3-47
                    Barbosa (Santander)
                </p>
                <h6> Horarios de Atencion:</h6>
                <p>
                    Lunes a Sabado ( 8:00 Am - 7:00 Pm) <br>
                    Domingo ( 9:00 Am - 2:00 Pm)
                </p>
            </div>
        </div>
    </footer>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{ asset('js/jquery-3.4.1.min.js')}}"> </script>
    <script src="{{ asset('js/bootstrap.min.js')}}"> </script>
    <script src="{{ asset('js/popper.min.js')}}"></script>

</body>

</html>