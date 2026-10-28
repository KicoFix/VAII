<?php

/** @var \Framework\Support\LinkGenerator $link */
?>

<main>
    <section class="intro" aria-labelledby="intro-title">
        <p class="eyebrow">Vedomosti v hre</p>
        <h1 id="intro-title">Zahrajte si kvíz podľa svojej chuti</h1>
        <p>
            Vyberte si kategóriu, odpovedzte na otázky a porovnajte svoje skóre
            s ostatnými hráčmi.
        </p>
    </section>

    <section
            class="category-section page-width"
            id="kategorie"
            aria-labelledby="categories-title"
    >
        <div class="section-heading">
            <div>
                <p class="eyebrow">Vyberte si kategóriu</p>
                <h2 id="categories-title">Dostupné kvízy</h2>
            </div>
            <span class="section-note">3 kategórie</span>
        </div>

        <div class="quiz-grid">
            <article class="quiz-card">
                <div class="card-topline">
                    <span class="category-icon icon-blue" aria-hidden="true">⌘</span>
                    <span class="category-label">Technológie</span>
                </div>
                <h3>Informatika</h3>
                <p class="card-description">
                    Otestujte si vedomosti o počítačoch, programovaní a digitálnom svete.
                </p>
                <div
                        class="image-placeholder"
                        role="img"
                        aria-label="Miesto pre obrázok ku kvízu Informatika"
                >
                    <span class="placeholder-symbol" aria-hidden="true">▧</span>
                    <span>Obrázok ku kvízu</span>
                </div>
                <section class="leaderboard" id="sutaz" aria-labelledby="leaderboard-it">
                    <h4 id="leaderboard-it">Najlepší hráči</h4>
                    <ol>
                        <li>
                            <span><span class="rank">1</span> Alex</span>
                            <strong>980 b.</strong>
                        </li>
                        <li>
                            <span><span class="rank">2</span> Nina</span>
                            <strong>920 b.</strong>
                        </li>
                        <li>
                            <span><span class="rank">3</span> Tomáš</span>
                            <strong>870 b.</strong>
                        </li>
                    </ol>
                </section>
                <a class="primary-button" href="quiz.html">
                    Spustiť kvíz <span aria-hidden="true">→</span>
                </a>
            </article>

            <article class="quiz-card">
                <div class="card-topline">
                    <span class="category-icon icon-violet" aria-hidden="true">π</span>
                    <span class="category-label">Logika a čísla</span>
                </div>
                <h3>Matematika</h3>
                <p class="card-description">
                    Riešte zaujímavé príklady a precvičte si logické myslenie.
                </p>
                <div
                        class="image-placeholder"
                        role="img"
                        aria-label="Miesto pre obrázok ku kvízu Matematika"
                >
                    <span class="placeholder-symbol" aria-hidden="true">▧</span>
                    <span>Obrázok ku kvízu</span>
                </div>
                <section class="leaderboard" aria-labelledby="leaderboard-math">
                    <h4 id="leaderboard-math">Najlepší hráči</h4>
                    <ol>
                        <li>
                            <span><span class="rank">1</span> Lucia</span>
                            <strong>1 000 b.</strong>
                        </li>
                        <li>
                            <span><span class="rank">2</span> Peter</span>
                            <strong>940 b.</strong>
                        </li>
                        <li>
                            <span><span class="rank">3</span> Ema</span>
                            <strong>890 b.</strong>
                        </li>
                    </ol>
                </section>
                <a class="primary-button" href="quiz.html">
                    Spustiť kvíz <span aria-hidden="true">→</span>
                </a>
            </article>

            <article class="quiz-card">
                <div class="card-topline">
                    <span class="category-icon icon-orange" aria-hidden="true">✦</span>
                    <span class="category-label">Rôzne témy</span>
                </div>
                <h3>Všeobecný prehľad</h3>
                <p class="card-description">
                    Zistite, koľko toho viete o svete, prírode, kultúre a histórii.
                </p>
                <div
                        class="image-placeholder"
                        role="img"
                        aria-label="Miesto pre obrázok ku kvízu Všeobecný prehľad"
                >
                    <span class="placeholder-symbol" aria-hidden="true">▧</span>
                    <span>Obrázok ku kvízu</span>
                </div>
                <section class="leaderboard" aria-labelledby="leaderboard-general">
                    <h4 id="leaderboard-general">Najlepší hráči</h4>
                    <ol>
                        <li>
                            <span><span class="rank">1</span> Adam</span>
                            <strong>960 b.</strong>
                        </li>
                        <li>
                            <span><span class="rank">2</span> Sára</span>
                            <strong>910 b.</strong>
                        </li>
                        <li>
                            <span><span class="rank">3</span> Jakub</span>
                            <strong>850 b.</strong>
                        </li>
                    </ol>
                </section>
                <a class="primary-button" href="quiz.html">
                    Spustiť kvíz <span aria-hidden="true">→</span>
                </a>
            </article>
        </div>
    </section>

    <section class="signin-note page-width" id="prihlasenie" aria-label="Prihlásenie">
        <div>
            <strong>Chcete si ukladať svoje výsledky?</strong>
            <p>Prihláste sa a sledujte svoj pokrok v kvízoch.</p>
        </div>
        <a class="secondary-button" href="#prihlasenie">Prihlásiť sa</a>
    </section>
</main>