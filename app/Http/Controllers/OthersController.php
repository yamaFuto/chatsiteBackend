<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thread;
use App\Models\Comment;

class OthersController extends Controller
{
    public function incrementGoods(Request $request) {
      $Comment = Comment::find($request->id);
      $Comment->goods += 1;
      $Comment->save();
    }
}
