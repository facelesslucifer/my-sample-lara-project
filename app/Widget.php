<?php

namespace App;

use App\Traits\HasModelTrait;

class Widget extends BaseModel
{
    use HasModelTrait;
    /*
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['name', 'slug', 'user_id'];

    /**
     * Get the user that owns that widget.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
