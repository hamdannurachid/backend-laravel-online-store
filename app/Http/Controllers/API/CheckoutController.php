<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Product;
use App\Transaction;
use App\TransactionDetail;
use App\Http\Requests\CheckoutRequest;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout(CheckoutRequest $request)
    {
        $data = $request->except('transaction_details');
        $data['uuid'] = 'TRX' . mt_rand(10000, 99999) . mt_rand(100, 999);

        $transaction = Transaction::create($data);

        foreach ($request->transaction_details as $product) {
            $detail[] = new TransactionDetail([
                'transactions_id' => $transaction->id,
                'products_id' => $product
            ]);

            Product::find($product)->decrement('quantity');
        }

        $transaction->detail()->saveMany($detail);

        return ResponseFormatter::success($transaction);
    }
}
