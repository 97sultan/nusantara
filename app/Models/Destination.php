<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function provinsi() {
        return $this->hasOne(Province::class, 'id', 'provinsi_id');
    }

    public function kabupaten() {
        return $this->hasOne(Regency::class, 'id', 'kabupaten_id');
    }

    public function kecamatan() {
        return $this->hasOne(District::class, 'id', 'kecamatan_id');
    }

    public function kelurahan() {
        return $this->hasOne(Village::class, 'id', 'Kelurahan_id');
    }
}
