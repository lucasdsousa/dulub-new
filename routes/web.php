<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CurriculoController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RelatorioController;
use App\Http\Controllers\TelemetriaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\VuuptGRController;
use App\Http\Controllers\RotasController;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $cats = DB::table('categorias')->get();

    return view('index', compact('cats'));
})->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/Empresa', function() {
    return view('empresa');
});

Route::get('/Catalogos', function() {
    return view('catalogos');
});

Route::get('/Renox', function() {
    return view('renox');
});

Route::get('/Comercial', function() {
    return view('comercial');
});

Route::get('/Comprar-Dulub', function() {
    return view('comprar_dulub');
});

Route::get('/Vender-Dulub', function() {
    return view('vender_dulub');
});

Route::get('/Trabalhe-Conosco', [JobController::class, 'index'])->name('vagas');
Route::post('/Enviar-Curriculo', [CurriculoController::class, 'store'])->name('enviar_curriculo');

// Web
Route::get('/Produtos', [ProdutoController::class, 'index'])->name('produtos');
Route::get('/Produtos/{id}', [CategoriaController::class, 'index'])->name('produtos_categoria');

// Mobile
Route::get('/ProdutosM', [ProdutoController::class, 'index_mob'])->name('produtos_m');

Route::post('teste-webhook', function() {
    return view('teste_webhook');
});

Route::get('wait', [RegisterController::class, 'wait_for_approve'])->middleware('auth')->name('wait_for_approve');

Route::post('cadastrar', [RegisterController::class, 'store']);

Route::get('Nova-Vaga', [JobController::class, 'create'])->middleware('auth')->name('nova_vaga');
Route::get('Vagas', [JobController::class, 'show'])->middleware('auth')->name('show_vagas');
Route::get('Editar-Vaga/{id}', [JobController::class, 'edit'])->middleware('auth')->name('editar_vaga');
Route::post('Nova-Vaga', [JobController::class, 'store'])->middleware('auth')->name('save_vaga');
Route::post('Editar-Vaga/{id}', [JobController::class, 'update'])->middleware('auth')->name('update_vaga');
Route::post('Apagar-Vaga/{id}', [JobController::class, 'destroy'])->middleware('auth')->name('apagar_vaga');

Route::get('Telemetria', [TelemetriaController::class, 'index'])->middleware('auth')->name('telemetria_index');
Route::get('Filtrar', [TelemetriaController::class, 'filter'])->middleware('auth')->name('filtrar_telemetria');
Route::get('Filtrar-Motorista', [TelemetriaController::class, 'filter_driver'])->middleware('auth')->name('filtrar_motorista');
Route::get('Filtrar-Placa', [TelemetriaController::class, 'filter_plate'])->middleware('auth')->name('filtrar_placa');
Route::get('/get-plate/{id}', [TelemetriaController::class, 'get_plate'])->middleware('auth')->name('get-plate');
Route::post('/Telemetria-Approve/{id}', [TelemetriaController::class, 'approve'])->middleware('auth')->name('telemetria_approve');

Route::get('Rotas-GR', [VuuptGRController::class, 'index'])->middleware('auth')->name('rotas_gr');
Route::get('Rotas-GR-Geral', [VuuptGRController::class, 'geral'])->middleware('auth');
Route::get('Rotas-GR-Periodo', [VuuptGRController::class, 'filter_date'])->middleware('auth')->name('filtrar_rotas_data');
Route::get('Rotas-GR-Motorista', [VuuptGRController::class, 'filter_driver'])->middleware('auth')->name('filtrar_rotas_motorista');
Route::get('Rotas-GR-Placa', [VuuptGRController::class, 'filter_plate'])->middleware('auth')->name('filtrar_rotas_placa');
Route::get('Rotas-GR-Base', [VuuptGRController::class, 'filter_base'])->middleware('auth')->name('filtrar_rotas_base');
Route::get('Rotas-GR-Status', [VuuptGRController::class, 'filter_status'])->middleware('auth')->name('filtrar_rotas_status');

Route::post('/Rotas-Approve/{id}', [VuuptGRController::class, 'approve'])->middleware('auth')->name('rotasgr_approve');

Route::get('Enviar-Rota', [RotasController::class, 'index'])->middleware('auth')->name('enviar_rota');

Route::post('Enviar-Rota-MG', [RotasController::class, 'send_mg'])->middleware('auth')->name('post_rota_mg');
Route::post('Enviar-Rota-BA', [RotasController::class, 'send_ba'])->middleware('auth')->name('post_rota_ba');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('admin/', [AdminController::class, 'index'])->middleware('auth')->name('admin.index');
Route::get('admin/show', [AdminController::class, 'show'])->middleware('auth')->name('admin.show');
Route::post('admin/approve/{id}', [AdminController::class, 'approve'])->middleware('auth')->name('admin.approve');
Route::post('admin/reprove/{id}', [AdminController::class, 'reprove'])->middleware('auth')->name('admin.reprove');

require __DIR__ . '/auth.php';