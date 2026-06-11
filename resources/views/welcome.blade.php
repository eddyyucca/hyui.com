<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Biro Psikologi Hyui – Layanan tes psikologi, konseling profesional, dan pelatihan pengembangan diri terpercaya di Blitar, Jawa Timur.">
    <title>Biro Psikologi Hyui – Solusi Kesehatan Mental Terpercaya</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

        :root {
            --blue:         #2563eb;
            --blue-dark:    #1d4ed8;
            --blue-darker:  #1e3a8a;
            --blue-light:   #eff6ff;
            --blue-mid:     #bfdbfe;
            --green:        #10b981;
            --green-dark:   #059669;
            --green-light:  #ecfdf5;
            --green-mid:    #a7f3d0;
            --text-dark:    #0f172a;
            --text-mid:     #334155;
            --text-light:   #64748b;
            --bg:           #f8fafc;
            --white:        #ffffff;
            --border:       #e2e8f0;
            --radius-sm:    10px;
            --radius:       18px;
            --radius-lg:    28px;
            --shadow:       0 4px 24px rgba(0,0,0,0.07);
            --shadow-lg:    0 12px 48px rgba(0,0,0,0.12);
        }

        html { scroll-behavior: smooth; }
        body { font-family: 'Poppins', sans-serif; background: var(--white); color: var(--text-dark); overflow-x: hidden; }
        a { text-decoration: none; color: inherit; }
        img { display: block; max-width: 100%; }

        /* ── NAVBAR ── */
        .navbar {
            position: sticky; top: 0; z-index: 100;
            background: rgba(255,255,255,0.96);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--border);
            padding: 0 clamp(20px, 5vw, 80px);
            height: 68px;
            display: flex; align-items: center; justify-content: space-between;
        }
        .navbar-brand { display: flex; align-items: center; gap: 12px; }
        .navbar-brand-mark {
            width: 36px; height: 36px;
            background: var(--blue-darker);
            border-radius: 10px;
            display: flex; align-items: center; justify-content: center;
            flex-shrink: 0;
        }
        .navbar-brand-mark-inner {
            width: 14px; height: 14px;
            border: 3px solid var(--green);
            border-radius: 50%;
        }
        .navbar-brand-text { font-size: 1rem; font-weight: 800; color: var(--blue-darker); line-height: 1.1; }
        .navbar-brand-text span { color: var(--green-dark); }
        .navbar-nav { display: flex; align-items: center; gap: 28px; }
        .navbar-nav a { font-size: 0.875rem; font-weight: 500; color: var(--text-mid); transition: color .2s; }
        .navbar-nav a:hover { color: var(--blue); }
        .btn-nav {
            background: var(--blue);
            color: var(--white);
            font-weight: 700; font-size: 0.85rem;
            padding: 9px 22px; border-radius: 50px;
            transition: background .2s, transform .15s;
        }
        .btn-nav:hover { background: var(--blue-dark); transform: translateY(-1px); }
        .nav-hamburger { display: none; flex-direction: column; gap: 5px; cursor: pointer; padding: 4px; }
        .nav-hamburger span { display: block; width: 24px; height: 2px; background: var(--blue-darker); border-radius: 2px; }

        /* ── HERO ── */
        .hero {
            min-height: 88vh;
            background: linear-gradient(140deg, var(--blue-light) 0%, #f0fdf4 55%, #e0f2fe 100%);
            display: flex; align-items: center;
            padding: clamp(60px,8vh,100px) clamp(20px,5vw,80px) clamp(40px,6vh,80px);
            gap: 56px; overflow: hidden; position: relative;
        }
        .hero::before {
            content: '';
            position: absolute; top: -100px; right: -100px;
            width: 500px; height: 500px;
            background: radial-gradient(circle, rgba(16,185,129,.08), transparent 65%);
            pointer-events: none;
        }
        .hero::after {
            content: '';
            position: absolute; bottom: -60px; left: 10%;
            width: 320px; height: 320px;
            background: radial-gradient(circle, rgba(37,99,235,.07), transparent 65%);
            pointer-events: none;
        }
        .hero-content { flex: 1; max-width: 560px; position: relative; z-index: 1; }
        .hero-badge {
            display: inline-flex; align-items: center; gap: 8px;
            background: var(--white);
            border: 1px solid var(--blue-mid);
            color: var(--blue-dark); font-size: 0.78rem; font-weight: 600;
            padding: 6px 14px; border-radius: 50px;
            margin-bottom: 24px;
            animation: fadeDown .6s ease forwards;
            box-shadow: 0 2px 8px rgba(37,99,235,.1);
        }
        .hero-badge-line { width: 20px; height: 2px; background: var(--green); border-radius: 2px; }
        .hero-title {
            font-size: clamp(2rem, 4.5vw, 3.2rem);
            font-weight: 900; line-height: 1.15;
            color: var(--text-dark); margin-bottom: 20px;
            animation: fadeDown .6s ease .1s both;
        }
        .hero-title .accent-green { color: var(--green-dark); }
        .hero-title .accent-blue { color: var(--blue); }
        .hero-title .underline-green {
            position: relative; display: inline-block;
        }
        .hero-title .underline-green::after {
            content: '';
            position: absolute; bottom: 0px; left: 0; right: 0;
            height: 5px; background: var(--green-mid); border-radius: 4px; z-index: -1;
            transform: scaleX(0); transform-origin: left;
            animation: expandLine .6s ease .7s forwards;
        }
        @keyframes expandLine { to { transform: scaleX(1); } }
        .hero-desc {
            font-size: 1rem; color: var(--text-mid); line-height: 1.75;
            margin-bottom: 36px;
            animation: fadeDown .6s ease .2s both;
        }
        .hero-btns {
            display: flex; flex-wrap: wrap; gap: 14px;
            animation: fadeDown .6s ease .3s both;
        }
        .btn-primary {
            display: inline-flex; align-items: center; gap: 8px;
            background: var(--blue); color: var(--white);
            font-weight: 700; font-size: 0.92rem;
            padding: 14px 28px; border-radius: 50px;
            transition: background .2s, transform .15s, box-shadow .2s;
            box-shadow: 0 4px 16px rgba(37,99,235,.3);
        }
        .btn-primary:hover { background: var(--blue-dark); transform: translateY(-2px); box-shadow: 0 8px 24px rgba(37,99,235,.35); }
        .btn-secondary {
            display: inline-flex; align-items: center; gap: 8px;
            background: var(--green); color: var(--white);
            font-weight: 700; font-size: 0.92rem;
            padding: 14px 28px; border-radius: 50px;
            transition: background .2s, transform .15s;
            box-shadow: 0 4px 16px rgba(16,185,129,.25);
        }
        .btn-secondary:hover { background: var(--green-dark); transform: translateY(-2px); }
        .hero-trust {
            margin-top: 40px; display: flex; align-items: center; gap: 16px;
            animation: fadeDown .6s ease .4s both;
        }
        .hero-trust-avatars { display: flex; }
        .hero-trust-avatars .av {
            width: 34px; height: 34px; border-radius: 50%;
            border: 2px solid var(--white);
            font-size: 0.65rem; font-weight: 700; color: var(--white);
            display: flex; align-items: center; justify-content: center;
            margin-left: -8px;
        }
        .hero-trust-avatars .av:first-child { margin-left: 0; }
        .av.av1 { background: var(--green-dark); }
        .av.av2 { background: var(--blue); }
        .av.av3 { background: #7c3aed; }
        .hero-trust-text { font-size: 0.8rem; color: var(--text-light); line-height: 1.4; }
        .hero-trust-text strong { color: var(--text-dark); display: block; }

        .hero-visual { flex: 1; max-width: 520px; position: relative; animation: fadeLeft .8s ease .2s both; }
        .hero-img-wrap {
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-lg);
            aspect-ratio: 4/3;
            background: var(--blue-light);
        }
        .hero-img-wrap img { width: 100%; height: 100%; object-fit: cover; }
        .hero-img-badge {
            position: absolute; bottom: 20px; left: 20px;
            background: var(--white); border-radius: var(--radius-sm);
            padding: 12px 18px;
            box-shadow: var(--shadow);
            display: flex; align-items: center; gap: 12px;
        }
        .hero-img-badge-bar {
            width: 4px; height: 38px;
            background: linear-gradient(to bottom, var(--blue), var(--green));
            border-radius: 4px; flex-shrink: 0;
        }
        .hero-img-badge-text { font-size: 0.75rem; color: var(--text-light); }
        .hero-img-badge-text strong { display: block; font-size: 0.9rem; color: var(--text-dark); }
        .hero-float-card {
            position: absolute; top: -16px; right: -16px;
            background: var(--blue-darker); color: var(--white);
            border-radius: var(--radius-sm); padding: 14px 18px;
            box-shadow: var(--shadow-lg);
            font-size: 0.75rem; text-align: center; min-width: 120px;
        }
        .hero-float-card strong { display: block; font-size: 1.4rem; font-weight: 900; color: var(--green-mid); }

        /* ── STATS BAR ── */
        .stats-bar {
            background: var(--blue-darker);
            padding: 36px clamp(20px,5vw,80px);
        }
        .stats-inner {
            display: flex; flex-wrap: wrap; justify-content: center; gap: 0;
            max-width: 900px; margin: 0 auto;
        }
        .stat-item {
            flex: 1; min-width: 180px;
            text-align: center; padding: 16px 24px;
            border-right: 1px solid rgba(255,255,255,0.1);
        }
        .stat-item:last-child { border-right: none; }
        .stat-number { font-size: clamp(1.8rem, 3vw, 2.4rem); font-weight: 900; color: var(--green-mid); line-height: 1; }
        .stat-label { font-size: 0.8rem; color: rgba(255,255,255,.6); margin-top: 4px; }

        /* ── SECTION HEADER ── */
        .section { padding: clamp(60px,8vh,100px) clamp(20px,5vw,80px); }
        .section-header { text-align: center; margin-bottom: 52px; }
        .section-tag {
            display: inline-block;
            background: var(--green-light); color: var(--green-dark);
            font-size: 0.75rem; font-weight: 700; letter-spacing: .08em;
            text-transform: uppercase; padding: 5px 16px; border-radius: 50px;
            margin-bottom: 14px; border: 1px solid var(--green-mid);
        }
        .section-title {
            font-size: clamp(1.6rem, 3vw, 2.2rem);
            font-weight: 800; color: var(--text-dark); line-height: 1.25;
            margin-bottom: 14px;
        }
        .section-desc { font-size: 0.95rem; color: var(--text-light); max-width: 520px; margin: 0 auto; line-height: 1.7; }

        /* ── SERVICES ── */
        .services-bg { background: var(--bg); }
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 28px; max-width: 1100px; margin: 0 auto;
        }
        .service-card {
            background: var(--white);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            padding: 36px 28px 28px;
            display: flex; flex-direction: column;
            transition: transform .28s cubic-bezier(.34,1.56,.64,1), box-shadow .28s;
            border: 1px solid var(--border);
            position: relative; overflow: hidden;
        }
        .service-card::before {
            content: '';
            position: absolute; top: 0; left: 0; right: 0; height: 4px;
            transform: scaleX(0); transform-origin: left;
            transition: transform .3s ease;
        }
        .service-card.s1::before { background: var(--blue); }
        .service-card.s2::before { background: var(--green); }
        .service-card.s3::before { background: linear-gradient(90deg, var(--blue), var(--green)); }
        .service-card:hover::before { transform: scaleX(1); }
        .service-card:hover { transform: translateY(-8px); box-shadow: var(--shadow-lg); border-color: transparent; }
        .service-number {
            font-size: 0.7rem; font-weight: 800; letter-spacing: .14em;
            text-transform: uppercase; margin-bottom: 20px;
            display: flex; align-items: center; gap: 10px;
        }
        .service-number::after { content: ''; flex: 1; height: 1px; background: var(--border); }
        .s1 .service-number { color: var(--blue); }
        .s2 .service-number { color: var(--green-dark); }
        .s3 .service-number { color: var(--blue); }
        .service-title { font-size: 1.15rem; font-weight: 800; color: var(--text-dark); margin-bottom: 10px; }
        .service-desc { font-size: 0.875rem; color: var(--text-light); line-height: 1.7; flex: 1; margin-bottom: 24px; }
        .service-list { list-style: none; margin-bottom: 28px; display: flex; flex-direction: column; gap: 9px; }
        .service-list li {
            font-size: 0.82rem; color: var(--text-mid);
            display: flex; align-items: center; gap: 10px;
        }
        .service-list li::before {
            content: '';
            width: 6px; height: 6px; border-radius: 50%; flex-shrink: 0;
        }
        .s1 .service-list li::before { background: var(--blue); }
        .s2 .service-list li::before { background: var(--green); }
        .s3 .service-list li::before { background: var(--blue); }
        .service-cta {
            display: inline-flex; align-items: center; gap: 8px;
            font-size: 0.84rem; font-weight: 700;
            padding: 10px 22px; border-radius: 50px;
            transition: background .2s, color .2s;
            align-self: flex-start; border: 2px solid;
        }
        .s1 .service-cta { color: var(--blue); border-color: var(--blue); }
        .s1 .service-cta:hover { background: var(--blue); color: var(--white); }
        .s2 .service-cta { color: var(--green-dark); border-color: var(--green); }
        .s2 .service-cta:hover { background: var(--green); color: var(--white); }
        .s3 .service-cta { color: var(--blue); border-color: var(--blue); }
        .s3 .service-cta:hover { background: var(--blue); color: var(--white); }

        /* ── WHY US ── */
        .why-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 24px; max-width: 1000px; margin: 0 auto;
        }
        .why-card {
            background: var(--white);
            border-radius: var(--radius);
            padding: 32px 24px;
            box-shadow: var(--shadow);
            border: 1px solid var(--border);
            transition: transform .25s ease, box-shadow .25s;
        }
        .why-card:hover { transform: translateY(-6px); box-shadow: var(--shadow-lg); }
        .why-accent {
            width: 36px; height: 4px; border-radius: 4px;
            margin-bottom: 20px;
        }
        .wa-blue { background: var(--blue); }
        .wa-green { background: var(--green); }
        .wa-blue-green { background: linear-gradient(90deg, var(--blue), var(--green)); }
        .wa-green-blue { background: linear-gradient(90deg, var(--green), var(--blue)); }
        .why-title { font-size: 0.95rem; font-weight: 700; color: var(--text-dark); margin-bottom: 10px; }
        .why-desc { font-size: 0.82rem; color: var(--text-light); line-height: 1.65; }

        /* ── TESTIMONIALS ── */
        .testimonials-bg { background: var(--bg); }
        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 24px; max-width: 1000px; margin: 0 auto;
        }
        .testi-card {
            background: var(--white);
            border-radius: var(--radius);
            padding: 28px 24px;
            box-shadow: var(--shadow);
            border: 1px solid var(--border);
        }
        .testi-stars { display: flex; gap: 3px; margin-bottom: 14px; }
        .star {
            width: 14px; height: 14px;
            background: var(--green);
            clip-path: polygon(50% 0%,61% 35%,98% 35%,68% 57%,79% 91%,50% 70%,21% 91%,32% 57%,2% 35%,39% 35%);
        }
        .testi-text { font-size: 0.875rem; color: var(--text-mid); line-height: 1.7; margin-bottom: 20px; font-style: italic; }
        .testi-divider { height: 1px; background: var(--border); margin-bottom: 16px; }
        .testi-author { display: flex; align-items: center; gap: 12px; }
        .testi-av {
            width: 40px; height: 40px; border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-size: 0.8rem; font-weight: 700; color: var(--white); flex-shrink: 0;
        }
        .ta1 { background: var(--green-dark); }
        .ta2 { background: var(--blue); }
        .ta3 { background: var(--blue-darker); }
        .testi-name { font-size: 0.85rem; font-weight: 700; color: var(--text-dark); }
        .testi-role { font-size: 0.75rem; color: var(--text-light); }

        /* ── CTA BANNER ── */
        .cta-banner {
            background: linear-gradient(135deg, var(--blue-darker) 0%, #0f4c75 50%, #0d6b4f 100%);
            padding: clamp(60px,8vh,80px) clamp(20px,5vw,80px);
            text-align: center; position: relative; overflow: hidden;
        }
        .cta-banner::before {
            content: '';
            position: absolute; top: 0; left: 0; right: 0; bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            pointer-events: none;
        }
        .cta-banner h2 {
            font-size: clamp(1.6rem, 3vw, 2.4rem);
            font-weight: 900; color: var(--white); margin-bottom: 12px; position: relative;
        }
        .cta-banner h2 span { color: var(--green-mid); }
        .cta-banner p { font-size: 0.95rem; color: rgba(255,255,255,.65); margin-bottom: 32px; max-width: 480px; margin-left: auto; margin-right: auto; position: relative; }
        .cta-btns { display: flex; flex-wrap: wrap; gap: 14px; justify-content: center; position: relative; }
        .btn-wa {
            display: inline-flex; align-items: center; gap: 10px;
            background: #25D366; color: var(--white);
            font-weight: 700; font-size: 0.92rem;
            padding: 14px 28px; border-radius: 50px;
            transition: background .2s, transform .15s;
        }
        .btn-wa:hover { background: #1ebe5d; transform: translateY(-2px); }
        .btn-outline-white {
            display: inline-flex; align-items: center; gap: 8px;
            border: 2px solid rgba(255,255,255,.35); color: var(--white);
            font-weight: 600; font-size: 0.9rem;
            padding: 13px 26px; border-radius: 50px;
            transition: border-color .2s, background .2s;
        }
        .btn-outline-white:hover { border-color: var(--green-mid); background: rgba(16,185,129,.12); }

        /* ── CONTACT ── */
        .contact-section { background: var(--bg); }
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 56px; max-width: 1000px; margin: 0 auto;
            align-items: start;
        }
        .contact-info h3 { font-size: 1.5rem; font-weight: 800; color: var(--text-dark); margin-bottom: 8px; }
        .contact-info > p { font-size: 0.9rem; color: var(--text-light); margin-bottom: 32px; line-height: 1.7; }
        .contact-items { display: flex; flex-direction: column; gap: 20px; }
        .contact-item { display: flex; align-items: flex-start; gap: 14px; }
        .contact-item-bar {
            width: 3px; min-height: 44px;
            border-radius: 4px; flex-shrink: 0; margin-top: 3px;
        }
        .cb-blue { background: var(--blue); }
        .cb-green { background: var(--green); }
        .cb-blue-dark { background: var(--blue-dark); }
        .cb-green-dark { background: var(--green-dark); }
        .contact-item-text { font-size: 0.82rem; color: var(--text-light); line-height: 1.6; }
        .contact-item-text strong { display: block; font-size: 0.88rem; font-weight: 700; color: var(--text-dark); margin-bottom: 2px; }
        .contact-item-text a { color: var(--blue); font-weight: 600; transition: color .2s; }
        .contact-item-text a:hover { color: var(--green-dark); }
        .contact-map {
            border-radius: var(--radius); overflow: hidden;
            box-shadow: var(--shadow-lg); height: 360px;
            background: var(--blue-light); border: 1px solid var(--border);
        }
        .contact-map iframe { width: 100%; height: 100%; border: 0; }

        /* ── FOOTER ── */
        .footer {
            background: var(--blue-darker);
            padding: 52px clamp(20px,5vw,80px) 28px;
            color: rgba(255,255,255,.6);
        }
        .footer-inner {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 48px; max-width: 1100px; margin: 0 auto;
            padding-bottom: 44px;
            border-bottom: 1px solid rgba(255,255,255,.1);
        }
        .footer-logo { display: flex; align-items: center; gap: 12px; margin-bottom: 16px; }
        .footer-logo-mark {
            width: 32px; height: 32px; border-radius: 8px;
            background: var(--green);
            display: flex; align-items: center; justify-content: center;
        }
        .footer-logo-mark-inner {
            width: 10px; height: 10px;
            border: 2.5px solid var(--blue-darker);
            border-radius: 50%;
        }
        .footer-logo-name { font-size: 0.95rem; font-weight: 800; color: var(--white); }
        .footer-tagline { font-size: 0.82rem; line-height: 1.65; color: rgba(255,255,255,.45); max-width: 280px; margin-bottom: 24px; }
        .footer-socials { display: flex; gap: 10px; }
        .social-btn {
            width: 36px; height: 36px; border-radius: 8px;
            background: rgba(255,255,255,.08);
            display: flex; align-items: center; justify-content: center;
            color: rgba(255,255,255,.55);
            transition: background .2s, color .2s;
        }
        .social-btn:hover { background: var(--green); color: var(--white); }
        .footer-col h4 { font-size: 0.85rem; font-weight: 700; color: var(--white); margin-bottom: 18px; }
        .footer-col ul { list-style: none; display: flex; flex-direction: column; gap: 10px; }
        .footer-col ul li a { font-size: 0.82rem; color: rgba(255,255,255,.45); transition: color .2s; }
        .footer-col ul li a:hover { color: var(--green-mid); }
        .footer-bottom {
            display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 10px;
            padding-top: 24px; max-width: 1100px; margin: 0 auto;
            font-size: 0.75rem; color: rgba(255,255,255,.3);
        }

        /* ── ANIMATIONS ── */
        @keyframes fadeDown { from { opacity: 0; transform: translateY(-16px); } to { opacity: 1; transform: translateY(0); } }
        @keyframes fadeLeft { from { opacity: 0; transform: translateX(32px); } to { opacity: 1; transform: translateX(0); } }

        /* ── RESPONSIVE ── */
        @media (max-width: 900px) {
            .hero { flex-direction: column; min-height: auto; padding-top: 48px; }
            .hero-visual { max-width: 100%; width: 100%; }
            .hero-float-card { top: 12px; right: 12px; }
            .contact-grid { grid-template-columns: 1fr; }
            .footer-inner { grid-template-columns: 1fr 1fr; }
        }
        @media (max-width: 640px) {
            .navbar-nav { display: none; }
            .nav-hamburger { display: flex; }
            .stat-item { min-width: 140px; }
            .footer-inner { grid-template-columns: 1fr; }
            .footer-bottom { justify-content: center; text-align: center; }
        }
    </style>
</head>
<body>

<!-- ═══════════════ NAVBAR ═══════════════ -->
<nav class="navbar">
    <a href="/" class="navbar-brand">
        <div class="navbar-brand-mark"><div class="navbar-brand-mark-inner"></div></div>
        <div class="navbar-brand-text">BIRO PSIKOLOGI <span>HYUI</span></div>
    </a>
    <div class="navbar-nav">
        <a href="#layanan">Layanan</a>
        <a href="#tentang">Mengapa Kami</a>
        <a href="#kontak">Kontak</a>
        <a href="https://wa.me/6281296218656" target="_blank" class="btn-nav">Hubungi Kami</a>
    </div>
    <div class="nav-hamburger">
        <span></span><span></span><span></span>
    </div>
</nav>

<!-- ═══════════════ HERO ═══════════════ -->
<section class="hero">
    <div class="hero-content">
        <div class="hero-badge">
            <div class="hero-badge-line"></div>
            Layanan Psikologi Profesional di Blitar
        </div>

        <h1 class="hero-title">
            Tempat Kamu<br>
            <span class="underline-green accent-green">Tumbuh &amp; Pulih</span><br>
            Bersama Kami
        </h1>

        <p class="hero-desc">
            Biro Psikologi Hyui hadir untuk mendampingi perjalanan kesehatan mentalmu — mulai dari tes psikologi, konseling personal, hingga pelatihan pengembangan diri.
        </p>

        <div class="hero-btns">
            <a href="https://wa.me/6281296218656?text=Halo,%20saya%20ingin%20konsultasi%20dengan%20Biro%20Psikologi%20Hyui" target="_blank" class="btn-primary">
                Konsultasi Sekarang
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
            </a>
            <a href="/psikotes-online-premium" class="btn-secondary">
                Tes Psikologi Online
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
            </a>
        </div>

        <div class="hero-trust">
            <div class="hero-trust-avatars">
                <div class="av av1">RK</div>
                <div class="av av2">AD</div>
                <div class="av av3">SW</div>
            </div>
            <div class="hero-trust-text">
                <strong>Dipercaya ratusan klien</strong>
                di Blitar dan sekitarnya
            </div>
        </div>
    </div>

    <div class="hero-visual">
        <div class="hero-img-wrap">
            <img
                src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=700&q=80"
                alt="Konsultan psikologi profesional Biro Psikologi Hyui"
                loading="eager"
            >
            <div class="hero-img-badge">
                <div class="hero-img-badge-bar"></div>
                <div class="hero-img-badge-text">
                    <strong>Psikolog Berpengalaman</strong>
                    Terlatih &amp; Bersertifikat
                </div>
            </div>
        </div>
        <div class="hero-float-card">
            <strong>100%</strong>
            Rahasia &amp; Terpercaya
        </div>
    </div>
</section>

<!-- ═══════════════ STATS BAR ═══════════════ -->
<div class="stats-bar">
    <div class="stats-inner">
        <div class="stat-item">
            <div class="stat-number">500+</div>
            <div class="stat-label">Klien Terbantu</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">10+</div>
            <div class="stat-label">Tahun Pengalaman</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">3</div>
            <div class="stat-label">Layanan Utama</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">98%</div>
            <div class="stat-label">Kepuasan Klien</div>
        </div>
    </div>
</div>

<!-- ═══════════════ SERVICES ═══════════════ -->
<section id="layanan" class="section services-bg">
    <div class="section-header">
        <div class="section-tag">Layanan Kami</div>
        <h2 class="section-title">Solusi Lengkap untuk<br>Kesehatan Mentalmu</h2>
        <p class="section-desc">Kami menyediakan layanan psikologi terpadu yang profesional, terjangkau, dan terpercaya.</p>
    </div>

    <div class="services-grid">

        <div class="service-card s1">
            <div class="service-number">01 &nbsp; Biro Psikologi</div>
            <h3 class="service-title">Tes Psikologi &amp; Asesmen</h3>
            <p class="service-desc">Pengukuran psikologis terstandar untuk kebutuhan karir, pendidikan, rekrutmen, maupun pengembangan diri.</p>
            <ul class="service-list">
                <li>Tes minat &amp; bakat karir</li>
                <li>Asesmen rekrutmen karyawan</li>
                <li>Psikotes online premium</li>
                <li>Konsultasi hasil tes</li>
            </ul>
            <a href="/psikotes-online-premium" class="service-cta">
                Pelajari Lebih Lanjut
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
            </a>
        </div>

        <div class="service-card s2">
            <div class="service-number">02 &nbsp; Life Consultation</div>
            <h3 class="service-title">Konseling &amp; Life Coaching</h3>
            <p class="service-desc">Sesi konseling personal bersama profesional untuk membantu mengatasi tekanan, kecemasan, dan hambatan kehidupan.</p>
            <ul class="service-list">
                <li>Konseling individu</li>
                <li>Life coaching &amp; tujuan hidup</li>
                <li>Terapi psikologi</li>
                <li>Konseling keluarga &amp; pasangan</li>
            </ul>
            <a href="https://wa.me/6281296218656?text=Halo,%20saya%20ingin%20konseling" target="_blank" class="service-cta">
                Mulai Konseling
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
            </a>
        </div>

        <div class="service-card s3">
            <div class="service-number">03 &nbsp; Life Skills</div>
            <h3 class="service-title">Pelatihan &amp; Webinar</h3>
            <p class="service-desc">Program pengembangan diri terstruktur melalui webinar, kelas, dan workshop untuk individu maupun kelompok.</p>
            <ul class="service-list">
                <li>Webinar kesehatan mental</li>
                <li>Pelatihan soft skills</li>
                <li>Workshop manajemen stres</li>
                <li>Kelas pengembangan diri</li>
            </ul>
            <a href="https://wa.me/6281296218656?text=Halo,%20saya%20ingin%20info%20pelatihan" target="_blank" class="service-cta">
                Lihat Program
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
            </a>
        </div>

    </div>
</section>

<!-- ═══════════════ WHY US ═══════════════ -->
<section id="tentang" class="section">
    <div class="section-header">
        <div class="section-tag">Mengapa Kami</div>
        <h2 class="section-title">Dipercaya karena<br>Kualitas &amp; Integritas</h2>
        <p class="section-desc">Kami berkomitmen memberikan layanan psikologi terbaik dengan standar profesional tertinggi.</p>
    </div>

    <div class="why-grid">
        <div class="why-card">
            <div class="why-accent wa-blue"></div>
            <h4 class="why-title">Profesional &amp; Bersertifikat</h4>
            <p class="why-desc">Tim psikolog kami memiliki latar belakang pendidikan formal dan sertifikasi resmi dari lembaga terkredibel.</p>
        </div>
        <div class="why-card">
            <div class="why-accent wa-green"></div>
            <h4 class="why-title">Biaya Terjangkau</h4>
            <p class="why-desc">Layanan berkualitas tinggi dengan harga yang ramah di kantong, karena kesehatan mental adalah hak semua orang.</p>
        </div>
        <div class="why-card">
            <div class="why-accent wa-blue-green"></div>
            <h4 class="why-title">Privasi Terjaga</h4>
            <p class="why-desc">Semua informasi dan sesi konseling Anda dijaga kerahasiaannya sesuai kode etik psikologi Indonesia.</p>
        </div>
        <div class="why-card">
            <div class="why-accent wa-green-blue"></div>
            <h4 class="why-title">Respons Cepat</h4>
            <p class="why-desc">Tim kami siap merespons pertanyaan dan penjadwalan konsultasi Anda dengan cepat melalui WhatsApp.</p>
        </div>
    </div>
</section>

<!-- ═══════════════ TESTIMONIALS ═══════════════ -->
<section class="section testimonials-bg">
    <div class="section-header">
        <div class="section-tag">Testimoni</div>
        <h2 class="section-title">Apa Kata Mereka<br>Tentang Kami</h2>
        <p class="section-desc">Pengalaman nyata klien yang telah merasakan manfaat layanan Biro Psikologi Hyui.</p>
    </div>

    <div class="testimonials-grid">
        <div class="testi-card">
            <div class="testi-stars">
                <div class="star"></div><div class="star"></div><div class="star"></div><div class="star"></div><div class="star"></div>
            </div>
            <p class="testi-text">"Pelayanannya sangat profesional dan ramah. Psikolog di sini benar-benar mendengarkan dan membantu saya memahami diri sendiri lebih baik."</p>
            <div class="testi-divider"></div>
            <div class="testi-author">
                <div class="testi-av ta1">RA</div>
                <div>
                    <div class="testi-name">Rina A.</div>
                    <div class="testi-role">Klien Konseling, Blitar</div>
                </div>
            </div>
        </div>

        <div class="testi-card">
            <div class="testi-stars">
                <div class="star"></div><div class="star"></div><div class="star"></div><div class="star"></div><div class="star"></div>
            </div>
            <p class="testi-text">"Tes psikologi di sini sangat membantu saya menentukan karir yang tepat. Hasilnya detail dan dijelaskan dengan sangat jelas."</p>
            <div class="testi-divider"></div>
            <div class="testi-author">
                <div class="testi-av ta2">BS</div>
                <div>
                    <div class="testi-name">Budi S.</div>
                    <div class="testi-role">Klien Tes Psikologi, Tulungagung</div>
                </div>
            </div>
        </div>

        <div class="testi-card">
            <div class="testi-stars">
                <div class="star"></div><div class="star"></div><div class="star"></div><div class="star"></div><div class="star"></div>
            </div>
            <p class="testi-text">"Webinarnya sangat informatif dan mudah dipahami. Materi manajemen stres yang diberikan langsung bisa saya terapkan sehari-hari."</p>
            <div class="testi-divider"></div>
            <div class="testi-author">
                <div class="testi-av ta3">DW</div>
                <div>
                    <div class="testi-name">Dewi W.</div>
                    <div class="testi-role">Peserta Webinar</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════ CTA BANNER ═══════════════ -->
<section class="cta-banner">
    <h2>Siap Memulai Perjalanan <span>Menuju Diri Terbaik</span>?</h2>
    <p>Jangan tunda lagi. Hubungi kami sekarang dan mulai langkah pertama menuju kesehatan mental yang lebih baik.</p>
    <div class="cta-btns">
        <a href="https://wa.me/6281296218656?text=Halo%20Biro%20Psikologi%20Hyui,%20saya%20ingin%20konsultasi" target="_blank" class="btn-wa">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
            Chat WhatsApp Sekarang
        </a>
        <a href="#layanan" class="btn-outline-white">
            Lihat Semua Layanan
        </a>
    </div>
</section>

<!-- ═══════════════ CONTACT ═══════════════ -->
<section id="kontak" class="section contact-section">
    <div class="section-header">
        <div class="section-tag">Hubungi Kami</div>
        <h2 class="section-title">Kami Ada untuk Kamu</h2>
        <p class="section-desc">Jangan ragu menghubungi kami. Tim kami siap membantu menjawab pertanyaanmu.</p>
    </div>

    <div class="contact-grid">
        <div class="contact-info">
            <h3>Informasi Kontak</h3>
            <p>Kunjungi langsung atau hubungi kami melalui saluran di bawah ini. Kami senang mendengar dari Anda.</p>

            <div class="contact-items">
                <div class="contact-item">
                    <div class="contact-item-bar cb-blue"></div>
                    <div class="contact-item-text">
                        <strong>Alamat</strong>
                        Jl. Raya Kauman No. 34, Srengat – Blitar<br>Kode Pos 66152, Jawa Timur
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-item-bar cb-green"></div>
                    <div class="contact-item-text">
                        <strong>E-mail</strong>
                        <a href="mailto:biropsikologihyui@gmail.com">biropsikologihyui@gmail.com</a>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-item-bar cb-blue-dark"></div>
                    <div class="contact-item-text">
                        <strong>WhatsApp</strong>
                        <a href="https://wa.me/6281296218656" target="_blank">0812 9621 8656</a>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-item-bar cb-green-dark"></div>
                    <div class="contact-item-text">
                        <strong>Facebook</strong>
                        <a href="https://www.facebook.com/BiroPsikologiHyui" target="_blank">Biro Psikologi Hyui</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.3!2d112.0!3d-8.07!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zSMKwMDQnMTIuMCJTIDExMsKwMDAnMDAuMCJF!5e0!3m2!1sid!2sid!4v1!5m2!1sid!2sid"
                allowfullscreen="" loading="lazy"
                title="Lokasi Biro Psikologi Hyui – Jl. Raya Kauman No. 34, Srengat, Blitar"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>

<!-- ═══════════════ FOOTER ═══════════════ -->
<footer class="footer">
    <div class="footer-inner">
        <div class="footer-brand">
            <div class="footer-logo">
                <div class="footer-logo-mark"><div class="footer-logo-mark-inner"></div></div>
                <div class="footer-logo-name">BIRO PSIKOLOGI HYUI</div>
            </div>
            <p class="footer-tagline">
                Layanan psikologi profesional dan terpercaya untuk mendukung kesehatan mental, karir, dan pengembangan diri Anda.
            </p>
            <div class="footer-socials">
                <a href="https://wa.me/6281296218656" target="_blank" class="social-btn" title="WhatsApp">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                </a>
                <a href="https://www.facebook.com/BiroPsikologiHyui" target="_blank" class="social-btn" title="Facebook">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                </a>
                <a href="mailto:biropsikologihyui@gmail.com" class="social-btn" title="Email">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><polyline points="2,4 12,13 22,4"/></svg>
                </a>
            </div>
        </div>

        <div class="footer-col">
            <h4>Layanan</h4>
            <ul>
                <li><a href="/psikotes-online-premium">Tes Psikologi Online</a></li>
                <li><a href="https://wa.me/6281296218656">Konseling Individual</a></li>
                <li><a href="https://wa.me/6281296218656">Life Coaching</a></li>
                <li><a href="https://wa.me/6281296218656">Webinar &amp; Pelatihan</a></li>
                <li><a href="https://wa.me/6281296218656">Asesmen Rekrutmen</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h4>Informasi</h4>
            <ul>
                <li><a href="#tentang">Tentang Kami</a></li>
                <li><a href="#kontak">Hubungi Kami</a></li>
                <li><a href="https://wa.me/6281296218656">Kerja Sama</a></li>
                <li><a href="mailto:biropsikologihyui@gmail.com">Email Kami</a></li>
            </ul>
        </div>
    </div>

    <div class="footer-bottom">
        <span>© {{ date('Y') }} Biro Psikologi Hyui. All rights reserved.</span>
        <span>Jl. Raya Kauman No. 34, Srengat – Blitar 66152</span>
    </div>
</footer>

</body>
</html>
