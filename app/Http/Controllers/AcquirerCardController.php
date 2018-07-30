<?php

namespace App\Http\Controllers;

use App\AcquirerCard;
use Illuminate\Http\Request;

class AcquirerCardController extends Controller
{
    public function index()
    {
        return AcquirerCard::all()->toJson(JSON_UNESCAPED_UNICODE);
    }

    public function show($acquirerId, $cardBrandId)
    {
        return AcquirerCard::where('acquirer', $acquirerId)
            ->where('card_brand', $cardBrandId)
            ->first();
    }

    public function store(Request $request)
    {
        $request['card_brand'] = $request->card_brand['id'];
        $request['acquirer'] = $request->acquirer['id'];
        return AcquirerCard::create($request->all());
    }

    public function delete(Request $request, $acquirerId, $cardBrandId)
    {
        $acquirer = AcquirerCard::where('acquirer', $acquirerId)
            ->where('card_brand', $cardBrandId);
        $acquirer->delete();

        return 204;
    }
}
