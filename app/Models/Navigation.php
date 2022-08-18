<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navigation extends Model
{
    use HasFactory;

    public $timestamps = false;

    public static function getList() {
        $selCats = [0 => ''];
        foreach (self::select(['id', 'name'])->get() as $m) {
            $selCats[$m->id] = $m->name;
        }
        return $selCats;
    }
    
}
