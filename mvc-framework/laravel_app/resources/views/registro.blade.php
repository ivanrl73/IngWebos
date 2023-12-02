<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulario de Registro</title>
    <link rel="stylesheet" href="{{ asset('styles-registro.css') }}" />
  </head>
  <body>
    <h2 class="title">Formulario de Registro</h2>
    <section class="container">
      <form action="{{ route('registro.submit') }}" method="post">
        @csrf
        <!-- Container de Nombre -->
        <div class="row">
          <div class="col-25">
            <label for="nombre">Nombre</label>
          </div>
          <div class="col-75">
            <input
              type="text"
              id="nombre"
              name="nombre"
              placeholder="Escriba el Nombre y Apellido"
              required
            />
          </div>
        </div>
        <!-- Container de Correo -->
        <div class="row">
          <div class="col-25">
            <label for="email">Correo Electronico</label>
          </div>
          <div class="col-75">
            <input
              type="text"
              id="email"
              name="email"
              placeholder="Escriba el Correo Electronico"
              required
            />
          </div>
        </div>
        <!-- Container de Contraseña -->
        <div class="row">
          <div class="col-25">
            <label for="contrasena">Contraseña</label>
          </div>
          <div class="col-75">
            <input
              type="password"
              id="contrasena"
              name="contrasena"
              placeholder="Escriba la Contraseña"
              required
            />
          </div>
        </div>
        <!-- Container de Confirmar Contraseña -->
        <div class="row">
          <div class="col-25">
            <label for="confirm-contrasena">Confirmar Contraseña</label>
          </div>
          <div class="col-75">
            <input
              type="password"
              id="confirm-contrasena"
              name="confirm-contrasena"
              placeholder="Escriba la Contraseña"
              required
            />
          </div>
        </div>
        <!-- Boton de Envio -->
        <div class="row button">
          <input type="submit" value="Confirmar Registro" />
        </div>
      </form>
    </section>
  </body>
</html>

