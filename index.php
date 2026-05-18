<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thread — Wear the Moment</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="estilo.css">
</head>
<body>

<?php $activePage = 'index'; require 'nav.php'; ?>


<!-- ══ 01 · INICIO ══════════════════════════════════════════ -->
<main id="inicio">
  <div class="breadcrumb">01 / Inicio / Home</div>

  <table class="hero-table" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td style="padding:64px 40px 64px 56px; width:45%;">
        <h1 class="page-title">Descubre<br><em>tu estilo.</em></h1>
        <p style="margin-top:16px; color:var(--texto-med); font-size:15px; line-height:1.75; max-width:380px;">
          Explora por color, prenda o tendencia. Thread te ayuda a construir outfits que hablen de quién eres.
        </p>
        <a href="productos.php" class="btn-primary">Crear outfit →</a>
      </td>
      <td style="width:55%; padding:0;">
        <img src="img/hero-banner.jpg" alt="Nueva temporada" width="100%" height="520"
          style="display:block; object-fit:cover; background:var(--hueso);">
      </td>
    </tr>
  </table>

  <!-- Color strip -->
  <table class="color-strip" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td style="background:#c0392b; width:11%;"></td>
      <td style="background:#e67e22; width:11%;"></td>
      <td style="background:#f1c40f; width:11%;"></td>
      <td style="background:#27ae60; width:11%;"></td>
      <td style="background:#3498db; width:11%; text-align:center;">
        <a href="productos.php#colores" style="color:#fff; text-decoration:none; font-size:11px; letter-spacing:1px;">Explorar por color →</a>
      </td>
      <td style="background:#9b59b6; width:11%;"></td>
      <td style="background:#1abc9c; width:11%;"></td>
      <td style="background:#bdc3c7; width:11%;"></td>
      <td style="background:#2c3e50; width:12%;"></td>
    </tr>
  </table>

  <!-- Tendencias de la semana -->
  <section>
    <span class="section-label">Esta semana</span>
    <h2 class="section-heading">Tendencias</h2>
    <p class="section-subheading">de la semana</p>
    <span class="heading-accent"></span>

    <table class="card-grid" border="0" cellspacing="22" cellpadding="0" width="100%" style="margin-top:28px;">
      <tr>
        <?php
        $tendencias = [
          ['quiet-luxury.jpg',  'Quiet Luxury',  'emergente'],
          ['tono-tierra.jpeg',  'Tono Tierra',   'fija'],
          ['coastal.jpeg',      'Coastal',        'emergente'],
          ['dark-academia.jpeg','Dark Academia',  'fija'],
        ];
        foreach ($tendencias as $t):
        ?>
        <td width="25%">
          <div class="card-img">
            <img src="img/tendencias/<?= $t[0] ?>" alt="<?= $t[1] ?>">
          </div>
          <p class="product-name" style="padding:12px 14px 4px;"><?= $t[1] ?></p>
          <p style="padding:0 14px 16px;">
            <span class="badge-<?= $t[2] ?>"><?= ucfirst($t[2]) ?></span>
            &nbsp;
            <a href="productos.php#tendencias" class="link-ver">Ver looks →</a>
          </p>
        </td>
        <?php endforeach; ?>
      </tr>
    </table>
  </section>
</main>

<hr style="border:0; border-top:0.5px solid var(--borde); margin:0 56px;">


