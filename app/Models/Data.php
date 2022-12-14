<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Data extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'dados_compras';

    /**
     * The attributes that are mass assignable.
     *
     * 
     */
    protected $fillable = [
        'CPF',
        'private',
        'incompleto',
        'data_da_ultima_compra',
        'ticket_medio',
        'ticket_ultima_compra',
        'loja_mais_frequente',
        'loja_ultima_compra'
    ];
}
