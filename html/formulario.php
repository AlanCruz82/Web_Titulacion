<?php
  include("./header.php");
?>

<body>
    <div class="contenedorPrincipal">
        <form class="col s6 m7" method="post">
          <div class="row">
            <div class="input-field col s6">
              <input placeholder="Ingresa tu nombre" id="first_name" type="text" class="validate" minlength="4">
              <label for="first_name">Nombres</label>
              <span class="helper-text" data-error="wrong" data-success="right">Minimo 4 letras</span>
            </div>
            <div class="input-field col s6">
              <input placeholder="Ingresa tu apellido paterno" id="last_name" type="text" class="validate" minlength="4">
              <label for="last_name">Apellido Paterno</label>
              <span class="helper-text" data-error="wrong" data-success="right">Minimo 4 letras</span>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input placeholder="Ingresa tu apellido materno" id="disabled" type="text" class="validate" minlength="4">
              <label for="disabled">Apellido Materno</label>
              <span class="helper-text" data-error="wrong" data-success="right">Minimo 4 letras</span>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
                <input placeholder="Ingresa tu número de cuenta" id="disabled" type="text" class="validate" minlength="9" maxlength="9"
                pattern="^[0-9]+$">
                <label for="disabled">Número de cuenta</label>
                <span class="helper-text" data-error="wrong" data-success="right">Es necesario 9 numeros</span>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
                <select>
                  <option value="" disabled selected>Selecciona una opción</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                </select>
                <label>Selecciona una modalidad de estudios:</label>
              </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
                <select>
                  <option value="" disabled selected>Selecciona una opción</option>
                  <option value="0080">Plan 0080</option>
                  <option value="0082">Plan 0082</option>
                  <option value="1279">Plan 1279</option>
                  <option value="2119">Plan 2119</option>
                </select>
                <label>Selecciona un plan de estudios:</label>
              </div>
          </div>
          <div class="row">
            <button class="col s12 btn waves-effect waves-light butonFormulario" type="submit" name="action">
                Enviar
                <i class="material-icons right">send</i>
            </button>
          </div>
        </form>
    </div>
</body>

<?php
  include("./footer.php");
?>