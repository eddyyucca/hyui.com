<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Psikotes Online Premium – Tes psikologi lengkap, akurat, dan bersertikat. Ketahui potensi diri, minat karir, dan kepribadian Anda bersama Biro Psikologi Hyui.">
    <title>Psikotes Online Premium – Biro Psikologi Hyui</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

        :root {
            --yellow: #F5C842;
            --yellow-light: #FDE68A;
            --yellow-dark: #D4A017;
            --yellow-bg: #FFFBEB;
            --dark: #1a1a2e;
            --dark2: #16213e;
            --navy: #2d2b6b;
            --text: #1f1f1f;
            --text-muted: #6b6b6b;
            --white: #ffffff;
            --gray-bg: #F7F7F5;
            --border: #e8e8e0;
            --radius: 18px;
            --radius-sm: 10px;
        }

        html { scroll-behavior: smooth; }
        body { font-family: 'Poppins', sans-serif; color: var(--text); background: var(--white); overflow-x: hidden; }

        /* ===========================
           NAVBAR
        =========================== */
        .navbar {
            position: sticky;
            top: 0;
            z-index: 999;
            background: rgba(255,255,255,0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--border);
            padding: 0 32px;
            height: 68px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .nav-logo {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            color: var(--text);
        }

        .nav-logo-icon {
            width: 38px; height: 38px;
            background: var(--dark);
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            position: relative;
            flex-shrink: 0;
        }

        .nav-logo-icon::before, .nav-logo-icon::after {
            content: '';
            position: absolute;
            background: var(--yellow);
            border-radius: 50%;
        }
        .nav-logo-icon::before { width: 13px; height: 13px; top: 7px; left: 7px; }
        .nav-logo-icon::after  { width: 9px;  height: 9px;  top: 10px; right: 7px; background: var(--yellow-light); }

        .nav-logo-text {
            font-size: 1rem;
            font-weight: 800;
            letter-spacing: -0.02em;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 28px;
            list-style: none;
        }

        .nav-links a {
            text-decoration: none;
            font-size: 0.875rem;
            font-weight: 500;
            color: var(--text-muted);
            transition: color 0.2s;
        }

        .nav-links a:hover, .nav-links a.active { color: var(--text); }

        .nav-cta {
            background: var(--yellow);
            color: var(--text) !important;
            font-weight: 700 !important;
            padding: 9px 22px;
            border-radius: 50px;
            transition: background 0.2s, transform 0.2s !important;
        }

        .nav-cta:hover { background: var(--yellow-dark); transform: translateY(-1px); }

        /* ===========================
           HERO
        =========================== */
        .hero {
            background: linear-gradient(160deg, #fffdf5 0%, #fff9e0 50%, #fffbeb 100%);
            padding: 80px 24px 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: -80px; right: -120px;
            width: 500px; height: 500px;
            background: radial-gradient(circle, rgba(245,200,66,0.18) 0%, transparent 70%);
            pointer-events: none;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: var(--yellow);
            color: var(--text);
            font-size: 0.78rem;
            font-weight: 700;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            padding: 6px 18px;
            border-radius: 50px;
            margin-bottom: 24px;
            animation: fadeDown 0.5s ease forwards;
        }

        .hero-badge::before { content: '⭐'; }

        .hero-title {
            font-size: clamp(2rem, 5vw, 3.6rem);
            font-weight: 900;
            line-height: 1.1;
            letter-spacing: -0.03em;
            max-width: 780px;
            margin-bottom: 20px;
            animation: fadeDown 0.55s 0.1s ease both;
        }

        .hero-title .highlight {
            color: var(--yellow-dark);
            position: relative;
            display: inline-block;
        }

        .hero-title .highlight::after {
            content: '';
            position: absolute;
            left: 0; bottom: -4px;
            width: 100%; height: 4px;
            background: var(--yellow);
            border-radius: 4px;
        }

        .hero-sub {
            font-size: 1.05rem;
            color: var(--text-muted);
            max-width: 560px;
            line-height: 1.7;
            margin-bottom: 36px;
            animation: fadeDown 0.55s 0.2s ease both;
        }

        .hero-actions {
            display: flex;
            align-items: center;
            gap: 14px;
            flex-wrap: wrap;
            justify-content: center;
            animation: fadeDown 0.55s 0.3s ease both;
            margin-bottom: 52px;
        }

        .btn-primary {
            background: var(--yellow);
            color: var(--text);
            font-weight: 700;
            font-size: 1rem;
            padding: 14px 34px;
            border-radius: 50px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            transition: background 0.2s, transform 0.2s, box-shadow 0.2s;
            box-shadow: 0 4px 18px rgba(245,200,66,0.4);
        }

        .btn-primary:hover {
            background: var(--yellow-dark);
            transform: translateY(-2px);
            box-shadow: 0 8px 28px rgba(245,200,66,0.5);
        }

        .btn-outline {
            color: var(--text);
            font-weight: 600;
            font-size: 0.95rem;
            padding: 14px 28px;
            border-radius: 50px;
            text-decoration: none;
            border: 2px solid var(--border);
            background: transparent;
            cursor: pointer;
            transition: border-color 0.2s, background 0.2s;
        }

        .btn-outline:hover { border-color: var(--yellow); background: var(--yellow-bg); }

        /* Hero trust pills */
        .hero-trust {
            display: flex;
            align-items: center;
            gap: 24px;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px 32px;
            background: white;
            border-radius: var(--radius) var(--radius) 0 0;
            border: 1px solid var(--border);
            border-bottom: none;
            animation: fadeUp 0.55s 0.4s ease both;
        }

        .trust-pill {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--text);
        }

        .trust-pill .icon {
            width: 30px; height: 30px;
            border-radius: 8px;
            display: flex; align-items: center; justify-content: center;
            font-size: 1rem;
        }

        .trust-pill .icon.y { background: var(--yellow); }
        .trust-pill .icon.g { background: #dcfce7; }
        .trust-pill .icon.b { background: #dbeafe; }

        /* ===========================
           STATS BAR
        =========================== */
        .stats-bar {
            background: var(--dark);
            padding: 36px 24px;
        }

        .stats-inner {
            max-width: 1000px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 16px;
            text-align: center;
        }

        .stat-item {
            padding: 16px;
            border-right: 1px solid rgba(255,255,255,0.08);
        }

        .stat-item:last-child { border-right: none; }

        .stat-num {
            font-size: 2rem;
            font-weight: 900;
            color: var(--yellow);
            line-height: 1;
            margin-bottom: 6px;
        }

        .stat-label {
            font-size: 0.8rem;
            color: rgba(255,255,255,0.6);
            font-weight: 500;
        }

        /* ===========================
           SECTION SHARED
        =========================== */
        .section { padding: 80px 24px; }
        .section-alt { background: var(--gray-bg); }

        .section-header {
            text-align: center;
            max-width: 640px;
            margin: 0 auto 52px;
        }

        .section-label {
            display: inline-block;
            font-size: 0.72rem;
            font-weight: 700;
            letter-spacing: 0.16em;
            text-transform: uppercase;
            color: var(--yellow-dark);
            background: var(--yellow-bg);
            border: 1px solid var(--yellow-light);
            padding: 5px 16px;
            border-radius: 50px;
            margin-bottom: 16px;
        }

        .section-title {
            font-size: clamp(1.7rem, 3.5vw, 2.6rem);
            font-weight: 800;
            letter-spacing: -0.03em;
            line-height: 1.2;
            margin-bottom: 14px;
        }

        .section-desc {
            font-size: 1rem;
            color: var(--text-muted);
            line-height: 1.7;
        }

        /* ===========================
           WHAT IS IT
        =========================== */
        .what-grid {
            max-width: 1060px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 56px;
            align-items: center;
        }

        .what-text h2 {
            font-size: clamp(1.8rem, 3vw, 2.5rem);
            font-weight: 800;
            letter-spacing: -0.03em;
            line-height: 1.2;
            margin-bottom: 18px;
        }

        .what-text p {
            font-size: 0.97rem;
            color: var(--text-muted);
            line-height: 1.75;
            margin-bottom: 28px;
        }

        .check-list {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .check-list li {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            font-size: 0.93rem;
            font-weight: 500;
            color: var(--text);
        }

        .check-list li::before {
            content: '✓';
            flex-shrink: 0;
            width: 22px; height: 22px;
            background: var(--yellow);
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-size: 0.7rem;
            font-weight: 800;
            color: var(--text);
            margin-top: 1px;
        }

        .what-visual {
            position: relative;
        }

        .visual-card {
            background: white;
            border-radius: var(--radius);
            padding: 28px;
            box-shadow: 0 8px 40px rgba(0,0,0,0.08);
            border: 1px solid var(--border);
        }

        .visual-card-header {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 20px;
            padding-bottom: 16px;
            border-bottom: 1px solid var(--border);
        }

        .vch-icon {
            width: 44px; height: 44px;
            background: var(--yellow);
            border-radius: 12px;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.3rem;
        }

        .vch-title { font-weight: 700; font-size: 0.95rem; }
        .vch-sub { font-size: 0.78rem; color: var(--text-muted); }

        .visual-tests {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .vt-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 14px;
            background: var(--gray-bg);
            border-radius: var(--radius-sm);
        }

        .vt-name {
            display: flex; align-items: center; gap: 10px;
            font-size: 0.85rem; font-weight: 600;
        }

        .vt-name .dot {
            width: 8px; height: 8px;
            border-radius: 50%;
            background: var(--yellow);
        }

        .vt-badge {
            font-size: 0.7rem;
            font-weight: 700;
            padding: 3px 10px;
            border-radius: 50px;
            background: var(--yellow-bg);
            color: var(--yellow-dark);
        }

        .floating-badge {
            position: absolute;
            top: -18px; right: -18px;
            background: var(--dark);
            color: var(--yellow);
            border-radius: var(--radius);
            padding: 14px 18px;
            font-weight: 800;
            font-size: 1.1rem;
            box-shadow: 0 8px 30px rgba(0,0,0,0.2);
            text-align: center;
            line-height: 1.2;
        }

        .floating-badge small {
            display: block;
            font-size: 0.65rem;
            font-weight: 500;
            color: rgba(255,255,255,0.6);
            text-transform: uppercase;
            letter-spacing: 0.08em;
        }

        /* ===========================
           TES TYPES CARDS
        =========================== */
        .tests-grid {
            max-width: 1100px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .test-card {
            background: var(--white);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 28px 24px;
            transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s;
            cursor: default;
        }

        .test-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 48px rgba(0,0,0,0.1);
            border-color: var(--yellow);
        }

        .test-card-icon {
            width: 54px; height: 54px;
            border-radius: 14px;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.6rem;
            margin-bottom: 18px;
        }

        .test-card-title {
            font-size: 1rem;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .test-card-desc {
            font-size: 0.83rem;
            color: var(--text-muted);
            line-height: 1.65;
        }

        .test-card-tag {
            display: inline-block;
            margin-top: 14px;
            font-size: 0.7rem;
            font-weight: 700;
            padding: 4px 12px;
            border-radius: 50px;
            background: var(--yellow-bg);
            color: var(--yellow-dark);
        }

        /* ===========================
           HOW IT WORKS
        =========================== */
        .steps-row {
            max-width: 960px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
            position: relative;
        }

        .steps-row::before {
            content: '';
            position: absolute;
            top: 30px; left: 10%; right: 10%;
            height: 2px;
            background: repeating-linear-gradient(90deg, var(--yellow) 0, var(--yellow) 8px, transparent 8px, transparent 16px);
        }

        .step-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            position: relative;
        }

        .step-num {
            width: 60px; height: 60px;
            border-radius: 50%;
            background: var(--yellow);
            display: flex; align-items: center; justify-content: center;
            font-size: 1.3rem;
            font-weight: 900;
            color: var(--text);
            margin-bottom: 18px;
            border: 4px solid white;
            box-shadow: 0 4px 16px rgba(245,200,66,0.35);
            position: relative;
            z-index: 1;
        }

        .step-title {
            font-size: 0.93rem;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .step-desc {
            font-size: 0.8rem;
            color: var(--text-muted);
            line-height: 1.6;
        }

        /* ===========================
           PRICING
        =========================== */
        .pricing-grid {
            max-width: 960px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            align-items: start;
        }

        .price-card {
            background: white;
            border: 2px solid var(--border);
            border-radius: var(--radius);
            padding: 32px 28px;
            position: relative;
            transition: transform 0.25s, box-shadow 0.25s;
        }

        .price-card:hover { transform: translateY(-4px); box-shadow: 0 16px 48px rgba(0,0,0,0.1); }

        .price-card.featured {
            border-color: var(--yellow);
            background: var(--dark);
            color: white;
            transform: scale(1.04);
        }

        .price-card.featured:hover { transform: scale(1.04) translateY(-4px); box-shadow: 0 20px 60px rgba(0,0,0,0.2); }

        .popular-badge {
            position: absolute;
            top: -14px; left: 50%;
            transform: translateX(-50%);
            background: var(--yellow);
            color: var(--text);
            font-size: 0.72rem;
            font-weight: 800;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            padding: 5px 20px;
            border-radius: 50px;
            white-space: nowrap;
        }

        .price-tier {
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            color: var(--yellow-dark);
            margin-bottom: 10px;
        }

        .price-card.featured .price-tier { color: var(--yellow); }

        .price-name {
            font-size: 1.3rem;
            font-weight: 800;
            margin-bottom: 18px;
        }

        .price-amount {
            display: flex;
            align-items: flex-end;
            gap: 4px;
            margin-bottom: 6px;
        }

        .price-rp {
            font-size: 1rem;
            font-weight: 700;
            color: var(--text-muted);
            padding-bottom: 6px;
        }

        .price-card.featured .price-rp { color: rgba(255,255,255,0.6); }

        .price-num {
            font-size: 2.6rem;
            font-weight: 900;
            line-height: 1;
            letter-spacing: -0.04em;
        }

        .price-card.featured .price-num { color: var(--yellow); }

        .price-period {
            font-size: 0.8rem;
            color: var(--text-muted);
            margin-bottom: 24px;
            padding-bottom: 24px;
            border-bottom: 1px solid var(--border);
        }

        .price-card.featured .price-period { color: rgba(255,255,255,0.5); border-color: rgba(255,255,255,0.12); }

        .price-features {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-bottom: 28px;
        }

        .price-features li {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            font-size: 0.85rem;
        }

        .price-features li::before {
            content: '✓';
            flex-shrink: 0;
            width: 18px; height: 18px;
            background: var(--yellow);
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-size: 0.65rem;
            font-weight: 800;
            color: var(--text);
            margin-top: 1px;
        }

        .price-features li.disabled::before { background: var(--border); color: #aaa; content: '✗'; }
        .price-features li.disabled { opacity: 0.5; }

        .price-btn {
            width: 100%;
            text-align: center;
            padding: 13px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 0.9rem;
            text-decoration: none;
            display: block;
            transition: 0.2s;
        }

        .price-btn-outline {
            border: 2px solid var(--border);
            color: var(--text);
            background: transparent;
        }

        .price-btn-outline:hover { border-color: var(--yellow); background: var(--yellow-bg); }

        .price-btn-primary {
            background: var(--yellow);
            color: var(--text);
            border: 2px solid var(--yellow);
            box-shadow: 0 4px 18px rgba(245,200,66,0.5);
        }

        .price-btn-primary:hover { background: var(--yellow-dark); border-color: var(--yellow-dark); }

        /* ===========================
           TESTIMONIALS
        =========================== */
        .testi-grid {
            max-width: 1060px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .testi-card {
            background: white;
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 28px;
            transition: box-shadow 0.25s;
        }

        .testi-card:hover { box-shadow: 0 10px 36px rgba(0,0,0,0.07); }

        .testi-stars {
            display: flex;
            gap: 3px;
            margin-bottom: 14px;
        }

        .testi-stars span {
            color: var(--yellow);
            font-size: 1rem;
        }

        .testi-text {
            font-size: 0.88rem;
            line-height: 1.7;
            color: var(--text);
            margin-bottom: 20px;
            font-style: italic;
        }

        .testi-user {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .testi-avatar {
            width: 42px; height: 42px;
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-weight: 800;
            font-size: 1rem;
            flex-shrink: 0;
        }

        .testi-name { font-size: 0.88rem; font-weight: 700; }
        .testi-role { font-size: 0.76rem; color: var(--text-muted); }

        /* ===========================
           FAQ
        =========================== */
        .faq-list {
            max-width: 720px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .faq-item {
            background: white;
            border: 1px solid var(--border);
            border-radius: var(--radius-sm);
            overflow: hidden;
        }

        .faq-q {
            width: 100%;
            background: none;
            border: none;
            padding: 18px 22px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-family: 'Poppins', sans-serif;
            font-size: 0.93rem;
            font-weight: 600;
            color: var(--text);
            cursor: pointer;
            text-align: left;
            transition: background 0.2s;
            gap: 16px;
        }

        .faq-q:hover { background: var(--gray-bg); }

        .faq-icon {
            flex-shrink: 0;
            width: 26px; height: 26px;
            border-radius: 50%;
            background: var(--yellow-bg);
            border: 1px solid var(--yellow-light);
            display: flex; align-items: center; justify-content: center;
            font-size: 0.9rem;
            transition: transform 0.25s;
            color: var(--yellow-dark);
        }

        .faq-item.open .faq-icon { transform: rotate(45deg); }
        .faq-item.open { border-color: var(--yellow-light); }

        .faq-a {
            padding: 0 22px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease, padding 0.3s;
            font-size: 0.875rem;
            color: var(--text-muted);
            line-height: 1.75;
        }

        .faq-item.open .faq-a {
            max-height: 300px;
            padding: 0 22px 18px;
        }

        /* ===========================
           CTA BANNER
        =========================== */
        .cta-banner {
            background: var(--dark);
            padding: 80px 24px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .cta-banner::before {
            content: '';
            position: absolute;
            top: -60px; left: 50%;
            transform: translateX(-50%);
            width: 700px; height: 300px;
            background: radial-gradient(ellipse, rgba(245,200,66,0.15) 0%, transparent 70%);
            pointer-events: none;
        }

        .cta-banner h2 {
            font-size: clamp(1.8rem, 3.5vw, 3rem);
            font-weight: 900;
            color: white;
            letter-spacing: -0.03em;
            margin-bottom: 14px;
            position: relative;
        }

        .cta-banner h2 span { color: var(--yellow); }

        .cta-banner p {
            font-size: 1rem;
            color: rgba(255,255,255,0.6);
            margin-bottom: 36px;
            position: relative;
        }

        .cta-actions {
            display: flex;
            justify-content: center;
            gap: 14px;
            flex-wrap: wrap;
            position: relative;
        }

        .btn-yellow-lg {
            background: var(--yellow);
            color: var(--text);
            font-weight: 700;
            font-size: 1rem;
            padding: 15px 38px;
            border-radius: 50px;
            text-decoration: none;
            transition: 0.2s;
            box-shadow: 0 4px 24px rgba(245,200,66,0.4);
        }

        .btn-yellow-lg:hover { background: var(--yellow-dark); transform: translateY(-2px); }

        .btn-ghost {
            color: white;
            font-weight: 600;
            font-size: 0.95rem;
            padding: 15px 28px;
            border-radius: 50px;
            text-decoration: none;
            border: 2px solid rgba(255,255,255,0.2);
            transition: 0.2s;
        }

        .btn-ghost:hover { border-color: rgba(255,255,255,0.5); background: rgba(255,255,255,0.06); }

        /* ===========================
           FOOTER
        =========================== */
        .footer {
            background: #111;
            padding: 52px 24px 28px;
            color: rgba(255,255,255,0.5);
        }

        .footer-inner {
            max-width: 1060px;
            margin: 0 auto;
        }

        .footer-top {
            display: grid;
            grid-template-columns: 1.5fr 1fr 1fr;
            gap: 40px;
            padding-bottom: 36px;
            border-bottom: 1px solid rgba(255,255,255,0.08);
            margin-bottom: 28px;
        }

        .footer-brand .nav-logo-text { color: white; font-size: 1.1rem; }

        .footer-brand p {
            font-size: 0.82rem;
            line-height: 1.7;
            margin-top: 12px;
            max-width: 280px;
        }

        .footer-col h4 {
            font-size: 0.8rem;
            font-weight: 700;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: rgba(255,255,255,0.7);
            margin-bottom: 14px;
        }

        .footer-col a {
            display: block;
            font-size: 0.83rem;
            color: rgba(255,255,255,0.45);
            text-decoration: none;
            margin-bottom: 8px;
            transition: color 0.2s;
        }

        .footer-col a:hover { color: var(--yellow); }

        .footer-bottom {
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 0.78rem;
            flex-wrap: wrap;
            gap: 8px;
        }

        /* ===========================
           ANIMATIONS
        =========================== */
        @keyframes fadeDown {
            from { opacity: 0; transform: translateY(-20px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(24px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        /* ===========================
           RESPONSIVE
        =========================== */
        @media (max-width: 900px) {
            .what-grid { grid-template-columns: 1fr; }
            .floating-badge { top: -14px; right: 10px; }
            .tests-grid { grid-template-columns: repeat(2, 1fr); }
            .pricing-grid { grid-template-columns: 1fr; max-width: 420px; }
            .price-card.featured { transform: scale(1); }
            .testi-grid { grid-template-columns: 1fr; max-width: 500px; margin: 0 auto; }
            .steps-row { grid-template-columns: repeat(2, 1fr); }
            .steps-row::before { display: none; }
            .stats-inner { grid-template-columns: repeat(2, 1fr); }
            .footer-top { grid-template-columns: 1fr 1fr; }
        }

        @media (max-width: 600px) {
            .navbar { padding: 0 16px; }
            .nav-links { display: none; }
            .tests-grid { grid-template-columns: 1fr; }
            .footer-top { grid-template-columns: 1fr; }
            .stats-inner { grid-template-columns: repeat(2, 1fr); }
        }
    </style>
</head>
<body>

<!-- ===== NAVBAR ===== -->
<nav class="navbar">
    <a href="/" class="nav-logo">
        <div class="nav-logo-icon"></div>
        <span class="nav-logo-text">'BIRO PSIKOLOGI.</span>
    </a>
    <ul class="nav-links">
        <li><a href="/" >Beranda</a></li>
        <li><a href="/psikotes-online-premium" class="active">Psikotes Online</a></li>
        <li><a href="/konseling">Konseling</a></li>
        <li><a href="/tentang">Tentang Kami</a></li>
        <li><a href="/daftar" class="nav-cta">Mulai Sekarang</a></li>
    </ul>
</nav>

<!-- ===== HERO ===== -->
<section class="hero">
    <div class="hero-badge">Psikotes Online Premium</div>

    <h1 class="hero-title">
        Kenali Dirimu Lebih Dalam<br>
        dengan <span class="highlight">Psikotes Profesional</span>
    </h1>

    <p class="hero-sub">
        Tes psikologi lengkap, terstandarisasi, dan dianalisis langsung oleh psikolog berpengalaman. Dapatkan laporan komprehensif untuk karir, pendidikan, dan pengembangan diri.
    </p>

    <div class="hero-actions">
        <a href="/daftar" class="btn-primary" id="hero-cta-primary">Ambil Tes Sekarang →</a>
        <a href="#apa-itu" class="btn-outline" id="hero-cta-secondary">Pelajari Lebih Lanjut</a>
    </div>

    <div class="hero-trust">
        <div class="trust-pill">
            <div class="icon y">🔒</div>
            <span>100% Privasi Terjaga</span>
        </div>
        <div class="trust-pill">
            <div class="icon g">✅</div>
            <span>Dianalisis Psikolog</span>
        </div>
        <div class="trust-pill">
            <div class="icon b">📄</div>
            <span>Laporan Resmi + Sertifikat</span>
        </div>
        <div class="trust-pill">
            <div class="icon y">⚡</div>
            <span>Hasil dalam 1x24 Jam</span>
        </div>
    </div>
</section>

<!-- ===== STATS BAR ===== -->
<div class="stats-bar">
    <div class="stats-inner">
        <div class="stat-item">
            <div class="stat-num">12.000+</div>
            <div class="stat-label">Peserta Telah Mengikuti Tes</div>
        </div>
        <div class="stat-item">
            <div class="stat-num">4.9⭐</div>
            <div class="stat-label">Rating Kepuasan Peserta</div>
        </div>
        <div class="stat-item">
            <div class="stat-num">15+</div>
            <div class="stat-label">Jenis Tes Psikologi</div>
        </div>
        <div class="stat-item">
            <div class="stat-num">24 Jam</div>
            <div class="stat-label">Hasil & Laporan Terbit</div>
        </div>
    </div>
</div>

<!-- ===== APA ITU ===== -->
<section class="section" id="apa-itu">
    <div class="what-grid">
        <div class="what-text">
            <span class="section-label">Tentang Program</span>
            <h2>Apa itu Psikotes Online Premium?</h2>
            <p>
                Psikotes Online Premium adalah layanan tes psikologi digital yang dirancang untuk memberikan gambaran mendalam tentang kepribadian, kecerdasan, bakat, dan potensi karir Anda — dari mana saja, kapan saja.
            </p>
            <p>
                Setiap hasil tes dianalisis secara personal oleh psikolog klinis bersertifikat dan disajikan dalam laporan komprehensif yang mudah dipahami.
            </p>
            <ul class="check-list">
                <li>Tes terstandarisasi sesuai kaidah psikometri internasional</li>
                <li>Dianalisis & diinterpretasi oleh psikolog bersertifikat</li>
                <li>Laporan lengkap 10–20 halaman dalam PDF</li>
                <li>Sesi konsultasi hasil tes bersama psikolog</li>
                <li>Bisa digunakan untuk melamar kerja & seleksi masuk perguruan tinggi</li>
            </ul>
        </div>

        <div class="what-visual">
            <div class="floating-badge">
                Premium<br>
                <small>Terstandarisasi</small>
            </div>
            <div class="visual-card">
                <div class="visual-card-header">
                    <div class="vch-icon">🧪</div>
                    <div>
                        <div class="vch-title">Paket Psikotes Premium</div>
                        <div class="vch-sub">15 modul tes · Laporan komprehensif</div>
                    </div>
                </div>
                <div class="visual-tests">
                    <div class="vt-row">
                        <span class="vt-name"><span class="dot"></span>Tes Kepribadian (MBTI/DISC)</span>
                        <span class="vt-badge">Termasuk</span>
                    </div>
                    <div class="vt-row">
                        <span class="vt-name"><span class="dot"></span>Tes Kecerdasan (IQ)</span>
                        <span class="vt-badge">Termasuk</span>
                    </div>
                    <div class="vt-row">
                        <span class="vt-name"><span class="dot"></span>Minat Karir & Bakat</span>
                        <span class="vt-badge">Termasuk</span>
                    </div>
                    <div class="vt-row">
                        <span class="vt-name"><span class="dot"></span>Tes Kecerdasan Emosional</span>
                        <span class="vt-badge">Termasuk</span>
                    </div>
                    <div class="vt-row">
                        <span class="vt-name"><span class="dot"></span>Konsultasi Hasil (1 sesi)</span>
                        <span class="vt-badge">Termasuk</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== JENIS TES ===== -->
<section class="section section-alt" id="jenis-tes">
    <div class="section-header">
        <span class="section-label">Modul Tes</span>
        <h2 class="section-title">Tes Apa Saja yang Ada?</h2>
        <p class="section-desc">Kami menyediakan berbagai jenis tes psikologi yang komprehensif, sesuai kebutuhan dan tujuanmu.</p>
    </div>

    <div class="tests-grid">
        <div class="test-card">
            <div class="test-card-icon" style="background:#FEF9C3;">🧠</div>
            <div class="test-card-title">Tes Kecerdasan (IQ)</div>
            <div class="test-card-desc">Mengukur kemampuan kognitif, penalaran logis, verbal, numerik, dan spasial secara terstandarisasi.</div>
            <span class="test-card-tag">Kognitif</span>
        </div>
        <div class="test-card">
            <div class="test-card-icon" style="background:#DCFCE7;">🌈</div>
            <div class="test-card-title">Tes Kepribadian (MBTI / Big Five)</div>
            <div class="test-card-desc">Memahami tipe kepribadian, pola pikir, cara berinteraksi sosial, dan gaya pengambilan keputusan.</div>
            <span class="test-card-tag">Kepribadian</span>
        </div>
        <div class="test-card">
            <div class="test-card-icon" style="background:#DBEAFE;">🎯</div>
            <div class="test-card-title">Minat & Bakat Karir</div>
            <div class="test-card-desc">Temukan bidang karir yang paling sesuai dengan minat, nilai, dan potensi alami yang kamu miliki.</div>
            <span class="test-card-tag">Karir</span>
        </div>
        <div class="test-card">
            <div class="test-card-icon" style="background:#FCE7F3;">❤️</div>
            <div class="test-card-title">Kecerdasan Emosional (EQ)</div>
            <div class="test-card-desc">Mengukur kemampuan mengenali, memahami, dan mengelola emosi diri sendiri maupun orang lain.</div>
            <span class="test-card-tag">Emosional</span>
        </div>
        <div class="test-card">
            <div class="test-card-icon" style="background:#F3E8FF;">💪</div>
            <div class="test-card-title">Tes Ketahanan Mental (Resiliensi)</div>
            <div class="test-card-desc">Menilai seberapa besar kemampuanmu dalam menghadapi tekanan, kegagalan, dan situasi sulit.</div>
            <span class="test-card-tag">Mental</span>
        </div>
        <div class="test-card">
            <div class="test-card-icon" style="background:#FFF7ED;">🤝</div>
            <div class="test-card-title">Tes Gaya Belajar & Komunikasi</div>
            <div class="test-card-desc">Kenali bagaimana cara terbaik kamu belajar, bekerja dalam tim, dan berkomunikasi secara efektif.</div>
            <span class="test-card-tag">Komunikasi</span>
        </div>
    </div>
</section>

<!-- ===== HOW IT WORKS ===== -->
<section class="section" id="cara-kerja">
    <div class="section-header">
        <span class="section-label">Proses</span>
        <h2 class="section-title">Cara Kerjanya Sangat Mudah</h2>
        <p class="section-desc">Hanya 4 langkah untuk mendapatkan laporan psikologi lengkap dan profesional.</p>
    </div>

    <div class="steps-row">
        <div class="step-item">
            <div class="step-num">1</div>
            <div class="step-title">Pilih Paket</div>
            <div class="step-desc">Pilih paket psikotes yang sesuai dengan kebutuhan dan tujuanmu.</div>
        </div>
        <div class="step-item">
            <div class="step-num">2</div>
            <div class="step-title">Daftar & Bayar</div>
            <div class="step-desc">Buat akun dan selesaikan pembayaran dengan berbagai metode yang tersedia.</div>
        </div>
        <div class="step-item">
            <div class="step-num">3</div>
            <div class="step-title">Ikuti Tes Online</div>
            <div class="step-desc">Kerjakan semua modul tes secara online dari device apapun, kapanpun.</div>
        </div>
        <div class="step-item">
            <div class="step-num">4</div>
            <div class="step-title">Terima Laporan</div>
            <div class="step-desc">Dapatkan laporan komprehensif & sertifikat dalam 1×24 jam setelah tes selesai.</div>
        </div>
    </div>
</section>

<!-- ===== PRICING ===== -->
<section class="section section-alt" id="harga">
    <div class="section-header">
        <span class="section-label">Harga</span>
        <h2 class="section-title">Pilih Paket yang Tepat</h2>
        <p class="section-desc">Transparan, tanpa biaya tersembunyi. Semua paket sudah termasuk laporan resmi.</p>
    </div>

    <div class="pricing-grid">
        <!-- Basic -->
        <div class="price-card">
            <div class="price-tier">Paket Dasar</div>
            <div class="price-name">Basic</div>
            <div class="price-amount">
                <span class="price-rp">Rp</span>
                <span class="price-num">149.000</span>
            </div>
            <p class="price-period">Akses selamanya · Laporan digital</p>
            <ul class="price-features">
                <li>Tes Kepribadian (MBTI)</li>
                <li>Tes Minat Karir</li>
                <li>Laporan PDF 5–8 halaman</li>
                <li class="disabled">Tes IQ & EQ</li>
                <li class="disabled">Konsultasi Psikolog</li>
                <li class="disabled">Sertifikat Resmi</li>
            </ul>
            <a href="/daftar?paket=basic" class="price-btn price-btn-outline" id="btn-paket-basic">Pilih Basic</a>
        </div>

        <!-- Premium (featured) -->
        <div class="price-card featured">
            <div class="popular-badge">✨ Paling Populer</div>
            <div class="price-tier">Paket Unggulan</div>
            <div class="price-name">Premium</div>
            <div class="price-amount">
                <span class="price-rp">Rp</span>
                <span class="price-num">349.000</span>
            </div>
            <p class="price-period">Akses selamanya · Laporan + Konsultasi</p>
            <ul class="price-features">
                <li>Semua Tes Kepribadian</li>
                <li>Tes Kecerdasan IQ Lengkap</li>
                <li>Tes EQ & Resiliensi Mental</li>
                <li>Laporan Komprehensif 15+ Halaman</li>
                <li>1 Sesi Konsultasi Psikolog</li>
                <li>Sertifikat Resmi Berlogo</li>
            </ul>
            <a href="/daftar?paket=premium" class="price-btn price-btn-primary" id="btn-paket-premium">Pilih Premium</a>
        </div>

        <!-- Pro -->
        <div class="price-card">
            <div class="price-tier">Paket Profesional</div>
            <div class="price-name">Pro</div>
            <div class="price-amount">
                <span class="price-rp">Rp</span>
                <span class="price-num">599.000</span>
            </div>
            <p class="price-period">Akses selamanya · Full service</p>
            <ul class="price-features">
                <li>Semua modul tes (15+ tes)</li>
                <li>Laporan Komprehensif 20+ Halaman</li>
                <li>3 Sesi Konsultasi Psikolog</li>
                <li>Rekomendasi Karir Spesifik</li>
                <li>Sertifikat Resmi Bertanda Tangan</li>
                <li>Prioritas Support 24 Jam</li>
            </ul>
            <a href="/daftar?paket=pro" class="price-btn price-btn-outline" id="btn-paket-pro">Pilih Pro</a>
        </div>
    </div>
</section>

<!-- ===== TESTIMONIALS ===== -->
<section class="section" id="testimoni">
    <div class="section-header">
        <span class="section-label">Testimoni</span>
        <h2 class="section-title">Kata Mereka yang Sudah Mencoba</h2>
        <p class="section-desc">Ribuan peserta telah menemukan potensi diri mereka bersama kami.</p>
    </div>

    <div class="testi-grid">
        <div class="testi-card">
            <div class="testi-stars">
                <span>⭐</span><span>⭐</span><span>⭐</span><span>⭐</span><span>⭐</span>
            </div>
            <p class="testi-text">"Laporannya sangat detail dan akurat. Saya jadi lebih paham kenapa saya cocok di bidang kreatif, bukan teknis. Konsultasinya juga sangat membantu untuk planning karir ke depan!"</p>
            <div class="testi-user">
                <div class="testi-avatar" style="background:#FEF9C3;color:#92400E;">A</div>
                <div>
                    <div class="testi-name">Alya Ramadhani</div>
                    <div class="testi-role">Fresh Graduate, Universitas Indonesia</div>
                </div>
            </div>
        </div>

        <div class="testi-card">
            <div class="testi-stars">
                <span>⭐</span><span>⭐</span><span>⭐</span><span>⭐</span><span>⭐</span>
            </div>
            <p class="testi-text">"Saya pakai hasilnya untuk melamar kerja. HRD bilang laporan psikologinya sangat profesional dan jadi nilai plus. Worth every rupiah!"</p>
            <div class="testi-user">
                <div class="testi-avatar" style="background:#DCFCE7;color:#166534;">B</div>
                <div>
                    <div class="testi-name">Bima Santoso</div>
                    <div class="testi-role">Marketing Manager, Jakarta</div>
                </div>
            </div>
        </div>

        <div class="testi-card">
            <div class="testi-stars">
                <span>⭐</span><span>⭐</span><span>⭐</span><span>⭐</span><span>⭐</span>
            </div>
            <p class="testi-text">"Awalnya skeptis, tapi ternyata hasilnya sangat insightful. Sekarang saya lebih percaya diri dalam mengambil keputusan hidup. Terima kasih Biro Psikologi Hyui!"</p>
            <div class="testi-user">
                <div class="testi-avatar" style="background:#DBEAFE;color:#1E3A8A;">C</div>
                <div>
                    <div class="testi-name">Citra Dewi</div>
                    <div class="testi-role">Mahasiswi S2 Psikologi, Bandung</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== FAQ ===== -->
<section class="section section-alt" id="faq">
    <div class="section-header">
        <span class="section-label">FAQ</span>
        <h2 class="section-title">Pertanyaan yang Sering Diajukan</h2>
    </div>

    <div class="faq-list">
        <div class="faq-item" id="faq-1">
            <button class="faq-q" onclick="toggleFaq('faq-1')">
                Apakah hasil tes bisa digunakan untuk keperluan rekrutmen kerja?
                <span class="faq-icon">+</span>
            </button>
            <div class="faq-a">
                Ya! Laporan psikotes dari Biro Psikologi Hyui diterbitkan oleh psikolog berlisensi dan menggunakan format resmi yang diakui perusahaan. Banyak peserta kami berhasil menggunakan laporan ini dalam proses rekrutmen BUMN, swasta, maupun instansi pemerintah.
            </div>
        </div>

        <div class="faq-item" id="faq-2">
            <button class="faq-q" onclick="toggleFaq('faq-2')">
                Berapa lama waktu yang dibutuhkan untuk menyelesaikan semua tes?
                <span class="faq-icon">+</span>
            </button>
            <div class="faq-a">
                Rata-rata peserta menyelesaikan seluruh modul dalam 90–120 menit. Tes tidak harus diselesaikan sekaligus — kamu bisa menjeda dan melanjutkan kapan saja dalam masa aktif akun (30 hari).
            </div>
        </div>

        <div class="faq-item" id="faq-3">
            <button class="faq-q" onclick="toggleFaq('faq-3')">
                Apakah data saya aman dan terjaga privasinya?
                <span class="faq-icon">+</span>
            </button>
            <div class="faq-a">
                Keamanan data adalah prioritas kami. Semua data disimpan dengan enkripsi dan tidak pernah dibagikan ke pihak ketiga tanpa izin Anda. Kami mematuhi regulasi perlindungan data pribadi yang berlaku di Indonesia.
            </div>
        </div>

        <div class="faq-item" id="faq-4">
            <button class="faq-q" onclick="toggleFaq('faq-4')">
                Bagaimana cara mendapatkan laporan setelah tes selesai?
                <span class="faq-icon">+</span>
            </button>
            <div class="faq-a">
                Setelah semua modul tes selesai dikerjakan, laporan akan dianalisis oleh psikolog kami dan dikirimkan ke email Anda dalam 1×24 jam kerja. Laporan tersedia dalam format PDF berkualitas tinggi yang bisa langsung diunduh.
            </div>
        </div>

        <div class="faq-item" id="faq-5">
            <button class="faq-q" onclick="toggleFaq('faq-5')">
                Metode pembayaran apa saja yang diterima?
                <span class="faq-icon">+</span>
            </button>
            <div class="faq-a">
                Kami menerima berbagai metode pembayaran: Transfer Bank (BCA, Mandiri, BNI, BRI), GoPay, OVO, DANA, ShopeePay, QRIS, dan kartu kredit/debit Visa/Mastercard. Semua transaksi aman dan terenkripsi.
            </div>
        </div>
    </div>
</section>

<!-- ===== CTA BANNER ===== -->
<section class="cta-banner">
    <h2>Siap Memahami <span>Potensi Dirimu?</span></h2>
    <p>Bergabung bersama 12.000+ orang yang telah menemukan jati diri mereka.</p>
    <div class="cta-actions">
        <a href="/daftar" class="btn-yellow-lg" id="cta-final">Mulai Psikotes Sekarang →</a>
        <a href="/konseling" class="btn-ghost">Konsultasi Dulu</a>
    </div>
</section>

<!-- ===== FOOTER ===== -->
<footer class="footer">
    <div class="footer-inner">
        <div class="footer-top">
            <div class="footer-brand">
                <a href="/" class="nav-logo" style="margin-bottom:12px;display:inline-flex;">
                    <div class="nav-logo-icon"></div>
                    <span class="nav-logo-text" style="color:white;">'BIRO PSIKOLOGI.</span>
                </a>
                <p>Layanan psikologi profesional dan terpercaya untuk membantu Anda memahami diri, mengembangkan potensi, dan menjalani hidup lebih bermakna.</p>
            </div>
            <div class="footer-col">
                <h4>Layanan</h4>
                <a href="/psikotes-online-premium">Psikotes Online Premium</a>
                <a href="/konseling">Konseling & Terapi</a>
                <a href="/pelatihan">Pelatihan & Webinar</a>
                <a href="/kerja-sama">Kerja Sama Perusahaan</a>
            </div>
            <div class="footer-col">
                <h4>Informasi</h4>
                <a href="/tentang">Tentang Kami</a>
                <a href="/blog">Blog Psikologi</a>
                <a href="/faq">FAQ</a>
                <a href="/kontak">Hubungi Kami</a>
                <a href="/privasi">Kebijakan Privasi</a>
            </div>
        </div>
        <div class="footer-bottom">
            <span>© {{ date('Y') }} Biro Psikologi Hyui. All rights reserved.</span>
            <span>Made with ❤️ for mental health in Indonesia</span>
        </div>
    </div>
</footer>

<script>
    function toggleFaq(id) {
        const item = document.getElementById(id);
        const isOpen = item.classList.contains('open');

        // Close all
        document.querySelectorAll('.faq-item').forEach(el => el.classList.remove('open'));

        // Toggle clicked
        if (!isOpen) item.classList.add('open');
    }

    // Scroll reveal
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                e.target.style.opacity = '1';
                e.target.style.transform = 'translateY(0)';
            }
        });
    }, { threshold: 0.12 });

    document.querySelectorAll('.test-card, .testi-card, .price-card, .step-item').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(24px)';
        el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
        observer.observe(el);
    });
</script>

</body>
</html>
