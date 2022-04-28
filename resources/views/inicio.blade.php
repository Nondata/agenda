@extends('layouts/agenda')

@section('tituloPagina', 'Inicio')

@section('contenido')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Ejemplo agenda</h2>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-sm-12">
                            <img src="{{ asset('img/imagen1.jpg')}}" width="20%"alt="">
                            <p style="font-family: Arial">
                                Esto es una prueba con laravel
				Otra prueba
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
//hola mundo
//este es el bueno
