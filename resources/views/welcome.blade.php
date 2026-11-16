
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Government Service Request Management System</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

       
}
       

header {
    background: #ffffff;
    padding: 15px 4%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: nowrap;
    gap: 20px;
    width: 100%;
    border-bottom: 3px solid #176b3a;
    box-shadow: 0 3px 12px rgba(0, 0, 0, 0.05);
}

nav {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
    flex: 1;
    white-space: nowrap;
}
.header-actions {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-left: auto;
    flex-shrink: 0;
    white-space: nowrap;
}

body {
    font-family: Arial, sans-serif;
    background-image: url('/images/backgrounds/background1.jpeg');
    background-size: cover;
    background-position: center;
    background-attachment: scroll;
    background-repeat: no-repeat;
    color: #26352b;
    line-height: 1.6;
    animation: backgroundChange 300s infinite;
}

@keyframes backgroundChange {
    0%, 19.9% {
        background-image: url('/images/backgrounds/background1.jpeg');
    }
    20%, 39.9% {
        background-image: url('/images/backgrounds/background2.jpeg');
    }
    40%, 59.9% {
        background-image: url('/images/backgrounds/background3.jpeg');
    }
    60%, 79.9% {
        background-image: url('/images/backgrounds/background4.jpeg');
    }
    80%, 100% {
        background-image: url('/images/backgrounds/background5.jpeg');
    }
}


     
.logo {
    display: flex;
    align-items: center;
    gap: 10px;
    color: #176b3a;
    font-size: 22px;
    font-weight: bold;
    letter-spacing: 0.3px;
}


.kenya-flag {
    width: 38px;
    height: 26px;
    object-fit: contain;
    display: inline-block;
    vertical-align: middle;
    margin-right: 8px;
}


        nav {
            display: flex;
            flex-wrap: wrap;
            gap: 22px;
        }

        nav a {
            text-decoration: none;
            color: #26352b;
            font-size: 14px;
            font-weight: bold;
        }

        nav a:hover {
            color: #176b3a;
        }
.header-actions {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-left: auto;
    flex-shrink: 0;
    white-space: nowrap;
}

.header-actions a {
    text-decoration: none;
    font-size: 14px;
    font-weight: bold;
    padding: 10px 18px;
    border-radius: 6px;
    transition: 0.2s;
}

.login-link {
    color: #176b3a;
    border: 1px solid #176b3a;
}

.login-link:hover {
    background: #e8f5eb;
}

.register-btn {
    background: #176b3a;
    color: #ffffff;
    border: 1px solid #176b3a;
}

.register-btn:hover {
    background: #145c32;
}

