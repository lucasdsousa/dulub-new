<?php

namespace App\Http\Controllers;

//use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;


class VuuptGRController extends Controller
{
    public function approve($id) {
        $user = User::find($id);

        $user->rotas_gr = 1;
        $user->save();

        return redirect()->route('admin.show');
    }
    
    public function index() {
        $user = Auth::user();

        $token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI5MzcxZDcyYi0xZTVjLTQ2OGYtOTRmNi02YjM0Yzk2NDg3N2MiLCJqdGkiOiI1MGM2OThjOTEzYzUwYWMyNmUyZmI4YzhkNzc2OGIyMWQ2MjQ3MWEyMTc0YTgzYjMyNzcwYmU4MTkyYTFmZDBkYTFlZWY0ZWU0NmEyMzdiMSIsImlhdCI6MTY4MTM5NTA4Ny44MDIxMDQsIm5iZiI6MTY4MTM5NTA4Ny44MDIxMDcsImV4cCI6NDgzNzA2ODY4Ny43OTIyMTgsInN1YiI6Ijk0ODEiLCJzY29wZXMiOltdfQ.q1pV2OTC7eDt_lYHstJeFnpsTUQkkwYZ9xBtZShBqcFwvMAQoVaazEbnOsqv-6DAr0yu6YRVnPaevdzVbToc73UtgbZJZrGwOPwOVkyOgtIXqY3__dM_heZNvhdZ6OFzJGVGY4JG1b662j1TWbrdBRthKqAqhlVL_6yrcSGLMCABcL761rhxYoJYUVfk7nTD35yWlH5oaZMfSllHgnUOIEfqRVzN4b0goY-zj7Yfo2MP27RWaTeKAaJ3jciR4F0AJ-kJPfc11GuPlEyq-CzQLs2NmXNAbBfWqBBu2snY6Jo6dtcDw_dAheO3m92cOkrGvKy1DQFDeFze2RlybdOhZDvcbDPgmH_bDU4nmxGLhsLWtlt2R7X8hler2n7TL8PE4w8SZ55BhrtWpKzIZJM1xQO9RCMGdKeFhC8cz0f3JhuNH9ejd0G6xYjEtnRYkklzYiYy9_-Mhgl35SsPJ4JRVlJRKGTMhmmULhbuLXoLfFe8HNVHwM9YXQcK7gAQQiI0WESjmqH3O0ll9XwtY6QyJ7dHolQz1gP-ZdcbU54yNw49Kw3Gv4tvKoj1m7kjh8-sJN8XyLeAestmVp95aVaG9jFSNfRT28X-R8q-PqLdKupLElpYs4QxaJQtndiggzT-nvXslz0B2Jq1VHTjUAhOxWLM7jxl5Erdor_oxAC-d8s';
        
        $motorista = 'https://api.vuupt.com/api/v1/users?filter[0][field]=is_driver&filter[0][operator]=eq&filter[0][value]=Y';
        $placa = 'https://api.vuupt.com/api/v1/vehicles';
        $base_inicial = 'https://api.vuupt.com/api/v1/operational-bases';

        $response_motorista = Http::withToken($token)->timeout(600)->get(urldecode($motorista))->object();
        $response_placa = Http::withToken($token)->timeout(600)->get(urldecode($placa))->object();
        $response_base = Http::withToken($token)->timeout(600)->get(urldecode($base_inicial))->object();
        
        //dd($response_motorista);

        if($user->rotas_gr == 1) {
            return view('rotas_gr.index', compact('response_motorista', 'response_placa', 'response_base'));
        }
        else {
            return view('wait_for_approve');
        }
    }

