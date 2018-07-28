<?php

namespace App\Http\Controllers;

use App\AcquirerCard;
use Illuminate\Http\Request;

class AcquirerCardController extends Controller
{
    public function index()
    {
        return AcquirerCard::with(['cardBrand', 'acquirer'])
            ->get()
            ->toJson(JSON_UNESCAPED_UNICODE);
    }

    public function show($id)
    {
        return AcquirerCard::find($id);
    }

    public function store(Request $request)
    {
        return AcquirerCard::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $acquirer = AcquirerCard::findOrFail($id);
        $acquirer->update($request->all());

        return $acquirer;
    }

    public function delete(Request $request, $id)
    {
        $acquirer = AcquirerCard::findOrFail($id);
        $acquirer->delete();

        return 204;
    }
}
