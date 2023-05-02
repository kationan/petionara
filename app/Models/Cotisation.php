<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Cotisation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'annee',
        'mois',
        'paye_le',
        'montant',
        'type_cotisation',
        'description',
    ];
    public function users():belongsTo
    {
        return belongsTo(User::class);
    }
}
