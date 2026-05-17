<?php
// controllers/ContactoController.php
// CONTROLADOR: recibe datos del formulario, valida y llama al modelo

require_once __DIR__ . '/../models/ContactoModel.php';

class ContactoController {

    private $model;

    public function __construct() {
        $this->model = new ContactoModel();
    }

    // Procesa el envío del formulario (POST)
    public function enviar() {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: ../index.php#contacto');
            exit;
        }

        // --- Sanitización de datos ---
        $nombre   = trim(htmlspecialchars($_POST['nombre']   ?? ''));
        $email    = trim(htmlspecialchars($_POST['email']    ?? ''));
        $telefono = trim(htmlspecialchars($_POST['telefono'] ?? ''));
        $asunto   = trim(htmlspecialchars($_POST['asunto']   ?? ''));
        $mensaje  = trim(htmlspecialchars($_POST['mensaje']  ?? ''));

        // --- Validaciones básicas ---
        $errores = [];

        if (empty($nombre))   $errores[] = "El nombre es obligatorio.";
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL))
                              $errores[] = "Escribe un correo válido.";
        if (empty($asunto))   $errores[] = "El asunto es obligatorio.";
        if (strlen($mensaje) < 10)
                              $errores[] = "El mensaje debe tener al menos 10 caracteres.";

        if (!empty($errores)) {
            // Regresar a la vista con errores
            $_SESSION['form_errores'] = $errores;
            $_SESSION['form_datos']   = compact('nombre','email','telefono','asunto','mensaje');
            header('Location: ../index.php#contacto');
            exit;
        }

        // --- Guardar en BD ---
        $ok = $this->model->guardar($nombre, $email, $telefono, $asunto, $mensaje);

        if ($ok) {
            $_SESSION['form_exito'] = "¡Mensaje enviado! Te contactaremos pronto.";
        } else {
            $_SESSION['form_errores'] = ["Ocurrió un error al guardar. Intenta de nuevo."];
        }

        header('Location: ../index.php#contacto');
        exit;
    }

    // Muestra el backoffice con todos los mensajes
    public function backoffice() {
        $mensajes    = $this->model->obtenerTodos();
        $noLeidos    = $this->model->contarNoLeidos();

        // Acciones desde el backoffice
        if (isset($_GET['leido'])) {
            $this->model->marcarLeido((int)$_GET['leido']);
            header('Location: backoffice.php');
            exit;
        }
        if (isset($_GET['eliminar'])) {
            $this->model->eliminar((int)$_GET['eliminar']);
            header('Location: backoffice.php');
            exit;
        }

        // Cargar la vista del backoffice
        require_once __DIR__ . '/../views/contacto/backoffice.php';
    }
}
?>
