<?php

namespace App\Http\Controllers;

use App\Helper\ResponseHelper;
use App\Models\Categorie;
use Illuminate\Http\JsonResponse;

class CategorieController extends Controller {

    public function CategoryList(): JsonResponse {
        $date = Categorie::all();
        return ResponseHelper::Out('success', $date, 200);
    }
}
