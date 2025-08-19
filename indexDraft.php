<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <script src="https://kit.fontawesome.com/7e6aea3f19.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/css" href="global.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
</head>

<?php $roles = ["Computer Science", "Web/App Developer", "Freelancer"]; ?>

<body class="animated-shading""> 
    <div class=" mouse-trail">
    </div>
    <marquee
        direction="right"
        scrollamount="10"
        class="fixed top-0 right-0 rotate-[30deg] ">
        <?php foreach ($roles as $role): ?>
            <span class="inline-block mx-8 text-xl font-bold text-white">
                <?php echo $role; ?>
            </span>
        <?php endforeach; ?>
    </marquee>



    <header class="flex justify-center fixed top-0 left-0 z-50 w-full flex-col">
        <div class="max-w-[1200px] w-full flex flex-col  justify-between items-left px-6">
            <a href="#"
                class="py-4 text-5xl no-underline font-bold bg-gradient-to-r from-[#3dc1fc] to-[#ffb400] bg-clip-text text-transparent transition duration-300 hover:from-[#ffb400] hover:to-white">
                DevFolio
            </a>

            <nav class="flex gap-4 text-[18px] flex-col px-6">
                <a href="#" class="text-[#c5eafa] no-underline hover:text-[#00E6DA] transition duration-300">Home</a>
                <a href="about.php" class="text-[#c5eafa] no-underline hover:text-[#00E6DA] transition duration-300">About me</a>
                <a href="projects.php" class="text-[#c5eafa] no-underline hover:text-[#00E6DA] transition duration-300">Projects</a>
                <a href="contact.php" class="text-[#c5eafa] no-underline hover:text-[#00E6DA] transition duration-300">Contact</a>
            </nav>
        </div>
    </header>
    <main class="flex flex-col items-center justify-center w-full max-w-[1200px] w-full">
        <!-- Home -->
        <section class="relative max-w-[1200px] text-left flex flex-wrap items-center justify-around h-screen w-full">
            <div class=" ">
                <p class="text-2xl py-2 text-[#7695a3]">Hello, I'm</p>
                <a class="text-6xl font-bold text-[#c5eafa]">Jake Mayores</a>

                <!-- Typing Animation -->
                <h2 class="text-4xl text-[#7cd4ff] font-bold py-2 h-12">
                    <span id="typingText"></span><span class=" border-r-4 border-blue-500 animate-blink"></span>
                </h2>

                <div class="flex my-5 mt-14 gap-4 text-3xl text-[#699db5]">
                    <a href="#" target="_blank"><i class="fab fa-github hover:text-white"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-linkedin hover:text-white"></i></a>
                    <a href="mailto:jakemayores05@gmail.com" target="_blank"><i class="fas fa-envelope hover:text-white"></i></a>
                    <a href="" target="_blank">
                        <i class="fab fa-facebook hover:text-white transition duration-300"></i>
                    </a>
                    <a href="" target="_blank">
                        <i class="fab fa-instagram hover:text-white transition duration-300"></i>
                    </a>
                </div>

                <div class="flex gap-3">
                    <a href=""
                        class="text-2xl font-bold px-4 py-2 cursor-pointer rounded-lg border-2 border-[#7cd4ff] hover:border-[#ffb400] text-[#7cd4ff] transition duration-300 hover:bg-[#ffb400] hover:text-white">
                        Hire me
                    </a>
                    <a href="about.php"
                        class="text-2xl font-bold px-4 py-2 cursor-pointer rounded-lg bg-[#ffb400] text-white border-2 border-[#ffb400] hover:border-[#7cd4ff] transition duration-300 hover:bg-transparent hover:text-[#7cd4ff]">
                        Learn more
                    </a>
                </div>
            </div>

            <div class="flex items-center justify-center m-3">
                <img
                    src="images/profile.png"
                    width="500"
                    alt="profile picture"
                    class="border-2 border-[#4f85a2] rounded-[80px]" />
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
                    "desc"  => "My personal portfolio website"
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
            ];
            ?>

            <?php foreach ($projects as $index => $project): ?>
                <div class="flex w-full <?php echo $index % 2 === 0 ? 'flex-row' : 'flex-row-reverse'; ?> items-center gap-10 max-w-5xl">
                    <a href="<?php echo $project['link']; ?>" target="_blank">
                        <img src="<?php echo $project['image']; ?>"
                            alt="project overview"
                            width="500"
                            class="rounded-lg shadow-lg transition duration-300 hover:scale-105" />
                    </a>
                    <div class="flex flex-col">
                        <h3 class="text-white text-xl font-semibold mb-2"><?php echo $project['Title'] ?? 'No Title available'; ?></h3>
                        <p class="text-[#7e9ba8] text-sm">
                            <?php echo $project['desc'] ?? 'No description available'; ?>
                        </p>
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
                    <img src="images/code.jpeg" width="500" class="rounded-lg shadow-lg" />
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

        document.addEventListener("mousemove", (e) => {
            const trail = document.createElement("div");
            trail.classList.add("mouse-trail");
            trail.style.left = `${e.clientX}px`;
            trail.style.top = `${e.clientY}px`;

            document.body.appendChild(trail);

            setTimeout(() => {
                trail.remove();
            }, 600);
        });
    </script>
</body>

</html>