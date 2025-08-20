<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <title>Portfolio</title>
    <script src="https://kit.fontawesome.com/7e6aea3f19.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
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
                <a href="projects.php" class="relative px-2 text-[#c5eafa] no-underline hover:text-[#00E6DA] transition duration-300
          after:content-[''] after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 
          after:bg-[#c5eafa] after:transition-all after:duration-300 hover:after:w-full">Projects</a>
                <button onclick="toggleContactModal()" class="relative px-2 text-[#c5eafa] no-underline hover:text-[#00E6DA] transition duration-300
          after:content-[''] after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 
          after:bg-[#c5eafa] after:transition-all after:duration-300 hover:after:w-full">Contacts</button>
            </nav>
        </div>
    </header>

    <?php include 'contact.php'; ?>
    <section  class="flex flex-col items-center w-full gap-10 py-20 h-screen max-w-5xl">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
            <!-- Left Side: Text -->
            <div>
                <h2 class="text-3xl font-bold text-white mb-4">About Me</h2>

                <!-- Buttons -->
                <div class="flex space-x-4 mb-6">
                    <a href="cv.pdf" download
                        class="px-5 py-2 rounded-full bg-gray-800 text-white font-medium shadow hover:bg-gray-700 transition">
                        Download CV
                    </a>
                    <button
                        class="px-5 py-2 rounded-full bg-blue-100 text-blue-700 font-medium shadow hover:bg-blue-200 transition">
                        Achievements
                    </button>
                </div>

                <!-- Quote -->
                <p class="italic text-gray-400 mb-4">
                    "I am a 2nd-year college computer science student specializing in Front-end web development."
                </p>

                <!-- Description -->
                <p class="text-gray-300 leading-relaxed mb-6">
                    I'm a passionate Front-End Web Developer with a strong Computer Science background. Skilled in HTML, CSS,
                    JavaScript, C# and familiar with ReactJS, NodeJS, and TailwindCSS, I have gained valuable experience through
                    freelance web development and as a front-end web developer in my school organization. Currently, I am exploring
                    NextJS development to create dynamic and interactive web applications.
                </p>

                <!-- Languages and Tools -->
                <div class="mb-4">
                    <h3 class="font-semibold text-gray-200 mb-2">Languages and Tools:</h3>
                    <div class="flex flex-wrap gap-4 text-4xl">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" class="h-10" />
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" class="h-10" />
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" class="h-10" />
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/csharp/csharp-original.svg" class="h-10" />
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original.svg" class="h-10" />
                    </div>
                </div>

                <!-- Familiarity -->
                <div>
                    <h3 class="font-semibold text-gray-200 mb-2">Familiarity with the following:</h3>
                    <div class="flex flex-wrap gap-4 text-4xl">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" class="h-10" />
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nextjs/nextjs-original.svg" class="h-10 bg-white rounded p-1" />
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mongodb/mongodb-original.svg" class="h-10" />
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" class="h-10" />
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" class="h-10" />
                    </div>
                </div>
            </div>

            <!-- Right Side: Images -->
            <div class="flex flex-col md:flex-row gap-6 justify-center items-center">
                <img src="https://jakemayores.vercel.app/_next/image?url=%2Fimages%2Fjsprom.jpg&w=640&q=75" alt="Prom Photo"
                    class="w-56 h-56 object-cover rounded-2xl shadow-lg" />
                <img src="https://jakemayores.vercel.app/_next/image?url=%2Fimages%2FSHSgradPic.jpg&w=640&q=75" alt="Graduation Photo"
                    class="w-56 h-56 object-cover rounded-2xl shadow-lg" />
            </div>
        </div>
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