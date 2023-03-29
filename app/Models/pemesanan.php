<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemesanan extends Model
{
    use HasFactory;
    protected $table = 'pemesanan_tiket';

    protected $fillable = [
        'tiket_id',
        'nama_pemesan',
        'nomor_telepon_pemesan',
        'alamat_email_pemesan',
        'jumlah_tiket',
        'total_harga',
        'is_check_in'
    ];
}
