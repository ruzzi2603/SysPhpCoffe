<section class="tourism-page">

    <div class="tourism-hero">

        <img
            src="https://commons.wikimedia.org/wiki/Special:FilePath/Pal%C3%A1cio%20das%20%C3%81guias%20-%20Guaxup%C3%A9%20Mg.jpg"
            alt="Palácio das Águias"
        >

        <div class="tourism-overlay"></div>

        <div class="tourism-content container">

            <span class="tourism-badge">
                Patrimônio Histórico
            </span>

            <h1>
                Palácio das Águias
            </h1>

            <p>
                Um dos edifícios históricos mais importantes de Guaxupé,
                reconhecido pela arquitetura marcante e importância cultural.
            </p>

        </div>

    </div>

    <div class="container tourism-grid">

        <div class="tourism-main">

            <div class="tourism-card">

                <h2>Importância histórica</h2>

                <p>
                    O Palácio das Águias é um dos símbolos arquitetônicos
                    mais conhecidos da cidade, representando parte importante
                    da memória urbana de Guaxupé.
                </p>

                <p>
                    Sua presença reforça o patrimônio histórico local
                    e valoriza o turismo cultural da região.
                </p>

            </div>

            <div class="tourism-card">

                <h2>Arquitetura</h2>

                <p>
                    O prédio possui características clássicas e detalhes
                    arquitetônicos elegantes, tornando-se referência visual
                    no centro histórico da cidade.
                </p>

            </div>

        </div>

        <aside class="tourism-sidebar">

            <div class="sidebar-card">

                <h3>Informações</h3>

                <ul>
                    <li>🏛️ Patrimônio histórico</li>
                    <li>📸 Local turístico</li>
                    <li>📍 Centro urbano</li>
                    <li>🎨 Valor cultural</li>
                </ul>

            </div>

        </aside>

    </div>

</section>

<style>
.tourism-page{
    padding-bottom:60px;
}

.tourism-hero{
    height:70vh;
    position:relative;
    overflow:hidden;
}

.tourism-hero img{
    width:100%;
    height:100%;
    object-fit:cover;
}

.tourism-overlay{
    position:absolute;
    inset:0;
    background:linear-gradient(
        180deg,
        rgba(0,0,0,.12),
        rgba(0,0,0,.68)
    );
}

.tourism-content{
    position:absolute;
    bottom:70px;
    left:0;
    right:0;
    z-index:2;
    color:white;
}

.tourism-badge{
    display:inline-flex;
    padding:8px 14px;
    border-radius:999px;
    background:rgba(255,255,255,.18);
    backdrop-filter:blur(12px);
    margin-bottom:18px;
}

.tourism-content h1{
    font-size:clamp(2.5rem,6vw,5rem);
    line-height:.95;
    margin-bottom:16px;
}

.tourism-content p{
    max-width:700px;
    line-height:1.9;
    color:rgba(255,255,255,.86);
}

.tourism-grid{
    margin-top:40px;
    display:grid;
    grid-template-columns:1fr 320px;
    gap:24px;
}

.tourism-card,
.sidebar-card{
    background:rgba(255,255,255,.74);
    border:1px solid rgba(40,60,90,.08);
    box-shadow:0 20px 50px rgba(40,60,90,.08);
    backdrop-filter:blur(16px);
    border-radius:28px;
}

.tourism-card{
    padding:28px;
    margin-bottom:22px;
}

.tourism-card p{
    line-height:1.9;
    color:#5c6b7d;
    margin-top:14px;
}

.sidebar-card{
    padding:24px;
    position:sticky;
    top:110px;
}

.sidebar-card ul{
    list-style:none;
    margin-top:18px;
}

.sidebar-card li{
    padding:12px 0;
    border-bottom:1px solid rgba(40,60,90,.08);
}

@media(max-width:900px){
    .tourism-grid{
        grid-template-columns:1fr;
    }
}
</style>