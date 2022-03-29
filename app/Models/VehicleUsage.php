<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class VehicleUsage extends Model
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

    protected $primaryKey = 'usage_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'description',
        'personel_count',
        'origin',
        'destination',
        'departure',
        'arrival',
        'status',
        'distance_count_out',
        'distance_count_in',
        'status_description',
        'vehicle_id',
        'driver_id',
        'acceptor_id',
        'user_id',
        'ucategory_id'
    ];

    public function vehicle() {
        return $this->hasOne(Vehicle::class, 'vehicle_id', 'vehicle_id');
    }

    public function driver() {
        return $this->hasOne(User::class, 'driver_id', 'user_id');
    }

    public function acceptor() {
        return $this->hasOne(User::class, 'acceptor_id', 'user_id');
    }

    public function user() {
        return $this->hasOne(User::class, 'user_id', 'user_id');
    }

    public function category() {
        return $this->hasOne(UsageCategory::class, 'ucategory_id', 'ucategory_id');
    }
}
