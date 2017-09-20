<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class section extends Model
{
  protected $table = 'sections';

  protected $fillable = ['name', 'page_id'];

  public function page(){

    return $this->belongsTo('App\Page');

 }
}
