<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ARVIFOR Industrial — site em construção. Da matéria-prima à peça pronta.">
    <title>ARVIFOR Industrial — Site em Construção</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&family=Barlow+Condensed:wght@600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --navy: #0b1f3a;
            --navy-deep: #061428;
            --orange: #e85a1c;
            --orange-soft: #f07a45;
            --slate: #5a6270;
            --mist: #eef1f5;
            --white: #ffffff;
            --progress: 68%;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html,
        body {
            min-height: 100%;
        }

        body {
            font-family: 'Barlow', sans-serif;
            color: var(--navy);
            background:
                radial-gradient(ellipse 80% 50% at 50% -10%, rgba(232, 90, 28, 0.08), transparent 55%),
                linear-gradient(165deg, #f7f8fa 0%, var(--mist) 45%, #e4e9f0 100%);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 2rem 1.25rem 5.5rem;
            overflow-x: hidden;
        }

        .bg-grid {
            position: fixed;
            inset: 0;
            background-image:
                linear-gradient(rgba(11, 31, 58, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(11, 31, 58, 0.03) 1px, transparent 1px);
            background-size: 48px 48px;
            pointer-events: none;
            z-index: 0;
        }

        .shell {
            position: relative;
            z-index: 1;
            width: min(100%, 40rem);
            text-align: center;
            animation: rise 0.8s ease-out both;
        }

        @keyframes rise {
            from {
                opacity: 0;
                transform: translateY(18px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .logo {
            width: min(100%, 22rem);
            height: auto;
            display: block;
            margin: 0 auto 2.25rem;
            animation: logo-in 1s ease-out 0.15s both;
        }

        @keyframes logo-in {
            from {
                opacity: 0;
                transform: scale(0.96);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .eyebrow {
            font-family: 'Barlow Condensed', sans-serif;
            font-size: 0.95rem;
            font-weight: 700;
            letter-spacing: 0.22em;
            text-transform: uppercase;
            color: var(--orange);
            margin-bottom: 0.65rem;
        }

        h1 {
            font-family: 'Barlow Condensed', sans-serif;
            font-size: clamp(2rem, 6vw, 2.75rem);
            font-weight: 700;
            letter-spacing: 0.04em;
            text-transform: uppercase;
            color: var(--navy);
            line-height: 1.1;
            margin-bottom: 0.75rem;
        }

        .lead {
            font-size: 1.05rem;
            font-weight: 400;
            color: var(--slate);
            line-height: 1.55;
            max-width: 28rem;
            margin: 0 auto 2rem;
        }

        .progress-block {
            margin: 0 auto 2.5rem;
            max-width: 26rem;
            animation: rise 0.8s ease-out 0.35s both;
        }

        .progress-meta {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            margin-bottom: 0.55rem;
            font-size: 0.8rem;
            font-weight: 600;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: var(--navy);
        }

        .progress-meta span:last-child {
            color: var(--orange);
        }

        .progress-track {
            height: 0.55rem;
            background: rgba(11, 31, 58, 0.1);
            overflow: hidden;
            position: relative;
        }

        .progress-fill {
            height: 100%;
            width: 0;
            background: linear-gradient(90deg, var(--navy) 0%, var(--orange) 100%);
            animation: fill-bar 1.6s ease-out 0.5s forwards;
            position: relative;
        }

        .progress-fill::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(
                90deg,
                transparent,
                rgba(255, 255, 255, 0.35),
                transparent
            );
            animation: shimmer 2s ease-in-out infinite;
        }

        @keyframes fill-bar {
            to {
                width: var(--progress);
            }
        }

        @keyframes shimmer {
            0% {
                transform: translateX(-100%);
            }
            100% {
                transform: translateX(100%);
            }
        }

        .contacts {
            display: grid;
            gap: 0.85rem;
            text-align: left;
            animation: rise 0.8s ease-out 0.5s both;
        }

        .contact-link {
            display: flex;
            align-items: flex-start;
            gap: 0.9rem;
            padding: 1rem 1.1rem;
            text-decoration: none;
            color: inherit;
            background: rgba(255, 255, 255, 0.72);
            border: 1px solid rgba(11, 31, 58, 0.08);
            border-left: 3px solid var(--orange);
            transition: background 0.2s ease, transform 0.2s ease, border-color 0.2s ease;
        }

        .contact-link:hover {
            background: var(--white);
            transform: translateX(3px);
            border-color: rgba(11, 31, 58, 0.14);
        }

        .contact-icon {
            flex-shrink: 0;
            width: 2.25rem;
            height: 2.25rem;
            display: grid;
            place-items: center;
            background: var(--navy);
            color: var(--white);
        }

        .contact-icon svg {
            width: 1.1rem;
            height: 1.1rem;
            fill: currentColor;
        }

        .contact-body strong {
            display: block;
            font-size: 0.72rem;
            font-weight: 600;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: var(--slate);
            margin-bottom: 0.2rem;
        }

        .contact-body span {
            font-size: 0.98rem;
            font-weight: 500;
            color: var(--navy);
            line-height: 1.4;
        }

        .footer-note {
            margin-top: 2rem;
            font-size: 0.8rem;
            color: var(--slate);
            letter-spacing: 0.04em;
        }

        /* WhatsApp flutuante — canto inferior esquerdo */
        .whatsapp-fab {
            position: fixed;
            right: 2.75rem;
            bottom: 2.75rem;
            z-index: 50;
            width: 3.75rem;
            height: 3.75rem;
            border-radius: 50%;
            background: #25d366;
            color: var(--white);
            display: grid;
            place-items: center;
            text-decoration: none;
            box-shadow: 0 8px 24px rgba(11, 31, 58, 0.22);
            transition: transform 0.2s ease;
        }

        .whatsapp-fab:hover {
            transform: scale(1.06);
        }

        .whatsapp-fab svg {
            width: 1.85rem;
            height: 1.85rem;
            fill: currentColor;
            position: relative;
            z-index: 2;
        }

        .whatsapp-fab::before,
        .whatsapp-fab::after {
            content: '';
            position: absolute;
            inset: -4px;
            border-radius: 50%;
            border: 2px solid var(--orange);
            opacity: 0;
            animation: pulse-ring 2s ease-out infinite;
        }

        .whatsapp-fab::after {
            animation-delay: 1s;
            border-color: var(--navy);
        }

        @keyframes pulse-ring {
            0% {
                transform: scale(1);
                opacity: 0.85;
            }
            100% {
                transform: scale(1.55);
                opacity: 0;
            }
        }

        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border: 0;
        }

        @media (max-width: 480px) {
            .logo {
                width: min(100%, 17rem);
                margin-bottom: 1.75rem;
            }

            .contacts {
                gap: 0.7rem;
            }

            .whatsapp-fab {
                left: 1rem;
                bottom: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="bg-grid" aria-hidden="true"></div>

    <main class="shell">
        <img
            class="logo"
            src="{{ asset('images/logo-arvifor.png') }}"
            alt="ARVIFOR Industrial — Da matéria-prima à peça pronta"
            width="480"
            height="140"
        >

        <p class="eyebrow">Em breve</p>
        <h1>Site em Construção</h1>
        <p class="lead">
            Estamos preparando o novo site da ARVIFOR Industrial.
            Enquanto isso, fale conosco pelos canais abaixo.
        </p>

        <div class="progress-block" aria-label="Progresso do site">
            <div class="progress-meta">
                <span>Progresso</span>
                <span>68%</span>
            </div>
            <div class="progress-track" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-fill"></div>
            </div>
        </div>

        <div class="contacts">
            <a class="contact-link" href="mailto:contato@arvifor.com.br">
                <span class="contact-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4-8 5L4 8V6l8 5 8-5v2z"/></svg>
                </span>
                <span class="contact-body">
                    <strong>E-mail</strong>
                    <span>contato@arvifor.com.br</span>
                </span>
            </a>

            <a class="contact-link" href="https://wa.me/5511910473456" target="_blank" rel="noopener noreferrer">
                <span class="contact-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1.1-.2 1.2.4 2.5.6 3.8.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.6.6 3.8.1.4 0 .8-.3 1.1l-2.2 2.9z"/></svg>
                </span>
                <span class="contact-body">
                    <strong>Telefone / WhatsApp</strong>
                    <span>(11) 91047-3456</span>
                </span>
            </a>

            <a
                class="contact-link"
                href="https://www.google.com/maps/search/?api=1&query=Estrada+Mary+Angels+Vieira+de+Souza,+555,+Filipinho,+Embu-Gua%C3%A7u+SP+06912-000"
                target="_blank"
                rel="noopener noreferrer"
            >
                <span class="contact-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2C8.1 2 5 5.1 5 9c0 5.2 7 13 7 13s7-7.8 7-13c0-3.9-3.1-7-7-7zm0 9.5c-1.4 0-2.5-1.1-2.5-2.5S10.6 6.5 12 6.5s2.5 1.1 2.5 2.5S13.4 11.5 12 11.5z"/></svg>
                </span>
                <span class="contact-body">
                    <strong>Endereço</strong>
                    <span>Estrada Mary Angels Vieira de Souza, 555 — Filipinho — Embu-Guaçu/SP — CEP 06912-000</span>
                </span>
            </a>
        </div>

        <p class="footer-note">ARVIFOR Industrial Ltda</p>
    </main>

    <a
        class="whatsapp-fab"
        href="https://wa.me/5511910473456?text={{ urlencode('Olá! Vim pelo site da ARVIFOR.') }}"
        target="_blank"
        rel="noopener noreferrer"
        aria-label="Falar no WhatsApp"
    >
        <span class="sr-only">WhatsApp</span>
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M17.5 14.4c-.3-.1-1.6-.8-1.8-.9-.2-.1-.4-.1-.6.1-.2.3-.7.9-.8 1-.2.1-.3.2-.6.1-1.6-.8-2.7-1.5-3.7-3.3-.3-.5.3-.4.8-1.4.1-.2 0-.3 0-.5l-.8-1.9c-.2-.5-.4-.4-.6-.4h-.5c-.2 0-.5.1-.7.3-.3.3-.9.9-.9 2.1s1 2.4 1.1 2.6c.1.2 1.9 2.9 4.6 4 .6.3 1.2.4 1.6.5.7.2 1.3.2 1.8.1.5-.1 1.6-.7 1.8-1.3.2-.6.2-1.2.2-1.3 0-.1-.2-.2-.5-.3zM12.1 21.8h-.1c-1.8 0-3.5-.5-5-1.3l-.4-.2-3.8 1 1-3.7-.2-.4A9.7 9.7 0 0 1 2.2 12C2.2 6.6 6.6 2.2 12 2.2c2.6 0 5 1 6.9 2.8a9.7 9.7 0 0 1 2.9 6.9c0 5.4-4.4 9.9-9.7 9.9zm8.2-17.9A11.5 11.5 0 0 0 12 0C5.4 0 0 5.4 0 12c0 2.1.6 4.2 1.6 6L0 24l6.2-1.6A12 12 0 0 0 12.1 24C18.6 24 24 18.6 24 12.1c0-3.1-1.2-6-3.7-8.2z"/>
        </svg>
    </a>
</body>
</html>
