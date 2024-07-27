<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    function ModelTest(){
        echo 'Model test using controller';
    }

    use HasFactory;
    
    // If table and model names are different then do it 
    // protected $table = "table_name";
    public $timestamps = false;
}
