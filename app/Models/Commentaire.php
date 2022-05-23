<?php

namespace App\Models;

use App\Models\Articles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commentaire extends Model
{
    use HasFactory;
    protected $fillable = ['commentaire'];
    public function article(){
        return $this->belongsTo(Articles::class);
    }
}
