<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stocke extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomproduit',
    	'quantite',
        'prix'
    ];
    public function produits()
    {
        return $this->hasMany(Produit::class);
    }
}
