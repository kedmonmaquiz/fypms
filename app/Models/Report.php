<?php

namespace App\Models;

use App\Models\ReportStatus;
use App\Models\ReportType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function type(){ 
    	return $this->belongsTo(ReportType::class);
    }

    public function status(){ 
    	return $this->belongsTo(ReportStatus::class);
    }

    public function user(){ 
    	return $this->belongsTo(ReportStatus::class);
    }
}

