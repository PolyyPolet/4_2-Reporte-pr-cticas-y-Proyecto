<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thread — Wear the Moment</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="estilo.css">
  <style>
    /* ══════════════════════════════════════
       LAYOUT HELPERS — reemplazan tablas de estructura
       Todos los px/% son los del archivo original.
    ══════════════════════════════════════ */

    /* Utilidad base: cualquier fila flex */
    .fl { display: flex; }
    .fl-col { flex-direction: column; }
    .fl-top { align-items: flex-start; }
    .fl-mid { align-items: center; }
    .fl-bot { align-items: flex-end; }
    .fl-between { justify-content: space-between; }
    .fl-end { justify-content: flex-end; }

    /* ── HERO ───────────────────────────── */
    /* Original: <table width="100%"> <td width="40%"> <td> */
    .hero-row {
      display: flex;
      width: 100%;
      align-items: stretch;
    }
    .hero-row .hero-left {
      flex: 0 0 40%;       /* width="40%" original */
      width: 40%;
      background-color: #4a4a2a;
      color: #f5f3ef;
      padding: 80px 40px;  /* padding original */
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
    }
    .hero-row .hero-right {
      flex: 1 1 60%;
      background-color: #f0ede6;
    }
    .hero-row .hero-right img {
      width: 100%;
      height: 480px;       /* height="480" original */
      object-fit: contain;
      background: #f5f3ef;
      display: block;
    }

    /* ── COLOR STRIP ────────────────────── */
    /* Original: <table class="color-strip"> 9 celdas */
    .color-strip-row {
      display: flex;
      width: 100%;
      height: 46px;        /* altura de .color-strip td */
    }
    .color-strip-row > div {
      flex: 1 1 0;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 12px;
      color: #fff;
      text-decoration: none;
    }
    .color-strip-row > div a {
      color: #fff;
      text-decoration: none;
      font-size: 12px;
    }

    /* ── CARD GRID GENÉRICO ─────────────── */
    /* Reemplaza <table class="card-grid" cellspacing="16"> */
    .grid-4 {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 16px;           /* cellspacing="16" original */
      width: 100%;
    }
    .grid-5 {
      display: grid;
      grid-template-columns: repeat(5, 1fr);
      gap: 16px;
      width: 100%;
    }
    .grid-6 {
      display: grid;
      grid-template-columns: repeat(6, 1fr);
      gap: 12px;           /* cellspacing="12" original */
      width: 100%;
    }
    /* Las celdas replican el comportamiento de .card-grid td */
    .grid-4 > div,
    .grid-5 > div {
      vertical-align: top;
    }

    /* ── SECCIÓN COLORES ────────────────── */
    /* Original: <table> <td width="200"> <td> <td width="240"> */
    .colores-row {
      display: flex;
      width: 100%;
      align-items: flex-start;
      margin-top: 24px;
    }
    .colores-row .col-sidebar-left {
      flex: 0 0 200px;     /* width="200" original */
      width: 200px;
      padding-right: 24px; /* padding-right original */
    }
    .colores-row .col-main {
      flex: 1 1 0;
      min-width: 0;
    }
    .colores-row .col-sidebar-right {
      flex: 0 0 240px;     /* width="240" original */
      width: 240px;
      padding-left: 24px;  /* padding-left original */
    }

    /* Paleta: 5 columnas de 32 px, gap 4 px (cellspacing="4") */
    .paleta-grid {
      display: grid;
      grid-template-columns: repeat(5, 32px);
      gap: 4px;
    }
    .paleta-grid .paleta-item {
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .paleta-grid img {
      width: 32px;
      height: 32px;
      display: block;
    }

    /* Combina-con: fila de 40×40 */
    .combina-row {
      display: flex;
      gap: 4px;
      flex-wrap: wrap;
      margin-top: 6px;
    }
    .combina-row img {
      width: 40px;
      height: 40px;
      display: block;
      flex-shrink: 0;
    }

    /* Grid central de colores: 4 col, gap 12 */
    .colores-prendas-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 12px;
      margin-top: 16px;
      width: 100%;
    }
    .colores-prendas-grid > div img {
      width: 100%;
      height: 180px;       /* height="180" original */
      object-fit: contain;
      background: #f5f3ef;
      display: block;
    }

    /* Looks sidebar derecho: columna */
    .looks-col {
      display: flex;
      flex-direction: column;
      gap: 8px;            /* cellspacing="8" original */
    }
    .looks-col img {
      width: 100%;
      height: 140px;       /* height="140" original */
      object-fit: contain;
      background: #f5f3ef;
      display: block;
    }

    /* ── TENDENCIAS ─────────────────────── */
    /* Header: título + filtros */
    .tendencias-header {
      display: flex;
      width: 100%;
      align-items: flex-end;
      justify-content: space-between;
      margin-bottom: 12px;
    }
    /* Tendencia destacada: td width="55%" + td resto */
    .tendencia-hero {
      display: flex;
      width: 100%;
      align-items: flex-start;
    }
    .tendencia-hero .th-img {
      flex: 0 0 55%;       /* width="55%" original */
      width: 55%;
    }
    .tendencia-hero .th-img img {
      width: 100%;
      height: 360px;       /* height="360" original */
      object-fit: contain;
      background: #f5f3ef;
      display: block;
    }
    .tendencia-hero .th-info {
      flex: 1 1 0;
      min-width: 0;
      padding-left: 32px;  /* padding-left original */
      padding-top: 4px;
    }
    /* Botones dentro de th-info */
    .th-btns {
      display: flex;
      gap: 12px;
      margin-top: 32px;
    }
    /* Todas las tendencias: header */
    .todas-header {
      display: flex;
      width: 100%;
      align-items: baseline;
      justify-content: space-between;
      margin-top: 32px;
      margin-bottom: 12px;
    }

    /* ── PRENDAS ────────────────────────── */
    /* Header */
    .prendas-header {
      display: flex;
      width: 100%;
      align-items: flex-end;
      justify-content: space-between;
      margin-bottom: 12px;
    }
    /* Sidebar filtros + grid */
    .prendas-row {
      display: flex;
      width: 100%;
      align-items: flex-start;
    }
    /* .sidebar ya definido en estilo.css: width:220px; padding-right:40px */
    .prendas-row .sidebar {
      flex: 0 0 220px;
      width: 220px;
    }
    .prendas-row .prendas-main {
      flex: 1 1 0;
      min-width: 0;
    }
    /* Grid prendas: 4 col, gap 12 */
    .prendas-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 12px;
      width: 100%;
    }
    .prendas-grid > div img {
      width: 100%;
      height: 200px;       /* height="200" original */
      object-fit: contain;
      background: #f5f3ef;
      display: block;
    }
    /* Botón "Ver prenda" igual al original */
    .btn-ver-prenda {
      display: block;
      background-color: #e8e5df;
      border: 1px solid #ccc;
      text-align: center;
      padding: 6px;
      font-size: 12px;
      text-decoration: none;
      color: #2c2c2c;
      margin-top: 4px;
    }

    /* ── OUTFIT BUILDER ─────────────────── */
    /* Original: <td width="260"> <td> <td width="280"> */
    .outfit-row {
      display: flex;
      width: 100%;
      align-items: flex-start;
    }
    .outfit-row .outfit-panel {
      flex: 0 0 260px;     /* width="260" original */
      width: 260px;
      padding-right: 20px; /* padding-right original */
    }
    .outfit-row .outfit-canvas {
      flex: 1 1 0;
      min-width: 0;
      padding: 0 20px;     /* padding original */
    }
    .outfit-row .outfit-ia {
      flex: 0 0 280px;     /* width="280" original */
      width: 280px;
      padding-left: 20px;  /* padding-left original */
    }
    /* Mini-grid 2×2 dentro del panel de prendas */
    .panel-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 6px;            /* cellspacing="6" original */
    }
    .panel-grid img {
      width: 100%;
      height: 60px;        /* height="60" original */
      object-fit: contain;
      background: #f5f3ef;
      display: block;
    }
    /* Fila acciones canvas */
    .canvas-actions {
      display: flex;
      width: 100%;
      align-items: center;
      justify-content: space-between;
      margin-top: 12px;
    }
    /* Paleta sugerida IA */
    .ia-paleta {
      display: flex;
      gap: 4px;
      flex-wrap: wrap;
      margin-top: 6px;
    }
    .ia-paleta img {
      width: 32px;
      height: 32px;
      display: block;
      flex-shrink: 0;
    }
    /* Ocasión IA */
    .ia-ocasion {
      display: flex;
      gap: 6px;
      flex-wrap: wrap;
      margin-top: 6px;
    }

    /* ── GUARDARROPA ────────────────────── */
    /* Header stats */
    .guardarropa-header {
      display: flex;
      width: 100%;
      align-items: flex-end;
      justify-content: space-between;
      margin-bottom: 24px;
    }
    .stats-row {
      display: flex;
    }
    .stat-cell {
      padding: 0 20px;     /* cellpadding="20" original */
      text-align: center;
    }
    /* Tabs + botón agregar */
    .guardarropa-tabs {
      display: flex;
      width: 100%;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 20px;
    }
    /* Grid guardarropa: 6 col, gap 12 */
    .guardarropa-grid {
      display: grid;
      grid-template-columns: repeat(6, 1fr);
      gap: 12px;
      width: 100%;
    }
    .guardarropa-grid > div img {
      width: 100%;
      height: 180px;       /* height="180" original */
      object-fit: contain;
      background: #f5f3ef;
      display: block;
    }

    /* ── TIENDA ─────────────────────────── */
    .tienda-filter-row {
      display: flex;
      width: 100%;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 16px;
    }
    /* Grid tienda: 4 col, gap 16 */
    .tienda-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 16px;           /* cellspacing="16" original */
      width: 100%;
    }
    .tienda-grid > div img {
      width: 100%;
      height: 220px;       /* height="220" original */
      object-fit: contain;
      background: #f5f3ef;
      display: block;
    }
    .btn-ver-tienda {
      display: block;
      background-color: #3d3a2e;
      color: #f5f3ef;
      text-align: center;
      padding: 8px;
      font-size: 12px;
      text-decoration: none;
      margin-top: 8px;
      border-radius: 2px;
    }

    /* ── NOSOTROS ───────────────────────── */
    /* Logo + texto: td width="35%" */
    .nosotros-hero {
      display: flex;
      width: 100%;
      align-items: center;
      margin-bottom: 40px;
    }
    .nosotros-hero .nos-logo {
      flex: 0 0 35%;       /* width="35%" original */
      width: 35%;
      display: flex;
      justify-content: center;
    }
    .nosotros-hero .nos-logo img {
      width: 300px;
      height: 320px;       /* width="300" height="320" original */
      object-fit: contain;
      background: #f5f3ef;
      display: block;
    }
    .nosotros-hero .nos-text {
      flex: 1 1 0;
      min-width: 0;
      padding-left: 40px;  /* padding-left original */
    }
    /* Valores: 4 col, gap 16 */
    .valores-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 16px;           /* cellspacing="16" original */
      width: 100%;
    }
    /* Misión-Visión-Propósito: 3 col */
    .mvp-row {
      display: flex;
      width: 100%;
      border-top: 1px solid #d4cfc7;
      padding-top: 24px;
      margin-top: 40px;
    }
    .mvp-row .mvp-col {
      flex: 1 1 0;
      padding-right: 24px; /* padding-right original */
    }
    .mvp-row .mvp-col:last-child { padding-right: 0; }
    .mvp-row .mvp-col + .mvp-col { padding-left: 24px; }

    /* ── FOOTER ─────────────────────────── */
    /* Original: <table> <td> <td align="center"> <td align="right"> */
    .footer-row {
      display: flex;
      width: 100%;
      align-items: center;
      justify-content: space-between;
    }
    .footer-row .footer-center {
      flex: 1;
      text-align: center;
    }

    /* ══════════════════════════════════════
       RESPONSIVE — ≤ 900 px
    ══════════════════════════════════════ */
    @media (max-width: 900px) {
      .hero-row,
      .colores-row,
      .tendencia-hero,
      .prendas-row,
      .outfit-row,
      .nosotros-hero,
      .mvp-row {
        flex-direction: column;
      }
      .hero-row .hero-left,
      .hero-row .hero-right,
      .colores-row .col-sidebar-left,
      .colores-row .col-main,
      .colores-row .col-sidebar-right,
      .prendas-row .sidebar,
      .prendas-row .prendas-main,
      .outfit-row .outfit-panel,
      .outfit-row .outfit-canvas,
      .outfit-row .outfit-ia,
      .nosotros-hero .nos-logo,
      .nosotros-hero .nos-text {
        flex: none;
        width: 100%;
        padding-left: 0;
        padding-right: 0;
      }
      .hero-row .hero-left { padding: 40px 24px; }
      .outfit-row .outfit-canvas { padding: 20px 0; }
      .colores-row .col-sidebar-left { padding-bottom: 20px; }
      .colores-row .col-sidebar-right { padding-top: 20px; }

      .grid-4, .colores-prendas-grid, .prendas-grid, .tienda-grid {
        grid-template-columns: repeat(2, 1fr);
      }
      .grid-5 { grid-template-columns: repeat(3, 1fr); }
      .grid-6, .guardarropa-grid { grid-template-columns: repeat(3, 1fr); }
      .valores-grid { grid-template-columns: repeat(2, 1fr); }

      .tendencias-header, .prendas-header, .guardarropa-header,
      .guardarropa-tabs, .tienda-filter-row {
        flex-direction: column;
        align-items: flex-start;
        gap: 12px;
      }
      .footer-row { flex-direction: column; gap: 16px; text-align: center; }
      .footer-row .footer-center { order: 2; }
    }

    @media (max-width: 520px) {
      .grid-4, .colores-prendas-grid, .prendas-grid,
      .tienda-grid, .guardarropa-grid, .valores-grid { grid-template-columns: 1fr; }
      .grid-5 { grid-template-columns: repeat(2, 1fr); }
      .grid-6 { grid-template-columns: repeat(2, 1fr); }
      .paleta-grid { grid-template-columns: repeat(4, 32px); }
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
    <div class="hero-row">
      <div class="hero-left">
        <h1 style="font-size:48px; font-weight:normal; line-height:1.1; color:#f5f3ef;">
          Descubre<br><em>tu estilo.</em>
        </h1>
        <p style="font-size:14px; margin-top:16px; color:#c8c4b0; font-style:italic;">
          Explora por color, prenda o tendencia. Thread te ayuda a construir outfits que hablen de quién eres.
        </p>
        <a href="#outfits" class="btn-primary">Crear outfit →</a>
      </div>
      <div class="hero-right">
        <img src="img/hero-banner.jpg" alt="Nueva temporada">
      </div>
    </div>

    <!-- Franja de colores -->
    <div class="color-strip-row">
      <div style="background-color:#c0392b;"></div>
      <div style="background-color:#e67e22;"></div>
      <div style="background-color:#f1c40f;"></div>
      <div style="background-color:#27ae60;"></div>
      <div style="background-color:#3498db;"><a href="#colores">Explorar por color →</a></div>
      <div style="background-color:#9b59b6;"></div>
      <div style="background-color:#1abc9c;"></div>
      <div style="background-color:#bdc3c7;"></div>
      <div style="background-color:#2c3e50;"></div>
    </div>

    <!-- Tendencias de la semana -->
    <section>
      <h2 class="section-heading">Tendencias</h2>
      <p class="section-subheading">de la semana</p>
      <hr style="border:0; border-top:1px solid #d4cfc7; margin:12px 0 24px;">

      <div class="grid-4">
        <div>
          <img src="img/tendencias/quiet-luxury.jpg" alt="Quiet Luxury" width="100%" height="180"
            style="display:block; object-fit:contain; background:#f5f3ef;">
          <p class="product-name">Quiet Luxury</p>
          <p><span class="badge-emergente">Emergente</span> &nbsp; <a href="#tendencias" class="link-ver">Ver looks →</a></p>
        </div>
        <div>
          <img src="img/tendencias/tono-tierra.jpeg" alt="Tono Tierra" width="100%" height="180"
            style="display:block; object-fit:contain; background:#f5f3ef;">
          <p class="product-name">Tono Tierra</p>
          <p><span class="badge-fija">Fija</span> &nbsp; <a href="#tendencias" class="link-ver">Ver looks →</a></p>
        </div>
        <div>
          <img src="img/tendencias/coastal.jpeg" alt="Coastal" width="100%" height="180"
            style="display:block; object-fit:contain; background:#f5f3ef;">
          <p class="product-name">Coastal</p>
          <p><span class="badge-emergente">Emergente</span> &nbsp; <a href="#tendencias" class="link-ver">Ver looks →</a></p>
        </div>
        <div>
          <img src="img/tendencias/dark-academia.jpeg" alt="Dark Academia" width="100%" height="180"
            style="display:block; object-fit:contain; background:#f5f3ef;">
          <p class="product-name">Dark Academia</p>
          <p><span class="badge-fija">Fija</span> &nbsp; <a href="#tendencias" class="link-ver">Ver looks →</a></p>
        </div>
      </div>
    </section>
  </main>


  <!-- RELATORÍA -->
  <section id="relatoria" class="py-5 px-4" style="background-color:#f0ede6;">
    <div class="container">
      <h2 class="mb-4" style="font-family:Georgia,serif; font-weight:normal; font-size:32px;">
        Sobre <em style="color:#7a7550;">Thread</em>
      </h2>
      <p>Thread nació con una misión clara: democratizar el acceso al estilo personal y hacer que la moda sea comprensible para todas las personas, sin importar su edad, talla o punto de partida.</p>
      <p>Fundada en 2026, la plataforma surgió de la observación de un problema real: muchas personas quieren vestir bien pero no saben por dónde empezar. Thread resuelve eso con tecnología, color y criterio editorial.</p>
      <p>Nuestro enfoque parte del color como lenguaje. Creemos que entender los colores que te favorecen es el primer paso para construir un guardarropa coherente y atemporal.</p>
      <p>Thread no es una tienda convencional. Es una plataforma de descubrimiento donde el usuario explora tendencias, arma outfits y recibe orientación personalizada adaptada a su estilo de vida.</p>
      <div class="mt-3">
        <button class="btn btn-sm" onclick="toggleRelato()"
          style="background-color:#3d3a2e; color:#f5f3ef; border-radius:2px;" id="btn-cta">Conoce más ▼</button>
      </div>
      <div id="mas-info" style="display:none; margin-top:20px;">
        <p>Trabajamos con marcas responsables que comparten nuestra visión: la moda como expresión, no como presión. Cada prenda en Thread ha sido curada con criterio de atemporalidad.</p>
        <p>Nuestra paleta de 20 colores base es el corazón del sistema. A partir de ella construimos combinaciones, sugerimos prendas complementarias y creamos looks para cada ocasión.</p>
        <p>Thread cree en la inclusividad radical. Por eso nuestra plataforma contempla tallas XS hasta XL, distintos tipos de cuerpo y estilos que van del minimalismo al maximalismo.</p>
        <p>La sección "Crea tu Outfit" es nuestra herramienta estrella. Permite arrastrar prendas del guardarropa personal hacia un canvas virtual y obtener validación instantánea de la combinación.</p>
        <p>Cada semana actualizamos las tendencias editoriales con análisis de pasarelas internacionales, street style y cultura pop, traducidos a prendas accesibles para el mercado local.</p>
        <p>Thread también es un espacio de aprendizaje. A través de nuestra sección FAQ respondemos las dudas más comunes sobre moda, cuidado de prendas y armado de looks para cada ocasión.</p>
        <p>Nuestro equipo está formado por diseñadores, estilistas, desarrolladores y especialistas en experiencia de usuario que trabajan juntos para que cada visita a Thread inspire una decisión de moda mejor.</p>
        <p>La plataforma está disponible en web y próximamente en aplicación móvil, con sincronización total del guardarropa y notificaciones de tendencias personalizadas.</p>
        <p>En Thread creemos que vestirse bien no es un lujo. Es un derecho que merecen todas las personas, y nuestra tecnología existe para hacerlo posible cada día.</p>
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
    <div class="breadcrumb" style="padding:0 0 8px;">02 / Explorar por Color</div>
    <h2 class="page-title">Explorar <em>por Color</em></h2>

    <div class="colores-row">

      <!-- Sidebar izquierdo: paleta -->
      <div class="col-sidebar-left">
        <p class="paleta-label"><strong>PALETA</strong></p>
        <p style="font-size:12px; margin-bottom:8px; color:#666;">Selecciona un color</p>
        <div class="paleta-grid">
          <div class="paleta-item"><a href="#colores"><img src="https://placehold.co/32x32/1a1a1a/fff?text=+" alt="Negro" border="1" title="Negro"></a><br><small>Negro</small></div>
          <div class="paleta-item"><a href="#colores"><img src="https://placehold.co/32x32/1c2b4a/fff?text=+" alt="Marino" border="1" title="Marino"></a><br><small>Marino</small></div>
          <div class="paleta-item"><a href="#colores"><img src="https://placehold.co/32x32/4a4a2a/fff?text=+" alt="Oliva" border="1" title="Oliva"></a><br><small>Oliva</small></div>
          <div class="paleta-item"><a href="#colores"><img src="https://placehold.co/32x32/6b4c2a/fff?text=+" alt="Cafe" border="1" title="Cafe"></a><br><small>Cafe</small></div>
          <div class="paleta-item"><a href="#colores"><img src="https://placehold.co/32x32/3498db/fff?text=+" alt="Azul" border="2" title="Azul"></a><br><small>Azul</small></div>
          <div class="paleta-item"><a href="#colores"><img src="https://placehold.co/32x32/27ae60/fff?text=+" alt="Verde" border="1" title="Verde"></a><br><small>Verde</small></div>
          <div class="paleta-item"><a href="#colores"><img src="https://placehold.co/32x32/1a7a4a/fff?text=+" alt="Esmeralda" border="1" title="Esmeralda"></a><br><small>Esmeralda</small></div>
          <div class="paleta-item"><a href="#colores"><img src="https://placehold.co/32x32/1abc9c/fff?text=+" alt="Turquesa" border="1" title="Turquesa"></a><br><small>Turquesa</small></div>
          <div class="paleta-item"><a href="#colores"><img src="https://placehold.co/32x32/c0392b/fff?text=+" alt="Rojo" border="1" title="Rojo"></a><br><small>Rojo</small></div>
          <div class="paleta-item"><a href="#colores"><img src="https://placehold.co/32x32/e67e22/fff?text=+" alt="Naranja" border="1" title="Naranja"></a><br><small>Naranja</small></div>
          <div class="paleta-item"><a href="#colores"><img src="https://placehold.co/32x32/e0a020/fff?text=+" alt="Ambar" border="1" title="Ambar"></a><br><small>Ambar</small></div>
          <div class="paleta-item"><a href="#colores"><img src="https://placehold.co/32x32/f1c40f/fff?text=+" alt="Amarillo" border="1" title="Amarillo"></a><br><small>Amarillo</small></div>
          <div class="paleta-item"><a href="#colores"><img src="https://placehold.co/32x32/9b59b6/fff?text=+" alt="Violeta" border="1" title="Violeta"></a><br><small>Violeta</small></div>
          <div class="paleta-item"><a href="#colores"><img src="https://placehold.co/32x32/c39bd3/fff?text=+" alt="Lila" border="1" title="Lila"></a><br><small>Lila</small></div>
          <div class="paleta-item"><a href="#colores"><img src="https://placehold.co/32x32/f5f3ef/ccc?text=+" alt="Blanco" border="1" title="Blanco"></a><br><small>Blanco</small></div>
          <div class="paleta-item"><a href="#colores"><img src="https://placehold.co/32x32/bdc3c7/fff?text=+" alt="Plata" border="1" title="Plata"></a><br><small>Plata</small></div>
          <div class="paleta-item"><a href="#colores"><img src="https://placehold.co/32x32/95a5a6/fff?text=+" alt="Gris" border="1" title="Gris"></a><br><small>Gris</small></div>
          <div class="paleta-item"><a href="#colores"><img src="https://placehold.co/32x32/f8f4ec/ccc?text=+" alt="Marfil" border="1" title="Marfil"></a><br><small>Marfil</small></div>
          <div class="paleta-item"><a href="#colores"><img src="https://placehold.co/32x32/f4a460/fff?text=+" alt="Melocoton" border="1" title="Melocoton"></a><br><small>Melocoton</small></div>
          <div class="paleta-item"><a href="#colores"><img src="https://placehold.co/32x32/fdf5e6/ccc?text=+" alt="Crema" border="1" title="Crema"></a><br><small>Crema</small></div>
        </div>
      </div>

      <!-- Contenido central -->
      <div class="col-main">
        <div class="color-header">
          Azul &nbsp;·&nbsp; #3498DB &nbsp;·&nbsp; 34 prendas &nbsp;·&nbsp; 18 outfits
          &nbsp;&nbsp;&nbsp;
          <a href="#colores" style="background-color:#f5f3ef; color:#3d3a2e; padding:6px 14px; text-decoration:none; font-size:12px; border-radius:2px;">Ver outfits →</a>
        </div>

        <p style="font-size:12px; color:#888; margin:12px 0 6px;">Combina con</p>
        <div class="combina-row">
          <img src="https://placehold.co/40x40/e0a020/fff?text=+" alt="Ambar" border="1">
          <img src="https://placehold.co/40x40/2c3e50/fff?text=+" alt="Marino" border="1">
          <img src="https://placehold.co/40x40/bdc3c7/fff?text=+" alt="Plata" border="1">
          <img src="https://placehold.co/40x40/2c3e50/fff?text=+" alt="Oscuro" border="1">
          <img src="https://placehold.co/40x40/f5f3ef/ccc?text=+" alt="Blanco" border="1">
        </div>

        <p style="margin-top:16px;" class="filter-tabs">
          <a href="#colores" class="active">Todo</a>
          <a href="#colores">Camisas</a>
          <a href="#colores">Pantalones</a>
          <a href="#colores">Vestidos</a>
          <a href="#colores">Accesorios</a>
        </p>

        <div class="colores-prendas-grid">
          <div>
            <img src="img/prendas/camisa-lino.jpg" alt="Camisa Oxford" border="1">
            <p class="product-name">Camisa Oxford</p>
            <p><a href="#prendas" class="link-ver">Ver →</a></p>
          </div>
          <div>
            <img src="img/prendas/blazer-crudo.jpeg" alt="Blazer" border="1">
            <p class="product-name">Blazer</p>
            <p><a href="#prendas" class="link-ver">Ver →</a></p>
          </div>
          <div>
            <img src="img/prendas/vestido-midi.jpg" alt="Vestido Midi" border="1">
            <p class="product-name">Vestido Midi</p>
            <p><a href="#prendas" class="link-ver">Ver →</a></p>
          </div>
          <div>
            <img src="img/prendas/top-tejido.jpeg" alt="Camiseta" border="1">
            <p class="product-name">Camiseta</p>
            <p><a href="#prendas" class="link-ver">Ver →</a></p>
          </div>
          <div>
            <img src="img/prendas/pantalon-wide.jpg" alt="Pantalon" border="1">
            <p class="product-name">Pantalon</p>
            <p><a href="#prendas" class="link-ver">Ver →</a></p>
          </div>
          <div>
            <img src="img/guardarropa/jeans-rectos.jpg" alt="Jeans" border="1">
            <p class="product-name">Jeans</p>
            <p><a href="#prendas" class="link-ver">Ver →</a></p>
          </div>
          <div>
            <img src="img/prendas/falda-plisada.jpg" alt="Falda" border="1">
            <p class="product-name">Falda</p>
            <p><a href="#prendas" class="link-ver">Ver →</a></p>
          </div>
          <div>
            <img src="img/prendas/trench.jpg" alt="Chaqueta" border="1">
            <p class="product-name">Chaqueta</p>
            <p><a href="#prendas" class="link-ver">Ver →</a></p>
          </div>
        </div>
      </div>

      <!-- Sidebar derecho: outfits -->
      <div class="col-sidebar-right">
        <p><strong>Outfits en Azul</strong></p>
        <div class="looks-col">
          <div>
            <img src="img/colores/look-azul-01.jpg" alt="Look 01" border="1">
            <p style="font-size:12px; font-style:italic; color:#888;">Look 01</p>
          </div>
          <div>
            <img src="img/colores/look-azul2.jpg" alt="Look 02" border="1">
            <p style="font-size:12px; font-style:italic; color:#888;">Look 02</p>
          </div>
          <div>
            <img src="img/colores/look-azul-03.jpg" alt="Look 03" border="1">
            <p style="font-size:12px; font-style:italic; color:#888;">Look 03</p>
          </div>
        </div>
      </div>

    </div><!-- /colores-row -->
  </section>

  <hr class="divider">


  <!-- TENDENCIAS -->
  <section id="tendencias">
    <div class="breadcrumb" style="padding:0 0 8px;">03 / Tendencias</div>

    <div class="tendencias-header">
      <h2 style="font-size:36px; font-weight:normal;">Tendencias</h2>
      <div class="filter-tabs">
        <a href="#tendencias" class="active">Todo</a>
        <a href="#tendencias">Emergente</a>
        <a href="#tendencias">Fija</a>
        <a href="#tendencias">Por edad</a>
        <a href="#tendencias">Temporada</a>
      </div>
    </div>

    <!-- Tendencia destacada -->
    <div class="tendencia-hero">
      <div class="th-img">
        <img src="img/tendencias/quiet-luxury.jpg" alt="Quiet Luxury tendencia" border="1">
      </div>
      <div class="th-info">
        <p style="color:#c0603a; font-size:12px; font-weight:bold; text-transform:uppercase; margin-bottom:12px;">EMERGENTE</p>
        <p style="font-size:15px; line-height:1.6;">
          El minimalismo sofisticado toma el protagonismo. Prendas de calidad, colores neutros y siluetas atemporales que trascienden temporadas.
        </p>
        <div class="th-btns">
          <a href="#tendencias" style="background-color:#3d3a2e; color:#f5f3ef; padding:10px 20px; text-decoration:none; font-size:13px; border-radius:2px;">Explorar tendencia →</a>
          <a href="#tendencias" style="border:1px solid #3d3a2e; color:#3d3a2e; padding:10px 20px; text-decoration:none; font-size:13px; border-radius:2px;">Guardar</a>
        </div>
      </div>
    </div>

    <!-- Todas las tendencias -->
    <div class="todas-header">
      <p style="font-size:16px; font-weight:bold;">Todas las tendencias</p>
      <p style="font-size:12px; color:#888;">24 disponibles</p>
    </div>
    <hr style="border:0; border-top:1px solid #d4cfc7; margin-bottom:20px;">

    <div class="grid-5">
      <div>
        <img src="img/tendencias/coastal.jpeg" alt="Coastal" width="100%" height="180" border="1"
          style="display:block; object-fit:contain; background:#f5f3ef;">
        <p class="product-name">Coastal</p>
        <p><span class="badge-emergente">Emergente</span> &nbsp; <a href="#tendencias" class="link-ver">→</a></p>
      </div>
      <div>
        <img src="img/tendencias/tono-tierra.jpeg" alt="Tono Tierra" width="100%" height="180" border="1"
          style="display:block; object-fit:contain; background:#f5f3ef;">
        <p class="product-name">Tono Tierra</p>
        <p><span class="badge-fija">Fija</span> &nbsp; <a href="#tendencias" class="link-ver">→</a></p>
      </div>
      <div>
        <img src="img/tendencias/ballet-core.jpeg" alt="Ballet Core" width="100%" height="180" border="1"
          style="display:block; object-fit:contain; background:#f5f3ef;">
        <p class="product-name">Ballet Core</p>
        <p><span class="badge-emergente">Emergente</span> &nbsp; <a href="#tendencias" class="link-ver">→</a></p>
      </div>
      <div>
        <img src="img/tendencias/business.jpg" alt="Business" width="100%" height="180" border="1"
          style="display:block; object-fit:contain; background:#f5f3ef;">
        <p class="product-name">Business</p>
        <p><span class="badge-fija">Fija</span> &nbsp; <a href="#tendencias" class="link-ver">→</a></p>
      </div>
      <div>
        <img src="img/tendencias/dark-academia.jpeg" alt="Dark Academia" width="100%" height="180" border="1"
          style="display:block; object-fit:contain; background:#f5f3ef;">
        <p class="product-name">Dark Academia</p>
        <p><span class="badge-fija">Fija</span> &nbsp; <a href="#tendencias" class="link-ver">→</a></p>
      </div>
    </div>
  </section>

  <hr class="divider">


  <!-- PRENDAS -->
  <section id="prendas">
    <div class="breadcrumb" style="padding:0 0 8px;">04 / Prendas</div>

    <div class="prendas-header">
      <h2 style="font-size:36px; font-weight:normal;">Prendas</h2>
      <p style="font-size:12px; color:#888;">128 resultados</p>
    </div>

    <div class="prendas-row">

      <!-- Sidebar filtros -->
      <div class="sidebar" style="flex:0 0 220px; width:220px;">
        <p style="margin-bottom:8px;"><strong style="font-size:13px;">FILTROS</strong> &nbsp; <a href="#prendas" style="font-size:12px; color:#c0603a; text-decoration:none;">Limpiar todo</a></p>

        <h3 style="font-size:12px; font-weight:bold; margin-top:16px; text-transform:uppercase;">CATEGORÍA</h3>
        <label style="font-size:13px; display:block; margin:4px 0;"><input type="checkbox"> Camisas / Blusas</label>
        <label style="font-size:13px; display:block; margin:4px 0;"><input type="checkbox"> Pantalones</label>
        <label style="font-size:13px; display:block; margin:4px 0;"><input type="checkbox"> Vestidos</label>
        <label style="font-size:13px; display:block; margin:4px 0;"><input type="checkbox"> Faldas</label>
        <label style="font-size:13px; display:block; margin:4px 0;"><input type="checkbox"> Abrigos</label>
        <label style="font-size:13px; display:block; margin:4px 0;"><input type="checkbox"> Accesorios</label>

        <h3 style="font-size:12px; font-weight:bold; margin-top:16px; text-transform:uppercase;">COLOR</h3>
        <label style="font-size:13px; display:block; margin:4px 0;"><input type="checkbox"> Neutros</label>
        <label style="font-size:13px; display:block; margin:4px 0;"><input type="checkbox"> Tonos tierra</label>
        <label style="font-size:13px; display:block; margin:4px 0;"><input type="checkbox"> Azules</label>
        <label style="font-size:13px; display:block; margin:4px 0;"><input type="checkbox"> Verdes</label>
        <label style="font-size:13px; display:block; margin:4px 0;"><input type="checkbox"> Pasteles</label>

        <h3 style="font-size:12px; font-weight:bold; margin-top:16px; text-transform:uppercase;">OCASIÓN</h3>
        <label style="font-size:13px; display:block; margin:4px 0;"><input type="checkbox"> Casual</label>
        <label style="font-size:13px; display:block; margin:4px 0;"><input type="checkbox"> Formal</label>
        <label style="font-size:13px; display:block; margin:4px 0;"><input type="checkbox"> Trabajo</label>
        <label style="font-size:13px; display:block; margin:4px 0;"><input type="checkbox"> Fiesta</label>
        <label style="font-size:13px; display:block; margin:4px 0;"><input type="checkbox"> Deporte</label>

        <h3 style="font-size:12px; font-weight:bold; margin-top:16px; text-transform:uppercase;">TALLA</h3>
        <label style="font-size:13px; display:block; margin:4px 0;"><input type="checkbox"> XS</label>
        <label style="font-size:13px; display:block; margin:4px 0;"><input type="checkbox"> S</label>
        <label style="font-size:13px; display:block; margin:4px 0;"><input type="checkbox"> M</label>
        <label style="font-size:13px; display:block; margin:4px 0;"><input type="checkbox"> L</label>
        <label style="font-size:13px; display:block; margin:4px 0;"><input type="checkbox"> XL</label>

        <h3 style="font-size:12px; font-weight:bold; margin-top:16px; text-transform:uppercase;">PRECIO</h3>
        <label style="font-size:13px; display:block; margin:4px 0;"><input type="checkbox"> $0–$500</label>
        <label style="font-size:13px; display:block; margin:4px 0;"><input type="checkbox"> $500–$1000</label>
        <label style="font-size:13px; display:block; margin:4px 0;"><input type="checkbox"> $1000+</label>
      </div>

      <!-- Grid prendas -->
      <div class="prendas-main">
        <p style="margin-bottom:16px;" class="filter-tabs">
          Ordenar: &nbsp;
          <a href="#prendas" class="active">Relevancia</a>
          <a href="#prendas">Nuevo</a>
          <a href="#prendas">Precio ↑</a>
          <a href="#prendas">Precio ↓</a>
        </p>

        <div class="prendas-grid">
          <div>
            <img src="img/prendas/blazer-crudo.jpeg" alt="Blazer Crudo" border="1">
            <p class="product-name">Blazer Crudo</p>
            <p style="font-size:12px; color:#888;">$ — — —</p>
            <a href="#prendas" class="btn-ver-prenda">Ver prenda</a>
          </div>
          <div>
            <img src="img/prendas/camisa-lino.jpg" alt="Camisa Lino" border="1">
            <p class="product-name">Camisa Lino</p>
            <p style="font-size:12px; color:#888;">$ — — —</p>
            <a href="#prendas" class="btn-ver-prenda">Ver prenda</a>
          </div>
          <div>
            <img src="img/prendas/vestido-midi.jpg" alt="Vestido Midi" border="1">
            <p class="product-name">Vestido Midi</p>
            <p style="font-size:12px; color:#888;">$ — — —</p>
            <a href="#prendas" class="btn-ver-prenda">Ver prenda</a>
          </div>
          <div>
            <img src="img/prendas/pantalon-wide.jpg" alt="Pantalon Wide" border="1">
            <p class="product-name">Pantalon Wide</p>
            <p style="font-size:12px; color:#888;">$ — — —</p>
            <a href="#prendas" class="btn-ver-prenda">Ver prenda</a>
          </div>
          <div>
            <img src="img/prendas/blusa-seda.jpg" alt="Blusa Seda" border="1">
            <p class="product-name">Blusa Seda</p>
            <p style="font-size:12px; color:#888;">$ — — —</p>
            <a href="#prendas" class="btn-ver-prenda">Ver prenda</a>
          </div>
          <div>
            <img src="img/prendas/falda-plisada.jpg" alt="Falda Plisada" border="1">
            <p class="product-name">Falda Plisada</p>
            <p style="font-size:12px; color:#888;">$ — — —</p>
            <a href="#prendas" class="btn-ver-prenda">Ver prenda</a>
          </div>
          <div>
            <img src="img/prendas/jersey-camel.jpeg" alt="Jersey Camel" border="1">
            <p class="product-name">Jersey Camel</p>
            <p style="font-size:12px; color:#888;">$ — — —</p>
            <a href="#prendas" class="btn-ver-prenda">Ver prenda</a>
          </div>
          <div>
            <img src="img/prendas/trench.jpg" alt="Trench" border="1">
            <p class="product-name">Trench</p>
            <p style="font-size:12px; color:#888;">$ — — —</p>
            <a href="#prendas" class="btn-ver-prenda">Ver prenda</a>
          </div>
          <div>
            <img src="img/prendas/top-tejido.jpeg" alt="Top Tejido" border="1">
            <p class="product-name">Top Tejido</p>
            <p style="font-size:12px; color:#888;">$ — — —</p>
            <a href="#prendas" class="btn-ver-prenda">Ver prenda</a>
          </div>
          <div>
            <img src="img/prendas/shorts-lino.webp" alt="Shorts Lino" border="1">
            <p class="product-name">Shorts Lino</p>
            <p style="font-size:12px; color:#888;">$ — — —</p>
            <a href="#prendas" class="btn-ver-prenda">Ver prenda</a>
          </div>
          <div>
            <img src="img/prendas/cardigan.avif" alt="Cardigan" border="1">
            <p class="product-name">Cardigan</p>
            <p style="font-size:12px; color:#888;">$ — — —</p>
            <a href="#prendas" class="btn-ver-prenda">Ver prenda</a>
          </div>
          <div>
            <img src="img/prendas/loafers.jpeg" alt="Loafers" border="1">
            <p class="product-name">Loafers</p>
            <p style="font-size:12px; color:#888;">$ — — —</p>
            <a href="#prendas" class="btn-ver-prenda">Ver prenda</a>
          </div>
        </div>
      </div>

    </div><!-- /prendas-row -->
  </section>

  <hr class="divider">


  <!-- OUTFIT BUILDER -->
  <section id="outfits">
    <div class="breadcrumb" style="padding:0 0 8px;">05 / Crea tu Outfit</div>
    <h2 style="font-size:36px; font-weight:normal; margin-bottom:24px;">Crea tu Outfit</h2>

    <div class="outfit-row">

      <!-- Panel izquierdo: mis prendas -->
      <div class="outfit-panel">
        <p style="font-size:12px; font-weight:bold; margin-bottom:8px;">MIS PRENDAS &nbsp; <a href="#guardarropa" style="font-size:11px; color:#c0603a; text-decoration:none;">Arrastra →</a></p>

        <p style="font-size:11px; font-weight:bold; text-transform:uppercase; color:#888; margin-top:12px; margin-bottom:6px;">SUPERIOR</p>
        <div class="panel-grid">
          <div><img src="img/guardarropa/camisa-blanca.jpg" alt="Camisa" border="1"><p style="font-size:11px; margin-top:4px;">Camisa</p></div>
          <div><img src="img/guardarropa/blazer-camel.jpg" alt="Blazer" border="1"><p style="font-size:11px; margin-top:4px;">Blazer</p></div>
          <div><img src="img/guardarropa/blusa-seda.jpg" alt="Blusa" border="1"><p style="font-size:11px; margin-top:4px;">Blusa</p></div>
          <div><img src="img/prendas/top-tejido.jpeg" alt="Top" border="1"><p style="font-size:11px; margin-top:4px;">Top</p></div>
        </div>

        <p style="font-size:11px; font-weight:bold; text-transform:uppercase; color:#888; margin-top:16px; margin-bottom:6px;">INFERIOR</p>
        <div class="panel-grid">
          <div><img src="img/guardarropa/pantalon-negro.jpg" alt="Pantalon" border="1"><p style="font-size:11px; margin-top:4px;">Pantalon</p></div>
          <div><img src="img/guardarropa/falda-plisada.jpg" alt="Falda" border="1"><p style="font-size:11px; margin-top:4px;">Falda</p></div>
          <div><img src="img/guardarropa/jeans-rectos.jpg" alt="Jeans" border="1"><p style="font-size:11px; margin-top:4px;">Jeans</p></div>
          <div><img src="img/prendas/shorts-lino.webp" alt="Shorts" border="1"><p style="font-size:11px; margin-top:4px;">Shorts</p></div>
        </div>

        <p style="font-size:11px; font-weight:bold; text-transform:uppercase; color:#888; margin-top:16px; margin-bottom:6px;">CALZADO</p>
        <div class="panel-grid">
          <div><img src="img/guardarropa/loafers-cuero.jpg" alt="Loafers" border="1"><p style="font-size:11px; margin-top:4px;">Loafers</p></div>
          <div><img src="img/guardarropa/sneakers-blancos.jpeg" alt="Sneakers" border="1"><p style="font-size:11px; margin-top:4px;">Sneakers</p></div>
        </div>
      </div>

      <!-- Canvas central -->
      <div class="outfit-canvas">
        <p style="font-size:13px; font-weight:bold; margin-bottom:12px;">CANVAS</p>
        <div style="background-color:#eae7e0; border:1px solid #d4cfc7; padding:24px; text-align:center; min-height:500px;">
          <img src="img/logo/logo-jaguar.png" alt="figura" width="40" height="40" border="0" style="border-radius:20px; margin:0 auto 8px;">
          <div style="background-color:#d8d4cc; border:1px dashed #b0aa9e; width:160px; height:180px; margin:8px auto; display:flex; align-items:center; justify-content:center;">
            <p style="font-size:12px; color:#888; padding:20px;">Superior</p>
          </div>
          <div style="background-color:#d8d4cc; border:1px dashed #b0aa9e; width:160px; height:160px; margin:8px auto; display:flex; align-items:center; justify-content:center;">
            <p style="font-size:12px; color:#888; padding:20px;">Inferior</p>
          </div>
          <div style="background-color:#d8d4cc; border:1px dashed #b0aa9e; width:100px; height:60px; margin:8px auto; display:flex; align-items:center; justify-content:center;">
            <p style="font-size:11px; color:#888;">Calzado</p>
          </div>
        </div>
        <div class="canvas-actions">
          <div>
            <a href="#outfits" style="background-color:#3d3a2e; color:#f5f3ef; padding:10px 20px; text-decoration:none; font-size:13px; border-radius:2px;">Guardar outfit</a>
            &nbsp;
            <a href="#outfits" style="border:1px solid #3d3a2e; color:#3d3a2e; padding:10px 20px; text-decoration:none; font-size:13px; border-radius:2px;">Compartir</a>
          </div>
          <a href="#outfits" style="background-color:#7a7550; color:#f5f3ef; padding:10px 20px; text-decoration:none; font-size:13px; border-radius:2px;">✦ IA sugiere</a>
        </div>
      </div>

      <!-- Panel IA -->
      <div class="outfit-ia">
        <div class="ia-panel">
          <p style="font-size:14px; font-weight:bold; color:#7a7550; margin-bottom:4px;">✦ Thread IA</p>
          <p style="font-size:12px; font-style:italic; color:#888; margin-bottom:16px;">Sugerencias para tu outfit</p>

          <div class="ia-suggestion">
            <h4>Casual Chic</h4>
            <p>Camisa lino + wide leg + loafers blancos</p>
            <a href="#outfits" style="background-color:#3d3a2e; color:#f5f3ef; padding:6px 14px; text-decoration:none; font-size:12px; border-radius:2px;">Aplicar →</a>
          </div>
          <div class="ia-suggestion">
            <h4>Weekend Look</h4>
            <p>Cardigan + jeans + sneakers clean</p>
            <a href="#outfits" style="background-color:#3d3a2e; color:#f5f3ef; padding:6px 14px; text-decoration:none; font-size:12px; border-radius:2px;">Aplicar →</a>
          </div>
          <div class="ia-suggestion">
            <h4>Oficina Creativa</h4>
            <p>Blazer + blusa seda + pantalon sastre</p>
            <a href="#outfits" style="background-color:#3d3a2e; color:#f5f3ef; padding:6px 14px; text-decoration:none; font-size:12px; border-radius:2px;">Aplicar →</a>
          </div>
          <div class="ia-suggestion">
            <h4>Noche Minima</h4>
            <p>Vestido midi + loafers + bolso estructurado</p>
            <a href="#outfits" style="background-color:#3d3a2e; color:#f5f3ef; padding:6px 14px; text-decoration:none; font-size:12px; border-radius:2px;">Aplicar →</a>
          </div>

          <p style="font-size:12px; margin-top:16px; margin-bottom:6px; font-weight:bold;">Paleta sugerida</p>
          <div class="ia-paleta">
            <img src="https://placehold.co/32x32/f5f3ef/ccc?text=+" alt="Blanco" border="1">
            <img src="https://placehold.co/32x32/4a4a2a/fff?text=+" alt="Oliva" border="1">
            <img src="https://placehold.co/32x32/7a7550/fff?text=+" alt="Caqui" border="1">
            <img src="https://placehold.co/32x32/c0603a/fff?text=+" alt="Terracota" border="1">
            <img src="https://placehold.co/32x32/2c3e50/fff?text=+" alt="Marino" border="1">
          </div>

          <p style="font-size:12px; margin-top:16px; margin-bottom:6px; font-weight:bold;">Ocasión:</p>
          <div class="ia-ocasion">
            <a href="#outfits" style="background-color:#3d3a2e; color:#f5f3ef; padding:6px 14px; text-decoration:none; font-size:12px; border-radius:2px;">Casual</a>
            <a href="#outfits" style="background-color:#3d3a2e; color:#f5f3ef; padding:6px 14px; text-decoration:none; font-size:12px; border-radius:2px;">Trabajo</a>
            <a href="#outfits" style="background-color:#3d3a2e; color:#f5f3ef; padding:6px 14px; text-decoration:none; font-size:12px; border-radius:2px;">Noche</a>
          </div>
        </div>
      </div>

    </div><!-- /outfit-row -->
  </section>

  <hr class="divider">


  <!-- GUARDARROPA -->
  <section id="guardarropa">
    <div class="breadcrumb" style="padding:0 0 8px;">06 / Mi Guardarropa</div>

    <div class="guardarropa-header">
      <h2 style="font-size:36px; font-weight:normal;">Mi Guardarropa</h2>
      <div class="stats-row">
        <div class="stat-cell"><p class="stat-num">34</p><p class="stat-label">Prendas</p></div>
        <div class="stat-cell"><p class="stat-num">12</p><p class="stat-label">Outfits</p></div>
        <div class="stat-cell"><p class="stat-num">8</p><p class="stat-label">Colores</p></div>
        <div class="stat-cell"><p class="stat-num">5</p><p class="stat-label">Ocasiones</p></div>
      </div>
    </div>

    <div class="guardarropa-tabs">
      <div class="filter-tabs">
        <a href="#guardarropa" class="active">Mis Prendas</a>
        <a href="#guardarropa">Outfits</a>
        <a href="#guardarropa">Favoritos</a>
        <a href="#guardarropa">Historial</a>
      </div>
      <a href="#prendas" style="background-color:#3d3a2e; color:#f5f3ef; padding:8px 16px; text-decoration:none; font-size:13px; border-radius:2px;">+ Agregar prenda</a>
    </div>

    <div class="guardarropa-grid">
      <div><img src="img/guardarropa/blazer-camel.jpg" alt="Blazer Camel" border="1"><p class="product-name">Blazer Camel ♥</p><p><a href="#outfits" class="link-ver">Crear outfit →</a></p></div>
      <div><img src="img/guardarropa/camisa-blanca.jpg" alt="Camisa Blanca" border="1"><p class="product-name">Camisa Blanca ♥</p><p><a href="#outfits" class="link-ver">Crear outfit →</a></p></div>
      <div><img src="img/guardarropa/pantalon-negro.jpg" alt="Pantalon Negro" border="1"><p class="product-name">Pantalon Negro ♥</p><p><a href="#outfits" class="link-ver">Crear outfit →</a></p></div>
      <div><img src="img/guardarropa/vestido-midi.jpeg" alt="Vestido Midi" border="1"><p class="product-name">Vestido Midi ♥</p><p><a href="#outfits" class="link-ver">Crear outfit →</a></p></div>
      <div><img src="img/guardarropa/cardigan-beige.jpg" alt="Cardigan Beige" border="1"><p class="product-name">Cardigan Beige ♥</p><p><a href="#outfits" class="link-ver">Crear outfit →</a></p></div>
      <div><img src="img/guardarropa/blusa-seda.jpg" alt="Blusa Seda" border="1"><p class="product-name">Blusa Seda ♥</p><p><a href="#outfits" class="link-ver">Crear outfit →</a></p></div>
      <div><img src="img/guardarropa/jeans-rectos.jpg" alt="Jeans Rectos" border="1"><p class="product-name">Jeans Rectos ♥</p><p><a href="#outfits" class="link-ver">Crear outfit →</a></p></div>
      <div><img src="img/guardarropa/loafers-cuero.jpg" alt="Loafers Cuero" border="1"><p class="product-name">Loafers Cuero ♥</p><p><a href="#outfits" class="link-ver">Crear outfit →</a></p></div>
      <div><img src="img/guardarropa/trench-oliva.jpeg" alt="Trench Oliva" border="1"><p class="product-name">Trench Oliva ♥</p><p><a href="#outfits" class="link-ver">Crear outfit →</a></p></div>
      <div><img src="img/guardarropa/camiseta.jpeg" alt="Camiseta" border="1"><p class="product-name">Camiseta ♥</p><p><a href="#outfits" class="link-ver">Crear outfit →</a></p></div>
      <div><img src="img/guardarropa/falda-plisada.jpg" alt="Falda Plisada" border="1"><p class="product-name">Falda Plisada ♥</p><p><a href="#outfits" class="link-ver">Crear outfit →</a></p></div>
      <div><img src="img/guardarropa/sneakers-blancos.jpeg" alt="Sneakers Blancos" border="1"><p class="product-name">Sneakers Blancos ♥</p><p><a href="#outfits" class="link-ver">Crear outfit →</a></p></div>
    </div>
  </section>

  <hr class="divider">


  <!-- TIENDA -->
  <section id="tienda">
    <div class="breadcrumb" style="padding:0 0 8px;">07 / Tienda / Shop</div>

    <div style="background-color:#3d3a2e; padding:48px 40px; margin-bottom:24px;">
      <h2 style="font-size:40px; font-weight:normal; color:#f5f3ef;">Nueva Colección</h2>
      <a href="#tienda" style="background-color:#f5f3ef; color:#3d3a2e; padding:10px 20px; text-decoration:none; font-size:13px; border-radius:2px; display:inline-block; margin-top:16px;">Ver colección →</a>
    </div>

    <div class="tienda-filter-row">
      <div>
        <p style="font-size:12px; display:inline; margin-right:8px; color:#888;">Filtrar:</p>
        <span class="filter-tabs">
          <a href="#tienda" class="active">Todo</a>
          <a href="#tienda">Nueva llegada</a>
          <a href="#tienda">En oferta</a>
          <a href="#tienda">Sostenible</a>
          <a href="#tienda">&lt; $500</a>
          <a href="#tienda">Por marca</a>
        </span>
      </div>
      <p style="font-size:12px; color:#888;">64 productos &nbsp; Ordenar: Relevancia ↓</p>
    </div>

    <div class="tienda-grid">
      <div>
        <img src="img/tienda/camisa-oxford.jpg" alt="Camisa Oxford" border="1">
        <p class="product-name">Camisa Oxford</p>
        <p class="product-brand">Zara</p>
        <p class="product-price">$890</p>
        <a href="#tienda" class="btn-ver-tienda">Ver →</a>
      </div>
      <div>
        <span class="discount-badge" style="display:inline-block; margin-bottom:4px;">-20%</span>
        <img src="img/tienda/blazer-slim.jpeg" alt="Blazer Slim" border="1">
        <p class="product-name">Blazer Slim</p>
        <p class="product-brand">Mango</p>
        <p class="product-price">$1,890</p>
        <a href="#tienda" class="btn-ver-tienda">Ver →</a>
      </div>
      <div>
        <img src="img/tienda/wide-leg.jpeg" alt="Wide Leg" border="1">
        <p class="product-name">Wide Leg</p>
        <p class="product-brand">H&amp;M</p>
        <p class="product-price">$1,290</p>
        <a href="#tienda" class="btn-ver-tienda">Ver →</a>
      </div>
      <div>
        <span class="discount-badge" style="display:inline-block; margin-bottom:4px;">-20%</span>
        <img src="img/tienda/vestido-midi.jpg" alt="Vestido Midi" border="1">
        <p class="product-name">Vestido Midi</p>
        <p class="product-brand">&amp; Other</p>
        <p class="product-price">$1,590</p>
        <a href="#tienda" class="btn-ver-tienda">Ver →</a>
      </div>
      <div>
        <img src="img/tienda/cardigan-merino.jpeg" alt="Cardigan Merino" border="1">
        <p class="product-name">Cardigan Merino</p>
        <p class="product-brand">COS</p>
        <p class="product-price">$2,100</p>
        <a href="#tienda" class="btn-ver-tienda">Ver →</a>
      </div>
      <div>
        <img src="img/tienda/falda-plisada.jpeg" alt="Falda Plisada" border="1">
        <p class="product-name">Falda Plisada</p>
        <p class="product-brand">Pull&amp;Bear</p>
        <p class="product-price">$980</p>
        <a href="#tienda" class="btn-ver-tienda">Ver →</a>
      </div>
      <div>
        <span class="discount-badge" style="display:inline-block; margin-bottom:4px;">-20%</span>
        <img src="img/tienda/trench-clasico.jpeg" alt="Trench Clasico" border="1">
        <p class="product-name">Trench Clasico</p>
        <p class="product-brand">Massimo</p>
        <p class="product-price">$3,200</p>
        <a href="#tienda" class="btn-ver-tienda">Ver →</a>
      </div>
      <div>
        <img src="img/tienda/loafers.jpg" alt="Loafers" border="1">
        <p class="product-name">Loafers</p>
        <p class="product-brand">Zara</p>
        <p class="product-price">$2,800</p>
        <a href="#tienda" class="btn-ver-tienda">Ver →</a>
      </div>
    </div>
  </section>

  <hr class="divider">


  <!-- NOSOTROS -->
  <section id="nosotros">
    <div class="breadcrumb" style="padding:0 0 8px;">08 / Sobre Thread</div>

    <div class="nosotros-hero">
      <div class="nos-logo">
        <img src="img/logo/logo-jaguar.png" alt="Thread logo jaguar">
      </div>
      <div class="nos-text">
        <h2 style="font-size:52px; font-weight:normal; line-height:1.1;">
          Nacimos<br>
          <em style="font-style:italic; color:#7a7550;">para vestirte</em><br>
          <span style="border-bottom:2px solid #3d3a2e;">a ti.</span>
        </h2>
        <p style="font-size:14px; color:#666; font-style:italic; margin-top:16px;">
          Thread es la plataforma de moda que democratiza el estilo: flexible, inclusiva y atemporal para todas las edades.
        </p>
      </div>
    </div>

    <h3 style="font-size:22px; font-weight:normal; margin-bottom:16px;">Nuestros Valores</h3>
    <hr style="border:0; border-top:1px solid #d4cfc7; margin-bottom:20px;">

    <div class="valores-grid">
      <div class="value-card">
        <p style="font-size:14px; font-weight:bold; margin-bottom:8px;">Inclusividad</p>
        <p style="font-size:13px; color:#555; line-height:1.5;">Moda para todas las edades, tallas y estilos. Sin excepcion.</p>
      </div>
      <div class="value-card dark">
        <p style="font-size:14px; font-weight:bold; margin-bottom:8px;">Atemporalidad</p>
        <p style="font-size:13px; color:#555; line-height:1.5;">Creemos en el estilo que dura, no en la tendencia que pasa.</p>
      </div>
      <div class="value-card">
        <p style="font-size:14px; font-weight:bold; margin-bottom:8px;">Orientacion</p>
        <p style="font-size:13px; color:#555; line-height:1.5;">Te ayudamos a construir tu estilo sin juzgar tu punto de partida.</p>
      </div>
      <div class="value-card dark">
        <p style="font-size:14px; font-weight:bold; margin-bottom:8px;">Impacto</p>
        <p style="font-size:13px; color:#555; line-height:1.5;">Promovemos decisiones de moda reflexivas y responsables.</p>
      </div>
    </div>

    <div class="mvp-row">
      <div class="mvp-col">
        <p class="mission-label">MISIÓN</p>
        <p style="font-size:13px; color:#555; font-style:italic; line-height:1.6;">Democratizar el estilo haciendo la moda accesible, comprensible e inspiradora para cualquier persona en cualquier etapa de su vida.</p>
      </div>
      <div class="mvp-col">
        <p class="mission-label">VISIÓN</p>
        <p style="font-size:13px; color:#555; font-style:italic; line-height:1.6;">Ser la plataforma de moda de referencia: el lugar donde el color, la prenda y el outfit se convierten en lenguaje personal.</p>
      </div>
      <div class="mvp-col">
        <p class="mission-label">PROPÓSITO</p>
        <p style="font-size:13px; color:#555; font-style:italic; line-height:1.6;">Existir para que cada persona encuentre en la ropa una forma autentica de expresarse y vivir cada momento con intencion.</p>
      </div>
    </div>
  </section>

  <hr class="divider">


  <!-- CONTACTO -->
  <section id="contacto" class="py-5 px-4" style="background-color:#f5f3ef;">
    <div class="container">
      <h2 class="mb-4" style="font-family:Georgia,serif; font-weight:normal; font-size:32px;">Contáctanos</h2>
      <div class="row g-4">
        <div class="col-lg-4">
          <div class="tarjeta-contacto destacada p-4 h-100">
            <h5 class="mb-3" style="font-family:Georgia,serif;">Encuéntranos</h5>
            <p class="mb-2">
              <strong>Dirección</strong><br>
              Instituto Tecnológico de Pachuca, Carr. Mexico-Pachuca Km. 87.5, Pachuca de Soto, Hidalgo.
            </p>
            <p class="mb-2">
              <strong>Teléfono</strong><br>
              <a href="tel:7711111111" style="color:#3d3a2e; text-decoration:none;">771 111 11 11</a>
            </p>
            <p class="mb-3">
              <strong>WhatsApp</strong><br>
              <a href="https://wa.me/527711111111" target="_blank" class="btn btn-sm mt-1"
                style="background-color:#25d366; color:#fff; border-radius:2px;">
                Escríbenos en WhatsApp
              </a>
            </p>
            <p class="mb-0" style="font-size:13px; color:#888;">
              Lun – Vie: 9:00 – 18:00 hrs<br>
              Sáb: 10:00 – 14:00 hrs
            </p>
          </div>
        </div>
        <div class="col-lg-8">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3734.02!2d-98.7771688!3d20.0837769!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1a1d7c0f1cfa3%3A0x122870c3429e18a8!2sInstituto+Tecnol%C3%B3gico+de+Pachuca+(ITP)!5e0!3m2!1ses!2smx!4v1700000000000!5m2!1ses!2smx"
            width="100%" height="380" style="border:0; border-radius:2px;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    </div>
  </section>

  <hr class="divider">


  <!-- FAQ -->
  <section id="faq" class="py-5 px-4" style="background-color:#f0ede6;">
    <div class="container">
      <h2 class="mb-4" style="font-family:Georgia,serif; font-weight:normal; font-size:32px;">Preguntas Frecuentes</h2>
      <div class="accordion" id="accordionFAQ">
        <div class="accordion-item" style="border-top:2px solid #c0603a; margin-bottom:8px;">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" style="font-family:Georgia,serif; background-color:#f5f3ef;">¿Qué es Thread?</button>
          </h2>
          <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#accordionFAQ">
            <div class="accordion-body" style="font-size:13px; color:#555;">Thread es una plataforma de moda que te ayuda a descubrir tu estilo personal explorando por color, prenda y tendencia. Cuenta con un armador de outfits asistido por inteligencia artificial.</div>
          </div>
        </div>
        <div class="accordion-item" style="border-top:2px solid #7a7550; margin-bottom:8px;">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" style="font-family:Georgia,serif; background-color:#f5f3ef;">¿Cómo funciona el armador de outfits?</button>
          </h2>
          <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
            <div class="accordion-body" style="font-size:13px; color:#555;">Seleccionas prendas de tu guardarropa virtual y las colocas en el canvas. La IA analiza la combinación y te sugiere alternativas o mejoras.</div>
          </div>
        </div>
        <div class="accordion-item" style="border-top:2px solid #c0603a; margin-bottom:8px;">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" style="font-family:Georgia,serif; background-color:#f5f3ef;">¿Puedo comprar ropa directamente en Thread?</button>
          </h2>
          <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
            <div class="accordion-body" style="font-size:13px; color:#555;">Sí. La sección Tienda tiene productos de Zara, Mango, H&M, COS y más. Puedes filtrar por categoría, precio, talla y ocasión.</div>
          </div>
        </div>
        <div class="accordion-item" style="border-top:2px solid #7a7550; margin-bottom:8px;">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" style="font-family:Georgia,serif; background-color:#f5f3ef;">¿Thread es gratuito?</button>
          </h2>
          <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
            <div class="accordion-body" style="font-size:13px; color:#555;">Explorar colores, tendencias y prendas es gratis. Las funciones del guardarropa y el armador con IA están disponibles con registro.</div>
          </div>
        </div>
        <div class="accordion-item" style="border-top:2px solid #c0603a;">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" style="font-family:Georgia,serif; background-color:#f5f3ef;">¿Cómo contacto al equipo de Thread?</button>
          </h2>
          <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
            <div class="accordion-body" style="font-size:13px; color:#555;">Por WhatsApp o teléfono al 771 111 11 11, o visítanos en el Instituto Tecnológico de Pachuca.</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <hr class="divider">


  <!-- FOOTER -->
  <footer>
    <div class="footer-row">
      <div>
        <strong style="color:#f5f3ef;">Thread</strong>
        &nbsp;
        <em style="color:#a0997a; font-size:11px;">Wear the Moment</em>
      </div>
      <div class="footer-center">
        <a href="#colores">Colores</a>
        <a href="#tendencias">Tendencias</a>
        <a href="#prendas">Prendas</a>
        <a href="#outfits">Outfits</a>
        <a href="#tienda">Tienda</a>
        <a href="#nosotros">Nosotros</a>
      </div>
      <div>
        <small style="color:#a0997a;">© 2026 Thread</small>
      </div>
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
