<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $redis = app()->make('redis');
        $redis->set("key1","testvalue");
        $all = ["On Project" => $redis->get("key1") ,
                "On Redis: " => $redis->get("test") ,
               ];
        return $all;
    }
}
