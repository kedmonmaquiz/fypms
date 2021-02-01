<?php

namespace App\Models;

use App\Models\Panel;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicYear extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getStatusNameAttribute(){
    	if($this->status == 1){
    		return 'Active';
    	}

    	else{
    		return 'Not Active';
    	}
    }

    public function panels(){
        return $this->hasMany(Panel::class);
    }

    public function users(){
        return $this->hasMany(User::class);
    }
}
