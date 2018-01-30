<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class portfolio extends Model

{
    protected $fillable = [
        'title',
        'subtitle',
        'text',
        'link',
        'photo1',
        'photo2'
    ];
}