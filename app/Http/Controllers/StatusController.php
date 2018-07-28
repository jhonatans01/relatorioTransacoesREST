<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Status;

class StatusController extends Controller
{
    public function index()
    {
        return Status::all()->toJson(JSON_UNESCAPED_UNICODE);
    }

    public function show($id)
    {
        return Status::find($id);
    }

    public function store(Request $request)
    {
        return Status::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = Status::findOrFail($id);
        $article->update($request->all());

        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = Status::findOrFail($id);
        $article->delete();

        return 204;
    }
}
