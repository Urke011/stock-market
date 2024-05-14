<?php
use App\Http\Controllers\StockController;
use App\Http\Controllers\ForumController;
use App\Models\Stock;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $stocks = Stock::all();
    return view('stock.index', ['stocks' => $stocks]);
});
//Route::get('/', [StockController::class,'index'])->name('stock.index');

//Stocks routes
Route::get('/stock', [StockController::class,'index'])->name('stock.index');
Route::get('/stock/create', [StockController::class,'create'])->name('stock.create');
Route::post('/stock', [StockController::class,'store'])->name('stock.store');
Route::get('/stock/{stock}/edit', [StockController::class,'edit'])->name('stock.edit');
Route::put('/stock/{stock}/update', [StockController::class,'update'])->name('stock.update');
Route::delete('/stock/{stock}/delete', [StockController::class,'delete'])->name('stock.delete');

//forum routes
Route::get('/forum',[ForumController::class,'index'])->name('forum.index');
Route::get('/forum/create',[ForumController::class, 'addPost'])->name('forum.create');
