<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <script src="https://kit.fontawesome.com/7e6aea3f19.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        min-height: screen;
        margin: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        /* background-image: linear-gradient(to bottom right, #061327, #394a72); */
    }

    ss html {
        scroll-behavior: smooth;
    }

    /* Background-effect */
    .animated-shading {
        /* background-image: linear-gradient(to bottom right, #1e1e52, #00a1e6, #0000ff ); */
        background-image: linear-gradient(to bottom right, #061327, #394a72, #0000ff);
        background-size: 300% 100%;
        animation: shade-shift 5s linear infinite alternate;
    }

    @keyframes shade-shift {
        0% {
            background-position: 0% 0%;
        }

        100% {
            background-position: 100% 0%;
        }
    }

    /* Type effect*/
    @keyframes blink {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0;
        }
    }

    .animate-blink {
        animation: blink 1.5s linear infinite;
    }

    /* Mouse Effect*/
    /* .mouse-trail {
        position: fixed;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: #7cd4ff;
        pointer-events: none;
        transform: translate(-50%, -50%);
        animation: fadeout 0.6s linear forwards;
        z-index: 9999;
    } */

    canvas {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 9999;
    }

    @keyframes fadeout {
        from {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1);
        }

        to {
            opacity: 0;
            transform: translate(-50%, -50%) scale(0.3);
        }
    }


    .flip-scene {
        perspective: 1200px;
    }

    .flip-card {
        position: relative;
        width: 500px;
        height: 500px;
        transform-style: preserve-3d;
        transition: transform 600ms cubic-bezier(.2, .8, .2, 1);
        border-radius: 60px;
    }

    .flip-card.is-flipped {
        transform: rotateY(180deg);
    }

    .flip-face {
        position: absolute;
        inset: 0;
        backface-visibility: hidden;
        overflow: hidden;
        border-radius: 60px;
        border: 2px solid #4f85a2;
        transition: box-shadow 200ms, transform 200ms;
    }

    .flip-back {
        transform: rotateY(180deg);
    }

    .flip-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }
</style>

