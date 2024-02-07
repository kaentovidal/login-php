<?php
// Iniciar la sesión
session_name("login");
session_start();

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar datos del formulario
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Verificar las credenciales (puedes reemplazar esto con una consulta a una base de datos)
    $valid_username = "user"; // Reemplaza con tu nombre de usuario
    $valid_password = "pwd"; // Reemplaza con tu contraseña

    if ($username === $valid_username && $password === $valid_password) {
        // Inicio de sesión exitoso
        $_SESSION["username"] = $username; // Almacena el nombre de usuario en la sesión

        // Redirigir al usuario a otra página
        header("Location: welcome.html");
        exit(); // Asegúrate de salir del script después de la redirección
    } else {
        // Credenciales incorrectas
        echo "Credenciales incorrectas. Por favor, intenta de nuevo.";
    }
}
