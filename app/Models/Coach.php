<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    use HasFactory;
    protected $table = 'coachs';
    protected $fillable = [
        'nomor_psad',
        'nama',
        'kewarganegaraan',
        'tempat_lahir',
        'tanggal_lahir',
        'photo'
    ];
    public $timestamps = false;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->nomor_psad = Coach::generateNomorPsad();
        });
    }

    public static function generateNomorPsad()
    {
        
        $lastPlayer = Coach::orderBy('id', 'desc')->first();
        $lastNumber = $lastPlayer ? (int) substr($lastPlayer->nomor_psad, 0, 2) : 0;
        
        
        $nextNumber = str_pad($lastNumber + 1, 2, '0', STR_PAD_LEFT);
        
        
        return $nextNumber . 'PSADCOACHBRAWIJAYA';
    }
}
