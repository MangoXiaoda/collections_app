<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{

    protected $table = 'cl_card';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'card_name',
        'card_style',
        'tag_id',
    ];

}
