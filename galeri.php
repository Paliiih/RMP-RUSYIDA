<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Galeri Kegiatan — PT Rusyida Mitra Perkasa</title>
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
    font-family:'Fraunces',serif;color:var(--gold-light);font-size:15px;letter-spacing:3px;text-transform:uppercase;
    border-top:1px solid var(--gold);border-bottom:1px solid var(--gold);padding:14px 0;
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
    background:var(--cream);
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

  /* ===== PAGE HERO (halaman dalam) ===== */
  .page-hero{
    background:linear-gradient(160deg,var(--navy-deep) 0%, var(--navy) 55%, #14374D 100%);
    color:#fff;padding:64px 24px 56px;position:relative;overflow:hidden;
  }
  .page-hero::before{
    content:'';position:absolute;right:-100px;top:-100px;width:320px;height:320px;
    border-radius:50%;border:1px solid rgba(201,162,75,.22);
  }
  .page-hero-inner{max-width:1180px;margin:0 auto;position:relative;z-index:2;}
  .page-hero h1{font-size:clamp(28px,4vw,42px);color:#fff;max-width:680px;margin-bottom:12px;}
  .page-hero p{max-width:560px;color:#C7D1D8;font-size:15.5px;}
  .breadcrumb{font-size:13px;color:#9FB0B9;margin-bottom:16px;}
  .breadcrumb a{color:var(--gold-light);}

  /* ===== VALUE / KEUNGGULAN GRID ===== */
  .value-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:22px;}
  .value-card{
    border:1px solid var(--line);border-radius:12px;padding:26px 22px;background:#fff;text-align:left;
  }
  .value-card .vicon{
    width:44px;height:44px;border-radius:9px;background:linear-gradient(135deg,var(--gold-light),var(--gold));
    display:flex;align-items:center;justify-content:center;font-family:'Fraunces',serif;font-weight:700;
    color:var(--navy-deep);margin-bottom:14px;font-size:16px;
  }
  .value-card h3{font-size:16.5px;margin-bottom:8px;}
  .value-card p{color:var(--slate);font-size:13.5px;}

  /* ===== VISI MISI ===== */
  .vm-grid{display:grid;grid-template-columns:1fr 1fr;gap:28px;}
  .vm-card{border-radius:14px;padding:34px;background:var(--cream);border:1px solid var(--line);}
  .vm-card.mission{background:var(--navy);color:#fff;border:none;}
  .vm-card.mission h3, .vm-card.mission p{color:#fff;}
  .vm-card h3{font-size:20px;margin-bottom:14px;}
  .vm-card p{color:var(--slate);font-size:15px;margin-bottom:10px;}
  .vm-card ul{padding-left:18px;}
  .vm-card li{color:#C7D1D8;font-size:14.5px;margin-bottom:8px;}
  .vm-card.mission li{color:#C7D1D8;}

  /* ===== GALERI ===== */
  .filter-bar{display:flex;gap:10px;flex-wrap:wrap;margin-bottom:36px;}
  .filter-btn{
    padding:9px 18px;border-radius:30px;border:1px solid var(--line);background:#fff;
    font-size:13.5px;font-weight:600;color:var(--slate);cursor:pointer;transition:.2s;
  }
  .filter-btn:hover, .filter-btn.active{background:var(--navy);color:#fff;border-color:var(--navy);}
  .gallery-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:20px;}
  .gallery-item{
    aspect-ratio:4/3;border-radius:12px;overflow:hidden;position:relative;
    background:linear-gradient(135deg,var(--navy) 0%,var(--navy-deep) 100%);
    display:flex;align-items:flex-end;
  }
  .gallery-item img{
    position:absolute;inset:0;width:100%;height:100%;object-fit:cover;z-index:0;
  }
  .gallery-item .gallery-cap{position:relative;z-index:1;}
  .gallery-item.alt{background:linear-gradient(135deg,#E4C77A 0%,#C9A24B 100%);}
  .gallery-cap{
    padding:16px;color:#fff;font-size:13px;font-weight:600;background:linear-gradient(0deg,rgba(9,28,41,.75),transparent);
    width:100%;
  }
  .gallery-item.alt .gallery-cap{color:var(--navy-deep);background:linear-gradient(0deg,rgba(255,255,255,.55),transparent);}

  /* ===== PORTOFOLIO DETAIL ===== */
  .proj-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:26px;}
  .proj-card{border:1px solid var(--line);border-radius:14px;overflow:hidden;background:#fff;transition:.25s;}
  .proj-card:hover{box-shadow:0 14px 34px -20px rgba(15,42,61,.4);transform:translateY(-3px);}
  .proj-thumb{aspect-ratio:16/9;background:linear-gradient(135deg,var(--navy) 0%,var(--navy-deep) 100%);position:relative;overflow:hidden;}
  .proj-thumb img{width:100%;height:100%;object-fit:cover;display:block;}
  .proj-tag{
    position:absolute;top:14px;left:14px;background:var(--gold);color:var(--navy-deep);
    font-size:11px;font-weight:700;padding:5px 12px;border-radius:20px;letter-spacing:.5px;text-transform:uppercase;
  }
  .proj-body{padding:22px 24px;}
  .proj-body h3{font-size:18px;margin-bottom:8px;}
  .proj-body p{color:var(--slate);font-size:14px;}

  /* ===== KERJA SAMA (skema) ===== */
  .scheme-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:26px;}
  .scheme-card{border:1px solid var(--line);border-radius:14px;padding:30px 26px;background:var(--cream);position:relative;}
  .scheme-card.featured{background:var(--navy);border:none;}
  .scheme-card.featured h3, .scheme-card.featured .scheme-price{color:#fff;}
  .scheme-card.featured p, .scheme-card.featured li{color:#C7D1D8;}
  .scheme-badge{
    position:absolute;top:-12px;right:24px;background:var(--gold);color:var(--navy-deep);
    font-size:11px;font-weight:700;padding:5px 14px;border-radius:20px;text-transform:uppercase;letter-spacing:.5px;
  }
  .scheme-card h3{font-size:19px;margin-bottom:10px;}
  .scheme-card p{color:var(--slate);font-size:14px;margin-bottom:18px;}
  .scheme-card ul{list-style:none;margin-bottom:24px;}
  .scheme-card li{font-size:14px;color:var(--slate);padding:7px 0;border-top:1px solid var(--line);}
  .scheme-card.featured li{border-top:1px solid rgba(255,255,255,.15);}
  .scheme-card li:first-child{border-top:none;}

  /* ===== KONTAK ===== */
  .contact-wrap{display:grid;grid-template-columns:1fr 1.15fr;gap:50px;align-items:start;}
  .contact-info-card{
    border:1px solid var(--line);border-radius:14px;padding:26px 24px;margin-bottom:16px;
    display:flex;gap:16px;align-items:flex-start;background:#fff;
  }
  .contact-icon{
    width:42px;height:42px;border-radius:9px;background:var(--navy);color:var(--gold-light);
    display:flex;align-items:center;justify-content:center;flex-shrink:0;font-size:18px;
  }
  .contact-info-card h4{font-size:14.5px;color:var(--navy);margin-bottom:4px;font-family:'Inter',sans-serif;font-weight:700;}
  .contact-info-card p, .contact-info-card a{font-size:14px;color:var(--slate);}
  .contact-form{
    background:#fff;border:1px solid var(--line);border-radius:16px;padding:36px;
  }
  .form-row{display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-bottom:16px;}
  .form-group{margin-bottom:16px;}
  .form-group label{display:block;font-size:13.5px;font-weight:600;color:var(--navy);margin-bottom:7px;}
  .form-group input, .form-group textarea, .form-group select{
    width:100%;padding:12px 14px;border:1px solid var(--line);border-radius:8px;
    font-family:'Inter',sans-serif;font-size:14.5px;color:var(--ink);background:var(--cream);
  }
  .form-group input:focus, .form-group textarea:focus, .form-group select:focus{
    outline:none;border-color:var(--gold);background:#fff;
  }
  .form-group textarea{resize:vertical;min-height:110px;}
  .form-submit{width:100%;justify-content:center;font-size:15.5px;}
  .map-box{
    aspect-ratio:16/7;border-radius:14px;overflow:hidden;border:1px solid var(--line);margin-top:8px;
  }

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
    .value-grid{grid-template-columns:repeat(2,1fr);}
    .vm-grid{grid-template-columns:1fr;}
    .gallery-grid{grid-template-columns:repeat(2,1fr);}
    .proj-grid{grid-template-columns:1fr;}
    .scheme-grid{grid-template-columns:1fr;}
    .contact-wrap{grid-template-columns:1fr;}
    .form-row{grid-template-columns:1fr;}
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
        <div class="tagline">Mitra Tenaga Kerja Profesional</div>
      </div>
    </a>
    <nav>
      <a href="index.php">Beranda</a>
      <a href="profil.php">Profil</a>
      <a href="galeri.php" class="active">Galeri</a>
      <a href="portofolio.php">Portofolio</a>
      <a href="kerjasama.php">Kerja Sama</a>
      <a href="kontak.php">Kontak</a>
    </nav>
    <button class="menu-toggle">☰</button>
  </div>
</header>

<section class="page-hero">
  <div class="page-hero-inner">
    <div class="breadcrumb"><a href="index.php">Beranda</a> / Galeri Kegiatan</div>
    <h1>Galeri Kegiatan &amp; Momen Kami</h1>
    <p>Dokumentasi kegiatan rekrutmen, penempatan tenaga kerja, dan operasional bersama klien mitra kami.</p>
  </div>
</section>

<section class="services">
  <div class="container">
    <div class="filter-bar">
      <button class="filter-btn active">Semua</button>
      <button class="filter-btn">Rekrutmen</button>
      <button class="filter-btn">Penempatan Kerja</button>
      <button class="filter-btn">Pelatihan</button>
      <button class="filter-btn">Acara Perusahaan</button>
    </div>
    <div class="gallery-grid">
      <div class="gallery-item"><img src="galeri_1.jpeg" alt="Evaluasi untuk meningkatkan kinerja dan kesigapan saat bertugas"><div class="gallery-cap">Evaluasi untuk meningkatkan kinerja dan kesigapan saat bertugas</div></div>
      <div class="gallery-item alt"><img src="galeri_2.jpeg" alt="Pembinaan satpas di wilaya polres Sragen"><div class="gallery-cap">Pembinaan satpas di wilaya polres Sragen</div></div>
      <div class="gallery-item"><img src="galeri_3.jpeg" alt="Pemberian arahan kepada anggota"><div class="gallery-cap">Pemberian arahan kepada anggota</div></div>
      <div class="gallery-item alt"><img src="galeri_4.jpeg" alt="Kunjungan Direktur PT. Rusyida Mitra Perkasa ke mitra kerja"><div class="gallery-cap">Kunjungan Direktur PT. Rusyida Mitra Perkasa ke mitra kerja</div></div>
      <div class="gallery-item"><img src="galeri_5.jpeg" alt="Apel persiapan pengamanan Nataru"><div class="gallery-cap">Apel persiapan pengamanan Nataru</div></div>
      <div class="gallery-item alt"><img src="galeri_6.jpeg" alt="Refreshment Damkar Bersama Team RMP"><div class="gallery-cap">Refreshment Damkar Bersama Team RMP</div></div>
      <div class="gallery-item"><img src="galeri_7.jpeg" alt="Seminar Pembekalan Pelayanan S5, K3 & B3"><div class="gallery-cap">Seminar Pembekalan Pelayanan S5, K3 & B3</div></div>
      <div class="gallery-item alt"><img src="galeri_8.jpeg" alt="Kunjungan Rutin Pengecekan Kualitas Kinerja"><div class="gallery-cap">Kunjungan Rutin Pengecekan Kualitas Kinerja</div></div>
      <div class="gallery-item"><img src="galeri_9.jpeg" alt="Kunjungan Rutin Pengecekan Kualitas Kinerja"><div class="gallery-cap">Kunjungan Rutin Pengecekan Kualitas Kinerja</div></div>
    </div>
    <p style="color:var(--slate);font-size:13.5px;margin-top:24px;">*Foto dokumentasi akan diperbarui secara berkala. Hubungi kami untuk melihat portofolio kegiatan lengkap.</p>
  </div>
</section>

<div class="cta-band">
  <h2>Ingin Kegiatan Bisnis Anda Bersama Kami?</h2>
  <p>Mari mulai kolaborasi dan jadi bagian dari cerita pertumbuhan berikutnya.</p>
  <a href="kontak.php" class="btn btn-primary">Konsultasi Sekarang →</a>
</div>
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
          <li>Kp. Sikunir Baru RT 03 RW 05, Kel. Plalangan, Kec. Gunungpati, Semarang</li>
          <li><a href="mailto:rusyida.rmp@gmail">rusyida.rmp@gmail</a></li>
          <li><a href="https://wa.me/+62 813-2661-9901" onclick="return openWhatsApp(event,'+62 813-2661-9901')">+62 813-2661-9901 (WhatsApp)</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <div>© 2026 PT Rusyida Mitra Perkasa. Seluruh hak cipta dilindungi.</div>
      <div>Kel. Plalangan, Kec. Gunungpati, Semarang, Jawa Tengah</div>
    </div>
  </div>
</footer>

<a href="https://wa.me/+62 813-2661-9901" class="wa-float" onclick="return openWhatsApp(event,'+62 813-2661-9901')">
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