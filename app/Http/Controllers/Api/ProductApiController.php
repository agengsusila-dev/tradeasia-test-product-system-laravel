<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class ProductApiController extends Controller
{
    public function index(Request $request, $lang)
    {
        if (!in_array($lang, ['en', 'id'])) {
            return response()->json(['error' => 'Invalid lang'], 400);
        }

        $products = Product::paginate(10);

        $data = $products->map(function ($product) use ($lang) {
            return [
                'name' => $product->name[$lang] ?? '-',
                'hs_code' => $product->hs_code,
                'cas_number' => $product->cas_number,
                'image_url' => $product->image ? asset('storage/' . $product->image) : null,
                'description' => $product->description[$lang] ?? '-',
                'application' => $product->application[$lang] ?? '-',
                'meta' => [
                    'meta_title' => $product->meta_title[$lang] ?? '',
                    'meta_keyword' => $product->meta_keyword[$lang] ?? '',
                    'meta_description' => $product->meta_description[$lang] ?? '',
                ],
            ];
        });

        return response()->json($data);
    }
}
