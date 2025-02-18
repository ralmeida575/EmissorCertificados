<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/build/assets/styles.css">
    <script src="{{ asset('build/assets/scripts.js') }}"></script>
    <title>GERADOR DE CERTIFICADOS</title>
 
    </head>
<body>
    <div class="container">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqllfNihEGukGwfcxEQ1PBGViCreJ3zwJHow&s" alt="Logo" class="logo">
        <h1>Gerador de Certificados</h1>
        <form onsubmit="enviarFormulario(event)" enctype="multipart/form-data">
            @csrf
            <label for="file">Selecione o arquivo Excel:</label>
            <input type="file" name="file" id="file" accept=".xls,.xlsx" required>

            <label for="template">Escolha o modelo de certificado:</label>
            <select name="template" id="template" required>
                <option value="template_certificado_1.pdf">Grad. Odonto</option>
                <option value="template_certificado_2.pdf">Pós-Odonto</option>
                <option value="template_certificado_3.pdf">Mandic</option>
            </select>

            <button type="submit" style="padding: 10px 20px; font-size: 14px; max-width: 250px; margin-top: 20px; border-radius: 5px; background-color: #007BFF; color: white; border: none; cursor: pointer; text-align: center;">Gerar e Enviar Certificados</button>

            <div id="loading">
                <div class="spinner"></div>
                Carregando...
            </div>

            <div class="message"></div>
        </form>
    </div>
</body>
</html>
