<?php

namespace App\Http\Controllers;

use App\Author;
use App\Traits\ApiResponser;
use Illuminate\Http\Response;

class AuthorController extends Controller
{
    use ApiResponser;
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
        $authors = Author::all();
        return $this->successResponser($authors);

    }

    /**
    creates new author
    * @return illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
          'name' => 'required|max:255',
          'gender' => 'required|max:255|in:male, female',
          'country' => 'required|max:255',
        ];

        $this->validate($request, $rules);

        $author = Author::create($request->all());

        return $this->successResponser($author, Response::HTTP_CREATED);


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