    public function geral() {
        $user = Auth::user();

        $today = date('Y-m-d');
        $week = date('Y-m-d', strtotime('-1 days', strtotime($today)));

        $token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI5MzcxZDcyYi0xZTVjLTQ2OGYtOTRmNi02YjM0Yzk2NDg3N2MiLCJqdGkiOiI1MGM2OThjOTEzYzUwYWMyNmUyZmI4YzhkNzc2OGIyMWQ2MjQ3MWEyMTc0YTgzYjMyNzcwYmU4MTkyYTFmZDBkYTFlZWY0ZWU0NmEyMzdiMSIsImlhdCI6MTY4MTM5NTA4Ny44MDIxMDQsIm5iZiI6MTY4MTM5NTA4Ny44MDIxMDcsImV4cCI6NDgzNzA2ODY4Ny43OTIyMTgsInN1YiI6Ijk0ODEiLCJzY29wZXMiOltdfQ.q1pV2OTC7eDt_lYHstJeFnpsTUQkkwYZ9xBtZShBqcFwvMAQoVaazEbnOsqv-6DAr0yu6YRVnPaevdzVbToc73UtgbZJZrGwOPwOVkyOgtIXqY3__dM_heZNvhdZ6OFzJGVGY4JG1b662j1TWbrdBRthKqAqhlVL_6yrcSGLMCABcL761rhxYoJYUVfk7nTD35yWlH5oaZMfSllHgnUOIEfqRVzN4b0goY-zj7Yfo2MP27RWaTeKAaJ3jciR4F0AJ-kJPfc11GuPlEyq-CzQLs2NmXNAbBfWqBBu2snY6Jo6dtcDw_dAheO3m92cOkrGvKy1DQFDeFze2RlybdOhZDvcbDPgmH_bDU4nmxGLhsLWtlt2R7X8hler2n7TL8PE4w8SZ55BhrtWpKzIZJM1xQO9RCMGdKeFhC8cz0f3JhuNH9ejd0G6xYjEtnRYkklzYiYy9_-Mhgl35SsPJ4JRVlJRKGTMhmmULhbuLXoLfFe8HNVHwM9YXQcK7gAQQiI0WESjmqH3O0ll9XwtY6QyJ7dHolQz1gP-ZdcbU54yNw49Kw3Gv4tvKoj1m7kjh8-sJN8XyLeAestmVp95aVaG9jFSNfRT28X-R8q-PqLdKupLElpYs4QxaJQtndiggzT-nvXslz0B2Jq1VHTjUAhOxWLM7jxl5Erdor_oxAC-d8s';
        $rotas = 'https://api.vuupt.com/api/v1/routes?filter[0][field]=created_at&filter[0][operator]=gte&filter[0][value]=' . $week;

        $response = Http::withToken($token)->timeout(600)->get(urldecode($rotas))->object();

        //dd($response);
        
        $server = DB::connection('mysql_3')->table('rotas')->where('data', '>=', $week)->orderBy('data')->get();
        $rotas_server = array();
        $id_rotas_server = [];

        foreach($server as $s) {
            $data = Carbon::parse($s->data)->format('d/m/Y');
            $rotas_server[] = ['id_rota' => $s->idRota, 'placa' => $s->placa, 'driver' => $s->driver, 'base' => $s->base, 'msg' => $s->msg, 'data' => $data];
            array_push($id_rotas_server, $s->idRota);
        }
        
        //dd($rotas_server);

        //print_r($rotas_server[1031]);

        if($user->rotas_gr == 1) {
            return view('rotas_gr.rotas', compact('response', 'rotas_server', 'id_rotas_server'));
        }
        else {
            return view('wait_for_approve');
        }
    }

