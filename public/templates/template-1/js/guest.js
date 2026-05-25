/**
 * Petrikov Lumina - Wedding Invitation Template 1
 * Guest JS - Interactive Functionality
 */

// Initialize AOS (Animate On Scroll)
document.addEventListener('DOMContentLoaded', function() {
    // Initialize AOS
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 1000,
            easing: 'ease-out-cubic',
            once: true,
            offset: 50
        });
    }

    // Load progress
    simulateLoading();

    // Initialize countdown
    initCountdown();

    // Initialize music (if audio exists)
    initAudio();
});

// Loading Animation
function simulateLoading() {
    const progressBar = document.getElementById('progress-bar');
    const progressInfo = document.getElementById('progress-info');
    const loadingPage = document.getElementById('loading');

    let progress = 0;
    const loadingMessages = [
        'Memuat gambar...',
        'Memuat font...',
        'Memuat elemen...',
        'Hampir selesai...'
    ];

    const interval = setInterval(() => {
        progress += Math.random() * 20;
        if (progress > 100) progress = 100;

        if (progressBar) {
            progressBar.style.width = progress + '%';
        }

        if (progressInfo) {
            const messageIndex = Math.floor(progress / 25);
            progressInfo.textContent = loadingMessages[Math.min(messageIndex, loadingMessages.length - 1)];
        }

        if (progress >= 100) {
            clearInterval(interval);
            setTimeout(() => {
                if (loadingPage) {
                    loadingPage.style.opacity = '0';
                    loadingPage.style.transition = 'opacity 0.5s ease';
                    setTimeout(() => {
                        loadingPage.style.display = 'none';
                    }, 500);
                }
            }, 500);
        }
    }, 150);
}

// Countdown Timer
function initCountdown() {
    const targetDate = new Date(document.body.getAttribute('data-time') || '2025-06-15 10:00:00').getTime();

    function updateCountdown() {
        const now = new Date().getTime();
        const distance = targetDate - now;

        if (distance < 0) {
            // Wedding day has arrived
            updateDisplay(0, 0, 0, 0);
            return;
        }

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        updateDisplay(days, hours, minutes, seconds);
    }

    function updateDisplay(days, hours, minutes, seconds) {
        // Main countdown (in main section)
        const daysEl = document.getElementById('days');
        const hoursEl = document.getElementById('hours');
        const minutesEl = document.getElementById('minutes');
        const secondsEl = document.getElementById('seconds');

        if (daysEl) daysEl.textContent = String(days).padStart(2, '0');
        if (hoursEl) hoursEl.textContent = String(hours).padStart(2, '0');
        if (minutesEl) minutesEl.textContent = String(minutes).padStart(2, '0');
        if (secondsEl) secondsEl.textContent = String(seconds).padStart(2, '0');

        // Mini countdown (in home section)
        const daysHomeEl = document.getElementById('days-home');
        const hoursHomeEl = document.getElementById('hours-home');
        const minutesHomeEl = document.getElementById('minutes-home');
        const secondsHomeEl = document.getElementById('seconds-home');

        if (daysHomeEl) daysHomeEl.textContent = String(days).padStart(2, '0');
        if (hoursHomeEl) hoursHomeEl.textContent = String(hours).padStart(2, '0');
        if (minutesHomeEl) minutesHomeEl.textContent = String(minutes).padStart(2, '0');
        if (secondsHomeEl) secondsHomeEl.textContent = String(seconds).padStart(2, '0');
    }

    updateCountdown();
    setInterval(updateCountdown, 1000);
}

// Open Invitation
function openInvitation() {
    const welcomePage = document.getElementById('welcome');
    const root = document.getElementById('root');

    if (welcomePage) {
        welcomePage.classList.add('hidden');
        setTimeout(() => {
            welcomePage.style.display = 'none';
        }, 500);
    }

    if (root) {
        root.style.opacity = '1';
    }

    // Play audio if available
    const audioSrc = document.body.getAttribute('data-audio');
    if (audioSrc) {
        audio.play().catch(e => console.log('Audio autoplay blocked'));
    }

    // Trigger confetti if enabled
    if (document.body.getAttribute('data-confetti') === 'true') {
        triggerConfetti();
    }
}

// Open Image Modal
function openModal(element) {
    const modal = document.getElementById('imageModal');
    const modalImage = document.getElementById('modal-image');

    if (modalImage && element) {
        modalImage.src = element.src || element.getAttribute('data-src') || element.currentSrc;
    }

    if (modal) {
        const bootstrapModal = new bootstrap.Modal(modal);
        bootstrapModal.show();
    }
}

// Audio Controls
let isPlaying = false;
let audio = null;

function initAudio() {
    const audioSrc = document.body.getAttribute('data-audio');
    const btnMusic = document.getElementById('btn-music');

    if (audioSrc) {
        audio = new Audio(audioSrc);
        audio.loop = true;
        audio.volume = 0.5;
    }

    if (btnMusic) {
        btnMusic.addEventListener('click', toggleMusic);
    }
}

function toggleMusic() {
    const btnMusic = document.getElementById('btn-music');

    if (!audio) {
        showToast('Musik tidak tersedia');
        return;
    }

    if (audio.paused) {
        audio.play().catch(e => console.log('Audio play blocked'));
        isPlaying = true;
        if (btnMusic) {
            btnMusic.innerHTML = '<i class="fa-solid fa-pause"></i>';
        }
    } else {
        audio.pause();
        isPlaying = false;
        if (btnMusic) {
            btnMusic.innerHTML = '<i class="fa-solid fa-music"></i>';
        }
    }
}

