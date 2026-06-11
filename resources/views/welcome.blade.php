<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Biro Psikologi Hyui – Layanan tes psikologi, konseling profesional, dan pelatihan pengembangan diri terpercaya di Blitar, Jawa Timur.">
<title>Biro Psikologi Hyui – Solusi Kesehatan Mental Terpercaya</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<style>
/* ─── RESET & VARIABLES ─── */
*,*::before,*::after{margin:0;padding:0;box-sizing:border-box}
:root{
  --blue:#2563eb;--blue-d:#1d4ed8;--blue-dd:#1e3a8a;--blue-l:#eff6ff;--blue-m:#bfdbfe;
  --green:#10b981;--green-d:#059669;--green-l:#ecfdf5;--green-m:#a7f3d0;
  --tx:#0f172a;--tx-m:#334155;--tx-l:#64748b;--bg:#f8fafc;--white:#fff;--bdr:#e2e8f0;
  --r:18px;--rl:28px;--rs:10px;
  --sh:0 4px 24px rgba(0,0,0,.07);--shl:0 12px 48px rgba(0,0,0,.12)
}
html{scroll-behavior:smooth}
body{font-family:'Poppins',sans-serif;background:var(--white);color:var(--tx);overflow-x:hidden}
a{text-decoration:none;color:inherit}
img{display:block;max-width:100%}
ul{list-style:none}

/* ─── NAVBAR ─── */
.nav{
  position:fixed;top:0;left:0;right:0;z-index:200;
  background:rgba(255,255,255,.96);backdrop-filter:blur(14px);
  border-bottom:1px solid var(--bdr);height:66px;
  display:flex;align-items:center;justify-content:space-between;
  padding:0 clamp(16px,5vw,72px);transition:box-shadow .3s
}
.nav.scrolled{box-shadow:0 4px 20px rgba(0,0,0,.08)}
.nav-brand{display:flex;align-items:center;gap:10px}
.nav-mark{
  width:34px;height:34px;background:var(--blue-dd);border-radius:9px;
  display:flex;align-items:center;justify-content:center;flex-shrink:0
}
.nav-mark-i{width:13px;height:13px;border:3px solid var(--green);border-radius:50%}
.nav-brand-txt{font-size:.95rem;font-weight:800;color:var(--blue-dd);line-height:1.1}
.nav-brand-txt span{color:var(--green-d)}
.nav-links{display:flex;align-items:center;gap:4px}
.nav-links a{
  font-size:.8rem;font-weight:500;color:var(--tx-m);padding:6px 11px;
  border-radius:8px;transition:color .2s,background .2s
}
.nav-links a:hover,.nav-links a.active{color:var(--blue);background:var(--blue-l)}
.nav-cta{
  background:var(--blue);color:var(--white)!important;
  font-weight:700!important;padding:8px 18px!important;
  border-radius:50px!important;background:var(--blue)!important;
  transition:background .2s,transform .15s!important
}
.nav-cta:hover{background:var(--blue-d)!important;transform:translateY(-1px)}
.nav-burger{
  display:none;flex-direction:column;gap:5px;
  cursor:pointer;padding:6px;border:none;background:none
}
.nav-burger span{display:block;width:22px;height:2px;background:var(--blue-dd);border-radius:2px;transition:.3s}
.nav-burger.open span:nth-child(1){transform:translateY(7px) rotate(45deg)}
.nav-burger.open span:nth-child(2){opacity:0}
.nav-burger.open span:nth-child(3){transform:translateY(-7px) rotate(-45deg)}

/* ─── MOBILE MENU ─── */
.mob-menu{
  display:none;position:fixed;top:66px;left:0;right:0;z-index:190;
  background:var(--white);border-bottom:1px solid var(--bdr);
  padding:16px 20px 24px;
  flex-direction:column;gap:4px;box-shadow:0 8px 32px rgba(0,0,0,.1)
}
.mob-menu.open{display:flex}
.mob-menu a{
  font-size:.9rem;font-weight:500;color:var(--tx-m);padding:10px 14px;
  border-radius:10px;transition:background .2s
}
.mob-menu a:hover{background:var(--blue-l);color:var(--blue)}
.mob-cta-wrap{margin-top:8px}
.mob-cta{
  display:block;text-align:center;background:var(--blue);
  color:var(--white)!important;font-weight:700;padding:12px;
  border-radius:12px;font-size:.9rem
}

