<?php
// Verificar las credenciales (esto es un ejemplo simple, en un entorno real, debes implementar la autenticación segura)
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario_valido = "usuario"; // Cambia esto con un usuario válido
    $contrasena_valida = "contrasena"; // Cambia esto con una contraseña válida
    
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    if ($usuario === $usuario_valido && $contrasena === $contrasena_valida) {
        // Inicio de sesión exitoso, redirige a la página de inicio
        header("Location: pagina_de_inicio.php");
        exit();
    } else {
        // Las credenciales son incorrectas, muestra un mensaje de error
        echo "Credenciales incorrectas. Intenta de nuevo.";
    }
}
?>
