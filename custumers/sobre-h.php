<?php include __DIR__ . "/../config.php";
include(HEADER_TEMPLATE); ?>

<section class="viagem">
    <div class="container viagem-grid">

        <div class="viagem-foto">
            <img src="<?php echo BASEURL; ?>img/hol.jpg" alt="Natal Expoflora em Holambra">
            <span class="viagem-selo">12/12</span>
        </div>

        <div class="viagem-info">
            <span class="texto-tag">Excursão</span>
            <h1>A magia do Natal floresce em Holambra!</h1>

            <p class="viagem-intro">Prepare-se para viver uma experiência encantadora no <strong>Natal Expoflora</strong>, em Holambra! 🌷🎅</p>

            <p>Um passeio para entrar no clima mais mágico do ano, cercado por luzes, cores, flores, cenários natalinos e toda a beleza e o charme de Holambra.</p>

            <ul class="viagem-destaques">
                <li><span>🎄</span> Decorações e cenários natalinos</li>
                <li><span>✨</span> Muitas luzes e ambientes encantadores</li>
                <li><span>📸</span> Espaços perfeitos para lindas fotos</li>
                <li><span>🌷</span> Flores e o charme especial de Holambra</li>
                <li><span>🎁</span> Clima de Natal para toda a família</li>
                <li><span>🍴</span> Opções de gastronomia para aproveitar durante o passeio</li>
                <li><span>❤️</span> E muitos momentos especiais para guardar na memória!</li>
            </ul>

            <div class="viagem-dados">
                <div class="viagem-dado">
                    <span class="dado-icone">🗓️</span>
                    <div><small>Data</small><strong>Dia 12/12</strong></div>
                </div>
                <div class="viagem-dado">
                    <span class="dado-icone">🚌</span>
                    <div><small>Saída de Sorocaba</small><strong>às 14h</strong></div>
                </div>
            </div>

            <div class="viagem-precos">
                <div class="preco-normal">
                    <small>💳 Por pessoa</small>
                    <strong>R$ 295,00</strong>
                    <span>em até 4x sem juros</span>
                </div>
                <div class="preco-pix">
                    <small>💰 10% OFF no Pix ou dinheiro</small>
                    <strong>R$ 265,50</strong>
                    <span>à vista</span>
                </div>
            </div>

            <div class="viagem-incluso">
                <h2>🎟️ Incluso no passeio</h2>
                <ul>
                    <li>🚐 Transporte em van executiva</li>
                    <li>🙋‍♀️ Guia de Turismo credenciada – Cadastur</li>
                    <li>🥪 Kit lanche</li>
                    <li>🎫 Ingresso para o Natal Expoflora</li>
                </ul>
            </div>

            <p class="viagem-fecho">🎄❤️ Venha viver uma noite especial e se encantar com a magia do Natal em Holambra!</p>

            <a class="viagem-cta" target="_blank" rel="noopener"
               href="https://wa.me/5515996065186?text=<?php echo rawurlencode('Olá! Quero garantir meu lugar na excursão Natal Expoflora em Holambra (12/12).'); ?>">
                📲 Garanta o seu lugar pelo WhatsApp
            </a>
            <p class="viagem-vagas">As vagas são limitadas. Vendas com a MLTur – Turismo e Viagens · WhatsApp (15) 99606-5186</p>
        </div>

    </div>
</section>

<?php include(FOOTER_TEMPLATE); ?>