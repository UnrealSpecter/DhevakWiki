<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
  protected $table = 'tutorial';

  protected $fillable = ['content', 'section_id'];

  public function sections(){

    return $this->belongsTo('App\Section');

 }
}
