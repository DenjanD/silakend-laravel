<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class VehicleMaintenanceDetail extends Model
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

    protected $primaryKey = 'detail_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'item_name',
        'item_qty',
        'item_unit',
        'item_price',
        'price_total',
        'maintenance_id'
    ];

    public function maintenance() {
        return $this->hasOne(VehicleMaintenance::class, 'maintenance_id', 'maintenance_id');
    }
}
