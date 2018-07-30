<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        $data = json_decode(request()->data, true);

        $transaction = Transaction::with(['merchant', 'acquirer', 'cardBrand', 'paymentMethod', 'status']);

        if ($data) {

            if (isset($data['merchants'])) {
                $merchantsCnpj = array();
                foreach ($data['merchants'] as $merchant) {
                    array_push($merchantsCnpj, $merchant['cnpj']);
                }
                $transaction->whereIn('merchant', $merchantsCnpj);
            }

            if (isset($data['dates'])) {
                if (count($data['dates']) > 1) {
                    $transaction->whereBetween('createdAt', $data['dates']);
                } else {
                    $transaction->where('createdAt', $data['dates'][0]);
                }
            }

            if (isset($data['acquirers'])) {
                $acquirersId = array();
                foreach ($data['acquirers'] as $acquirer) {
                    array_push($acquirersId, $acquirer['id']);
                }
                $transaction->whereIn('acquirer', $acquirersId);

            }

            if (isset($data['card_brands'])) {
                $cardBrandsId = array();
                foreach ($data['card_brands'] as $cardBrand) {
                    array_push($cardBrandsId, $cardBrand['id']);
                }
                $transaction->whereIn('card_brand', $cardBrandsId);
            }
        }

        return $transaction->get()->toJson(JSON_UNESCAPED_UNICODE);
    }

    public function show(Request $request, $id)
    {
        return Transaction::with(['merchant', 'acquirer', 'cardBrand', 'paymentMethod', 'status'])
            ->find($id)
            ->toJson(JSON_UNESCAPED_UNICODE);
    }

    public function store(Request $request)
    {
        $request['status'] = $request->status['id'];
        $request['merchant'] = $request->merchant['cnpj'];
        $request['acquirer'] = $request->acquirer['id'];
        $request['card_brand'] = $request->card_brand['id'];
        $request['payment_method'] = $request->payment_method['id'];

        return Transaction::create($request->all());
    }

    public function delete(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->delete();

        return 204;
    }
}
