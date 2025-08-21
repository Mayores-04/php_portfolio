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


<body>
    <menu class="flex justify-center fixed top-0 left-0 z-50 flex-row ">
        <div class="max-w-[1200px] w-full flex flex-col justify-between items-left px-6">
            <a href=""
                class="py-4 text-5xl no-underline font-bold bg-gradient-to-r from-[#3dc1fc] to-[#ffb400] bg-clip-text text-transparent transition duration-300 hover:from-[#ffb400] hover:to-white">
                portfolio
            </a>

            <nav class="flex gap-2 text-[18px] flex-col text-left px-5">
                <a href="index.php" class="text-[#699db5] no-underline hover:text-white transition duration-300">Home</a>
                <a href="projects.php" class="text-[#699db5] no-underline hover:text-white transition duration-300">Projects</a>
                <a href="#skillsPage" class="relative px-2 text-[#c5eafa] no-underline hover:text-[#00E6DA] transition duration-300
          after:content-[''] after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 
          after:bg-[#c5eafa] after:transition-all after:duration-300 hover:after:w-full">Skills</a>
                <a href="contact.php" class="text-[#699db5] no-underline hover:text-white transition duration-300">Contact</a>
            </nav>
        </div>
    </menu>
    <div class="bg-green-800 h-screen "></div>
</body>

</html>