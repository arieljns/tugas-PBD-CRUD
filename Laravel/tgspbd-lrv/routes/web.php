<?php

use App\Models\Snack;
use App\Http\Controllers\SnackController;
use App\Http\Controllers\SnackCRUDController;
use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\returnValue;

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
    return view('crud.index');
});

// Route::get('/crud', function(){
//     return view('crud.index');
// });


Route::resource('/crud/snack',SnackCRUDController::class);

// Route::resource('/crud/snack',SnackCRUDController::class);

//Route::put('/crud/snack/{snack:id}', [DashboardPostController::class, 'update']);
