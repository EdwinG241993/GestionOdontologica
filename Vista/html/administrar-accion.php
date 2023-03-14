<div id="contenido">
    <h2>Administración Usuarios</h2>
    <div class="tabs">
        <span data-tab-value="#Admin" class="nav-link active">Administradores</span>
        <span data-tab-value="#medicos">Medicos</span>
        <span data-tab-value="#auxiliares">Auxiliares</span>
        <span data-tab-value="#bd">Base Datos</span>
    </div>
    <div class="tab-content">
        <div class="tabs__tab active" id="Admin" data-tab-info>
            <br>
            <h3>Registrar Administradores</h3>
            <form action="" 
                  method="POST" data-form="guardar" autocomplete="off" class="needs-validation"
                  enctype="multipart/form-data" novalidate>
                <br>
                <fieldset>
                    <legend>Información personal</legend>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 mb-3">
                                <div class="form-group">  
                                    <label class="control-label">Identificacion *</label>
                                    <input pattern="[0-9-]{1,30}" class="form-control form-control-sm" type="text" name="id-reg" maxlength="30" required>                                                                        
                                    <div class="invalid-feedback">
                                        El campo es requerido y solo puede contener numeros.
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 mb-3">
                                <div class="form-group">
                                    <label class="control-label">Nombres *</label>
                                    <input class="form-control form-control-sm" type="text" name="nom-reg" maxlength="50" required="">
                                    <div class="invalid-feedback">
                                        El campo es requerido.
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 mb-3">
                                <div class="form-group label-floating">
                                    <label class="control-label">Apellidos *</label>
                                    <input class="form-control form-control-sm" type="text" name="ape-reg" required="" maxlength="50">
                                    <div class="invalid-feedback">
                                        El campo es requerido.
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 mb-3">
                                <div class="form-group">
                                    <label class="control-label">Telefono *</label>
                                    <input pattern="[0-9-]{1,30}" class="form-control form-control-sm" type="text" name="tel-reg" required="" maxlength="20">
                                    <div class="invalid-feedback">
                                        El campo es requerido y solo puede contener numeros.
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 mb-3">
                                <div class="form-group">
                                    <label class="control-label">E-mail *</label>
                                    <input type="email" class="form-control form-control-sm" name="ema-reg" value="" required/>
                                    <div class="invalid-feedback">
                                        El campo es requerido con el formato user@mail.com.
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 mb-3">
                                <div class="form-group">
                                    <label class="control-label">Direccion *</label>
                                    <input class="form-control form-control-sm" type="text" name="dir-reg" maxlength="100" required="">
                                    <div class="invalid-feedback">
                                        El campo es requerido.
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 mb-3">
                                <div class="form-group">
                                    <label class="control-label">Genero</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gen-reg" id="flexRadioDefault2" required>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Masculino
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gen-reg" id="flexRadioDefault2" required>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Femenino
                                        </label>
                                        <div class="invalid-feedback">
                                            Por favor escoge una opcion.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <br>
                <fieldset>
                    <legend>Datos de Cuenta</legend>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 mb-3">
                                <div class="form-group">
                                    <label class="control-label">Nombre de usuario *</label>
                                    <input pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ]{1,15}" class="form-control form-control-sm" type="text" name="usu-reg" required="" maxlength="15">
                                    <div class="invalid-feedback">
                                        El campo es requerido.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 mb-3">
                                <div class="form-group">
                                    <label class="control-label">Contraseña *</label>
                                    <input class="form-control form-control-sm" type="password" name="pass-reg" required="" maxlength="70">
                                    <div class="invalid-feedback">
                                        El campo es requerido.
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 mb-3">
                                <div class="form-group">
                                    <label class="control-label">Repita la contraseña *</label>
                                    <input class="form-control form-control-sm" type="password" name="pass2-reg" required="" maxlength="70">
                                    <div class="invalid-feedback">
                                        El campo es requerido.
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </fieldset>
                <br>
                <fieldset>
                    <legend>Nivel de privilegios</legend>
                    <div class="col-xs-12 col-sm-6 mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pri-opt" id="privilegio-opt" required>
                            <label class="form-check-label" for="privilegio-opt">
                                Nivel 1 Control total del sistema
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pri-opt" id="privilegio-opt" required>
                            <label class="form-check-label" for="privilegio-opt">
                                Nivel 2 Permiso para registro y actualización
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pri-opt" id="privilegio-opt" required>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Nivel 3 Permiso para registro
                            </label>
                            <div class="invalid-feedback">
                                Por favor escoge una opcion.
                            </div>
                        </div>
                    </div>
                </fieldset>
                <p class="text-center" style="margin-top: 20px;">
                    <button type="submit" class="btn btn-primary btn-sm"><i class="zmdi zmdi-floppy"></i> Guardar</button>
                </p>
                <div class="RespuestaAjax"></div>
            </form>
        </div>
        <div class="tabs__tab" id="medicos" data-tab-info>
            <p>Medicos</p>                    
        </div>

        <div class="tabs__tab" id="auxiliares" data-tab-info>
            <p>Auxiliares</p>
        </div>

        <div class="tabs__tab" id="bd" data-tab-info>
            <p>Base Datos</p>
        </div>
    </div>             
