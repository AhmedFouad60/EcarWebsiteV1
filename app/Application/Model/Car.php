<?php
 namespace App\Application\Model;
 use Illuminate\Database\Eloquent\Model;
 class Car extends Model
{
   public $table = "car";
   public function accessories(){
		return $this->belongsToMany( Accessories::class, "accessories_car", "car_id" , "accessories_id");
		}
   public function maincat(){
  return $this->belongsTo(Maincat::class, "maincat_id");
  }
   public function brand(){
  return $this->belongsTo(Brand::class, "brand_id");
  }
   public function user(){
  return $this->belongsTo(User::class, "user_id");
  }
    protected $fillable = [
    'maincat_id',
    'brand_id',
   'user_id',
        'title','body','image','youtube',
        'price'
   ];
 }