<!-- ══ 02 · SOBRE THREAD (Relatoría) ═══════════════════════ -->
<section id="relatoria" style="background:var(--hueso);">
  <div class="breadcrumb" style="padding:0 0 10px;">02 / Sobre Thread</div>
  <span class="section-label">Quiénes somos</span>
  <h2 class="section-heading" style="margin-bottom:20px;">
    Sobre <em style="color:var(--sage); font-style:italic;">Thread</em>
  </h2>

  <p style="color:var(--texto-med); line-height:1.75; margin-bottom:14px; max-width:720px;">Thread nació con una misión clara: democratizar el acceso al estilo personal y hacer que la moda sea comprensible para todas las personas, sin importar su edad, talla o punto de partida.</p>
  <p style="color:var(--texto-med); line-height:1.75; margin-bottom:14px; max-width:720px;">Fundada en 2026, la plataforma surgió de la observación de un problema real: muchas personas quieren vestir bien pero no saben por dónde empezar. Thread resuelve eso con tecnología, color y criterio editorial.</p>
  <p style="color:var(--texto-med); line-height:1.75; margin-bottom:14px; max-width:720px;">Nuestro enfoque parte del color como lenguaje. Creemos que entender los colores que te favorecen es el primer paso para construir un guardarropa coherente y atemporal.</p>
  <p style="color:var(--texto-med); line-height:1.75; max-width:720px;">Thread no es una tienda convencional. Es una plataforma de descubrimiento donde el usuario explora tendencias, arma outfits y recibe orientación personalizada adaptada a su estilo de vida.</p>

  <div style="margin-top:24px;">
    <button onclick="toggleRelato()" id="btn-cta" class="btn-primary" style="border:none; cursor:pointer;">Conoce más ▼</button>
  </div>

  <div id="mas-info" style="display:none; margin-top:24px; max-width:720px;">
    <p style="color:var(--texto-med); line-height:1.75; margin-bottom:14px;">Trabajamos con marcas responsables que comparten nuestra visión: la moda como expresión, no como presión.</p>
    <p style="color:var(--texto-med); line-height:1.75; margin-bottom:14px;">Nuestra paleta de 20 colores base es el corazón del sistema. A partir de ella construimos combinaciones, sugerimos prendas complementarias y creamos looks para cada ocasión.</p>
    <p style="color:var(--texto-med); line-height:1.75; margin-bottom:14px;">Thread cree en la inclusividad radical. Por eso nuestra plataforma contempla tallas XS hasta XL, distintos tipos de cuerpo y estilos que van del minimalismo al maximalismo.</p>
    <p style="color:var(--texto-med); line-height:1.75; margin-bottom:14px;">La sección "Crea tu Outfit" es nuestra herramienta estrella. Permite arrastrar prendas del guardarropa personal hacia un canvas virtual y obtener validación instantánea de la combinación.</p>
    <p style="color:var(--texto-med); line-height:1.75;">En Thread creemos que vestirse bien no es un lujo. Es un derecho que merecen todas las personas.</p>
  </div>
</section>

<hr style="border:0; border-top:0.5px solid var(--borde); margin:0 56px;">


