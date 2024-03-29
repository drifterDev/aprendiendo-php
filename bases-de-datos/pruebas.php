<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio.

use App\Controllers\IngresosController;
use App\Controllers\RetirosController;
use App\Enums\IngresoTipoEnum;
use App\Enums\MetodoPagoEnum;
use App\Enums\RetiroTipoEnum;

require("vendor/autoload.php");

// INSERTAR DATOS
// ###################################

// $ingresos_controller = new IngresosController();
// $ingresos_controller->store([
//   "metodo_pago" => MetodoPagoEnum::TarjetaCredito->value,
//   "tipo" => IngresoTipoEnum::Devolucion->value,
//   "fecha" => date("Y-m-d H:i:s"), //Formato para timestamp sql
//   "cantidad" => 250000,
//   "descripcion" => "Devolucion de una compra fallida"
// ]);

// $retiros_controller = new RetirosController();

// De la siguiente manera es más fácil, porque en el metodo de retiros controller solo pasamos $data
// pero lo hacemos de otra forma para el bindparams

// $retiros_controller->store([
//   ":metodo_pago" => MetodoPagoEnum::TarjetaCredito->value,
//   ":tipo" => RetiroTipoEnum::Compra->value,
//   ":fecha" => date("Y-m-d H:i:s"), //Formato para timestamp sql
//   ":cantidad" => 3400,
//   ":descripcion" => "Inpuestos de la compra"
// ]);

// $retiros_controller->store([
//   "metodo_pago" => MetodoPagoEnum::TarjetaCredito->value,
//   "tipo" => RetiroTipoEnum::Compra->value,
//   "fecha" => date("Y-m-d H:i:s"), //Formato para timestamp sql
//   "cantidad" => 240,
//   "descripcion" => "Compra de juguetes"
// ]);

// CONSULTAR DATOS
// ###################################
// $retiros_controller = new RetirosController();
// $retiros_controller->index();

// $retiros_controller = new RetirosController();
// $retiros_controller->show(1);
// $ingresos_controller = new IngresosController();
// $ingresos_controller->index();


// DESTROY DATOS
// #######################################
// $ingresos_controller = new IngresosController();
// $ingresos_controller->destroy(1);


// UPDATE DATOS
// ###################################
$retiros_controller = new RetirosController();
$retiros_controller->update(1, array(
  "metodo_pago" => MetodoPagoEnum::TarjetaCredito->value,
  "tipo" => RetiroTipoEnum::Retiro->value,
  "fecha" => date("Y-m-d H:i:s"),
  "cantidad" => 43020,
  "descripcion" => "Nesesitaba comprar chocolates"
));
