<?php

namespace App\Models;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectCategory extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function projects(){
    	return $this->belongsToMany(Project::class);
    }
}
