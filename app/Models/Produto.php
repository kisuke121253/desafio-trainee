<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;



class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'categoria_id',
        'valor',
        'data_vencimento',
        'quantidade_estoque',
        'perecivel'
    ];

    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }
}
