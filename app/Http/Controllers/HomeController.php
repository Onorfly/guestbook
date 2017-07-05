<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Message;

class HomeController extends Controller
{
    public function index(){
      $data = [
        'title' => 'Гостевая книга на Laravel',
        'messages' => Message::latest()->paginate(3),
        'count' => Message::count()
      ];
      return view('pages.messages.index', $data);
    }


    public function edit($id){
      $data = [
        'title' => 'Редактирование: Гостевая книга на Laravel',
        'pagetitle' => 'Редактирование: Гостевая книга на Laravel',
      ];
      return view('pages.messages.edit', $data);
    }
}
