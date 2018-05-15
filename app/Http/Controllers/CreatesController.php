<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class CreatesController extends Controller
{
    public function home(){
    	$articles = Article::all();
    	return view('home', ['articles' => $articles]);
    }

    public function add(Request $request){
    	//validate the field
    	$this->validate($request, [
    		'title' => 'required',
    		'description' => 'required'
    	]);

    	//calling the model
    	$articles = new Article;
    	$articles->title = $request->input('title');
    	$articles->description = $request->input('description');
    	$articles->save();
    	return redirect('/')->with('response', 'Add Successfully');

    }

    public function update($id){
    	$articles = Article::find($id);
    	return view('update', ['articles' => $articles]);
    }

    public function edit(Request $request, $id){
    	$this->validate($request, [
    		'title' => 'required',
    		'description' => 'required'
    	]);

    	$data = array(
    		'title' => $request->input('title'),
    		'description' => $request->input('description')
    	);
    	Article::where('id', $id)
    	->update($data);
    	return redirect('/')->with('response', 'Updated Successfully');

    }

    public function destroy($id){
    	Article::where('id', $id)
    	->delete();
    	return redirect('/')->with('response', 'Deleted Successfully');

    }
}
