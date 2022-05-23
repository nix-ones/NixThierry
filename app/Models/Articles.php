<?php

namespace App\Models;
use App\Models\Commentaires;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;
    protected $fillable = ['titre','img','text'];
    public function comments(){
        return $this->hasMany(Commentaires::class);
    }
}
