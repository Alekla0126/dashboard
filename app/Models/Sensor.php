<?php

    namespace App\Models;


    use Illuminate\Database\Eloquent\Model;

    class Sensor extends Model
    {
        protected $guarded = [
            'temperature',
            'created_at',
            'updated_at',
        ];
    }
