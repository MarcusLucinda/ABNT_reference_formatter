<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class DocType extends Model
{
    protected $guarded = [];

    public function subcategories()
    {
        return $this->hasMany('App\DocType', 'parent_id');
    }
}
