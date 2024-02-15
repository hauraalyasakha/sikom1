<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategoriBuku extends Model
{
    use HasFactory;
    protected $guarded = ['id']; //MENGATUR HANYA COLUMN ID YANG TIDAK BOLEH DI ISI//

    //RELASI DARI MODEL BUKU KE KATEGORI BUKU RELASI
    public function kategoribuku_relasi()
    {
       return $this->hasMany(KategoriBuku_Relasi::class);
    }
}