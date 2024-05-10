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
 * @property int $barang_id
 * @property int $kategori_id
 * @property string $barang_kode
 * @property string $barang_nama
 * @property int $harga_beli
 * @property int $harga_jual
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string|null $image
 * @property-read \App\Models\KategoriModel $kategori
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PenjualanDetailModel> $penjualanDetail
 * @property-read int|null $penjualan_detail_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\StokModel> $stok
 * @property-read int|null $stok_count
 * @method static \Illuminate\Database\Eloquent\Builder|BarangModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BarangModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BarangModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|BarangModel whereBarangId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BarangModel whereBarangKode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BarangModel whereBarangNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BarangModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BarangModel whereHargaBeli($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BarangModel whereHargaJual($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BarangModel whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BarangModel whereKategoriId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BarangModel whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperBarangModel {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $kategori_id
 * @property string $kategori_kode
 * @property string $kategori_nama
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\BarangModel> $barang
 * @property-read int|null $barang_count
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
 * @property int $level_id
 * @property string $level_kode
 * @property string $level_nama
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\m_user> $m_user
 * @property-read int|null $m_user_count
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

namespace App\Models{
/**
 * 
 *
 * @property int $detail_id
 * @property int $penjualan_id
 * @property int $barang_id
 * @property int $harga
 * @property int $jumlah
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\BarangModel $barang
 * @property-read \App\Models\PenjualanModel $penjualan
 * @method static \Illuminate\Database\Eloquent\Builder|PenjualanDetailModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PenjualanDetailModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PenjualanDetailModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|PenjualanDetailModel whereBarangId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PenjualanDetailModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PenjualanDetailModel whereDetailId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PenjualanDetailModel whereHarga($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PenjualanDetailModel whereJumlah($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PenjualanDetailModel wherePenjualanId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PenjualanDetailModel whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperPenjualanDetailModel {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $penjualan_id
 * @property int $user_id
 * @property string $pembeli
 * @property string $penjualan_kode
 * @property string $penjualan_tanggal
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\PenjualanDetailModel|null $penjualanDetail
 * @property-read \App\Models\UserModel $user
 * @method static \Illuminate\Database\Eloquent\Builder|PenjualanModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PenjualanModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PenjualanModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|PenjualanModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PenjualanModel wherePembeli($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PenjualanModel wherePenjualanId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PenjualanModel wherePenjualanKode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PenjualanModel wherePenjualanTanggal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PenjualanModel whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PenjualanModel whereUserId($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperPenjualanModel {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $stok_id
 * @property int $barang_id
 * @property int $user_id
 * @property string $stok_tanggal
 * @property int $stok_jumlah
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\BarangModel $barang
 * @property-read \App\Models\UserModel $user
 * @method static \Illuminate\Database\Eloquent\Builder|StokModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StokModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StokModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|StokModel whereBarangId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StokModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StokModel whereStokId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StokModel whereStokJumlah($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StokModel whereStokTanggal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StokModel whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StokModel whereUserId($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperStokModel {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperUser {}
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
 * @property-read string|null $image
 * @property-read \App\Models\LevelModel $level
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PenjualanModel> $penjualan
 * @property-read int|null $penjualan_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\StokModel> $stok
 * @property-read int|null $stok_count
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereImage($value)
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
 * @property int $user_id
 * @property int|null $level_id
 * @property string $username
 * @property string $nama
 * @property string $password
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property-read \App\Models\LevelModel|null $level
 * @method static \Illuminate\Database\Eloquent\Builder|m_user newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|m_user newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|m_user query()
 * @method static \Illuminate\Database\Eloquent\Builder|m_user whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|m_user whereLevelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|m_user whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|m_user wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|m_user whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|m_user whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|m_user whereUsername($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperm_user {}
}

