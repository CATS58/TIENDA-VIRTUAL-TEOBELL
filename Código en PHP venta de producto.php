<?php
// Definir array de productos
$productos = array(
    array("Codigo" => "P001", "Nombre" => "Lapiz Labial", "Precio" => $18.000),
    array("Codigo" => "P002", "Nombre" => "Esmalte para uñas", "Precio" => $15.000),
    array("Codigo" => "P003", "Nombre" => "Champu para todo cabello", "Precio" => $32.000),
);

// Función para mostrar los productos
function mostrarProductos($productos) {
    echo "Productos disponibles:\n";
    echo "-----------------------\n";
    foreach($productos as $producto) {
        echo "Código: " . $producto['Codigo'] . "\n";
        echo "Nombre: " . $producto['Nombre'] . "\n";
        echo "Precio: $" . $producto['Precio'] . "\n";
        echo "-----------------------\n";
    }
}

// Función para calcular el total de la venta
function calcularTotal($carrito) {
    $total = 0;
    foreach($carrito as $producto) {
        $total += $producto['Precio'];
    }
    return $total;
}

// Función para mostrar el carrito de compras
function mostrarCarrito($carrito) {
    echo "Carrito de compras:\n";
    echo "-----------------------\n";
    foreach($carrito as $producto) {
        echo "Código: " . $producto['Codigo'] . "\n";
        echo "Nombre: " . $producto['Nombre'] . "\n";
        echo "Precio: $" . $producto['Precio'] . "\n";
        echo "-----------------------\n";
    }
    echo "Total: $" . calcularTotal($carrito) . "\n";
}

// Inicializar carrito de compras
$carrito = array();

// Mostrar productos disponibles
mostrarProductos($productos);

// Procesar compra
$opcion = "";
while($opcion != "3") {
    echo "Seleccione una opción:\n";
    echo "1. Agregar producto al carrito
";
    echo "2. Ver carrito de compras
";
    echo "3. Finalizar compra
";
    $opcion = readline();

    switch($opcion) {
        case "1":
            echo "Ingrese el código del producto a agregar: ";
            $codigo = readline();

            // Verificar si el producto existe
            $productoEncontrado = false;
            foreach($productos as $producto) {
                if($producto['Codigo'] == $codigo) {
                    $productoEncontrado = true;
                    $carrito[] = $producto; // Agregar el producto al carrito
                    echo "Producto agregado al carrito
";
                    break;
                }
            }
            if(!$productoEncontrado) {
                echo "Producto no encontrado
";
            }
            break;
        case "2":
            mostrarCarrito($carrito);
            break;
        case "3":
            echo "Compra finalizada. Gracias por su compra!\n";
            break;
        default:
            echo "Opción inválida
";
            break;
    }
}
?>