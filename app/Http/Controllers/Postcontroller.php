<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
//use App\Models\User;

class Postcontroller extends Controller
{
    //
    public function index()
    {
        $users = post::simplePaginate(15);


        return view('posts.index')->with(["users" => $users]);
    }
    public function create()
    {

        return view('posts.create');
    }
    public function store(Request $req)
    {   $name = $req->input('name');
        $email = $req->input('body');
        $pass = $req->input('r1');

        $ud = $req->input('Uid');

        post::create(
        ['title' => $name , 'body' => $email , 'enabled' => $pass , 'user_id' => $ud]);

        return redirect()->Route("posts.index");
    }
    public function show($id)
    {

        return dd(post::find($id));
    }



       //
       public function edit($id)
       {
            $users = post::simplePaginate(15);
            $user = $users[$id];

            return view('posts.edit')->with( [ "user" => $user  ]);


    }

       public function update(Request $req , $id)
       {

        $name = $req->input('name');
        $email = $req->input('body');
        $pass = $req->input('r1');


            post::find($id)->update(['title'=> $name , 'body'=> $email , 'enabled' => $pass ]);

            return redirect()->Route("posts.index");
    }
       public function destroy($id)
       {
        post::where('id', $id)->delete();

        return redirect()->Route("posts.index");



    }

    public function dlist()
    {
        $users = post::onlyTrashed()->simplePaginate(15);


        return view('posts.deleted')->with(["users" => $users]);
    }

    public function restore($id){


        post::onlyTrashed()->find($id)->restore();


        return redirect()->route('posts.dlist');

    }


}
