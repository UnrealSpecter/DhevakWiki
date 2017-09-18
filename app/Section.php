<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class section extends Model
{
  protected $table = 'sections';

  protected $fillable = ['name'];   

  public function entries(){

    return $this->hasMany('App\Page');

 }
}