<!-- ══ 03 · NOSOTROS ════════════════════════════════════════ -->
<section id="nosotros">
  <div class="breadcrumb" style="padding:0 0 10px;">03 / Sobre Thread</div>

  <table border="0" width="100%" cellspacing="0" cellpadding="0" style="margin-bottom:48px;">
    <tr>
      <td width="35%" align="center">
        <img src="img/logo/logo-jaguar.png" alt="Thread logo" width="280" height="300"
          style="display:block; object-fit:contain; background:var(--hueso); border-radius:var(--radius-md); margin:0 auto;">
      </td>
      <td valign="middle" style="padding-left:48px;">
        <span class="section-label">Nuestra historia</span>
        <h2 style="font-size:52px; font-weight:normal; line-height:1.1; letter-spacing:-1px;">
          Nacimos<br>
          <em style="color:var(--sage);">para vestirte</em><br>
          <span style="border-bottom:1.5px solid var(--oliva);">a ti.</span>
        </h2>
        <p style="font-size:14px; color:var(--texto-med); font-style:italic; margin-top:20px; line-height:1.7; max-width:380px;">
          Thread es la plataforma de moda que democratiza el estilo: flexible, inclusiva y atemporal para todas las edades.
        </p>
      </td>
    </tr>
  </table>

  <!-- Valores -->
  <span class="section-label">Lo que nos define</span>
  <h3 style="font-size:22px; font-weight:normal; margin-bottom:18px;">Nuestros Valores</h3>
  <hr style="border:0; border-top:0.5px solid var(--borde); margin-bottom:22px;">

  <table border="0" cellspacing="18" cellpadding="0" width="100%">
    <tr>
      <?php
      $valores = [
        ['Inclusividad',  'Moda para todas las edades, tallas y estilos. Sin excepción.',          false],
        ['Atemporalidad', 'Creemos en el estilo que dura, no en la tendencia que pasa.',            true],
        ['Orientación',   'Te ayudamos a construir tu estilo sin juzgar tu punto de partida.',      false],
        ['Impacto',       'Promovemos decisiones de moda reflexivas y responsables.',               true],
      ];
      foreach ($valores as $v):
      ?>
      <td width="25%" valign="top">
        <div class="value-card <?= $v[2] ? 'dark' : '' ?>">
          <p style="font-size:13px; font-weight:bold; margin-bottom:8px; font-family:var(--font-serif);"><?= $v[0] ?></p>
          <p style="font-size:13px; color:var(--texto-med); line-height:1.6;"><?= $v[1] ?></p>
        </div>
      </td>
      <?php endforeach; ?>
    </tr>
  </table>

  <!-- Misión / Visión / Propósito -->
  <table border="0" cellspacing="0" cellpadding="0" width="100%"
    style="margin-top:48px; border-top:0.5px solid var(--borde); padding-top:28px;">
    <tr>
      <?php
      $mv = [
        ['MISIÓN',    'Democratizar el estilo haciendo la moda accesible, comprensible e inspiradora para cualquier persona en cualquier etapa de su vida.'],
        ['VISIÓN',    'Ser la plataforma de moda de referencia: el lugar donde el color, la prenda y el outfit se convierten en lenguaje personal.'],
        ['PROPÓSITO', 'Existir para que cada persona encuentre en la ropa una forma auténtica de expresarse y vivir cada momento con intención.'],
      ];
      foreach ($mv as $m):
      ?>
      <td width="33%" valign="top" style="padding:0 24px;">
        <p class="mission-label"><?= $m[0] ?></p>
        <p style="font-size:13px; color:var(--texto-med); font-style:italic; line-height:1.7;"><?= $m[1] ?></p>
      </td>
      <?php endforeach; ?>
    </tr>
  </table>
</section>


<!-- ══ FOOTER ═══════════════════════════════════════════════ -->
<footer>
  <table border="0" width="100%" cellspacing="0" cellpadding="0">
    <tr>
      <td>
        <strong style="color:var(--crema); font-family:var(--font-serif); letter-spacing:2px;">Thread</strong>
        &nbsp;
        <em style="color:rgba(160,153,122,0.8); font-size:11px;">Wear the Moment</em>
      </td>
      <td align="center">
        <a href="index.php">Inicio</a>
        <a href="productos.php#colores">Colores</a>
        <a href="productos.php#tendencias">Tendencias</a>
        <a href="productos.php#prendas">Prendas</a>
        <a href="productos.php#outfits">Outfits</a>
        <a href="contacto.php">Contacto</a>
        <a href="faq.php">FAQ</a>
      </td>
      <td align="right">
        <small style="color:rgba(160,153,122,0.7);">© 2026 Thread</small>
      </td>
    </tr>
  </table>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  function toggleMenu() {
    var m = document.getElementById('mobileMenu');
    var b = document.getElementById('burger');
    var open = m.style.display === 'flex';
    m.style.display = open ? 'none' : 'flex';
    b.classList.toggle('open', !open);
  }
  function toggleRelato() {
    var bloque = document.getElementById('mas-info');
    var btn    = document.getElementById('btn-cta');
    var closed = bloque.style.display === 'none';
    bloque.style.display = closed ? 'block' : 'none';
    btn.textContent      = closed ? 'Ver menos ▲' : 'Conoce más ▼';
  }
</script>
</body>
</html>
