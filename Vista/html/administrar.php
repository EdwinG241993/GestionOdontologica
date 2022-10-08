<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema de Gestion Odontologica</title>
        
        <!-- Hojas de Estilos CSS -->
        <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css"/>
        <link rel="stylesheet" type="text/css" href="Vista/css/tabs.css"/>
        
        
    </head>
    <body>
        <div id="contenedor">
            <div id="encabezado">
            </div>
            <ul id="menu">
                <li><a href="index.php?accion=inicio">Inicio</a></li>
                <li><a href="index.php?accion=asignar">Asignar Cita</a></li>
                <li><a href="index.php?accion=consultar">Consultar Cita</a></li>
                <li><a href="index.php?accion=cancelar">Cancelar Cita</a></li>
                <li class="activa"><a href="index.php?accion=administrar">Administrar</a></li>
            </ul>
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
    </body>
</html>
