<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserModel extends Model
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
}
