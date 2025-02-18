<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/build/assets/styles.css">
    <script src="{{ asset('build/assets/scripts.js') }}"></script>
    <title>Verificação de Certificado</title>
</head>
<body>

<div class="container">
    <div class="marca-dagua"></div>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqllfNihEGukGwfcxEQ1PBGViCreJ3zwJHow&s" alt="Logo" class="logo">
    
    <h1>Certificado de Conclusão</h1>
    
    <p class="texto">Certificamos que</p>
    <div class="nome">{{ $certificado->nome }}</div>
    
    <p class="texto">
        Concluiu com êxito o curso de <strong>{{ $certificado->curso }}</strong>, 
        realizado em <strong>{{ date('d/m/Y', strtotime($certificado->data_conclusao)) }}</strong>.
    </p>

    <p class="texto">Este certificado pode ser validado através do QR Code abaixo:</p>

    <p class="rodape">Código de Validação: <strong>{{ $certificado->hash }}</strong></p>

    <form action="{{ route('certificados.download', ['hash' => $certificado->hash]) }}" method="GET">
        <button type="submit" class="btn-download">Download do Certificado</button>
    </form>
</div>

</body>
</html>
