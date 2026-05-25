<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petrikov Lumina - Template Undangan Pernikahan Digital Premium</title>

    <!-- Meta Tags -->
    <meta name="description" content="Pilihan template undangan pernikahan digital premium. Tersedia paket Bronze, Silver, Gold, Premium, dan Platinum dengan berbagai fitur dan animasi lengkap.">
    <meta name="keywords" content="undangan digital, template pernikahan, undangan online, wedding invitation, digital invitation">
    <meta name="robots" content="index, follow">

    <!-- Preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Cormorant+Garamond:wght@400;500;600;700&family=Great+Vibes&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.1/css/all.min.css" rel="stylesheet">

    <style>
        :root {
            /* Package Colors */
            --bronze-primary: #CD7F32;
            --bronze-secondary: #E5B87D;
            --silver-primary: #C0C0C0;
            --silver-secondary: #E8E8E8;
            --gold-primary: #C9A961;
            --gold-secondary: #E8D5A3;
            --premium-primary: #8B5CF6;
            --premium-secondary: #C4B5FD;
            --platinum-primary: #6366F1;
            --platinum-secondary: #A5B4FC;

            /* Base Colors */
            --dark-bg: #0F0F1A;
            --dark-secondary: #1A1A2E;
            --light-text: #F5F5F5;
            --muted-text: #B8BFC9;

            /* Enhanced Readability - Brighter for dark background contrast */
            --text-primary: #F5F5F5;
            --text-secondary: #DCE0E7;
            --text-muted-enhanced: #B8BFC9;
            --card-bg: rgba(255, 255, 255, 0.06);
            --card-border: rgba(255, 255, 255, 0.15);
            --card-hover-border: rgba(201, 169, 97, 0.3);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Base Card Design System */
        .card-base {
            background: var(--card-bg);
            border: 1px solid var(--card-border);
            border-radius: 1.25rem;
            padding: 2rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        .card-base:hover {
            border-color: var(--card-hover-border);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.3);
        }

        /* Dark mode text-muted override for better contrast */
        .text-muted {
            color: var(--text-muted-enhanced) !important;
        }

        /* Section wrapper for consistent layout */
        .section-wrapper {
            background: var(--card-bg);
            border: 1px solid var(--card-border);
            border-radius: 1.5rem;
            padding: 2.5rem;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.25);
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Outfit', sans-serif;
            background: var(--dark-bg);
            color: var(--light-text);
            overflow-x: hidden;
        }

        /* Font Classes */
        .font-elegant { font-family: 'Cormorant Garamond', serif; }
        .font-script { font-family: 'Great Vibes', cursive; }

        /* Navbar */
        .navbar-dark-custom {
            background: rgba(15, 15, 26, 0.95);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            padding: 1rem 0;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .navbar-dark-custom .nav-link {
            color: var(--light-text);
            font-weight: 500;
            padding: 0.5rem 1rem;
            transition: color 0.3s ease;
        }

        .navbar-dark-custom .nav-link:hover {
            color: var(--gold-primary);
        }

        /* Hero Section */
        .hero-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            background: linear-gradient(135deg, var(--dark-bg) 0%, var(--dark-secondary) 50%, #252545 100%);
            overflow: hidden;
        }

        .hero-bg-shapes {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0;
        }

        .hero-bg-shapes::before,
        .hero-bg-shapes::after {
            content: '';
            position: absolute;
            border-radius: 50%;
            opacity: 0.1;
        }

        .hero-bg-shapes::before {
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, var(--gold-primary) 0%, transparent 70%);
            top: -200px;
            right: -200px;
        }

        .hero-bg-shapes::after {
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, var(--platinum-primary) 0%, transparent 70%);
            bottom: -100px;
            left: -100px;
        }

        .hero-content {
            position: relative;
            z-index: 1;
            text-align: center;
            padding: 2rem;
        }

        .hero-badge {
            display: inline-block;
            background: linear-gradient(135deg, var(--gold-primary), var(--gold-secondary));
            color: var(--dark-bg);
            padding: 0.5rem 1.5rem;
            border-radius: 2rem;
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 2px;
            margin-bottom: 2rem;
            text-transform: uppercase;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        .hero-title .highlight {
            color: var(--gold-primary);
        }

        .hero-subtitle {
            font-size: 1.25rem;
            color: var(--muted-text);
            margin-bottom: 2rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .hero-cta {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        /* Buttons */
        .btn-primary-gold {
            background: linear-gradient(135deg, var(--gold-primary), var(--gold-secondary));
            color: var(--dark-bg);
            border: none;
            padding: 1rem 2.5rem;
            border-radius: 3rem;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(201, 169, 97, 0.3);
        }

        .btn-primary-gold:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(201, 169, 97, 0.4);
            color: var(--dark-bg);
        }

        .btn-outline-gold {
            background: transparent;
            color: var(--gold-primary);
            border: 2px solid var(--gold-primary);
            padding: 1rem 2.5rem;
            border-radius: 3rem;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-outline-gold:hover {
            background: var(--gold-primary);
            color: var(--dark-bg);
            transform: translateY(-3px);
        }

        /* ========== DEMO BUTTON HOVER EFFECTS ========== */
        .demo-btn {
            position: relative;
            overflow: hidden;
            z-index: 1;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275) !important;
        }
        .demo-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.6s ease;
            z-index: -1;
        }
        .demo-btn:hover::before {
            left: 100%;
        }
        .demo-btn i {
            transition: all 0.4s ease;
        }
        .demo-btn:hover i {
            transform: scale(1.3);
        }

        /* Demo Bronze */
        .demo-btn-bronze {
            background: transparent;
            color: var(--bronze-primary) !important;
            border: 2px solid var(--bronze-primary) !important;
        }
        .demo-btn-bronze:hover {
            background: var(--bronze-primary) !important;
            color: white !important;
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 10px 30px rgba(205, 127, 50, 0.4);
        }
        .demo-btn-bronze:hover i {
            animation: goldBounce 0.6s ease;
        }

        /* Demo Silver */
        .demo-btn-silver {
            background: transparent;
            color: var(--silver-primary) !important;
            border: 2px solid var(--silver-primary) !important;
        }
        .demo-btn-silver:hover {
            background: var(--silver-primary) !important;
            color: var(--dark-bg) !important;
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 10px 30px rgba(192, 192, 192, 0.4);
        }
        .demo-btn-silver:hover i {
            animation: premPulse 0.8s ease;
        }

        /* Demo Gold (extends btn-outline-gold) */
        .demo-btn-gold:hover {
            transform: translateY(-3px) scale(1.05) !important;
            box-shadow: 0 10px 30px rgba(201, 169, 97, 0.4);
        }
        .demo-btn-gold:hover i {
            animation: goldBounce 0.6s ease;
        }

        /* Demo Premium */
        .demo-btn-premium {
            background: transparent;
            color: var(--premium-primary) !important;
            border: 2px solid var(--premium-primary) !important;
        }
        .demo-btn-premium:hover {
            background: var(--premium-primary) !important;
            color: white !important;
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 10px 30px rgba(139, 92, 246, 0.4);
        }
        .demo-btn-premium:hover i {
            animation: premPulse 0.8s ease;
        }

        /* Demo Platinum (extends btn-primary-gold) */
        .demo-btn-platinum {
            position: relative;
            overflow: hidden;
        }
        .demo-btn-platinum:hover {
            transform: translateY(-4px) scale(1.08) !important;
            box-shadow: 0 15px 40px rgba(99, 102, 241, 0.5), 0 0 30px rgba(99, 102, 241, 0.3) !important;
        }
        .demo-btn-platinum:hover i {
            animation: platGlow 0.8s ease;
        }
        .demo-btn-platinum::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: conic-gradient(from 0deg, transparent, rgba(99, 102, 241, 0.3), transparent, rgba(165, 180, 252, 0.3), transparent);
            animation: none;
            opacity: 0;
            z-index: -1;
            transition: opacity 0.5s ease;
        }
        .demo-btn-platinum:hover::after {
            opacity: 1;
            animation: platinumSpin 2s linear infinite;
        }
        @keyframes platinumSpin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Section Styling */
        section {
            padding: 5rem 0;
        }

        .section-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-badge {
            display: inline-block;
            background: rgba(201, 169, 97, 0.1);
            color: var(--gold-primary);
            padding: 0.5rem 1.5rem;
            border-radius: 2rem;
            font-size: 0.75rem;
            font-weight: 600;
            letter-spacing: 2px;
            margin-bottom: 1rem;
            text-transform: uppercase;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .section-subtitle {
            color: var(--muted-text);
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Features Section */
        .features-section {
            background: var(--dark-secondary);
            padding: 5rem 0;
        }

        .feature-card {
            background: var(--card-bg);
            border: 1px solid var(--card-border);
            border-radius: 1.25rem;
            padding: 2rem;
            height: 100%;
            transition: all 0.3s ease;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        .feature-card:hover {
            transform: translateY(-5px);
            border-color: var(--card-hover-border);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.4);
            background: rgba(255, 255, 255, 0.1);
        }

        .feature-icon {
            width: 64px;
            height: 64px;
            border-radius: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.25rem;
            font-size: 1.5rem;
            background: linear-gradient(135deg, rgba(201, 169, 97, 0.2), rgba(201, 169, 97, 0.05));
            color: var(--gold-primary);
            transition: all 0.3s ease;
        }

        .feature-card:hover .feature-icon {
            background: linear-gradient(135deg, var(--gold-primary), var(--gold-secondary));
            color: var(--dark-bg);
        }

        .feature-card h3 {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
        }

        .feature-card p {
            font-size: 0.9rem;
            color: var(--text-secondary);
            margin-bottom: 0;
            line-height: 1.7;
        }

        /* Package Cards */
        .packages-section {
            background: var(--dark-bg);
        }

        .package-card {
            background: var(--card-bg);
            border: 1px solid var(--card-border);
            border-radius: 1.5rem;
            padding: 2rem;
            height: 100%;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.25);
        }

        .package-card:hover {
            transform: translateY(-10px);
        }

        .package-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .package-card:hover::before {
            opacity: 1;
        }

        /* ========== GOLD HOVER PREMIUM ========== */
        .package-gold {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        .package-gold::before {
            background: linear-gradient(90deg, transparent, var(--gold-primary), #FFD700, var(--gold-primary), transparent);
        }
        .package-gold:hover {
            border-color: var(--gold-primary);
            box-shadow: 0 20px 60px rgba(201, 169, 97, 0.25), 0 0 40px rgba(255, 215, 0, 0.15);
            transform: translateY(-12px) scale(1.02);
        }
        .package-gold .package-icon {
            transition: all 0.5s ease;
        }
        .package-gold:hover .package-icon {
            transform: rotateY(360deg) scale(1.15);
            box-shadow: 0 0 30px rgba(201, 169, 97, 0.5);
        }
        .package-gold .package-name {
            transition: all 0.3s ease;
        }
        .package-gold:hover .package-name {
            text-shadow: 0 0 20px rgba(201, 169, 97, 0.6), 0 0 40px rgba(255, 215, 0, 0.3);
        }
        .package-gold .package-btn {
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        .package-gold .package-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.6s ease;
            z-index: -1;
        }
        .package-gold:hover .package-btn::before {
            left: 100%;
        }
        .package-gold:hover .package-btn {
            transform: scale(1.05);
            box-shadow: 0 10px 30px rgba(201, 169, 97, 0.4);
        }
        .package-gold .package-price {
            transition: all 0.3s ease;
        }
        .package-gold:hover .package-price {
            color: var(--gold-primary);
        }
        .package-gold .package-features li {
            transition: all 0.3s ease;
        }
        .package-gold:hover .package-features li {
            padding-left: 8px;
        }
        .package-gold:hover .package-features li i {
            animation: goldBounce 0.6s ease;
        }

        /* ========== PREMIUM HOVER LUXURY ========== */
        .package-premium {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            background: linear-gradient(90deg, transparent, var(--premium-primary), #A78BFA, var(--premium-primary), transparent);
        }
        .package-premium:hover {
            border-color: var(--premium-primary);
            box-shadow: 0 20px 60px rgba(139, 92, 246, 0.25), 0 0 50px rgba(139, 92, 246, 0.15);
            transform: translateY(-12px) scale(1.02);
        }
        .package-premium::after {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            border-radius: 1.6rem;
            background: linear-gradient(135deg, var(--premium-primary), transparent, var(--premium-secondary), transparent);
            opacity: 0;
            z-index: -1;
            transition: opacity 0.5s ease;
        }
        .package-premium:hover::after {
            opacity: 1;
        }
        .package-premium .package-icon {
            transition: all 0.5s ease;
            position: relative;
        }
        .package-premium:hover .package-icon {
            transform: scale(1.2) rotate(-10deg);
            box-shadow: 0 0 40px rgba(139, 92, 246, 0.5);
        }
        .package-premium .package-name {
            transition: all 0.3s ease;
        }
        .package-premium:hover .package-name {
            text-shadow: 0 0 20px rgba(139, 92, 246, 0.6), 0 0 40px rgba(167, 139, 250, 0.3);
            letter-spacing: 2px;
        }
        .package-premium .package-btn {
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }
        .package-premium:hover .package-btn {
            transform: scale(1.05);
            box-shadow: 0 10px 30px rgba(139, 92, 246, 0.4);
            background: linear-gradient(135deg, var(--premium-primary), #7C3AED);
        }
        .package-premium .package-price {
            transition: all 0.3s ease;
        }
        .package-premium:hover .package-price {
            color: var(--premium-secondary);
        }
        .package-premium .package-features li {
            transition: all 0.3s ease;
        }
        .package-premium:hover .package-features li {
            padding-left: 8px;
            border-bottom-color: rgba(139, 92, 246, 0.2);
        }
        .package-premium:hover .package-features li i {
            animation: premPulse 0.8s ease;
        }

        /* ========== PLATINUM HOVER VIP ========== */
        .package-platinum {
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        .package-platinum::before {
            background: linear-gradient(90deg, transparent, var(--platinum-primary), #818CF8, var(--platinum-primary), transparent);
        }
        .package-platinum:hover {
            border-color: var(--platinum-primary);
            box-shadow: 0 20px 60px rgba(99, 102, 241, 0.3), 0 0 60px rgba(99, 102, 241, 0.2), 0 0 80px rgba(129, 140, 248, 0.1);
            transform: translateY(-14px) scale(1.03);
        }
        .package-platinum::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 1.5rem;
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.1), transparent 50%, rgba(129, 140, 248, 0.05));
            opacity: 0;
            transition: opacity 0.5s ease;
            pointer-events: none;
        }
        .package-platinum:hover::after {
            opacity: 1;
        }
        .package-platinum .package-icon {
            transition: all 0.6s ease;
            position: relative;
        }
        .package-platinum:hover .package-icon {
            transform: scale(1.25) rotate(360deg);
            box-shadow: 0 0 50px rgba(99, 102, 241, 0.6);
        }
        .package-platinum .package-name {
            transition: all 0.3s ease;
        }
        .package-platinum:hover .package-name {
            text-shadow: 0 0 20px rgba(99, 102, 241, 0.6), 0 0 40px rgba(129, 140, 248, 0.4), 0 0 60px rgba(99, 102, 241, 0.2);
            letter-spacing: 3px;
        }
        .package-platinum .package-btn {
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }
        .package-platinum:hover .package-btn {
            transform: scale(1.06);
            box-shadow: 0 10px 30px rgba(99, 102, 241, 0.5), 0 0 20px rgba(99, 102, 241, 0.3);
            background: linear-gradient(135deg, var(--platinum-primary), #4F46E5);
        }
        .package-platinum .package-price {
            transition: all 0.3s ease;
        }
        .package-platinum:hover .package-price {
            color: var(--platinum-secondary);
        }
        .package-platinum .package-features li {
            transition: all 0.3s ease;
        }
        .package-platinum:hover .package-features li {
            padding-left: 10px;
            border-bottom-color: rgba(99, 102, 241, 0.3);
        }
        .package-platinum:hover .package-features li i {
            animation: platGlow 0.8s ease;
        }
        .package-platinum .popular-badge {
            transition: all 0.4s ease;
        }
        .package-platinum:hover .popular-badge {
            transform: scale(1.1) rotate(-3deg);
            box-shadow: 0 5px 20px rgba(201, 169, 97, 0.5);
        }

        /* ========== HOVER ANIMATIONS ========== */
        @keyframes goldBounce {
            0%, 100% { transform: translateX(0); }
            50% { transform: translateX(5px) scale(1.2); }
        }
        @keyframes premPulse {
            0%, 100% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.3); opacity: 0.7; }
        }
        @keyframes platGlow {
            0% { transform: scale(1); filter: brightness(1); }
            50% { transform: scale(1.4); filter: brightness(1.5); }
            100% { transform: scale(1); filter: brightness(1); }
        }
        @keyframes shimmer {
            0% { background-position: -200% center; }
            100% { background-position: 200% center; }
        }

        /* Bronze Package */
        .package-bronze .package-header { border-color: var(--bronze-primary); }
        .package-bronze:hover { border-color: var(--bronze-primary); }
        .package-bronze::before { background: linear-gradient(90deg, transparent, var(--bronze-primary), transparent); }

        /* Silver Package */
        .package-silver .package-header { border-color: var(--silver-primary); }
        .package-silver:hover { border-color: var(--silver-primary); }
        .package-silver::before { background: linear-gradient(90deg, transparent, var(--silver-primary), transparent); }

        /* Gold Package */
        .package-gold .package-header { border-color: var(--gold-primary); }
        .package-gold:hover { border-color: var(--gold-primary); }
        .package-gold::before { background: linear-gradient(90deg, transparent, var(--gold-primary), transparent); }

        /* Premium Package */
        .package-premium .package-header { border-color: var(--premium-primary); }
        .package-premium:hover { border-color: var(--premium-primary); }
        .package-premium::before { background: linear-gradient(90deg, transparent, var(--premium-primary), transparent); }

        /* Platinum Package */
        .package-platinum .package-header { border-color: var(--platinum-primary); }
        .package-platinum:hover { border-color: var(--platinum-primary); }
        .package-platinum::before { background: linear-gradient(90deg, transparent, var(--platinum-primary), transparent); }

        .package-header {
            text-align: center;
            padding-bottom: 1.5rem;
            margin-bottom: 1.5rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .package-icon {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 2rem;
        }

        .package-bronze .package-icon { background: linear-gradient(135deg, var(--bronze-primary), var(--bronze-secondary)); color: white; }
        .package-silver .package-icon { background: linear-gradient(135deg, #D4D4D4, var(--silver-secondary)); color: #1A1A2E; }
        .package-gold .package-icon { background: linear-gradient(135deg, var(--gold-primary), var(--gold-secondary)); color: var(--dark-bg); }
        .package-premium .package-icon { background: linear-gradient(135deg, var(--premium-primary), var(--premium-secondary)); color: white; }
        .package-platinum .package-icon { background: linear-gradient(135deg, var(--platinum-primary), var(--platinum-secondary)); color: white; }

        .package-name {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .package-bronze .package-name { color: var(--bronze-primary); }
        .package-silver .package-name { color: #D4D4D4; }
        .package-gold .package-name { color: var(--gold-primary); }
        .package-premium .package-name { color: var(--premium-primary); }
        .package-platinum .package-name { color: var(--platinum-primary); }

        .package-price {
            font-size: 2.5rem;
            font-weight: 700;
            color: white;
        }

        .package-price span {
            font-size: 1rem;
            font-weight: 400;
            color: var(--muted-text);
        }

        .package-templates {
            font-size: 0.85rem;
            color: var(--muted-text);
            margin-top: 0.5rem;
        }

        .package-features {
            list-style: none;
            padding: 0;
            margin: 0 0 1.5rem 0;
        }

        .package-features li {
            padding: 0.75rem 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-size: 0.9rem;
            color: var(--text-secondary);
        }

        .package-features li i {
            font-size: 0.85rem;
            width: 20px;
            text-align: center;
        }

        .package-bronze .package-features li i { color: var(--bronze-primary); }
        .package-silver .package-features li i { color: #D4D4D4; }
        .package-gold .package-features li i { color: var(--gold-primary); }
        .package-premium .package-features li i { color: var(--premium-primary); }
        .package-platinum .package-features li i { color: var(--platinum-primary); }

        .package-btn {
            width: 100%;
            padding: 1rem;
            border-radius: 1rem;
            font-weight: 600;
            text-align: center;
            transition: all 0.3s ease;
            text-decoration: none;
            display: block;
        }

        .package-bronze .package-btn { background: var(--bronze-primary); color: white; }
        .package-silver .package-btn { background: linear-gradient(135deg, #D4D4D4, var(--silver-secondary)); color: #1A1A2E; }
        .package-gold .package-btn { background: var(--gold-primary); color: var(--dark-bg); }
        .package-premium .package-btn { background: var(--premium-primary); color: white; }
        .package-platinum .package-btn { background: var(--platinum-primary); color: white; }

        .package-btn:hover {
            transform: scale(1.02);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            color: white;
        }

        /* Popular Badge */
        .popular-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: linear-gradient(135deg, var(--gold-primary), var(--gold-secondary));
            color: var(--dark-bg);
            padding: 0.25rem 1rem;
            border-radius: 2rem;
            font-size: 0.7rem;
            font-weight: 700;
            letter-spacing: 1px;
        }

        /* Templates Showcase */
        .templates-section {
            background: var(--dark-bg);
        }

        .template-showcase {
            background: var(--card-bg);
            border: 1px solid var(--card-border);
            border-radius: 1rem;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2);
        }

        .template-showcase:hover {
            transform: translateY(-5px);
            border-color: var(--card-hover-border);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.4);
            background: rgba(255, 255, 255, 0.1);
        }

        .template-preview {
            position: relative;
            aspect-ratio: 9/16;
            background: linear-gradient(135deg, var(--dark-secondary), #252545);
            overflow: hidden;
        }

        .template-preview img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .template-showcase:hover .template-preview img {
            transform: scale(1.05);
        }

        .template-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .template-showcase:hover .template-overlay {
            opacity: 1;
        }

        .template-info {
            padding: 1.5rem;
        }

        .template-name {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--light-text);
        }

        .template-theme {
            font-size: 0.85rem;
            color: var(--text-muted-enhanced);
            margin-bottom: 1rem;
        }

        .template-features {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .template-feature-tag {
            background: rgba(201, 169, 97, 0.15);
            color: #E8D5A3;
            padding: 0.3rem 0.8rem;
            border-radius: 2rem;
            font-size: 0.7rem;
            font-weight: 600;
            border: 1px solid rgba(201, 169, 97, 0.2);
        }

        /* Features Comparison */
        .comparison-section {
            background: var(--dark-secondary);
        }

        .comparison-table {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .comparison-table thead th {
            background: linear-gradient(135deg, rgba(201, 169, 97, 0.25), rgba(201, 169, 97, 0.08));
            color: var(--gold-primary);
            font-weight: 600;
            padding: 1rem;
            text-align: center;
            border: none;
        }

        .comparison-table thead th:first-child {
            text-align: left;
        }

        .comparison-table tbody td {
            padding: 1rem;
            border: 1px solid rgba(255, 255, 255, 0.1);
            vertical-align: middle;
            color: var(--text-secondary);
        }

        .comparison-table tbody td:first-child {
            font-weight: 600;
            background: rgba(255, 255, 255, 0.06);
            color: var(--light-text);
        }

        .comparison-table tbody tr:hover {
            background: rgba(201, 169, 97, 0.1);
        }

        .check-icon { color: var(--gold-primary); }
        .times-icon { color: var(--muted-text); }

        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg, var(--dark-bg), var(--dark-secondary));
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 800px;
            height: 800px;
            background: radial-gradient(circle, rgba(201, 169, 97, 0.1) 0%, transparent 70%);
            border-radius: 50%;
        }

        .cta-content {
            position: relative;
            z-index: 1;
            text-align: center;
        }

        /* Contact Form */
        .contact-section {
            background: var(--dark-bg);
        }

        .contact-card {
            background: var(--card-bg);
            border: 1px solid var(--card-border);
            border-radius: 1.5rem;
            padding: 3rem;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.25);
        }

        .form-control-custom {
            background: rgba(255, 255, 255, 0.07);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 0.75rem;
            padding: 1rem;
            color: var(--light-text);
            transition: all 0.3s ease;
        }

        .form-control-custom:focus {
            background: rgba(255, 255, 255, 0.1);
            border-color: var(--gold-primary);
            box-shadow: 0 0 0 3px rgba(201, 169, 97, 0.15);
            color: var(--light-text);
        }

        .form-control-custom::placeholder {
            color: var(--text-muted-enhanced);
        }

        /* Fix select dropdown options visibility on dark background */
        .form-control-custom optgroup {
            background: #0F0F1A;
            color: var(--gold-primary);
            font-weight: 700;
            font-size: 0.85rem;
            padding: 0.5rem 0;
        }
        .form-control-custom option {
            background: #1A1A2E;
            color: #DCE0E7;
            padding: 0.5rem 1rem;
        }
        .form-control-custom option:disabled {
            color: #6B7280;
        }
        .form-control-custom option:checked {
            background: #2D2D4A;
            color: var(--gold-primary);
        }
        select.form-control-custom {
            appearance: auto;
            -webkit-appearance: auto;
            -moz-appearance: auto;
        }

        /* Footer */
        .footer {
            background: var(--dark-secondary);
            padding: 3rem 0 1.5rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .footer-links a,
        .footer-links li {
            color: var(--text-secondary);
            text-decoration: none;
            transition: color 0.3s ease;
            line-height: 2;
        }

        .footer-links a:hover {
            color: var(--gold-primary);
        }

        .footer h5, .footer h6 {
            color: var(--light-text);
        }

        /* Animations */
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-pulse {
            animation: pulse 2s ease-in-out infinite;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .package-card {
                margin-bottom: 2rem;
            }

            .contact-card {
                padding: 2rem;
            }

            .section-wrapper {
                padding: 1.5rem;
            }
        }

        @media (max-width: 576px) {
            .hero-title {
                font-size: 2rem;
            }

            .hero-subtitle {
                font-size: 1rem;
            }

            .hero-cta {
                flex-direction: column;
                align-items: center;
            }

            .section-title {
                font-size: 1.75rem;
            }

            .contact-card {
                padding: 1.5rem;
                border-radius: 1rem;
            }

            .section-wrapper {
                padding: 1.25rem;
                border-radius: 1rem;
            }

            .package-card {
                padding: 1.5rem;
            }

            .comparison-table tbody td {
                padding: 0.75rem 0.5rem;
                font-size: 0.8rem;
            }
        }

        /* WhatsApp Float Button */
        .whatsapp-float {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            width: 60px;
            height: 60px;
            background: #25D366;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.75rem;
            box-shadow: 0 5px 20px rgba(37, 211, 102, 0.4);
            z-index: 1000;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
            color: white;
        }

        /* Package Tab Navigation */
        .package-tabs {
            display: flex;
            justify-content: center;
            gap: 0.5rem;
            margin-bottom: 3rem;
            flex-wrap: wrap;
        }

        .package-tab {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: var(--muted-text);
            padding: 0.75rem 1.5rem;
            border-radius: 2rem;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .package-tab:hover,
        .package-tab.active {
            background: var(--gold-primary);
            color: var(--dark-bg);
            border-color: var(--gold-primary);
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark-custom fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-white" href="#">
                <img src="{{ asset('images/logo.png') }}" alt="Petrikov Lumina" height="32" class="me-2">
                Petrikov Lumina
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#packages">Paket</a></li>
                    <li class="nav-item"><a class="nav-link" href="#templates">Template</a></li>
                    <li class="nav-item"><a class="nav-link" href="#fitur">Fitur</a></li>
                    <li class="nav-item"><a class="nav-link" href="#harga">Harga</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="hero-bg-shapes"></div>
        <div class="hero-content">
            <span class="hero-badge animate-pulse">
                <i class="fa-solid fa-sparkles me-2"></i>Template Premium Indonesia
            </span>
            <h1 class="hero-title font-elegant">
                Undangan Pernikahan<br>
                <span class="highlight font-script">Digital Premium</span>
            </h1>
            <p class="hero-subtitle">
                Pilihan template undangan pernikahan digital dengan berbagai paket dan fitur lengkap.
                Animasi indah, tampilan elegan, dan mudah digunakan.
            </p>
            <div class="hero-cta">
                <a href="#packages" class="btn btn-primary-gold">
                    <i class="fa-solid fa-eye me-2"></i>Lihat Paket
                </a>
                <a href="#templates" class="btn btn-outline-gold">
                    <i class="fa-solid fa-images me-2"></i>Lihat Template
                </a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section" id="fitur">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Fitur Unggulan</span>
                <h2 class="section-title font-elegant">Semua yang Anda Butuhkan</h2>
                <p class="section-subtitle">
                    Fiturnya lengkap untuk membuat undangan digital yang profesional dan berkesan
                </p>
            </div>

            <div class="row g-4">
                <!-- Feature 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fa-solid fa-images"></i>
                        </div>
                        <h3>20+ Template</h3>
                        <p>Pilihan template profesional untuk berbagai tema dan gaya acara Anda.</p>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fa-solid fa-pen-ruler"></i>
                        </div>
                        <h3>Kustomisasi Lengkap</h3>
                        <p>Edit warna, font, foto, dan semua elemen sesuai keinginan Anda.</p>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fa-solid fa-wand-magic-sparkles"></i>
                        </div>
                        <h3>Animasi Premium</h3>
                        <p>Transisi halus dan animasi elegant yang membuat undangan lebih hidup.</p>
                    </div>
                </div>

                <!-- Feature 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fa-solid fa-circle-check"></i>
                        </div>
                        <h3>RSVP Online</h3>
                        <p>Tamu dapat RSVP langsung dari undangan dengan mudah dan cepat.</p>
                    </div>
                </div>

                <!-- Feature 5 -->
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fa-solid fa-clock"></i>
                        </div>
                        <h3>Countdown Timer</h3>
                        <p>Hitung mundur ke hari H agar tamu semakin excited.</p>
                    </div>
                </div>

                <!-- Feature 6 -->
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <h3>Anti Spam</h3>
                        <p>Proteksi dari tamu yang tidak diharapkan dengan filter keamanan.</p>
                    </div>
                </div>

                <!-- Feature 7 -->
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fa-solid fa-share-nodes"></i>
                        </div>
                        <h3>Share Easy</h3>
                        <p>Bagikan via WhatsApp, Instagram, Email, atau media sosial lainnya.</p>
                    </div>
                </div>

                <!-- Feature 8 -->
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fa-solid fa-mobile-screen-button"></i>
                        </div>
                        <h3>Mobile Friendly</h3>
                        <p>Tampil sempurna di semua perangkat, desktop hingga mobile.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Packages Section -->
    <section class="packages-section" id="packages">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Pilihan Paket</span>
                <h2 class="section-title font-elegant">Paket Template Undangan</h2>
                <p class="section-subtitle">
                    Pilih paket sesuai kebutuhan dan budget Anda. Setiap paket memiliki variasi template dan fitur yang berbeda.
                </p>
            </div>

            <div class="row g-4">
                <!-- Bronze Package -->
                <div class="col-lg-4 col-md-6">
                    <div class="package-card package-bronze">
                        <div class="package-header">
                            <div class="package-icon">
                                <i class="fa-solid fa-ring"></i>
                            </div>
                            <h3 class="package-name">Bronze</h3>
                            <div class="package-price">Rp 25.000<span>/paket</span></div>
                            <p class="package-templates">3 Template Pilihan</p>
                        </div>
                        <ul class="package-features">
                            <li><i class="fa-solid fa-check"></i> 3 Template Dasar</li>
                            <li><i class="fa-solid fa-check"></i> Animasi Fade Sederhana</li>
                            <li><i class="fa-solid fa-check"></i> Section Dasar (Home, Mempelai, Tanggal, Penutup)</li>
                            <li><i class="fa-solid fa-check"></i> Simple Bottom Navigation</li>
                            <li><i class="fa-solid fa-check"></i> 1x Revisi</li>
                            <li><i class="fa-solid fa-check"></i> Demo Link</li>
                        </ul>
                        <a href="#kontak" class="package-btn">Pilih Paket</a>
                    </div>
                </div>

                <!-- Silver Package -->
                <div class="col-lg-4 col-md-6">
                    <div class="package-card package-silver">
                        <div class="package-header">
                            <div class="package-icon">
                                <i class="fa-solid fa-gem"></i>
                            </div>
                            <h3 class="package-name">Silver</h3>
                            <div class="package-price">Rp 75.000<span>/paket</span></div>
                            <p class="package-templates">3 Template Pilihan</p>
                        </div>
                        <ul class="package-features">
                            <li><i class="fa-solid fa-check"></i> 3 Template Modern</li>
                            <li><i class="fa-solid fa-check"></i> Animasi Fade + Slide</li>
                            <li><i class="fa-solid fa-check"></i> Section Lengkap (Home, Mempelai, Quotes, Tanggal, Galeri, Gift, Comment)</li>
                            <li><i class="fa-solid fa-check"></i> Bottom Navigation + Floating Buttons</li>
                            <li><i class="fa-solid fa-check"></i> Comment System (LocalStorage)</li>
                            <li><i class="fa-solid fa-check"></i> 2x Revisi</li>
                            <li><i class="fa-solid fa-check"></i> Deploy Subfolder</li>
                        </ul>
                        <a href="#kontak" class="package-btn">Pilih Paket</a>
                    </div>
                </div>

                <!-- Gold Package -->
                <div class="col-lg-4 col-md-6">
                    <div class="package-card package-gold">
                        <div class="popular-badge">POPULER</div>
                        <div class="package-header">
                            <div class="package-icon">
                                <i class="fa-solid fa-crown"></i>
                            </div>
                            <h3 class="package-name">Gold</h3>
                            <div class="package-price">Rp 150.000<span>/paket</span></div>
                            <p class="package-templates">5 Template Pilihan</p>
                        </div>
                        <ul class="package-features">
                            <li><i class="fa-solid fa-check"></i> 5 Template Elegant</li>
                            <li><i class="fa-solid fa-check"></i> Animasi Lengkap (Shimmer, Parallax, Heartbeat, Confetti)</li>
                            <li><i class="fa-solid fa-check"></i> Semua Fitur Silver + Love Story + Video Section</li>
                            <li><i class="fa-solid fa-check"></i> VIP Navigation dengan Animasi</li>
                            <li><i class="fa-solid fa-check"></i> Confetti on Open</li>
                            <li><i class="fa-solid fa-check"></i> Premium Fonts</li>
                            <li><i class="fa-solid fa-check"></i> 3x Revisi</li>
                            <li><i class="fa-solid fa-check"></i> Deploy Subdomain</li>
                        </ul>
                        <a href="#kontak" class="package-btn">Pilih Paket</a>
                    </div>
                </div>

                <!-- Premium Package -->
                <div class="col-lg-6 col-md-6">
                    <div class="package-card package-premium">
                        <div class="package-header">
                            <div class="package-icon">
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h3 class="package-name">Premium</h3>
                            <div class="package-price">Rp 250.000<span>/paket</span></div>
                            <p class="package-templates">5 Template Pilihan</p>
                        </div>
                        <ul class="package-features">
                            <li><i class="fa-solid fa-check"></i> 5 Template Luxury</li>
                            <li><i class="fa-solid fa-check"></i> Animasi Advanced (Particle System, 3D Effect, Parallax Sections)</li>
                            <li><i class="fa-solid fa-check"></i> Semua Fitur Gold + Video Background + Multi-Gallery</li>
                            <li><i class="fa-solid fa-check"></i> Floating VIP Navigation</li>
                            <li><i class="fa-solid fa-check"></i> Particle Confetti System</li>
                            <li><i class="fa-solid fa-check"></i> Custom Audio Player UI</li>
                            <li><i class="fa-solid fa-check"></i> WhatsApp Integration</li>
                            <li><i class="fa-solid fa-check"></i> 5x Revisi</li>
                            <li><i class="fa-solid fa-check"></i> Deploy Subdomain Priority</li>
                        </ul>
                        <a href="#kontak" class="package-btn">Pilih Paket</a>
                    </div>
                </div>

                <!-- Platinum Package -->
                <div class="col-lg-6 col-md-6">
                    <div class="package-card package-platinum">
                        <div class="package-header">
                            <div class="package-icon">
                                <i class="fa-solid fa-gem"></i>
                                <i class="fa-solid fa-crown" style="position:absolute;top:-5px;right:-5px;font-size:0.8rem;color:var(--gold-primary);"></i>
                            </div>
                            <h3 class="package-name">Platinum</h3>
                            <div class="package-price">Rp 400.000<span>/paket</span></div>
                            <p class="package-templates">5 Template + Custom Design</p>
                        </div>
                        <ul class="package-features">
                            <li><i class="fa-solid fa-check"></i> 5 Template VIP + Custom Design</li>
                            <li><i class="fa-solid fa-check"></i> Semua Animasi Premium + Full Custom</li>
                            <li><i class="fa-solid fa-check"></i> Custom Color Scheme & Fonts</li>
                            <li><i class="fa-solid fa-check"></i> Multi-Language Support</li>
                            <li><i class="fa-solid fa-check"></i> Scroll-Based Storytelling</li>
                            <li><i class="fa-solid fa-check"></i> Custom Domain Ready</li>
                            <li><i class="fa-solid fa-check"></i> Unlimited Revisi</li>
                            <li><i class="fa-solid fa-check"></i> 90 Hari Support Priority</li>
                        </ul>
                        <a href="#kontak" class="package-btn">Pilih Paket</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Templates Showcase Section -->
    <section class="templates-section" id="templates">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Gallery Template</span>
                <h2 class="section-title font-elegant">Preview Template</h2>
                <p class="section-subtitle">
                    Lihat preview template yang tersedia untuk setiap paket. Klik untuk melihat detail.
                </p>
            </div>

            <!-- Package Tabs -->
            <div class="package-tabs">
                <button class="package-tab" data-package="bronze">Bronze</button>
                <button class="package-tab" data-package="silver">Silver</button>
                <button class="package-tab active" data-package="gold">Gold</button>
                <button class="package-tab" data-package="premium">Premium</button>
                <button class="package-tab" data-package="platinum">Platinum</button>
            </div>

            <!-- Template Grid -->
            <div class="row g-4" id="template-grid">
                <!-- Bronze Templates (dasar, tampil default) -->
                <div class="col-lg-3 col-md-4 col-6 template-item d-none" data-package="bronze">
                    <div class="template-showcase">
                        <div class="template-preview">
                            <img src="https://picsum.photos/seed/bronze1/400/700" alt="Bronze Template 1">
                            <div class="template-overlay">
                                <a href="./templates/template-bronze1/" target="_blank" class="btn btn-primary-gold btn-sm">
                                    <i class="fa-solid fa-eye me-2"></i>Preview
                                </a>
                            </div>
                        </div>
                        <div class="template-info">
                            <h4 class="template-name">Classic White</h4>
                            <p class="template-theme">Tema Putih Bersih Minimalis</p>
                            <div class="template-features">
                                <span class="template-feature-tag">Fade</span>
                                <span class="template-feature-tag">Minimalis</span>
                                <span class="template-feature-tag">Simple Nav</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6 template-item d-none" data-package="bronze">
                    <div class="template-showcase">
                        <div class="template-preview">
                            <img src="https://picsum.photos/seed/bronze2/400/700" alt="Bronze Template 2">
                            <div class="template-overlay">
                                <a href="./templates/template-bronze2/" target="_blank" class="btn btn-primary-gold btn-sm">
                                    <i class="fa-solid fa-eye me-2"></i>Preview
                                </a>
                            </div>
                        </div>
                        <div class="template-info">
                            <h4 class="template-name">Soft Blush</h4>
                            <p class="template-theme">Tema Pink Lembut</p>
                            <div class="template-features">
                                <span class="template-feature-tag">Fade</span>
                                <span class="template-feature-tag">Soft Tone</span>
                                <span class="template-feature-tag">Simple Nav</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6 template-item d-none" data-package="bronze">
                    <div class="template-showcase">
                        <div class="template-preview">
                            <img src="https://picsum.photos/seed/bronze3/400/700" alt="Bronze Template 3">
                            <div class="template-overlay">
                                <a href="./templates/template-bronze3/" target="_blank" class="btn btn-primary-gold btn-sm">
                                    <i class="fa-solid fa-eye me-2"></i>Preview
                                </a>
                            </div>
                        </div>
                        <div class="template-info">
                            <h4 class="template-name">Navy Basic</h4>
                            <p class="template-theme">Tema Biru Navy Dasar</p>
                            <div class="template-features">
                                <span class="template-feature-tag">Fade</span>
                                <span class="template-feature-tag">Clean</span>
                                <span class="template-feature-tag">Simple Nav</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Silver Templates -->
                <div class="col-lg-3 col-md-4 col-6 template-item d-none" data-package="silver">
                    <div class="template-showcase">
                        <div class="template-preview">
                            <img src="https://picsum.photos/seed/silver1/400/700" alt="Silver Template 1">
                            <div class="template-overlay">
                                <a href="./templates/template-silver1/" target="_blank" class="btn btn-primary-gold btn-sm">
                                    <i class="fa-solid fa-eye me-2"></i>Preview
                                </a>
                            </div>
                        </div>
                        <div class="template-info">
                            <h4 class="template-name">Modern Elegance</h4>
                            <p class="template-theme">Tema Silver Modern</p>
                            <div class="template-features">
                                <span class="template-feature-tag">Slide</span>
                                <span class="template-feature-tag">Fade</span>
                                <span class="template-feature-tag">Floating Nav</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6 template-item d-none" data-package="silver">
                    <div class="template-showcase">
                        <div class="template-preview">
                            <img src="https://picsum.photos/seed/silver2/400/700" alt="Silver Template 2">
                            <div class="template-overlay">
                                <a href="./templates/template-silver2/" target="_blank" class="btn btn-primary-gold btn-sm">
                                    <i class="fa-solid fa-eye me-2"></i>Preview
                                </a>
                            </div>
                        </div>
                        <div class="template-info">
                            <h4 class="template-name">Rosy Garden</h4>
                            <p class="template-theme">Tema Mawar Romantis</p>
                            <div class="template-features">
                                <span class="template-feature-tag">Slide</span>
                                <span class="template-feature-tag">Galeri</span>
                                <span class="template-feature-tag">Comment</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6 template-item d-none" data-package="silver">
                    <div class="template-showcase">
                        <div class="template-preview">
                            <img src="https://picsum.photos/seed/silver3/400/700" alt="Silver Template 3">
                            <div class="template-overlay">
                                <a href="./templates/template-silver3/" target="_blank" class="btn btn-primary-gold btn-sm">
                                    <i class="fa-solid fa-eye me-2"></i>Preview
                                </a>
                            </div>
                        </div>
                        <div class="template-info">
                            <h4 class="template-name">Evergreen</h4>
                            <p class="template-theme">Tema Hijau Natural Modern</p>
                            <div class="template-features">
                                <span class="template-feature-tag">Slide</span>
                                <span class="template-feature-tag">Gift Section</span>
                                <span class="template-feature-tag">Floating Nav</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gold Templates -->
                <div class="col-lg-3 col-md-4 col-6 template-item" data-package="gold">
                    <div class="template-showcase">
                        <div class="template-preview">
                            <img src="https://picsum.photos/seed/gold1/400/700" alt="Gold Template 1">
                            <div class="template-overlay">
                                <a href="./templates/template-1/" target="_blank" class="btn btn-primary-gold btn-sm">
                                    <i class="fa-solid fa-eye me-2"></i>Preview
                                </a>
                            </div>
                        </div>
                        <div class="template-info">
                            <h4 class="template-name">Golden Elegance</h4>
                            <p class="template-theme">Tema Emas Elegan</p>
                            <div class="template-features">
                                <span class="template-feature-tag">Confetti</span>
                                <span class="template-feature-tag">Parallax</span>
                                <span class="template-feature-tag">Shimmer</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6 template-item" data-package="gold">
                    <div class="template-showcase">
                        <div class="template-preview">
                            <img src="https://picsum.photos/seed/gold2/400/700" alt="Gold Template 2">
                            <div class="template-overlay">
                                <a href="./templates/template-2/" target="_blank" class="btn btn-primary-gold btn-sm">
                                    <i class="fa-solid fa-eye me-2"></i>Preview
                                </a>
                            </div>
                        </div>
                        <div class="template-info">
                            <h4 class="template-name">Ruby Romance</h4>
                            <p class="template-theme">Tema Merah Muda</p>
                            <div class="template-features">
                                <span class="template-feature-tag">Heart Pulse</span>
                                <span class="template-feature-tag">Rose Fall</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6 template-item" data-package="gold">
                    <div class="template-showcase">
                        <div class="template-preview">
                            <img src="https://picsum.photos/seed/gold3/400/700" alt="Gold Template 3">
                            <div class="template-overlay">
                                <a href="./templates/template-3/" target="_blank" class="btn btn-primary-gold btn-sm">
                                    <i class="fa-solid fa-eye me-2"></i>Preview
                                </a>
                            </div>
                        </div>
                        <div class="template-info">
                            <h4 class="template-name">Emerald Garden</h4>
                            <p class="template-theme">Tema Hijau Natural</p>
                            <div class="template-features">
                                <span class="template-feature-tag">Leaf Float</span>
                                <span class="template-feature-tag">Nature</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6 template-item" data-package="gold">
                    <a href="./templates/template-4/" target="_blank" class="text-decoration-none d-block">
                        <div class="template-showcase">
                            <div class="template-preview">
                                <img src="https://picsum.photos/seed/gold4/400/700" alt="Gold Template 4">
                                <div class="template-overlay">
                                    <span class="btn btn-primary-gold btn-sm">
                                        <i class="fa-solid fa-eye me-2"></i>Preview
                                    </span>
                                </div>
                            </div>
                            <div class="template-info">
                                <h4 class="template-name">Navy Classic</h4>
                                <p class="template-theme">Tema Biru Tua Formal</p>
                                <div class="template-features">
                                    <span class="template-feature-tag">Classic</span>
                                    <span class="template-feature-tag">Wave</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-6 template-item" data-package="gold">
                    <a href="./templates/template-5/" target="_blank" class="text-decoration-none d-block">
                        <div class="template-showcase">
                            <div class="template-preview">
                                <img src="https://picsum.photos/seed/gold5/400/700" alt="Gold Template 5">
                                <div class="template-overlay">
                                    <span class="btn btn-primary-gold btn-sm">
                                        <i class="fa-solid fa-eye me-2"></i>Preview
                                    </span>
                                </div>
                            </div>
                            <div class="template-info">
                                <h4 class="template-name">Lavender Dreams</h4>
                                <p class="template-theme">Tema Ungu Romantis</p>
                                <div class="template-features">
                                    <span class="template-feature-tag">Dreamy</span>
                                    <span class="template-feature-tag">Sparkle</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Premium Templates -->
                <div class="col-lg-3 col-md-4 col-6 template-item d-none" data-package="premium">
                    <a href="./templates/template-6/" class="template-showcase text-decoration-none d-block">
                        <div class="template-preview">
                            <img src="https://picsum.photos/seed/prem1/400/700" alt="Premium Template 1">
                            <div class="template-overlay">
                                <span class="btn btn-primary-gold btn-sm">
                                    <i class="fa-solid fa-eye me-2"></i>Preview
                                </span>
                            </div>
                        </div>
                        <div class="template-info">
                            <h4 class="template-name">Luxury Gold VIP</h4>
                            <p class="template-theme">Dark Gold Premium</p>
                            <div class="template-features">
                                <span class="template-feature-tag">Particles</span>
                                <span class="template-feature-tag">Timeline</span>
                                <span class="template-feature-tag">Countdown</span>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-6 template-item d-none" data-package="premium">
                    <a href="./templates/template-7/" target="_blank" class="text-decoration-none d-block">
                        <div class="template-showcase">
                            <div class="template-preview">
                                <img src="https://picsum.photos/seed/prem2/400/700" alt="Premium Template 2">
                                <div class="template-overlay">
                                    <span class="btn btn-primary-gold btn-sm">
                                        <i class="fa-solid fa-eye me-2"></i>Preview
                                    </span>
                                </div>
                            </div>
                            <div class="template-info">
                                <h4 class="template-name">Royal Emerald</h4>
                                <p class="template-theme">Tema Royal Hijau</p>
                                <div class="template-features">
                                    <span class="template-feature-tag">Royal</span>
                                    <span class="template-feature-tag">Crown</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-6 template-item d-none" data-package="premium">
                    <a href="./templates/template-8/" target="_blank" class="text-decoration-none d-block">
                        <div class="template-showcase">
                            <div class="template-preview">
                                <img src="https://picsum.photos/seed/prem3/400/700" alt="Premium Template 3">
                                <div class="template-overlay">
                                    <span class="btn btn-primary-gold btn-sm">
                                        <i class="fa-solid fa-eye me-2"></i>Preview
                                    </span>
                                </div>
                            </div>
                            <div class="template-info">
                                <h4 class="template-name">Diamond White</h4>
                                <p class="template-theme">Tema Diamond Putih</p>
                                <div class="template-features">
                                    <span class="template-feature-tag">Light Rays</span>
                                    <span class="template-feature-tag">Sparkle</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-6 template-item d-none" data-package="premium">
                    <a href="./templates/template-9/" target="_blank" class="text-decoration-none d-block">
                        <div class="template-showcase">
                            <div class="template-preview">
                                <img src="https://picsum.photos/seed/prem4/400/700" alt="Premium Template 4">
                                <div class="template-overlay">
                                    <span class="btn btn-primary-gold btn-sm">
                                        <i class="fa-solid fa-eye me-2"></i>Preview
                                    </span>
                                </div>
                            </div>
                            <div class="template-info">
                                <h4 class="template-name">Sunset Blush</h4>
                                <p class="template-theme">Tema Sunset</p>
                                <div class="template-features">
                                    <span class="template-feature-tag">Gradient</span>
                                    <span class="template-feature-tag">Hearts</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-6 template-item d-none" data-package="premium">
                    <a href="./templates/template-10/" target="_blank" class="text-decoration-none d-block">
                        <div class="template-showcase">
                            <div class="template-preview">
                                <img src="https://picsum.photos/seed/prem5/400/700" alt="Premium Template 5">
                                <div class="template-overlay">
                                    <span class="btn btn-primary-gold btn-sm">
                                        <i class="fa-solid fa-eye me-2"></i>Preview
                                    </span>
                                </div>
                            </div>
                            <div class="template-info">
                                <h4 class="template-name">Midnight Black</h4>
                                <p class="template-theme">Tema Dark Premium</p>
                                <div class="template-features">
                                    <span class="template-feature-tag">Neon</span>
                                    <span class="template-feature-tag">Star Field</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Platinum Templates -->
                <div class="col-lg-3 col-md-4 col-6 template-item d-none" data-package="platinum">
                    <a href="./templates/template-11/" target="_blank" class="text-decoration-none d-block">
                        <div class="template-showcase">
                            <div class="template-preview">
                                <img src="https://picsum.photos/seed/plat1/400/700" alt="Platinum Template 1">
                                <div class="template-overlay">
                                    <span class="btn btn-primary-gold btn-sm">
                                        <i class="fa-solid fa-eye me-2"></i>Preview
                                    </span>
                                </div>
                            </div>
                            <div class="template-info">
                                <h4 class="template-name">Full Custom VIP</h4>
                                <p class="template-theme">Custom Design</p>
                                <div class="template-features">
                                    <span class="template-feature-tag">Custom</span>
                                    <span class="template-feature-tag">Full Control</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-6 template-item d-none" data-package="platinum">
                    <a href="./templates/template-12/" target="_blank" class="text-decoration-none d-block">
                        <div class="template-showcase">
                            <div class="template-preview">
                                <img src="https://picsum.photos/seed/plat2/400/700" alt="Platinum Template 2">
                                <div class="template-overlay">
                                    <span class="btn btn-primary-gold btn-sm">
                                        <i class="fa-solid fa-eye me-2"></i>Preview
                                    </span>
                                </div>
                            </div>
                            <div class="template-info">
                                <h4 class="template-name">Animated Story</h4>
                                <p class="template-theme">Scroll Storytelling</p>
                                <div class="template-features">
                                    <span class="template-feature-tag">Scroll</span>
                                    <span class="template-feature-tag">Timeline</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-6 template-item d-none" data-package="platinum">
                    <a href="./templates/template-13/" target="_blank" class="text-decoration-none d-block">
                        <div class="template-showcase">
                            <div class="template-preview">
                                <img src="https://picsum.photos/seed/plat3/400/700" alt="Platinum Template 3">
                                <div class="template-overlay">
                                    <span class="btn btn-primary-gold btn-sm">
                                        <i class="fa-solid fa-eye me-2"></i>Preview
                                    </span>
                                </div>
                            </div>
                            <div class="template-info">
                                <h4 class="template-name">Gamification</h4>
                                <p class="template-theme">Interactive Games</p>
                                <div class="template-features">
                                    <span class="template-feature-tag">Mini Games</span>
                                    <span class="template-feature-tag">Quiz</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-6 template-item d-none" data-package="platinum">
                    <a href="./templates/template-14/" target="_blank" class="text-decoration-none d-block">
                        <div class="template-showcase">
                            <div class="template-preview">
                                <img src="https://picsum.photos/seed/plat4/400/700" alt="Platinum Template 4">
                                <div class="template-overlay">
                                    <span class="btn btn-primary-gold btn-sm">
                                        <i class="fa-solid fa-eye me-2"></i>Preview
                                    </span>
                                </div>
                            </div>
                            <div class="template-info">
                                <h4 class="template-name">Cinematic</h4>
                                <p class="template-theme">Video Cinematic</p>
                                <div class="template-features">
                                    <span class="template-feature-tag">Ken Burns</span>
                                    <span class="template-feature-tag">Video</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-6 template-item d-none" data-package="platinum">
                    <a href="./templates/template-15/" target="_blank" class="text-decoration-none d-block">
                        <div class="template-showcase">
                            <div class="template-preview">
                                <img src="https://picsum.photos/seed/plat5/400/700" alt="Platinum Template 5">
                                <div class="template-overlay">
                                    <span class="btn btn-primary-gold btn-sm">
                                        <i class="fa-solid fa-eye me-2"></i>Preview
                                    </span>
                                </div>
                            </div>
                            <div class="template-info">
                                <h4 class="template-name">Multi Events</h4>
                                <p class="template-theme">Multiple Celebrations</p>
                                <div class="template-features">
                                    <span class="template-feature-tag">Multi Event</span>
                                    <span class="template-feature-tag">Family</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Live Demo Templates -->
            <div class="text-center mt-5">
                <p class="text-muted mb-3">Template sudah tersedia dan bisa langsung dicoba:</p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="./templates/template-bronze1/" target="_blank" class="btn btn-outline-gold btn-sm demo-btn demo-btn-bronze">
                        <i class="fa-solid fa-eye me-2"></i>Demo Bronze
                    </a>
                    <a href="./templates/template-silver1/" target="_blank" class="btn btn-outline-gold btn-sm demo-btn demo-btn-silver">
                        <i class="fa-solid fa-eye me-2"></i>Demo Silver
                    </a>
                    <a href="./templates/template-1/" target="_blank" class="btn btn-outline-gold btn-sm demo-btn-gold demo-btn">
                        <i class="fa-solid fa-eye me-2"></i>Demo Gold
                    </a>
                    <a href="./templates/template-6/" target="_blank" class="btn btn-outline-gold btn-sm demo-btn-premium demo-btn">
                        <i class="fa-solid fa-eye me-2"></i>Demo Premium
                    </a>
                    <a href="./templates/template-11/" target="_blank" class="btn btn-primary-gold btn-sm demo-btn-platinum demo-btn">
                        <i class="fa-solid fa-crown me-2"></i>Demo Platinum
                    </a>
                </div>
        </div>
    </section>

    <!-- Features Comparison Section -->
    <section class="comparison-section" id="harga">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Perbandingan Fitur</span>
                <h2 class="section-title font-elegant">Daftar Fitur per Paket</h2>
                <p class="section-subtitle">
                    Bandingkan fitur yang tersedia di setiap paket.
                </p>
            </div>

            <div class="table-responsive">
                <table class="table comparison-table text-center">
                    <thead>
                        <tr>
                            <th>Fitur</th>
                            <th>Bronze<br><small class="text-muted">Rp 25K</small></th>
                            <th>Silver<br><small class="text-muted">Rp 75K</small></th>
                            <th>Gold<br><small class="text-muted">Rp 150K</small></th>
                            <th>Premium<br><small class="text-muted">Rp 250K</small></th>
                            <th>Platinum<br><small class="text-muted">Rp 400K</small></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Jumlah Template</td>
                            <td>3</td>
                            <td>3</td>
                            <td>5</td>
                            <td>5</td>
                            <td>5 + Custom</td>
                        </tr>
                        <tr>
                            <td>Animasi Scroll</td>
                            <td><i class="fa-solid fa-minus times-icon"></i></td>
                            <td><i class="fa-solid fa-check check-icon"></i></td>
                            <td><i class="fa-solid fa-check check-icon"></i></td>
                            <td><i class="fa-solid fa-check check-icon"></i></td>
                            <td><i class="fa-solid fa-check check-icon"></i></td>
                        </tr>
                        <tr>
                            <td>Confetti Effect</td>
                            <td><i class="fa-solid fa-minus times-icon"></i></td>
                            <td><i class="fa-solid fa-minus times-icon"></i></td>
                            <td><i class="fa-solid fa-check check-icon"></i></td>
                            <td><i class="fa-solid fa-check check-icon"></i></td>
                            <td><i class="fa-solid fa-check check-icon"></i></td>
                        </tr>
                        <tr>
                            <td>Comment System</td>
                            <td><i class="fa-solid fa-minus times-icon"></i></td>
                            <td><i class="fa-solid fa-check check-icon"></i></td>
                            <td><i class="fa-solid fa-check check-icon"></i></td>
                            <td><i class="fa-solid fa-check check-icon"></i></td>
                            <td><i class="fa-solid fa-check check-icon"></i></td>
                        </tr>
                        <tr>
                            <td>Love Story Section</td>
                            <td><i class="fa-solid fa-minus times-icon"></i></td>
                            <td><i class="fa-solid fa-check check-icon"></i></td>
                            <td><i class="fa-solid fa-check check-icon"></i></td>
                            <td><i class="fa-solid fa-check check-icon"></i></td>
                            <td><i class="fa-solid fa-check check-icon"></i></td>
                        </tr>
                        <tr>
                            <td>Video Section</td>
                            <td><i class="fa-solid fa-minus times-icon"></i></td>
                            <td><i class="fa-solid fa-minus times-icon"></i></td>
                            <td><i class="fa-solid fa-check check-icon"></i></td>
                            <td><i class="fa-solid fa-check check-icon"></i></td>
                            <td><i class="fa-solid fa-check check-icon"></i></td>
                        </tr>
                        <tr>
                            <td>Particle Effects</td>
                            <td><i class="fa-solid fa-minus times-icon"></i></td>
                            <td><i class="fa-solid fa-minus times-icon"></i></td>
                            <td><i class="fa-solid fa-minus times-icon"></i></td>
                            <td><i class="fa-solid fa-check check-icon"></i></td>
                            <td><i class="fa-solid fa-check check-icon"></i></td>
                        </tr>
                        <tr>
                            <td>Custom Audio Player</td>
                            <td><i class="fa-solid fa-minus times-icon"></i></td>
                            <td><i class="fa-solid fa-minus times-icon"></i></td>
                            <td><i class="fa-solid fa-minus times-icon"></i></td>
                            <td><i class="fa-solid fa-check check-icon"></i></td>
                            <td><i class="fa-solid fa-check check-icon"></i></td>
                        </tr>
                        <tr>
                            <td>Multi-Gallery</td>
                            <td><i class="fa-solid fa-minus times-icon"></i></td>
                            <td><i class="fa-solid fa-minus times-icon"></i></td>
                            <td><i class="fa-solid fa-minus times-icon"></i></td>
                            <td><i class="fa-solid fa-check check-icon"></i></td>
                            <td><i class="fa-solid fa-check check-icon"></i></td>
                        </tr>
                        <tr>
                            <td>Custom Design</td>
                            <td><i class="fa-solid fa-minus times-icon"></i></td>
                            <td><i class="fa-solid fa-minus times-icon"></i></td>
                            <td><i class="fa-solid fa-minus times-icon"></i></td>
                            <td><i class="fa-solid fa-minus times-icon"></i></td>
                            <td><i class="fa-solid fa-check check-icon"></i></td>
                        </tr>
                        <tr>
                            <td>Jumlah Revisi</td>
                            <td>1x</td>
                            <td>2x</td>
                            <td>3x</td>
                            <td>5x</td>
                            <td>Unlimited</td>
                        </tr>
                        <tr>
                            <td>Deploy Type</td>
                            <td>Subfolder</td>
                            <td>Subfolder</td>
                            <td>Subdomain</td>
                            <td>Subdomain Priority</td>
                            <td>Custom Domain</td>
                        </tr>
                        <tr>
                            <td>Support</td>
                            <td>7 Hari</td>
                            <td>14 Hari</td>
                            <td>30 Hari</td>
                            <td>60 Hari</td>
                            <td>90 Hari</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section" id="harga">
        <div class="container">
            <div class="cta-content">
                <span class="hero-badge">
                    <i class="fa-solid fa-sparkles me-2"></i>Mulai Sekarang
                </span>
                <h2 class="section-title font-elegant mt-3">
                    Siap Membuat Undangan<br>
                    <span class="font-script" style="font-size: 3rem; color: var(--gold-primary);">Istimewa?</span>
                </h2>
                <p class="section-subtitle mt-3">
                    Pilih paket yang sesuai dengan kebutuhan dan budget Anda.<br>
                    Kami siap membantu membuat undangan pernikahan digital yang indah.
                </p>
                <div class="hero-cta mt-4">
                    <a href="#kontak" class="btn btn-primary-gold">
                        <i class="fa-brands fa-whatsapp me-2"></i>Pesan Sekarang
                    </a>
                    <a href="#templates" class="btn btn-outline-gold">
                        <i class="fa-solid fa-images me-2"></i>Lihat Template
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section" id="kontak">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-card">
                        <div class="text-center mb-4">
                            <span class="section-badge">Hubungi Kami</span>
                            <h2 class="section-title font-elegant mt-2">Pesan Undangan</h2>
                            <p class="text-muted">Isi form di bawah atau hubungi langsung via WhatsApp</p>
                        </div>

                        <form id="order-form">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <input type="text" name="nama" class="form-control form-control-custom" placeholder="Nama Lengkap" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="tel" name="whatsapp" class="form-control form-control-custom" placeholder="Nomor WhatsApp" required>
                                </div>
                                <div class="col-md-6">
                                    <select name="paket" class="form-control form-control-custom" required>
                                        <option value="">Pilih Paket</option>
                                        <option value="bronze">Bronze - Rp 25.000</option>
                                        <option value="silver">Silver - Rp 75.000</option>
                                        <option value="gold">Gold - Rp 150.000</option>
                                        <option value="premium">Premium - Rp 250.000</option>
                                        <option value="platinum">Platinum - Rp 400.000</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select name="template" class="form-control form-control-custom">
                                        <option value="">Pilih Template (Opsional)</option>
                                        <optgroup label="Bronze Templates" data-package="bronze">
                                            <option value="bronze-1">Classic White</option>
                                            <option value="bronze-2">Soft Blush</option>
                                            <option value="bronze-3">Navy Basic</option>
                                        </optgroup>
                                        <optgroup label="Silver Templates" data-package="silver">
                                            <option value="silver-1">Modern Elegance</option>
                                            <option value="silver-2">Rosy Garden</option>
                                            <option value="silver-3">Evergreen</option>
                                        </optgroup>
                                        <optgroup label="Gold Templates" data-package="gold">
                                            <option value="gold-1">Golden Elegance</option>
                                            <option value="gold-2">Ruby Romance</option>
                                            <option value="gold-3">Emerald Garden</option>
                                            <option value="gold-4">Navy Classic</option>
                                            <option value="gold-5">Lavender Dreams</option>
                                        </optgroup>
                                        <optgroup label="Premium Templates" data-package="premium">
                                            <option value="prem-1">Luxury Gold VIP</option>
                                            <option value="prem-2">Royal Emerald</option>
                                            <option value="prem-3">Diamond White</option>
                                            <option value="prem-4">Sunset Blush</option>
                                            <option value="prem-5">Midnight Black</option>
                                        </optgroup>
                                        <optgroup label="Platinum Templates" data-package="platinum">
                                            <option value="plat-1">Full Custom VIP</option>
                                            <option value="plat-2">Animated Story</option>
                                            <option value="plat-3">Gamification</option>
                                            <option value="plat-4">Cinematic</option>
                                            <option value="plat-5">Multi Events</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea name="keterangan" class="form-control form-control-custom" rows="4" placeholder="Informasi tambahan (tanggal pernikahan, nama pasangan, dll)"></textarea>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary-gold px-5">
                                        <i class="fa-solid fa-paper-plane me-2"></i>Kirim Pesanan
                                    </button>
                                </div>
                            </div>
                        </form>

                        <div class="text-center mt-4">
                            <p class="text-muted mb-2">Atau hubungi langsung via WhatsApp:</p>
                            <a href="https://wa.me/6285212843329" target="_blank" class="btn btn-success">
                                <i class="fa-brands fa-whatsapp me-2"></i>Chat WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5 class="fw-bold mb-3">
                        <img src="{{ asset('images/logo.png') }}" alt="Petrikov Lumina" height="28" class="me-2">Petrikov Lumina
                    </h5>
                    <p class="text-muted mb-0">
                        Template undangan pernikahan digital premium dengan berbagai fitur dan animasi lengkap.
                    </p>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <h6 class="fw-bold mb-3">Quick Links</h6>
                    <ul class="list-unstyled footer-links">
                        <li><a href="#packages">Paket</a></li>
                        <li><a href="#templates">Template</a></li>
                        <li><a href="#fitur">Fitur</a></li>
                        <li><a href="#kontak">Kontak</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h6 class="fw-bold mb-3">Kontak</h6>
                    <ul class="list-unstyled footer-links">
                        <li><i class="fa-brands fa-whatsapp me-2"></i>+62 852-1284-3329</li>
                        <li><i class="fa-solid fa-envelope me-2"></i>petrikovlumina@gmail.com</li>
                    </ul>
                </div>
            </div>
            <hr class="my-4" style="border-color: rgba(255,255,255,0.1);">
            <div class="text-center">
                <p class="text-muted mb-0">
                    &copy; 2025 Petrikov Lumina. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Float Button -->
    <a href="https://wa.me/6285212843329" target="_blank" class="whatsapp-float">
        <i class="fa-brands fa-whatsapp"></i>
    </a>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Template Tab Filter
        document.querySelectorAll('.package-tab').forEach(tab => {
            tab.addEventListener('click', function() {
                // Update active tab
                document.querySelectorAll('.package-tab').forEach(t => t.classList.remove('active'));
                this.classList.add('active');

                // Filter templates
                const package = this.dataset.package;
                document.querySelectorAll('.template-item').forEach(item => {
                    if (item.dataset.package === package) {
                        item.classList.remove('d-none');
                    } else {
                        item.classList.add('d-none');
                    }
                });
            });
        });

        // Smooth scroll for anchor links (skip href="#" to allow normal navigation)
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const href = this.getAttribute('href');
                if (!href || href === '#') return;
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar-dark-custom');
            if (window.scrollY > 100) {
                navbar.style.background = 'rgba(15, 15, 26, 0.98)';
            } else {
                navbar.style.background = 'rgba(15, 15, 26, 0.95)';
            }
        });

        // Filter template dropdown based on selected package
        const paketSelect = document.querySelector('select[name="paket"]');
        const templateSelect = document.querySelector('select[name="template"]');

        function filterTemplatesByPackage(selectedPackage) {
            const optgroups = templateSelect.querySelectorAll('optgroup');
            // Reset selection
            templateSelect.value = '';

            optgroups.forEach(group => {
                const pkg = group.dataset.package;
                if (!selectedPackage) {
                    // If no package selected, hide all optgroups
                    group.style.display = 'none';
                } else if (pkg === selectedPackage) {
                    group.style.display = '';
                } else {
                    group.style.display = 'none';
                }
            });
        }

        // When package changes, filter templates
        if (paketSelect && templateSelect) {
            // Initially hide all optgroups (user hasn't selected package yet)
            filterTemplatesByPackage('');

            paketSelect.addEventListener('change', function() {
                filterTemplatesByPackage(this.value);
            });
        }

        // Form submission
        document.getElementById('order-form').addEventListener('submit', function(e) {
            e.preventDefault();

            // Get form data using named fields
            const formData = new FormData(this);
            const data = Object.fromEntries(formData);

            // Create WhatsApp message using named keys
            let message = `Halo, saya ingin pesan undangan digital:\n\n`;
            message += `Nama: ${data.nama || '-'}\n`;
            message += `WhatsApp: ${data.whatsapp || '-'}\n`;
            message += `Paket: ${data.paket || '-'}\n`;
            message += `Template: ${data.template || 'Belum pilih'}\n`;
            message += `Info tambahan: ${data.keterangan || '-'}\n`;

            // Open WhatsApp
            const phone = '6281234567890'; // Ganti dengan nomor WhatsApp Anda
            const waUrl = `https://wa.me/${phone}?text=${encodeURIComponent(message)}`;
            window.open(waUrl, '_blank');
        });

        // Intersection Observer for animations
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.package-card, .template-showcase').forEach(el => {
            observer.observe(el);
        });
    </script>
</body>
</html>