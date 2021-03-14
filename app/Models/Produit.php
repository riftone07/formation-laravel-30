<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;



    public function categorie()
    {
    	return $this->belongsTo(Categorie::class,'categorie_id');
    }

     public function imagePrincipale()
    {
    	return asset('storage/imageproduits/'.$this->image);
    }
}
