<!doctype html>
<html lang="eng">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" Content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Personal Portofolio Website Using HTML & CSS Codehal</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    {{-- <link href='resource/css/style.css' rel='stylesheet'> --}}
    @vite('resources/css/style.css')

</head>

<body>

    <nav class="navbar">
        <a href="#" class="logo">Portofolio.</a>
        <ul>
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Portofolio</a></li>
            <li><a href="#">Service</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>

    <div class="bars-animation">
        <div class="bar" style="--i:6;"></div>
        <div class="bar" style="--i:5;"></div>
        <div class="bar" style="--i:4;"></div>
        <div class="bar" style="--i:3;"></div>
        <div class="bar" style="--i:2;"></div>
        <div class="bar" style="--i:1;"></div>
    </div>

    <section class="home">
        <div class="home-info">
            <h1>Reynaldi Himawan Fanani</h1>
            <h2>I'm a 
                <span style="--i:4;" data-text="Web Developer">Web Developer</span>
                <span style="--i:3;" data-text="Content Creator">Content Creator</span>
                <span style="--i:2;" data-text="Videografer">Videografer</span>
                <span style="--i:1;" data-text="Video Editor">Video Editor</span>
            </h2>
            <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae necessitatibus ab quia voluptatibus
                nesciunt iste id qui maxime quasi distinctio, eveniet exercitationem, porro quam deleniti laudantium
                consequuntur. Sint, dignissimos dicta!</p>
            <div class="btn-sci">
                <a href="#" class="btn">Download CV</a>
                <div class="sci">
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-github'></i></a>
                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-steam'></i></a>
                </div>
            </div>
        </div>

        <div class="home-img">
            <div class="img-box">
                <div class="img-item">
                    {{-- <img src="{{ asset('images/home.png') }}" alt=""> --}}
                    <img src="{{ Vite::asset('resources/images/foto.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

</body>

</html>
