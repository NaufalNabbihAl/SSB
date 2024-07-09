<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    protected $fillable = ['name','status', 'gender', 'place_birth', 'date_birth', 'nik', 'nis', 'photo', 'nomor_psad'];

    // Buat nomor psad sebelum menyimpan model
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->nomor_psad = Player::generateNomorPsad();
        });
    }

    public static function generateNomorPsad()
    {
        
        $lastPlayer = Player::orderBy('id', 'desc')->first();
        $lastNumber = $lastPlayer ? (int) substr($lastPlayer->nomor_psad, 0, 2) : 0;
        
        
        $nextNumber = str_pad($lastNumber + 1, 2, '0', STR_PAD_LEFT);
        
        
        return $nextNumber . 'PSADBRAWIJAYA';
    }
}
