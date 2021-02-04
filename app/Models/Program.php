<?php

namespace App\Models;

use App\Models\Department;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function department(){
    	return $this->belongsTo(Department::class);
    }

    public function users(){
    	return $this->hasMany(User::class);
    }
}
