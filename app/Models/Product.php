<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Contracts\Activity;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\LogOptions;

class Product extends Model
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
     ->logOnly(['name', 'cost_price', 'retail_price']);
     }

    public function tapActivity(Activity $activity, string $eventName)
    {
        $activity->description = "Product have been {$eventName}";
        $activity->causer_type =  Auth::user()->name ?? 'registered';
        $activity->subject_type = $this->name;
        $activity->log_name = 'product';
    }

    protected $appends = ['product_image', 'text'];

    //Const
    public const STATUS_ACTIVE = 1;
    public const STATUS_INACTIVE = 0;

    //Methods
    public function getProductImageAttribute(){
        return asset('storage/product_images/'. $this->image);
    }

    public function getTextAttribute(){
        return $this->name;
    }

    //Relations
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function product_stocks(){
        return $this->hasMany(ProductSizeStock::class);
    }

    public function product_requests(){
        return $this->hasMany(ProductSizeRequest::class);
    }
}
