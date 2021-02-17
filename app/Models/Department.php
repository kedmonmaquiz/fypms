<?php

namespace App\Models;

use App\Models\College;
use App\Models\Panel;
use App\Models\Program;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function college(){
    	return $this->belongsTo(College::class);
    }

    public function programs(){
    	return $this->hasMany(Program::class);
    }

    public function panels(){
    	return $this->hasMany(Panel::class);
    }
}
