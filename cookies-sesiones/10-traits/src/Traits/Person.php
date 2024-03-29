<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

namespace App\Traits;

trait Person
{
  public function existir()
  {
    return "Soy una persona";
  }

  public function preguntar()
  {
    return "¿Porque soy una persona?";
  }
}
