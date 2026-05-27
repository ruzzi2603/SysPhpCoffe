<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guaxupé - Minas Gerais | História, Cultura e Turismo</title>
    <meta name="description" content="Site institucional sobre Guaxupé - MG, com pontos turísticos, cultura local, links oficiais e design moderno.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        :root{
            --bg: #f4efe6;
            --bg-soft: #eef4f8;
            --card: rgba(255,255,255,.72);
            --card-strong: rgba(255,255,255,.92);
            --text: #203043;
            --muted: #65758a;
            --line: rgba(32,48,67,.10);
            --blue: #8fb9d8;
            --blue-2: #d9ebf5;
            --beige: #eadfcf;
            --sand: #d8c4a6;
            --white: #ffffff;
            --shadow: 0 24px 70px rgba(50, 70, 95, .12);
            --shadow-soft: 0 12px 40px rgba(50, 70, 95, .10);
            --radius: 28px;
            --radius-sm: 18px;
            --max: 1220px;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; }
        body {
            font-family: "Inter", sans-serif;
            color: var(--text);
            background:
                radial-gradient(circle at top left, rgba(143,185,216,.28), transparent 30%),
                radial-gradient(circle at top right, rgba(234,223,207,.65), transparent 36%),
                linear-gradient(180deg, #fbfdff 0%, var(--bg) 100%);
            overflow-x: hidden;
        }
        a { color: inherit; text-decoration: none; }
        img { max-width: 100%; display: block; }
        .container {
            width: min(100% - 32px, var(--max));
            margin: 0 auto;
        }

        .site-header {
            position: sticky;
            top: 0;
            z-index: 999;
            backdrop-filter: blur(18px);
            background: rgba(251, 253, 255, .72);
            border-bottom: 1px solid rgba(32,48,67,.08);
        }

        .nav {
            min-height: 82px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 18px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            font-family: "DM Sans", sans-serif;
            font-weight: 800;
            letter-spacing: -.02em;
        }

        .brand-badge {
            width: 46px;
            height: 46px;
            border-radius: 16px;
            display: grid;
            place-items: center;
            color: var(--white);
            background: linear-gradient(135deg, var(--blue), #6ea6cc);
            box-shadow: 0 12px 28px rgba(143,185,216,.45);
        }

        .brand-text {
            display: flex;
            flex-direction: column;
            line-height: 1.1;
        }

        .brand-text strong { font-size: 1rem; }
        .brand-text span { font-size: .79rem; color: var(--muted); }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 26px;
            color: var(--muted);
            font-size: .95rem;
            font-weight: 500;
        }

        .nav-links a {
            position: relative;
            transition: .25s ease;
        }

        .nav-links a::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -7px;
            width: 100%;
            height: 2px;
            border-radius: 999px;
            background: linear-gradient(90deg, var(--blue), #7aa8cb);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform .25s ease;
        }

        .nav-links a:hover { color: var(--text); }
        .nav-links a:hover::after { transform: scaleX(1); }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            border: 0;
            outline: 0;
            cursor: pointer;
            border-radius: 999px;
            padding: 12px 18px;
            font-weight: 700;
            font-size: .95rem;
            transition: transform .25s ease, box-shadow .25s ease, background .25s ease;
            white-space: nowrap;
        }

        .btn-primary {
            color: #14314a;
            background: linear-gradient(135deg, #bfe0f2, #f4efe6);
            box-shadow: 0 12px 26px rgba(143,185,216,.25);
        }

        .btn-primary:hover { transform: translateY(-2px); }

        .btn-ghost {
            color: var(--text);
            background: rgba(255,255,255,.64);
            border: 1px solid rgba(32,48,67,.08);
        }

        .btn-ghost:hover { transform: translateY(-2px); box-shadow: var(--shadow-soft); }

        .mobile-toggle {
            display: none;
            width: 46px;
            height: 46px;
            border-radius: 16px;
            border: 1px solid rgba(32,48,67,.08);
            background: rgba(255,255,255,.7);
            color: var(--text);
            cursor: pointer;
        }

        .bg-orb {
            position: fixed;
            z-index: -1;
            pointer-events: none;
            border-radius: 50%;
            filter: blur(18px);
            opacity: .7;
            animation: float 11s ease-in-out infinite;
        }

        .bg-orb.one {
            width: 260px;
            height: 260px;
            left: -80px;
            top: 13%;
            background: rgba(143,185,216,.24);
        }

        .bg-orb.two {
            width: 220px;
            height: 220px;
            right: 1%;
            top: 28%;
            background: rgba(234,223,207,.65);
            animation-delay: -3s;
        }

        .bg-orb.three {
            width: 310px;
            height: 310px;
            right: -110px;
            bottom: 8%;
            background: rgba(216,196,166,.26);
            animation-delay: -6s;
        }

        @keyframes float {
            0%,100% { transform: translateY(0) scale(1); }
            50% { transform: translateY(-18px) scale(1.03); }
        }

        .reveal {
            opacity: 0;
            transform: translateY(24px);
            transition: opacity .8s ease, transform .8s ease;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        @media (max-width: 940px){
            .nav-links { display: none; }
            .mobile-toggle { display: inline-flex; align-items: center; justify-content: center; }
        }
    </style>
</head>
<body>
    <div class="bg-orb one"></div>
    <div class="bg-orb two"></div>
    <div class="bg-orb three"></div>

    <header class="site-header">
        <div class="container">
            <nav class="nav">
                <a href="<?= base_url('/') ?>" class="brand">
                    <div class="brand-badge">G</div>
                    <div class="brand-text">
                        <strong>Guaxupé</strong>
                        <span>Minas Gerais • Cultura • Turismo</span>
                    </div>
                </a>

                <div class="nav-links" id="navLinks">
                    <a href="#sobre">Sobre</a>
                    <a href="#turismo">Turismo</a>
                    <a href="#cultura">Cultura</a>
                    <a href="#galeria">Galeria</a>
                    <a href="#contato">Contato</a>
                </div>

                <div class="header-actions">
                    <a class="btn btn-ghost" href="https://www.instagram.com/prefguaxupe/" target="_blank" rel="noopener noreferrer">
                        Instagram
                    </a>
                    <a class="btn btn-primary" href="https://www.guaxupe.mg.gov.br/" target="_blank" rel="noopener noreferrer">
                        Prefeitura
                    </a>
                    <button class="mobile-toggle" id="menuToggle" aria-label="Abrir menu">☰</button>
                </div>
            </nav>
        </div>
    </header>

    <script>
        const menuToggle = document.getElementById('menuToggle');
        const navLinks = document.getElementById('navLinks');

        if (menuToggle && navLinks) {
            menuToggle.addEventListener('click', () => {
                const open = navLinks.style.display === 'flex';
                navLinks.style.display = open ? 'none' : 'flex';
                navLinks.style.position = open ? '' : 'absolute';
                navLinks.style.top = open ? '' : '82px';
                navLinks.style.left = open ? '' : '16px';
                navLinks.style.right = open ? '' : '16px';
                navLinks.style.padding = open ? '' : '18px';
                navLinks.style.flexDirection = open ? '' : 'column';
                navLinks.style.gap = open ? '' : '16px';
                navLinks.style.borderRadius = open ? '' : '20px';
                navLinks.style.background = open ? '' : 'rgba(251,253,255,.96)';
                navLinks.style.border = open ? '' : '1px solid rgba(32,48,67,.08)';
                navLinks.style.boxShadow = open ? '' : '0 22px 50px rgba(50,70,95,.12)';
            });
        }
    </script>