<?php require __DIR__ . '/config/site.php'; ?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FleetFlow - Enterprise Fleet Management</title>
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="logo">
            <i class="fas fa-truck-moving"></i> FleetFlow
        </div>
        
        <div class="nav-links">
            <a href="#home" data-i18n="nav_home">Home</a>
            <a href="#about" data-i18n="nav_about">About Company</a>
            <a href="#features" data-i18n="nav_services">Services</a>
            <a href="#contact" data-i18n="nav_contact">Contact</a>
        </div>

        <div class="controls">
            <select class="lang-select" id="language-selector">
                <option value="en">English</option>
                <option value="ta">Tamil (தமிழ்)</option>
                <option value="hi">Hindi (हिंदी)</option>
                <option value="te">Telugu (తెలుగు)</option>
                <option value="fr">French (Français)</option>
            </select>
            
            <button class="theme-btn" id="theme-toggle">
                <i class="fas fa-moon"></i>
            </button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <h1 data-i18n="hero_title">Smart Fleet Management for the Future</h1>
        <p data-i18n="hero_desc">Optimize your logistics with real-time tracking, fuel analytics, and driver performance monitoring. Join the revolution in transport management.</p>
        
        <div class="login-options">
            <a href="login.php?role=admin" class="login-card-link">
                <div class="login-option-card">
                    <i class="fas fa-user-shield"></i>
                    <span data-i18n="login_admin">Admin Login</span>
                </div>
            </a>
            
            <a href="login.php?role=manager" class="login-card-link">
                <div class="login-option-card">
                    <i class="fas fa-user-tie"></i>
                    <span data-i18n="login_manager">Manager Login</span>
                </div>
            </a>
            
            <a href="login.php?role=driver" class="login-card-link">
                <div class="login-option-card">
                    <i class="fas fa-id-card"></i>
                    <span data-i18n="login_driver">Driver Login</span>
                </div>
            </a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section about-section">
        <h2 data-i18n="about_title">About Our Company</h2>
        <div class="about-content">
            <div class="about-text">
                <p data-i18n="about_text1">FleetFlow is a leading provider of intelligent transport solutions. Established in 2026, we have revolutionized how companies manage their vehicular assets. Our mission is to provide transparency, efficiency, and safety in every mile driven.</p>
                <p data-i18n="about_text2">We serve industries ranging from logistics and delivery to public transport and corporate fleets. With our AI-driven insights, our clients save an average of 30% on operational costs annually.</p>
            </div>
            <div class="about-stats">
                <div class="stat-box">
                    <h3>500+</h3>
                    <p data-i18n="stat_vehicles">Vehicles Tracked</p>
                </div>
                <div class="stat-box">
                    <h3>24/7</h3>
                    <p data-i18n="stat_support">Live Support</p>
                </div>
                <div class="stat-box">
                    <h3>50+</h3>
                    <p data-i18n="stat_cities">Cities Covered</p>
                </div>
                <div class="stat-box">
                    <h3>100%</h3>
                    <p data-i18n="stat_satisfaction">Client Satisfaction</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="section homepage-features">
        <div class="section-heading">
            <span class="section-kicker">Core Modules</span>
            <h2 data-i18n="services_title">Our Premium Services</h2>
            <p>Every module follows the same professional interface, so your team can move from tracking to maintenance and reporting without friction.</p>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-map-marked-alt"></i></div>
                <span class="feature-tag">Live Operations</span>
                <h3 data-i18n="service_tracking">Real-Time Tracking</h3>
                <p data-i18n="service_tracking_desc">Live GPS monitoring of your trucks, buses, and vans with detailed route history.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-gas-pump"></i></div>
                <span class="feature-tag">Smart Insights</span>
                <h3 data-i18n="service_fuel">Fuel Analytics</h3>
                <p data-i18n="service_fuel_desc">AI-powered analysis of fuel consumption to prevent wastage and theft.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-tools"></i></div>
                <span class="feature-tag">Fleet Health</span>
                <h3 data-i18n="service_maint">Maintenance Alerts</h3>
                <p data-i18n="service_maint_desc">Automated reminders for service, oil changes, and tire rotations.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-chart-line"></i></div>
                <span class="feature-tag">Finance Control</span>
                <h3 data-i18n="service_expense">Expense Reports</h3>
                <p data-i18n="service_expense_desc">Detailed financial breakdowns of trip costs, tolls, and operational expenses.</p>
            </div>
        </div>
    </section>

    <!-- Footer / Contact -->
    <footer id="contact">
        <div class="footer-content">
            <div class="footer-col footer-brand-card">
                <div class="footer-badge"><?php echo htmlspecialchars($site_contact['company_name']); ?></div>
                <p data-i18n="footer_tagline">Driving the future of logistics with connected fleet operations, maintenance visibility, and financial control.</p>
                <div class="contact-list">
                    <div class="contact-item">
                        <i class="fas fa-phone-alt"></i>
                        <span><?php echo htmlspecialchars($site_contact['phone_display']); ?></span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span><?php echo htmlspecialchars($site_contact['email']); ?></span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span><?php echo htmlspecialchars($site_contact['address']); ?></span>
                    </div>
                </div>
            </div>

            <div class="footer-col footer-links-card">
                <h4 data-i18n="footer_quicklinks">Quick Links</h4>
                <a href="#about" data-i18n="nav_about">About Company</a>
                <a href="#features" data-i18n="nav_services">Services</a>
                <a href="#" data-i18n="footer_privacy">Privacy Policy</a>
                <a href="#" data-i18n="footer_terms">Terms of Service</a>
                <a href="#" data-i18n="footer_help">Help Center</a>
            </div>
        </div>
        <div class="footer-bottom">
            <span data-i18n="footer_copyright">&copy; 2026 FleetFlow Management System. All Rights Reserved.</span>
        </div>
    </footer>

    <!-- Chat Widget -->
    <div class="chat-widget">
        <div class="chat-box" id="chat-box">
            <div class="chat-header">
                <span>Support Chat</span>
                <span style="cursor:pointer;" onclick="toggleChat()">x</span>
            </div>
            <div class="chat-body" id="chat-body-content">
                <p style="color: var(--text-muted); font-size: 0.8rem; text-align: center;">Today</p>
                <div class="chat-message bot-message">
                    Hello! I'm your AI Fleet Assistant. How can I help you today?
                </div>
            </div>
            <div class="chat-input">
                <input type="text" id="chat-input-field" placeholder="Type a message...">
                <button onclick="sendMessage()"><i class="fas fa-paper-plane"></i></button>
            </div>
        </div>
        <button class="chat-btn" onclick="toggleChat()">
            <i class="fas fa-comments"></i>
        </button>
    </div>

    <!-- Scripts -->
    <script src="assets/js/theme.js"></script>
    <script>
        // Chat Toggle
        function toggleChat() {
            const chatBox = document.getElementById('chat-box');
            chatBox.style.display = (chatBox.style.display === 'flex') ? 'none' : 'flex';
        }

        // Chat Logic
        const chatInput = document.getElementById('chat-input-field');
        const chatBody = document.getElementById('chat-body-content');

        chatInput.addEventListener('keypress', function (e) {
            if (e.key === 'Enter') sendMessage();
        });

        function sendMessage() {
            const message = chatInput.value.trim();
            if (!message) return;

            // API Key Configuration
            const apiKey = "AIzaSyB3K8Hto0XTRaB82mh7BjFZ3akAg_jGXa0";
            // Always update to the latest provided key to ensure it works
            localStorage.setItem('gemini_api_key', apiKey);

            // Display User Message
            appendMessage('User', message);
            chatInput.value = '';

            // Loading Indicator
            const loadingId = 'loading-' + Date.now();
            appendMessage('Bot', 'Thinking...', loadingId);

            // Send to Backend
            fetch('api/chat_gemini.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ message: message, api_key: apiKey })
            })
            .then(response => response.json())
            .then(data => {
                removeMessage(loadingId);
                if (data.success) {
                    appendMessage('Bot', data.reply);
                } else {
                    appendMessage('System', 'Error: ' + data.message + ' <br><a href="#" onclick="resetApiKey(); return false;" style="color:var(--danger); font-weight:bold;">[Reset API Key]</a>');
                }
            })
            .catch(error => {
                removeMessage(loadingId);
                appendMessage('System', 'Error connecting. <br><a href="#" onclick="resetApiKey(); return false;">[Reset API Key]</a>');
                console.error(error);
            });
        }

        function resetApiKey() {
            localStorage.removeItem('gemini_api_key');
            alert('API Key removed. Reload the page to enter a new one.');
            location.reload();
        }

        function appendMessage(sender, text, id = null) {
            const msgDiv = document.createElement('div');
            msgDiv.classList.add('chat-message');
            if (id) msgDiv.id = id;

            if (sender === 'User') {
                msgDiv.classList.add('user-message');
                msgDiv.textContent = text;
            } else if (sender === 'Bot') {
                msgDiv.classList.add('bot-message');
                // Simple formatting for bold text
                msgDiv.innerHTML = text.replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>').replace(/\n/g, '<br>');
            } else {
                msgDiv.style.textAlign = 'center';
                msgDiv.style.fontSize = '0.8rem';
                msgDiv.style.color = 'var(--text-muted)';
                msgDiv.innerHTML = text; // Allow HTML for links
            }

            chatBody.appendChild(msgDiv);
            chatBody.scrollTop = chatBody.scrollHeight;
        }

        function removeMessage(id) {
            const el = document.getElementById(id);
            if (el) el.remove();
        }

        // Translation Dictionary
        const translations = {
            en: {
                nav_home: "Home",
                nav_about: "About Company",
                nav_services: "Services",
                nav_contact: "Contact",
                hero_title: "Smart Fleet Management for the Future",
                hero_desc: "Optimize your logistics with real-time tracking, fuel analytics, and driver performance monitoring. Join the revolution in transport management.",
                login_admin: "Admin Login",
                login_manager: "Manager Login",
                login_driver: "Driver Login",
                about_title: "About Our Company",
                about_text1: "FleetFlow is a leading provider of intelligent transport solutions. Established in 2026, we have revolutionized how companies manage their vehicular assets. Our mission is to provide transparency, efficiency, and safety in every mile driven.",
                about_text2: "We serve industries ranging from logistics and delivery to public transport and corporate fleets. With our AI-driven insights, our clients save an average of 30% on operational costs annually.",
                stat_vehicles: "Vehicles Tracked",
                stat_support: "Live Support",
                stat_cities: "Cities Covered",
                stat_satisfaction: "Client Satisfaction",
                services_title: "Our Premium Services",
                service_tracking: "Real-Time Tracking",
                service_tracking_desc: "Live GPS monitoring of your trucks, buses, and vans with detailed route history.",
                service_fuel: "Fuel Analytics",
                service_fuel_desc: "AI-powered analysis of fuel consumption to prevent wastage and theft.",
                service_maint: "Maintenance Alerts",
                service_maint_desc: "Automated reminders for service, oil changes, and tire rotations.",
                service_expense: "Expense Reports",
                service_expense_desc: "Detailed financial breakdowns of trip costs, tolls, and operational expenses.",
                footer_tagline: "Driving the future of logistics.",
                footer_quicklinks: "Quick Links",
                footer_privacy: "Privacy Policy",
                footer_terms: "Terms of Service",
                footer_help: "Help Center",
                footer_copyright: "© 2026 FleetFlow Management System. All Rights Reserved."
            },
            ta: {
                nav_home: "முகப்பு",
                nav_about: "நிறுவனம் பற்றி",
                nav_services: "சேவைகள்",
                nav_contact: "தொடர்பு",
                hero_title: "எதிர்காலத்திற்கான ஸ்மார்ட் ஃப்ளீட் மேலாண்மை",
                hero_desc: "நிகழ்நேர கண்காணிப்பு, எரிபொருள் பகுப்பாய்வு மற்றும் ஓட்டுநர் செயல்திறன் கண்காணிப்பு மூலம் உங்கள் தளவாடங்களை மேம்படுத்தவும். போக்குவரத்து மேலாண்மை புரட்சியில் இணையுங்கள்.",
                login_admin: "நிர்வாகி உள்நுழைவு",
                login_manager: "மேலாளர் உள்நுழைவு",
                login_driver: "ஓட்டுநர் உள்நுழைவு",
                about_title: "எங்கள் நிறுவனம் பற்றி",
                about_text1: "ஃப்ளீட்ஃப்ளோ புத்திசாலித்தனமான போக்குவரத்து தீர்வுகளின் முன்னணி வழங்குநராகும். 2026 இல் நிறுவப்பட்டது, நிறுவனங்கள் தங்கள் வாகனங்களை நிர்வகிக்கும் முறையை நாங்கள் புரட்சிகரமாக்கியுள்ளோம்.",
                about_text2: "நாங்கள் தளவாடங்கள் முதல் பொது போக்குவரத்து வரை பல்வேறு துறைகளுக்கு சேவையாற்றுகிறோம். எங்கள் AI-உந்துதல் நுண்ணறிவுகளுடன், எங்கள் வாடிக்கையாளர்கள் ஆண்டுக்கு சராசரியாக 30% சேமிக்கிறார்கள்.",
                stat_vehicles: "வாகனங்கள் கண்காணிக்கப்படுகின்றன",
                stat_support: "நேரலை ஆதரவு",
                stat_cities: "நகரங்கள் உள்ளடக்கியவை",
                stat_satisfaction: "வாடிக்கையாளர் திருப்தி",
                services_title: "எங்கள் பிரீமியம் சேவைகள்",
                service_tracking: "நிகழ்நேர கண்காணிப்பு",
                service_tracking_desc: "விரிவான வழி வரலாற்றைக் கொண்ட உங்கள் லாரிகள், பேருந்துகள் மற்றும் வேன்களின் நேரடி ஜிபிஎஸ் கண்காணிப்பு.",
                service_fuel: "எரிபொருள் பகுப்பாய்வு",
                service_fuel_desc: "வீணாக்குதலும் திருட்டும் தடுக்க எரிபொருள் நுகர்வு பற்றிய AI-இயங்கும் பகுப்பாய்வு.",
                service_maint: "பராமரிப்பு எச்சரிக்கைகள்",
                service_maint_desc: "சேவை, எண்ணெய் மாற்றம் மற்றும் டயர் சுழற்சிகளுக்கான தானியங்கி நினைவூட்டல்கள்.",
                service_expense: "செலவு அறிக்கைகள்",
                service_expense_desc: "பயண செலவுகள், சுங்கச்சாவடிகள் மற்றும் செயல்பாட்டு செலவுகளின் விரிவான நிதி முறிவுகள்.",
                footer_tagline: "தளவாடங்களின் எதிர்காலத்தை இயக்குகிறது.",
                footer_quicklinks: "விரைவு இணைப்புகள்",
                footer_privacy: "தனியுரிமைக் கொள்கை",
                footer_terms: "சேவை விதிமுறைகள்",
                footer_help: "உதவி மையம்",
                footer_copyright: "© 2026 ஃப்ளீட்ஃப்ளோ மேலாண்மை அமைப்பு. அனைத்து உரிமைகளும் பாதுகாக்கப்பட்டவை."
            },
            hi: {
                nav_home: "होम",
                nav_about: "कंपनी के बारे में",
                nav_services: "सेवाएं",
                nav_contact: "संपर्क",
                hero_title: "भविष्य के लिए स्मार्ट फ्लीट प्रबंधन",
                hero_desc: "रियल-टाइम ट्रैकिंग, ईंधन विश्लेषण और ड्राइवर प्रदर्शन निगरानी के साथ अपने लॉजिस्टिक्स को ऑप्टिमाइज़ करें। परिवहन प्रबंधन में क्रांति में शामिल हों।",
                login_admin: "एडमिन लॉगिन",
                login_manager: "मैनेजर लॉगिन",
                login_driver: "ड्राइवर लॉगिन",
                about_title: "हमारी कंपनी के बारे में",
                about_text1: "फ़्लीटफ़्लो बुद्धिमान परिवहन समाधानों का एक अग्रणी प्रदाता है। 2026 में स्थापित, हमने कंपनियों द्वारा अपनी वाहनों को प्रबंधित करने के तरीके में क्रांति ला दी है।",
                about_text2: "हम लॉजिस्टिक्स और डिलीवरी से लेकर सार्वजनिक परिवहन तक के उद्योगों की सेवा करते हैं। हमारी एआई-संचालित अंतर्दृष्टि के साथ, हमारे ग्राहक सालाना औसतन 30% बचाते हैं।",
                stat_vehicles: "वाहन ट्रैक किए गए",
                stat_support: "लाइव सहायता",
                stat_cities: "शहर शामिल",
                stat_satisfaction: "ग्राहक संतुष्टि",
                services_title: "हमारी प्रीमियम सेवाएं",
                service_tracking: "रियल-टाइम ट्रैकिंग",
                service_tracking_desc: "विस्तृत मार्ग इतिहास के साथ अपने ट्रकों, बसों और वैन की लाइव जीपीएस निगरानी।",
                service_fuel: "ईंधन विश्लेषण",
                service_fuel_desc: "बर्बादी और चोरी को रोकने के लिए ईंधन की खपत का एआई-संचालित विश्लेषण।",
                service_maint: "रखरखाव अलर्ट",
                service_maint_desc: "सेवा, तेल परिवर्तन और टायर रोटेशन के लिए स्वचालित अनुस्मारक।",
                service_expense: "व्यय रिपोर्ट",
                service_expense_desc: "यात्रा लागत, टोल और परिचालन व्यय का विस्तृत वित्तीय विवरण।",
                footer_tagline: "लॉजिस्टिक्स के भविष्य को चलाना।",
                footer_quicklinks: "त्वरित लिंक",
                footer_privacy: "गोपनीयता नीति",
                footer_terms: "सेवा की शर्तें",
                footer_help: "सहायता केंद्र",
                footer_copyright: "© 2026 फ़्लीटफ़्लो प्रबंधन प्रणाली। सर्वाधिकार सुरक्षित।"
            },
            te: {
                nav_home: "హోమ్",
                nav_about: "కంపెనీ గురించి",
                nav_services: "సేవలు",
                nav_contact: "సంప్రదించండి",
                hero_title: "స్మార్ట్ ఫ్లీట్ మేనేజ్‌మెంట్",
                hero_desc: "రియల్-టైమ్ ట్రాకింగ్, ఇంధన విశ్లేషణతో మీ లాజిస్టిక్స్‌ను మెరుగుపరచండి.",
                login_admin: "అడ్మిన్ లాగిన్",
                login_manager: "మేనేజర్ లాగిన్",
                login_driver: "డ్రైవర్ లాగిన్",
                about_title: "మా కంపెనీ గురించి",
                about_text1: "FleetFlow స్మార్ట్ ట్రాన్స్‌పోర్ట్ పరిష్కారాలను అందిస్తుంది.",
                about_text2: "లాజిస్టిక్స్ నుండి పబ్లిక్ ట్రాన్స్‌పోర్ట్ వరకు సేవలు అందిస్తున్నాం.",
                stat_vehicles: "ట్రాక్ చేసిన వాహనాలు",
                stat_support: "లైవ్ సపోర్ట్",
                stat_cities: "కవర్ చేసిన నగరాలు",
                stat_satisfaction: "కస్టమర్ సంతృప్తి",
                services_title: "మా ప్రీమియం సేవలు",
                service_tracking: "రియల్-టైమ్ ట్రాకింగ్",
                service_tracking_desc: "ట్రక్కులు, బస్సులు, వాన్లకు ప్రత్యక్ష GPS పర్యవేక్షణ.",
                service_fuel: "ఇంధన విశ్లేషణ",
                service_fuel_desc: "AI ఆధారిత ఇంధన వినియోగ విశ్లేషణ.",
                service_maint: "మెయింటెనెన్స్ అలర్ట్స్",
                service_maint_desc: "సర్వీస్ మరియు మెయింటెనెన్స్ రిమైండర్లు.",
                service_expense: "ఖర్చుల నివేదికలు",
                service_expense_desc: "ట్రిప్ ఖర్చుల పూర్తి వివరాలు.",
                footer_tagline: "లాజిస్టిక్స్ భవిష్యత్తును ముందుకు నడుపుతున్నాం.",
                footer_quicklinks: "త్వరిత లింకులు",
                footer_privacy: "గోప్యతా విధానం",
                footer_terms: "సేవా నిబంధనలు",
                footer_help: "సహాయ కేంద్రం",
                footer_copyright: "© 2026 FleetFlow. అన్ని హక్కులు రిజర్వ్."
            },
            fr: {
                nav_home: "Accueil",
                nav_about: "À propos",
                nav_services: "Services",
                nav_contact: "Contact",
                hero_title: "Gestion de flotte intelligente pour l'avenir",
                hero_desc: "Optimisez votre logistique avec le suivi en temps réel, l'analyse du carburant et la surveillance des conducteurs.",
                login_admin: "Connexion Admin",
                login_manager: "Connexion Manager",
                login_driver: "Connexion Chauffeur",
                about_title: "À propos de notre entreprise",
                about_text1: "FleetFlow est un leader des solutions de transport intelligentes. Fondée en 2026, nous avons révolutionné la gestion des flottes.",
                about_text2: "Nous servons des industries allant de la logistique aux transports publics. Nos clients économisent en moyenne 30% par an.",
                stat_vehicles: "Véhicules suivis",
                stat_support: "Support en direct",
                stat_cities: "Villes couvertes",
                stat_satisfaction: "Satisfaction client",
                services_title: "Nos services premium",
                service_tracking: "Suivi en temps réel",
                service_tracking_desc: "Suivi GPS en direct de vos camions, bus et camionnettes avec historique détaillé.",
                service_fuel: "Analyse du carburant",
                service_fuel_desc: "Analyse IA de la consommation de carburant pour éviter le gaspillage et le vol.",
                service_maint: "Alertes de maintenance",
                service_maint_desc: "Rappels automatisés pour l'entretien, les vidanges et la rotation des pneus.",
                service_expense: "Rapports de dépenses",
                service_expense_desc: "Répartition financière détaillée des coûts de trajet, péages et dépenses opérationnelles.",
                footer_tagline: "Piloter l'avenir de la logistique.",
                footer_quicklinks: "Liens rapides",
                footer_privacy: "Politique de confidentialité",
                footer_terms: "Conditions d'utilisation",
                footer_help: "Centre d'aide",
                footer_copyright: "© 2026 Système de gestion FleetFlow. Tous droits réservés."
            }
        };

        const langSelectors = document.querySelectorAll('.lang-select'); // Use class to capture if multiple exist or just id 'language-selector'
        const languageSelector = document.getElementById('language-selector');

        if (languageSelector) {
            languageSelector.addEventListener('change', (e) => {
                const lang = e.target.value;
                applyTranslations(lang);
                localStorage.setItem('selected_language', lang);
            });
        }

        function applyTranslations(lang) {
            if (!translations[lang]) return; // Fallback if lang not found
            
            const elements = document.querySelectorAll('[data-i18n]');
            elements.forEach(el => {
                const key = el.getAttribute('data-i18n');
                if (translations[lang][key]) {
                    el.textContent = translations[lang][key];
                }
            });
            
            // Also update placeholders if any
            // (Example: if search input existed)
        }

        const savedLang = localStorage.getItem('selected_language') || 'en';
        if (languageSelector) {
            languageSelector.value = savedLang;
        }
        applyTranslations(savedLang);

    </script>
</body>
</html>
