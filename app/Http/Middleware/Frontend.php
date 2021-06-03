<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;

class Frontend {
    public function handle($request, Closure $next){
        $config = \DB::table('config')->first();
        $menu = \DB::table('menu')->where('parent_id', 0)->get();
        foreach($menu as $key=>$val){
            $menu[$key]->children = \DB::table('menu')->where('parent_id',$val->id)->get();
        }

        $count=0;
        if(! is_null(session('cart'))){
            foreach(session('cart') as $val){
                $count += $val['quantity'];
            }
        }
        \View::share(['share_config' => $config]);
        \View::share(['count_cart' => $count]);
        \View::share(['menu' => $menu]);
        return $next($request);
    }

}
