<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Contracts\Activity;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\LogOptions;

class ReturnProduct extends Model
{
    use HasFactory;

     //Activity Log
     use LogsActivity;

     protected static $recordEvents = ['created', 'updated', 'deleted'];
     protected static $logOnlyDirty = true;
      protected static $submitEmptyLogs = false;

     public function getActivitylogOptions(): LogOptions
      {
      return LogOptions::defaults()
      ->logOnly(['product_id', 'size_id']);
      }

     public function tapActivity(Activity $activity, string $eventName)
     {
         $activity->description = "Return Product have been {$eventName}";
         $activity->causer_type =  Auth::user()->name ?? 'registered';
         $activity->subject_type = $this->product_id;
         $activity->log_name = 'return_product';
     }

    //Relation
    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function size(){
        return $this->belongsTo(Size::class);
    }
}
