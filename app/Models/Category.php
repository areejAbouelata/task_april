<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{

    protected $table = 'categories';
    public $timestamps = true;

    use SoftDeletes;

     public static function boot()
    {
        parent::boot();
        self::deleting(function (Category $category){
            foreach ($category->products as $product){
                $product->delete() ;
            }
        }) ;
    }
    protected $dates = ['deleted_at'];
    protected $fillable = array('name');

    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }

}