</div>

<script>
    const tabs = document.querySelectorAll('[data-tab-value]');
    const tabInfos = document.querySelectorAll('[data-tab-info]');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const target = document.querySelector(tab.dataset.tabValue);
            tabInfos.forEach(tabInfo => {
                tabInfo.classList.remove('active');
            });
            target.classList.add('active');
        });
    });
</script>

<!-- 

 <form action="index.php?accion=guardarUsuario" method="post" id="registro">
                <table>
                    <tr>
                        <td>Nombres:</td>
                        <td><input type="text" name="nombre" id="nombre" required ></td>
                        <td>Apellidos:</td>
                        <td><input type="text" name="apellido" id="apellido" required ></td>
                    </tr>
                    <tr>
                        <td>Identificacion:</td>
                        <td><input type="number" name="identificacion" id="identificacion" required ></td>
                        <td>Email:</td>
                        <td><input type="email" name="email" id="email" autocomplete="off" required > <div id="info_email" hidden></div></td>
                    </tr>
                    <tr>
                        <td>Nombres:</td>
                        <td><input type="text" name="nombre" id="nombre" required ></td>
                        <td>Apellidos:</td>
                        <td><input type="text" name="apellido" id="apellido" required ></td>
                    </tr>
                    <tr>
                        <td>Usuario:</td>
                        <td><input type="text" name="usuario" id="usuario" required ></td>
                        <td>Rol:</td>
                        <td>
                            <select id="rol" name="rol">
                                <option value="-1" selected="selected">---Seleccione un rol---</option>
                                <option value="administrador">Administrador</option>
                                <option value="medico">Medico</option>
                                <option value="auxiliar">Auxiliar</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Clave:</td>
                        <td><input type="password" name="clave" id="clave" required></td>
                        <td>Repetir Clave:</td>
                        <td><input type="password" name="clave2" id="clave2" required></td>
                        <td><div id="ver_info" hidden ></div></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div id="pass_info" hidden>
                                <strong>Requisitos Contraseña:</strong>
                                <ul>
                                    <li id="minus" class="invalid">Al menos <strong>una letra minuscula</strong>
                                    </li>
                                    <li id="mayus" class="invalid">Al menos <strong>una mayuscula</strong>
                                    </li>
                                    <li id="num" class="invalid">Al menos <strong>un numero</strong>
                                    </li>
                                    <li id="long" class="invalid">Por lo menos <strong>6 caracteres</strong>
                                    </li>
                                </ul>
                            </div>                
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="insertarUsuario" id="insertarUsuario" value="Enviar"/>
                        </td>
                    </tr>
                </table>
            </form>

-->