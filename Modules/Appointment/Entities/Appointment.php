<?php

namespace Modules\Appointment\Entities;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class appointment extends Model
{
    use HasFactory;
    use SoftDeletes;

   // protected $table = 'categories';
    protected $table ="appointment";

    protected $fillable = ['treatment','doctor','name','phone','date','time','email','updated_by','deleted_by',
'published_at','created_at','updated_at','deleted_at'       ];
    

public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logUnguarded()
            ->logOnlyDirty()
            ->dontSubmitEmptyLogs()
            ->useLogName($this->table);
    }

    protected static function newFactory()
    {
        return \Modules\Appointment\Database\factories\AppointmentFactory::new();
    }
}
