<?php

namespace App\Models;

use App\Models\User;
use App\Models\ProjectPlatform;
use App\Models\ProjectStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function categories(){
    	return $this->hasMany(ProjectCategory::class);
    }

    public function platforms(){
    	return $this->hasMany(ProjectPlatform::class);
    }

    public function status(){
    	return $this->belongsTo(ProjectStatus::class);
    }

     public function users(){
        return $this->belongsToMany(User::class);
    }
}
