<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class pengguna extends Model
{
    use HasFactory;
    public $primaryKey = 'id_pengguna';
    protected $fillable = [
        'nama','kampus', 'semester', 'masalah', 'photo', 'deskripsi','id_daftaradmin',
    ];
    static function getPengguna(){
        $return=DB::table('penggunas')
        ->join('daftaradmins','penggunas.id_daftaradmin','=','daftaradmins.id_daftaradmin');
        return $return;
    }
}
