<?php include 'includes/header.php'; ?>

<section class="hero">
    <h1>📸 Fotogalerie</h1>
    <p>Krásné fotografie z různých koutů Finska</p>
</section>

<section>
    <h2>Galerie fotografií</h2>
    <p>Klikněte na jakoukoli fotografii pro zvětšení a další informace.</p>
    
    <div class="gallery">
        <?php
            // Incude konfigurace s galerií
            require_once 'includes/config.php';
            
            // Procházení obrázků z konfigurace
            foreach ($gallery_images as $image):
        ?>
        <div class="gallery-item">
            <img src="<?php echo $image['src']; ?>" alt="<?php echo $image['title']; ?>">
            <div class="gallery-overlay">
                <h3><?php echo $image['title']; ?></h3>
                <p><?php echo $image['description']; ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- LIGHTBOX MODAL -->
<div id="imageModal" class="modal">
    <div class="modal-content">
        <button class="modal-close">&times;</button>
        <img id="modalImage" src="" alt="" class="modal-image">
        <div class="modal-info">
            <h2 id="modalTitle"></h2>
            <p id="modalDescription"></p>
        </div>
    </div>
</div>

<section>
    <h2>O galerii</h2>
    <p>Tato galerie obsahuje fotografie z různých částí Finska, od nádherných jezер přes severní světla až po moderní helsinské architektury. Všechny fotografie jsou vybrány tak, aby reprezentovaly krásu a rozmanitost finské přírody a kultury.</p>
    
    <h3>Pokyny pro prohlížení:</h3>
    <ul>
        <li>Klikněte na fotografii pro zvětšení</li>
        <li>Použijte levou a pravou šipku klávesnice pro navigaci mezi fotografiemi</li>
        <li>Stiskněte ESC pro zavření náhledu</li>
        <li>Fotografií si můžete prohlédnout více detailů a informací</li>
    </ul>
</section>

<?php include 'includes/footer.php'; ?>
