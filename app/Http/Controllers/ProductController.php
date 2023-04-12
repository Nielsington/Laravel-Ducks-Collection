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

    public function showProduct(Duck $duck)
    {
        return view('product', ['product' => $duck]);
    }
}
