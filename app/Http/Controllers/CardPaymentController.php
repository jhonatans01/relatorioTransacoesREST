<?php

namespace App\Http\Controllers;

use App\CardPayment;
use Illuminate\Http\Request;

class CardPaymentController extends Controller
{
    public function index()
    {
        return CardPayment::all()->toJson(JSON_UNESCAPED_UNICODE);
    }

    public function show($id)
    {
        return CardPayment::find($id)->toJson(JSON_UNESCAPED_UNICODE);
    }

    public function store(Request $request)
    {
        $request['card_brand'] = $request->card_brand['id'];
        $request['payment_method'] = $request->payment_method['id'];

        return CardPayment::create($request->all());
    }

    public function update(Request $request, $id)
    {
        if ($request->card_brand['id']) {
            $request['card_brand'] = $request->card_brand['id'];
        }

        if ($request->payment_method['id']) {
            $request['payment_method'] = $request->payment_method['id'];
        }

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
