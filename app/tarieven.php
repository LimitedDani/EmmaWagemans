<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class tarieven extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'price',
        'photo',
        'link',
        'extra_info'

    ];
}