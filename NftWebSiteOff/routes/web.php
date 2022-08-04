<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController; 
use App\Http\Controllers\NftController;

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



Route::get('/', [PageController::class, 'index']);



Route::get('/Home', [PageController::class, 'index']);


Route::get('/About', [PageController::class, 'aboutpage']);

Route::get('/Sign', [PageController::class, 'sign']);

Route::post('/register-user/',[PageController::class, 'registerUser'])->name('register-user');

Route::post('/login-user/',[PageController::class, 'loginUser'])->name('login-user');

Route::get('/MarketPlace',[NftController::class, 'marketplace'])->middleware('isLoggedIn');
Route::get('/logout',[PageController::class, 'logout']);


Route::get('/AddNft',[NftController::class, 'main'])->middleware('isLoggedIn');
Route::get('/AddNft-save',[NftController::class, 'main'])->middleware('isLoggedIn');
Route::post('/AddNft-save/',[NftController::class, 'savenft']);


Route::get('/edit-nft/{id}',[NftController::class, 'editnft']);
Route::put('/update-nft/{id}',[NftController::class, 'update']);

Route::get('/buy-nft/{id}',[NftController::class, 'buy']);
Route::get('/thanks/{id}',[NftController::class, 'thnkx']);

Route::get('/download/{id}',[NftController::class, 'downloadnft']);
?>




