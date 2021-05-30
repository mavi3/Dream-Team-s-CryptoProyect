<?php
session_start();
if(isset($_SESSION["user"])) {
   echo '<ul class="navbar-nav">
            <!-- Visible solo si hay una sesión iniciada -->
            <li class="nav-item">
                <a class="nav-link" href="/user/profile.html">Perfil</a>
            </li>
            <!-- Solo los usuarios tienen billetera -->
            <li class="nav-item">
                <a class="nav-link" href="/user/wallet.html">Billetera</a>
            </li>
            <!-- Solo el admin puede revisar los usuarios -->
            <li class="nav-item">
                <a class="nav-link" href="/admin/users/all.html">Usuarios</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <!-- Visible solo si hay una sesión iniciada -->
            <li class="nav-item">
                <a class="nav-link" href="/sesion/logout.php">Cerrar Sesión</a>
            </li>
        </ul>' ;
}
else{
   echo '<ul class="navbar-nav ml-auto">
            <!-- Visible solo si NO hay una sesión iniciada -->
            <li class="nav-item">
                <a class="nav-link" href="/sesion/log-in.html">Iniciar Sesión</a>
            </li>
            <!-- Visible solo si NO hay una sesión iniciada -->
            <li class="nav-item">
                <a class="nav-link" href="/sesion/sign-up.html">Registrarse</a>
            </li>
        </ul>';
}

/* Este archivo debe usarse para comprobar si existe una sesión válida 
   Considerar qué pasa cuando la sesión es válida/inválida para cada página:
   - Página principal
   - Mi perfil
   - Mi billetera
   - Administración de usuarios y todo el CRUD
   - Iniciar Sesión
   - Registrarse
*/
?>