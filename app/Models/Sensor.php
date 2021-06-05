<?php

    namespace App\Models;


    use Illuminate\Database\Eloquent\Model;

    class Sensor extends Model
    {
        protected $table = [
            'temperature',
            'created_at',
            'updated_at',
        ];
    }
