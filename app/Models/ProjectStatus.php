<?php

namespace App\Models;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectStatus extends Model
{
    use HasFactory;

    protected $guarded = ['i'];

    public function projects(){
    	return $this->hasMany(Project::class);
    }
}
