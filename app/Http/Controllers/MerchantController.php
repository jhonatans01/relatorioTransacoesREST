<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Merchant;

class MerchantController extends Controller
{
    public function index()
    {
        return Merchant::all()->toJson(JSON_UNESCAPED_UNICODE);
    }

    public function show($id)
    {
        return Merchant::find($id);
    }

    public function store(Request $request)
    {
        return Merchant::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $merchant = Merchant::findOrFail($id);
        $merchant->update($request->all());

        return $merchant;
    }

    public function delete(Request $request, $id)
    {
        $merchant = Merchant::findOrFail($id);
        $merchant->delete();

        return 204;
    }
}
