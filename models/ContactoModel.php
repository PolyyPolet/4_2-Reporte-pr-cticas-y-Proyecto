<?php
// models/ContactoModel.php
// MODELO: maneja toda la lógica de datos del formulario de contacto

require_once __DIR__ . '/../config/database.php';

class ContactoModel {

    private $db;

    public function __construct() {
        $this->db = Database::conectar();
    }

    // Guarda un nuevo mensaje en la base de datos
    public function guardar($nombre, $email, $telefono, $asunto, $mensaje) {
        $stmt = $this->db->prepare(
            "INSERT INTO contactos (nombre, email, telefono, asunto, mensaje)
             VALUES (?, ?, ?, ?, ?)"
        );
        $stmt->bind_param("sssss", $nombre, $email, $telefono, $asunto, $mensaje);
        $resultado = $stmt->execute();
        $stmt->close();
        return $resultado;
    }

    // Obtiene todos los mensajes para el backoffice
    public function obtenerTodos() {
        $resultado = $this->db->query(
            "SELECT * FROM contactos ORDER BY fecha DESC"
        );
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    // Marca un mensaje como leído
    public function marcarLeido($id) {
        $stmt = $this->db->prepare(
            "UPDATE contactos SET leido = 1 WHERE id = ?"
        );
        $stmt->bind_param("i", $id);
        $resultado = $stmt->execute();
        $stmt->close();
        return $resultado;
    }

    // Elimina un mensaje
    public function eliminar($id) {
        $stmt = $this->db->prepare(
            "DELETE FROM contactos WHERE id = ?"
        );
        $stmt->bind_param("i", $id);
        $resultado = $stmt->execute();
        $stmt->close();
        return $resultado;
    }

    // Cuenta mensajes no leídos (para badge en backoffice)
    public function contarNoLeidos() {
        $resultado = $this->db->query(
            "SELECT COUNT(*) as total FROM contactos WHERE leido = 0"
        );
        $fila = $resultado->fetch_assoc();
        return $fila['total'];
    }
}
?>
