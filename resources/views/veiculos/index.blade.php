@extends('adminlte::page')

@section('title', config('adminlte.title'))

@section('content_header')
    <div class="d-flex row justify-content-between">
        <h1 class="m-0 text-dark mb-4">Cadastrar Veículo</h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('veiculos.list') }}">Cadastro</a></li>
            <li class="breadcrumb-item active">Veículos</li>
        </ol>
    </div>



@stop


@section('content')
    <div class="">
        <div class="card card-gray mb-0 shadow-sm">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-file-alt mr-2 "></i>Formulário de Cadastro
                </h3>
            </div>
        </div>
        <form action={{ route('veiculos.store') }} method="POST" class="form-fluid p-4 rounded shadow"
            style="background: white;">
            @csrf

            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="inputPLaca">
                        <img src="{{ asset('img/plate_ico.svg') }}" width="20" style="margin-top: -5"> Placa
                    </label>
                    <input type="text" class="form-control  {{ $errors->has('plate') ? 'is-invalid' : '' }} plate"
                        id="inputPLaca" placeholder="AAA 0A00" name="plate" value="{{ old('plate') }}"
                        style="width:11em">
                </div>
                <div class="form-group col-md-9">
                    <label for="inputPrice">
                        <i class="fas fa-car-alt"></i> Modelo
                    </label>
                    <input type="text" class="form-control  {{ $errors->has('model') ? 'is-invalid' : '' }}"
                        id="inputPrice" placeholder="Modelo" name="model" value="{{ old('model') }}">
                </div>
            </div>
            <div class="form-row">
                <div class="text-danger form-group col-md-6">
                    {{ $errors->first('plate') }}
                </div>
            </div>
            <div class="form-row">
                <div class="text-danger form-group col-md-6">
                    {{ $errors->first('model') }}
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputVersion">
                        <i class="fas fa-audio-description"></i> Versão
                    </label>
                    <input type="text" class="form-control  {{ $errors->has('version') ? 'is-invalid' : '' }} "
                        id="inputVersion" placeholder="Versão" name="versionr" value="{{ old('version') }}">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputYear">
                        <i class="fas fa-calendar-alt"></i> Ano
                    </label>
                    <input type="text" class="form-control  {{ $errors->has('year') ? 'is-invalid' : '' }} year"
                        id="inputYear" placeholder="9999" name="year" value="{{ old('year') }}" style="width:6em">
                </div>
            </div>
            <div class="form-row">
                <div class="text-danger form-group col-md-6">
                    {{ $errors->first('version') }}
                </div>
            </div>
            <div class="form-row">
                <div class="text-danger form-group col-md-6">
                    {{ $errors->first('year') }}
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputNote">
                       <i class="fas fa-info"></i> Observações
                    </label>
                    <textarea class="form-control  {{ $errors->has('note') ? 'is-invalid' : '' }} year" id="inputNote"
                        placeholder="Observações" name="note">
                        {{ old('note') }}
                    </textarea>

                </div>
                <div class="form-group col-md-6">
                    <label for="inputMarca">
                        <i class="fas fa-copyright"></i> Marca
                    </label>
                    <select class=" selectpicker form-control " data-dropdown-css-class="select2-danger" id="marca_id"
                        name="marca_id" style="width: 100%;">
                        <option selected="selected" disabled>Selecione uma marca...
                        </option>
                        @foreach ($marcas as $marca)
                            <option value="{{ $marca->id }}" {{ old('em') == $marca->id ? 'selected' : '' }}>
                                {{ $marca->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="text-danger form-group col-md-6">
                    {{ $errors->first('note') }}
                </div>
            </div>
            <div class="form-row">
                <div class="text-danger form-group col-md-6">
                    {{ $errors->first('marca_id') }}
                </div>
            </div>

            <div class="form-row">

                <button type="submit" class="btn btn-secondary btn-md">Cadastrar</button>


                <a class="ml-3" href="{{ route('veiculos.list') }}"><button type="button"
                        class="btn btn-danger btn-md ">Voltar</button></a>

            </div>
    </div>
    </form>
    </div>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-mask/jquery.mask.min.js') }}"></script>
    <script>
        $(".plate").mask('AAA AAAA')
        $(".year").mask('0000')
    </script>

@stop
