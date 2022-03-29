<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class VehicleMaintenance extends Model
{
    use HasFactory;

    protected static function boot() {
        parent::boot();
        static::creating(function ($model) {
            if (!$model->getKey()) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }

    protected $primaryKey = 'maintenance_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'date',
        'category',
        'description',
        'total_cost',
        'vehicle_id',
    ];

    public function vehicle() {
        return $this->hasOne(Vehicle::class, 'vehicle_id', 'vehicle_id');
    }

    public function details() {
        return $this->hasMany(VehicleMaintenanceDetail::class, 'maintenance_id', 'maintenance_id');
    }
}
