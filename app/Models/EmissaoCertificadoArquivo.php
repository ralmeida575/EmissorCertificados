<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmissaoCertificadoArquivo extends Model
{
    use HasFactory;

    // Se o nome da tabela for diferente de "emissao_certificado_arquivos",
    // você pode especificar explicitamente:
    // protected $table = 'emissao_certificado_arquivos';

    // Defina os campos que podem ser preenchidos (atributos em massa)
    protected $fillable = [
        'nomeArquivo',
        'qtdeCertificados',
        'status',
        'dataArquivo',
    ];

    // Se os campos do banco não usam o formato padrão de timestamps (created_at, updated_at),
    // você pode desabilitar o gerenciamento automático de timestamps:
    // public $timestamps = false;
}
