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
        <div class="max-w-7xl w-full flex flex-row items-center justify-between items-left px-6">
            <a href="#"
                class="py-4 text-5xl no-underline font-bold bg-gradient-to-r from-[#3dc1fc] to-[#ffb400] bg-clip-text text-transparent transition duration-300 hover:from-[#ffb400] hover:to-white">
                DevFolio
            </a>
            <nav class="flex gap-5 text-[18px] flex-row text-center">
                <a href="#"
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
    <main class="flex flex-col items-center justify-center w-full max-w-6xl w-full">
        <?php include 'contact.php'; ?>
        <!-- Home -->
        <section class="relative text-left flex flex-wrap items-center justify-around h-screen w-full">
            <div>
                <p class="text-2xl py-2 text-[#7695a3]">Hello, I'm</p>
                <a href="about.php" class="relative inline-block group">
                    <!-- Hover text -->
                    <span class="absolute -top-6 right-0 text-lg font-medium text-gray-300 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                        Click to know more
                    </span>

                    <h1 class="text-6xl font-bold text-[#c5eafa]">
                        Jake Mayores
                    </h1>
                </a>

                <!-- Typing Animation -->
                <h2 class="text-4xl text-[#7cd4ff] font-bold py-2 ">
                    <span id="typingText"></span><span class=" border-r-4 border-blue-500 animate-blink"></span>
                </h2>

                <div class="flex my-5 my-4 gap-4 text-3xl text-[#699db5]">
                    <a href="https://github.com/Mayores-04" target="_blank"><i class="fab fa-github hover:text-white"></i></a>
                    <a href="https://www.linkedin.com/in/jake-mayores-81677530a/" target="_blank"><i class="fab fa-linkedin hover:text-white"></i></a>
                    <a href="mailto:jakemayores05@gmail.com" target="_blank"><i class="fas fa-envelope hover:text-white"></i></a>
                    <a href="https://www.facebook.com/jakejmayores" target="_blank">
                        <i class="fab fa-facebook hover:text-white transition duration-300"></i>
                    </a>
                    <a href="https://www.instagram.com/mayoresjake/" target="_blank">
                        <i class="fab fa-instagram hover:text-white transition duration-300"></i>
                    </a>
                </div>

                <div class="flex gap-3">
                    <a href=""
                        class="text-2xl font-bold px-4 py-2 cursor-pointer rounded-lg border-2 border-[#7cd4ff] hover:border-[#ffb400] text-[#7cd4ff] transition duration-300 hover:bg-[#ffb400] hover:text-white">
                        Hire me
                    </a>
                    <button onclick="toggleContactModal()"
                        class="text-2xl font-bold px-4 py-2 cursor-pointer rounded-lg bg-[#ffb400] text-white border-2 border-[#ffb400] hover:border-[#7cd4ff] transition duration-300 hover:bg-transparent hover:text-[#7cd4ff]">
                        Contact me
                    </button>
                </div>
            </div>

            <div class="flex items-center justify-center ">
                <img
                    src="https://mayores-jake.infinityfreeapp.com/images/profile.png"
                    width="500"
                    alt="profile picture"
                    class="border-2 border-[#4f85a2] rounded-[60px] transition duration-500 hover:shadow-[0_0_25px_rgba(0,255,255,0.6)] hover:scale-105" />
            </div>


            <p class="absolute bottom-2 text-white text-lg flex flex-col items-center">
                Scroll to discover
                <a href="#project"><i class="fas fa-chevron-down text-xl"></i></a>
            </p>

        </section>

        <!-- Project -->
        <section id="project" class="flex flex-col items-center w-full gap-10 py-20">
            <?php
            $projects = [
                [
                    "Title" => "Portfolio",
                    "link"  => "https://jakemayores.vercel.app",
                    "image" => "https://jakemayores.vercel.app/images/Portfolio.PNG",
                    "desc"  => "Explore my personal portfolio, showcasing my journey as a computer science student and aspiring software developer."
                ],
                [
                    "Title" => "EmailSender",
                    "link"  => "https://jm-email-sender.vercel.app",
                    "image" => "https://jakemayores.vercel.app/images/EmailSender.png",
                    "desc"  => "Email Sender is a simple and powerful web app that lets you quickly create, customize, and send beautiful emails with ease. This Web Application is still developing"
                ],
                [
                    "Title" => "GoCarExpress",
                    "link"  => "https://go-car-express.vercel.app",
                    "image" => "https://jakemayores.vercel.app/images/GoCarExpress.png",
                    "desc"  => "GoCar Express: to provide an outstanding car rental experience for individuals who appreciate quality, comfort, and convenience. With our one high-quality vehicle, we strive to ensure that every trip you take, whether it's a business meeting, a road trip, or a special occasion, is comfortable, safe, and enjoyable. Remember that this website is fully functional with Admin and have a client"
                ],
            ];
            ?>

            <?php foreach ($projects as $index => $project): ?>
                <div class="flex flex-col md:flex-row <?php echo $index % 2 === 0 ? '' : 'md:flex-row-reverse'; ?> items-center gap-10 max-w-5xl w-full">
                    <!-- Project Image -->
                    <a href="<?php echo $project['link']; ?>" target="_blank" class="relative group w-full md:w-1/2 overflow-hidden rounded-lg shadow-lg">
                        <img src="<?php echo $project['image']; ?>"
                            alt="<?php echo $project['Title']; ?>"
                            class="w-full h-70 object-cover transition-transform duration-300 group-hover:scale-105" />
                        <div class="absolute inset-0 flex items-center justify-center bg-black/80 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span class="text-white text-xl font-bold">Open <?php echo $project['Title']; ?></span>
                        </div>
                    </a>

                    <!-- Info -->
                    <div class="flex flex-col w-full md:w-1/2">
                        <h1 class="text-white text-3xl font-semibold mb-2"><?php echo $project['Title']; ?></h3>
                            <p class="text-[#7e9ba8] text-md"><?php echo $project['desc']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>

            <a href="projects.php"
                class="text-2xl font-bold px-4 py-2 cursor-pointer rounded-lg border-2 border-[#7cd4ff] hover:border-[#ffb400] text-[#7cd4ff] transition duration-300 hover:bg-[#ffb400] hover:text-white">
                View more
            </a>
        </section>

        <!-- Skills -->
        <section class="h-screen flex flex-col justify-center w-full items-center">
            <div class="grid grid-cols-2 place-items-center gap-10 max-w-5xl">
                <div>
                    <h1 class="text-[#7cd4ff] text-7xl leading-tight">
                        What<br />Skills I have<br />as a Developer
                    </h1>
                </div>
                <div>
                    <img src="https://mayores-jake.infinityfreeapp.com/images/code.jpeg" width="500" class="rounded-lg shadow-lg" />
                </div>
            </div>

            <div class="flex flex-row gap-6 max-w-5xl w-full mt-10">
                <div class="bg-gradient-to-br from-[#1E1E52] to-[#0a3c68] rounded-xl p-6 shadow-lg flex-1 border border-[#2b5c7e]/40">
                    <h1 class="text-[#7cd4ff] text-2xl leading-tight mb-2">
                        Soft Skills
                    </h1>
                    <ul class="list-disc list-inside text-white space-y-2">
                        <li>Team collaboration</li>
                        <li>Critical Thinking</li>
                        <li>Active Listening</li>
                        <li>Adaptability</li>
                    </ul>
                </div>

                <div
                    class="bg-gradient-to-br from-[#1E1E52] to-[#0a3c68] rounded-xl p-6 shadow-lg flex-1 border border-[#2b5c7e]/40">
                    <h1 class="text-[#7cd4ff] text-2xl font-bold mb-4">Web Development</h1>
                    <div class="flex flex-wrap gap-6 text-white text-5xl cursor-pointer">
                        <a href="https://react.dev/" target="_blank" title="React">
                            <i class="devicon-react-original colored"></i>
                        </a>
                        <a href="https://nextjs.org/" target="_blank" title="Next.js">
                            <i class="devicon-nextjs-original-wordmark"></i>
                        </a>
                        <a href="https://developer.mozilla.org/en-US/docs/Web/HTML" target="_blank" title="HTML5">
                            <i class="devicon-html5-plain-wordmark colored"></i>
                        </a>
                        <a href="https://developer.mozilla.org/en-US/docs/Web/CSS" target="_blank" title="CSS3">
                            <i class="devicon-css3-plain-wordmark colored"></i>
                        </a>
                        <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank" title="JavaScript">
                            <i class="devicon-javascript-plain colored"></i>
                        </a>
                        <a href="https://www.typescriptlang.org/" target="_blank" title="TypeScript">
                            <i class="devicon-typescript-plain colored"></i>
                        </a>
                        <a href="https://tailwindcss.com/" target="_blank" title="TailwindCSS">
                            <i class="devicon-tailwindcss-plain colored"></i>
                        </a>
                    </div>
                </div>

                <!-- App Development -->
                <div
                    class="bg-gradient-to-br from-[#1E1E52] to-[#0a3c68] rounded-xl p-6 shadow-lg flex-1 border border-[#2b5c7e]/40">
                    <h1 class="text-[#7cd4ff] text-2xl leading-tight mb-2">App Development</h1>
                    <div class="flex flex-wrap gap-6 text-white text-5xl cursor-pointer">
                        <a href="https://reactnative.dev/" target="_blank" title="React Native">
                            <i class="devicon-react-original colored"></i>
                        </a>
                        <a href="https://expo.dev/" target="_blank" title="Expo">
                            <img
                                src="https://raw.githubusercontent.com/expo/expo/master/.github/resources/banner.png"
                                alt="Expo" title="Expo"
                                class="h-12 w-auto object-contain" />
                        </a>
                        <a href="https://developer.android.com/" target="_blank" title="Android">
                            <i class="devicon-android-plain colored"></i>
                        </a>
                        <a href="https://developer.apple.com/ios/" target="_blank" title="iOS">
                            <i class="devicon-apple-original colored"></i>
                        </a>
                        <a href="https://www.electronjs.org/" target="_blank" title="Electron">
                            <i class="devicon-electron-original colored"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="w-full flex flex-col items-center p-4 text-sm text-gray-400 space-y-2">
        <div>© <span id="year"></span> Jake Mayores. All rights reserved.</div>
        <div class="flex space-x-4">
            <a href="about.php" class="hover:text-[#7cd4ff]">About</a>
            <a href="contact.php" class="hover:text-[#7cd4ff]">Contact</a>
            <a href="#projects" class="hover:text-[#7cd4ff]">Projects</a>
        </div>
    </footer>


    <script>
        document.getElementById("year").textContent = new Date().getFullYear();
    </script>

    <?php $roles = ["Computer Science", "Web/App Developer", "Freelancer"]; ?>

    <script>
        const roles = <?php echo json_encode($roles); ?>;
        const textEl = document.getElementById("typingText");

        let roleIndex = 0;
        let charIndex = 0;
        let isDeleting = false;

        function typeEffect() {
            const current = roles[roleIndex];
            const displayed = current.substring(0, charIndex);
            textEl.innerHTML = displayed + '<span class="inline-block w-[3px] bg-[#7cd4ff] ml-1 animate-blink"></span>';

            if (!isDeleting) {
                if (charIndex < current.length) {
                    charIndex++;
                    setTimeout(typeEffect, 100);
                } else {
                    isDeleting = true;
                    setTimeout(typeEffect, 2000);
                }
            } else {
                if (charIndex > 0) {
                    charIndex--;
                    setTimeout(typeEffect, 50);
                } else {
                    isDeleting = false;
                    roleIndex = (roleIndex + 1) % roles.length;
                    setTimeout(typeEffect, 800);
                }
            }
        }
        typeEffect();

        // document.addEventListener("mousemove", (e) => {
        //     const trail = document.createElement("div");
        //     trail.classList.add("mouse-trail");
        //     trail.style.left = `${e.clientX}px`;
        //     trail.style.top = `${e.clientY}px`;

        //     document.body.appendChild(trail);

        //     setTimeout(() => {
        //         trail.remove();
        //     }, 600);
        // });


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