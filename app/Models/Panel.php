<?php

namespace App\Models;

use App\Models\AcademicYear;
use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panel extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function department(){
    	return $this->belongsTo(Department::class);
    }

    public function academicYear(){
    	return $this->belongsTo(AcademicYear::class);
    }
}