/* ─── HERO / BERANDA ─── */
#beranda{
  min-height:92vh;padding-top:66px;
  background:linear-gradient(140deg,var(--blue-l) 0%,#f0fdf4 55%,#e0f2fe 100%);
  display:flex;align-items:center;
  padding:calc(66px + clamp(40px,6vh,80px)) clamp(16px,5vw,72px) clamp(40px,6vh,80px);
  gap:48px;overflow:hidden;position:relative
}
#beranda::before{
  content:'';position:absolute;top:-80px;right:-80px;
  width:480px;height:480px;
  background:radial-gradient(circle,rgba(16,185,129,.09),transparent 65%);
  pointer-events:none
}
.hero-txt{flex:1;max-width:560px;position:relative;z-index:1}
.hero-badge{
  display:inline-flex;align-items:center;gap:8px;
  background:var(--white);border:1px solid var(--blue-m);
  color:var(--blue-d);font-size:.75rem;font-weight:600;
  padding:6px 14px;border-radius:50px;margin-bottom:22px;
  box-shadow:0 2px 8px rgba(37,99,235,.1);
  animation:fadeD .6s ease both
}
.badge-line{width:18px;height:2px;background:var(--green);border-radius:2px}
.hero-h1{
  font-size:clamp(2rem,4.5vw,3.1rem);font-weight:900;
  line-height:1.15;color:var(--tx);margin-bottom:18px;
  animation:fadeD .6s ease .1s both
}
.hero-h1 .hl{
  color:var(--green-d);position:relative;display:inline-block
}
.hero-h1 .hl::after{
  content:'';position:absolute;bottom:1px;left:0;right:0;
  height:5px;background:var(--green-m);border-radius:4px;
  z-index:-1;transform:scaleX(0);transform-origin:left;
  animation:growX .6s ease .7s forwards
}
.hero-p{
  font-size:.97rem;color:var(--tx-m);line-height:1.75;
  margin-bottom:32px;animation:fadeD .6s ease .2s both
}
.hero-btns{display:flex;flex-wrap:wrap;gap:12px;animation:fadeD .6s ease .3s both}
.btn-p{
  display:inline-flex;align-items:center;gap:8px;
  background:var(--blue);color:var(--white);font-weight:700;font-size:.9rem;
  padding:13px 26px;border-radius:50px;
  box-shadow:0 4px 16px rgba(37,99,235,.3);
  transition:background .2s,transform .15s,box-shadow .2s
}
.btn-p:hover{background:var(--blue-d);transform:translateY(-2px);box-shadow:0 8px 24px rgba(37,99,235,.35)}
.btn-s{
  display:inline-flex;align-items:center;gap:8px;
  background:var(--green);color:var(--white);font-weight:700;font-size:.9rem;
  padding:13px 26px;border-radius:50px;
  box-shadow:0 4px 16px rgba(16,185,129,.25);
  transition:background .2s,transform .15s
}
.btn-s:hover{background:var(--green-d);transform:translateY(-2px)}
.hero-trust{display:flex;align-items:center;gap:14px;margin-top:32px;animation:fadeD .6s ease .4s both}
.avs{display:flex}
.av{
  width:32px;height:32px;border-radius:50%;border:2px solid var(--white);
  font-size:.62rem;font-weight:700;color:var(--white);
  display:flex;align-items:center;justify-content:center;margin-left:-8px
}
.av:first-child{margin-left:0}
.av1{background:var(--green-d)}.av2{background:var(--blue)}.av3{background:#7c3aed}
.trust-txt{font-size:.78rem;color:var(--tx-l);line-height:1.4}
.trust-txt strong{display:block;color:var(--tx)}
.hero-vis{flex:1;max-width:520px;position:relative;animation:fadeL .8s ease .2s both}
.hero-img-wrap{
  border-radius:var(--rl);overflow:hidden;
  box-shadow:var(--shl);aspect-ratio:4/3;background:var(--blue-l)
}
.hero-img-wrap img{width:100%;height:100%;object-fit:cover}
.hero-badge-img{
  position:absolute;bottom:18px;left:18px;
  background:var(--white);border-radius:var(--rs);padding:11px 16px;
  box-shadow:var(--sh);display:flex;align-items:center;gap:10px
}
.badge-bar{
  width:3px;height:36px;
  background:linear-gradient(to bottom,var(--blue),var(--green));
  border-radius:4px;flex-shrink:0
}
.badge-info{font-size:.72rem;color:var(--tx-l)}
.badge-info strong{display:block;font-size:.85rem;color:var(--tx)}
.float-card{
  position:absolute;top:-14px;right:-14px;
  background:var(--blue-dd);color:var(--white);
  border-radius:var(--rs);padding:12px 16px;
  box-shadow:var(--shl);font-size:.72rem;text-align:center;min-width:110px
}
.float-card strong{display:block;font-size:1.3rem;font-weight:900;color:var(--green-m)}

/* ─── STATS BAR ─── */
.stats-bar{background:var(--blue-dd);padding:32px clamp(16px,5vw,72px)}
.stats-inner{
  display:flex;flex-wrap:wrap;justify-content:center;
  max-width:900px;margin:0 auto
}
.stat{flex:1;min-width:160px;text-align:center;padding:14px 20px;border-right:1px solid rgba(255,255,255,.1)}
.stat:last-child{border-right:none}
.stat-n{font-size:clamp(1.7rem,3vw,2.3rem);font-weight:900;color:var(--green-m);line-height:1}
.stat-l{font-size:.78rem;color:rgba(255,255,255,.6);margin-top:4px}

/* ─── SECTION COMMONS ─── */
.sec{padding:clamp(56px,8vh,96px) clamp(16px,5vw,72px)}
.sec-alt{background:var(--bg)}
.sec-hd{text-align:center;margin-bottom:48px}
.sec-tag{
  display:inline-block;background:var(--green-l);color:var(--green-d);
  font-size:.72rem;font-weight:700;letter-spacing:.08em;text-transform:uppercase;
  padding:5px 14px;border-radius:50px;margin-bottom:12px;border:1px solid var(--green-m)
}
.sec-tag.blue{background:var(--blue-l);color:var(--blue-d);border-color:var(--blue-m)}
.sec-h2{
  font-size:clamp(1.55rem,3vw,2.1rem);font-weight:800;
  color:var(--tx);line-height:1.25;margin-bottom:12px
}
.sec-p{font-size:.92rem;color:var(--tx-l);max-width:500px;margin:0 auto;line-height:1.7}
.mw{max-width:1100px;margin:0 auto}

/* ─── LAYANAN TABS ─── */
.tab-bar{display:flex;gap:8px;justify-content:center;margin-bottom:40px;flex-wrap:wrap}
.tab-btn{
  padding:10px 22px;border-radius:50px;font-size:.85rem;font-weight:600;
  border:2px solid var(--bdr);background:var(--white);color:var(--tx-m);
  cursor:pointer;transition:.2s
}
.tab-btn.active{background:var(--blue);color:var(--white);border-color:var(--blue)}
.tab-btn:hover:not(.active){border-color:var(--blue);color:var(--blue)}
.tab-panel{display:none;animation:fadeIn .35s ease}
.tab-panel.active{display:block}
.tab-content{
  display:grid;grid-template-columns:1fr 1fr;gap:48px;
  align-items:center;max-width:1000px;margin:0 auto
}
.tab-img{border-radius:var(--r);overflow:hidden;box-shadow:var(--shl);aspect-ratio:4/3}
.tab-img img{width:100%;height:100%;object-fit:cover}
.tab-txt h3{font-size:1.4rem;font-weight:800;color:var(--tx);margin-bottom:10px}
.tab-txt .sub{font-size:.85rem;color:var(--green-d);font-weight:600;margin-bottom:14px}
.tab-txt p{font-size:.9rem;color:var(--tx-m);line-height:1.75;margin-bottom:22px}
.tab-list{display:flex;flex-direction:column;gap:10px;margin-bottom:26px}
.tab-list li{
  display:flex;align-items:flex-start;gap:10px;
  font-size:.85rem;color:var(--tx-m);line-height:1.5
}
.tab-list li::before{
  content:'';width:7px;height:7px;border-radius:50%;
  background:var(--blue);flex-shrink:0;margin-top:5px
}
.tab-price{
  display:inline-block;background:var(--green-l);
  color:var(--green-d);font-weight:700;font-size:.85rem;
  padding:8px 18px;border-radius:50px;border:1px solid var(--green-m);
  margin-bottom:20px
}

/* ─── TENTANG KAMI ─── */
.about-grid{display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:start;max-width:1000px;margin:0 auto}
.about-img{position:relative}
.about-img-main{border-radius:var(--r);overflow:hidden;box-shadow:var(--shl);aspect-ratio:3/4}
.about-img-main img{width:100%;height:100%;object-fit:cover}
.about-img-float{
  position:absolute;bottom:-20px;right:-20px;
  background:var(--white);border-radius:var(--r);padding:20px;
  box-shadow:var(--shl);width:180px
}
.aif-n{font-size:1.8rem;font-weight:900;color:var(--blue);line-height:1}
.aif-l{font-size:.75rem;color:var(--tx-l);margin-top:2px}
.about-txt h3{font-size:1.5rem;font-weight:800;color:var(--tx);margin-bottom:14px}
.about-txt > p{font-size:.9rem;color:var(--tx-m);line-height:1.75;margin-bottom:28px}
.vm-grid{display:grid;grid-template-columns:1fr 1fr;gap:14px;margin-bottom:28px}
.vm-card{background:var(--white);border-radius:var(--rs);padding:16px;border:1px solid var(--bdr)}
.vm-card h4{font-size:.85rem;font-weight:700;color:var(--blue);margin-bottom:6px}
.vm-card p{font-size:.78rem;color:var(--tx-l);line-height:1.55}
.timeline{display:flex;flex-direction:column;gap:0}
.tl-item{display:flex;gap:16px;padding-bottom:20px;position:relative}
.tl-item:last-child{padding-bottom:0}
.tl-left{display:flex;flex-direction:column;align-items:center;flex-shrink:0;width:36px}
.tl-dot{
  width:14px;height:14px;border-radius:50%;
  background:var(--blue);border:2px solid var(--blue-l);flex-shrink:0
}
.tl-line{flex:1;width:2px;background:var(--bdr);margin-top:4px}
.tl-item:last-child .tl-line{display:none}
.tl-yr{font-size:.72rem;font-weight:700;color:var(--blue);margin-top:-2px}
.tl-desc{font-size:.82rem;color:var(--tx-m);line-height:1.55;padding-top:1px}

/* ─── TIM PSIKOLOG ─── */
.team-grid{
  display:grid;grid-template-columns:repeat(auto-fill,minmax(260px,1fr));
  gap:24px;max-width:1100px;margin:0 auto
}
.team-card{
  background:var(--white);border-radius:var(--r);overflow:hidden;
  box-shadow:var(--sh);border:1px solid var(--bdr);
  transition:transform .25s,box-shadow .25s
}
.team-card:hover{transform:translateY(-6px);box-shadow:var(--shl)}
.team-img{aspect-ratio:3/3.2;overflow:hidden;background:var(--blue-l)}
.team-img img{width:100%;height:100%;object-fit:cover;object-position:top;transition:transform .4s}
.team-card:hover .team-img img{transform:scale(1.04)}
.team-info{padding:20px}
.team-name{font-size:1rem;font-weight:700;color:var(--tx);margin-bottom:3px}
.team-gelar{font-size:.78rem;color:var(--blue);font-weight:600;margin-bottom:8px}
.team-spec{font-size:.78rem;color:var(--tx-l);line-height:1.5;margin-bottom:14px}
.team-tag{
  display:inline-block;background:var(--green-l);color:var(--green-d);
  font-size:.7rem;font-weight:600;padding:3px 10px;border-radius:50px;
  border:1px solid var(--green-m)
}

/* ─── GALERI ─── */
.gallery-grid{
  columns:3;column-gap:16px;max-width:1100px;margin:0 auto
}
.gal-item{
  break-inside:avoid;margin-bottom:16px;
  border-radius:var(--rs);overflow:hidden;
  cursor:pointer;position:relative;
}
.gal-item img{
  width:100%;display:block;
  transition:transform .4s,filter .3s
}
.gal-item::after{
  content:'';position:absolute;inset:0;
  background:rgba(30,58,138,.0);transition:background .3s
}
.gal-item:hover img{transform:scale(1.04)}
.gal-item:hover::after{background:rgba(30,58,138,.2)}
/* Lightbox */
.lightbox{
  display:none;position:fixed;inset:0;z-index:500;
  background:rgba(0,0,0,.92);align-items:center;justify-content:center
}
.lightbox.open{display:flex}
.lb-img{max-height:88vh;max-width:88vw;border-radius:12px;object-fit:contain}
.lb-close{
  position:fixed;top:20px;right:24px;font-size:2rem;
  color:var(--white);cursor:pointer;line-height:1;opacity:.8;
  transition:opacity .2s;background:none;border:none
}
.lb-close:hover{opacity:1}
.lb-prev,.lb-next{
  position:fixed;top:50%;transform:translateY(-50%);
  background:rgba(255,255,255,.12);color:var(--white);
  border:none;cursor:pointer;font-size:1.5rem;
  width:48px;height:48px;border-radius:50%;
  display:flex;align-items:center;justify-content:center;
  transition:background .2s
}
.lb-prev{left:16px}.lb-next{right:16px}
.lb-prev:hover,.lb-next:hover{background:rgba(255,255,255,.25)}
.lb-cap{
  position:fixed;bottom:20px;left:50%;transform:translateX(-50%);
  color:rgba(255,255,255,.7);font-size:.8rem;font-family:'Poppins',sans-serif
}

/* ─── ARTIKEL ─── */
.artikel-grid{
  display:grid;grid-template-columns:repeat(auto-fill,minmax(300px,1fr));
  gap:28px;max-width:1100px;margin:0 auto
}
.art-card{
  background:var(--white);border-radius:var(--r);overflow:hidden;
  box-shadow:var(--sh);border:1px solid var(--bdr);
  transition:transform .25s,box-shadow .25s;cursor:pointer
}
.art-card:hover{transform:translateY(-6px);box-shadow:var(--shl)}
.art-img{aspect-ratio:16/9;overflow:hidden;background:var(--blue-l)}
.art-img img{width:100%;height:100%;object-fit:cover;transition:transform .4s}
.art-card:hover .art-img img{transform:scale(1.04)}
.art-body{padding:22px}
.art-cat{
  display:inline-block;font-size:.68rem;font-weight:700;
  text-transform:uppercase;letter-spacing:.08em;
  color:var(--blue);background:var(--blue-l);
  padding:3px 10px;border-radius:50px;margin-bottom:10px
}
.art-title{font-size:1rem;font-weight:700;color:var(--tx);margin-bottom:8px;line-height:1.4}
.art-excerpt{font-size:.82rem;color:var(--tx-l);line-height:1.65;margin-bottom:16px}
.art-meta{display:flex;align-items:center;justify-content:space-between}
.art-date{font-size:.72rem;color:var(--tx-l)}
.art-read{
  font-size:.78rem;font-weight:600;color:var(--blue);
  display:flex;align-items:center;gap:4px
}
/* Article Modal */
.art-modal{
  display:none;position:fixed;inset:0;z-index:400;
  background:rgba(15,23,42,.7);align-items:center;justify-content:center;
  padding:20px
}
.art-modal.open{display:flex}
.art-modal-box{
  background:var(--white);border-radius:var(--r);
  max-width:680px;width:100%;max-height:88vh;overflow-y:auto
}
.art-modal-img{aspect-ratio:16/8;overflow:hidden}
.art-modal-img img{width:100%;height:100%;object-fit:cover}
.art-modal-body{padding:28px 32px 32px}
.art-modal-cat{font-size:.72rem;font-weight:700;text-transform:uppercase;color:var(--blue);margin-bottom:10px}
.art-modal-title{font-size:1.3rem;font-weight:800;color:var(--tx);margin-bottom:16px;line-height:1.3}
.art-modal-meta{font-size:.78rem;color:var(--tx-l);margin-bottom:20px}
.art-modal-content p{font-size:.9rem;color:var(--tx-m);line-height:1.8;margin-bottom:14px}
.art-modal-content h4{font-size:1rem;font-weight:700;color:var(--tx);margin:20px 0 8px}
.modal-close-btn{
  float:right;background:none;border:none;font-size:1.4rem;
  cursor:pointer;color:var(--tx-l);line-height:1;padding:4px
}

/* ─── FAQ ─── */
.faq-wrap{max-width:720px;margin:0 auto;display:flex;flex-direction:column;gap:10px}
.faq-item{
  background:var(--white);border-radius:var(--rs);border:1px solid var(--bdr);
  overflow:hidden;transition:box-shadow .2s
}
.faq-item.open{box-shadow:var(--sh);border-color:var(--blue-m)}
.faq-q{
  display:flex;align-items:center;justify-content:space-between;
  padding:18px 22px;cursor:pointer;gap:16px;
  font-size:.9rem;font-weight:600;color:var(--tx);
  background:none;border:none;width:100%;text-align:left
}
.faq-q:hover{background:var(--blue-l)}
.faq-icon{
  width:24px;height:24px;border-radius:50%;
  background:var(--blue-l);display:flex;align-items:center;justify-content:center;
  flex-shrink:0;transition:transform .3s,background .2s
}
.faq-icon svg{width:12px;height:12px;stroke:var(--blue);transition:.3s}
.faq-item.open .faq-icon{transform:rotate(180deg);background:var(--blue)}
.faq-item.open .faq-icon svg{stroke:var(--white)}
.faq-a{
  max-height:0;overflow:hidden;transition:max-height .35s ease,padding .3s;
  font-size:.87rem;color:var(--tx-m);line-height:1.75
}
.faq-a.open{max-height:300px;padding:0 22px 18px}

/* ─── CTA BANNER ─── */
.cta-sec{
  background:linear-gradient(135deg,var(--blue-dd) 0%,#0f4c75 50%,#0d6b4f 100%);
  padding:clamp(56px,8vh,80px) clamp(16px,5vw,72px);
  text-align:center;position:relative;overflow:hidden
}
.cta-sec h2{font-size:clamp(1.5rem,3vw,2.3rem);font-weight:900;color:var(--white);margin-bottom:10px}
.cta-sec h2 span{color:var(--green-m)}
.cta-sec p{font-size:.92rem;color:rgba(255,255,255,.65);margin-bottom:28px;max-width:440px;margin-left:auto;margin-right:auto}
.cta-btns{display:flex;flex-wrap:wrap;gap:12px;justify-content:center}
.btn-wa{
  display:inline-flex;align-items:center;gap:10px;
  background:#25D366;color:var(--white);font-weight:700;font-size:.9rem;
  padding:13px 26px;border-radius:50px;transition:background .2s,transform .15s
}
.btn-wa:hover{background:#1ebe5d;transform:translateY(-2px)}
.btn-wh{
  display:inline-flex;align-items:center;gap:8px;
  border:2px solid rgba(255,255,255,.35);color:var(--white);
  font-weight:600;font-size:.88rem;padding:12px 24px;border-radius:50px;
  transition:border-color .2s,background .2s
}
.btn-wh:hover{border-color:var(--green-m);background:rgba(16,185,129,.12)}

/* ─── KONTAK ─── */
.contact-grid{
  display:grid;grid-template-columns:1fr 1.2fr;
  gap:52px;max-width:1000px;margin:0 auto;align-items:start
}
.contact-h3{font-size:1.4rem;font-weight:800;color:var(--tx);margin-bottom:8px}
.contact-p{font-size:.88rem;color:var(--tx-l);margin-bottom:28px;line-height:1.7}
.cinfo-list{display:flex;flex-direction:column;gap:18px;margin-bottom:28px}
.cinfo{display:flex;align-items:flex-start;gap:14px}
.cinfo-bar{width:3px;min-height:42px;border-radius:4px;flex-shrink:0;margin-top:3px}
.cb1{background:var(--blue)}.cb2{background:var(--green)}.cb3{background:var(--blue-d)}.cb4{background:var(--green-d)}
.cinfo-txt{font-size:.8rem;color:var(--tx-l);line-height:1.6}
.cinfo-txt strong{display:block;font-size:.87rem;font-weight:700;color:var(--tx);margin-bottom:1px}
.cinfo-txt a{color:var(--blue);font-weight:600;transition:color .2s}
.cinfo-txt a:hover{color:var(--green-d)}
.contact-form{display:flex;flex-direction:column;gap:14px}
.form-row{display:grid;grid-template-columns:1fr 1fr;gap:14px}
.form-group{display:flex;flex-direction:column;gap:6px}
.form-group label{font-size:.78rem;font-weight:600;color:var(--tx-m)}
.form-group input,
.form-group textarea{
  padding:11px 14px;border:1.5px solid var(--bdr);border-radius:10px;
  font-family:'Poppins',sans-serif;font-size:.85rem;color:var(--tx);
  background:var(--white);transition:border-color .2s,box-shadow .2s;resize:none
}
.form-group input:focus,
.form-group textarea:focus{
  outline:none;border-color:var(--blue);
  box-shadow:0 0 0 3px rgba(37,99,235,.1)
}
.form-group textarea{min-height:110px}
.form-submit{
  background:var(--blue);color:var(--white);
  font-weight:700;font-size:.9rem;padding:13px 28px;
  border-radius:50px;border:none;cursor:pointer;
  display:flex;align-items:center;justify-content:center;gap:8px;
  align-self:flex-start;
  transition:background .2s,transform .15s
}
.form-submit:hover{background:var(--blue-d);transform:translateY(-1px)}
.contact-map{border-radius:var(--r);overflow:hidden;box-shadow:var(--shl);height:360px;border:1px solid var(--bdr)}
.contact-map iframe{width:100%;height:100%;border:0}

/* ─── FOOTER ─── */
.footer{background:var(--blue-dd);padding:48px clamp(16px,5vw,72px) 24px;color:rgba(255,255,255,.6)}
.footer-inner{
  display:grid;grid-template-columns:2fr 1fr 1fr;
  gap:44px;max-width:1100px;margin:0 auto;
  padding-bottom:40px;border-bottom:1px solid rgba(255,255,255,.1)
}
.f-logo{display:flex;align-items:center;gap:10px;margin-bottom:14px}
.f-logo-mark{
  width:30px;height:30px;border-radius:8px;background:var(--green);
  display:flex;align-items:center;justify-content:center
}
.f-logo-mark-i{width:9px;height:9px;border:2.5px solid var(--blue-dd);border-radius:50%}
.f-logo-name{font-size:.9rem;font-weight:800;color:var(--white)}
.f-tagline{font-size:.8rem;line-height:1.65;color:rgba(255,255,255,.45);max-width:270px;margin-bottom:22px}
.f-socials{display:flex;gap:8px}
.f-soc{
  width:34px;height:34px;border-radius:8px;background:rgba(255,255,255,.08);
  display:flex;align-items:center;justify-content:center;color:rgba(255,255,255,.55);
  transition:background .2s,color .2s
}
.f-soc:hover{background:var(--green);color:var(--white)}
.f-col h4{font-size:.83rem;font-weight:700;color:var(--white);margin-bottom:16px}
.f-col ul{display:flex;flex-direction:column;gap:9px}
.f-col ul li a{font-size:.8rem;color:rgba(255,255,255,.45);transition:color .2s}
.f-col ul li a:hover{color:var(--green-m)}
.footer-bottom{
  display:flex;justify-content:space-between;align-items:center;
  flex-wrap:wrap;gap:8px;padding-top:22px;
  max-width:1100px;margin:0 auto;font-size:.73rem;color:rgba(255,255,255,.28)
}

/* ─── FLOATING BUTTONS ─── */
.fab-wrap{position:fixed;right:20px;bottom:24px;z-index:300;display:flex;flex-direction:column;gap:10px;align-items:flex-end}
.fab-wa{
  width:52px;height:52px;border-radius:50%;background:#25D366;
  display:flex;align-items:center;justify-content:center;
  box-shadow:0 4px 16px rgba(37,211,102,.4);transition:transform .2s
}
.fab-wa:hover{transform:scale(1.1)}
.fab-top{
  width:40px;height:40px;border-radius:50%;background:var(--blue);
  display:none;align-items:center;justify-content:center;
  box-shadow:0 4px 14px rgba(37,99,235,.3);cursor:pointer;border:none;
  color:var(--white);transition:transform .2s
}
.fab-top.show{display:flex}
.fab-top:hover{transform:scale(1.1)}

/* ─── ANIMATIONS ─── */
@keyframes fadeD{from{opacity:0;transform:translateY(-14px)}to{opacity:1;transform:translateY(0)}}
@keyframes fadeL{from{opacity:0;transform:translateX(28px)}to{opacity:1;transform:translateX(0)}}
@keyframes fadeIn{from{opacity:0;transform:translateY(8px)}to{opacity:1;transform:translateY(0)}}
@keyframes growX{to{transform:scaleX(1)}}
.reveal{opacity:0;transform:translateY(24px);transition:opacity .6s ease,transform .6s ease}
.reveal.visible{opacity:1;transform:translateY(0)}

/* ─── RESPONSIVE ─── */
@media(max-width:960px){
  .nav-links{display:none}
  .nav-burger{display:flex}
  #beranda{flex-direction:column;padding-top:calc(66px + 40px)}
  .hero-vis{max-width:100%;width:100%}
  .float-card{top:10px;right:10px}
  .tab-content{grid-template-columns:1fr}
  .about-grid{grid-template-columns:1fr}
  .contact-grid{grid-template-columns:1fr}
  .footer-inner{grid-template-columns:1fr 1fr}
  .gallery-grid{columns:2}
}
@media(max-width:600px){
  .gallery-grid{columns:1}
  .form-row{grid-template-columns:1fr}
  .footer-inner{grid-template-columns:1fr}
  .footer-bottom{justify-content:center;text-align:center}
  .vm-grid{grid-template-columns:1fr}
  .stats-inner .stat{min-width:130px}
}
</style>
</head>
<body>

<!-- ═══ NAVBAR ═══ -->
<nav class="nav" id="mainNav">
  <a href="#beranda" class="nav-brand">
    <div class="nav-mark"><div class="nav-mark-i"></div></div>
    <div class="nav-brand-txt">BIRO PSIKOLOGI <span>HYUI</span></div>
  </a>
  <div class="nav-links">
    <a href="#beranda">Beranda</a>
    <a href="#layanan">Layanan</a>
    <a href="#tentang">Tentang Kami</a>
    <a href="#tim">Tim Psikolog</a>
    <a href="#galeri">Galeri</a>
    <a href="#artikel">Artikel</a>
    <a href="#faq">FAQ</a>
    <a href="#kontak" class="nav-cta">Kontak</a>
  </div>
  <button class="nav-burger" id="burger" aria-label="Menu">
    <span></span><span></span><span></span>
  </button>
</nav>

<!-- ═══ MOBILE MENU ═══ -->
<div class="mob-menu" id="mobMenu">
  <a href="#beranda">Beranda</a>
  <a href="#layanan">Layanan</a>
  <a href="#tentang">Tentang Kami</a>
  <a href="#tim">Tim Psikolog</a>
  <a href="#galeri">Galeri</a>
  <a href="#artikel">Artikel</a>
  <a href="#faq">FAQ</a>
  <a href="#kontak">Kontak</a>
  <div class="mob-cta-wrap">
    <a href="https://wa.me/6281296218656" target="_blank" class="mob-cta">Hubungi via WhatsApp</a>
  </div>
</div>

<!-- ═══ BERANDA ═══ -->
<section id="beranda">
  <div class="hero-txt">
    <div class="hero-badge">
      <div class="badge-line"></div>
      Layanan Psikologi Profesional di Blitar
    </div>
    <h1 class="hero-h1">
      Tempat Kamu<br>
      <span class="hl">Tumbuh &amp; Pulih</span><br>
      Bersama Kami
    </h1>
    <p class="hero-p">Biro Psikologi Hyui hadir untuk mendampingi perjalanan kesehatan mentalmu — mulai dari tes psikologi, konseling personal, hingga pelatihan pengembangan diri.</p>
    <div class="hero-btns">
      <a href="https://wa.me/6281296218656?text=Halo,%20saya%20ingin%20konsultasi" target="_blank" class="btn-p">
        Konsultasi Sekarang
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
      </a>
      <a href="#layanan" class="btn-s">
        Lihat Layanan
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
      </a>
    </div>
    <div class="hero-trust">
      <div class="avs">
        <div class="av av1">RK</div>
        <div class="av av2">AD</div>
        <div class="av av3">SW</div>
      </div>
      <div class="trust-txt">
        <strong>Dipercaya ratusan klien</strong>
        di Blitar dan sekitarnya
      </div>
    </div>
  </div>
  <div class="hero-vis">
    <div class="hero-img-wrap">
      <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=700&q=80" alt="Psikolog profesional Biro Psikologi Hyui" loading="eager">
      <div class="hero-badge-img">
        <div class="badge-bar"></div>
        <div class="badge-info">
          <strong>Psikolog Berpengalaman</strong>
          Terlatih &amp; Bersertifikat
        </div>
      </div>
    </div>
    <div class="float-card">
      <strong>100%</strong>
      Rahasia &amp; Terpercaya
    </div>
  </div>
</section>

<!-- ═══ STATS BAR ═══ -->
<div class="stats-bar">
  <div class="stats-inner">
    <div class="stat"><div class="stat-n">500+</div><div class="stat-l">Klien Terbantu</div></div>
    <div class="stat"><div class="stat-n">10+</div><div class="stat-l">Tahun Pengalaman</div></div>
    <div class="stat"><div class="stat-n">6</div><div class="stat-l">Psikolog Profesional</div></div>
    <div class="stat"><div class="stat-n">98%</div><div class="stat-l">Kepuasan Klien</div></div>
  </div>
</div>

<!-- ═══ LAYANAN ═══ -->
<section id="layanan" class="sec sec-alt reveal">
  <div class="sec-hd">
    <div class="sec-tag">Layanan Kami</div>
    <h2 class="sec-h2">Solusi Lengkap untuk Kesehatan Mentalmu</h2>
    <p class="sec-p">Pilih layanan yang paling sesuai dengan kebutuhanmu dan mulai perjalanan menuju diri yang lebih sehat.</p>
  </div>
  <div class="tab-bar">
    <button class="tab-btn active" data-tab="t1">Tes Psikologi</button>
    <button class="tab-btn" data-tab="t2">Konseling &amp; Coaching</button>
    <button class="tab-btn" data-tab="t3">Pelatihan &amp; Webinar</button>
  </div>

  <!-- Tab 1 -->
  <div class="tab-panel active" id="t1">
    <div class="tab-content mw">
      <div class="tab-img">
        <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&w=700&q=80" alt="Tes psikologi profesional" loading="lazy">
      </div>
      <div class="tab-txt">
        <div class="sub">01 — Biro Psikologi</div>
        <h3>Tes Psikologi &amp; Asesmen Profesional</h3>
        <p>Layanan tes psikologi terstandar yang dirancang untuk membantu Anda mengenal diri lebih dalam — mulai dari potensi karir, kepribadian, hingga kecerdasan dan bakat.</p>
        <div class="tab-price">Mulai dari Rp 150.000</div>
        <ul class="tab-list">
          <li>Tes minat &amp; bakat untuk pemilihan karir yang tepat</li>
          <li>Asesmen psikologi rekrutmen karyawan perusahaan</li>
          <li>Psikotes online premium dengan laporan lengkap</li>
          <li>Tes kepribadian (MBTI, DISC, Big Five)</li>
          <li>Tes kecerdasan dan kemampuan kognitif</li>
          <li>Konsultasi mendalam atas hasil tes</li>
        </ul>
        <a href="https://wa.me/6281296218656?text=Halo,%20saya%20ingin%20info%20tes%20psikologi" target="_blank" class="btn-p" style="font-size:.85rem;padding:10px 22px">
          Daftar Sekarang
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
        </a>
      </div>
    </div>
  </div>

  <!-- Tab 2 -->
  <div class="tab-panel" id="t2">
    <div class="tab-content mw">
      <div class="tab-img">
        <img src="https://images.unsplash.com/photo-1551836022-4c4c79ecde51?auto=format&fit=crop&w=700&q=80" alt="Sesi konseling psikologi" loading="lazy">
      </div>
      <div class="tab-txt">
        <div class="sub">02 — Life Consultation</div>
        <h3>Konseling Psikologi &amp; Life Coaching</h3>
        <p>Sesi konseling personal bersama psikolog profesional untuk membantu Anda melewati tekanan hidup, mengelola emosi, dan membangun kualitas hidup yang lebih baik.</p>
        <div class="tab-price">Mulai dari Rp 200.000 / sesi</div>
        <ul class="tab-list">
          <li>Konseling individual untuk kecemasan, stres, dan depresi</li>
          <li>Life coaching untuk menetapkan dan mencapai tujuan hidup</li>
          <li>Terapi kognitif perilaku (CBT)</li>
          <li>Konseling pasangan &amp; keluarga</li>
          <li>Bisa dilakukan tatap muka maupun online</li>
          <li>Sesi privasi terjamin sesuai kode etik psikologi</li>
        </ul>
        <a href="https://wa.me/6281296218656?text=Halo,%20saya%20ingin%20konseling" target="_blank" class="btn-p" style="font-size:.85rem;padding:10px 22px">
          Jadwalkan Sesi
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
        </a>
      </div>
    </div>
  </div>

  <!-- Tab 3 -->
  <div class="tab-panel" id="t3">
    <div class="tab-content mw">
      <div class="tab-img">
        <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=700&q=80" alt="Pelatihan dan webinar psikologi" loading="lazy">
      </div>
      <div class="tab-txt">
        <div class="sub">03 — Life Skills</div>
        <h3>Pelatihan, Webinar &amp; Workshop</h3>
        <p>Program pengembangan diri terstruktur yang dirancang untuk individu, komunitas, maupun organisasi. Dipandu oleh psikolog berpengalaman dengan metode yang praktis dan aplikatif.</p>
        <div class="tab-price">Mulai dari Rp 75.000 / peserta</div>
        <ul class="tab-list">
          <li>Webinar kesehatan mental &amp; self development</li>
          <li>Pelatihan soft skills untuk dunia kerja</li>
          <li>Workshop manajemen stres &amp; emosi</li>
          <li>Training untuk instansi, sekolah, dan perusahaan</li>
          <li>Kelas pengembangan diri online &amp; offline</li>
          <li>Sertifikat keikutsertaan resmi</li>
        </ul>
        <a href="https://wa.me/6281296218656?text=Halo,%20saya%20ingin%20info%20pelatihan" target="_blank" class="btn-p" style="font-size:.85rem;padding:10px 22px">
          Lihat Program
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ═══ TENTANG KAMI ═══ -->
<section id="tentang" class="sec reveal">
  <div class="sec-hd">
    <div class="sec-tag blue">Tentang Kami</div>
    <h2 class="sec-h2">Mengenal Biro Psikologi Hyui</h2>
    <p class="sec-p">Lembaga psikologi profesional yang berdedikasi untuk kesehatan mental masyarakat Blitar dan sekitarnya.</p>
  </div>
  <div class="about-grid mw">
    <div class="about-img">
      <div class="about-img-main">
        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=600&q=80" alt="Kantor Biro Psikologi Hyui" loading="lazy">
      </div>
      <div class="about-img-float">
        <div class="aif-n">10+</div>
        <div class="aif-l">Tahun melayani dengan dedikasi</div>
      </div>
    </div>
    <div class="about-txt">
      <h3>Hadir untuk Mendampingi Perjalananmu</h3>
      <p>Biro Psikologi Hyui adalah lembaga layanan psikologi profesional yang berlokasi di Srengat, Blitar. Kami hadir dengan misi menyediakan layanan psikologi yang terjangkau, berkualitas, dan mudah diakses oleh seluruh lapisan masyarakat.</p>
      <p>Didukung oleh tim psikolog bersertifikat, kami telah melayani ratusan klien mulai dari anak-anak, remaja, dewasa, hingga kalangan profesional dan korporasi.</p>
      <div class="vm-grid">
        <div class="vm-card">
          <h4>Visi</h4>
          <p>Menjadi lembaga psikologi terpercaya dan terdepan dalam mendukung kesehatan mental masyarakat Indonesia.</p>
        </div>
        <div class="vm-card">
          <h4>Misi</h4>
          <p>Menyediakan layanan psikologi profesional, terjangkau, dan beretika untuk seluruh lapisan masyarakat.</p>
        </div>
      </div>
      <div class="timeline">
        <div class="tl-item">
          <div class="tl-left"><div class="tl-dot"></div><div class="tl-line"></div></div>
          <div><div class="tl-yr">2013</div><div class="tl-desc">Biro Psikologi Hyui didirikan di Srengat, Blitar dengan fokus asesmen psikologi.</div></div>
        </div>
        <div class="tl-item">
          <div class="tl-left"><div class="tl-dot"></div><div class="tl-line"></div></div>
          <div><div class="tl-yr">2016</div><div class="tl-desc">Memperluas layanan ke konseling individual dan pelatihan pengembangan diri.</div></div>
        </div>
        <div class="tl-item">
          <div class="tl-left"><div class="tl-dot"></div><div class="tl-line"></div></div>
          <div><div class="tl-yr">2020</div><div class="tl-desc">Meluncurkan layanan konseling &amp; psikotes online untuk menjangkau lebih banyak klien.</div></div>
        </div>
        <div class="tl-item">
          <div class="tl-left"><div class="tl-dot"></div><div class="tl-line"></div></div>
          <div><div class="tl-yr">2024</div><div class="tl-desc">Lebih dari 500 klien terbantu, terus berkembang melayani Blitar dan seluruh Indonesia.</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ TIM PSIKOLOG ═══ -->
<section id="tim" class="sec sec-alt reveal">
  <div class="sec-hd">
    <div class="sec-tag">Tim Profesional</div>
    <h2 class="sec-h2">Bertemu dengan Tim Psikolog Kami</h2>
    <p class="sec-p">Psikolog berpengalaman dan bersertifikat, siap mendampingi setiap langkah perjalananmu.</p>
  </div>
  <div class="team-grid">

    <div class="team-card">
      <div class="team-img">
        <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?auto=format&fit=crop&w=400&q=80" alt="Dr. Sarah Rahayu" loading="lazy">
      </div>
      <div class="team-info">
        <div class="team-name">Dr. Sarah Rahayu</div>
        <div class="team-gelar">S.Psi., M.Psi., Psikolog</div>
        <div class="team-spec">Spesialisasi konseling klinis, manajemen stres, dan kecemasan. Pengalaman 12 tahun mendampingi individu &amp; keluarga.</div>
        <span class="team-tag">Psikologi Klinis</span>
      </div>
    </div>

    <div class="team-card">
      <div class="team-img">
        <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?auto=format&fit=crop&w=400&q=80" alt="Ahmad Fauzi" loading="lazy">
      </div>
      <div class="team-info">
        <div class="team-name">Ahmad Fauzi, M.Psi</div>
        <div class="team-gelar">S.Psi., M.Psi., Psikolog</div>
        <div class="team-spec">Ahli psikologi industri &amp; organisasi, konsultasi karir, dan pengembangan SDM korporasi. Pengalaman 9 tahun.</div>
        <span class="team-tag">Psikologi Industri</span>
      </div>
    </div>

    <div class="team-card">
      <div class="team-img">
        <img src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?auto=format&fit=crop&w=400&q=80" alt="Dewi Kusuma" loading="lazy">
      </div>
      <div class="team-info">
        <div class="team-name">Dewi Kusuma, M.Psi</div>
        <div class="team-gelar">S.Psi., M.Psi., Psikolog</div>
        <div class="team-spec">Berfokus pada psikologi anak &amp; remaja, tumbuh kembang, dan masalah belajar. Pengalaman 8 tahun.</div>
        <span class="team-tag">Psikologi Anak</span>
      </div>
    </div>

    <div class="team-card">
      <div class="team-img">
        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=400&q=80" alt="Rizky Pratama" loading="lazy">
      </div>
      <div class="team-info">
        <div class="team-name">Rizky Pratama, M.Psi</div>
        <div class="team-gelar">S.Psi., M.Psi., Psikolog</div>
        <div class="team-spec">Konselor bersertifikat untuk relasi interpersonal, komunikasi, dan pengembangan potensi diri. 7 tahun pengalaman.</div>
        <span class="team-tag">Konseling &amp; Coaching</span>
      </div>
    </div>

    <div class="team-card">
      <div class="team-img">
        <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&w=400&q=80" alt="Anisa Putri" loading="lazy">
      </div>
      <div class="team-info">
        <div class="team-name">Anisa Putri, M.Psi</div>
        <div class="team-gelar">S.Psi., M.Psi., Psikolog</div>
        <div class="team-spec">Psikolog industri &amp; fasilitator pelatihan soft skills untuk perusahaan, institusi, dan komunitas. Pengalaman 6 tahun.</div>
        <span class="team-tag">Pelatihan &amp; Fasilitasi</span>
      </div>
    </div>

    <div class="team-card">
      <div class="team-img">
        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=400&q=80" alt="Hendra Wijaya" loading="lazy">
      </div>
      <div class="team-info">
        <div class="team-name">Hendra Wijaya, M.Psi</div>
        <div class="team-gelar">S.Psi., M.Psi., Psikolog</div>
        <div class="team-spec">Life coach bersertifikat, spesialisasi motivasi, kepemimpinan, dan manajemen perubahan. 10 tahun pengalaman.</div>
        <span class="team-tag">Life Coaching</span>
      </div>
    </div>

  </div>
</section>

<!-- ═══ GALERI ═══ -->
<section id="galeri" class="sec reveal">
  <div class="sec-hd">
    <div class="sec-tag blue">Galeri</div>
    <h2 class="sec-h2">Sekilas Aktivitas Kami</h2>
    <p class="sec-p">Momen dan kegiatan Biro Psikologi Hyui dalam melayani dan mendampingi klien.</p>
  </div>
  <div class="gallery-grid mw" id="galleryGrid">
    <div class="gal-item" data-src="https://images.unsplash.com/photo-1582213782179-e0d53f98f2ca?auto=format&fit=crop&w=900&q=85" data-cap="Sesi diskusi tim psikolog">
      <img src="https://images.unsplash.com/photo-1582213782179-e0d53f98f2ca?auto=format&fit=crop&w=500&q=75" alt="Tim psikolog berdiskusi" loading="lazy">
    </div>
    <div class="gal-item" data-src="https://images.unsplash.com/photo-1516302752625-fcc3c50ae61f?auto=format&fit=crop&w=900&q=85" data-cap="Sesi konseling individual">
      <img src="https://images.unsplash.com/photo-1516302752625-fcc3c50ae61f?auto=format&fit=crop&w=500&q=75" alt="Sesi konseling" loading="lazy">
    </div>
    <div class="gal-item" data-src="https://images.unsplash.com/photo-1571019614242-c5c5dee9f50b?auto=format&fit=crop&w=900&q=85" data-cap="Ruang konsultasi nyaman">
      <img src="https://images.unsplash.com/photo-1571019614242-c5c5dee9f50b?auto=format&fit=crop&w=500&q=75" alt="Ruang konsultasi" loading="lazy">
    </div>
    <div class="gal-item" data-src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?auto=format&fit=crop&w=900&q=85" data-cap="Workshop pengembangan diri">
      <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?auto=format&fit=crop&w=500&q=75" alt="Workshop pengembangan diri" loading="lazy">
    </div>
    <div class="gal-item" data-src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&w=900&q=85" data-cap="Proses asesmen psikologi">
      <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&w=500&q=75" alt="Asesmen psikologi" loading="lazy">
    </div>
    <div class="gal-item" data-src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=900&q=85" data-cap="Kegiatan tim bersama">
      <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=500&q=75" alt="Tim Hyui" loading="lazy">
    </div>
    <div class="gal-item" data-src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=900&q=85" data-cap="Fasilitas ruang tunggu">
      <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=500&q=75" alt="Fasilitas kantor" loading="lazy">
    </div>
    <div class="gal-item" data-src="https://images.unsplash.com/photo-1573497019236-17f8177b81e8?auto=format&fit=crop&w=900&q=85" data-cap="Sesi webinar online">
      <img src="https://images.unsplash.com/photo-1573497019236-17f8177b81e8?auto=format&fit=crop&w=500&q=75" alt="Webinar online" loading="lazy">
    </div>
    <div class="gal-item" data-src="https://images.unsplash.com/photo-1529333166437-7750a6dd5a70?auto=format&fit=crop&w=900&q=85" data-cap="Seminar kesehatan mental">
      <img src="https://images.unsplash.com/photo-1529333166437-7750a6dd5a70?auto=format&fit=crop&w=500&q=75" alt="Seminar kesehatan mental" loading="lazy">
    </div>
  </div>
</section>

<!-- Lightbox -->
<div class="lightbox" id="lightbox">
  <button class="lb-close" id="lbClose">&#x2715;</button>
  <button class="lb-prev" id="lbPrev">&#8249;</button>
  <img class="lb-img" id="lbImg" src="" alt="">
  <button class="lb-next" id="lbNext">&#8250;</button>
  <div class="lb-cap" id="lbCap"></div>
</div>

<!-- ═══ ARTIKEL ═══ -->
<section id="artikel" class="sec sec-alt reveal">
  <div class="sec-hd">
    <div class="sec-tag">Artikel</div>
    <h2 class="sec-h2">Wawasan Kesehatan Mental</h2>
    <p class="sec-p">Artikel informatif dari tim psikolog kami untuk membantu kamu memahami diri dan kesehatan mental lebih baik.</p>
  </div>
  <div class="artikel-grid mw">

    <div class="art-card" onclick="openArticle('a1')">
      <div class="art-img">
        <img src="https://images.unsplash.com/photo-1499209974431-9dddcece7f88?auto=format&fit=crop&w=600&q=75" alt="Burnout dan cara mengatasinya" loading="lazy">
      </div>
      <div class="art-body">
        <span class="art-cat">Kesehatan Mental</span>
        <div class="art-title">Mengenali Tanda-tanda Burnout dan Cara Mengatasinya</div>
        <div class="art-excerpt">Burnout bukan sekadar kelelahan biasa. Pelajari ciri-ciri burnout dan langkah konkret yang bisa kamu ambil untuk pulih...</div>
        <div class="art-meta">
          <span class="art-date">10 Mei 2025</span>
          <span class="art-read">Baca Artikel <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg></span>
        </div>
      </div>
    </div>

    <div class="art-card" onclick="openArticle('a2')">
      <div class="art-img">
        <img src="https://images.unsplash.com/photo-1506126613408-eca07ce68773?auto=format&fit=crop&w=600&q=75" alt="Mindfulness dan meditasi" loading="lazy">
      </div>
      <div class="art-body">
        <span class="art-cat">Self Development</span>
        <div class="art-title">Meditasi Mindfulness: Kunci Kesehatan Mental Modern</div>
        <div class="art-excerpt">Mindfulness bukan tren semata. Penelitian ilmiah membuktikan manfaatnya untuk mengurangi stres dan meningkatkan fokus...</div>
        <div class="art-meta">
          <span class="art-date">2 April 2025</span>
          <span class="art-read">Baca Artikel <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg></span>
        </div>
      </div>
    </div>

    <div class="art-card" onclick="openArticle('a3')">
      <div class="art-img">
        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=600&q=75" alt="Tes psikologi untuk karir" loading="lazy">
      </div>
      <div class="art-body">
        <span class="art-cat">Karir &amp; Pendidikan</span>
        <div class="art-title">Memilih Karir yang Tepat dengan Bantuan Tes Psikologi</div>
        <div class="art-excerpt">Tes psikologi bisa menjadi peta jalan menuju karir impianmu. Kenali potensi dan minat terdalam melalui asesmen yang tepat...</div>
        <div class="art-meta">
          <span class="art-date">15 Maret 2025</span>
          <span class="art-read">Baca Artikel <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg></span>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- Article Modals -->
<div class="art-modal" id="modal-a1">
  <div class="art-modal-box">
    <div class="art-modal-img">
      <img src="https://images.unsplash.com/photo-1499209974431-9dddcece7f88?auto=format&fit=crop&w=800&q=80" alt="Burnout">
    </div>
    <div class="art-modal-body">
      <button class="modal-close-btn" onclick="closeArticle('a1')">&#x2715;</button>
      <div class="art-modal-cat">Kesehatan Mental</div>
      <h2 class="art-modal-title">Mengenali Tanda-tanda Burnout dan Cara Mengatasinya</h2>
      <div class="art-modal-meta">Oleh Tim Psikolog Hyui &nbsp;·&nbsp; 10 Mei 2025 &nbsp;·&nbsp; 5 menit baca</div>
      <div class="art-modal-content">
        <p>Burnout adalah kondisi kelelahan fisik, emosional, dan mental yang disebabkan oleh tekanan berkepanjangan — terutama di lingkungan kerja. Berbeda dari kelelahan biasa, burnout tidak hilang hanya dengan tidur atau berlibur singkat.</p>
        <h4>Tanda-tanda Burnout</h4>
        <p>Gejala burnout meliputi: merasa kelelahan ekstrem setiap hari, kehilangan motivasi dan semangat kerja, mudah tersinggung, menurunnya produktivitas, serta munculnya perasaan sinis terhadap pekerjaan yang dulu dicintai.</p>
        <h4>Penyebab Utama</h4>
        <p>Burnout sering dipicu oleh beban kerja berlebihan, kurangnya kontrol atas pekerjaan, minimnya penghargaan, hubungan kerja yang tidak sehat, atau ketidaksesuaian antara nilai pribadi dan nilai organisasi.</p>
        <h4>Cara Mengatasi Burnout</h4>
        <p>Langkah pertama adalah mengakui kondisi ini. Selanjutnya: istirahat yang cukup, bicara dengan orang terpercaya, tetapkan batasan yang sehat di tempat kerja, dan pertimbangkan konseling profesional untuk mendapatkan strategi pemulihan yang tepat.</p>
        <p>Jika Anda merasa mengalami gejala burnout, tim psikolog kami siap membantu. Hubungi kami untuk menjadwalkan sesi konseling.</p>
      </div>
    </div>
  </div>
</div>

<div class="art-modal" id="modal-a2">
  <div class="art-modal-box">
    <div class="art-modal-img">
      <img src="https://images.unsplash.com/photo-1506126613408-eca07ce68773?auto=format&fit=crop&w=800&q=80" alt="Mindfulness">
    </div>
    <div class="art-modal-body">
      <button class="modal-close-btn" onclick="closeArticle('a2')">&#x2715;</button>
      <div class="art-modal-cat">Self Development</div>
      <h2 class="art-modal-title">Meditasi Mindfulness: Kunci Kesehatan Mental Modern</h2>
      <div class="art-modal-meta">Oleh Tim Psikolog Hyui &nbsp;·&nbsp; 2 April 2025 &nbsp;·&nbsp; 4 menit baca</div>
      <div class="art-modal-content">
        <p>Mindfulness adalah kemampuan untuk hadir sepenuhnya di momen saat ini — tanpa menghakimi pikiran atau perasaan yang muncul. Praktik ini telah terbukti secara ilmiah efektif mengurangi stres, kecemasan, dan gejala depresi.</p>
        <h4>Manfaat Ilmiah Mindfulness</h4>
        <p>Penelitian menunjukkan bahwa praktik mindfulness secara rutin dapat menurunkan kadar kortisol (hormon stres), meningkatkan fokus dan konsentrasi, memperbaiki kualitas tidur, serta memperkuat sistem imun tubuh.</p>
        <h4>Cara Memulai Mindfulness</h4>
        <p>Tidak perlu waktu lama. Mulailah dengan 5–10 menit per hari: duduk tenang, fokus pada napas, dan setiap kali pikiran mengembara, kembalikan perhatian ke napas tanpa menghakimi diri sendiri.</p>
        <h4>Mindfulness dalam Terapi</h4>
        <p>Mindfulness Based Cognitive Therapy (MBCT) adalah pendekatan terapi yang menggabungkan mindfulness dengan teknik kognitif. Di Biro Psikologi Hyui, kami mengintegrasikan pendekatan ini dalam sesi konseling untuk hasil yang lebih optimal.</p>
      </div>
    </div>
  </div>
</div>

<div class="art-modal" id="modal-a3">
  <div class="art-modal-box">
    <div class="art-modal-img">
      <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=800&q=80" alt="Karir dan tes psikologi">
    </div>
    <div class="art-modal-body">
      <button class="modal-close-btn" onclick="closeArticle('a3')">&#x2715;</button>
      <div class="art-modal-cat">Karir &amp; Pendidikan</div>
      <h2 class="art-modal-title">Memilih Karir yang Tepat dengan Bantuan Tes Psikologi</h2>
      <div class="art-modal-meta">Oleh Tim Psikolog Hyui &nbsp;·&nbsp; 15 Maret 2025 &nbsp;·&nbsp; 5 menit baca</div>
      <div class="art-modal-content">
        <p>Banyak orang merasa "salah jurusan" atau "salah karir" karena keputusan yang diambil tanpa pemahaman mendalam tentang diri sendiri. Tes psikologi hadir sebagai alat bantu ilmiah untuk memetakan potensi, minat, dan kepribadian Anda.</p>
        <h4>Jenis Tes yang Membantu Pemilihan Karir</h4>
        <p>Tes minat Holland (RIASEC) membantu mengidentifikasi jenis lingkungan kerja yang paling cocok. Tes kepribadian MBTI atau Big Five membantu memahami gaya kerja dan interaksi sosial. Tes bakat kognitif mengukur kekuatan intelektual yang bisa dioptimalkan.</p>
        <h4>Proses di Biro Psikologi Hyui</h4>
        <p>Proses asesmen karir kami meliputi: pengisian tes terstandar, skoring dan interpretasi oleh psikolog, serta sesi konsultasi mendalam untuk mendiskusikan hasil dan rekomendasi karir yang paling sesuai.</p>
        <h4>Untuk Siapa?</h4>
        <p>Layanan ini cocok untuk pelajar SMA/mahasiswa yang menentukan jurusan, fresh graduate yang mencari arah karir, hingga profesional yang ingin beralih bidang dengan lebih terencana.</p>
      </div>
    </div>
  </div>
</div>

<!-- ═══ FAQ ═══ -->
<section id="faq" class="sec reveal">
  <div class="sec-hd">
    <div class="sec-tag blue">FAQ</div>
    <h2 class="sec-h2">Pertanyaan yang Sering Ditanyakan</h2>
    <p class="sec-p">Temukan jawaban atas pertanyaan umum seputar layanan dan psikologi.</p>
  </div>
  <div class="faq-wrap">

    <div class="faq-item">
      <button class="faq-q">
        Apa itu biro psikologi dan apa bedanya dengan klinik psikiatri?
        <div class="faq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
      </button>
      <div class="faq-a">Biro psikologi berfokus pada layanan asesmen, konseling, dan pelatihan oleh psikolog. Psikolog tidak meresepkan obat. Sementara klinik psikiatri ditangani dokter spesialis jiwa (psikiater) yang dapat meresepkan obat untuk kondisi mental yang memerlukan penanganan medis. Keduanya saling melengkapi.</div>
    </div>

    <div class="faq-item">
      <button class="faq-q">
        Apakah sesi konseling bersifat rahasia?
        <div class="faq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
      </button>
      <div class="faq-a">Ya, sepenuhnya rahasia. Seluruh informasi yang Anda sampaikan dalam sesi konseling dijaga kerahasiaannya sesuai Kode Etik Psikologi Indonesia. Tidak ada informasi yang dibagikan kepada pihak ketiga tanpa izin tertulis dari klien.</div>
    </div>

    <div class="faq-item">
      <button class="faq-q">
        Berapa biaya tes psikologi dan konseling?
        <div class="faq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
      </button>
      <div class="faq-a">Biaya tes psikologi mulai dari Rp 150.000 tergantung jenis dan paket yang dipilih. Sesi konseling mulai dari Rp 200.000 per sesi. Kami menyediakan berbagai paket yang dapat disesuaikan dengan kebutuhan dan kemampuan finansial Anda. Hubungi kami untuk informasi harga terkini.</div>
    </div>

    <div class="faq-item">
      <button class="faq-q">
        Bagaimana cara mendaftar atau membuat janji?
        <div class="faq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
      </button>
      <div class="faq-a">Sangat mudah! Hubungi kami melalui WhatsApp di 0812 9621 8656, email di biropsikologihyui@gmail.com, atau isi formulir kontak di halaman ini. Tim kami akan merespons dalam 1x24 jam untuk menjadwalkan sesi sesuai waktu Anda.</div>
    </div>

    <div class="faq-item">
      <button class="faq-q">
        Apakah konseling bisa dilakukan secara online?
        <div class="faq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
      </button>
      <div class="faq-a">Ya! Kami menyediakan layanan konseling online melalui video call maupun voice call. Layanan online memudahkan klien yang berada di luar Blitar atau yang memiliki keterbatasan waktu untuk tetap mendapatkan pendampingan psikologis yang berkualitas.</div>
    </div>

    <div class="faq-item">
      <button class="faq-q">
        Berapa lama durasi satu sesi konseling?
        <div class="faq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
      </button>
      <div class="faq-a">Satu sesi konseling berlangsung sekitar 50–60 menit. Frekuensi dan total sesi yang dibutuhkan bervariasi tergantung kondisi dan tujuan masing-masing klien. Psikolog akan mendiskusikan rencana layanan yang paling sesuai bersama Anda.</div>
    </div>

    <div class="faq-item">
      <button class="faq-q">
        Apa saja jenis tes psikologi yang tersedia?
        <div class="faq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
      </button>
      <div class="faq-a">Kami menyediakan berbagai tes, antara lain: tes kepribadian (MBTI, DISC, Big Five), tes minat karir (Holland RIASEC), tes kecerdasan (IQ), tes bakat, tes asesmen rekrutmen, serta tes psikologi untuk keperluan pendidikan dan tumbuh kembang anak.</div>
    </div>

    <div class="faq-item">
      <button class="faq-q">
        Apakah layanan tersedia untuk instansi atau perusahaan?
        <div class="faq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
      </button>
      <div class="faq-a">Tentu! Kami melayani kerja sama dengan perusahaan, instansi pemerintah, sekolah, dan komunitas. Layanan korporat meliputi: asesmen rekrutmen massal, pelatihan SDM, workshop kesehatan mental karyawan, dan konsultasi psikologi organisasi. Hubungi kami untuk penawaran khusus.</div>
    </div>

  </div>
</section>

<!-- ═══ CTA BANNER ═══ -->
<section class="cta-sec reveal">
  <h2>Siap Memulai Perjalanan <span>Menuju Diri Terbaik</span>?</h2>
  <p>Jangan tunda lagi. Hubungi kami sekarang dan mulai langkah pertama menuju kesehatan mental yang lebih baik.</p>
  <div class="cta-btns">
    <a href="https://wa.me/6281296218656?text=Halo%20Biro%20Psikologi%20Hyui,%20saya%20ingin%20konsultasi" target="_blank" class="btn-wa">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
      Chat WhatsApp Sekarang
    </a>
    <a href="#layanan" class="btn-wh">Lihat Semua Layanan</a>
  </div>
</section>

<!-- ═══ KONTAK ═══ -->
<section id="kontak" class="sec sec-alt reveal">
  <div class="sec-hd">
    <div class="sec-tag">Kontak</div>
    <h2 class="sec-h2">Kami Ada untuk Kamu</h2>
    <p class="sec-p">Jangan ragu menghubungi kami. Tim kami siap membantu menjawab pertanyaanmu kapan saja.</p>
  </div>
  <div class="contact-grid mw">
    <div>
      <h3 class="contact-h3">Informasi Kontak</h3>
      <p class="contact-p">Kunjungi langsung atau hubungi kami melalui saluran di bawah ini.</p>
      <div class="cinfo-list">
        <div class="cinfo">
          <div class="cinfo-bar cb1"></div>
          <div class="cinfo-txt"><strong>Alamat</strong>Jl. Raya Kauman No. 34, Srengat – Blitar<br>Kode Pos 66152, Jawa Timur</div>
        </div>
        <div class="cinfo">
          <div class="cinfo-bar cb2"></div>
          <div class="cinfo-txt"><strong>E-mail</strong><a href="mailto:biropsikologihyui@gmail.com">biropsikologihyui@gmail.com</a></div>
        </div>
        <div class="cinfo">
          <div class="cinfo-bar cb3"></div>
          <div class="cinfo-txt"><strong>WhatsApp</strong><a href="https://wa.me/6281296218656" target="_blank">0812 9621 8656</a></div>
        </div>
        <div class="cinfo">
          <div class="cinfo-bar cb4"></div>
          <div class="cinfo-txt"><strong>Facebook</strong><a href="https://www.facebook.com/BiroPsikologiHyui" target="_blank">Biro Psikologi Hyui</a></div>
        </div>
      </div>

      <form class="contact-form" id="contactForm" onsubmit="submitWA(event)">
        <div class="form-row">
          <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" id="nama" placeholder="Nama kamu" required>
          </div>
          <div class="form-group">
            <label for="wa">Nomor WhatsApp</label>
            <input type="tel" id="wa" placeholder="08xxxxxxxxxx" required>
          </div>
        </div>
        <div class="form-group">
          <label for="email">E-mail</label>
          <input type="email" id="email" placeholder="email@kamu.com">
        </div>
        <div class="form-group">
          <label for="pesan">Pesan / Pertanyaan</label>
          <textarea id="pesan" placeholder="Tuliskan kebutuhan atau pertanyaanmu di sini..." required></textarea>
        </div>
        <button type="submit" class="form-submit">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
          Kirim via WhatsApp
        </button>
      </form>
    </div>
    <div class="contact-map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.9513327!2d112.028!3d-8.091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7883c3ffffffff%3A0x0!2zSMKwMDUnMjguOCJTIDExMsKwMDEnNDAuOCJF!5e0!3m2!1sid!2sid!4v1" allowfullscreen="" loading="lazy" title="Lokasi Biro Psikologi Hyui, Srengat Blitar" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</section>

<!-- ═══ FOOTER ═══ -->
<footer class="footer">
  <div class="footer-inner">
    <div>
      <div class="f-logo">
        <div class="f-logo-mark"><div class="f-logo-mark-i"></div></div>
        <div class="f-logo-name">BIRO PSIKOLOGI HYUI</div>
      </div>
      <p class="f-tagline">Layanan psikologi profesional dan terpercaya untuk mendukung kesehatan mental, karir, dan pengembangan diri Anda di Blitar, Jawa Timur.</p>
      <div class="f-socials">
        <a href="https://wa.me/6281296218656" target="_blank" class="f-soc" title="WhatsApp">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        </a>
        <a href="https://www.facebook.com/BiroPsikologiHyui" target="_blank" class="f-soc" title="Facebook">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
        </a>
        <a href="mailto:biropsikologihyui@gmail.com" class="f-soc" title="Email">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><polyline points="2,4 12,13 22,4"/></svg>
        </a>
      </div>
    </div>
    <div class="f-col">
      <h4>Layanan</h4>
      <ul>
        <li><a href="#layanan">Tes Psikologi</a></li>
        <li><a href="#layanan">Konseling Individual</a></li>
        <li><a href="#layanan">Life Coaching</a></li>
        <li><a href="#layanan">Webinar &amp; Pelatihan</a></li>
        <li><a href="#layanan">Asesmen Rekrutmen</a></li>
      </ul>
    </div>
    <div class="f-col">
      <h4>Navigasi</h4>
      <ul>
        <li><a href="#beranda">Beranda</a></li>
        <li><a href="#tentang">Tentang Kami</a></li>
        <li><a href="#tim">Tim Psikolog</a></li>
        <li><a href="#artikel">Artikel</a></li>
        <li><a href="#kontak">Kontak</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <span>© {{ date('Y') }} Biro Psikologi Hyui. All rights reserved.</span>
    <span>Jl. Raya Kauman No. 34, Srengat – Blitar 66152</span>
  </div>
</footer>

<!-- ═══ FLOATING BUTTONS ═══ -->
<div class="fab-wrap">
  <button class="fab-top" id="fabTop" onclick="window.scrollTo({top:0,behavior:'smooth'})" title="Kembali ke atas">
    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="18 15 12 9 6 15"/></svg>
  </button>
  <a href="https://wa.me/6281296218656?text=Halo%20Biro%20Psikologi%20Hyui" target="_blank" class="fab-wa" title="WhatsApp">
    <svg width="26" height="26" viewBox="0 0 24 24" fill="white"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
  </a>
</div>

<!-- ═══ JAVASCRIPT ═══ -->
<script>
(function(){

  /* ── Navbar scroll shadow + burger ── */
  const nav = document.getElementById('mainNav');
  const burger = document.getElementById('burger');
  const mobMenu = document.getElementById('mobMenu');

  window.addEventListener('scroll', () => {
    nav.classList.toggle('scrolled', window.scrollY > 10);
    document.getElementById('fabTop').classList.toggle('show', window.scrollY > 400);
  }, {passive:true});

  burger.addEventListener('click', () => {
    burger.classList.toggle('open');
    mobMenu.classList.toggle('open');
  });

  mobMenu.querySelectorAll('a').forEach(a => {
    a.addEventListener('click', () => {
      burger.classList.remove('open');
      mobMenu.classList.remove('open');
    });
  });

  /* ── Active nav via Intersection Observer ── */
  const sections = document.querySelectorAll('section[id], div.stats-bar');
  const navLinks = document.querySelectorAll('.nav-links a[href^="#"]');

  const obs = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        const id = e.target.id || 'beranda';
        navLinks.forEach(a => {
          a.classList.toggle('active', a.getAttribute('href') === '#' + id);
        });
      }
    });
  }, {rootMargin:'-40% 0px -55% 0px'});

  document.querySelectorAll('section[id]').forEach(s => obs.observe(s));

  /* ── Smooth scroll for all anchor links ── */
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
      const target = document.querySelector(a.getAttribute('href'));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({behavior:'smooth', block:'start'});
      }
    });
  });

  /* ── Service Tabs ── */
  document.querySelectorAll('.tab-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
      document.querySelectorAll('.tab-panel').forEach(p => p.classList.remove('active'));
      btn.classList.add('active');
      document.getElementById(btn.dataset.tab).classList.add('active');
    });
  });

  /* ── Gallery Lightbox ── */
  const items = Array.from(document.querySelectorAll('.gal-item'));
  const lb = document.getElementById('lightbox');
  const lbImg = document.getElementById('lbImg');
  const lbCap = document.getElementById('lbCap');
  let current = 0;

  function openLb(idx) {
    current = idx;
    lbImg.src = items[idx].dataset.src;
    lbCap.textContent = items[idx].dataset.cap || '';
    lb.classList.add('open');
    document.body.style.overflow = 'hidden';
  }
  function closeLb() {
    lb.classList.remove('open');
    document.body.style.overflow = '';
    lbImg.src = '';
  }
  function moveLb(dir) {
    current = (current + dir + items.length) % items.length;
    lbImg.src = '';
    setTimeout(() => {
      lbImg.src = items[current].dataset.src;
      lbCap.textContent = items[current].dataset.cap || '';
    }, 80);
  }

  items.forEach((item, i) => item.addEventListener('click', () => openLb(i)));
  document.getElementById('lbClose').addEventListener('click', closeLb);
  document.getElementById('lbPrev').addEventListener('click', () => moveLb(-1));
  document.getElementById('lbNext').addEventListener('click', () => moveLb(1));
  lb.addEventListener('click', e => { if (e.target === lb) closeLb(); });
  document.addEventListener('keydown', e => {
    if (!lb.classList.contains('open')) return;
    if (e.key === 'Escape') closeLb();
    if (e.key === 'ArrowLeft') moveLb(-1);
    if (e.key === 'ArrowRight') moveLb(1);
  });

  /* ── FAQ Accordion ── */
  document.querySelectorAll('.faq-q').forEach(btn => {
    btn.addEventListener('click', () => {
      const item = btn.closest('.faq-item');
      const ans = item.querySelector('.faq-a');
      const isOpen = item.classList.contains('open');

      document.querySelectorAll('.faq-item').forEach(i => {
        i.classList.remove('open');
        i.querySelector('.faq-a').classList.remove('open');
      });

      if (!isOpen) {
        item.classList.add('open');
        ans.classList.add('open');
      }
    });
  });

  /* ── Article Modals ── */
  window.openArticle = function(id) {
    document.getElementById('modal-' + id).classList.add('open');
    document.body.style.overflow = 'hidden';
  };
  window.closeArticle = function(id) {
    document.getElementById('modal-' + id).classList.remove('open');
    document.body.style.overflow = '';
  };
  document.querySelectorAll('.art-modal').forEach(m => {
    m.addEventListener('click', e => {
      if (e.target === m) {
        m.classList.remove('open');
        document.body.style.overflow = '';
      }
    });
  });

  /* ── Contact Form → WhatsApp ── */
  window.submitWA = function(e) {
    e.preventDefault();
    const nama  = document.getElementById('nama').value.trim();
    const wa    = document.getElementById('wa').value.trim();
    const email = document.getElementById('email').value.trim();
    const pesan = document.getElementById('pesan').value.trim();
    const msg = `Halo Biro Psikologi Hyui,\n\nNama: ${nama}\nWhatsApp: ${wa}${email ? '\nEmail: ' + email : ''}\n\nPesan:\n${pesan}`;
    window.open('https://wa.me/6281296218656?text=' + encodeURIComponent(msg), '_blank');
  };

  /* ── Scroll Reveal ── */
  const revObs = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('visible');
        revObs.unobserve(e.target);
      }
    });
  }, {threshold: 0.08});

  document.querySelectorAll('.reveal').forEach(el => revObs.observe(el));

})();
</script>

</body>
</html>
