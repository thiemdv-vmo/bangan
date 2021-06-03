<?php


namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BackendController extends Controller
{
    public function index(){
        $product_count = DB::table('product')->count();
        return view('backend.index',compact('product_count'));
    }

}
