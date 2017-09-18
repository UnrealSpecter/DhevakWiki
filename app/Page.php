<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pages';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description', 'category_id', 'image', 'section_id', 'slug'];

    /**
    * Get the category record associated with the post.
    */
    public function category()
    {
      return $this->belongsTo('App\Category');
      return $this->belongsTo('App\Section');
    }

}
