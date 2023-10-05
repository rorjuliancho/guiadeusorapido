<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Guía de Manejo Rápido</title>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 p-4">
        <a class="btn btn-danger" href="<?= base_url() ?>"> Regresar </a>
      </div>
      <div class="col-lg-9 p-4">
        <h2>GUÍA DE MANEJO RÁPIDO DE EQUIPOS MÉDICOS</h2>
      </div>
      <div class="col-lg-12 p-4">
        <form id="myFormData" class="form-control" action="<?= base_url() ?>Welcome/insertarAllData" method="POST" enctype="multipart/form-data">
          <div class="form-row">
            <div class="form-group col-md-12">
              <label>
                <h5>Nombre del equipo</h5>
              </label>
              <input type="text" name="nombreEquipo" class="form-control" id="inputEmail4" placeholder="ELECTROCARDIÓGRAFO DE 12 DERIVACIONES - MAC 600" required>
            </div>
          </div>

          <div class="form-group">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="">
                  <h5>Descripción</h5>
                </label>
                <textarea rows="7" name="descripcion" class="form-control" id="" placeholder="Descripción" required></textarea>
              </div>
              <div class="form-group col-md-6">
                <label for="">
                  <h5>Advertencias</h5>
                </label>
                <textarea rows="7" name="advertencias" class="form-control" id="" placeholder="Advertencias" required></textarea>
              </div>
            </div>
          </div>


         
          <div class="form-group">
            <div class="form-row ">
              <div class="form-group col-md-6">
                <h4>Limpieza y desinfección</h4>
                <textarea rows="5" name="limpiezaEquipo" type="text" class="form-control" required placeholder="Agrega la información de limpieza y desinfección del equipo"></textarea>
                <label for="inputAddress">Nota</label>
                <textarea rows="3" name="notaLimpieza" type="text" class="form-control" required></textarea>
              </div>
              <div class="form-group col-md-6">
                <h4>Biblioteca de Medicamentos</h4>
                <textarea rows="5" name="bibliotecaMedicamentos" type="text" class="form-control" placeholder="Agrega la información de la biblioteca de medicamentos"></textarea>
               
              </div>
            </div>
          </div>
          <center class="p-4">
            <button type="submit" class="btn btn-primary" id="submitBtn">Crear y Cargar Imagenes </button>
          </center>
        </form>

       
      </div>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="<?= base_url() ?>public/app.js"></script>

</body>

</html>