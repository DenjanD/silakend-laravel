<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Support\Str;
//use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected static function boot() {
        parent::boot();
        static::creating(function ($model) {
            if (!$model->getKey()) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }

    protected $primaryKey = 'user_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'nip',
        'password',
        'name',
        'address',
        'phone',
        'email',
        'role_id',
        'unit_id'
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    
    public function getJWTCustomClaims()
    {
        return [];
    }

    public function role() {
        return $this->hasOne(Role::class, 'role_id', 'role_id');
    }

    public function unit() {
        return $this->hasOne(JobUnit::class, 'unit_id', 'unit_id');
    }

    public function usages() {
        return $this->hasMany(User::class, 'user_id', 'user_id');
    }

    public function drives() {
        return $this->hasMany(User::class, 'driver_id', 'user_id');
    }

    public function accepts() {
        return $this->hasMany(User::class, 'acceptor_id', 'user_id');
    }
}