// Theme Toggle
function toggleTheme() {
    const html = document.documentElement;
    const currentTheme = html.getAttribute('data-bs-theme');
    const btnTheme = document.getElementById('btn-theme');

    if (currentTheme === 'dark') {
        html.setAttribute('data-bs-theme', 'light');
        if (btnTheme) {
            btnTheme.innerHTML = '<i class="fa-solid fa-moon"></i>';
            btnTheme.style.background = '#1A1A2E';
            btnTheme.style.color = 'white';
        }
    } else {
        html.setAttribute('data-bs-theme', 'dark');
        if (btnTheme) {
            btnTheme.innerHTML = '<i class="fa-solid fa-sun"></i>';
            btnTheme.style.background = '#C9A961';
            btnTheme.style.color = 'white';
        }
    }
}

// Copy to Clipboard
function copyToClipboard(text) {
    navigator.clipboard.writeText(text).then(() => {
        showToast('Nomor rekening berhasil disalin!');
    }).catch(err => {
        console.error('Failed to copy: ', err);
        showToast('Gagal menyalin nomor rekening');
    });
}

// Toast Notification
function showToast(message) {
    // Remove existing toast if any
    const existingToast = document.querySelector('.toast-notification');
    if (existingToast) existingToast.remove();

    // Create toast element
    const toast = document.createElement('div');
    toast.className = 'toast-notification position-fixed bottom-0 start-50 translate-middle-x mb-5 px-4 py-3 rounded-pill shadow-lg';
    toast.style.cssText = 'background: #C9A961; color: white; z-index: 10001; animation: toastSlideIn 0.3s ease forwards; font-weight: 500;';
    toast.innerHTML = '<i class="fa-solid fa-check-circle me-2"></i>' + message;

    document.body.appendChild(toast);

    // Add animation keyframes if not exists
    if (!document.getElementById('toast-animation')) {
        const style = document.createElement('style');
        style.id = 'toast-animation';
        style.textContent = `
            @keyframes toastSlideIn {
                0% { opacity: 0; transform: translate(-50%, 20px); }
                100% { opacity: 1; transform: translate(-50%, 0); }
            }
            @keyframes toastSlideOut {
                0% { opacity: 1; transform: translate(-50%, 0); }
                100% { opacity: 0; transform: translate(-50%, 20px); }
            }
        `;
        document.head.appendChild(style);
    }

    // Remove after 3 seconds
    setTimeout(() => {
        toast.style.animation = 'toastSlideOut 0.3s ease forwards';
        setTimeout(() => toast.remove(), 300);
    }, 3000);
}

// Save to Calendar
function saveToCalendar() {
    const eventTitle = "Pernikahan Alex & Sarah";
    const eventDate = "2025-06-15";
    const eventLocation = "Grand Ballroom Hotel Indonesia, Jakarta";

    const googleCalUrl = `https://calendar.google.com/calendar/render?action=TEMPLATE&text=${encodeURIComponent(eventTitle)}&dates=${eventDate.replace(/-/g, '')}/${eventDate.replace(/-/g, '')}&location=${encodeURIComponent(eventLocation)}&details=Dengan+mohon+rahmat+dan+ridho+Allah+SWT`;

    window.open(googleCalUrl, '_blank');
}

// Confetti Effect
function triggerConfetti() {
    const colors = ['#C9A961', '#E8D5A3', '#8B5A2B', '#FFD700', '#FFA500', '#DEB887'];
    const container = document.createElement('div');
    container.id = 'confetti-container';
    document.body.appendChild(container);

    // Create confetti particles
    for (let i = 0; i < 100; i++) {
        const confetti = document.createElement('div');
        const size = Math.random() * 10 + 5;
        confetti.style.cssText = `
            position: absolute;
            width: ${size}px;
            height: ${size}px;
            background: ${colors[Math.floor(Math.random() * colors.length)]};
            left: ${Math.random() * 100}%;
            top: -20px;
            opacity: ${Math.random() * 0.8 + 0.2};
            border-radius: ${Math.random() > 0.5 ? '50%' : '0'};
            transform: rotate(${Math.random() * 360}deg);
            animation: confettiFall ${Math.random() * 3 + 2}s linear forwards;
            animation-delay: ${Math.random() * 0.5}s;
        `;
        container.appendChild(confetti);
    }

    // Add confetti animation style
    if (!document.getElementById('confetti-style')) {
        const style = document.createElement('style');
        style.id = 'confetti-style';
        style.textContent = `
            @keyframes confettiFall {
                0% {
                    transform: translateY(0) rotate(0deg);
                    opacity: 1;
                }
                100% {
                    transform: translateY(100vh) rotate(720deg);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);
    }

    // Remove confetti after animation
    setTimeout(() => {
        container.remove();
    }, 5000);
}

// Smooth scroll for navigation
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Handle offline mode
window.addEventListener('offline', function() {
    showToast('Koneksi terputus. Beberapa fitur mungkin tidak tersedia.');
});

window.addEventListener('online', function() {
    showToast('Koneksi kembali normal.');
});