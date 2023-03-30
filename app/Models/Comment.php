<?php

namespace App\Models;

use App\Models\Thread;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['comment', 'goods'];

    public function thread() {
        return $this->belongsTo(Thread::class);
    }
}
