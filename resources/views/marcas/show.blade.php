@extends('adminlte::page')

@section('title', config('adminlte.title'))

@section('content_header')
    <div class="d-flex row justify-content-between">
        <h1 class="m-0 text-dark mb-4">Lista de marcas</h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Marca</li>
        </ol>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="card-title text-bold text-lg">Marcas</h1>
            <div class="card-tools">
                <a href={{ route('marcas.create')}} class="btn btn-success col fileinput-button dz-clickable">
                    <i class="fas fa-plus"></i>
                    <span>Novo</span>
                </a>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-responsive table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            Id
                        </th>
                        <th style="width: 79%">
                            Nome
                        </th>

                        <th style="width: 20%">
                            Ações
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($marcas as $marca)
                        <tr>
                            <td>
                                {{ $marca->id }}
                            </td>
                            <td>
                                {{ $marca->name }}

                            </td>

                            <td class="project-actions">
                                    <a class="btn btn-secondary btn-sm" href="{{ route('marcas.edit', $marca->id) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
