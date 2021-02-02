<?php

namespace App\Models;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    use HasFactory;

    protected $guarded =['id'];

    public function departments(){
    	return $this->hasMany(Department::class);
    }
}