    public function filter_date(Request $request) {
        $user = Auth::user();
        
        $dataI = $request->input('data_I');
        $dataF = $request->input('data_F');

        $today = date('Y-m-d');
        $week = date('Y-m-d', strtotime('-1 days', strtotime($today)));

        $token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI5MzcxZDcyYi0xZTVjLTQ2OGYtOTRmNi02YjM0Yzk2NDg3N2MiLCJqdGkiOiI1MGM2OThjOTEzYzUwYWMyNmUyZmI4YzhkNzc2OGIyMWQ2MjQ3MWEyMTc0YTgzYjMyNzcwYmU4MTkyYTFmZDBkYTFlZWY0ZWU0NmEyMzdiMSIsImlhdCI6MTY4MTM5NTA4Ny44MDIxMDQsIm5iZiI6MTY4MTM5NTA4Ny44MDIxMDcsImV4cCI6NDgzNzA2ODY4Ny43OTIyMTgsInN1YiI6Ijk0ODEiLCJzY29wZXMiOltdfQ.q1pV2OTC7eDt_lYHstJeFnpsTUQkkwYZ9xBtZShBqcFwvMAQoVaazEbnOsqv-6DAr0yu6YRVnPaevdzVbToc73UtgbZJZrGwOPwOVkyOgtIXqY3__dM_heZNvhdZ6OFzJGVGY4JG1b662j1TWbrdBRthKqAqhlVL_6yrcSGLMCABcL761rhxYoJYUVfk7nTD35yWlH5oaZMfSllHgnUOIEfqRVzN4b0goY-zj7Yfo2MP27RWaTeKAaJ3jciR4F0AJ-kJPfc11GuPlEyq-CzQLs2NmXNAbBfWqBBu2snY6Jo6dtcDw_dAheO3m92cOkrGvKy1DQFDeFze2RlybdOhZDvcbDPgmH_bDU4nmxGLhsLWtlt2R7X8hler2n7TL8PE4w8SZ55BhrtWpKzIZJM1xQO9RCMGdKeFhC8cz0f3JhuNH9ejd0G6xYjEtnRYkklzYiYy9_-Mhgl35SsPJ4JRVlJRKGTMhmmULhbuLXoLfFe8HNVHwM9YXQcK7gAQQiI0WESjmqH3O0ll9XwtY6QyJ7dHolQz1gP-ZdcbU54yNw49Kw3Gv4tvKoj1m7kjh8-sJN8XyLeAestmVp95aVaG9jFSNfRT28X-R8q-PqLdKupLElpYs4QxaJQtndiggzT-nvXslz0B2Jq1VHTjUAhOxWLM7jxl5Erdor_oxAC-d8s';
        $rotas = 'https://api.vuupt.com/api/v1/routes?filter[0][field]=created_at&filter[0][operator]=gte&filter[0][value]=' . $dataI . '&filter[1][field]=created_at&filter[1][operator]=lte&filter[1][value]=' . $dataF;

        $response = Http::withToken($token)->timeout(600)->get(urldecode($rotas))->object();

        //dd($dataI);
        
        $server = DB::connection('mysql_3')->table('rotas')->whereBetween('data', [$dataI, Carbon::parse($dataF)->addDay()])->orderBy('data')->get();
        $rotas_server = array();
        $id_rotas_server = [];

        foreach($server as $s) {
            $data = Carbon::parse($s->data)->format('d/m/Y');
            $rotas_server[] = ['id_rota' => $s->idRota, 'placa' => $s->placa, 'driver' => $s->driver, 'base' => $s->base, 'msg' => $s->msg, 'data' => $data];
            array_push($id_rotas_server, $s->idRota);
        }
        
        //dd($server);

        //print_r($rotas_server[1031]);

        if($user->rotas_gr == 1) {
            return view('rotas_gr.rotas_periodo', compact('response', 'rotas_server', 'id_rotas_server'));
        }
        else {
            return view('wait_for_approve');
        }
    }

