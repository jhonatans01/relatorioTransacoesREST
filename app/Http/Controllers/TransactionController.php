<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        $data = json_decode(request()->data, true);

        $transaction = Transaction::with(['acquirer', 'cardPayment', 'status']);

        if ($data) {

            if ($data['dates']) {
                if (count($data['dates']) > 1) {
                    $transaction->whereBetween('createdAt', $data['dates']);
                } else {
                    $transaction->where('createdAt', $data['dates'][0]);
                }
            }

            if ($data['acquirers']) {
                $acquirersId = array();
                foreach ($data['acquirers'] as $acquirer) {
                    array_push($acquirersId, $acquirer['id']);
                }
                $transaction->whereIn('acquirer', $acquirersId);

            }

            if ($data['cardBrands']) {
                $cardBrandsId = array();
                foreach ($data['cardBrands'] as $cardBrand) {
                    array_push($cardBrandsId, $cardBrand['id']);
                }
                $transaction->whereHas('cardPayment', function ($query) use ($cardBrandsId) {
                    $query->whereIn('cardBrand', $cardBrandsId);
                });
            }
        }

        return $transaction
            ->get()
            ->toJson(JSON_UNESCAPED_UNICODE);
    }

    public function show(Request $request, $id)
    {
        return Transaction::find($id);
    }

    public function store(Request $request)
    {
        $request['status'] = $request->status['id'];
        $request['merchant'] = $request->merchant['cnpj'];
        $request['acquirer'] = $request->acquirer['id'];
        $request['cardPayment'] = $request->cardPayment['id'];

        return Transaction::create($request->all());
    }

    public function update(Request $request, $id)
    {
        if ($request->status['id']) {
            $request['status'] = $request->status['id'];
        }

        if ($request->merchant['cnpj']) {
            $request['merchant'] = $request->merchant['cnpj'];
        }

        if ($request->acquirer['id']) {
            $request['acquirer'] = $request->acquirer['id'];

        }

        if ($request->cardPayment['id']) {
            $request['cardPayment'] = $request->cardPayment['id'];
        }

        $transaction = Transaction::findOrFail($id);
        $transaction->update($request->all());

        return $transaction;
    }

    public function delete(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->delete();

        return 204;
    }
}
