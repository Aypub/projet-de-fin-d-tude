<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class services extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'prix',
        'photo'
    ];
    public function users()
    {
        return $this->belongsToMany(User::class,'commands')->withPivot('facture');
    }
    public function produits()
    {
        return $this->belongsToMany(produit::class,'service_produits')
                    ->withPivot('Number_uses');
    }

}
