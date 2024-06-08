<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produit extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_stocke',
        'nom'
    ];
    public function services()
    {
        return $this->belongsToMany(services::class,'service_produits')
                    ->withPivot('Number_uses');
    }
    public function stock()
    {
        return $this->belongsTo(stocke::class);
    }
}
