<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RotasController extends Controller
{
    public function index() {
        return view ('rotas_gr.enviar');
    }
    
    public function send_mg(Request $request) {
        //$url = 'https://2c32-189-89-181-98.ngrok-free.app/rotas-manual';
        $url = 'https://4e6e-189-89-181-98.ngrok-free.app/rotas-manual';
        
        $route_id = array('data' => $request->input('route_id'));
        
        $response = Http::acceptJson()->post($url, [json_encode($route_id)]);
        
        if($response->successful()) {
            return redirect()->route('enviar_rota');
        }
        else {
            return redirect()->back()->withErrors(['msg' => 'Erro ao enviar rota, tente novamente. Caso o erro persista, entre em contato com o desenvolvedor.']);
        }
    }
    
    public function send_ba(Request $request) {
        $url = 'https://7c89-189-89-181-98.ngrok-free.app/rotas-manual';
        
        $route_id = array('data' => $request->input('route_id'));
        
        $response = Http::acceptJson()->post($url, [json_encode($route_id)]);
        
        if($response->successful()) {
            return redirect()->route('enviar_rota');
        }
        else {
            return redirect()->back()->withErrors(['msg' => 'Erro ao enviar rota, tente novamente. Caso o erro persista, entre em contato com o desenvolvedor.']);
        }
    }
}
