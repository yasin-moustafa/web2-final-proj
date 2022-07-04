<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categore extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'dec'

    ];
    /*
    public function categore(){
        return $this->hasMany(Product::class,,'categores_id','id');
    }
    */
}
