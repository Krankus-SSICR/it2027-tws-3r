<?php include 'includes/header.php'; ?>

<section class="hero">
    <h1>💬 Kontakt</h1>
    <p>Máte otázky o Finsku? Napište nám! Rádi si s vámi popovídáme.</p>
</section>

<section>
    <h2>Kontaktní formulář</h2>
    
    <div id="formAlert"></div>

    <form id="contactForm" class="form-container" method="POST">
        <div class="form-group">
            <label for="name">Vaše jméno:</label>
            <input type="text" id="name" name="name" placeholder="Zadejte vaše jméno" required>
        </div>

        <div class="form-group">
            <label for="email">Váš email:</label>
            <input type="email" id="email" name="email" placeholder="vase@email.cz" required>
        </div>

        <div class="form-group">
            <label for="subject">Předmět:</label>
            <input type="text" id="subject" name="subject" placeholder="Téma vaší zprávy" required>
        </div>

        <div class="form-group">
            <label for="category">Kategorie:</label>
            <select id="category" name="category">
                <option value="general">Obecná otázka</option>
                <option value="tourism">Cestovní rady</option>
                <option value="culture">Kultura a tradice</option>
                <option value="business">Obchodní spolupráce</option>
                <option value="other">Ostatní</option>
            </select>
        </div>

        <div class="form-group">
            <label for="message">Vaše zpráva:</label>
            <textarea id="message" name="message" placeholder="Napište sem vaši zprávu..." required></textarea>
        </div>

        <button type="submit" class="btn btn-primary" style="width: 100%; font-size: 1.1rem; padding: 1rem;">
            <i class="fas fa-paper-plane"></i> Odeslat zprávu
        </button>
    </form>
</section>

<section>
    <h2>Další informace</h2>
    
    <div class="card-grid">
        <div class="card">
            <div style="padding: 2rem; background: linear-gradient(135deg, #003580, #0066cc); color: white; text-align: center; border-radius: 8px 8px 0 0;">
                <i class="fas fa-map-marker-alt" style="font-size: 2.5rem; margin-bottom: 1rem; display: block;"></i>
            </div>
            <div class="card-content">
                <h3>Sídlo</h3>
                <p>Finsko Web<br>Virtuální webové stránky<br>O Finsku</p>
            </div>
        </div>

        <div class="card">
            <div style="padding: 2rem; background: linear-gradient(135deg, #0066cc, #00a8e8); color: white; text-align: center; border-radius: 8px 8px 0 0;">
                <i class="fas fa-envelope" style="font-size: 2.5rem; margin-bottom: 1rem; display: block;"></i>
            </div>
            <div class="card-content">
                <h3>Email</h3>
                <p><a href="mailto:info@finskoweb.cz" style="color: #003580;">info@finskoweb.cz</a></p>
            </div>
        </div>

        <div class="card">
            <div style="padding: 2rem; background: linear-gradient(135deg, #00a8e8, #0284c7); color: white; text-align: center; border-radius: 8px 8px 0 0;">
                <i class="fas fa-phone" style="font-size: 2.5rem; margin-bottom: 1rem; display: block;"></i>
            </div>
            <div class="card-content">
                <h3>Telefon</h3>
                <p>+420 XXX XXX XXX</p>
            </div>
        </div>
    </div>
</section>

<section>
    <h2>Časté otázky</h2>
    
    <h3>❓ Jaké je nejlepší období pro návštěvu Finska?</h3>
    <p>Nejlepší období závisí na tom, co chcete vidět. V létě (červen-srpen) máte dlouhé dny a příjemné počasí. V zimě (listopadu-březen) můžete vidět severní světla. Podzim (září-říjen) nabízí krásné barvy a ještě viditelná severní světla.</p>

    <h3>❓ Kolik stojí cesta do Finska?</h3>
    <p>Finsko je dražší zemí. Průměrné náklady jsou vyšší než v ostatních evropských zemích. Ubytování, jídlo a aktivity se pohybují v rozmezí 50-100 EUR za den v závislosti na preferovaném standardu.</p>

    <h3>❓ Jaký jazyk se ve Finsku mluví?</h3>
    <p>Oficiální jazyky jsou finština a švédština. Angličtina je velmi rozšířená, zvláště mezi mladší generací a v turismu.</p>

    <h3>❓ Je Finsko bezpečné?</h3>
    <p>Ano, Finsko je jednou z nejbezpečnějších zemí na světě. Může se bez obav cestovat po zemi bez zvláštních obezretostí.</p>

    <h3>❓ Jak je to se saunami?</h3>
    <p>Sauna je velmi důležitou součástí finské kultury. Veřejné sauna jsou dostupné v různých městech a mnoho hotelů má saunu. Je to bezpečné a příjemné zažití.</p>

    <h3>❓ Jak se dostanu do Finska?</h3>
    <p>Finsko se dá dosáhnout letadlem (hlavní letiště je v Helsinkách), vlakem (ze Švédska nebo Ruska), nebo autem přes Švédsko. Letadlo je nejrychlejší a nejčastěji používaný způsob.</p>
</section>

<section>
    <h2>Následujte nás na sociálních sítích</h2>
    <p>Chcete zůstat aktuální s nejnovějšími informacemi o Finsku? Sledujte nás:</p>
    
    <div class="social-links" style="margin-top: 2rem; justify-content: center; gap: 2rem;">
        <a href="#" title="Facebook" style="font-size: 3rem; color: #003580;"><i class="fab fa-facebook"></i></a>
        <a href="#" title="Instagram" style="font-size: 3rem; color: #003580;"><i class="fab fa-instagram"></i></a>
        <a href="#" title="Twitter" style="font-size: 3rem; color: #003580;"><i class="fab fa-twitter"></i></a>
        <a href="#" title="YouTube" style="font-size: 3rem; color: #003580;"><i class="fab fa-youtube"></i></a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
