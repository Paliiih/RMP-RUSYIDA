<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PT Rusyida Mitra Perkasa — Penyedia Jasa Tenaga Kerja Profesional</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,300;9..144,500;9..144,600;9..144,700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>
  :root{
    --navy: #0F2A3D;
    --navy-deep: #091C29;
    --gold: #C9A24B;
    --gold-light: #E4C77A;
    --cream: #FAFAF7;
    --ink: #1C2B33;
    --slate: #5B6B73;
    --line: #E4E1D8;
  }
  *{margin:0;padding:0;box-sizing:border-box;}
  html{scroll-behavior:smooth;}
  body{
    font-family:'Inter',sans-serif;
    color:var(--ink);
    background:var(--cream);
    line-height:1.6;
  }
  h1,h2,h3,h4{
    font-family:'Fraunces',serif;
    font-weight:600;
    color:var(--navy);
    line-height:1.15;
  }
  a{text-decoration:none;color:inherit;}
  img{max-width:100%;display:block;}
  .container{max-width:1180px;margin:0 auto;padding:0 24px;}

  /* ===== HEADER ===== */
  header{
    position:sticky;top:0;z-index:100;
    background:var(--navy);
    border-bottom:2px solid var(--gold);
  }
  .header-inner{
    display:flex;align-items:center;justify-content:space-between;
    padding:14px 24px;max-width:1180px;margin:0 auto;
  }
  .logo{display:flex;align-items:center;gap:12px;}
  .logo-mark{
    width:42px;height:42px;border-radius:8px;
    background:#fff;
    display:flex;align-items:center;justify-content:center;
    flex-shrink:0;overflow:hidden;padding:3px;
  }
  .logo-mark img{width:100%;height:100%;object-fit:contain;display:block;}
  .logo-text{color:#fff;}
  .logo-text .name{font-family:'Fraunces',serif;font-weight:600;font-size:16px;letter-spacing:.3px;}
  .logo-text .tagline{font-size:10.5px;color:var(--gold-light);letter-spacing:1.5px;text-transform:uppercase;}
  nav{display:flex;gap:2px;align-items:center;}
  nav a{
    color:#EDEEF0;font-size:14.5px;font-weight:500;
    padding:10px 16px;border-radius:6px;transition:.2s;
  }
  nav a:hover{background:rgba(255,255,255,.08);color:var(--gold-light);}
  nav a.active{color:var(--gold-light);background:rgba(255,255,255,.06);}
  .nav-cta{
    background:var(--gold) !important;color:var(--navy-deep) !important;
    font-weight:600 !important;margin-left:8px;
  }
  .nav-cta:hover{background:var(--gold-light) !important;}
  .menu-toggle{display:none;background:none;border:none;color:#fff;font-size:24px;cursor:pointer;}

  /* ===== HERO ===== */
  .hero{
    background:linear-gradient(160deg,var(--navy-deep) 0%, var(--navy) 55%, #14374D 100%);
    color:#fff;position:relative;overflow:hidden;
    padding:100px 24px 90px;
  }
  .hero::before{
    content:'';position:absolute;right:-120px;top:-120px;width:420px;height:420px;
    border-radius:50%;border:1px solid rgba(201,162,75,.25);
  }
  .hero::after{
    content:'';position:absolute;right:-40px;top:60px;width:280px;height:280px;
    border-radius:50%;border:1px solid rgba(201,162,75,.18);
  }
  .hero-inner{max-width:1180px;margin:0 auto;position:relative;z-index:2;}
  .eyebrow{
    display:inline-flex;align-items:center;gap:8px;
    color:var(--gold-light);font-size:13px;font-weight:600;letter-spacing:2px;text-transform:uppercase;
    margin-bottom:22px;
  }
  .eyebrow::before{content:'';width:28px;height:1px;background:var(--gold);}
  .hero h1{
    font-size:clamp(34px,5vw,56px);max-width:720px;color:#fff;margin-bottom:22px;
  }
  .hero h1 em{color:var(--gold-light);font-style:normal;}
  .hero p.lead{
    max-width:560px;font-size:17px;color:#C7D1D8;margin-bottom:36px;
  }
  .hero-actions{display:flex;gap:14px;flex-wrap:wrap;}
  .btn{
    display:inline-flex;align-items:center;gap:8px;
    padding:14px 26px;border-radius:8px;font-weight:600;font-size:15px;
    transition:.2s;cursor:pointer;border:none;
  }
  .btn-primary{background:var(--gold);color:var(--navy-deep);}
  .btn-primary:hover{background:var(--gold-light);transform:translateY(-1px);}
  .btn-outline{background:transparent;color:#fff;border:1.5px solid rgba(255,255,255,.35);}
  .btn-outline:hover{border-color:var(--gold);color:var(--gold-light);}

  .hero-stats{
    display:grid;grid-template-columns:repeat(4,1fr);gap:0;
    margin-top:64px;padding-top:36px;border-top:1px solid rgba(255,255,255,.14);
    max-width:820px;
  }
  .hero-stats .stat{padding-right:20px;}
  .hero-stats .num{font-family:'Fraunces',serif;font-size:32px;color:var(--gold-light);font-weight:600;}
  .hero-stats .label{font-size:12.5px;color:#9FB0B9;margin-top:4px;letter-spacing:.3px;}

  /* ===== SECTION GENERIC ===== */
  section{padding:88px 24px;}
  .section-head{max-width:640px;margin-bottom:52px;}
  .section-head .eyebrow{color:var(--navy);}
  .section-head .eyebrow::before{background:var(--navy);}
  .section-head h2{font-size:clamp(26px,3.4vw,38px);}
  .section-head p{color:var(--slate);margin-top:14px;font-size:15.5px;}
  .divider{
    height:1px;background:linear-gradient(90deg,transparent,var(--gold),transparent);
    max-width:1180px;margin:0 auto;
  }

  /* ===== LAYANAN ===== */
  .services{background:#fff;}
  .service-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:28px;}
  .service-card{
    border:1px solid var(--line);border-radius:12px;padding:32px 28px;
    transition:.25s;background:var(--cream);
  }
  .service-card:hover{border-color:var(--gold);box-shadow:0 12px 30px -18px rgba(15,42,61,.35);transform:translateY(-3px);}
  .service-num{
    font-family:'Fraunces',serif;color:var(--gold);font-size:14px;font-weight:600;
    letter-spacing:1px;margin-bottom:16px;display:block;
  }
  .service-card h3{font-size:19px;margin-bottom:10px;}
  .service-card p{color:var(--slate);font-size:14.5px;margin-bottom:18px;}
  .service-link{color:var(--navy);font-weight:600;font-size:13.5px;display:inline-flex;align-items:center;gap:6px;}
  .service-link:hover{color:var(--gold);}

  /* ===== TENTANG (profil singkat) ===== */
  .about{background:var(--cream);}
  .about-wrap{display:grid;grid-template-columns:1fr 1fr;gap:60px;align-items:center;}
  .about-visual{
    aspect-ratio:4/3.2;border-radius:14px;
    background:linear-gradient(135deg,var(--navy) 0%,var(--navy-deep) 100%);
    position:relative;overflow:hidden;
    display:flex;align-items:center;justify-content:center;
  }
  .about-visual::before{
    content:'';position:absolute;inset:18px;border:1px solid rgba(201,162,75,.35);border-radius:10px;
  }
  .about-visual .mark{
    width:100%;height:100%;
    display:flex;align-items:center;justify-content:center;
    padding:36px;
  }
  .about-visual .mark img{
    width:100%;height:100%;object-fit:contain;display:block;
  }
  .about-text .eyebrow{color:var(--navy);}
  .about-text .eyebrow::before{background:var(--navy);}
  .about-text h2{font-size:clamp(26px,3.2vw,34px);margin-bottom:18px;}
  .about-text p{color:var(--slate);margin-bottom:16px;font-size:15.5px;}
  .about-cta{margin-top:20px;}

  /* ===== MITRA / KERJASAMA ===== */
  .partners{background:#fff;text-align:center;}
  .partners .section-head{margin-left:auto;margin-right:auto;text-align:center;}
  .partner-logos{
    display:grid;grid-template-columns:repeat(6,1fr);gap:20px;margin-top:10px;
  }
  .partner-logo{
    aspect-ratio:2.2/1;border:1px solid var(--line);border-radius:10px;
    display:flex;align-items:center;justify-content:center;
    color:var(--slate);font-size:12px;font-weight:600;letter-spacing:.5px;
    background:#fff;padding:14px;
  }
  .partner-logo img{
    max-width:100%;max-height:100%;width:auto;height:auto;object-fit:contain;
  }
  .partner-logo:nth-child(2){
    padding:4px;
  }
  .partners-cta{margin-top:44px;}

  /* ===== TESTIMONI / PORTOFOLIO PREVIEW ===== */
  .portfolio{background:var(--navy-deep);color:#fff;}
  .portfolio .section-head .eyebrow{color:var(--gold-light);}
  .portfolio .section-head .eyebrow::before{background:var(--gold);}
  .portfolio .section-head h2{color:#fff;}
  .portfolio .section-head p{color:#9FB0B9;}
  .testi-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px;}
  .testi-card{
    background:rgba(255,255,255,.04);border:1px solid rgba(255,255,255,.1);
    border-radius:12px;padding:28px;
  }
  .testi-card p{font-size:14.5px;color:#C7D1D8;margin-bottom:20px;font-style:italic;}
  .testi-person{display:flex;align-items:center;gap:12px;}
  .testi-avatar{
    width:38px;height:38px;border-radius:50%;
    background:linear-gradient(135deg,var(--gold-light),var(--gold));
    flex-shrink:0;
  }
  .testi-person .pname{font-weight:600;font-size:13.5px;color:#fff;}
  .testi-person .prole{font-size:12px;color:#8DA0AA;}

  /* ===== CTA BAND ===== */
  .cta-band{
    background:linear-gradient(120deg,var(--gold) 0%,var(--gold-light) 100%);
    padding:64px 24px;text-align:center;
  }
  .cta-band h2{color:var(--navy-deep);font-size:clamp(24px,3vw,32px);margin-bottom:14px;}
  .cta-band p{color:#3B3320;margin-bottom:30px;font-size:15.5px;}
  .cta-band .btn-primary{background:var(--navy-deep);color:#fff;}
  .cta-band .btn-primary:hover{background:var(--navy);}

  /* ===== FOOTER ===== */
  footer{background:var(--navy-deep);color:#C7D1D8;padding:64px 24px 28px;}
  .footer-grid{
    display:grid;grid-template-columns:1.6fr 1fr 1fr 1.2fr;gap:40px;
    margin-bottom:48px;
  }
  .footer-brand .logo-text .name{color:#fff;}
  .footer-brand p{font-size:13.5px;color:#8DA0AA;margin-top:14px;max-width:280px;}
  footer h4{color:#fff;font-family:'Inter',sans-serif;font-size:13.5px;letter-spacing:1px;text-transform:uppercase;margin-bottom:18px;font-weight:600;}
  footer ul{list-style:none;}
  footer li{margin-bottom:10px;}
  footer a{color:#9FB0B9;font-size:14px;transition:.2s;}
  footer a:hover{color:var(--gold-light);}
  .footer-bottom{
    border-top:1px solid rgba(255,255,255,.1);padding-top:24px;
    display:flex;justify-content:space-between;flex-wrap:wrap;gap:12px;
    font-size:13px;color:#7690A0;
  }

  /* ===== WHATSAPP FLOATING ===== */
  .wa-float{
    position:fixed;bottom:26px;right:26px;z-index:200;
    display:flex;align-items:center;gap:10px;
    background:#25D366;color:#fff;padding:14px 18px;border-radius:50px;
    box-shadow:0 10px 28px -8px rgba(37,211,102,.55);
    font-weight:600;font-size:14px;transition:.25s;
  }
  .wa-float:hover{transform:translateY(-3px);box-shadow:0 14px 32px -8px rgba(37,211,102,.65);}
  .wa-float svg{width:24px;height:24px;flex-shrink:0;}
  .wa-text{max-width:0;overflow:hidden;white-space:nowrap;transition:.3s;}
  .wa-float:hover .wa-text{max-width:160px;}

  /* ===== RESPONSIVE ===== */
  @media(max-width:900px){
    nav{
      display:none;position:absolute;top:100%;left:0;right:0;
      flex-direction:column;align-items:stretch;gap:0;
      background:var(--navy);border-bottom:2px solid var(--gold);
      padding:8px 16px 16px;
    }
    nav.nav-open{display:flex;}
    nav a{padding:12px 8px;border-radius:4px;}
    .header-inner{position:relative;flex-wrap:wrap;}
    .menu-toggle{display:block;}
    .hero-stats{grid-template-columns:repeat(2,1fr);row-gap:24px;}
    .service-grid{grid-template-columns:1fr;}
    .about-wrap{grid-template-columns:1fr;}
    .partner-logos{grid-template-columns:repeat(3,1fr);}
    .testi-grid{grid-template-columns:1fr;}
    .footer-grid{grid-template-columns:1fr 1fr;}
  }
</style>
</head>
<body>

<header>
  <div class="header-inner">
    <a href="index.php" class="logo">
      <div class="logo-mark"><img src="logo_1.jpeg" alt="Logo PT Rusyida Mitra Perkasa"></div>
      <div class="logo-text">
        <div class="name">Rusyida Mitra Perkasa</div>
        <div class="tagline">Mitra Outsourcing Tenaga Kerja</div>
      </div>
    </a>
    <nav>
      <a href="index.php" class="active">Beranda</a>
      <a href="profil.php">Profil</a>
      <a href="galeri.php">Galeri</a>
      <a href="portofolio.php">Portofolio</a>
      <a href="kerjasama.php">Kerja Sama</a>
      <a href="kontak.php">Kontak</a>
    </nav>
    <button class="menu-toggle">☰</button>
  </div>
</header>

<section class="hero">
  <div class="hero-inner">
    <div class="eyebrow">PT Rusyida Mitra Perkasa · Semarang</div>
    <h1>Mitra <em>Outsourcing</em> Tenaga Kerja Profesional Terpercaya</h1>
    <p class="lead">Berfokus pada bidang layanan outsourcing keamanan, kebersihan, serta operasional teknis seperti operator produksi, driver, dan IT support, kami memastikan setiap personel yang ditugaskan telah melalui proses seleksi dan pelatihan yang ketat.</p>
    <p class="lead">Kami berkomitmen menjadi mitra outsourcing terpercaya dengan menghadirkan tenaga kerja yang terlatih, berintegritas, dan siap kerja sesuai kebutuhan zaman.</p>
    <div class="hero-actions">
      <a href="portofolio.php" class="btn btn-outline">Lihat Portofolio Kami</a>
    </div>
    <div class="hero-stats">
      <div class="stat"><div class="num">20+</div><div class="label">Klien Terbantu</div></div>
      <div class="stat"><div class="num">80+</div><div class="label">Mitra Kerja Sama</div></div>
      <div class="stat"><div class="num">10+</div><div class="label">Tahun Pengalaman</div></div>
      <div class="stat"><div class="num">90%</div><div class="label">Kepuasan Klien</div></div>
    </div>
  </div>
</section>

<div class="divider"></div>

<section class="services">
  <div class="container">
    <div class="section-head">
      <div class="eyebrow">Layanan Kami</div>
      <h2>Solusi Outsourcing Tenaga Kerja</h2>
      <p>Kami fokus menyediakan tenaga kerja profesional melalui skema outsourcing, dengan opsi rekrutmen & penempatan sebagai layanan tambahan sesuai kebutuhan.</p>
    </div>
    <div class="service-grid">
      <div class="service-card">
        <span class="service-num">01</span>
        <h3>Outsourcing Security & Cleaning Service</h3>
        <p>Tenaga keamanan dan kebersihan profesional yang terlatih, dikelola penuh oleh kami dan ditempatkan di perusahaan Anda.</p>
        <a href="kontak.php" class="service-link">Ajukan Penawaran →</a>
      </div>
      <div class="service-card">
        <span class="service-num">02</span>
        <h3>Outsourcing Staff Pabrik & Produksi</h3>
        <p>Penyediaan tenaga kerja produksi lewat skema outsourcing, siap kerja dan sesuai standar operasional industri Anda.</p>
        <a href="kerjasama.php" class="service-link">Ajukan Kerja Sama →</a>
      </div>
      <div class="service-card">
        <span class="service-num">03</span>
        <h3>Rekrutmen & Penempatan</h3>
        <p>Sebagai layanan tambahan, kami juga membantu proses rekrutmen dan penempatan kandidat yang langsung menjadi karyawan Anda.</p>
        <a href="kontak.php" class="service-link">Konsultasi Sekarang →</a>
      </div>
    </div>
  </div>
</section>

<section class="about">
  <div class="container about-wrap">
    <div class="about-visual"><div class="mark"><img src="logo_1.jpeg" alt="Logo PT Rusyida Mitra Perkasa"></div></div>
    <div class="about-text">
      <div class="eyebrow">Tentang Kami</div>
      <h2>Dibangun di Atas Kepercayaan dan Konsistensi</h2>
      <p>PT Rusyida Mitra Perkasa berkomitmen menjadi mitra tepercaya dalam layanan outsourcing tenaga kerja profesional bagi perusahaan di Semarang dan sekitarnya, dengan opsi rekrutmen & penempatan sebagai layanan tambahan.</p>
      <p>Dengan tim rekrutmen dan pendekatan yang berorientasi pada kualitas, kami memastikan setiap tenaga kerja yang kami tempatkan siap kerja dan sesuai kebutuhan perusahaan Anda.</p>
      <div class="about-cta">
        <a href="profil.php" class="btn btn-outline" style="color:var(--navy);border-color:var(--navy);">Selengkapnya Tentang Kami →</a>
      </div>
    </div>
  </div>
</section>

<section class="portfolio">
  <div class="container">
    <div class="section-head">
      <div class="eyebrow">Portofolio</div>
      <h2>Dipercaya oleh Berbagai Klien</h2>
      <p>Sebagian cerita dari mereka yang telah terbantu bersama PT Rusyida Mitra Perkasa.</p>
    </div>
    <div class="testi-grid">
      <div class="testi-card">
        <p>"Tenaga security dan cleaning service yang ditempatkan sangat disiplin dan sesuai kebutuhan operasional kami."</p>
        <div class="testi-person">
          <div class="testi-avatar"></div>
          <div><div class="pname">HRD Perusahaan Manufaktur</div><div class="prole">Klien Outsourcing</div></div>
        </div>
      </div>
      <div class="testi-card">
        <p>"Proses rekrutmen cepat dan tenaga kerja yang diberikan sesuai dengan kualifikasi yang kami butuhkan."</p>
        <div class="testi-person">
          <div class="testi-avatar"></div>
          <div><div class="pname">Perwakilan Mitra Usaha</div><div class="prole">Klien Rekrutmen</div></div>
        </div>
      </div>
      <div class="testi-card">
        <p>"Tim RMP membantu kelancaran operasional kami dengan tenaga administrasi yang rapi dan terpercaya."</p>
        <div class="testi-person">
          <div class="testi-avatar"></div>
          <div><div class="pname">Klien Korporat</div><div class="prole">Klien Outsourcing</div></div>
        </div>
      </div>
    </div>
    <div style="margin-top:40px;">
      <a href="portofolio.php" class="btn btn-outline">Lihat Semua Portofolio →</a>
    </div>
  </div>
</section>

<section class="partners">
  <div class="container">
    <div class="section-head">
      <div class="eyebrow">Kerja Sama</div>
      <h2>Dipercaya oleh Perusahaan Terkemuka</h2>
      <p>Kami menyediakan tenaga kerja profesional bagi berbagai perusahaan mitra di berbagai sektor industri.</p>
    </div>
    <div class="partner-logos">
      <div class="partner-logo"><img src="hino.jpeg" alt="Hino"></div>
      <div class="partner-logo"><img src="hansol.jpeg" alt="Hansoll Textile"></div>
      <div class="partner-logo"><img src="duniatex.jpeg" alt="Duniatex"></div>
      <div class="partner-logo"><img src="kubo.jpeg" alt="Kubota"></div>
      <div class="partner-logo"><img src="novotel.jpeg" alt="Novotel Hotels & Resorts"></div>
      <div class="partner-logo"><img src="walisongo.jpeg" alt="UIN Walisongo"></div>
    </div>
    <div class="partners-cta">
      <a href="kerjasama.php" class="btn btn-primary" style="background:var(--navy);color:#fff;">Ajukan Kerja Sama →</a>
    </div>
  </div>
</section>

<div class="cta-band">
  <h2>Siap Bertumbuh Bersama Kami?</h2>
  <p>Konsultasikan kebutuhan tenaga kerja Anda hari ini — tim kami siap merespon dalam 1x24 jam.</p>
  <a href="kontak.php" class="btn btn-primary">Hubungi Kami Sekarang →</a>
</div>

<footer>
  <div class="container">
    <div class="footer-grid">
      <div class="footer-brand">
        <div class="logo-text"><div class="name">Rusyida Mitra Perkasa</div></div>
        <p>Mitra tepercaya penyedia jasa tenaga kerja profesional di Semarang, Jawa Tengah.</p>
      </div>
      <div>
        <h4>Navigasi</h4>
        <ul>
          <li><a href="index.php">Beranda</a></li>
          <li><a href="profil.php">Profil Perusahaan</a></li>
          <li><a href="galeri.php">Galeri Kegiatan</a></li>
          <li><a href="portofolio.php">Portofolio</a></li>
        </ul>
      </div>
      <div>
        <h4>Layanan</h4>
        <ul>
          <li><a href="kontak.php">Security & Cleaning Service</a></li>
          <li><a href="kerjasama.php">Staff Pabrik & Produksi</a></li>
          <li><a href="kontak.php">Tenaga Administrasi</a></li>
        </ul>
      </div>
      <div>
        <h4>Kontak</h4>
        <ul>
          <li>Plalangan, kec.Gunungpati, Gunungpati, Semarang</li>
          <li><a href="mailto:rusyida.rmp@gmail">rusyida.rmp@gmail</a></li>
          <li><a href="https://wa.me/6281326619901" onclick="return openWhatsApp(event,'6281326619901')">+62 813-2661-9901 (WhatsApp)</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <div>© 2026 PT Rusyida Mitra Perkasa. Seluruh hak cipta dilindungi.</div>
      <div>Gunungpati, Semarang, Jawa Tengah</div>
    </div>
  </div>
</footer>

<a href="https://wa.me/6281326619901" class="wa-float" onclick="return openWhatsApp(event,'6281326619901')">
  <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21h.01c5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.82 9.82 0 0012.04 2m0 1.67c2.2 0 4.26.86 5.82 2.42a8.19 8.19 0 012.41 5.83c0 4.55-3.7 8.24-8.24 8.24-1.48 0-2.93-.39-4.19-1.15l-.3-.17-3.12.82.83-3.04-.2-.32a8.2 8.2 0 01-1.26-4.38c0-4.55 3.7-8.25 8.25-8.25M8.53 7.33c-.16 0-.43.06-.66.31-.22.25-.86.84-.86 2.05 0 1.21.88 2.38 1 2.54.13.17 1.76 2.67 4.25 3.73.59.27 1.06.42 1.42.54.6.19 1.14.16 1.57.1.48-.07 1.46-.6 1.67-1.18.21-.58.21-1.07.14-1.18-.06-.1-.23-.16-.48-.29-.25-.12-1.47-.72-1.7-.81-.23-.08-.39-.12-.56.13-.16.25-.64.81-.78.97-.15.17-.29.18-.54.06-.25-.13-1.05-.39-2-1.23-.74-.66-1.24-1.47-1.39-1.72-.14-.25-.02-.38.11-.51.11-.11.25-.29.37-.43.12-.14.16-.25.24-.41.08-.17.04-.31-.02-.43-.06-.13-.56-1.36-.78-1.85-.2-.48-.41-.42-.56-.43-.14-.01-.31-.01-.47-.01z"/></svg>
  <span class="wa-text">Chat via WhatsApp</span>
</a>

<script>
/*
  openWhatsApp: buka WhatsApp langsung tanpa lewat proses "tautkan ke komputer".
  - Di HP: link wa.me sudah otomatis membuka aplikasi WhatsApp, jadi dibiarkan berjalan normal.
  - Di komputer: dicoba dulu skema whatsapp:// yang langsung memicu aplikasi WhatsApp Desktop
    (kalau terinstal). Kalau tidak terinstal / tidak merespons, baru fallback ke wa.me
    (WhatsApp Web) setelah jeda singkat.
*/
function goToWhatsApp(phone, text){
  var isMobile = /Android|iPhone|iPad|iPod|Windows Phone/i.test(navigator.userAgent);
  var msg = text ? encodeURIComponent(text) : '';
  var webUri = 'https://wa.me/' + phone + (msg ? '?text=' + msg : '');

  if (isMobile) {
    window.location.href = webUri; // langsung buka app WA di HP
    return;
  }

  var desktopUri = 'whatsapp://send?phone=' + phone + (msg ? '&text=' + msg : '');
  var didHide = false;
  function onVisibilityChange(){
    if (document.hidden) didHide = true;
  }
  document.addEventListener('visibilitychange', onVisibilityChange);

  window.location.href = desktopUri;

  setTimeout(function(){
    document.removeEventListener('visibilitychange', onVisibilityChange);
    if (!didHide) {
      window.open(webUri, '_blank');
    }
  }, 1200);
}

function openWhatsApp(evt, phone, text){
  if (evt && evt.preventDefault) evt.preventDefault();
  goToWhatsApp(phone, text);
  return false;
}
</script>


<script>
  var menuToggleBtn = document.querySelector('.menu-toggle');
  var mainNav = document.querySelector('header nav');
  if (menuToggleBtn && mainNav) {
    menuToggleBtn.addEventListener('click', function () {
      var isOpen = mainNav.classList.toggle('nav-open');
      menuToggleBtn.textContent = isOpen ? '✕' : '☰';
    });
    mainNav.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        mainNav.classList.remove('nav-open');
        menuToggleBtn.textContent = '☰';
      });
    });
  }
</script>
</body>
</html>