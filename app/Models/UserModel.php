<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as UserAuthenticate;

/**
 * @mixin IdeHelperUserModel
 */
class UserModel extends UserAuthenticate
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
    protected $fillable = ['level_id', 'username', 'nama', 'password'];

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
}
