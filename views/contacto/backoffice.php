<?php
// views/contacto/backoffice.php
// VISTA del backoffice — lista todos los mensajes recibidos
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thread — Backoffice | Mensajes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body      { background:#f0ede6; font-family:Georgia,serif; }
    .top-bar  { background:#3d3a2e; color:#f5f3ef; padding:12px 24px;
                display:flex; align-items:center; justify-content:space-between; }
    .top-bar a{ color:#c8c4b0; text-decoration:none; font-size:13px; }
    .badge-no-leido { background:#c0603a; color:#fff; font-size:11px;
                      padding:2px 8px; border-radius:10px; margin-left:6px; }
    .tabla-mensajes th { background:#3d3a2e; color:#f5f3ef; font-size:12px;
                          font-weight:normal; text-transform:uppercase; }
    .fila-no-leida { background:#fff8f0 !important; font-weight:bold; }
    .fila-leida    { color:#888; }
    .btn-leer  { background:#7a7550; color:#fff; border:none;
                 padding:4px 10px; font-size:11px; border-radius:2px; }
    .btn-borrar{ background:#c0603a; color:#fff; border:none;
                 padding:4px 10px; font-size:11px; border-radius:2px; }
    .mensaje-cell { max-width:280px; font-size:13px; }
    .card-stat { background:#fff; border-top:3px solid #3d3a2e;
                 padding:16px 20px; border-radius:2px; text-align:center; }
    .stat-n    { font-size:36px; color:#7a7550; font-weight:bold; }
    .stat-l    { font-size:12px; color:#888; }
  </style>
</head>
<body>

<!-- Barra superior -->
<div class="top-bar">
  <span style="font-size:16px; font-weight:bold;">
    Thread &nbsp;<em style="font-size:13px; color:#a0997a;">Backoffice</em>
    <?php if ($noLeidos > 0): ?>
      <span class="badge-no-leido"><?= $noLeidos ?> nuevos</span>
    <?php endif; ?>
  </span>
  <a href="../index.php">← Regresar al sitio</a>
</div>

<div class="container py-4">

  <!-- Estadísticas rápidas -->
  <div class="row g-3 mb-4">
    <div class="col-4">
      <div class="card-stat">
        <div class="stat-n"><?= count($mensajes) ?></div>
        <div class="stat-l">Total mensajes</div>
      </div>
    </div>
    <div class="col-4">
      <div class="card-stat">
        <div class="stat-n" style="color:#c0603a;"><?= $noLeidos ?></div>
        <div class="stat-l">No leídos</div>
      </div>
    </div>
    <div class="col-4">
      <div class="card-stat">
        <div class="stat-n"><?= count($mensajes) - $noLeidos ?></div>
        <div class="stat-l">Leídos</div>
      </div>
    </div>
  </div>

  <h5 style="font-weight:normal; margin-bottom:16px;">
    Mensajes recibidos
  </h5>

  <?php if (empty($mensajes)): ?>
    <div class="alert" style="background:#e8e4d8; border:1px solid #d4cfc7; color:#555;">
      No hay mensajes aún. Los formularios enviados aparecerán aquí.
    </div>
  <?php else: ?>

  <div class="table-responsive">
    <table class="table tabla-mensajes table-bordered align-middle">
      <thead>
        <tr>
          <th style="width:40px;">#</th>
          <th>Nombre</th>
          <th>Email / Tel</th>
          <th>Asunto</th>
          <th class="mensaje-cell">Mensaje</th>
          <th>Fecha</th>
          <th style="width:110px;">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($mensajes as $m): ?>
        <tr class="<?= $m['leido'] ? 'fila-leida' : 'fila-no-leida' ?>">
          <td><?= $m['id'] ?></td>
          <td><?= htmlspecialchars($m['nombre']) ?></td>
          <td style="font-size:12px;">
            <?= htmlspecialchars($m['email']) ?><br>
            <span style="color:#888;"><?= htmlspecialchars($m['telefono'] ?? '—') ?></span>
          </td>
          <td style="font-size:13px;"><?= htmlspecialchars($m['asunto']) ?></td>
          <td class="mensaje-cell" style="white-space:pre-wrap;">
            <?= htmlspecialchars($m['mensaje']) ?>
          </td>
          <td style="font-size:12px; white-space:nowrap;">
            <?= date('d/m/Y H:i', strtotime($m['fecha'])) ?>
            <?php if (!$m['leido']): ?>
              <span class="badge-no-leido">NUEVO</span>
            <?php endif; ?>
          </td>
          <td>
            <?php if (!$m['leido']): ?>
              <a href="?leido=<?= $m['id'] ?>" class="btn-leer">✓ Leído</a><br><br>
            <?php endif; ?>
            <a href="?eliminar=<?= $m['id'] ?>"
               class="btn-borrar"
               onclick="return confirm('¿Eliminar este mensaje?')">✕ Borrar</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <?php endif; ?>
</div>

</body>
</html>
