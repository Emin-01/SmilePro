<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('/css/mainstyle.css') }}" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmilePro Tandartspraktijk</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar">
    <div class="container">
        <a href="#home" class="logo">

        </a>
        <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            @if (Route::has('login'))
                <nav class="-mx-3 flex flex-1 justify-end">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif


        </ul>
    </div>
</nav>


<header class="header" id="home">
    <!-- Video achtergrond -->
    <video autoplay muted loop class="background-video">
        <source src="../public/video/video1.mp4" type="video/mp4">
        <!-- Fallback text voor browsers die geen video ondersteunen -->
        Je browser ondersteunt geen HTML5-video.
    </video>
    <div class="header-content">
        <div class="container">
            <h1>Welkom bij SmilePro</h1>
            <p>De beste tandheelkundige zorg in de regio</p>
            <a href="#services" class="btn-primary">Onze Diensten</a>
        </div>
    </div>
</header>

<main>
    <section id="services" class="services">
        <h2>Onze diensten</h2>
        <div class="services-container">
            <div class="service-card">
                <h4>Reguliere controles</h4>
                <p>Wij zorgen ervoor dat je gebit gezond blijft met periodieke controles.</p>
            </div>
            <div class="service-card">
                <h4>Gebitsreiniging</h4>
                <p>Professionele reiniging voor een stralende glimlach.</p>
            </div>
            <div class="service-card">
                <h4>Orthodontie</h4>
                <p>Laat je tanden rechtzetten door onze ervaren orthodontisten.</p>
            </div>
            <div class="service-card">
                <h4>Wortelkanaalbehandelingen</h4>
                <p>We behandelen beschadigde tanden met zorg en precisie.</p>
            </div>
        </div>
    </section>
</main>

<footer class="footer">
    <p>&copy; 2024 SmilePro Tandartspraktijk. Alle rechten voorbehouden.</p>
</footer>
</body>
</html>

