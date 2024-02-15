<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class koleksiPribadi extends Model
{
    use HasFactory;
    protected $guarded = ['id']; //MENGATUR HANYA COLUMN ID YANG TIDAK BOLEH DI ISI//

    //RELASI DARI MODEL KOLEKSI PRIBADI KE USER
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //RELASI DARI MODEL KOLEKSI PRIBADI KE BUKU
    public function buku()
    {
        return $this->belongsTo(Buku::class);
    }
}
