<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as UserAuthenticate;
use Tymon\JWTAuth\Contracts\JWTSubject;

/**
 * @mixin IdeHelperUserModel
 */
class UserModel extends UserAuthenticate implements JWTSubject
{
    use HasFactory;

    /**
     * Define table name that used in this model
     */
    protected $table = 'm_user';

    /**
     * Define Primary key from m_user table
     */
    protected $primaryKey = 'user_id';

    /**
     * Attribute that are mass assignable
     */
    protected $fillable = ['level_id', 'username', 'nama', 'password', 'image'];

    public function level(): BelongsTo
    {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }

    public function stok(): HasMany
    {
        return $this->hasMany(StokModel::class, 'user_id', 'user_id');
    }

    public function penjualan(): HasMany
    {
        return $this->hasMany(PenjualanModel::class, 'user_id', 'user_id');
    }

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier(): mixed
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims(): array
    {
        return [];
    }

    public function image(): Attribute
    {
        return Attribute::make(
            get: fn($image) => url('/storage/posts/' . $image)
        );
    }
}
