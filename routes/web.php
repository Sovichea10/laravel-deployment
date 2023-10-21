<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

// Call Controller
use App\Http\Controllers\TestController;
// use Illuminate\Support\Facades\Route;

/** @var Illuminate\Support\Facades\Route $router */;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

$router->get('/v1', function () {
    $router = app()->version();
    return "<h1 style='text-align:center; text-transform: uppercase; padding-top: 45vh; color: grey; font-weight: lighter; font-family: monospace; font-size: xxx-large'>Laravel $router <span style='color: black'>:)<span></h1>";
});

Route::get('/version', function () {
    $lv = app()->version();
    $php = PHP_VERSION;
    $date= Date::now()->format('Y-m-d');
    return "<h1 style='text-align:center'>Laravel $lv, PHP $php, Date $date</h1>";
});
Route::get('/user', function () {
    $user = DB::table('user')->take(6)->get();
    sleep(3); // Delay 3 seconds
    return response()->json([
        'data' => $user
    ]);
});
// Route::get('/password', function () {
//     $password= env('DB_PASSWORD');
//     return $password;
// });
Route::get('/test', [TestController::class, 'store']);