    public function filter_driver(Request $request) {
        $user = Auth::user();
        
        $driver = $request->input('driver');

        $today = date('Y-m-d');
        $period = date('Y-m-d', strtotime('-30 days', strtotime($today)));

        $token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI5MzcxZDcyYi0xZTVjLTQ2OGYtOTRmNi02YjM0Yzk2NDg3N2MiLCJqdGkiOiI1MGM2OThjOTEzYzUwYWMyNmUyZmI4YzhkNzc2OGIyMWQ2MjQ3MWEyMTc0YTgzYjMyNzcwYmU4MTkyYTFmZDBkYTFlZWY0ZWU0NmEyMzdiMSIsImlhdCI6MTY4MTM5NTA4Ny44MDIxMDQsIm5iZiI6MTY4MTM5NTA4Ny44MDIxMDcsImV4cCI6NDgzNzA2ODY4Ny43OTIyMTgsInN1YiI6Ijk0ODEiLCJzY29wZXMiOltdfQ.q1pV2OTC7eDt_lYHstJeFnpsTUQkkwYZ9xBtZShBqcFwvMAQoVaazEbnOsqv-6DAr0yu6YRVnPaevdzVbToc73UtgbZJZrGwOPwOVkyOgtIXqY3__dM_heZNvhdZ6OFzJGVGY4JG1b662j1TWbrdBRthKqAqhlVL_6yrcSGLMCABcL761rhxYoJYUVfk7nTD35yWlH5oaZMfSllHgnUOIEfqRVzN4b0goY-zj7Yfo2MP27RWaTeKAaJ3jciR4F0AJ-kJPfc11GuPlEyq-CzQLs2NmXNAbBfWqBBu2snY6Jo6dtcDw_dAheO3m92cOkrGvKy1DQFDeFze2RlybdOhZDvcbDPgmH_bDU4nmxGLhsLWtlt2R7X8hler2n7TL8PE4w8SZ55BhrtWpKzIZJM1xQO9RCMGdKeFhC8cz0f3JhuNH9ejd0G6xYjEtnRYkklzYiYy9_-Mhgl35SsPJ4JRVlJRKGTMhmmULhbuLXoLfFe8HNVHwM9YXQcK7gAQQiI0WESjmqH3O0ll9XwtY6QyJ7dHolQz1gP-ZdcbU54yNw49Kw3Gv4tvKoj1m7kjh8-sJN8XyLeAestmVp95aVaG9jFSNfRT28X-R8q-PqLdKupLElpYs4QxaJQtndiggzT-nvXslz0B2Jq1VHTjUAhOxWLM7jxl5Erdor_oxAC-d8s';
        
        $rotas = 'https://api.vuupt.com/api/v1/routes?filter[0][field]=created_at&filter[0][operator]=gte&filter[0][value]=' . $period . '&filter[1][field]=agent_id&filter[1][operator]=eq&filter[1][value]=' . $driver;
        $motorista = 'https://api.vuupt.com/api/v1/users?filter[0][field]=name&filter[0][operator]=eq&filter[0][value]=' . $driver;
        
        $response_rota = Http::withToken($token)->timeout(600)->get(urldecode($rotas))->object();
        $response_driver = Http::withToken($token)->timeout(600)->get(urldecode($motorista))->object();

        //dd($response_driver->data[0]->name);
        
        $server = DB::connection('mysql_3')->table('rotas')->where('driver', '=', $response_driver->data[0]->name)->where('data', '>=', $period)->orderBy('data')->get();
        $rotas_server = array();
        $id_rotas_server = [];

        foreach($server as $s) {
            $data = Carbon::parse($s->data)->format('d/m/Y');
            $rotas_server[] = ['id_rota' => $s->idRota, 'placa' => $s->placa, 'driver' => $s->driver, 'base' => $s->base, 'msg' => $s->msg, 'data' => $data];
            array_push($id_rotas_server, $s->idRota);
        }
        
        //dd($server);

        //print_r($rotas_server[1031]);

        if($user->rotas_gr == 1) {
            return view('rotas_gr.rotas_motorista', compact('response_rota', 'response_driver', 'rotas_server', 'id_rotas_server'));
        }
        else {
            return view('wait_for_approve');
        }
    }

