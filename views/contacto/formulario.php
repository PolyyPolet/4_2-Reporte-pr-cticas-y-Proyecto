<?php
// views/contacto/formulario.php
// VISTA del formulario — se incluye dentro de index.php en la sección #contacto

// Leer mensajes de sesión
$exito   = $_SESSION['form_exito']   ?? null;
$errores = $_SESSION['form_errores'] ?? [];
$datos   = $_SESSION['form_datos']   ?? [];

// Limpiar sesión después de leer
unset($_SESSION['form_exito'], $_SESSION['form_errores'], $_SESSION['form_datos']);
?>

<!-- ══════════════════════════════════════════
     FORMULARIO DE CONTACTO — Thread MVC
     Se ubica DENTRO del contenedor de WhatsApp
     en la sección #contacto de index.php
     ══════════════════════════════════════════ -->

<div class="thread-form-wrapper mt-4">

  <h5 style="font-family:Georgia,serif; font-weight:normal; margin-bottom:12px;">
    Envíanos un mensaje
  </h5>

  <!-- Alerta de éxito -->
  <?php if ($exito): ?>
    <div class="alert-thread-ok"><?= $exito ?></div>
  <?php endif; ?>

  <!-- Alerta de errores -->
  <?php if (!empty($errores)): ?>
    <div class="alert-thread-error">
      <strong>Por favor corrige:</strong>
      <ul style="margin:4px 0 0 16px; padding:0;">
        <?php foreach ($errores as $e): ?>
          <li><?= $e ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  <?php endif; ?>

  <!-- Formulario POST → controllers/procesar.php -->
  <form action="controllers/procesar.php" method="POST" novalidate>

    <!-- Nombre -->
    <div class="form-group-thread">
      <label class="form-label-thread" for="nombre">Nombre completo *</label>
      <input
        class="form-input-thread"
        type="text" id="nombre" name="nombre"
        value="<?= htmlspecialchars($datos['nombre'] ?? '') ?>"
        placeholder="Ej. Ana García"
        required>
    </div>

    <!-- Email -->
    <div class="form-group-thread">
      <label class="form-label-thread" for="email">Correo electrónico *</label>
      <input
        class="form-input-thread"
        type="email" id="email" name="email"
        value="<?= htmlspecialchars($datos['email'] ?? '') ?>"
        placeholder="correo@ejemplo.com"
        required>
    </div>

    <!-- Teléfono -->
    <div class="form-group-thread">
      <label class="form-label-thread" for="telefono">Teléfono (opcional)</label>
      <input
        class="form-input-thread"
        type="tel" id="telefono" name="telefono"
        value="<?= htmlspecialchars($datos['telefono'] ?? '') ?>"
        placeholder="771 000 0000">
    </div>

    <!-- Asunto -->
    <div class="form-group-thread">
      <label class="form-label-thread" for="asunto">Asunto *</label>
      <select class="form-input-thread" id="asunto" name="asunto" required>
        <option value="">-- Selecciona --</option>
        <?php
        $opciones = ['Consulta de producto','Disponibilidad','Pedido','Envíos','Otro'];
        foreach ($opciones as $op):
          $sel = (($datos['asunto'] ?? '') === $op) ? 'selected' : '';
        ?>
          <option value="<?= $op ?>" <?= $sel ?>><?= $op ?></option>
        <?php endforeach; ?>
      </select>
    </div>

    <!-- Mensaje -->
    <div class="form-group-thread">
      <label class="form-label-thread" for="mensaje">Mensaje *</label>
      <textarea
        class="form-input-thread"
        id="mensaje" name="mensaje"
        rows="4"
        placeholder="Escribe tu mensaje aquí..."
        required><?= htmlspecialchars($datos['mensaje'] ?? '') ?></textarea>
    </div>

    <!-- Botón enviar -->
    <button type="submit" class="btn-thread-submit">
      Enviar mensaje →
    </button>

  </form>

  <!-- Link al backoffice (solo para demostración en clase) -->
  <p style="margin-top:12px; font-size:11px; color:#888;">
    ¿Eres del equipo Thread?
    <a href="backoffice.php" style="color:#c0603a;">Ver backoffice →</a>
  </p>

</div>

<!-- ── Estilos del formulario (inline para portabilidad) ── -->
<style>
.thread-form-wrapper {
  background: #fff;
  border: 1px solid #d4cfc7;
  border-top: 3px solid #3d3a2e;
  padding: 20px;
  border-radius: 2px;
}
.form-group-thread  { margin-bottom: 14px; }
.form-label-thread  { display:block; font-size:12px; font-weight:bold;
                       color:#555; margin-bottom:4px; font-family:sans-serif; }
.form-input-thread  {
  width:100%; padding:9px 12px;
  border:1px solid #ccc; border-radius:2px;
  font-family:Georgia,serif; font-size:13px;
  background:#faf9f7; color:#2c2c2c;
  box-sizing:border-box;
  transition: border-color 0.2s;
}
.form-input-thread:focus { outline:none; border-color:#7a7550; }
textarea.form-input-thread { resize:vertical; }
.btn-thread-submit {
  background:#3d3a2e; color:#f5f3ef;
  border:none; padding:10px 24px;
  font-family:Georgia,serif; font-size:13px;
  border-radius:2px; cursor:pointer;
  width:100%; margin-top:4px;
  transition: background 0.2s;
}
.btn-thread-submit:hover { background:#5c5830; }
.alert-thread-ok {
  background:#e8f5e9; border:1px solid #a5d6a7;
  color:#2e7d32; padding:10px 14px;
  border-radius:2px; font-size:13px; margin-bottom:12px;
}
.alert-thread-error {
  background:#fdecea; border:1px solid #ef9a9a;
  color:#b71c1c; padding:10px 14px;
  border-radius:2px; font-size:13px; margin-bottom:12px;
}
</style>
