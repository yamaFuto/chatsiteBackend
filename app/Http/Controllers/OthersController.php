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

    public function index(Request $request)
    {
        $search = $request->word;
        // クエリビルダ
        $query =Thread::query();

        if ($search) {

            $spaceConversion = mb_convert_kana($search, 's');

            $wordArraySearched = preg_split('/[\s,]+/', $spaceConversion, -1, PREG_SPLIT_NO_EMPTY);


            foreach($wordArraySearched as $value) {
                $query->where('theme', 'like', '%'.$value.'%');
            }

            $threads = $query->paginate(5);

        }

        return $threads;
    }
}
