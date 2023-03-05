
<div id="contenido">
    <h2>Administración</h2>
    <div class="tabs">
        <span data-tab-value="#Admin">Administradores</span>
        <span data-tab-value="#medicos">Medicos</span>
        <span data-tab-value="#auxiliares">Auxiliares</span>
        <span data-tab-value="#bd">Base Datos</span>
    </div>
    <div class="tab-content">
        <div class="tabs__tab active" id="Admin" data-tab-info>
            <p>Administradores</p>
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
