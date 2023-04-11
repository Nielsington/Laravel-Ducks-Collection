<?php

namespace App\Http\Controllers;

use App\Models\Duck;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class ProductController extends Controller
{
    public function show()
    {
        $all_ducks = $this->getAllProducts();
        return view('productOverview', ['all_ducks' => $all_ducks]);
    }

    private function getAllProducts(): Collection
    {
        $all_ducks = Duck::all();
        return $all_ducks;
    }

    public function showProduct(int $id)
    {
        $product = $this->getProduct($id);
        clock()->info($product);
        //TODO: use $product data
        return view('product', ['product' => $product]);
    }

    private function getProduct(int $id): Duck
    {
        $product = Duck::find($id);
        return $product;
    }
}
