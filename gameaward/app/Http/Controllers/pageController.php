<?php

namespace App\Http\Controllers;
use App\inforgame;
use Illuminate\Http\Request;

class pageController extends Controller
{
    public function getTrangchu(){
    	return view('page/trangchu');
    }

    public function getGioithieu(){
    	return view('page/gioithieu');
    }

    public function getBinhchon(){
        $game = inforgame::paginate(8);
    	return view('page/binhchon', ['games' => $game]);
    }

    public function getXephang(){
    	return view('page/xephang');
    }

    public function getDangnhap(){
        return view('page/dangnhap');
    }
}
