<?php

namespace App\Models;

use Database\Factories\PeopleFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public $table = 'people';

    use HasFactory;

    protected static function newFactory()
    {
        return PeopleFactory::new();
    }
}
