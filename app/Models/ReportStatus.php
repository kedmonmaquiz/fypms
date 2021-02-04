<?php

namespace App\Models;

use App\Models\Report;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportStatus extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function reports(){
    	return $this->hasMany(Report::class);
    }
}
