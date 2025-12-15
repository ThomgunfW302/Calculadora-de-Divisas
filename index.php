<?php include "logica.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Calculadora de Divisas</title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <div class="container">
            <form method="post">
                <label>Monto en Pesos Colombianos (COP)</label>
                <input type="number" name="cop" required />

                <label>Convertir a:</label>
                <select name="moneda" required>
                    <option value="usd">Dólares Estadounidenses (USD)</option>
                    <option value="eur">Euros (EUR)</option>
                    <option value="jpy">Yenes Japoneses (JPY)</option>
                </select>

                <button type="submit">Convertir</button>
            </form>
        </div>
        <?php if ($resultado !== null): ?>
        <div class="modal">
            <div class="modal-content">
                <h3>Resultado</h3>
                <p><strong>COP:</strong> <?= $cop ?></p>
                <p><strong><?= $nombres[$moneda] ?>:</strong>
                    <?= number_format($resultado, 2) ?>
                </p>

                <a href="index.php" class="btn">Cerrar</a>
            </div>
        </div>
        <?php endif; ?>
    </body>
</html>