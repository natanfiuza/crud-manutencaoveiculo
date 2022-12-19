<?php

namespace App\Http\Controllers;


use App\Models\Marca;
use App\Models\Produto;
use App\Models\Veiculo;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VeiculoController extends Controller
{
    public function index()
    {
        $veiculos = Veiculo::all();
        return view('veiculos.show', compact('veiculos'));
    }
    public function create()
    {
        $marcas = Marca::all()->sortBy("name");
        return view('veiculos.index',compact('marcas'));
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|string|max:255',
            'plate' => 'alpha_num|required|string|max:7',
            'model' => 'string|max:255',

        ]);

        $veiculo = new Veiculo();
        $veiculo->name = $request->name;
        $veiculo->plate = $request->plate;
        $veiculo->model = $request->model;
        $veiculo->version = $request->version;
        $veiculo->year = $request->year;
        $veiculo->note = $request->note;
        $veiculo->marca_id = $request->marca_id;
        $veiculo->user_id = Auth::user()->id;

        $veiculo->save();

        return redirect()->route('veiculos.list')->with('success', 'Veículo criado corretamente');
    }


    public function edit($id)
    {
        $veiculo = Veiculo::findOrFail($id);
        $marcas = Marca::all();

        return view('veiculos.edit', compact('veiculo','marcas') );
    }

    public function update(Request $request, $id)
    {
        $veiculo = Veiculo::findOrFail($id);
        $veiculo->name = $request->name;
        $veiculo->plate = $request->plate;
        $veiculo->model = $request->model;
        $veiculo->version = $request->version;
        $veiculo->year = $request->year;
        $veiculo->note = $request->note;

        $veiculo->marca_id = $request->marca_id;

        $veiculo->save();



        return redirect()->route('veiculos.list')
        ->with('success', 'Veículo alterado com sucesso!');
    }
}
