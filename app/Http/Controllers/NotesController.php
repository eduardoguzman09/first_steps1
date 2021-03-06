<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Note;
use Illuminate\Support\Facades\Redirect;

class NotesController extends Controller
{
    
    public function index()
    {
 			$notes=Note::all();
			return view('notes/list',compact('notes'));
    }
    public function create()
    {
    	return view('notes/create');
    }
    public function store()
    {
    	$this->validate(request(),[
    		
    		'note'=>['required','max:200']

    		]);
    	$data=request()->all();
   		 Note::create($data);
   		 return Redirect::to('notes');
    }
    public function show($note)
    {
    	dd($note);
    }
    public function images()
    {
        return view('notes/objectnote');
    }
    public function nosotros()
    {
        return view('notes/nosotros');
    }
}
