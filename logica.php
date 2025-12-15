<?php

$resultado = null;
$cop = null;
$moneda = null;

$tasas = [
    'usd' => 0.00025,
    'eur' => 0.00023,
    'jpy' => 0.037
];

$nombres = [
    'usd' => "Dólares Estadounidenses (USD)",
    'eur' => "Euros (EUR)",
    'jpy' => "Yenes Japoneses (JPY)"
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['cop'], $_POST['moneda'])) {

        $cop = $_POST['cop'];
        $moneda = $_POST['moneda'];

        if ($cop > 0 && isset($tasas[$moneda])) {
            $resultado = $cop * $tasas[$moneda];
        }
    }
}