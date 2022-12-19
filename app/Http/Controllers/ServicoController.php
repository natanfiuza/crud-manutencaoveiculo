<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use App\Models\Servico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServicoController extends Controller
{
    public function index()
    {
        $servicos = Servico::all();
        return view('servicos.show', compact('produtos'));
    }
    public function create()
    {

        $marcas = Marca::all();
        return view('servicos.index', compact('marcas'));
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|string|max:255',
            'price' => 'required|alpha_num',

        ]);

        $servico = new Servico();
        $servico->name = $request->name;
        $servico->price = $request->price;


        $servico->save();


        return redirect()->route('servicos.list')->with('success', 'Produto criado corretamente');
    }


    public function edit($id)
    {
        $servico = Servico::findOrFail($id);
        $marcas = Marca::all();

        return view('servicos.edit', compact('servico'));
    }

    public function update(Request $request, $id)
    {
        $servico = Servico::findOrFail($id);
        $servico->name = $request->name;
        $servico->price = $request->price;
 
        $servico->save();

        return redirect()->route('servicos.list')
            ->with('success', 'Produto alterado com sucesso!');
    }
}
