<?php

namespace App\Http\Controllers;

use App\CardPayment;
use Illuminate\Http\Request;

class CardPaymentController extends Controller
{
    public function index()
    {
        return CardPayment::with(['cardBrand', 'paymentMethod'])
            ->get()
            ->toJson(JSON_UNESCAPED_UNICODE);
    }

    public function show($id)
    {
        return CardPayment::find($id);
    }

    public function store(Request $request)
    {
        return CardPayment::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $cardPayment = CardPayment::findOrFail($id);
        $cardPayment->update($request->all());

        return $cardPayment;
    }

    public function delete(Request $request, $id)
    {
        $cardPayment = CardPayment::findOrFail($id);
        $cardPayment->delete();

        return 204;
    }
}
