@extends('adminlte::page')

@section('title', config('adminlte.title') . ' - Editar Produto')

@section('content_header')
    <div class="d-flex row justify-content-between">
        <h1 class="m-0 text-dark mb-4">Editar Serviço</h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Cadastro</a></li>
            <li class="breadcrumb-item active">Serviço</li>
        </ol>
    </div>
@stop

@section('content')
    <div class="card card-gray mb-0 shadow-sm">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fas fa-pencil-alt mr-2"></i>
                Editar Serviço
            </h3>
        </div>
    </div>
    <form action={{ route('servicos.edit', $servico->id) }} method="POST" enctype="multipart/form-data"
        class="form-fluid p-4 rounded shadow bg-white">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputNome">
                    <i class="fas fa-edit"></i> Nome
                </label>
                <input type="text" class="form-control  {{ $errors->has('name') ? 'is-invalid' : '' }}" id="inputNome"
                    placeholder="Nome" name="name" value="{{ $servico->name }}">
            </div>

            <div class="form-group col-md-6">
                <label for="inputUrlImage">
                    <i class="fas fa-edit"></i> Nome
                </label>
                <input type="text" class="form-control  {{ $errors->has('url_image') ? 'is-invalid' : '' }}" id="inputUrlImage"
                    placeholder="Nome" name="name" value="{{ $servico->url_image }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">

            </div>
            <div class="form-group col-md-6">

            </div>
        </div>

        <div class="form-row">
            <button type="submit" class="btn btn-secondary mt-2">Salvar</button>
            <a class="ml-3" href="{{ route('servicos.list') }}"><button type="button"
                    class="btn btn-danger mt-2 ">Voltar</button></a>
        </div>


    </form>

    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-mask/jquery.mask.min.js') }}"></script>
    <script>

    </script>

@stop
