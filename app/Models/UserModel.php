<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
