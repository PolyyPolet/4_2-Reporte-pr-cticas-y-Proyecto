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

    <table class="hero-table" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td style="padding: 64px 40px 64px 56px; width: 45%;">
          <h1>Descubre<br><em>tu estilo.</em></h1>
          <p>Explora por color, prenda o tendencia. Thread te ayuda a construir outfits que hablen de quién eres.</p>
          <a href="#outfits" class="btn-primary">Crear outfit →</a>
        </td>
        <td style="width: 55%; padding: 0;">
          <img src="img/hero-banner.jpg" alt="Nueva temporada" width="100%"
            style="display:block; height:480px; object-fit:cover; background:var(--hueso);">
        </td>
      </tr>
    </table>

    <table class="color-strip" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td style="background-color:#c0392b; width:11%;"></td>
        <td style="background-color:#e67e22; width:11%;"></td>
        <td style="background-color:#f1c40f; width:11%;"></td>
        <td style="background-color:#27ae60; width:11%;"></td>
        <td style="background-color:#3498db; width:11%; text-align:center;">
          <a href="#colores" style="color:#fff; text-decoration:none; font-size:11px; letter-spacing:1px;">Explorar por color →</a>
        </td>
        <td style="background-color:#9b59b6; width:11%;"></td>
        <td style="background-color:#1abc9c; width:11%;"></td>
        <td style="background-color:#bdc3c7; width:11%;"></td>
        <td style="background-color:#2c3e50; width:12%;"></td>
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
          <td width="25%">
            <div class="card-img"><img src="img/tendencias/quiet-luxury.jpg" alt="Quiet Luxury"></div>
            <p class="product-name" style="padding:0 14px 4px;">Quiet Luxury</p>
            <p style="padding:0 14px 14px;">
              <span class="badge-emergente">Emergente</span>
              &nbsp;
              <a href="#tendencias" class="link-ver">Ver looks →</a>
            </p>
          </td>
          <td width="25%">
            <div class="card-img"><img src="img/tendencias/tono-tierra.jpeg" alt="Tono Tierra"></div>
            <p class="product-name" style="padding:0 14px 4px;">Tono Tierra</p>
            <p style="padding:0 14px 14px;">
              <span class="badge-fija">Fija</span>
              &nbsp;
              <a href="#tendencias" class="link-ver">Ver looks →</a>
            </p>
          </td>
          <td width="25%">
            <div class="card-img"><img src="img/tendencias/coastal.jpeg" alt="Coastal"></div>
            <p class="product-name" style="padding:0 14px 4px;">Coastal</p>
            <p style="padding:0 14px 14px;">
              <span class="badge-emergente">Emergente</span>
              &nbsp;
              <a href="#tendencias" class="link-ver">Ver looks →</a>
            </p>
          </td>
          <td width="25%">
            <div class="card-img"><img src="img/tendencias/dark-academia.jpeg" alt="Dark Academia"></div>
            <p class="product-name" style="padding:0 14px 4px;">Dark Academia</p>
            <p style="padding:0 14px 14px;">
              <span class="badge-fija">Fija</span>
              &nbsp;
              <a href="#tendencias" class="link-ver">Ver looks →</a>
            </p>
          </td>
        </tr>
      </table>
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

    <table border="0" cellspacing="0" cellpadding="0" width="100%" style="margin-top:28px;">
      <tr>
        <!-- Sidebar: paleta -->
        <td width="200" valign="top" style="padding-right:32px;">
          <span class="paleta-label">Paleta · 20 colores</span>
          <p style="font-size:12px; margin-bottom:10px; color:var(--texto-light); font-family:var(--font-sans);">Selecciona un color</p>
          <table border="0" cellspacing="6" cellpadding="0">
            <tr>
              <td><a href="#colores"><img src="https://placehold.co/32x32/1a1a1a/fff?text=+" alt="Negro" width="32" style="height:32px; border:0.5px solid var(--borde); border-radius:4px;" title="Negro"></a><br><small style="font-family:var(--font-sans); font-size:9px; letter-spacing:1px; color:var(--texto-light);">Negro</small></td>
              <td><a href="#colores"><img src="https://placehold.co/32x32/1c2b4a/fff?text=+" alt="Marino" width="32" style="height:32px; border:0.5px solid var(--borde); border-radius:4px;" title="Marino"></a><br><small style="font-family:var(--font-sans); font-size:9px; letter-spacing:1px; color:var(--texto-light);">Marino</small></td>
              <td><a href="#colores"><img src="https://placehold.co/32x32/4a4a2a/fff?text=+" alt="Oliva" width="32" style="height:32px; border:0.5px solid var(--borde); border-radius:4px;" title="Oliva"></a><br><small style="font-family:var(--font-sans); font-size:9px; letter-spacing:1px; color:var(--texto-light);">Oliva</small></td>
              <td><a href="#colores"><img src="https://placehold.co/32x32/6b4c2a/fff?text=+" alt="Cafe" width="32" style="height:32px; border:0.5px solid var(--borde); border-radius:4px;" title="Cafe"></a><br><small style="font-family:var(--font-sans); font-size:9px; letter-spacing:1px; color:var(--texto-light);">Cafe</small></td>
              <td><a href="#colores"><img src="https://placehold.co/32x32/3498db/fff?text=+" alt="Azul" width="32" style="height:32px; border:2px solid #3498db; border-radius:4px;" title="Azul"></a><br><small style="font-family:var(--font-sans); font-size:9px; letter-spacing:1px; color:var(--texto-light);">Azul</small></td>
            </tr>
            <tr>
              <td><a href="#colores"><img src="https://placehold.co/32x32/27ae60/fff?text=+" alt="Verde" width="32" style="height:32px; border:0.5px solid var(--borde); border-radius:4px;"></a><br><small style="font-family:var(--font-sans); font-size:9px; letter-spacing:1px; color:var(--texto-light);">Verde</small></td>
              <td><a href="#colores"><img src="https://placehold.co/32x32/1a7a4a/fff?text=+" alt="Esmeralda" width="32" style="height:32px; border:0.5px solid var(--borde); border-radius:4px;"></a><br><small style="font-family:var(--font-sans); font-size:9px; letter-spacing:1px; color:var(--texto-light);">Esmeralda</small></td>
              <td><a href="#colores"><img src="https://placehold.co/32x32/1abc9c/fff?text=+" alt="Turquesa" width="32" style="height:32px; border:0.5px solid var(--borde); border-radius:4px;"></a><br><small style="font-family:var(--font-sans); font-size:9px; letter-spacing:1px; color:var(--texto-light);">Turquesa</small></td>
              <td><a href="#colores"><img src="https://placehold.co/32x32/c0392b/fff?text=+" alt="Rojo" width="32" style="height:32px; border:0.5px solid var(--borde); border-radius:4px;"></a><br><small style="font-family:var(--font-sans); font-size:9px; letter-spacing:1px; color:var(--texto-light);">Rojo</small></td>
              <td><a href="#colores"><img src="https://placehold.co/32x32/e67e22/fff?text=+" alt="Naranja" width="32" style="height:32px; border:0.5px solid var(--borde); border-radius:4px;"></a><br><small style="font-family:var(--font-sans); font-size:9px; letter-spacing:1px; color:var(--texto-light);">Naranja</small></td>
            </tr>
            <tr>
              <td><a href="#colores"><img src="https://placehold.co/32x32/e0a020/fff?text=+" alt="Ambar" width="32" style="height:32px; border:0.5px solid var(--borde); border-radius:4px;"></a><br><small style="font-family:var(--font-sans); font-size:9px; letter-spacing:1px; color:var(--texto-light);">Ambar</small></td>
              <td><a href="#colores"><img src="https://placehold.co/32x32/f1c40f/fff?text=+" alt="Amarillo" width="32" style="height:32px; border:0.5px solid var(--borde); border-radius:4px;"></a><br><small style="font-family:var(--font-sans); font-size:9px; letter-spacing:1px; color:var(--texto-light);">Amarillo</small></td>
              <td><a href="#colores"><img src="https://placehold.co/32x32/9b59b6/fff?text=+" alt="Violeta" width="32" style="height:32px; border:0.5px solid var(--borde); border-radius:4px;"></a><br><small style="font-family:var(--font-sans); font-size:9px; letter-spacing:1px; color:var(--texto-light);">Violeta</small></td>
              <td><a href="#colores"><img src="https://placehold.co/32x32/c39bd3/fff?text=+" alt="Lila" width="32" style="height:32px; border:0.5px solid var(--borde); border-radius:4px;"></a><br><small style="font-family:var(--font-sans); font-size:9px; letter-spacing:1px; color:var(--texto-light);">Lila</small></td>
              <td><a href="#colores"><img src="https://placehold.co/32x32/f5f3ef/ccc?text=+" alt="Blanco" width="32" style="height:32px; border:0.5px solid var(--borde); border-radius:4px;"></a><br><small style="font-family:var(--font-sans); font-size:9px; letter-spacing:1px; color:var(--texto-light);">Blanco</small></td>
            </tr>
            <tr>
              <td><a href="#colores"><img src="https://placehold.co/32x32/bdc3c7/fff?text=+" alt="Plata" width="32" style="height:32px; border:0.5px solid var(--borde); border-radius:4px;"></a><br><small style="font-family:var(--font-sans); font-size:9px; letter-spacing:1px; color:var(--texto-light);">Plata</small></td>
              <td><a href="#colores"><img src="https://placehold.co/32x32/95a5a6/fff?text=+" alt="Gris" width="32" style="height:32px; border:0.5px solid var(--borde); border-radius:4px;"></a><br><small style="font-family:var(--font-sans); font-size:9px; letter-spacing:1px; color:var(--texto-light);">Gris</small></td>
              <td><a href="#colores"><img src="https://placehold.co/32x32/f8f4ec/ccc?text=+" alt="Marfil" width="32" style="height:32px; border:0.5px solid var(--borde); border-radius:4px;"></a><br><small style="font-family:var(--font-sans); font-size:9px; letter-spacing:1px; color:var(--texto-light);">Marfil</small></td>
              <td><a href="#colores"><img src="https://placehold.co/32x32/f4a460/fff?text=+" alt="Melocoton" width="32" style="height:32px; border:0.5px solid var(--borde); border-radius:4px;"></a><br><small style="font-family:var(--font-sans); font-size:9px; letter-spacing:1px; color:var(--texto-light);">Melocoton</small></td>
              <td><a href="#colores"><img src="https://placehold.co/32x32/fdf5e6/ccc?text=+" alt="Crema" width="32" style="height:32px; border:0.5px solid var(--borde); border-radius:4px;"></a><br><small style="font-family:var(--font-sans); font-size:9px; letter-spacing:1px; color:var(--texto-light);">Crema</small></td>
            </tr>
          </table>
        </td>

        <!-- Contenido central -->
        <td valign="top">
          <div class="color-header">
            Azul &nbsp;·&nbsp; #3498DB &nbsp;·&nbsp; 34 prendas &nbsp;·&nbsp; 18 outfits
            &nbsp;&nbsp;
            <a href="#colores" style="background:var(--crema); color:var(--oliva); padding:5px 14px; text-decoration:none; font-size:10px; border-radius:999px; letter-spacing:1px; font-family:var(--font-sans);">Ver outfits →</a>
          </div>

          <p style="font-size:11px; color:var(--texto-light); margin:14px 0 8px; font-family:var(--font-sans); letter-spacing:1px; text-transform:uppercase;">Combina con</p>
          <table border="0" cellspacing="6" cellpadding="0">
            <tr>
              <td><img src="https://placehold.co/40x40/e0a020/fff?text=+" alt="Ambar" width="40" style="height:40px; border-radius:6px; border:0.5px solid var(--borde);"></td>
              <td><img src="https://placehold.co/40x40/2c3e50/fff?text=+" alt="Marino" width="40" style="height:40px; border-radius:6px; border:0.5px solid var(--borde);"></td>
              <td><img src="https://placehold.co/40x40/bdc3c7/fff?text=+" alt="Plata" width="40" style="height:40px; border-radius:6px; border:0.5px solid var(--borde);"></td>
              <td><img src="https://placehold.co/40x40/2c3e50/fff?text=+" alt="Oscuro" width="40" style="height:40px; border-radius:6px; border:0.5px solid var(--borde);"></td>
              <td><img src="https://placehold.co/40x40/f5f3ef/ccc?text=+" alt="Blanco" width="40" style="height:40px; border-radius:6px; border:0.5px solid var(--borde);"></td>
            </tr>
          </table>

          <p style="margin-top:18px;" class="filter-tabs">
            <a href="#colores" class="active">Todo</a>
            <a href="#colores">Camisas</a>
            <a href="#colores">Pantalones</a>
            <a href="#colores">Vestidos</a>
            <a href="#colores">Accesorios</a>
          </p>

          <table border="0" cellspacing="14" cellpadding="0" width="100%" style="margin-top:18px;">
            <tr>
              <td width="25%" valign="top">
                <img src="img/prendas/camisa-lino.jpg" alt="Camisa Oxford" width="100%" style="display:block; height:180px; object-fit:cover; background:var(--hueso); border-radius:6px;">
                <p class="product-name">Camisa Oxford</p>
                <p><a href="#prendas" class="link-ver">Ver →</a></p>
              </td>
              <td width="25%" valign="top">
                <img src="img/prendas/blazer-crudo.jpeg" alt="Blazer" width="100%" style="display:block; height:180px; object-fit:cover; background:var(--hueso); border-radius:6px;">
                <p class="product-name">Blazer</p>
                <p><a href="#prendas" class="link-ver">Ver →</a></p>
              </td>
              <td width="25%" valign="top">
                <img src="img/prendas/vestido-midi.jpg" alt="Vestido Midi" width="100%" style="display:block; height:180px; object-fit:cover; background:var(--hueso); border-radius:6px;">
                <p class="product-name">Vestido Midi</p>
                <p><a href="#prendas" class="link-ver">Ver →</a></p>
              </td>
              <td width="25%" valign="top">
                <img src="img/prendas/top-tejido.jpeg" alt="Camiseta" width="100%" style="display:block; height:180px; object-fit:cover; background:var(--hueso); border-radius:6px;">
                <p class="product-name">Camiseta</p>
                <p><a href="#prendas" class="link-ver">Ver →</a></p>
              </td>
            </tr>
            <tr>
              <td width="25%" valign="top">
                <img src="img/prendas/pantalon-wide.jpg" alt="Pantalon" width="100%" style="display:block; height:180px; object-fit:cover; background:var(--hueso); border-radius:6px;">
                <p class="product-name">Pantalon</p>
                <p><a href="#prendas" class="link-ver">Ver →</a></p>
              </td>
              <td width="25%" valign="top">
                <img src="img/guardarropa/jeans-rectos.jpg" alt="Jeans" width="100%" style="display:block; height:180px; object-fit:cover; background:var(--hueso); border-radius:6px;">
                <p class="product-name">Jeans</p>
                <p><a href="#prendas" class="link-ver">Ver →</a></p>
              </td>
              <td width="25%" valign="top">
                <img src="img/prendas/falda-plisada.jpg" alt="Falda" width="100%" style="display:block; height:180px; object-fit:cover; background:var(--hueso); border-radius:6px;">
                <p class="product-name">Falda</p>
                <p><a href="#prendas" class="link-ver">Ver →</a></p>
              </td>
              <td width="25%" valign="top">
                <img src="img/prendas/trench.jpg" alt="Chaqueta" width="100%" style="display:block; height:180px; object-fit:cover; background:var(--hueso); border-radius:6px;">
                <p class="product-name">Chaqueta</p>
                <p><a href="#prendas" class="link-ver">Ver →</a></p>
              </td>
            </tr>
          </table>
        </td>

        <!-- Sidebar derecho: outfits -->
        <td width="240" valign="top" style="padding-left:28px;">
          <p style="font-family:var(--font-sans); font-size:10px; letter-spacing:2px; text-transform:uppercase; color:var(--oliva); margin-bottom:14px;"><strong>Outfits en Azul</strong></p>
          <table border="0" cellspacing="10" cellpadding="0" width="100%">
            <tr>
              <td>
                <img src="img/colores/look-azul-01.jpg" alt="Look 01" width="100%" style="display:block; height:140px; object-fit:cover; background:var(--hueso); border-radius:8px;">
                <p style="font-size:11px; font-style:italic; color:var(--texto-light); margin-top:6px; font-family:var(--font-sans);">Look 01</p>
              </td>
            </tr>
            <tr>
              <td>
                <img src="img/colores/look-azul2.jpg" alt="Look 02" width="100%" style="display:block; height:140px; object-fit:cover; background:var(--hueso); border-radius:8px;">
                <p style="font-size:11px; font-style:italic; color:var(--texto-light); margin-top:6px; font-family:var(--font-sans);">Look 02</p>
              </td>
            </tr>
            <tr>
              <td>
                <img src="img/colores/look-azul-03.jpg" alt="Look 03" width="100%" style="display:block; height:140px; object-fit:cover; background:var(--hueso); border-radius:8px;">
                <p style="font-size:11px; font-style:italic; color:var(--texto-light); margin-top:6px; font-family:var(--font-sans);">Look 03</p>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </section>

  <hr class="divider">


  <!-- TENDENCIAS -->
  <section id="tendencias">
    <div class="breadcrumb" style="padding:0 0 10px;">03 / Tendencias</div>

    <table border="0" width="100%" cellspacing="0" cellpadding="0" style="margin-bottom:16px;">
      <tr>
        <td>
          <span class="section-label">Editorial</span>
          <h2 class="section-heading">Tendencias</h2>
        </td>
        <td align="right" class="filter-tabs">
          <a href="#tendencias" class="active">Todo</a>
          <a href="#tendencias">Emergente</a>
          <a href="#tendencias">Fija</a>
          <a href="#tendencias">Por edad</a>
          <a href="#tendencias">Temporada</a>
        </td>
      </tr>
    </table>

    <!-- Tendencia destacada -->
    <table border="0" width="100%" cellspacing="0" cellpadding="0" style="margin-top:24px;">
      <tr>
        <td width="55%">
          <img src="img/tendencias/quiet-luxury.jpg" alt="Quiet Luxury" width="100%"
            style="display:block; height:360px; object-fit:cover; background:var(--hueso); border-radius:var(--radius-md);">
        </td>
        <td valign="top" style="padding-left:40px;">
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
        </td>
      </tr>
    </table>

    <!-- Grid tendencias -->
    <div style="display:flex; justify-content:space-between; align-items:baseline; margin-top:48px; margin-bottom:14px;">
      <p style="font-size:16px; font-weight:bold; font-family:var(--font-serif);">Todas las tendencias</p>
      <p style="font-size:11px; color:var(--texto-light); font-family:var(--font-sans); letter-spacing:1px;">24 disponibles</p>
    </div>
    <hr style="border:0; border-top:0.5px solid var(--borde); margin-bottom:22px;">

    <table border="0" cellspacing="18" cellpadding="0" width="100%">
      <tr>
        <td width="20%" valign="top">
          <img src="img/tendencias/coastal.jpeg" alt="Coastal" width="100%" style="display:block; height:180px; object-fit:cover; background:var(--hueso); border-radius:var(--radius-sm);">
          <p class="product-name">Coastal</p>
          <p><span class="badge-emergente">Emergente</span> &nbsp; <a href="#tendencias" class="link-ver">→</a></p>
        </td>
        <td width="20%" valign="top">
          <img src="img/tendencias/tono-tierra.jpeg" alt="Tono Tierra" width="100%" style="display:block; height:180px; object-fit:cover; background:var(--hueso); border-radius:var(--radius-sm);">
          <p class="product-name">Tono Tierra</p>
          <p><span class="badge-fija">Fija</span> &nbsp; <a href="#tendencias" class="link-ver">→</a></p>
        </td>
        <td width="20%" valign="top">
          <img src="img/tendencias/ballet-core.jpeg" alt="Ballet Core" width="100%" style="display:block; height:180px; object-fit:cover; background:var(--hueso); border-radius:var(--radius-sm);">
          <p class="product-name">Ballet Core</p>
          <p><span class="badge-emergente">Emergente</span> &nbsp; <a href="#tendencias" class="link-ver">→</a></p>
        </td>
        <td width="20%" valign="top">
          <img src="img/tendencias/business.jpg" alt="Business" width="100%" style="display:block; height:180px; object-fit:cover; background:var(--hueso); border-radius:var(--radius-sm);">
          <p class="product-name">Business</p>
          <p><span class="badge-fija">Fija</span> &nbsp; <a href="#tendencias" class="link-ver">→</a></p>
        </td>
        <td width="20%" valign="top">
          <img src="img/tendencias/dark-academia.jpeg" alt="Dark Academia" width="100%" style="display:block; height:180px; object-fit:cover; background:var(--hueso); border-radius:var(--radius-sm);">
          <p class="product-name">Dark Academia</p>
          <p><span class="badge-fija">Fija</span> &nbsp; <a href="#tendencias" class="link-ver">→</a></p>
        </td>
      </tr>
    </table>
  </section>

  <hr class="divider">


  <!-- PRENDAS -->
  <section id="prendas">
    <div class="breadcrumb" style="padding:0 0 10px;">04 / Prendas</div>

    <table border="0" width="100%" cellspacing="0" cellpadding="0" style="margin-bottom:16px;">
      <tr>
        <td>
          <span class="section-label">Catálogo</span>
          <h2 class="section-heading">Prendas</h2>
        </td>
        <td align="right">
          <p style="font-size:11px; color:var(--texto-light); font-family:var(--font-sans); letter-spacing:1px;">128 resultados</p>
        </td>
      </tr>
    </table>

    <table border="0" width="100%" cellspacing="0" cellpadding="0">

      <!-- Sidebar filtros -->
      <tr>
        <td class="sidebar" valign="top">
          <table border="0" width="100%" cellspacing="0" cellpadding="5">
            <tr>
              <td colspan="2">
                <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:16px;">
                  <span style="font-family:var(--font-sans); font-size:10px; letter-spacing:2px; text-transform:uppercase; color:var(--oliva); font-weight:bold;">Filtros</span>
                  <a href="#prendas" style="font-size:10px; color:var(--terracota); text-decoration:none; font-family:var(--font-sans); letter-spacing:1px;">Limpiar todo</a>
                </div>
              </td>
            </tr>
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
            <tr>
              <td colspan="2">
                <p style="font-family:var(--font-sans); font-size:9px; font-weight:bold; margin:14px 0 8px; text-transform:uppercase; letter-spacing:2px; color:var(--texto-light);"><?= $titulo ?></p>
              </td>
            </tr>
            <?php foreach ($items as $item): ?>
            <tr>
              <td>
                <label style="font-size:13px; display:flex; align-items:center; gap:8px; cursor:pointer; color:var(--texto-med);">
                  <input type="checkbox" style="width:auto; margin:0; padding:0; accent-color:var(--terracota);"> <?= $item ?>
                </label>
              </td>
            </tr>
            <?php endforeach; endforeach; ?>
          </table>
        </td>

        <!-- Grid prendas -->
        <td valign="top">
          <p style="margin-bottom:18px;" class="filter-tabs">
            Ordenar: &nbsp;
            <a href="#prendas" class="active">Relevancia</a>
            <a href="#prendas">Nuevo</a>
            <a href="#prendas">Precio ↑</a>
            <a href="#prendas">Precio ↓</a>
          </p>

          <?php
          $prendas = [
            ['Blazer Crudo',   'img/prendas/blazer-crudo.jpeg'],
            ['Camisa Lino',    'img/prendas/camisa-lino.jpg'],
            ['Vestido Midi',   'img/prendas/vestido-midi.jpg'],
            ['Pantalon Wide',  'img/prendas/pantalon-wide.jpg'],
            ['Blusa Seda',     'img/prendas/blusa-seda.jpg'],
            ['Falda Plisada',  'img/prendas/falda-plisada.jpg'],
            ['Jersey Camel',   'img/prendas/jersey-camel.jpeg'],
            ['Trench',         'img/prendas/trench.jpg'],
            ['Top Tejido',     'img/prendas/top-tejido.jpeg'],
            ['Shorts Lino',    'img/prendas/shorts-lino.webp'],
            ['Cardigan',       'img/prendas/cardigan.avif'],
            ['Loafers',        'img/prendas/loafers.jpeg'],
          ];
          echo '<table border="0" cellspacing="14" cellpadding="0" width="100%">';
          foreach (array_chunk($prendas, 4) as $fila) {
            echo '<tr>';
            foreach ($fila as $p) {
              echo '<td width="25%" valign="top">';
              echo '<img src="'.$p[1].'" alt="'.$p[0].'" width="100%" style="display:block; height:200px; object-fit:cover; background:var(--hueso); border-radius:var(--radius-sm);">';
              echo '<p class="product-name">'.$p[0].'</p>';
              echo '<p class="product-price" style="font-size:13px;">$ — — —</p>';
              echo '<a href="#prendas" class="btn-prenda">Ver prenda</a>';
              echo '</td>';
            }
            echo '</tr>';
          }
          echo '</table>';
          ?>
        </td>
      </tr>
    </table>
  </section>

  <hr class="divider">


  <!-- OUTFIT BUILDER -->
  <section id="outfits">
    <div class="breadcrumb" style="padding:0 0 10px;">05 / Crea tu Outfit</div>
    <span class="section-label">Herramienta</span>
    <h2 class="section-heading" style="margin-bottom:28px;">Crea tu Outfit</h2>

    <table border="0" width="100%" cellspacing="0" cellpadding="0">

      <!-- Panel prendas -->
      <tr>
        <td width="260" valign="top" style="padding-right:24px;">
          <p style="font-family:var(--font-sans); font-size:9px; letter-spacing:2px; text-transform:uppercase; color:var(--oliva); margin-bottom:12px; font-weight:bold;">MIS PRENDAS &nbsp; <a href="#guardarropa" style="color:var(--terracota); text-decoration:none;">Arrastra →</a></p>

          <?php
          $slots = [
            'SUPERIOR' => [
              ['Camisa',  'img/guardarropa/camisa-blanca.jpg'],
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
          <table border="0" cellspacing="6" cellpadding="0" width="100%">
            <?php foreach (array_chunk($items, 2) as $par): ?>
            <tr>
              <?php foreach ($par as $item): ?>
              <td width="50%" style="cursor:grab;">
                <img src="<?= $item[1] ?>" alt="<?= $item[0] ?>" width="100%"
                  style="display:block; height:64px; object-fit:cover; background:var(--hueso); border-radius:var(--radius-sm); border:0.5px solid var(--borde);">
                <p style="font-size:10px; margin-top:4px; font-family:var(--font-sans); color:var(--texto-med);"><?= $item[0] ?></p>
              </td>
              <?php endforeach; ?>
            </tr>
            <?php endforeach; ?>
          </table>
          <?php endforeach; ?>
        </td>

        <!-- Canvas -->
        <td valign="top" style="padding:0 20px;">
          <p style="font-family:var(--font-sans); font-size:9px; letter-spacing:2px; text-transform:uppercase; color:var(--oliva); margin-bottom:14px; font-weight:bold;">CANVAS</p>
          <div style="background:var(--hueso-med); border:0.5px solid var(--borde); border-radius:var(--radius-md); padding:28px; text-align:center; min-height:500px;">
            <img src="img/logo/logo-jaguar.png" alt="figura" width="36" style="height:36px; border-radius:50%; margin:0 auto 8px; border:0.5px solid var(--borde);">
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
          <div style="display:flex; justify-content:space-between; align-items:center; margin-top:14px;">
            <div style="display:flex; gap:10px;">
              <a href="#outfits" class="btn-dark">Guardar outfit</a>
              <a href="#outfits" class="btn-outline">Compartir</a>
            </div>
            <a href="#outfits" class="btn-sage">✦ IA sugiere</a>
          </div>
        </td>

        <!-- Panel IA -->
        <td width="280" valign="top" style="padding-left:20px;">
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
            <table border="0" cellspacing="5" cellpadding="0">
              <tr>
                <td><img src="https://placehold.co/30x30/f5f3ef/ccc?text=+" alt="" width="30" style="height:30px; border-radius:50%; border:0.5px solid var(--borde);"></td>
                <td><img src="https://placehold.co/30x30/4a4a2a/fff?text=+" alt="" width="30" style="height:30px; border-radius:50%;"></td>
                <td><img src="https://placehold.co/30x30/7a7550/fff?text=+" alt="" width="30" style="height:30px; border-radius:50%;"></td>
                <td><img src="https://placehold.co/30x30/c0603a/fff?text=+" alt="" width="30" style="height:30px; border-radius:50%;"></td>
                <td><img src="https://placehold.co/30x30/2c3e50/fff?text=+" alt="" width="30" style="height:30px; border-radius:50%;"></td>
              </tr>
            </table>

            <p style="font-family:var(--font-sans); font-size:9px; letter-spacing:2px; text-transform:uppercase; color:var(--oliva); margin-top:16px; margin-bottom:8px; font-weight:bold;">Ocasión:</p>
            <div style="display:flex; gap:6px; flex-wrap:wrap;">
              <a href="#outfits" class="btn-sm-dark">Casual</a>
              <a href="#outfits" class="btn-sm-dark">Trabajo</a>
              <a href="#outfits" class="btn-sm-dark">Noche</a>
            </div>
          </div>
        </td>
      </tr>
    </table>
  </section>

  <hr class="divider">


  <!-- GUARDARROPA -->
  <section id="guardarropa">
    <div class="breadcrumb" style="padding:0 0 10px;">06 / Mi Guardarropa</div>

    <table border="0" width="100%" cellspacing="0" cellpadding="0" style="margin-bottom:28px;">
      <tr>
        <td width="65%">
          <span class="section-label">Personal</span>
          <h2 class="section-heading">Mi Guardarropa</h2>
        </td>
        <td align="right">
          <table border="0" cellspacing="0" cellpadding="24">
            <tr>
              <?php foreach ([['34','Prendas'],['12','Outfits'],['8','Colores'],['5','Ocasiones']] as $s): ?>
              <td align="center">
                <p class="stat-num"><?= $s[0] ?></p>
                <p class="stat-label"><?= $s[1] ?></p>
              </td>
              <?php endforeach; ?>
            </tr>
          </table>
        </td>
      </tr>
    </table>

    <table border="0" width="100%" cellspacing="0" cellpadding="0" style="margin-bottom:22px;">
      <tr>
        <td class="filter-tabs">
          <a href="#guardarropa" class="active">Mis Prendas</a>
          <a href="#guardarropa">Outfits</a>
          <a href="#guardarropa">Favoritos</a>
          <a href="#guardarropa">Historial</a>
        </td>
        <td align="right">
          <a href="#prendas" class="btn-dark">+ Agregar prenda</a>
        </td>
      </tr>
    </table>

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
    echo '<table border="0" cellspacing="14" cellpadding="0" width="100%">';
    foreach (array_chunk($guardarropa, 6) as $fila) {
      echo '<tr>';
      foreach ($fila as $p) {
        echo '<td width="16%" valign="top">';
        echo '<img src="'.$p[1].'" alt="'.$p[0].'" width="100%" style="display:block; height:180px; object-fit:cover; background:var(--hueso); border-radius:var(--radius-sm);">';
        echo '<p class="product-name">'.$p[0].' ♥</p>';
        echo '<a href="#outfits" class="link-ver" style="font-size:10px;">Crear outfit →</a>';
        echo '</td>';
      }
      echo '</tr>';
    }
    echo '</table>';
    ?>
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

    <table border="0" width="100%" cellspacing="0" cellpadding="0" style="margin-bottom:18px;">
      <tr>
        <td class="filter-tabs">
          <a href="#tienda" class="active">Todo</a>
          <a href="#tienda">Nueva llegada</a>
          <a href="#tienda">En oferta</a>
          <a href="#tienda">Sostenible</a>
          <a href="#tienda">&lt; $500</a>
          <a href="#tienda">Por marca</a>
        </td>
        <td align="right">
          <p style="font-size:11px; color:var(--texto-light); font-family:var(--font-sans); letter-spacing:1px;">64 productos &nbsp;·&nbsp; Ordenar: Relevancia ↓</p>
        </td>
      </tr>
    </table>

    <?php
    $tienda = [
      ['Camisa Oxford',    'img/tienda/camisa-oxford.jpg',   'Zara',      '$890',   false],
      ['Blazer Slim',      'img/tienda/blazer-slim.jpeg',    'Mango',     '$1,890', true],
      ['Wide Leg',         'img/tienda/wide-leg.jpeg',        'H&M',       '$1,290', false],
      ['Vestido Midi',     'img/tienda/vestido-midi.jpg',    '& Other',   '$1,590', true],
      ['Cardigan Merino',  'img/tienda/cardigan-merino.jpeg', 'COS',       '$2,100', false],
      ['Falda Plisada',    'img/tienda/falda-plisada.jpeg',  'Pull&Bear', '$980',   false],
      ['Trench Clasico',   'img/tienda/trench-clasico.jpeg', 'Massimo',   '$3,200', true],
      ['Loafers',          'img/tienda/loafers.jpg',          'Zara',      '$2,800', false],
    ];
    echo '<table border="0" cellspacing="18" cellpadding="0" width="100%">';
    foreach (array_chunk($tienda, 4) as $fila) {
      echo '<tr>';
      foreach ($fila as $p) {
        echo '<td width="25%" valign="top">';
        if ($p[4]) echo '<span class="discount-badge" style="margin-bottom:6px; display:inline-block;">-20%</span>';
        echo '<img src="'.$p[1].'" alt="'.$p[0].'" width="100%" style="display:block; height:240px; object-fit:cover; background:var(--hueso); border-radius:var(--radius-sm);">';
        echo '<p class="product-name">'.$p[0].'</p>';
        echo '<p class="product-brand">'.$p[2].'</p>';
        echo '<p class="product-price">'.$p[3].'</p>';
        echo '<a href="#tienda" class="btn-shop">Ver →</a>';
        echo '</td>';
      }
      echo '</tr>';
    }
    echo '</table>';
    ?>
  </section>

  <hr class="divider">


  <!-- NOSOTROS -->
  <section id="nosotros">
    <div class="breadcrumb" style="padding:0 0 10px;">08 / Sobre Thread</div>

    <table border="0" width="100%" cellspacing="0" cellpadding="0" style="margin-bottom:48px;">
      <tr>
        <td width="35%" align="center">
          <img src="img/logo/logo-jaguar.png" alt="Thread logo" width="280"
            style="display:block; height:300px; object-fit:contain; background:var(--hueso); border-radius:var(--radius-md); margin:0 auto;">
        </td>
        <td valign="middle" style="padding-left:48px;">
          <span class="section-label">Nuestra historia</span>
          <h2 style="font-size:52px; font-weight:normal; line-height:1.1; letter-spacing:-1px;">
            Nacimos<br>
            <em style="font-style:italic; color:var(--sage);">para vestirte</em><br>
            <span style="border-bottom:1.5px solid var(--oliva);">a ti.</span>
          </h2>
          <p style="font-size:14px; color:var(--texto-med); font-style:italic; margin-top:20px; line-height:1.7;">
            Thread es la plataforma de moda que democratiza el estilo: flexible, inclusiva y atemporal para todas las edades.
          </p>
        </td>
      </tr>
    </table>

    <span class="section-label">Lo que nos define</span>
    <h3 style="font-size:22px; font-weight:normal; margin-bottom:18px;">Nuestros Valores</h3>
    <hr style="border:0; border-top:0.5px solid var(--borde); margin-bottom:22px;">

    <table border="0" cellspacing="18" cellpadding="0" width="100%">
      <tr>
        <?php
        $valores = [
          ['Inclusividad',   'Moda para todas las edades, tallas y estilos. Sin excepción.', false],
          ['Atemporalidad',  'Creemos en el estilo que dura, no en la tendencia que pasa.',  true],
          ['Orientación',    'Te ayudamos a construir tu estilo sin juzgar tu punto de partida.', false],
          ['Impacto',        'Promovemos decisiones de moda reflexivas y responsables.',     true],
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
    <table border="0" width="100%" cellspacing="0" cellpadding="0">
      <tr>
        <td>
          <strong style="color:var(--crema); font-family:var(--font-serif); letter-spacing:2px;">Thread</strong>
          &nbsp;
          <em style="color:rgba(160,153,122,0.8); font-size:11px;">Wear the Moment</em>
        </td>
        <td align="center">
          <a href="#colores">Colores</a>
          <a href="#tendencias">Tendencias</a>
          <a href="#prendas">Prendas</a>
          <a href="#outfits">Outfits</a>
          <a href="#tienda">Tienda</a>
          <a href="#nosotros">Nosotros</a>
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
  </script>
</body>
</html>
