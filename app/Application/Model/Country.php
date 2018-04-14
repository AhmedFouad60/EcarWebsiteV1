<?php
 namespace App\Application\Model;
 use Illuminate\Database\Eloquent\Model;
 class Country extends Model
{
   public $table = "country";
   public function car(){
		return $this->hasMany(Car::class, "country_id");
		}
  public function region(){
  return $this->hasMany(Region::class, "country_id");
  }
    protected $fillable = [
        'title'
   ];
 }
