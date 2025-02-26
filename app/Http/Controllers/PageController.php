<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Welcome';
    }

    public function about(){
        return 'Name: Azkiya Putri Ihtiarilah Nim: 2341760175';
    }

    public function articles($id){
        return 'Article Page with Id: '. $id;
    }
}
