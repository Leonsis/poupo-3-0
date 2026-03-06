<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Earnings;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class EarningsController extends Controller
{

    // Function para visualizar a pagina
    public function receitas()
    {
        $earnings = Earnings::all(); // SELECT * FROM Earnings
        
        // Pega os valores dos utimos três meses e soma.
        $dataInicio = Carbon::now()->startOfMonth()->subMonths(2);
        $dados_mes_total = DB::table('Earnings')
            ->select(
                DB::raw("YEAR(dat_pagamento) as ano"),
                DB::raw("MONTH(dat_pagamento) as mes"),
                DB::raw("SUM(valor) as total")
            )
            ->where('user_id', auth()->id())
            ->where('dat_pagamento', '>=', $dataInicio)
            ->groupBy('ano', 'mes')
            ->orderBy('ano')
            ->orderBy('mes')
            ->get();
        //dd($dados_mes_total);
        return view('receitas', compact('earnings', 'dados_mes_total'));    
    }

    // Function para registrar receitas
    public function store(Request $request)
    {
        
        $valor = str_replace(['R$', ' ', '.'], '', $request->valor);
        $valor = str_replace(',', '.', $valor);
        $valor = (float) $valor; // Transforma o valor em float

        $data = $request->validate([
            'origem_receita'  => 'required|string|max:255',
            'dat_pagamento'   => 'required|date',
            'descricao'       => 'required|string|max:255'
        ]);

        $data['valor'] = $valor;
        $data['user_id'] = auth()->id(); // Pega o id do usuario logado

        Earnings::create($data);

        return response()->json($request->all()); // Para depuração, retorna os dados recebidos como JSON
    }

    // Function para deletar uma receita
    public function delete($id) {
        /* dd('Está na fucntion delete. O id do item retornado: ' . $id); */
        $earnings = Earnings::where('id', $id)->firstOrFail();// SELECT * FROM Earnings WHERE id = ?

        $earnings->delete();// Faz o delete.

        return redirect()->back()->with('success', 'Item deletado com sucesso!');
    }
}