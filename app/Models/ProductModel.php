<?php

namespace App\Models;

use App\Models\CategoryModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductModel extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'products';
    protected $fillable = ['name','price','category_id'];

     // Setters and Getters
     public function setName($name)
     {
         $this->name = $name;
     }
 
     public function setPrice($price)
     {
         $this->price = $price;
     }
 
     public function setCategory($category_id)
     {
         $this->category_id = $category_id;
     }
 
     public function getName()
     {
         return $this->name;
     }
 
     public function getPrice()
     {
         return $this->price;
     }
 
     public function getCategory()
     {
         return $this->category_id;
     }

     public function getCategoryIdByName($catName)
     {
         return $this->belongsTo(CategoryModel::class,'category_id','id')->where('name',$catName);
     }
    
}
