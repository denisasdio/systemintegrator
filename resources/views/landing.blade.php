<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Deni Sasdio — IT Engineer yang membangun sistem digital andal, terhubung, dan mudah berkembang.">
    <meta name="theme-color" content="#07090f">
    <title>Deni Sasdio — IT Engineer</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=dm-sans:400,500,600,700|manrope:400,500,600,700,800" rel="stylesheet">
    <style>
        :root { --ink: #f5f7ff; --muted: #9aa4bc; --line: rgba(255,255,255,.11); --surface: rgba(17,22,36,.72); --lime: #c5ff76; --violet: #9b7bff; --sky: #75d7ff; }
        * { box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body { margin: 0; min-width: 320px; overflow-x: hidden; color: var(--ink); background: #07090f; font-family: "DM Sans", sans-serif; }
        body::before { content: ""; position: fixed; inset: 0; z-index: -3; background: radial-gradient(circle at 12% 10%, rgba(112,94,255,.18), transparent 28rem), radial-gradient(circle at 88% 22%, rgba(58,209,255,.13), transparent 27rem), #07090f; }
        body::after { content: ""; position: fixed; inset: 0; z-index: -2; pointer-events: none; opacity: .25; background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 220 220' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.8' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='.22'/%3E%3C/svg%3E"); }
        a { color: inherit; text-decoration: none; }
        .shell { width: min(1180px, calc(100% - 40px)); margin: 0 auto; }
        .nav { position: fixed; top: 0; left: 0; right: 0; z-index: 20; padding: 18px 0; transition: padding .3s ease, background .3s ease, border-color .3s ease; }
        .nav.is-scrolled { padding: 11px 0; background: rgba(7,9,15,.72); backdrop-filter: blur(18px); border-bottom: 1px solid var(--line); }
        .nav-in { display: flex; align-items: center; justify-content: space-between; }
        .brand { display: flex; align-items: center; gap: 10px; font-family: Manrope, sans-serif; font-weight: 800; letter-spacing: -.04em; }
        .mark { width: 31px; height: 31px; display: grid; place-items: center; border: 1px solid rgba(197,255,118,.55); border-radius: 9px; color: var(--lime); font-size: .78rem; transform: rotate(-8deg); }
        .links { display: flex; align-items: center; gap: 24px; color: #c5ccdb; font-size: .88rem; }
        .links a { transition: color .2s ease; }
        .links a:hover { color: var(--lime); }
        .mini-button, .button { display: inline-flex; align-items: center; justify-content: center; gap: 10px; border-radius: 999px; transition: transform .25s ease, box-shadow .25s ease, background .25s ease; }
        .mini-button { padding: 9px 15px; border: 1px solid var(--line); font-size: .82rem; }
        .button { padding: 14px 20px; font-weight: 700; font-size: .92rem; }
        .button:hover, .mini-button:hover { transform: translateY(-3px); }
        .button.primary { color: #0a1005; background: var(--lime); box-shadow: 0 10px 35px rgba(197,255,118,.18); }
        .button.secondary { border: 1px solid var(--line); background: rgba(255,255,255,.04); }
        .hero { position: relative; min-height: 100svh; display: grid; align-items: center; padding: 120px 0 70px; }
        .hero-copy { position: relative; z-index: 2; width: min(680px, 100%); }
        .eyebrow { display: inline-flex; align-items: center; gap: 9px; padding: 8px 12px; border: 1px solid var(--line); border-radius: 999px; color: #d5dded; background: rgba(255,255,255,.03); font-size: .78rem; letter-spacing: .06em; text-transform: uppercase; }
        .pulse { width: 7px; height: 7px; background: var(--lime); border-radius: 50%; box-shadow: 0 0 0 0 rgba(197,255,118,.8); animation: pulse 2s infinite; }
        h1 { margin: 22px 0; max-width: 720px; font-family: Manrope, sans-serif; font-weight: 800; font-size: clamp(3.3rem, 8vw, 7.2rem); line-height: .94; letter-spacing: -.075em; }
        h1 em { font-style: normal; color: transparent; background: linear-gradient(105deg, var(--lime), var(--sky) 65%, var(--violet)); background-clip: text; }
        .hero p { max-width: 530px; margin: 0 0 28px; color: var(--muted); font-size: clamp(1rem, 2vw, 1.18rem); line-height: 1.7; }
        .actions { display: flex; flex-wrap: wrap; gap: 12px; }
        .scroll-cue { position: absolute; bottom: 31px; left: 0; display: flex; align-items: center; gap: 10px; color: #8992a8; font-size: .74rem; letter-spacing: .1em; text-transform: uppercase; }
        .scroll-line { width: 46px; height: 1px; overflow: hidden; background: rgba(255,255,255,.2); }.scroll-line::after { content: ""; display: block; width: 45%; height: 100%; background: var(--lime); animation: scan 1.8s ease-in-out infinite; }
        .scene { position: absolute; z-index: 1; right: -4%; top: 14%; width: min(53vw, 680px); aspect-ratio: 1; perspective: 1000px; pointer-events: none; }
        .orbital { position: absolute; inset: 7%; border: 1px solid rgba(152,169,210,.2); border-radius: 50%; transform: rotateX(68deg) rotateZ(-22deg); }
        .orbital.two { inset: 19%; border-color: rgba(197,255,118,.18); transform: rotateX(68deg) rotateZ(62deg); }
        .orb { position: absolute; inset: 19%; border-radius: 35% 65% 56% 44% / 47% 42% 58% 53%; background: radial-gradient(circle at 27% 25%, #ecfdff, #7fd9ff 12%, #7779fa 40%, #302a70 68%, #151126 84%); box-shadow: inset -26px -34px 54px rgba(1,3,20,.58), inset 14px 13px 23px rgba(255,255,255,.5), 0 30px 80px rgba(93,84,255,.4); transform: rotateX(11deg) rotateY(-25deg) rotateZ(11deg); animation: float 7s ease-in-out infinite; }
        .orb::after { content: ""; position: absolute; inset: 12%; border-radius: inherit; border: 1px solid rgba(255,255,255,.27); transform: translateZ(20px); }
        .cube { position: absolute; right: 4%; bottom: 16%; width: 106px; height: 106px; border: 1px solid rgba(197,255,118,.48); background: linear-gradient(135deg, rgba(197,255,118,.13), rgba(126,99,255,.04)); box-shadow: 20px 20px 45px rgba(0,0,0,.3); transform: rotateX(58deg) rotateZ(28deg); animation: cube 8s ease-in-out infinite; }
        .cube::before, .cube::after { content: ""; position: absolute; background: rgba(135,113,255,.14); border: 1px solid rgba(160,142,255,.32); }.cube::before { width: 100%; height: 38px; left: 18px; top: -20px; transform: skewX(-48deg); }.cube::after { width: 37px; height: 100%; right: -20px; top: -19px; transform: skewY(-42deg); }
        .section { padding: 120px 0; position: relative; }
        .section-heading { display: flex; justify-content: space-between; gap: 30px; align-items: end; margin-bottom: 38px; }.section-label { color: var(--lime); font-size: .76rem; letter-spacing: .13em; text-transform: uppercase; }.section h2 { margin: 12px 0 0; max-width: 680px; font-family: Manrope, sans-serif; font-size: clamp(2.2rem, 5vw, 4.4rem); line-height: .98; letter-spacing: -.065em; }.section-intro { max-width: 320px; margin: 0; color: var(--muted); line-height: 1.65; }
        .bento { display: grid; grid-template-columns: 1.4fr .9fr .9fr; gap: 14px; }.card { position: relative; overflow: hidden; min-height: 230px; padding: 25px; border: 1px solid var(--line); border-radius: 20px; background: var(--surface); backdrop-filter: blur(10px); }.card.large { min-height: 474px; grid-row: span 2; display: flex; flex-direction: column; justify-content: end; background: linear-gradient(150deg, rgba(105,92,255,.2), rgba(18,25,42,.85) 52%, rgba(19,41,38,.84)); }.card h3 { margin: 0 0 9px; font-family: Manrope, sans-serif; font-size: 1.25rem; letter-spacing: -.04em; }.card p { margin: 0; color: var(--muted); line-height: 1.58; font-size: .92rem; }.number { position: absolute; top: 20px; right: 22px; color: rgba(255,255,255,.22); font: 700 3.4rem/.8 Manrope, sans-serif; letter-spacing: -.08em; }.card-icon { display: grid; place-items: center; width: 43px; height: 43px; margin-bottom: auto; border: 1px solid var(--line); border-radius: 13px; color: var(--lime); background: rgba(255,255,255,.05); font-size: 1.2rem; }.mesh { position: absolute; inset: -25%; opacity: .55; background: repeating-radial-gradient(circle at 50% 50%, transparent 0 20px, rgba(197,255,118,.11) 21px 22px); transform: rotate(25deg); }.large .card-content { position: relative; z-index: 1; }.large .glow { position: absolute; top: 16%; right: -10%; width: 240px; height: 240px; border-radius: 50%; background: var(--lime); filter: blur(85px); opacity: .19; }
        .skills { display: grid; grid-template-columns: repeat(4, 1fr); border: 1px solid var(--line); border-radius: 18px; overflow: hidden; background: rgba(255,255,255,.025); }.skill { padding: 25px; min-height: 164px; border-right: 1px solid var(--line); }.skill:last-child { border: 0; }.skill span { display: block; margin-bottom: 33px; color: var(--lime); font-size: 1.18rem; }.skill strong { display: block; margin-bottom: 7px; font-family: Manrope, sans-serif; letter-spacing: -.03em; }.skill small { color: var(--muted); font-size: .84rem; line-height: 1.45; }
        .projects { display: grid; gap: 14px; }.project { display: grid; grid-template-columns: 100px 1.1fr .9fr auto; gap: 20px; align-items: center; padding: 25px 4px; border-bottom: 1px solid var(--line); transition: padding .25s ease, border-color .25s ease; }.project:first-child { border-top: 1px solid var(--line); }.project:hover { padding-inline: 16px; border-color: rgba(197,255,118,.5); }.project-index { color: var(--lime); font-size: .78rem; }.project h3 { margin: 0; font: 700 clamp(1.28rem, 2.5vw, 1.8rem)/1 Manrope, sans-serif; letter-spacing: -.055em; }.project p { margin: 0; color: var(--muted); font-size: .88rem; }.arrow { display: grid; place-items: center; width: 38px; height: 38px; border: 1px solid var(--line); border-radius: 50%; transition: background .2s, color .2s, transform .2s; }.project:hover .arrow { color: #0a1005; background: var(--lime); transform: rotate(-42deg); }
        .contact { padding: 30px 0 70px; }.contact-box { position: relative; overflow: hidden; padding: clamp(34px, 7vw, 88px); border: 1px solid rgba(197,255,118,.4); border-radius: 26px; background: linear-gradient(130deg, #152619, #111a2d 56%, #20183a); text-align: center; }.contact-box::before { content: ""; position: absolute; width: 480px; height: 480px; top: -280px; left: 50%; border: 1px solid rgba(197,255,118,.32); border-radius: 50%; transform: translateX(-50%); box-shadow: 0 0 100px 25px rgba(197,255,118,.1); }.contact-box > * { position: relative; }.contact h2 { max-width: 760px; margin: 13px auto 18px; font: 800 clamp(2.5rem, 6vw, 5.6rem)/.96 Manrope, sans-serif; letter-spacing: -.075em; }.contact p { max-width: 490px; margin: 0 auto 25px; color: #c2cad8; line-height: 1.6; }.contact .button { background: var(--lime); color: #081005; }
        footer { display: flex; justify-content: space-between; padding: 0 0 28px; color: #788198; font-size: .8rem; }.reveal { opacity: 0; transform: translateY(24px); transition: opacity .7s ease, transform .7s cubic-bezier(.16,1,.3,1); }.reveal.visible { opacity: 1; transform: none; }
        @keyframes float { 50% { transform: translateY(-24px) rotateX(17deg) rotateY(-10deg) rotateZ(20deg); border-radius: 50% 50% 38% 62% / 42% 45% 55% 58%; } } @keyframes cube { 50% { transform: translateY(-30px) rotateX(68deg) rotateZ(75deg); } } @keyframes pulse { 70% { box-shadow: 0 0 0 8px rgba(197,255,118,0); } 100% { box-shadow: 0 0 0 0 rgba(197,255,118,0); } } @keyframes scan { 50% { transform: translateX(125%); } }
        @media (max-width: 820px) { .links a { display: none; }.scene { top: 21%; right: -20%; width: 85vw; opacity: .7; }.hero-copy { padding-top: 80px; }.bento { grid-template-columns: 1fr 1fr; }.card.large { min-height: 365px; grid-column: span 2; grid-row: auto; }.skills { grid-template-columns: 1fr 1fr; }.skill:nth-child(2) { border-right: 0; }.skill:nth-child(-n+2) { border-bottom: 1px solid var(--line); }.project { grid-template-columns: 55px 1fr auto; }.project p { display: none; }.section-heading { display: block; }.section-intro { margin-top: 18px; } }
        @media (max-width: 520px) { .shell { width: min(100% - 28px, 1180px); }.nav { padding-top: 13px; }.mini-button { padding: 8px 12px; }.hero { min-height: 760px; }.scene { top: 15%; right: -34%; width: 105vw; }.hero-copy { padding-top: 190px; }.scroll-cue { bottom: 17px; }.section { padding: 82px 0; }.bento { grid-template-columns: 1fr; }.card.large { grid-column: auto; }.card { min-height: 200px; }.skills { grid-template-columns: 1fr; }.skill, .skill:nth-child(2) { border-right: 0; border-bottom: 1px solid var(--line); }.skill:last-child { border-bottom: 0; }.project { grid-template-columns: 42px 1fr auto; gap: 10px; }.project h3 { font-size: 1.2rem; }.contact { padding-bottom: 38px; } footer { gap: 10px; flex-direction: column; } }
        @media (prefers-reduced-motion: reduce) { *, *::before, *::after { animation-duration: .01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: .01ms !important; } }
    </style>
</head>
<body>
    <nav class="nav" aria-label="Navigasi utama">
        <div class="shell nav-in">
            <a class="brand" href="#top" aria-label="Deni Sasdio, beranda"><span class="mark">DS</span> Deni Sasdio</a>
            <div class="links"><a href="#about">Tentang</a><a href="#focus">Fokus</a><a href="#work">Demo</a><a class="mini-button" href="#contact">Mari terhubung ↗</a></div>
        </div>
    </nav>

    <main id="top">
        <section class="hero shell" aria-labelledby="hero-title">
            <div class="hero-copy reveal">
                <span class="eyebrow"><i class="pulse"></i> IT Engineer · Indonesia</span>
                <h1 id="hero-title">Making systems <em>connect</em> and move forward.</h1>
                <p>Saya Deni Sasdio, IT Engineer yang merancang infrastruktur digital, menyatukan sistem, dan mengubah proses rumit menjadi pengalaman yang lebih andal.</p>
                <div class="actions"><a class="button primary" href="#work">Lihat fokus saya <span>↓</span></a><a class="button secondary" href="#contact">Mulai percakapan <span>↗</span></a></div>
            </div>
            <div class="scene" aria-hidden="true"><div class="orbital"></div><div class="orbital two"></div><div class="orb"></div><div class="cube"></div></div>
            <a class="scroll-cue" href="#about"><span class="scroll-line"></span> scroll to explore</a>
        </section>

        <section class="section shell" id="about" aria-labelledby="about-title">
            <div class="section-heading reveal"><div><span class="section-label">01 / About</span><h2 id="about-title">Teknologi yang terasa sederhana, karena fondasinya kuat.</h2></div><p class="section-intro">Saya senang bekerja di titik pertemuan antara kebutuhan manusia, sistem, dan eksekusi yang rapi.</p></div>
            <div class="bento reveal">
                <article class="card large"><div class="mesh"></div><div class="glow"></div><div class="card-content"><span class="section-label">Cara kerja</span><h3>See the whole system.</h3><p>Menghubungkan detail teknis dengan gambaran besar agar solusi tetap jelas, scalable, dan mudah dirawat.</p></div></article>
                <article class="card"><span class="number">01</span><span class="card-icon">⌘</span><h3>System integration</h3><p>Menyatukan layanan, data, dan proses menjadi alur kerja yang konsisten.</p></article>
                <article class="card"><span class="number">02</span><span class="card-icon">◌</span><h3>Reliable operations</h3><p>Membangun fondasi yang siap dipantau, diperbaiki, dan dikembangkan.</p></article>
                <article class="card"><span class="number">03</span><span class="card-icon">↗</span><h3>Practical automation</h3><p>Mengurangi pekerjaan berulang agar tim dapat fokus pada dampak yang lebih besar.</p></article>
                <article class="card"><span class="number">04</span><span class="card-icon">✦</span><h3>Continuous learning</h3><p>Terus mengeksplorasi cara baru untuk membuat teknologi lebih berguna.</p></article>
            </div>
        </section>

        <section class="section shell" id="focus" aria-labelledby="focus-title">
            <div class="section-heading reveal"><div><span class="section-label">02 / Focus</span><h2 id="focus-title">Area yang saya bawa ke setiap project.</h2></div></div>
            <div class="skills reveal"><div class="skill"><span>01</span><strong>Architecture</strong><small>Sistem yang terstruktur, modular, dan siap bertumbuh.</small></div><div class="skill"><span>02</span><strong>Integration</strong><small>API, data flow, dan tools yang bekerja sebagai satu kesatuan.</small></div><div class="skill"><span>03</span><strong>Infrastructure</strong><small>Deployment, container, dan environment yang konsisten.</small></div><div class="skill"><span>04</span><strong>Optimization</strong><small>Proses yang lebih cepat, jelas, dan mudah dioperasikan.</small></div></div>
        </section>

        <section class="section shell" id="work" aria-labelledby="work-title">
            <div class="section-heading reveal"><div><span class="section-label">03 / Sample work</span><h2 id="work-title">Arah kerja yang bisa diwujudkan bersama.</h2></div><p class="section-intro">Contoh fokus demonstratif untuk menampilkan cara berpikir dan pendekatan sistem.</p></div>
            <div class="projects reveal"><article class="project"><span class="project-index">01 — DEMO</span><h3>Operations Command Center</h3><p>Dashboard terpusat untuk visibilitas sistem dan pengambilan keputusan yang lebih cepat.</p><span class="arrow">↗</span></article><article class="project"><span class="project-index">02 — DEMO</span><h3>Connected Workflow</h3><p>Alur otomatis untuk memindahkan informasi lintas aplikasi tanpa pekerjaan manual.</p><span class="arrow">↗</span></article><article class="project"><span class="project-index">03 — DEMO</span><h3>Infrastructure Blueprint</h3><p>Blueprint deployment yang repeatable, terdokumentasi, dan siap ditingkatkan.</p><span class="arrow">↗</span></article></div>
        </section>

        <section class="contact shell reveal" id="contact" aria-labelledby="contact-title"><div class="contact-box"><span class="section-label">Open to collaboration</span><h2 id="contact-title">Let’s build the next reliable thing.</h2><p>Punya ide, tantangan sistem, atau ingin berdiskusi tentang teknologi? Mari mulai dari percakapan sederhana.</p><a class="button" href="#top">Kembali ke atas <span>↑</span></a></div></section>
    </main>
    <footer class="shell"><span>© {{ date('Y') }} Deni Sasdio</span><span>Designed for motion, built for clarity.</span></footer>
    <script>
        const nav = document.querySelector('.nav');
        const reveal = new IntersectionObserver((entries) => entries.forEach((entry) => { if (entry.isIntersecting) { entry.target.classList.add('visible'); reveal.unobserve(entry.target); } }), { threshold: .12 });
        document.querySelectorAll('.reveal').forEach((item) => reveal.observe(item));
        window.addEventListener('scroll', () => nav.classList.toggle('is-scrolled', scrollY > 20), { passive: true });
        const scene = document.querySelector('.scene');
        window.addEventListener('pointermove', (event) => { if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return; const x = (event.clientX / innerWidth - .5) * 8; const y = (event.clientY / innerHeight - .5) * -8; scene.style.transform = `rotateY(${x}deg) rotateX(${y}deg)`; }, { passive: true });
    </script>
</body>
</html>
