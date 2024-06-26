<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalBimbinganKarir extends Model
{
    use HasFactory;
    protected $table = 'jadwal_bimbingan_karir';
    protected $guarded = ['id'];

    public $casts = [
        'waktu' => 'datetime'
    ];

    public function penduduk()
    {
        return $this->belongsTo(Penduduk::class);
    }

    const STATUS_SCHEDULED = 'scheduled';
    const STATUS_COMPLETED = 'completed';
    const STATUS_CANCELED = 'canceled';
    const STATUS_RESCHEDULED = 'rescheduled';
    const STATUS_IN_PROGRESS = 'in_progress';
    const STATUS_NO_SHOW = 'no_show';
    const STATUS_PENDING = 'pending';

    public function status()
    {
        if ($this->status === self::STATUS_SCHEDULED) {
            return "<span class='btn btn-sm btn-info'>Dijadwalkan</span>";
        } elseif ($this->status === self::STATUS_COMPLETED) {
            return "<span class='btn btn-sm btn-success'>Selesai</span>";
        } elseif ($this->status === self::STATUS_CANCELED) {
            return "<span class='btn btn-sm btn-danger'>Dibatalkan</span>";
        } elseif ($this->status === self::STATUS_RESCHEDULED) {
            return "<span class='btn btn-sm btn-warning'>Dijadwal Ulang</span>";
        } elseif ($this->status === self::STATUS_IN_PROGRESS) {
            return "<span class='btn btn-sm btn-primary'>Sedang Berlangsung</span>";
        } elseif ($this->status === self::STATUS_NO_SHOW) {
            return "<span class='btn btn-sm btn-secondary'>Tidak Hadir</span>";
        } elseif ($this->status === self::STATUS_PENDING) {
            return "<span class='btn btn-sm btn-dark'>Tertunda</span>";
        } else {
            return "<span class='btn btn-sm btn-light'>Status Tidak Dikenal</span>";
        }
    }
}
