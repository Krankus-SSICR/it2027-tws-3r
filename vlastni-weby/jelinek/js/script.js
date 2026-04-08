// ============================================
// FINSKO WEB - JAVASCRIPT
// ============================================

// MOBILNÍ MENU TOGGLE
document.addEventListener('DOMContentLoaded', function() {
    const navToggle = document.getElementById('navToggle');
    const navList = document.getElementById('navList');

    if (navToggle) {
        navToggle.addEventListener('click', function() {
            navList.classList.toggle('active');
        });

        // Zavřít menu při kliknutí na odkaz
        const navLinks = navList.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                navList.classList.remove('active');
            });
        });
    }

    // Inicializace galerie pokud existuje
    initializeGallery();

    // Inicializace formuláře pokud existuje
    initializeForm();
});

// ============================================
// GALERIE - LIGHTBOX
// ============================================

function initializeGallery() {
    const galleryItems = document.querySelectorAll('.gallery-item');
    const modal = document.getElementById('imageModal');
    const modalImage = document.getElementById('modalImage');
    const modalTitle = document.getElementById('modalTitle');
    const modalDescription = document.getElementById('modalDescription');
    const closeBtn = document.querySelector('.modal-close');

    if (!galleryItems.length) return; // Pokud není galerie, přeskočit

    // Otevření modalu
    galleryItems.forEach((item, index) => {
        item.addEventListener('click', function() {
            const img = this.querySelector('img');
            const overlay = this.querySelector('.gallery-overlay');
            
            modalImage.src = img.src;
            modalTitle.textContent = overlay.querySelector('h3').textContent;
            modalDescription.textContent = overlay.querySelector('p').textContent;
            
            modal.classList.add('show');
            document.body.style.overflow = 'hidden'; // Vypnout scrollování
        });
    });

    // Zavření modalu
    function closeModal() {
        modal.classList.remove('show');
        document.body.style.overflow = 'auto'; // Zapnout scrollování
    }

    if (closeBtn) {
        closeBtn.addEventListener('click', closeModal);
    }

    // Zavření modalu kliknutím mimo obsah
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            closeModal();
        }
    });

    // Zavření modalu klávesou ESC
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modal.classList.contains('show')) {
            closeModal();
        }
    });

    // Navigace mezi obrázky (klávesy šipky)
    let currentImageIndex = 0;

    function showImage(index) {
        if (index < 0) {
            currentImageIndex = galleryItems.length - 1;
        } else if (index >= galleryItems.length) {
            currentImageIndex = 0;
        } else {
            currentImageIndex = index;
        }

        const item = galleryItems[currentImageIndex];
        const img = item.querySelector('img');
        const overlay = item.querySelector('.gallery-overlay');

        modalImage.src = img.src;
        modalTitle.textContent = overlay.querySelector('h3').textContent;
        modalDescription.textContent = overlay.querySelector('p').textContent;
    }

    document.addEventListener('keydown', function(e) {
        if (!modal.classList.contains('show')) return;

        if (e.key === 'ArrowRight') {
            showImage(currentImageIndex + 1);
        } else if (e.key === 'ArrowLeft') {
            showImage(currentImageIndex - 1);
        }
    });
}

// ============================================
// FORMULÁŘ - VALIDACE
// ============================================

function initializeForm() {
    const contactForm = document.getElementById('contactForm');
    
    if (!contactForm) return; // Pokud není formulář, přeskočit

    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();

        // Sběr dat
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const subject = document.getElementById('subject').value.trim();
        const message = document.getElementById('message').value.trim();

        // Validace
        let errors = [];

        if (!name) {
            errors.push('Jméno je povinné');
        }

        if (!email) {
            errors.push('Email je povinný');
        } else if (!isValidEmail(email)) {
            errors.push('Email není v platném formátu');
        }

        if (!subject) {
            errors.push('Předmět je povinný');
        }

        if (!message) {
            errors.push('Zpráva je povinná');
        }

        // Zobrazení výsledků
        const alertContainer = document.getElementById('formAlert');
        alertContainer.innerHTML = '';

        if (errors.length > 0) {
            // Chyby
            const errorHTML = errors.map(error => 
                `<div class="alert alert-error"><strong>Chyba:</strong> ${error}</div>`
            ).join('');
            alertContainer.innerHTML = errorHTML;
        } else {
            // Úspěch - simulace odesílání
            const successMessage = `
                <div class="alert alert-success">
                    <strong>Děkujeme!</strong> Vaše zpráva byla odeslána. 
                    Brzy se vám ozveme.
                </div>
            `;
            alertContainer.innerHTML = successMessage;

            // Resetování formuláře
            contactForm.reset();

            // Skrytí zprávy po 5 sekundách
            setTimeout(function() {
                alertContainer.innerHTML = '';
            }, 5000);

            // POZNÁMKA: V produkci by se zde poslala data na server
            console.log({
                name: name,
                email: email,
                subject: subject,
                message: message,
                timestamp: new Date().toISOString()
            });
        }
    });
}

// ============================================
// UTILITY FUNKCE
// ============================================

// Validace emailu
function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

// Animace při načítání
function animateOnScroll() {
    const elements = document.querySelectorAll('section, .card, .gallery-item');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    });

    elements.forEach(element => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(20px)';
        element.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(element);
    });
}

// Spuštění animace
document.addEventListener('DOMContentLoaded', animateOnScroll);

// ============================================
// DARK MODE - VOLITELNĚ (bonus)
// ============================================

// Kontrola uložené preference
function checkDarkModePreference() {
    const preference = localStorage.getItem('darkMode');
    if (preference === 'enabled') {
        document.body.classList.add('dark-mode');
    }
}

// Spuštění při načítání
document.addEventListener('DOMContentLoaded', checkDarkModePreference);

// ============================================
// SMOOTH SCROLL
// ============================================

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        const href = this.getAttribute('href');
        if (href !== '#' && document.querySelector(href)) {
            e.preventDefault();
            document.querySelector(href).scrollIntoView({
                behavior: 'smooth'
            });
        }
    });
});
