@extends('layouts/agenda')

@section('tituloPagina', 'Agregar contacto')

@section('contenido')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Agregar nuevo contacto</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <form action="{{route('contactos.store')}}" method="post">
                                @csrf
                                @method('POST')
                                <label for="categoria">Categoria</label>
                                <select name="categoria" id="option" class="form-select" required>
                                    <option value="">Selecciona una opcion</option>
                                    @foreach ($categorias as $item)
                                        <option value="{{$item->id_categoria}}">{{$item->nombre}}</option>
                                    @endforeach
                                </select>
                                <label for="paterno">Apellido Paterno</label>
                                <input type="text" class="form-control" id="ap_paterno" name="paterno" required>
                                <label for="materno">Apellido Materno</label>
                                <input type="text" class="form-control" id="ap_materno" name="materno" required>
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                                <label for="telefono">Telefono</label>
                                <input type="tel" class="form-control" id="telefono" name="telefono" required>
                                <label for="correo">Correo electronico</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                                <button class="btn btn-primary">Agregar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection