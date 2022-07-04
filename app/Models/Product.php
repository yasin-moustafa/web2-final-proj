<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'dec',
        'price',
        'image'
    ];
    /*
    public function product{
        return $this->belongsTo(Categore::class,'categores_id','id')->withDefault([
                'name'=>'no category']);
}
    */

}
