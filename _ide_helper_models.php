<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $kategori_id
 * @property string $kategori_kode
 * @property string $kategori_nama
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|KategoriModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KategoriModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KategoriModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|KategoriModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KategoriModel whereKategoriId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KategoriModel whereKategoriKode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KategoriModel whereKategoriNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KategoriModel whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperKategoriModel {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $user_id
 * @property int $level_id
 * @property string $username
 * @property string $nama
 * @property string $password
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\LevelModel $level
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereLevelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereUsername($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperUserModel {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $level_id
 * @property string $level_kode
 * @property string $level_nama
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\UserModel> $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|LevelModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LevelModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LevelModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|LevelModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LevelModel whereLevelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LevelModel whereLevelKode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LevelModel whereLevelNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LevelModel whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperLevelModel {}
}

