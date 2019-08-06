<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Profilemodel extends Model
{
   protected $table='Profile';
   protected $primaryKey='id';
   protected $fillable=['id','name','gender','dob','contact','email','skills','fathersname','mothersname','district','area'];
}