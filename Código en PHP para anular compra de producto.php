<?php
// Obtener el ID de la compra a anular
$compraId = $_GET['compra_id'];

// Obtener los datos de la compra de la base de datos o de la API
$compra = obtenerCompra($compraId);

// Verificar si se encontró la compra
if ($compra) {
    // Verificar si la compra ya ha sido anulada
    if ($compra['anulada']) {
        echo 'La compra ya ha sido anulada.';
    } else {
        // Anular la compra
        anularCompra($compraId);

        echo 'Compra anulada exitosamente.';
    }
} else {
    echo 'No se encontró la compra.';
}

// Función para obtener los datos de una compra de la base de datos o de una API
function obtenerCompra($compraId)
{
    // Aquí añades la lógica para obtener los datos de la compra
    // Puedes acceder a una base de datos o a una API, dependiendo de donde estén almacenados los datos de la compra
    // Por simplicidad, este ejemplo devuelve un array fijo con los datos de la compra

    $compra = [
        'id' => $compraId,
        'anulada' => false,
        'productos' => ['Lapiz Labial', 'Esmalte para uñas', 'Champu para todo cabello'],
        'monto' => 65.000.00
    ];

    return $compra;
}

// Función para anular una compra en la base de datos o en una API
function anularCompra($compraId)
{
    // Aquí añades la lógica para anular la compra
    // Puedes acceder a una base de datos o a una API, dependiendo de donde estén almacenados los datos de la compra
    // Por simplicidad, este ejemplo simplemente marca la compra como anulada en el array de datos de la compra

    $compra = obtenerCompra($compraId);
    $compra['anulada'] = true;

    // Aquí puedes guardar los cambios en la base de datos o en la API, dependiendo de donde estén almacenados los datos de la compra

    return true;
}
?>