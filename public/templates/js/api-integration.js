/**
 * Petrikov Lumina - API Integration for RSVP & Comments
 * Anti-spam built-in: Honeypot + Time Check + Rate Limit
 * Include this script in all templates: <script src="/templates/js/api-integration.js"></script>
 */

(function() {
    'use strict';

    const API_BASE = '/api';
    const TEMPLATE_SLUG = document.body.getAttribute('data-template') || 'template-1';
    const MIN_FORM_TIME_RSVP = 5; // seconds
    const MIN_FORM_TIME_COMMENT = 3; // seconds

    let formLoadTime = Math.floor(Date.now() / 1000);

    /**
     * Show a floating notification on the page
     */
    function showNotification(message, type) {
        // Remove existing notification
        const existing = document.querySelector('.pl-notification');
        if (existing) existing.remove();

        const notif = document.createElement('div');
        notif.className = 'pl-notification';
        notif.style.cssText = `
            position: fixed;
            bottom: 24px;
            right: 24px;
            padding: 16px 24px;
            border-radius: 12px;
            font-size: 14px;
            font-weight: 500;
            z-index: 99999;
            max-width: 360px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.3);
            transform: translateY(20px);
            opacity: 0;
            transition: all 0.3s ease;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.5;
        `;

        if (type === 'success') {
            notif.style.background = '#065F46';
            notif.style.color = '#D1FAE5';
            notif.style.border = '1px solid #059669';
        } else if (type === 'error') {
            notif.style.background = '#7F1D1D';
            notif.style.color = '#FEE2E2';
            notif.style.border = '1px solid #DC2626';
        } else {
            notif.style.background = '#1E1B4B';
            notif.style.color = '#E0E7FF';
            notif.style.border = '1px solid #3730A3';
        }

        notif.textContent = message;
        document.body.appendChild(notif);

        // Animate in
        requestAnimationFrame(() => {
            notif.style.transform = 'translateY(0)';
            notif.style.opacity = '1';
        });

        // Auto hide after 5 seconds
        setTimeout(() => {
            notif.style.transform = 'translateY(20px)';
            notif.style.opacity = '0';
            setTimeout(() => notif.remove(), 300);
        }, 5000);
    }

    /**
     * Submit RSVP form via API
     */
    function submitRsvp(form) {
        const submitBtn = form.querySelector('[type="submit"]');
        if (submitBtn) {
            submitBtn.disabled = true;
            submitBtn.textContent = 'Mengirim...';
        }

        const formData = new FormData(form);
        const data = {
            name: formData.get('name') || '',
            phone: formData.get('phone') || '',
            presence: formData.get('presence') || '',
            guests: parseInt(formData.get('guests')) || 1,
            message: formData.get('message') || '',
            template_slug: TEMPLATE_SLUG,
            _loaded_at: formLoadTime,
            website: formData.get('website') || '', // Honeypot
        };

        fetch(API_BASE + '/rsvp', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': getCsrfToken(),
            },
            body: JSON.stringify(data),
        })
        .then(function(res) { return res.json(); })
        .then(function(result) {
            if (result.success) {
                showNotification(result.message, 'success');
                if (typeof form.reset === 'function') form.reset();
            } else {
                showNotification(result.message || 'Gagal mengirim RSVP.', 'error');
            }
        })
        .catch(function() {
            showNotification('Terjadi kesalahan jaringan. Silakan coba lagi.', 'error');
        })
        .finally(function() {
            if (submitBtn) {
                submitBtn.disabled = false;
                submitBtn.textContent = 'Kirim';
            }
        });
    }

    /**
     * Submit Comment via API
     */
    function submitComment(form) {
        const submitBtn = form.querySelector('[type="submit"]');
        if (submitBtn) {
            submitBtn.disabled = true;
            submitBtn.textContent = 'Mengirim...';
        }

        const formData = new FormData(form);
        const data = {
            name: formData.get('name') || '',
            message: formData.get('message') || '',
            template_slug: TEMPLATE_SLUG,
            _loaded_at: formLoadTime,
            website: formData.get('website') || '', // Honeypot
        };

        fetch(API_BASE + '/comment', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': getCsrfToken(),
            },
            body: JSON.stringify(data),
        })
        .then(function(res) { return res.json(); })
        .then(function(result) {
            if (result.success) {
                showNotification(result.message, 'success');
                if (typeof form.reset === 'function') form.reset();
                loadComments(); // Refresh comments list
            } else {
                showNotification(result.message || 'Gagal mengirim ucapan.', 'error');
            }
        })
        .catch(function() {
            showNotification('Terjadi kesalahan jaringan. Silakan coba lagi.', 'error');
        })
        .finally(function() {
            if (submitBtn) {
                submitBtn.disabled = false;
                submitBtn.textContent = 'Kirim';
            }
        });
    }

    /**
     * Load comments from API and render them
     */
    function loadComments() {
        var container = document.getElementById('comments-container');
        if (!container) return;

        fetch(API_BASE + '/comments?template_slug=' + TEMPLATE_SLUG)
        .then(function(res) { return res.json(); })
        .then(function(result) {
            if (!result.success || !result.data || !result.data.data) return;

            var comments = result.data.data;
            container.innerHTML = '';

            if (comments.length === 0) {
                container.innerHTML = '<p style="text-align:center;color:#9CA3AF;padding:24px;">Belum ada ucapan. Jadilah yang pertama!</p>';
                return;
            }

            comments.forEach(function(c) {
                var div = document.createElement('div');
                div.style.cssText = 'padding:12px 0;border-bottom:1px solid rgba(255,255,255,0.08);';
                div.innerHTML = '<strong>' + escapeHtml(c.name) + '</strong>' +
                    '<p style="margin:4px 0 0;color:#9CA3AF;font-size:14px;">' + escapeHtml(c.message) + '</p>' +
                    '<small style="color:#6B7280;font-size:12px;">' + formatDate(c.created_at) + '</small>';
                container.appendChild(div);
            });
        })
        .catch(function() { /* silent */ });
    }

    /**
     * Load RSVP stats (for admin dashboard analytics)
     */
    function loadRsvpStats() {
        var container = document.getElementById('rsvp-stats');
        if (!container) return;

        fetch(API_BASE + '/rsvp/stats')
        .then(function(res) { return res.json(); })
        .then(function(result) {
            if (!result.success) return;
            var stats = result.data;
            container.innerHTML =
                '<span class="stat-hadir">Hadir: ' + stats.hadir + '</span>' +
                '<span class="stat-tidak">Tidak Hadir: ' + stats.tidak_hadir + '</span>' +
                '<span class="stat-tamu">Total Tamu: ' + stats.total_guests + '</span>';
        })
        .catch(function() { /* silent */ });
    }

    /**
     * Get CSRF token from meta tag or cookie
     */
    function getCsrfToken() {
        var meta = document.querySelector('meta[name="csrf-token"]');
        if (meta) return meta.getAttribute('content');
        return '';
    }

    /**
     * Escape HTML to prevent XSS
     */
    function escapeHtml(text) {
        var div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    }

    /**
     * Format date to readable string
     */
    function formatDate(dateStr) {
        if (!dateStr) return '';
        try {
            var d = new Date(dateStr);
            var months = ['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Okt','Nov','Des'];
            return d.getDate() + ' ' + months[d.getMonth()] + ' ' + d.getHours().toString().padStart(2,'0') + ':' + d.getMinutes().toString().padStart(2,'0');
        } catch(e) {
            return '';
        }
    }

    /**
     * Initialize: bind forms and auto-load comments
     */
    function init() {
        // Bind RSVP forms
        var rsvpForms = document.querySelectorAll('.rsvp-form, [data-form="rsvp"]');
        rsvpForms.forEach(function(form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                submitRsvp(form);
            });
        });

        // Bind Comment forms
        var commentForms = document.querySelectorAll('.comment-form, [data-form="comment"]');
        commentForms.forEach(function(form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                submitComment(form);
            });
        });

        // Auto-load comments on page load
        if (document.getElementById('comments-container')) {
            loadComments();
            // Refresh every 30 seconds
            setInterval(loadComments, 30000);
        }

        // Auto-load RSVP stats if container exists
        if (document.getElementById('rsvp-stats')) {
            loadRsvpStats();
        }
    }

    // Run on DOM ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();