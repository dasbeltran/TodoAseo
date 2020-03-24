@extends('layouts.app')

@section('content')
<div class="row">
    <div class="opciones col-2 justify-content-center" style="background-color: black">
        <ul class="nav nav-tabs col-3 my-5 mx-4" id="myTab" role="tablist">
            <li class="nav-item ">
                <a class="btn btn-light btn-block" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"> PRODUCTOS </a>
            </li>
            <br>
            <li>
                <a class="btn btn-light btn-block" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"> PROMOCIONES </a>
            </li>
            <br>
            <li class="nav-item">
                <a class="btn btn-light btn-block btn-block" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false"> USUARIO </a>
            </li>
        </ul>


    </div>
    <div class="vistas col-10 " style="margin-top: 2% ;justify-content: center">
        <div class="tab-content">
            <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row justify-content-center">
                    <div class="row col-10 justify-content-center">

                        <div class="col-3 mx-4 my-4">
                            <div class="card " style="width: 16rem;">
                                <img src="{{asset('img/cesta.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"> CESTA PARA ROPA </h5>
                                    <p class="card-text">
                                        Cesta para la ropa con tapa
                                        Capacidad 15 Kilos
                                    </p>
                                    <a href="#" class="btn btn-primary"> COMPRAR </a>
                                    <button type="button" class="btn btn-danger"> $18.000 </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-3 mx-4 my-4">
                            <div class="card " style="width: 16rem;">
                                <img src="{{asset('img/cesta.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"> CESTA PARA ROPA </h5>
                                    <p class="card-text">
                                        Cesta para la ropa con tapa
                                        Capacidad 15 Kilos
                                    </p>
                                    <a href="#" class="btn btn-primary"> COMPRAR </a>
                                    <button type="button" class="btn btn-danger"> $18.000 </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-3 mx-4 my-4">
                            <div class="card " style="width: 16rem;">
                                <img src="{{asset('img/cesta.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"> CESTA PARA ROPA </h5>
                                    <p class="card-text">
                                        Cesta para la ropa con tapa
                                        Capacidad 15 Kilos
                                    </p>
                                    <a href="#" class="btn btn-primary"> COMPRAR </a>
                                    <button type="button" class="btn btn-danger"> $18.000 </button>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row col-10 justify-content-center">

                        <div class="col-3 mx-4 my-4">
                            <div class="card " style="width: 16rem;">
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

                        <div class="col-3 mx-4 my-4">
                            <div class="card " style="width: 16rem;">
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

                        <div class="col-3 mx-4 my-4">
                            <div class="card " style="width: 16rem;">
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

                    </div>

                    <div class="row col-10 justify-content-center">

                        <div class="col-3 mx-4 my-4">
                            <div class="card " style="width: 16rem;">
                                <img src="{{asset('img/plastico.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"> CANECA BASURA </h5>
                                    <p class="card-text"> Caneca para basura tipo residuo peligroso
                                        Capacidad: 130 lts
                                    </p>
                                    <a href="#" class="btn btn-primary"> COMPRAR </a>
                                    <button type="button" class="btn btn-danger"> $18.000 </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-3 mx-4 my-4">
                            <div class="card " style="width: 16rem;">
                                <img src="{{asset('img/plastico.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"> CANECA BASURA </h5>
                                    <p class="card-text"> Caneca para basura tipo residuo peligroso
                                        Capacidad: 130 lts
                                    </p>
                                    <a href="#" class="btn btn-primary"> COMPRAR </a>
                                    <button type="button" class="btn btn-danger"> $18.000 </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-3 mx-4 my-4">
                            <div class="card " style="width: 16rem;">
                                <img src="{{asset('img/plastico.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"> CANECA BASURA </h5>
                                    <p class="card-text"> Caneca para basura tipo residuo peligroso
                                        Capacidad: 130 lts
                                    </p>
                                    <a href="#" class="btn btn-primary"> COMPRAR </a>
                                    <button type="button" class="btn btn-danger"> $18.000 </button>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>

            <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row col-10 justify-content-center">

                        <div class="col-3 mx-4 my-4">
                            <div class="card " style="width: 16rem;">
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

                        <div class="col-3 mx-4 my-4">
                            <div class="card " style="width: 16rem;">
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

                        <div class="col-3 mx-4 my-4">
                            <div class="card " style="width: 16rem;">
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

                    </div>
            </div>

            <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                <form action="">
                    <div class="fotousuario col-3">
                        <img class="masthead-avatar mb-5" src="img/avataaars.svg" alt="">
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ Auth::user()->name }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('telefono') }}</label>

                        <div class="col-md-6">
                            <input id="telefono" type="text" class="form-control" name="telefono"required autocomplete="telefono" autofocus>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Modificar') }}
                            </button>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
</div>
@endsection