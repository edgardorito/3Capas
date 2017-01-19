<body>
  <div class="row">
    <form class="col s12 center"  action="javascript:guardar();">
      <div class="row">
        <div class="input-field col s12">
          <label for="name">Nombre (s)</label><br />
          <input required id="name" name="nombre" type="text" class="validate">
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <label for="lasname">Apellido (s)</label><br />
          <input required id="lasname" name="apellido" type="text" class="validate">
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <label for="age">Edad</label><br />
          <input required id="age" name="edad" type="number" class="validate">
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <label for="major">Carrera</label><br />
          <input required id="major" name="carrera" type="text" class="validate">
        </div>
      </div>

        <button class="btn waves-effect waves-light" type="submit" name="action">Guardar
          <i class="material-icons right">send</i>
        </button>
        <a class="btn waves-effect waves-light" href="lista.php" >Obtener
          <i class="material-icons right">cloud</i>
        </a>


     </form>





  </div>
  </body>
</html>
