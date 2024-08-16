<?php
use App\Http\Controllers\StockController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\AdvisorController;
use App\Models\Stock;
use App\Models\advisor;
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

Route::get('/search', [StockController::class,'search'])->name('stock.search');

//forum routes
Route::get('/forum',[ForumController::class,'index'])->name('forum.index');
Route::get('/forum/create',[ForumController::class, 'createPost'])->name('forum.create');
Route::post('/forum', [ForumController::class,'storePost'])->name('forum.store');
Route::get('/forum/{forum}/edit', [ForumController::class,'edit'])->name('forum.edit');
Route::put('/forum/{forum}/update', [ForumController::class,'update'])->name('forum.update');
Route::delete('/forum/{forum}/delete', [ForumController::class,'delete'])->name('forum.delete');

//forum advisor
Route::get('/advisor',[AdvisorController::class,'create'])->name('advisor.create');
Route::post('/advisor', [AdvisorController::class,'apiRequest'])->name('advisor.apiRequest');
