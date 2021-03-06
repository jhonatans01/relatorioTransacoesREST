<?php

namespace App\Http\Controllers;

use App\Acquirer;
use Illuminate\Http\Request;

class AcquirerController extends Controller
{
    public function index()
    {
        return Acquirer::all()
            ->toJson(JSON_UNESCAPED_UNICODE);
    }

    public function show($id)
    {
        return Acquirer::find($id)
            ->toJson(JSON_UNESCAPED_UNICODE);
    }

    public function store(Request $request)
    {
        return Acquirer::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $acquirer = Acquirer::findOrFail($id);
        $acquirer->update($request->all());

        return $acquirer;
    }

    public function delete(Request $request, $id)
    {
        $acquirer = Acquirer::findOrFail($id);
        $acquirer->delete();

        return 204;
    }
}