    public function filter_plate(Request $request) {
        $user = Auth::user();
        
        $plate = $request->input('plate_text');

        $today = date('Y-m-d');
        $period = date('Y-m-d', strtotime('-30 days', strtotime($today)));

        $token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI5MzcxZDcyYi0xZTVjLTQ2OGYtOTRmNi02YjM0Yzk2NDg3N2MiLCJqdGkiOiI1MGM2OThjOTEzYzUwYWMyNmUyZmI4YzhkNzc2OGIyMWQ2MjQ3MWEyMTc0YTgzYjMyNzcwYmU4MTkyYTFmZDBkYTFlZWY0ZWU0NmEyMzdiMSIsImlhdCI6MTY4MTM5NTA4Ny44MDIxMDQsIm5iZiI6MTY4MTM5NTA4Ny44MDIxMDcsImV4cCI6NDgzNzA2ODY4Ny43OTIyMTgsInN1YiI6Ijk0ODEiLCJzY29wZXMiOltdfQ.q1pV2OTC7eDt_lYHstJeFnpsTUQkkwYZ9xBtZShBqcFwvMAQoVaazEbnOsqv-6DAr0yu6YRVnPaevdzVbToc73UtgbZJZrGwOPwOVkyOgtIXqY3__dM_heZNvhdZ6OFzJGVGY4JG1b662j1TWbrdBRthKqAqhlVL_6yrcSGLMCABcL761rhxYoJYUVfk7nTD35yWlH5oaZMfSllHgnUOIEfqRVzN4b0goY-zj7Yfo2MP27RWaTeKAaJ3jciR4F0AJ-kJPfc11GuPlEyq-CzQLs2NmXNAbBfWqBBu2snY6Jo6dtcDw_dAheO3m92cOkrGvKy1DQFDeFze2RlybdOhZDvcbDPgmH_bDU4nmxGLhsLWtlt2R7X8hler2n7TL8PE4w8SZ55BhrtWpKzIZJM1xQO9RCMGdKeFhC8cz0f3JhuNH9ejd0G6xYjEtnRYkklzYiYy9_-Mhgl35SsPJ4JRVlJRKGTMhmmULhbuLXoLfFe8HNVHwM9YXQcK7gAQQiI0WESjmqH3O0ll9XwtY6QyJ7dHolQz1gP-ZdcbU54yNw49Kw3Gv4tvKoj1m7kjh8-sJN8XyLeAestmVp95aVaG9jFSNfRT28X-R8q-PqLdKupLElpYs4QxaJQtndiggzT-nvXslz0B2Jq1VHTjUAhOxWLM7jxl5Erdor_oxAC-d8s';
        
        $rotas = 'https://api.vuupt.com/api/v1/routes?filter[0][field]=created_at&filter[0][operator]=gte&filter[0][value]=' . $period . '&filter[1][field]=vehicle_id&filter[1][operator]=eq&filter[1][value]=' . $plate;
        $placa = 'https://api.vuupt.com/api/v1/vehicles?filter[0][field]=license_plate&filter[0][operator]=eq&filter[0][value]=' . $plate;
        
        $response_rota = Http::withToken($token)->timeout(600)->get(urldecode($rotas))->object();
        $response_plate = Http::withToken($token)->timeout(600)->get(urldecode($placa))->object();

        //dd($response);
        
        $server = DB::connection('mysql_3')->table('rotas')->where('placa', '=', $response_plate->data[0]->license_plate)->where('data', '>=', $period)->orderBy('data')->get();
        $rotas_server = array();
        $id_rotas_server = [];

        foreach($server as $s) {
            $data = Carbon::parse($s->data)->format('d/m/Y');
            $rotas_server[] = ['id_rota' => $s->idRota, 'placa' => $s->placa, 'driver' => $s->driver, 'base' => $s->base, 'msg' => $s->msg, 'data' => $data];
            array_push($id_rotas_server, $s->idRota);
        }
        
        //dd($rotas_server);

        //print_r($rotas_server[1031]);

        if($user->rotas_gr == 1) {
            return view('rotas_gr.rotas_placa', compact('response_rota', 'response_plate', 'rotas_server', 'id_rotas_server'));
        }
        else {
            return view('wait_for_approve');
        }
    }

