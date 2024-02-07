<?php

// Destruir todas las variables de sesión
$_SESSION = array();

// Borrar la cookie de sesión si está presente
if (isset($_COOKIE[session_name("login")])) {
    setcookie(session_name("login"), '', time() - 3600, '/');
}

// Finalizar la sesión
session_destroy();

// Redirigir al usuario a la página de inicio de sesión u otra página
header("Location: index.html");
exit();
