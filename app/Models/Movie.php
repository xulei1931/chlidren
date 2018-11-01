<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Movie extends Authenticatable
{
    use Notifiable;
  public static function boot()
{
    parent::boot();

    static::saving(function ($model) {

        // 把数据从$model取出，插入到其它表中

    });
}
}


