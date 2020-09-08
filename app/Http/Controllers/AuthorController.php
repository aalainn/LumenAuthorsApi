<?php

namespace App\Http\Controllers;

class AuthorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
    returns all authors
    * @return illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
    creates new author
    * @return illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
    show one author
    * @return illuminate\Http\Response
     */
    public function show($authorID)
    {
    }

    /**
    update one author
    * @return illuminate\Http\Response
     */
    public function update(Request $request, $author_id)
    {
    }
    /**
    delete one author
    * @return illuminate\Http\Response
     */
    public function destroy($author_id)
    {
    }

}
