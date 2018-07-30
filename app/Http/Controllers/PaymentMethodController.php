<?php

namespace App\Http\Controllers;

use App\PaymentMethod;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    public function index()
    {
        return PaymentMethod::all()->toJson(JSON_UNESCAPED_UNICODE);
    }

    public function show($id)
    {
        return PaymentMethod::find($id)->toJson(JSON_UNESCAPED_UNICODE);
    }

    public function store(Request $request)
    {
        return PaymentMethod::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $paymentMethod = PaymentMethod::findOrFail($id);
        $paymentMethod->update($request->all());

        return $paymentMethod;
    }

    public function delete(Request $request, $id)
    {
        $paymentMethod = PaymentMethod::findOrFail($id);
        $paymentMethod->delete();

        return 204;
    }
}
