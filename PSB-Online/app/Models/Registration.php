<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Registration extends Model
{
    use HasFactory;
    protected $table = "registration";
    protected $fillable = [
        'nama_lengkap',
        'alamat_ktp',
        'alamat_saat_ini',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'nomor_telepon',
        'email',
        'kewarganegaraan',
        'tanggal_lahir',
        'tempat_lahir',
        'kabupaten_lahir',
        'provinsi_lahir',
        'jenis_kelamin',
        'status_nikah',
        'agama',
        'users_id',
    ];

    protected $casts = [
        'nomor_telepon' => 'integer',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
    
}