.hero {
    min-height: 440px;
    text-align: center;
    padding: 75px 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-image:
        linear-gradient(
            rgba(255, 255, 255, 0.48),
            rgba(255, 255, 255, 0.48)
        ),
        url('/images/backgrounds/background1.jpeg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    animation: heroBackgroundChange 300s infinite;
}

@keyframes heroBackgroundChange {
    0%, 19.99% {
        background-image:
            linear-gradient(rgba(255,255,255,0.48), rgba(255,255,255,0.48)),
            url('/images/backgrounds/background1.jpeg');
    }
    20%, 39.99% {
        background-image:
            linear-gradient(rgba(255,255,255,0.48), rgba(255,255,255,0.48)),
            url('/images/backgrounds/background2.jpeg');
    }
    40%, 59.99% {
        background-image:
            linear-gradient(rgba(255,255,255,0.48), rgba(255,255,255,0.48)),
            url('/images/backgrounds/background3.jpeg');
    }
    60%, 79.99% {
        background-image:
            linear-gradient(rgba(255,255,255,0.48), rgba(255,255,255,0.48)),
            url('/images/backgrounds/background4.jpeg');
    }
    80%, 100% {
        background-image:
            linear-gradient(rgba(255,255,255,0.48), rgba(255,255,255,0.48)),
            url('/images/backgrounds/background5.jpeg');
    }
}

        .label {
            display: inline-block;
            color: #176b3a;
            background: #d9efdf;
            padding: 7px 15px;
            border-radius: 25px;
            font-size: 13px;
            margin-bottom: 22px;
        }

        h1 {
            font-size: clamp(32px, 5vw, 52px);
            line-height: 1.2;
            color: #145c32;
            max-width: 850px;
            margin: 0 auto 20px;
        }

        .hero p {
            max-width: 650px;
            margin: 0 auto 30px;
            color: #5b6b60;
            font-size: 17px;
        }

        .buttons {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .btn {
            display: inline-block;
            padding: 13px 24px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
        }

        .primary {
            background: #176b3a;
            color: white;
        }

        .secondary {
            border: 1px solid #176b3a;
            color: #176b3a;
            background: white;
        }
.services {
    padding: 80px 7%;
    text-align: center;
    background: #f4f7f5;
}

        .services h2 {
            color: #145c32;
            font-size: 30px;
            margin-bottom: 10px;
        }

        .intro {
            color: #68756b;
            margin-bottom: 35px;
        }
.cards {
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 24px;
    max-width: 1200px;
    margin: 35px auto;
    padding: 0 10px;
}

@media (max-width: 900px) {
    .cards {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 550px) {
    .cards {
        grid-template-columns: 1fr;
    }
}

        .card {
            background: white;
            padding: 28px 22px;
            border: 1px solid #e2e9e2;
            border-radius: 10px;
            text-align: left;
        }

.card img {
    width: 100%;
    height: 170px;
    object-fit: cover;
    display: block;
    border-radius: 8px;
    margin-bottom: 18px;
}

.card {
    background: #ffffff;
    border-radius: 12px;
    overflow: hidden;
    padding-bottom: 20px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    transition: transform 0.25s, box-shadow 0.25s;
    text-align: center;
}

.card img {
    width: 100%;
    height: 180px;
    object-fit: cover;
    display: block;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 22px rgba(0, 0, 0, 0.13);
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 24px rgba(20, 92, 50, 0.12);
}

        .card .icon {
            font-size: 30px;
            margin-bottom: 12px;
        }

        .card h3 {
            color: #176b3a;
            margin-bottom: 8px;
        }

        .card p {
            color: #68756b;
            font-size: 14px;
        }

        
/* Submit Service Request Section */
.service-section {
    padding: 65px 20px;
    background: #eef5ef;
    text-align: center;
}

.service-section h2 {
    color: #145c32;
    font-size: 30px;
    margin-bottom: 10px;
}

.service-section > p {
    color: #68756b;
    margin-bottom: 28px;
}

.service-section form {
    max-width: 650px;
    margin: 0 auto;
    padding: 35px;
    background: #ffffff;
    border: 1px solid #e2e9e2;
    border-radius: 14px;
    box-shadow: 0 8px 25px rgba(20, 92, 50, 0.08);
    text-align: left;
}

.service-section label {
    display: block;
    margin: 18px 0 7px;
    color: #26352b;
    font-weight: bold;
    font-size: 14px;
}

.service-section input,
.service-section select,
.service-section textarea {
    display: block;
    width: 100%;
    padding: 13px 14px;
    border: 1px solid #d4ded5;
    border-radius: 7px;
    background: #fbfdfb;
    color: #26352b;
    font: inherit;
    font-size: 14px;
}

.service-section input:focus,
.service-section select:focus,
.service-section textarea:focus {
    border-color: #176b3a;
    outline: 2px solid #d9efdf;
}

.service-section textarea {
    resize: vertical;
    min-height: 120px;
}

.service-section .btn {
    border: none;
    cursor: pointer;
    margin-top: 22px;
}

.service-section .primary:hover {
    background: #10552d;
}

@media (max-width: 600px) {
    .service-section {
        padding: 45px 16px;
    }

    .service-section form {
        padding: 22px 18px;
    }
}

        footer {
            background: #145c32;
            color: white;
            text-align: center;
            padding: 22px;
            font-size: 14px;
        }

        @media (max-width: 600px) {
            header {
                flex-direction: column;
            }

           nav {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px;
    flex: 1;
    white-space: nowrap;
}

            .hero {
                padding: 60px 20px;
            }
        }
        
/* MODERN GOVERNMENT HEADER */

header {
    position: sticky;
    top: 0;
    z-index: 1000;
    background: #ffffff;
    padding: 16px 5%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 25px;
    border-bottom: 1px solid #e5eee7;
    box-shadow: 0 3px 15px rgba(0,0,0,0.06);
}

.logo {
    color: #145c32;
    font-size: 21px;
    font-weight: 700;
    white-space: nowrap;
}

.kenya-flag {
    font-size: 32px;
}

nav {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 25px;
    flex: 1;
}

nav a {
    color: #34443a;
    text-decoration: none;
    font-size: 14px;
    font-weight: 600;
    transition: 0.3s;
}

nav a:hover {
    color: #168344;
}

.header-actions {
    display: flex;
    align-items: center;
    gap: 12px;
}

.header-actions a {
    text-decoration: none;
    font-size: 14px;
    font-weight: 600;
    padding: 10px 19px;
    border-radius: 6px;
}

.login-link {
    color: #176b3a;
    border: 1px solid #176b3a;
}

.register-btn {
    background: #176b3a;
    color: white;
    border: 1px solid #176b3a;
}

.login-link:hover {
    background: #edf7ef;
}

.register-btn:hover {
    background: #104d2b;
}

@media (max-width: 850px) {
    header {
        flex-wrap: wrap;
        justify-content: center;
    }

    nav {
        order: 3;
        flex-basis: 100%;
        flex-wrap: wrap;
        gap: 15px;
    }
}

/* MODELLIUM-INSPIRED HERO SECTION */

.hero {
    min-height: 520px;
    padding: 90px 9%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    text-align: left;

    background-image:
        linear-gradient(
            90deg,
            rgba(8, 48, 27, 0.88),
            rgba(8, 48, 27, 0.35)
        ),
        url('/images/backgrounds/background1.jpeg');

    background-size: cover;
    background-position: center;
   animation: heroBackgroundChange 300s infinite;
}
.hero .label {
    background: rgba(255, 255, 255, 0.90);
    color: #145c32;
    padding: 10px 20px;
    border-radius: 30px;
    font-weight: bold;
}

.hero h1 {
    color: #145c32;
    font-size: clamp(36px, 5vw, 58px);
    max-width: 750px;
    margin: 0 0 22px;
    line-height: 1.15;
    text-shadow: 0 1px 2px rgba(255,255,255,0.7);
}

.hero p {
    color: #145c32;
    max-width: 620px;
    font-size: 18px;
    line-height: 1.8;
    margin: 0 0 30px;
    font-weight: 600;
    text-shadow: 0 1px 2px rgba(255,255,255,0.7);
}

.hero .buttons {
    justify-content: flex-start;
}

.hero .primary {
    background: #168344;
    padding: 15px 28px;
}

.hero .secondary {
    background: white;
    color: #145c32;
    padding: 15px 28px;
    border: none;
}

@media (max-width: 600px) {
    .hero {
        min-height: 450px;
        padding: 65px 7%;
    }
}

/* MODERN CITIZEN SERVICE CARDS */

.services {
    background: #ffffff;
    padding: 80px 7%;
}

.services h2 {
    font-size: 34px;
    color: #145c32;
    margin-bottom: 12px;
}

.services .intro {
    font-size: 16px;
    color: #68756b;
    margin-bottom: 40px;
}

.cards {
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 24px;
    max-width: 1200px;
    margin: 35px auto 0;
}

.card {
    background: #ffffff;
    border: 1px solid #e8eee9;
    border-radius: 14px;
    overflow: hidden;
    padding: 0 0 25px;
    text-align: left;
    box-shadow: 0 5px 20px rgba(0,0,0,0.06);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card img {
    width: 100%;
    height: 190px;
    object-fit: cover;
    display: block;
    margin: 0 0 18px;
}

.card .icon {
    font-size: 27px;
    margin: 0 20px 8px;
}

.card h3 {
    color: #176b3a;
    font-size: 19px;
    margin: 0 20px 10px;
}

.card p {
    color: #68756b;
    font-size: 14px;
    line-height: 1.7;
    padding: 0 20px;
}

.card:hover {
    transform: translateY(-7px);
    box-shadow: 0 12px 28px rgba(20,92,50,0.13);
}

@media (max-width: 900px) {
    .cards {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 550px) {
    .cards {
        grid-template-columns: 1fr;
    }
}

    </style>
</head>

<body>
   
<header>
<div class="logo">
   <img src="{{ asset('images/backgrounds/kenya-flag.png') }}"
     class="kenya-flag"
     alt="Kenyan Flag">
    <span>Government Services</span>
</div>


    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('home') }}#services">Our Services</a>
        <a href="{{ route('home') }}#submit">Submit Request</a>
        <a href="{{ route('track') }}">Track Request</a>
    </nav>

   
    <div class="header-actions">
        <a href="{{ route('login') }}" class="login-link">Login</a>
        <a href="{{ route('register') }}" class="register-btn">Register</a>
    </div>
</header>


    <main>
        <section class="hero" id="home">
            <span class="label">Serving Citizens Better</span>

            <h1>Government Service Request Management System</h1>

            <p>
                A simple and transparent way for citizens to report community
                issues, request public services, and follow the progress of
                their requests online.
            </p>

            <div class="buttons">
                <a href="#submit" class="btn primary">Submit a Request</a>
                <a href="#track" class="btn secondary">Track Your Request</a>
            </div>
        </section>

       
<section class="services" id="services">
    <h2>Our Services</h2>
    <p class="intro">
        Report an issue in your community and help us improve public services.
    </p>

    <div class="cards">

        <div class="card">
            <img src="https://www.lincolnshire.gov.uk/images/Pothole_repairs.png"
                 alt="Road maintenance">
            <div class="icon">🛣️</div>
            <h3>Road Maintenance</h3>
            <p>Report damaged roads, potholes, and other road-related problems.</p>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?auto=format&fit=crop&w=800&q=80"
                 alt="Waste collection">
            <div class="icon">🗑️</div>
            <h3>Waste Management</h3>
            <p>Report uncollected waste and request support with sanitation.</p>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1548839140-29a749e1cf4d?auto=format&fit=crop&w=800&q=80"
                 alt="Clean water supply">
            <div class="icon">💧</div>
            <h3>Water Supply</h3>
            <p>Report water shortages, leaks, and other water supply issues.</p>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=800&q=80"
                 alt="Public health services">
            <div class="icon">🏥</div>
            <h3>Public Health</h3>
            <p>Raise concerns about public sanitation and community health.</p>
        </div>

    </div>
</section>
        
<section id="submit" class="service-section">
    <h2>Submit a Service Request</h2>
    <p>Fill in the details below to report an issue in your community.</p>

@if ($errors->any())
    <div>
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

@if (session('success'))
    <p>{{ session('success') }}</p>
@endif

    <form action="{{ route('requests.store') }}" method="POST">
    @csrf
        <label for="full_name">Full Name</label>
        <input type="text" id="full_name" name="full_name"
               placeholder="Enter your full name" required>

        <label for="phone">Phone Number</label>
        <input type="tel" id="phone" name="phone"
               placeholder="Enter your phone number" required>

        <label for="service">Select Service</label>
        <select id="service" name="service" required>
            <option value="">Choose a service</option>
            <option value="Road Maintenance">Road Maintenance</option>
            <option value="Waste Management">Waste Management</option>
            <option value="Water Supply">Water Supply</option>
            <option value="Public Health">Public Health</option>
        </select>

        <label for="location">Location of the Issue</label>
        <input type="text" id="location" name="location"
               placeholder="Enter the location" required>

        <label for="description">Describe the Issue</label>
        <textarea id="description" name="description"
                  placeholder="Explain the problem" rows="5"
                  required></textarea>

        <button type="submit" class="btn primary">Send Request</button>
    </form>
</section>
    </main>

    <footer>
        <p>&copy; 2026 Government Service Request Management System</p>
        <p>Improving service delivery through technology.</p>
    </footer>
</body>
</html>
