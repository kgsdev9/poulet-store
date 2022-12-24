<?php

namespace App\Http\Controllers\Coeur;

use App\Models\Coeur;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LikeProductController extends Controller
{
    public function index() {
        $coeur = Coeur::where('user_id', Auth::user()->id)->paginate(10);
        return view('dashboard.users.likeproduct.liste', compact('coeur'));
    }
}
