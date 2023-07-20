<?php

namespace App\Traits;

use Ramsey\Uuid\Uuid as Generator;
use Exception;

trait Uuid
{
   protected static function boot()
   {
    parent::boot();
    static::creating(function ($model) {
        try {
            $model->id = Generator::uuid4();
        } catch(Exception $e) {
            abort(500, $e->getMessage());
        }
    });
   }
}
