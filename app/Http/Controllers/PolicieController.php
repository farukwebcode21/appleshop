<?php

namespace App\Http\Controllers;

use App\Models\Policie;
use Illuminate\Http\Request;

class PolicieController extends Controller {

    public function PolicyByType(Request $request) {
        return Policie::where('type', '=', $request->type)->first();
    }
}
