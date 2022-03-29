<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Vehicle extends Model
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

    protected $primaryKey = 'vehicle_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'name',
        'year',
        'tax_date',
        'valid_date',
        'license_number',
        'distance_count',
        'vcategory_id'
    ];

    public function category() {
        return $this->hasOne(VehicleCategory::class, 'vcategory_id', 'vcategory_id');
    }

    public function usages() {
        return $this->hasMany(VehicleUsage::class, 'vehicle_id', 'vehicle_id');
    }

    public function maintenances() {
        return $this->hasMany(VehicleMaintenance::class, 'vehicle_id', 'vehicle_id');
    }
}
