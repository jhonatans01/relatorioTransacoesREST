<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CardBrand;

class CardBrandController extends Controller
{
    public function index()
    {
        return CardBrand::all()->toJson(JSON_UNESCAPED_UNICODE);
    }

    public function show($id)
    {
        return CardBrand::find($id)->toJson(JSON_UNESCAPED_UNICODE);
    }

    public function store(Request $request)
    {
        return CardBrand::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $cardBrand = CardBrand::findOrFail($id);
        $cardBrand->update($request->all());

        return $cardBrand;
    }

    public function delete(Request $request, $id)
    {
        $cardBrand = CardBrand::findOrFail($id);
        $cardBrand->delete();

        return 204;
    }
}
