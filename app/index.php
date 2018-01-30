<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class index extends Model

{

    protected $fillable = [
        'title',
        'subtitle',
        'video1',
        'video2'
    ];

}