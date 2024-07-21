<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Stock;
class StockController extends Controller
{
    public function index(){

        $stocks = Stock::all();
        return view('stock.index',['stocks'=> $stocks]);
    }
    public function create(){
        return view('stock.create');
    }
    public function store(Request $request){
        //dd($request);
        $data = $request->validate([
            'name'=> 'required',
            'num_stocks'=> 'required|numeric',
            'price'=> 'required|decimal:0,2',
            'description'=> 'nullable',
        ]);

        $newStock = Stock::create($data);
        return redirect(route('stock.index'));
    }
    public function edit(Stock $stock){

        return view('stock.edit',['stock'=> $stock]);
    }
    public function update(Stock $stock,Request $request){
        $data = $request->validate([
            'name'=> 'required',
            'num_stocks'=> 'required|numeric',
            'price'=> 'required|decimal:0,2',
            'description'=> 'required|nullable',
        ]);

        $stock->update($data);
        return redirect(route('stock.index'))->with("success",'Stock updated successfully!');
    }
    public function delete(Stock $stock){
        $stock->delete();
        return redirect(route('stock.index'))->with("success",'Stock deleted successfully!');
    }
}