<body class="animated-shading">


    <canvas id="bubbleCanvas"></canvas>

    <script>
        function bubbleCursor(options) {
            let canvas = document.getElementById("bubbleCanvas");
            let context = canvas.getContext("2d");
            let width = (canvas.width = window.innerWidth);
            let height = (canvas.height = window.innerHeight);
            let particles = [];
            let cursor = {
                x: width / 2,
                y: height / 2
            };
            let fillColor = "#e6f1f7";
            let strokeColor = "#3a92c5";

            window.addEventListener("resize", () => {
                width = canvas.width = window.innerWidth;
                height = canvas.height = window.innerHeight;
            });

            window.addEventListener("mousemove", (e) => {
                cursor.x = e.clientX;
                cursor.y = e.clientY;
                addParticle(cursor.x, cursor.y);
            });

            function addParticle(x, y) {
                particles.push(new Particle(x, y));
            }

            function Particle(x, y) {
                this.life = 100;
                this.x = x;
                this.y = y;
                this.vx = (Math.random() - 0.5) * 1.5;
                this.vy = (Math.random() - 1) * 1.5;
                this.update = function() {
                    this.x += this.vx;
                    this.y += this.vy;
                    this.life--;
                    let scale = (100 - this.life) / 100;
                    context.fillStyle = fillColor;
                    context.strokeStyle = strokeColor;
                    context.beginPath();
                    context.arc(this.x, this.y, 6 * scale, 0, Math.PI * 2);
                    context.fill();
                    context.stroke();
                }
            }

            function animate() {
                context.clearRect(0, 0, width, height);
                particles.forEach((p, i) => {
                    p.update();
                    if (p.life <= 0) particles.splice(i, 1);
                });
                requestAnimationFrame(animate);
            }
            animate();
        }

        bubbleCursor();
    </script>
    <header class="flex justify-center fixed top-0 left-0 z-50 w-full flex-row">
        <div class="max-w-[1200px] w-full flex flex-row items-center justify-between items-left px-6">
            <a href="index.php"
                class="py-4 text-5xl no-underline font-bold bg-gradient-to-r from-[#3dc1fc] to-[#ffb400] bg-clip-text text-transparent transition duration-300 hover:from-[#ffb400] hover:to-white">
                DevFolio
            </a>
            <nav class="flex gap-5 text-[18px] flex-row text-center">
                <a href="index.php"
                    class="relative px-2 text-[#c5eafa] no-underline hover:text-[#00E6DA] transition duration-300
          after:content-[''] after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 
          after:bg-[#c5eafa] after:transition-all after:duration-300 hover:after:w-full">
                    Home
                </a>
                <a href="about.php" class="relative px-2 text-[#c5eafa] no-underline hover:text-[#00E6DA] transition duration-300
          after:content-[''] after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 
          after:bg-[#c5eafa] after:transition-all after:duration-300 hover:after:w-full">About me</a>
                <button onclick="toggleContactModal()" class="relative px-2 text-[#c5eafa] no-underline hover:text-[#00E6DA] transition duration-300
          after:content-[''] after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 
          after:bg-[#c5eafa] after:transition-all after:duration-300 hover:after:w-full">Contacts</button>
            </nav>
        </div>
    </header>
    <?php include 'contact.php'; ?>
    <section class="flex flex-col items-center w-full gap-10 py-20 max-w-7xl">
        <?php
        $projects = [
            [
                "Title" => "Portfolio",
                "link"  => "https://jakemayores.vercel.app",
                "image" => "https://jakemayores.vercel.app/images/Portfolio.PNG",
                "desc"  => "My personal portfolio website showcasing my skills, projects, and experience as a computer science student and aspiring developer."
            ],
            [
                "Title" => "EmailSender",
                "link"  => "https://jm-email-sender.vercel.app",
                "image" => "https://jakemayores.vercel.app/images/EmailSender.png",
                "desc"  => "Email sending app built with PHP"
            ],
            [
                "Title" => "GoCarExpress",
                "link"  => "https://go-car-express.vercel.app",
                "image" => "https://jakemayores.vercel.app/images/GoCarExpress.png",
                "desc"  => "Car rental booking platform"
            ],
            [
                "Title" => "ParkHubPic",
                "link"  => "https://park-hub-website.vercel.app",
                "image" => "https://jakemayores.vercel.app/images/ParkHubPic.png",
                "desc"  => "Parking management system"
            ],
            [
                "Title" => "MovieMunch",
                "link"  => "https://github.com/Mayores-04/Movie_reservation",
                "image" => "https://jakemayores.vercel.app/images/MovieMunch.PNG",
                "desc"  => "Movie search & watchlist app"
            ]
        ];
        ?>

        <?php foreach ($projects as $index => $project): ?>
            <div class="flex flex-col md:flex-row items-center gap-10 max-w-5xl w-full">
                <!-- Project Image -->
                <a href="<?php echo $project['link']; ?>" target="_blank" class="relative group w-full md:w-1/2 overflow-hidden rounded-lg shadow-lg">
                    <img src="<?php echo $project['image']; ?>"
                        alt="<?php echo $project['Title']; ?>"
                        class="w-full h-70 md:h-72 object-cover transition-transform duration-300 group-hover:scale-105 rounded-lg" />
                    <div class="absolute inset-0 flex items-center justify-center bg-black/80 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <span class="text-white text-xl font-bold">Open <?php echo $project['Title']; ?></span>
                    </div>
                </a>

                <!-- Project Info -->
                <div class="flex flex-col w-full md:w-1/2">
                    <h3 class="text-white text-xl font-semibold mb-2"><?php echo $project['Title'] ?? 'No Title available'; ?></h3>
                    <p class="text-[#7e9ba8] text-sm"><?php echo $project['desc'] ?? 'No description available'; ?></p>
                </div>
            </div>
        <?php endforeach; ?>

    </section>

    <script>
        function toggleContactModal() {
            const modal = document.getElementById("contactModal");
            modal.classList.toggle("hidden");
        }

        function closeContactOnBackground(e) {
            const modal = document.getElementById("contactModal");
            if (e.target.id === "contactModal") {
                modal.classList.add("hidden");
            }
        }
    </script>
</body>

</html>