    public function filter_base(Request $request) {
        $user = Auth::user();
        
        $base = $request->input('base');

        $today = date('Y-m-d');
        $period = date('Y-m-d', strtotime('-30 days', strtotime($today)));

        $token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI5MzcxZDcyYi0xZTVjLTQ2OGYtOTRmNi02YjM0Yzk2NDg3N2MiLCJqdGkiOiI1MGM2OThjOTEzYzUwYWMyNmUyZmI4YzhkNzc2OGIyMWQ2MjQ3MWEyMTc0YTgzYjMyNzcwYmU4MTkyYTFmZDBkYTFlZWY0ZWU0NmEyMzdiMSIsImlhdCI6MTY4MTM5NTA4Ny44MDIxMDQsIm5iZiI6MTY4MTM5NTA4Ny44MDIxMDcsImV4cCI6NDgzNzA2ODY4Ny43OTIyMTgsInN1YiI6Ijk0ODEiLCJzY29wZXMiOltdfQ.q1pV2OTC7eDt_lYHstJeFnpsTUQkkwYZ9xBtZShBqcFwvMAQoVaazEbnOsqv-6DAr0yu6YRVnPaevdzVbToc73UtgbZJZrGwOPwOVkyOgtIXqY3__dM_heZNvhdZ6OFzJGVGY4JG1b662j1TWbrdBRthKqAqhlVL_6yrcSGLMCABcL761rhxYoJYUVfk7nTD35yWlH5oaZMfSllHgnUOIEfqRVzN4b0goY-zj7Yfo2MP27RWaTeKAaJ3jciR4F0AJ-kJPfc11GuPlEyq-CzQLs2NmXNAbBfWqBBu2snY6Jo6dtcDw_dAheO3m92cOkrGvKy1DQFDeFze2RlybdOhZDvcbDPgmH_bDU4nmxGLhsLWtlt2R7X8hler2n7TL8PE4w8SZ55BhrtWpKzIZJM1xQO9RCMGdKeFhC8cz0f3JhuNH9ejd0G6xYjEtnRYkklzYiYy9_-Mhgl35SsPJ4JRVlJRKGTMhmmULhbuLXoLfFe8HNVHwM9YXQcK7gAQQiI0WESjmqH3O0ll9XwtY6QyJ7dHolQz1gP-ZdcbU54yNw49Kw3Gv4tvKoj1m7kjh8-sJN8XyLeAestmVp95aVaG9jFSNfRT28X-R8q-PqLdKupLElpYs4QxaJQtndiggzT-nvXslz0B2Jq1VHTjUAhOxWLM7jxl5Erdor_oxAC-d8s';
        
        $rotas = 'https://api.vuupt.com/api/v1/routes?filter[0][field]=created_at&filter[0][operator]=gte&filter[0][value]=' . $period . '&filter[1][field]=start_location_base_id&filter[1][operator]=eq&filter[1][value]=' . $base;
        $base_inicial = 'https://api.vuupt.com/api/v1/operational-bases?filter[0][field]=name&filter[0][operator]=eq&filter[0][value]=' . $base;
        
        $response_rota = Http::withToken($token)->timeout(600)->get(urldecode($rotas))->object();
        $response_base = Http::withToken($token)->timeout(600)->get(urldecode($base_inicial))->object();

        //dd($response_base);
        
        $server = DB::connection('mysql_3')->table('rotas')->where('base', '=', $response_base->data[0]->name)->where('data', '>=', $period)->orderBy('data')->get();
        $rotas_server = array();
        $id_rotas_server = [];

        foreach($server as $s) {
            $data = Carbon::parse($s->data)->format('d/m/Y');
            $rotas_server[] = ['id_rota' => $s->idRota, 'placa' => $s->placa, 'driver' => $s->driver, 'base' => $s->base, 'msg' => $s->msg, 'data' => $data];
            array_push($id_rotas_server, $s->idRota);
        }
        
        //dd($rotas_server);

        //print_r($rotas_server[1031]);

        if($user->rotas_gr == 1) {
            return view('rotas_gr.rotas_base', compact('response_rota', 'response_base', 'rotas_server', 'id_rotas_server'));
        }
        else {
            return view('wait_for_approve');
        }
    }

    public function filter_status(Request $request) {
        $user = Auth::user();
        
        $dataI = $request->input('data_I');
        $dataF = $request->input('data_F');
        
        $status = $request->input('status');

        $today = date('Y-m-d');
        $period = date('Y-m-d', strtotime('-30 days', strtotime($today)));

        //dd($response_base);
        
        if($status == 'success'){
            $server = DB::connection('mysql_3')->table('rotas')->whereRaw('msg regexp "sucesso"')->whereBetween('data', [$dataI, Carbon::parse($dataF)->addDay()])->orderBy('data')->get();
        }
        else if($status == 'fail_gps'){
            $server = DB::connection('mysql_3')->table('rotas')->whereRaw('msg regexp "PGR"')->whereBetween('data', [$dataI, Carbon::parse($dataF)->addDay()])->orderBy('data')->get();
        }
        else if($status == 'fail_cpf'){
            $server = DB::connection('mysql_3')->table('rotas')->whereRaw('msg regexp "CPF"')->whereBetween('data', [$dataI, Carbon::parse($dataF)->addDay()])->orderBy('data')->get();
        }
        
        $rotas_server = array();
        $id_rotas_server = [];

        foreach($server as $s) {
            $data = Carbon::parse($s->data)->format('d/m/Y');
            $rotas_server[] = ['id_rota' => $s->idRota, 'placa' => $s->placa, 'driver' => $s->driver, 'base' => $s->base, 'msg' => $s->msg, 'data' => $data];
            array_push($id_rotas_server, $s->idRota);
        }
        
        //dd($rotas_server);

        //print_r($rotas_server[1031]);

        if($user->rotas_gr == 1) {
            return view('rotas_gr.rotas_status', compact('rotas_server', 'id_rotas_server'));
        }
        else {
            return view('wait_for_approve');
        }
    }
}
