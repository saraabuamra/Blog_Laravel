<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    // public static function programs(){
    //     $getPrograms = Program::with('categories')->get()->toArray();
    //     return $getPrograms;
    // }

    public function category(){
        return $this->belongsTo('App\Models\Category','category_id');
    }
}
