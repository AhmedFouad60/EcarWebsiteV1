<?php
 namespace App\Application\Model;
 use Illuminate\Database\Eloquent\Model;
 class Region extends Model
{
   public $table = "region";
   public function car(){
		return $this->hasMany(Car::class, "region_id");
		}
   public function country(){
  return $this->belongsTo(Country::class, "country_id");
  }
    protected $fillable = [
   'country_id',
        'title'
   ];
 }
