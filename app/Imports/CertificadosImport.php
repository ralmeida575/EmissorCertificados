<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToArray;

class CertificadosImport implements ToArray
{
    public function array(array $dados)
    {
        return $dados;
    }
}
