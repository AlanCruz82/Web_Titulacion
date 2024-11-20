<?php
  include("./header.php");
?>

<body>
  <div class="container">
    <h3 class="center-align">Registro de modalidad de titulación</h3>
<div class="form-container z-depth-5">
          <form class="formulario" method="post" action="./procesamientoFormulario.php">
            <div class="row">
              <div class="input-field col s6 m6">
                <i class="material-icons prefix">face</i>
                <input placeholder="Ingresa tu nombre" id="first_name" type="text" class="validate" minlength="4" name="nombres" 
                pattern="[A-Za-z\s]+$" required>
                <label for="first_name">Nombre(s)</label>
                <span class="helper-text" data-error="wrong" data-success="right">Minimo 4 letras</span>
              </div>
              <div class="input-field col s6 m6">
                <i class="material-icons prefix">account_circle</i>
                <input placeholder="Ingresa tu apellido paterno" id="last_name" type="text" class="validate" minlength="4" name="apellidoPaterno"
                pattern="[A-Za-z]+$" required>
                <label for="last_name">Apellido Paterno</label>
                <span class="helper-text" data-error="wrong" data-success="right">Minimo 4 letras</span>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6 m6">
                <i class="material-icons prefix">account_circle</i>
                <input placeholder="Ingresa tu apellido materno" id="disabled" type="text" class="validate" minlength="4" name="apellidoMaterno"
                pattern="[A-Za-z]+$" required>
                <label for="disabled">Apellido Materno</label>
                <span class="helper-text" data-error="wrong" data-success="right">Minimo 4 letras</span>
              </div>
              <div class="input-field col s6 m6">
                <i class="material-icons prefix">featured_play_list</i>
                <input placeholder="Ingresa tu número de cuenta" id="disabled" type="tel" class="validate" minlength="9" maxlength="9"
                pattern="^[0-9]{9}$" name="numeroCuenta" required>
                <label for="disabled">Número de cuenta</label>
                <span class="helper-text" data-error="wrong" data-success="right">Es necesario 9 numeros</span>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6 m6">
                <i class="material-icons prefix">phone</i>
                <input placeholder="Ingresa tu telefono celular" id="disabled" type="tel" class="validate" minlength="10" maxlength="10"
                pattern="^[0-9]{10}$" name="telefonoCelular" required>
                <label for="disabled">Número celular</label>
                <span class="helper-text" data-error="wrong" data-success="right">Es necesario 10 numeros</span>
              </div>
              <div class="input-field col s6 m6">
                <i class="material-icons prefix">email</i>
                <input placeholder="Ingresa su correo electronico" id="disabled" type="email" class="validate" name="correoElectronico" required>
                <label for="disabled">Correo electronico</label>
                <span class="helper-text" data-error="wrong" data-success="right">Proporciona un correo electrónico</span>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12 m12">
                  <select name="modalidad" required>
                    <option value="" disabled selected>Selecciona una opción</option>
                    <option value="1">Tesis o tesina y examen profesional
                    </option>
                    <option value="2">Actividad de investigación en su alternativa de tesis o tesina
                    </option>
                    <option value="3">Actividad de apoyo a la docencia
                  </option>
                    <option value="4">Trabajo profesional
                    </option>
                    <option value="5">Servicio social
                    </option>
                    <option value="6">Actividad de investigación en su alternativa de artículo académico
                    </option>
                    <option value="7">Examen general de conocimientos externo
                    </option>
                    <option value="8">Totalidad de créditos y alto nivel académico
                    </option>
                    <option value="9">Estudios en posgrado
                  </option>
                    <option value="10">Ampliación y profundización de conocimientos en su alternativa de semestre adicional
                    </option>
                    <option value="11">Ampliación y profundización de conocimientos en su alternativa cursos o diplomados de educación continua
                    </option>
                  </select>
                  <label>Selecciona una modalidad de titulación:</label>
                </div>
            </div>
            <div class="row">
              <div class="input-field col s12 m12">
                  <select name="planEstudio" required>
                    <option value="" disabled selected>Selecciona una opción</option>
                    <option value="Plan 0080">Plan 0080</option>
                    <option value="Plan 0082">Plan 0082</option>
                    <option value="Plan 1279">Plan 1279</option>
                    <option value="Plan 2119">Plan 2119</option>
                  </select>
                  <label>Selecciona un plan de estudios:</label>
                </div>
            </div>
            <div class="row">
              <a href="./index.php">
                <button class="col offset-s1 s10 offset-m1 m10  btn waves-effect waves-light botonFormulario" type="submit" name="action">
                     Enviar
                   <i class="material-icons right">send</i>
                </button>
              </a>
            </div>
        </form>
    </div>
  </div>
</body>

<?php
  include("./footer.php");
?>