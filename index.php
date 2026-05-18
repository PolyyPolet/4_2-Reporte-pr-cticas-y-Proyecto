<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thread — Wear the Moment</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="estilo.css">
  <style>
    /* ── Contenedores parejos globales ── */

    /* Hero */
    .hero-flex {
      display: flex;
      gap: 0;
      align-items: stretch;
    }
    .hero-flex > .hero-text {
      flex: 1 1 50%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 48px 48px 48px 0;
    }
    .hero-flex > .hero-img {
      flex: 1 1 50%;
    }
    .hero-flex > .hero-img img {
      width: 100%;
      height: 480px;
      object-fit: cover;
      display: block;
    }

    /* Tira de colores */
    .color-strip-flex {
      display: flex;
      height: 40px;
    }
    .color-strip-flex > div {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    /* Grid de cards (tendencias, prendas, guardarropa, tienda) */
    .card-grid-4 {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 22px;
      margin-top: 28px;
    }
    .card-grid-5 {
      display: grid;
      grid-template-columns: repeat(5, 1fr);
      gap: 18px;
      margin-top: 22px;
    }
    .card-grid-6 {
      display: grid;
      grid-template-columns: repeat(6, 1fr);
      gap: 14px;
    }
    .card-grid-8 {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 18px;
    }

    /* Sección Colores: sidebar-left + content + sidebar-right */
    .colores-layout {
      display: flex;
      gap: 0;
      align-items: flex-start;
    }
    .colores-layout .sidebar-paleta {
      width: 200px;
      flex-shrink: 0;
      padding-right: 32px;
    }
    .colores-layout .colores-content {
      flex: 1;
      min-width: 0;
    }
    .colores-layout .sidebar-looks {
      width: 240px;
      flex-shrink: 0;
      padding-left: 28px;
    }

    /* Paleta de colores (grid 5 cols) */
    .paleta-grid {
      display: grid;
      grid-template-columns: repeat(5, 32px);
      gap: 6px;
    }
    .paleta-grid .paleta-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 2px;
    }

    /* Combina-con */
    .combina-con {
      display: flex;
      gap: 6px;
      flex-wrap: wrap;
      margin-top: 8px;
    }

    /* Tendencia destacada */
    .tendencia-destacada {
      display: flex;
      gap: 0;
      align-items: flex-start;
      margin-top: 24px;
    }
    .tendencia-destacada .td-img {
      flex: 0 0 55%;
    }
    .tendencia-destacada .td-img img {
      width: 100%;
      height: 360px;
      object-fit: cover;
      border-radius: var(--radius-md, 8px);
      display: block;
    }
    .tendencia-destacada .td-info {
      flex: 1;
      padding-left: 40px;
    }

    /* Sección Prendas: sidebar filtros + grid */
    .prendas-layout {
      display: flex;
      gap: 0;
      align-items: flex-start;
    }
    .prendas-layout .sidebar-filtros {
      width: 200px;
      flex-shrink: 0;
      padding-right: 28px;
    }
    .prendas-layout .prendas-content {
      flex: 1;
      min-width: 0;
    }

    /* Outfit Builder: panel-prendas + canvas + panel-ia */
    .outfit-layout {
      display: flex;
      gap: 0;
      align-items: flex-start;
    }
    .outfit-layout .outfit-panel {
      width: 260px;
      flex-shrink: 0;
      padding-right: 24px;
    }
    .outfit-layout .outfit-canvas {
      flex: 1;
      min-width: 0;
      padding: 0 20px;
    }
    .outfit-layout .outfit-ia {
      width: 280px;
      flex-shrink: 0;
      padding-left: 20px;
    }

    /* Grid prendas dentro del panel */
    .panel-prendas-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 6px;
    }
    .panel-prenda-item img {
      width: 100%;
      height: 64px;
      object-fit: cover;
      border-radius: var(--radius-sm, 4px);
      border: 0.5px solid var(--borde);
      display: block;
    }

    /* Looks en sidebar derecho */
    .looks-stack {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }
    .looks-stack img {
      width: 100%;
      height: 140px;
      object-fit: cover;
      border-radius: 8px;
      display: block;
    }

    /* Guardarropa stats */
    .guardarropa-header {
      display: flex;
      align-items: flex-end;
      justify-content: space-between;
      margin-bottom: 28px;
    }
    .stats-row {
      display: flex;
      gap: 0;
    }
    .stat-cell {
      padding: 0 24px;
      text-align: center;
    }

    /* Nosotros: logo + texto */
    .nosotros-hero {
      display: flex;
      gap: 0;
      align-items: center;
      margin-bottom: 48px;
    }
    .nosotros-hero .nos-logo {
      flex: 0 0 35%;
      display: flex;
      justify-content: center;
    }
    .nosotros-hero .nos-text {
      flex: 1;
      padding-left: 48px;
    }

    /* Valores grid */
    .valores-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 18px;
    }

    /* Misión-Visión-Propósito */
    .mvp-row {
      display: flex;
      gap: 0;
      border-top: 0.5px solid var(--borde);
      padding-top: 28px;
      margin-top: 48px;
    }
    .mvp-row .mvp-cell {
      flex: 1;
      padding: 0 24px;
    }
    .mvp-row .mvp-cell:first-child { padding-left: 0; }
    .mvp-row .mvp-cell:last-child  { padding-right: 0; }

    /* Footer */
    .footer-flex {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .footer-flex nav {
      display: flex;
      gap: 20px;
    }

    /* Tendencias header row */
    .tendencias-header {
      display: flex;
      align-items: flex-end;
      justify-content: space-between;
      margin-bottom: 16px;
    }

    /* Tienda filter row */
    .tienda-filter-row {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 18px;
    }

    /* Prendas filter/sort row */
    .prendas-filter-row {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 16px;
    }

    /* Guardarropa tabs row */
    .guardarropa-tabs-row {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 22px;
    }

    /* Canvas action row */
    .canvas-actions {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 14px;
    }
    .canvas-actions-left {
      display: flex;
      gap: 10px;
    }

    /* Colores filter tabs row */
    .colores-filter-row {
      margin-top: 18px;
    }

    /* Responsive básico */
    @media (max-width: 900px) {
      .hero-flex,
      .colores-layout,
      .tendencia-destacada,
      .prendas-layout,
      .outfit-layout,
      .nosotros-hero,
      .mvp-row {
        flex-direction: column;
      }
      .colores-layout .sidebar-paleta,
      .colores-layout .sidebar-looks,
      .prendas-layout .sidebar-filtros,
      .outfit-layout .outfit-panel,
      .outfit-layout .outfit-ia,
      .nosotros-hero .nos-logo {
        width: 100%;
        padding: 0 0 20px;
      }
      .card-grid-4,
      .card-grid-5,
      .card-grid-6,
      .card-grid-8,
      .valores-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }
  </style>
</head>

<body>

  <!-- NAV -->
  <nav class="tnav">
    <a class="tnav-brand" href="#inicio">
      <img src="img/logo/logo-jaguar.png" alt="Thread logo">
      Thread
    </a>
    <div class="tnav-links">
      <a href="#inicio">Inicio</a>
      <a href="#productos">Productos</a>
      <a href="#contacto">Contáctanos</a>
      <a href="#faq">FAQ</a>
      <a href="#contacto" class="btn-cuenta">Mi cuenta →</a>
    </div>
    <button class="tnav-burger" id="burger" aria-label="Abrir menú" onclick="toggleMenu()">
      <span></span><span></span><span></span>
    </button>
  </nav>
  <div class="tnav-mobile" id="mobileMenu">
    <a href="#inicio">Inicio</a>
    <a href="#productos">Productos</a>
    <a href="#contacto">Contáctanos</a>
    <a href="#faq">FAQ</a>
    <a href="#contacto" class="btn-cuenta">Mi cuenta →</a>
  </div>


  <!-- INICIO -->
  <main id="inicio">
    <div class="breadcrumb">01 / Inicio / Home</div>

    <!-- Hero -->
    <div class="hero-flex">
      <div class="hero-text">
        <h1>Descubre<br><em>tu estilo.</em></h1>
        <p>Explora por color, prenda o tendencia. Thread te ayuda a construir outfits que hablen de quién eres.</p>
        <a href="#outfits" class="btn-primary">Crear outfit →</a>
      </div>
      <div class="hero-img">
        <img src="img/hero-banner.jpg" alt="Nueva temporada">
      </div>
    </div>

    <!-- Tira de colores -->
    <div class="color-strip-flex">
      <div style="background:#c0392b;"></div>
      <div style="background:#e67e22;"></div>
      <div style="background:#f1c40f;"></div>
      <div style="background:#27ae60;"></div>
      <div style="background:#3498db;">
        <a href="#colores" style="color:#fff; text-decoration:none; font-size:11px; letter-spacing:1px;">Explorar por color →</a>
      </div>
      <div style="background:#9b59b6;"></div>
      <div style="background:#1abc9c;"></div>
      <div style="background:#bdc3c7;"></div>
      <div style="background:#2c3e50;"></div>
    </div>

    <!-- Tendencias de la semana -->
    <section>
      <span class="section-label">Esta semana</span>
      <h2 class="section-heading">Tendencias</h2>
      <p class="section-subheading">de la semana</p>
      <span class="heading-accent"></span>

      <div class="card-grid-4">
        <div>
          <div class="card-img"><img src="img/tendencias/quiet-luxury.jpg" alt="Quiet Luxury"></div>
          <p class="product-name" style="padding:0 14px 4px;">Quiet Luxury</p>
          <p style="padding:0 14px 14px;">
            <span class="badge-emergente">Emergente</span>
            &nbsp;
            <a href="#tendencias" class="link-ver">Ver looks →</a>
          </p>
        </div>
        <div>
          <div class="card-img"><img src="img/tendencias/tono-tierra.jpeg" alt="Tono Tierra"></div>
          <p class="product-name" style="padding:0 14px 4px;">Tono Tierra</p>
          <p style="padding:0 14px 14px;">
            <span class="badge-fija">Fija</span>
            &nbsp;
            <a href="#tendencias" class="link-ver">Ver looks →</a>
          </p>
        </div>
        <div>
          <div class="card-img"><img src="img/tendencias/coastal.jpeg" alt="Coastal"></div>
          <p class="product-name" style="padding:0 14px 4px;">Coastal</p>
          <p style="padding:0 14px 14px;">
            <span class="badge-emergente">Emergente</span>
            &nbsp;
            <a href="#tendencias" class="link-ver">Ver looks →</a>
          </p>
        </div>
        <div>
          <div class="card-img"><img src="img/tendencias/dark-academia.jpeg" alt="Dark Academia"></div>
          <p class="product-name" style="padding:0 14px 4px;">Dark Academia</p>
          <p style="padding:0 14px 14px;">
            <span class="badge-fija">Fija</span>
            &nbsp;
            <a href="#tendencias" class="link-ver">Ver looks →</a>
          </p>
        </div>
      </div>
    </section>
  </main>


  <!-- RELATORÍA -->
  <section id="relatoria" class="py-5 px-4" style="background-color:var(--hueso);">
    <div class="container">
      <span class="section-label">Quiénes somos</span>
      <h2 class="section-heading" style="margin-bottom:20px;">
        Sobre <em style="color:var(--sage); font-style:italic;">Thread</em>
      </h2>

      <p style="color:var(--texto-med); line-height:1.75; margin-bottom:14px;">Thread nació con una misión clara: democratizar el acceso al estilo personal y hacer que la moda sea comprensible para todas las personas, sin importar su edad, talla o punto de partida.</p>
      <p style="color:var(--texto-med); line-height:1.75; margin-bottom:14px;">Fundada en 2026, la plataforma surgió de la observación de un problema real: muchas personas quieren vestir bien pero no saben por dónde empezar. Thread resuelve eso con tecnología, color y criterio editorial.</p>
      <p style="color:var(--texto-med); line-height:1.75; margin-bottom:14px;">Nuestro enfoque parte del color como lenguaje. Creemos que entender los colores que te favorecen es el primer paso para construir un guardarropa coherente y atemporal.</p>
      <p style="color:var(--texto-med); line-height:1.75;">Thread no es una tienda convencional. Es una plataforma de descubrimiento donde el usuario explora tendencias, arma outfits y recibe orientación personalizada adaptada a su estilo de vida.</p>

      <div style="margin-top:24px;">
        <button onclick="toggleRelato()" id="btn-cta" class="btn-primary" style="border:none; cursor:pointer;">Conoce más ▼</button>
      </div>

      <div id="mas-info" style="display:none; margin-top:24px;">
        <p style="color:var(--texto-med); line-height:1.75; margin-bottom:14px;">Trabajamos con marcas responsables que comparten nuestra visión: la moda como expresión, no como presión. Cada prenda en Thread ha sido curada con criterio de atemporalidad.</p>
        <p style="color:var(--texto-med); line-height:1.75; margin-bottom:14px;">Nuestra paleta de 20 colores base es el corazón del sistema. A partir de ella construimos combinaciones, sugerimos prendas complementarias y creamos looks para cada ocasión.</p>
        <p style="color:var(--texto-med); line-height:1.75; margin-bottom:14px;">Thread cree en la inclusividad radical. Por eso nuestra plataforma contempla tallas XS hasta XL, distintos tipos de cuerpo y estilos que van del minimalismo al maximalismo.</p>
        <p style="color:var(--texto-med); line-height:1.75; margin-bottom:14px;">La sección "Crea tu Outfit" es nuestra herramienta estrella. Permite arrastrar prendas del guardarropa personal hacia un canvas virtual y obtener validación instantánea de la combinación.</p>
        <p style="color:var(--texto-med); line-height:1.75; margin-bottom:14px;">Cada semana actualizamos las tendencias editoriales con análisis de pasarelas internacionales, street style y cultura pop, traducidos a prendas accesibles para el mercado local.</p>
        <p style="color:var(--texto-med); line-height:1.75; margin-bottom:14px;">Thread también es un espacio de aprendizaje. A través de nuestra sección FAQ respondemos las dudas más comunes sobre moda, cuidado de prendas y armado de looks para cada ocasión.</p>
        <p style="color:var(--texto-med); line-height:1.75; margin-bottom:14px;">Nuestro equipo está formado por diseñadores, estilistas, desarrolladores y especialistas en experiencia de usuario que trabajan juntos para que cada visita a Thread inspire una decisión de moda mejor.</p>
        <p style="color:var(--texto-med); line-height:1.75; margin-bottom:14px;">La plataforma está disponible en web y próximamente en aplicación móvil, con sincronización total del guardarropa y notificaciones de tendencias personalizadas.</p>
        <p style="color:var(--texto-med); line-height:1.75;">En Thread creemos que vestirse bien no es un lujo. Es un derecho que merecen todas las personas, y nuestra tecnología existe para hacerlo posible cada día.</p>
      </div>
    </div>
  </section>

  <script>
    function toggleRelato() {
      var bloque = document.getElementById('mas-info');
      var btn = document.getElementById('btn-cta');
      if (bloque.style.display === 'none') {
        bloque.style.display = 'block';
        btn.textContent = 'Ver menos ▲';
      } else {
        bloque.style.display = 'none';
        btn.textContent = 'Conoce más ▼';
      }
    }
  </script>

  <hr class="divider">


  <!-- COLORES -->
  <section id="colores">
    <div class="breadcrumb" style="padding:0 0 10px;">02 / Explorar por Color</div>
    <h2 class="page-title">Explorar <em>por Color</em></h2>

    <div class="colores-layout" style="margin-top:28px;">

      <!-- Sidebar: paleta -->
      <div class="sidebar-paleta">
        <span class="paleta-label">Paleta · 20 colores</span>
        <p style="font-size:12px; margin-bottom:10px; color:var(--texto-light); font-family:var(--font-sans);">Selecciona un color</p>

        <div class="paleta-grid">
          <?php
          $paleta = [
            ['1a1a1a','fff','Negro'],
            ['1c2b4a','fff','Marino'],
            ['4a4a2a','fff','Oliva'],
            ['6b4c2a','fff','Cafe'],
            ['3498db','fff','Azul'],
            ['27ae60','fff','Verde'],
            ['1a7a4a','fff','Esmeralda'],
            ['1abc9c','fff','Turquesa'],
            ['c0392b','fff','Rojo'],
            ['e67e22','fff','Naranja'],
            ['e0a020','fff','Ambar'],
            ['f1c40f','fff','Amarillo'],
            ['9b59b6','fff','Violeta'],
            ['c39bd3','fff','Lila'],
            ['f5f3ef','ccc','Blanco'],
            ['bdc3c7','fff','Plata'],
            ['95a5a6','fff','Gris'],
            ['f8f4ec','ccc','Marfil'],
            ['f4a460','fff','Melocoton'],
            ['fdf5e6','ccc','Crema'],
          ];
          foreach ($paleta as $c):
            $isAzul = $c[0] === '3498db';
            $border = $isAzul ? "border:2px solid #3498db;" : "border:0.5px solid var(--borde);";
          ?>
          <div class="paleta-item">
            <a href="#colores">
              <img src="https://placehold.co/32x32/<?= $c[0] ?>/<?= $c[1] ?>?text=+"
                   alt="<?= $c[2] ?>" width="32" height="32"
                   style="<?= $border ?> border-radius:4px;">
            </a>
            <small style="font-family:var(--font-sans); font-size:9px; letter-spacing:1px; color:var(--texto-light);"><?= $c[2] ?></small>
          </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Contenido central -->
      <div class="colores-content">
        <div class="color-header">
          Azul &nbsp;·&nbsp; #3498DB &nbsp;·&nbsp; 34 prendas &nbsp;·&nbsp; 18 outfits
          &nbsp;&nbsp;
          <a href="#colores" style="background:var(--crema); color:var(--oliva); padding:5px 14px; text-decoration:none; font-size:10px; border-radius:999px; letter-spacing:1px; font-family:var(--font-sans);">Ver outfits →</a>
        </div>

        <p style="font-size:11px; color:var(--texto-light); margin:14px 0 8px; font-family:var(--font-sans); letter-spacing:1px; text-transform:uppercase;">Combina con</p>
        <div class="combina-con">
          <img src="https://placehold.co/40x40/e0a020/fff?text=+" alt="Ambar"    width="40" height="40" style="border-radius:6px; border:0.5px solid var(--borde);">
          <img src="https://placehold.co/40x40/2c3e50/fff?text=+" alt="Marino"   width="40" height="40" style="border-radius:6px; border:0.5px solid var(--borde);">
          <img src="https://placehold.co/40x40/bdc3c7/fff?text=+" alt="Plata"    width="40" height="40" style="border-radius:6px; border:0.5px solid var(--borde);">
          <img src="https://placehold.co/40x40/2c3e50/fff?text=+" alt="Oscuro"   width="40" height="40" style="border-radius:6px; border:0.5px solid var(--borde);">
          <img src="https://placehold.co/40x40/f5f3ef/ccc?text=+" alt="Blanco"   width="40" height="40" style="border-radius:6px; border:0.5px solid var(--borde);">
        </div>

        <p style="margin-top:18px;" class="filter-tabs colores-filter-row">
          <a href="#colores" class="active">Todo</a>
          <a href="#colores">Camisas</a>
          <a href="#colores">Pantalones</a>
          <a href="#colores">Vestidos</a>
          <a href="#colores">Accesorios</a>
        </p>

        <div class="card-grid-4" style="margin-top:18px;">
          <?php
          $colPrendas = [
            ['Camisa Oxford', 'img/prendas/camisa-lino.jpg'],
            ['Blazer',        'img/prendas/blazer-crudo.jpeg'],
            ['Vestido Midi',  'img/prendas/vestido-midi.jpg'],
            ['Camiseta',      'img/prendas/top-tejido.jpeg'],
            ['Pantalon',      'img/prendas/pantalon-wide.jpg'],
            ['Jeans',         'img/guardarropa/jeans-rectos.jpg'],
            ['Falda',         'img/prendas/falda-plisada.jpg'],
            ['Chaqueta',      'img/prendas/trench.jpg'],
          ];
          foreach ($colPrendas as $p):
          ?>
          <div>
            <img src="<?= $p[1] ?>" alt="<?= $p[0] ?>" width="100%" height="180"
              style="display:block; object-fit:cover; background:var(--hueso); border-radius:6px;">
            <p class="product-name"><?= $p[0] ?></p>
            <p><a href="#prendas" class="link-ver">Ver →</a></p>
          </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Sidebar derecho: outfits -->
      <div class="sidebar-looks">
        <p style="font-family:var(--font-sans); font-size:10px; letter-spacing:2px; text-transform:uppercase; color:var(--oliva); margin-bottom:14px;"><strong>Outfits en Azul</strong></p>
        <div class="looks-stack">
          <div>
            <img src="img/colores/look-azul-01.jpg" alt="Look 01">
            <p style="font-size:11px; font-style:italic; color:var(--texto-light); margin-top:6px; font-family:var(--font-sans);">Look 01</p>
          </div>
          <div>
            <img src="img/colores/look-azul2.jpg" alt="Look 02">
            <p style="font-size:11px; font-style:italic; color:var(--texto-light); margin-top:6px; font-family:var(--font-sans);">Look 02</p>
          </div>
          <div>
            <img src="img/colores/look-azul-03.jpg" alt="Look 03">
            <p style="font-size:11px; font-style:italic; color:var(--texto-light); margin-top:6px; font-family:var(--font-sans);">Look 03</p>
          </div>
        </div>
      </div>

    </div><!-- /colores-layout -->
  </section>

  <hr class="divider">


  <!-- TENDENCIAS -->
  <section id="tendencias">
    <div class="breadcrumb" style="padding:0 0 10px;">03 / Tendencias</div>

    <div class="tendencias-header">
      <div>
        <span class="section-label">Editorial</span>
        <h2 class="section-heading">Tendencias</h2>
      </div>
      <div class="filter-tabs">
        <a href="#tendencias" class="active">Todo</a>
        <a href="#tendencias">Emergente</a>
        <a href="#tendencias">Fija</a>
        <a href="#tendencias">Por edad</a>
        <a href="#tendencias">Temporada</a>
      </div>
    </div>

    <!-- Tendencia destacada -->
    <div class="tendencia-destacada">
      <div class="td-img">
        <img src="img/tendencias/quiet-luxury.jpg" alt="Quiet Luxury">
      </div>
      <div class="td-info">
        <span class="badge-emergente">Emergente</span>
        <h3 style="font-size:32px; font-weight:normal; margin-top:16px; letter-spacing:-0.5px;">Quiet Luxury</h3>
        <span class="heading-accent"></span>
        <p style="font-size:14px; line-height:1.75; color:var(--texto-med); font-style:italic; margin-top:16px;">
          El minimalismo sofisticado toma el protagonismo. Prendas de calidad, colores neutros y siluetas atemporales que trascienden temporadas.
        </p>
        <div style="margin-top:32px; display:flex; gap:12px;">
          <a href="#tendencias" class="btn-dark">Explorar tendencia →</a>
          <a href="#tendencias" class="btn-outline">Guardar</a>
        </div>
      </div>
    </div>

    <!-- Grid tendencias -->
    <div style="display:flex; justify-content:space-between; align-items:baseline; margin-top:48px; margin-bottom:14px;">
      <p style="font-size:16px; font-weight:bold; font-family:var(--font-serif);">Todas las tendencias</p>
      <p style="font-size:11px; color:var(--texto-light); font-family:var(--font-sans); letter-spacing:1px;">24 disponibles</p>
    </div>
    <hr style="border:0; border-top:0.5px solid var(--borde); margin-bottom:22px;">

    <div class="card-grid-5">
      <?php
      $tendGrid = [
        ['Coastal',       'img/tendencias/coastal.jpeg',      'badge-emergente', 'Emergente'],
        ['Tono Tierra',   'img/tendencias/tono-tierra.jpeg',  'badge-fija',      'Fija'],
        ['Ballet Core',   'img/tendencias/ballet-core.jpeg',  'badge-emergente', 'Emergente'],
        ['Business',      'img/tendencias/business.jpg',      'badge-fija',      'Fija'],
        ['Dark Academia', 'img/tendencias/dark-academia.jpeg','badge-fija',      'Fija'],
      ];
      foreach ($tendGrid as $t):
      ?>
      <div>
        <img src="<?= $t[1] ?>" alt="<?= $t[0] ?>" width="100%" height="180"
          style="display:block; object-fit:cover; background:var(--hueso); border-radius:var(--radius-sm);">
        <p class="product-name"><?= $t[0] ?></p>
        <p><span class="<?= $t[2] ?>"><?= $t[3] ?></span> &nbsp; <a href="#tendencias" class="link-ver">→</a></p>
      </div>
      <?php endforeach; ?>
    </div>
  </section>

  <hr class="divider">


  <!-- PRENDAS -->
  <section id="prendas">
    <div class="breadcrumb" style="padding:0 0 10px;">04 / Prendas</div>

    <div class="prendas-filter-row">
      <div>
        <span class="section-label">Catálogo</span>
        <h2 class="section-heading">Prendas</h2>
      </div>
      <p style="font-size:11px; color:var(--texto-light); font-family:var(--font-sans); letter-spacing:1px;">128 resultados</p>
    </div>

    <div class="prendas-layout">

      <!-- Sidebar filtros -->
      <div class="sidebar-filtros sidebar">
        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:16px;">
          <span style="font-family:var(--font-sans); font-size:10px; letter-spacing:2px; text-transform:uppercase; color:var(--oliva); font-weight:bold;">Filtros</span>
          <a href="#prendas" style="font-size:10px; color:var(--terracota); text-decoration:none; font-family:var(--font-sans); letter-spacing:1px;">Limpiar todo</a>
        </div>
        <?php
        $grupos = [
          'CATEGORÍA' => ['Camisas / Blusas','Pantalones','Vestidos','Faldas','Abrigos','Accesorios'],
          'COLOR'     => ['Neutros','Tonos tierra','Azules','Verdes','Pasteles'],
          'OCASIÓN'   => ['Casual','Formal','Trabajo','Fiesta','Deporte'],
          'TALLA'     => ['XS','S','M','L','XL'],
          'PRECIO'    => ['$0–$500','$500–$1000','$1000+'],
        ];
        foreach ($grupos as $titulo => $items):
        ?>
        <p style="font-family:var(--font-sans); font-size:9px; font-weight:bold; margin:14px 0 8px; text-transform:uppercase; letter-spacing:2px; color:var(--texto-light);"><?= $titulo ?></p>
        <?php foreach ($items as $item): ?>
        <label style="font-size:13px; display:flex; align-items:center; gap:8px; cursor:pointer; color:var(--texto-med); margin-bottom:4px;">
          <input type="checkbox" style="width:auto; margin:0; padding:0; accent-color:var(--terracota);"> <?= $item ?>
        </label>
        <?php endforeach; endforeach; ?>
      </div>

      <!-- Grid prendas -->
      <div class="prendas-content">
        <p style="margin-bottom:18px;" class="filter-tabs">
          Ordenar: &nbsp;
          <a href="#prendas" class="active">Relevancia</a>
          <a href="#prendas">Nuevo</a>
          <a href="#prendas">Precio ↑</a>
          <a href="#prendas">Precio ↓</a>
        </p>

        <?php
        $prendas = [
          ['Blazer Crudo',  'img/prendas/blazer-crudo.jpeg'],
          ['Camisa Lino',   'img/prendas/camisa-lino.jpg'],
          ['Vestido Midi',  'img/prendas/vestido-midi.jpg'],
          ['Pantalon Wide', 'img/prendas/pantalon-wide.jpg'],
          ['Blusa Seda',    'img/prendas/blusa-seda.jpg'],
          ['Falda Plisada', 'img/prendas/falda-plisada.jpg'],
          ['Jersey Camel',  'img/prendas/jersey-camel.jpeg'],
          ['Trench',        'img/prendas/trench.jpg'],
          ['Top Tejido',    'img/prendas/top-tejido.jpeg'],
          ['Shorts Lino',   'img/prendas/shorts-lino.webp'],
          ['Cardigan',      'img/prendas/cardigan.avif'],
          ['Loafers',       'img/prendas/loafers.jpeg'],
        ];
        ?>
        <div class="card-grid-4">
          <?php foreach ($prendas as $p): ?>
          <div>
            <img src="<?= $p[1] ?>" alt="<?= $p[0] ?>" width="100%" height="200"
              style="display:block; object-fit:cover; background:var(--hueso); border-radius:var(--radius-sm);">
            <p class="product-name"><?= $p[0] ?></p>
            <p class="product-price" style="font-size:13px;">$ — — —</p>
            <a href="#prendas" class="btn-prenda">Ver prenda</a>
          </div>
          <?php endforeach; ?>
        </div>
      </div>

    </div><!-- /prendas-layout -->
  </section>

  <hr class="divider">


  <!-- OUTFIT BUILDER -->
  <section id="outfits">
    <div class="breadcrumb" style="padding:0 0 10px;">05 / Crea tu Outfit</div>
    <span class="section-label">Herramienta</span>
    <h2 class="section-heading" style="margin-bottom:28px;">Crea tu Outfit</h2>

    <div class="outfit-layout">

      <!-- Panel prendas -->
      <div class="outfit-panel">
        <p style="font-family:var(--font-sans); font-size:9px; letter-spacing:2px; text-transform:uppercase; color:var(--oliva); margin-bottom:12px; font-weight:bold;">
          MIS PRENDAS &nbsp; <a href="#guardarropa" style="color:var(--terracota); text-decoration:none;">Arrastra →</a>
        </p>

        <?php
        $slots = [
          'SUPERIOR' => [
            ['Camisa', 'img/guardarropa/camisa-blanca.jpg'],
            ['Blazer',  'img/guardarropa/blazer-camel.jpg'],
            ['Blusa',   'img/guardarropa/blusa-seda.jpg'],
            ['Top',     'img/prendas/top-tejido.jpeg'],
          ],
          'INFERIOR' => [
            ['Pantalon','img/guardarropa/pantalon-negro.jpg'],
            ['Falda',   'img/guardarropa/falda-plisada.jpg'],
            ['Jeans',   'img/guardarropa/jeans-rectos.jpg'],
            ['Shorts',  'img/prendas/shorts-lino.webp'],
          ],
          'CALZADO' => [
            ['Loafers',  'img/guardarropa/loafers-cuero.jpg'],
            ['Sneakers', 'img/guardarropa/sneakers-blancos.jpeg'],
          ],
        ];
        foreach ($slots as $cat => $items):
        ?>
        <p style="font-family:var(--font-sans); font-size:9px; letter-spacing:2px; text-transform:uppercase; color:var(--texto-light); margin-top:16px; margin-bottom:8px;"><?= $cat ?></p>
        <div class="panel-prendas-grid">
          <?php foreach ($items as $item): ?>
          <div class="panel-prenda-item" style="cursor:grab;">
            <img src="<?= $item[1] ?>" alt="<?= $item[0] ?>">
            <p style="font-size:10px; margin-top:4px; font-family:var(--font-sans); color:var(--texto-med);"><?= $item[0] ?></p>
          </div>
          <?php endforeach; ?>
        </div>
        <?php endforeach; ?>
      </div>

      <!-- Canvas -->
      <div class="outfit-canvas">
        <p style="font-family:var(--font-sans); font-size:9px; letter-spacing:2px; text-transform:uppercase; color:var(--oliva); margin-bottom:14px; font-weight:bold;">CANVAS</p>
        <div style="background:var(--hueso-med); border:0.5px solid var(--borde); border-radius:var(--radius-md); padding:28px; text-align:center; min-height:500px;">
          <img src="img/logo/logo-jaguar.png" alt="figura" width="36" height="36"
            style="border-radius:50%; margin:0 auto 8px; border:0.5px solid var(--borde);">
          <div style="background:rgba(255,255,255,0.5); border:1px dashed var(--borde-med); width:160px; height:180px; margin:8px auto; display:flex; align-items:center; justify-content:center; border-radius:var(--radius-sm);">
            <p style="font-size:11px; color:var(--texto-light); font-family:var(--font-sans);">Superior</p>
          </div>
          <div style="background:rgba(255,255,255,0.5); border:1px dashed var(--borde-med); width:160px; height:160px; margin:8px auto; display:flex; align-items:center; justify-content:center; border-radius:var(--radius-sm);">
            <p style="font-size:11px; color:var(--texto-light); font-family:var(--font-sans);">Inferior</p>
          </div>
          <div style="background:rgba(255,255,255,0.5); border:1px dashed var(--borde-med); width:100px; height:60px; margin:8px auto; display:flex; align-items:center; justify-content:center; border-radius:var(--radius-sm);">
            <p style="font-size:10px; color:var(--texto-light); font-family:var(--font-sans);">Calzado</p>
          </div>
        </div>
        <div class="canvas-actions">
          <div class="canvas-actions-left">
            <a href="#outfits" class="btn-dark">Guardar outfit</a>
            <a href="#outfits" class="btn-outline">Compartir</a>
          </div>
          <a href="#outfits" class="btn-sage">✦ IA sugiere</a>
        </div>
      </div>

      <!-- Panel IA -->
      <div class="outfit-ia">
        <div class="ia-panel">
          <p style="font-size:13px; font-family:var(--font-sans); letter-spacing:1.5px; text-transform:uppercase; color:var(--sage); margin-bottom:4px;">✦ Thread IA</p>
          <p style="font-size:12px; font-style:italic; color:var(--texto-light); margin-bottom:20px; font-family:var(--font-sans);">Sugerencias para tu outfit</p>

          <?php
          $sugerencias = [
            ['Casual Chic',      'Camisa lino + wide leg + loafers blancos'],
            ['Weekend Look',     'Cardigan + jeans + sneakers clean'],
            ['Oficina Creativa', 'Blazer + blusa seda + pantalon sastre'],
            ['Noche Mínima',     'Vestido midi + loafers + bolso estructurado'],
          ];
          foreach ($sugerencias as $s):
          ?>
          <div class="ia-suggestion">
            <h4><?= $s[0] ?></h4>
            <p><?= $s[1] ?></p>
            <a href="#outfits" class="btn-sm-dark">Aplicar →</a>
          </div>
          <?php endforeach; ?>

          <p style="font-family:var(--font-sans); font-size:9px; letter-spacing:2px; text-transform:uppercase; color:var(--oliva); margin-top:18px; margin-bottom:8px; font-weight:bold;">Paleta sugerida</p>
          <div style="display:flex; gap:5px; flex-wrap:wrap;">
            <img src="https://placehold.co/30x30/f5f3ef/ccc?text=+" alt="" width="30" height="30" style="border-radius:50%; border:0.5px solid var(--borde);">
            <img src="https://placehold.co/30x30/4a4a2a/fff?text=+" alt="" width="30" height="30" style="border-radius:50%;">
            <img src="https://placehold.co/30x30/7a7550/fff?text=+" alt="" width="30" height="30" style="border-radius:50%;">
            <img src="https://placehold.co/30x30/c0603a/fff?text=+" alt="" width="30" height="30" style="border-radius:50%;">
            <img src="https://placehold.co/30x30/2c3e50/fff?text=+" alt="" width="30" height="30" style="border-radius:50%;">
          </div>

          <p style="font-family:var(--font-sans); font-size:9px; letter-spacing:2px; text-transform:uppercase; color:var(--oliva); margin-top:16px; margin-bottom:8px; font-weight:bold;">Ocasión:</p>
          <div style="display:flex; gap:6px; flex-wrap:wrap;">
            <a href="#outfits" class="btn-sm-dark">Casual</a>
            <a href="#outfits" class="btn-sm-dark">Trabajo</a>
            <a href="#outfits" class="btn-sm-dark">Noche</a>
          </div>
        </div>
      </div>

    </div><!-- /outfit-layout -->
  </section>

  <hr class="divider">


  <!-- GUARDARROPA -->
  <section id="guardarropa">
    <div class="breadcrumb" style="padding:0 0 10px;">06 / Mi Guardarropa</div>

    <div class="guardarropa-header">
      <div>
        <span class="section-label">Personal</span>
        <h2 class="section-heading">Mi Guardarropa</h2>
      </div>
      <div class="stats-row">
        <?php foreach ([['34','Prendas'],['12','Outfits'],['8','Colores'],['5','Ocasiones']] as $s): ?>
        <div class="stat-cell">
          <p class="stat-num"><?= $s[0] ?></p>
          <p class="stat-label"><?= $s[1] ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="guardarropa-tabs-row">
      <div class="filter-tabs">
        <a href="#guardarropa" class="active">Mis Prendas</a>
        <a href="#guardarropa">Outfits</a>
        <a href="#guardarropa">Favoritos</a>
        <a href="#guardarropa">Historial</a>
      </div>
      <a href="#prendas" class="btn-dark">+ Agregar prenda</a>
    </div>

    <?php
    $guardarropa = [
      ['Blazer Camel',     'img/guardarropa/blazer-camel.jpg'],
      ['Camisa Blanca',    'img/guardarropa/camisa-blanca.jpg'],
      ['Pantalon Negro',   'img/guardarropa/pantalon-negro.jpg'],
      ['Vestido Midi',     'img/guardarropa/vestido-midi.jpeg'],
      ['Cardigan Beige',   'img/guardarropa/cardigan-beige.jpg'],
      ['Blusa Seda',       'img/guardarropa/blusa-seda.jpg'],
      ['Jeans Rectos',     'img/guardarropa/jeans-rectos.jpg'],
      ['Loafers Cuero',    'img/guardarropa/loafers-cuero.jpg'],
      ['Trench Oliva',     'img/guardarropa/trench-oliva.jpeg'],
      ['Camiseta',         'img/guardarropa/camiseta.jpeg'],
      ['Falda Plisada',    'img/guardarropa/falda-plisada.jpg'],
      ['Sneakers Blancos', 'img/guardarropa/sneakers-blancos.jpeg'],
    ];
    ?>
    <div class="card-grid-6">
      <?php foreach ($guardarropa as $p): ?>
      <div>
        <img src="<?= $p[1] ?>" alt="<?= $p[0] ?>" width="100%" height="180"
          style="display:block; object-fit:cover; background:var(--hueso); border-radius:var(--radius-sm);">
        <p class="product-name"><?= $p[0] ?> ♥</p>
        <a href="#outfits" class="link-ver" style="font-size:10px;">Crear outfit →</a>
      </div>
      <?php endforeach; ?>
    </div>
  </section>

  <hr class="divider">


  <!-- TIENDA -->
  <section id="tienda">
    <div class="breadcrumb" style="padding:0 0 10px;">07 / Tienda / Shop</div>

    <div class="tienda-banner">
      <span class="section-label" style="color:rgba(245,243,239,0.5);">Nueva temporada</span>
      <h2>Nueva Colección</h2>
      <a href="#tienda" style="background:var(--crema); color:var(--oliva); padding:10px 24px; text-decoration:none; font-size:10px; letter-spacing:2px; text-transform:uppercase; font-family:var(--font-sans); border-radius:999px; display:inline-block; margin-top:20px; transition:opacity .22s ease;">Ver colección →</a>
    </div>

    <div class="tienda-filter-row">
      <div class="filter-tabs">
        <a href="#tienda" class="active">Todo</a>
        <a href="#tienda">Nueva llegada</a>
        <a href="#tienda">En oferta</a>
        <a href="#tienda">Sostenible</a>
        <a href="#tienda">&lt; $500</a>
        <a href="#tienda">Por marca</a>
      </div>
      <p style="font-size:11px; color:var(--texto-light); font-family:var(--font-sans); letter-spacing:1px;">64 productos &nbsp;·&nbsp; Ordenar: Relevancia ↓</p>
    </div>

    <?php
    $tienda = [
      ['Camisa Oxford',    'img/tienda/camisa-oxford.jpg',    'Zara',      '$890',   false],
      ['Blazer Slim',      'img/tienda/blazer-slim.jpeg',     'Mango',     '$1,890', true],
      ['Wide Leg',         'img/tienda/wide-leg.jpeg',         'H&M',       '$1,290', false],
      ['Vestido Midi',     'img/tienda/vestido-midi.jpg',     '& Other',   '$1,590', true],
      ['Cardigan Merino',  'img/tienda/cardigan-merino.jpeg', 'COS',       '$2,100', false],
      ['Falda Plisada',    'img/tienda/falda-plisada.jpeg',   'Pull&Bear', '$980',   false],
      ['Trench Clasico',   'img/tienda/trench-clasico.jpeg',  'Massimo',   '$3,200', true],
      ['Loafers',          'img/tienda/loafers.jpg',           'Zara',      '$2,800', false],
    ];
    ?>
    <div class="card-grid-8">
      <?php foreach ($tienda as $p): ?>
      <div>
        <?php if ($p[4]): ?><span class="discount-badge" style="margin-bottom:6px; display:inline-block;">-20%</span><?php endif; ?>
        <img src="<?= $p[1] ?>" alt="<?= $p[0] ?>" width="100%" height="240"
          style="display:block; object-fit:cover; background:var(--hueso); border-radius:var(--radius-sm);">
        <p class="product-name"><?= $p[0] ?></p>
        <p class="product-brand"><?= $p[2] ?></p>
        <p class="product-price"><?= $p[3] ?></p>
        <a href="#tienda" class="btn-shop">Ver →</a>
      </div>
      <?php endforeach; ?>
    </div>
  </section>

  <hr class="divider">


  <!-- NOSOTROS -->
  <section id="nosotros">
    <div class="breadcrumb" style="padding:0 0 10px;">08 / Sobre Thread</div>

    <!-- Hero Nosotros -->
    <div class="nosotros-hero">
      <div class="nos-logo">
        <img src="img/logo/logo-jaguar.png" alt="Thread logo" width="280" height="300"
          style="display:block; object-fit:contain; background:var(--hueso); border-radius:var(--radius-md);">
      </div>
      <div class="nos-text">
        <span class="section-label">Nuestra historia</span>
        <h2 style="font-size:52px; font-weight:normal; line-height:1.1; letter-spacing:-1px;">
          Nacimos<br>
          <em style="font-style:italic; color:var(--sage);">para vestirte</em><br>
          <span style="border-bottom:1.5px solid var(--oliva);">a ti.</span>
        </h2>
        <p style="font-size:14px; color:var(--texto-med); font-style:italic; margin-top:20px; line-height:1.7;">
          Thread es la plataforma de moda que democratiza el estilo: flexible, inclusiva y atemporal para todas las edades.
        </p>
      </div>
    </div>

    <!-- Valores -->
    <span class="section-label">Lo que nos define</span>
    <h3 style="font-size:22px; font-weight:normal; margin-bottom:18px;">Nuestros Valores</h3>
    <hr style="border:0; border-top:0.5px solid var(--borde); margin-bottom:22px;">

    <div class="valores-grid">
      <?php
      $valores = [
        ['Inclusividad',  'Moda para todas las edades, tallas y estilos. Sin excepción.',         false],
        ['Atemporalidad', 'Creemos en el estilo que dura, no en la tendencia que pasa.',           true],
        ['Orientación',   'Te ayudamos a construir tu estilo sin juzgar tu punto de partida.',     false],
        ['Impacto',       'Promovemos decisiones de moda reflexivas y responsables.',              true],
      ];
      foreach ($valores as $v):
      ?>
      <div class="value-card <?= $v[2] ? 'dark' : '' ?>">
        <p style="font-size:13px; font-weight:bold; margin-bottom:8px; font-family:var(--font-serif);"><?= $v[0] ?></p>
        <p style="font-size:13px; color:var(--texto-med); line-height:1.6;"><?= $v[1] ?></p>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Misión / Visión / Propósito -->
    <div class="mvp-row">
      <?php
      $mv = [
        ['MISIÓN',    'Democratizar el estilo haciendo la moda accesible, comprensible e inspiradora para cualquier persona en cualquier etapa de su vida.'],
        ['VISIÓN',    'Ser la plataforma de moda de referencia: el lugar donde el color, la prenda y el outfit se convierten en lenguaje personal.'],
        ['PROPÓSITO', 'Existir para que cada persona encuentre en la ropa una forma auténtica de expresarse y vivir cada momento con intención.'],
      ];
      foreach ($mv as $m):
      ?>
      <div class="mvp-cell">
        <p class="mission-label"><?= $m[0] ?></p>
        <p style="font-size:13px; color:var(--texto-med); font-style:italic; line-height:1.7;"><?= $m[1] ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </section>

  <hr class="divider">


  <!-- CONTACTO -->
  <section id="contacto" class="py-5 px-4" style="background-color:var(--crema);">
    <div class="container">
      <span class="section-label">Habla con nosotros</span>
      <h2 class="section-heading" style="margin-bottom:28px;">Contáctanos</h2>

      <div class="row g-4">

        <div class="col-lg-4">
          <div class="tarjeta-contacto destacada h-100">
            <h5 style="font-family:var(--font-serif); font-size:18px; font-weight:normal; margin-bottom:16px;">Encuéntranos</h5>
            <p style="margin-bottom:14px; font-size:13px; line-height:1.7; color:var(--texto-med);">
              <strong style="font-family:var(--font-sans); font-size:9px; letter-spacing:2px; text-transform:uppercase; color:var(--oliva);">Dirección</strong><br>
              Instituto Tecnológico de Pachuca, Carr. Mexico-Pachuca Km. 87.5, Pachuca de Soto, Hidalgo.
            </p>
            <p style="margin-bottom:14px; font-size:13px; color:var(--texto-med);">
              <strong style="font-family:var(--font-sans); font-size:9px; letter-spacing:2px; text-transform:uppercase; color:var(--oliva);">Teléfono</strong><br>
              <a href="tel:7711111111" style="color:var(--oliva); text-decoration:none;">771 111 11 11</a>
            </p>
            <p style="margin-bottom:18px; font-size:13px; color:var(--texto-med);">
              <strong style="font-family:var(--font-sans); font-size:9px; letter-spacing:2px; text-transform:uppercase; color:var(--oliva); display:block; margin-bottom:8px;">WhatsApp</strong>
              <a href="https://wa.me/527711111111" target="_blank"
                style="background:#25d366; color:#fff; padding:9px 20px; text-decoration:none; font-size:10px; letter-spacing:1.5px; text-transform:uppercase; font-family:var(--font-sans); border-radius:999px; display:inline-block;">
                Escríbenos en WhatsApp
              </a>
            </p>
            <p style="font-size:12px; color:var(--texto-light); font-family:var(--font-sans); letter-spacing:0.5px; line-height:1.8;">
              Lun – Vie: 9:00 – 18:00 hrs<br>
              Sáb: 10:00 – 14:00 hrs
            </p>
          </div>
        </div>

        <!-- Formulario MVC -->
        <?php require_once __DIR__ . '/views/contacto/formulario.php'; ?>

        <div class="col-lg-8">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3734.02!2d-98.7771688!3d20.0837769!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1a1d7c0f1cfa3%3A0x122870c3429e18a8!2sInstituto+Tecnol%C3%B3gico+de+Pachuca+(ITP)!5e0!3m2!1ses!2smx!4v1700000000000!5m2!1ses!2smx"
            width="100%" height="380" style="border:0; border-radius:var(--radius-md);" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>

      </div>
    </div>
  </section>

  <hr class="divider">


  <!-- FAQ -->
  <section id="faq" class="py-5 px-4" style="background-color:var(--hueso);">
    <div class="container">
      <span class="section-label">Dudas comunes</span>
      <h2 class="section-heading" style="margin-bottom:28px;">Preguntas Frecuentes</h2>

      <div class="accordion" id="accordionFAQ">
        <?php
        $faqs = [
          ['faq1', true,  '#c0603a', '¿Qué es Thread?',
           'Thread es una plataforma de moda que te ayuda a descubrir tu estilo personal explorando por color, prenda y tendencia. Cuenta con un armador de outfits asistido por inteligencia artificial.'],
          ['faq2', false, '#7a7550', '¿Cómo funciona el armador de outfits?',
           'Seleccionas prendas de tu guardarropa virtual y las colocas en el canvas. La IA analiza la combinación y te sugiere alternativas o mejoras.'],
          ['faq3', false, '#c0603a', '¿Puedo comprar ropa directamente en Thread?',
           'Sí. La sección Tienda tiene productos de Zara, Mango, H&M, COS y más. Puedes filtrar por categoría, precio, talla y ocasión.'],
          ['faq4', false, '#7a7550', '¿Thread es gratuito?',
           'Explorar colores, tendencias y prendas es gratis. Las funciones del guardarropa y el armador con IA están disponibles con registro.'],
          ['faq5', false, '#c0603a', '¿Cómo contacto al equipo de Thread?',
           'Por WhatsApp o teléfono al 771 111 11 11, o visítanos en el Instituto Tecnológico de Pachuca.'],
        ];
        foreach ($faqs as $f):
        ?>
        <div class="accordion-item" style="border-top:2px solid <?= $f[2] ?>;">
          <h2 class="accordion-header">
            <button class="accordion-button <?= $f[1] ? '' : 'collapsed' ?>" type="button"
              data-bs-toggle="collapse" data-bs-target="#<?= $f[0] ?>">
              <?= $f[3] ?>
            </button>
          </h2>
          <div id="<?= $f[0] ?>" class="accordion-collapse collapse <?= $f[1] ? 'show' : '' ?>" data-bs-parent="#accordionFAQ">
            <div class="accordion-body"><?= $f[4] ?></div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <hr class="divider">


  <!-- FOOTER -->
  <footer>
    <div class="footer-flex">
      <div>
        <strong style="color:var(--crema); font-family:var(--font-serif); letter-spacing:2px;">Thread</strong>
        &nbsp;
        <em style="color:rgba(160,153,122,0.8); font-size:11px;">Wear the Moment</em>
      </div>
      <nav>
        <a href="#colores">Colores</a>
        <a href="#tendencias">Tendencias</a>
        <a href="#prendas">Prendas</a>
        <a href="#outfits">Outfits</a>
        <a href="#tienda">Tienda</a>
        <a href="#nosotros">Nosotros</a>
      </nav>
      <small style="color:rgba(160,153,122,0.7);">© 2026 Thread</small>
    </div>
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
  </script>
</body>
</html>
