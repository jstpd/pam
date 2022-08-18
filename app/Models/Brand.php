<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Catalog;

class Brand extends Model
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

    public function catalog() {
        return $this->hasMany(Catalog::class);
    }
}
