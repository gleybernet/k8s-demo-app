<?php
$version = getenv('APP_VERSION') ?: '0.0.0';
$appName = getenv('APP_NAME') ?: 'Demo App';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($appName) ?></title>
    <style>
        body {
            font-family: system-ui, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #0f172a;
            color: #e2e8f0;
            margin: 0;
        }
        .card {
            background: #1e293b;
            padding: 2.5rem 3rem;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
            text-align: center;
        }
        h1 { margin: 0 0 0.5rem 0; font-size: 1.8rem; }
        .version {
            font-size: 2.5rem;
            font-weight: 700;
            color: #38bdf8;
            margin-top: 1rem;
        }
        .label { color: #94a3b8; font-size: 0.9rem; }
    </style>
</head>
<body>
    <div class="card">
        <div class="label">Produto</div>
        <h1><?= htmlspecialchars($appName) ?></h1>
        <div class="label">Versão</div>
        <div class="version"><?= htmlspecialchars($version) ?></div>
    </div>
</body>
</html>