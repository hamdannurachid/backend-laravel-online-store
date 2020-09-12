<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function get(Request $request, $id)
    {
        $product = Transaction::with(['detail.product'])->find($id);

        if ($product)
            return ResponseFormatter::success($product, 'Data berhasil dimabil');

        else
            return ResponseFormatter::error(null, 'Data gagal diambil', 404);
    }
}
