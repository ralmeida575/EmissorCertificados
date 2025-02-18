<?php

// app/Models/Certificado.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificado extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'curso', 'carga_horaria', 'email', 'certificado_path', 
        'unidade', 'cpf', 'data_emissao', 'data_conclusao', 'qr_code_path', 'hash'
    ];
}
