<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class diensten extends Model
{

    protected $fillable = [
        'title',
        'text',
        'link',
        'photo',
    ];


}