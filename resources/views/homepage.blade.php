<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smilepro - Tandarts</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        glass: 'rgba(255, 255, 255, 0.1)', /* Lichte transparante achtergrond */
                        blue: '#007BFF', /* Blauwe achtergrond voor tandarts */
                        glow: '#4ADE80', /* Glow effect groen (fris en gezond) */
                        accent: '#F0F8FF', /* Lichte blauwe accentkleur */
                        gray: '#F5F5F5', /* Lichte grijze achtergrond */
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                },
            },
        };
    </script>
    <style>
        html {
            scroll-behavior: smooth;
        }

        /* Advanced Glassmorphism Effect */
        .glass {
            backdrop-filter: blur(12px);
            background-color: rgba(255, 255, 255, 0.15);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        /* Hover Glow */
        .hover-glow:hover {
            box-shadow: 0px 0px 15px 5px rgba(72, 203, 252, 0.8);
        }
    </style>
</head>
<body class="bg-gray text-black font-sans">
    <!-- Navbar -->
    <header class="fixed w-full bg-blue glass z-50">
        <div class="container mx-auto flex items-center justify-between px-6 py-4">
            <h1 class="text-2xl font-extrabold text-glow">Smilepro Tandarts</h1>
            <nav class="hidden md:flex space-x-8">
                <a href="#" class="hover:text-accent hover-glow">Home</a>
                <a href="#services" class="hover:text-accent hover-glow">Diensten</a>
                <a href="#about" class="hover:text-accent hover-glow">Over Ons</a>
                <a href="#contact" class="hover:text-accent hover-glow">Contact</a>
            </nav>
            <button id="open-menu" class="text-white text-2xl md:hidden">&#9776;</button>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative h-screen flex items-center justify-center">
        <div class="absolute inset-0 bg-gradient-to-br from-accent via-glass to-glow opacity-25"></div>
        <div class="container mx-auto text-center z-10">
            <h2 class="text-6xl font-bold mb-6 tracking-wide text-white">Smilepro Tandartspraktijk</h2>
            <p class="text-xl text-gray-300 mb-8">
                Zorg voor een stralende glimlach met onze professionele tandheelkundige zorg.
            </p>
            <a href="#services" class="bg-accent text-blue py-3 px-8 rounded-full text-lg font-semibold hover:scale-105 transition-transform">
                Ontdek Onze Diensten
            </a>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center mb-12 text-glow">Onze Tandheelkundige Diensten</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="glass p-8 rounded-lg text-center hover-glow">
                    <h3 class="text-2xl font-semibold mb-4 text-accent">Preventieve Zorg</h3>
                    <p class="text-gray-300">
                        Voorkom tandproblemen met regelmatige controles en reinigingen.
                    </p>
                </div>
                <!-- Service 2 -->
                <div class="glass p-8 rounded-lg text-center hover-glow">
                    <h3 class="text-2xl font-semibold mb-4 text-accent">Tandheelkundige Behandelingen</h3>
                    <p class="text-gray-300">
                        Van vullingen tot wortelkanaalbehandelingen, wij zorgen voor je glimlach.
                    </p>
                </div>
                <!-- Service 3 -->
                <div class="glass p-8 rounded-lg text-center hover-glow">
                    <h3 class="text-2xl font-semibold mb-4 text-accent">Cosmetische Tandheelkunde</h3>
                    <p class="text-gray-300">
                        Breng je glimlach naar een hoger niveau met esthetische behandelingen.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-glass relative">
        <div class="absolute inset-0 bg-gradient-to-r from-blue via-accent to-glow opacity-30"></div>
        <div class="container mx-auto text-center relative">
            <h2 class="text-4xl font-bold mb-6 text-glow">Over Ons</h2>
            <p class="text-lg max-w-3xl mx-auto text-gray-300">
                Wij zijn een team van ervaren tandartsen die zich inzetten voor de gezondheid en het welzijn van je glimlach. Met geavanceerde technologie en zorg bieden we de beste behandelingen.
            </p>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gradient-to-bl from-glow via-accent to-blue text-center">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold mb-6">Neem Contact op</h2>
            <p class="text-lg text-gray-200 mb-8">
                Heb je vragen of wil je een afspraak maken? Wij helpen je graag verder!
            </p>
            <a href="mailto:info@example.com" class="bg-white text-blue py-3 px-8 rounded-full text-lg font-semibold hover:scale-105 transition-transform">
                Email Ons
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue py-6 text-center">
        <p>&copy; 2025 Smilepro Tandartspraktijk. Alle rechten voorbehouden.</p>
    </footer>

    <!-- JavaScript -->
    <script>
        const openMenu = document.getElementById('open-menu');
        const sideMenu = document.getElementById('side-menu');

        openMenu.addEventListener('click', () => {
            alert('Side menu komt hier binnenkort!');
        });
    </script>
</body>
</html>
