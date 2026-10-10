<?php include "config.php";
include(HEADER_TEMPLATE); ?>

<section class="hero back">
    <div class="hero-content container">

        <div class="hero-text">
            <h1>Descubra<br>novos destinos</h1>
            <p>Viajar é viver experiências, conhecer culturas e colecionar momentos inesquecíveis.</p>
        </div>

    </div>

</section>

<section class="excursoes" id="exc">
    <div class="container mt-4">
        <h2 class="excursoes-titulo">Próximas Excursões</h2>
        <p class="excursoes-sub">Destinos especiais para viver novas experiências</p>

        <div class="excursoes-grid">

            <article class="exc-card">
                <div class="exc-img">
                    <img src="<?php echo BASEURL; ?>img/hol.jpg" alt="Natal Expoflora em Holambra">
                    <span class="exc-data">12 DEZ<br>a 13 DEZ</span>
                </div>
                <div class="exc-body">
                    <h3 class="exc-nome">Natal Expoflora</h3>
                    <p class="exc-desc">Que tal viver uma noite cheia de luzes, flores e toda a magia do Natal em Holambra?<br>A magia do Natal floresce em Holambra. Vem com a gente!</p>
                    <a href="excursões.php" class="exc-btn">Saiba mais <span aria-hidden="true">→</span></a>
                </div>
            </article>

        </div>
    </div>
</section>


<section class="sobre-mltur">
    <div class="container sobre-wrap">
        <div class="sobre-img">
            <img src="<?php echo BASEURL; ?>img/chapeu.jpeg" alt="Chapéu, mapa, passaporte e óculos de viagem">
        </div>

        <div class="sobre-texto">
            <span class="sobre-tag">SOBRE A MLTUR</span>
            <h2>Transformando destinos<br>em boas histórias</h2>
            <p>A MLTur é uma agência de viagens e turismo especializada em excursões. Nosso compromisso é oferecer experiências únicas, com segurança, conforto e um atendimento próximo, porque acreditamos que viajar é muito mais do que conhecer lugares: é colecionar momentos.</p>
            <a href="sobre-nos.php" class="exc-btn">Saiba mais sobre nós <span aria-hidden="true">→</span></a>
        </div>

        <ul class="sobre-diferenciais">
            <li>
                <span class="dif-icone">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M21 16v-2l-8-5V3.5a1.5 1.5 0 0 0-3 0V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5z"/></svg>
                </span>
                <span>Experiência<br>e credibilidade</span>
            </li>
            <li>
                <span class="dif-icone">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M16 11a3 3 0 1 0-3-3 3 3 0 0 0 3 3zM8 11a3 3 0 1 0-3-3 3 3 0 0 0 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5C15 14.17 10.33 13 8 13zm8 0c-.29 0-.62.02-.97.05A4.22 4.22 0 0 1 17 16.5V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                </span>
                <span>Atendimento<br>personalizado</span>
            </li>
            <li>
                <span class="dif-icone">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2 4 5v6c0 5 3.4 9.7 8 11 4.6-1.3 8-6 8-11V5zm-1.2 14.2L7.5 13l1.4-1.4 1.9 1.9 4.3-4.3 1.4 1.4z"/></svg>
                </span>
                <span>Segurança em<br>todas as viagens</span>
            </li>
            <li>
                <span class="dif-icone">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 3 7.2 5H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-3.2L15 3zm3 15a5 5 0 1 1 5-5 5 5 0 0 1-5 5zm0-8a3 3 0 1 0 3 3 3 3 0 0 0-3-3z"/></svg>
                </span>
                <span>Roteiros para<br>todos os perfis</span>
            </li>
        </ul>
    </div>
</section>

<section class="depoimentos-home">
    <div class="container">
        <h2 class="excursoes-titulo">O que nossos viajantes dizem</h2>
        <p class="excursoes-sub">Histórias reais de quem já viveu essa experiência com a MLTur</p>

            <div class="dep-trilho" id="depTrilho">
                <article class="dep-card">
                    <p class="dep-texto">“Tudo muito organizado, desde a saída até o retorno. Já viajei outras vezes e sempre superou minhas expectativas!”</p>
                    <div class="dep-autor">
                        <img src="<?php echo BASEURL; ?>img\p1.png" alt="Ana Paula" onerror="this.style.visibility='hidden'">
                        <div>
                            <strong>Ana Paula</strong>
                            <small>São Paulo - SP</small>
                        </div>
                        <span class="dep-estrelas" aria-label="5 estrelas">★★★★★</span>
                    </div>
                </article>

                <article class="dep-card">
                    <p class="dep-texto">“Viagem maravilhosa! Conforto, pontualidade e um grupo incrível. Já estou na próxima!”</p>
                    <div class="dep-autor">
                        <img src="<?php echo BASEURL; ?>img\p1.png" alt="Ricardo Lima" onerror="this.style.visibility='hidden'">
                        <div>
                            <strong>Ricardo Lima</strong>
                            <small>Campinas - SP</small>
                        </div>
                        <span class="dep-estrelas" aria-label="5 estrelas">★★★★★</span>
                    </div>
                </article>

                <article class="dep-card">
                    <p class="dep-texto">“A MLTur cuida de tudo e a gente só se preocupa em aproveitar. Recomendo de olhos fechados!”</p>
                    <div class="dep-autor">
                        <img src="<?php echo BASEURL; ?>img\p1.png" alt="Mariana Souza" onerror="this.style.visibility='hidden'">
                        <div>
                            <strong>Mariana Souza</strong>
                            <small>Sorocaba - SP</small>
                        </div>
                        <span class="dep-estrelas" aria-label="5 estrelas">★★★★★</span>
                    </div>
                </article>
            </div>

        </div>
    </div>
</section>

<section class="newsletter">
    <div class="container newsletter-wrap">
        <div class="newsletter-texto">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 4-8 5-8-5V6l8 5 8-5z"/></svg>
            <div>
                <h3>Receba nossos roteiros e novidades!</h3>
                <p>Cadastre-se e fique por dentro das próximas viagens.</p>
            </div>
        </div>

        <form class="newsletter-form" action="contato.php" method="post">
            <input type="email" name="email" placeholder="Seu melhor e-mail" aria-label="Seu melhor e-mail" required>
            <button type="submit">Quero receber</button>
        </form>
    </div>
</section>

<script>
    (function () {
        var trilho = document.getElementById('depTrilho');
        if (!trilho) return;
        function passo() {
            var card = trilho.querySelector('.dep-card');
            return card ? card.offsetWidth + 20 : 300;
        }
        document.getElementById('depAnterior').addEventListener('click', function () {
            trilho.scrollBy({ left: -passo(), behavior: 'smooth' });
        });
        document.getElementById('depProximo').addEventListener('click', function () {
            trilho.scrollBy({ left: passo(), behavior: 'smooth' });
        });
    })();
</script>

<?php include(FOOTER_TEMPLATE); ?>