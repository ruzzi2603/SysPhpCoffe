<footer class="site-footer">
        <div class="container footer-grid">
            <div>
                <div class="footer-brand">
                    <div class="footer-badge">G</div>
                    <div>
                        <h3>Guaxupé</h3>
                        <p>Portal institucional com foco em turismo, cultura e identidade mineira.</p>
                    </div>
                </div>
            </div>

            <div>
                <h4>Links úteis</h4>
                <a href="#sobre">Sobre a cidade</a>
                <a href="#turismo">Pontos turísticos</a>
                <a href="#cultura">Cultura local</a>
                <a href="#galeria">Galeria</a>
            </div>

            <div>
                <h4>Oficial</h4>
                <a href="https://www.guaxupe.mg.gov.br/" target="_blank" rel="noopener noreferrer">Prefeitura de Guaxupé</a>
                <a href="https://www.instagram.com/prefguaxupe/" target="_blank" rel="noopener noreferrer">Instagram oficial</a>
            </div>
        </div>

        <div class="container footer-bottom">
            <span>© <?= date('Y') ?> Guaxupé - Minas Gerais. Todos os direitos reservados.</span>
            <span>Projeto institucional em PHP</span>
        </div>
    </footer>

    <style>
        .site-footer {
            margin-top: 24px;
            padding: 50px 0 24px;
            border-top: 1px solid rgba(32,48,67,.08);
            background: rgba(255,255,255,.52);
            backdrop-filter: blur(14px);
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.2fr .8fr .8fr;
            gap: 22px;
            padding-bottom: 26px;
        }

        .footer-brand {
            display: flex;
            align-items: flex-start;
            gap: 14px;
        }

        .footer-badge {
            width: 42px;
            height: 42px;
            border-radius: 16px;
            display: grid;
            place-items: center;
            color: #fff;
            background: linear-gradient(135deg, #8fb9d8, #6ea6cc);
            box-shadow: 0 12px 28px rgba(143,185,216,.42);
            flex: 0 0 auto;
        }

        .site-footer h3,
        .site-footer h4 {
            margin-bottom: 12px;
            font-family: "DM Sans", sans-serif;
        }

        .site-footer p,
        .site-footer a,
        .site-footer span {
            color: var(--muted);
            line-height: 1.9;
            display: block;
        }

        .site-footer a:hover {
            color: var(--text);
        }

        .footer-bottom {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 14px;
            padding-top: 18px;
            border-top: 1px solid rgba(32,48,67,.08);
            font-size: .92rem;
        }

        @media (max-width: 860px) {
            .footer-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</body>
</html>