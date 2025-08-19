<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <script src="https://kit.fontawesome.com/7e6aea3f19.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/css" href="global.css">
</head>

<body>
    <menu class="flex justify-center fixed top-0 left-0 z-50 flex-row ">
        <div class="max-w-[1200px] w-full flex flex-col justify-between items-left px-6">
            <a href="index.php"
                class="py-4 text-5xl no-underline font-bold bg-gradient-to-r from-[#3dc1fc] to-[#ffb400] bg-clip-text text-transparent transition duration-300 hover:from-[#ffb400] hover:to-white">
                portfolio
            </a>
            <nav class="flex gap-5 text-[18px] flex-col text-left">
                <a href="index.php"
                    class="relative px-2 text-[#c5eafa] no-underline hover:text-[#00E6DA] transition duration-300
          after:content-[''] after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 
          after:bg-[#c5eafa] after:transition-all after:duration-300 hover:after:w-[50%]">
                    Home
                </a>
                <a href="about.php" class="relative px-2 text-[#c5eafa] no-underline hover:text-[#00E6DA] transition duration-300
          after:content-[''] after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 
          after:bg-[#c5eafa] after:transition-all after:duration-300 hover:after:w-[50%]">About me</a>
                <a href="contact.php" class="relative px-2 text-[#c5eafa] no-underline hover:text-[#00E6DA] transition duration-300
          after:content-[''] after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 
          after:bg-[#c5eafa] after:transition-all after:duration-300 hover:after:w-[50%]">Contact</a>
            </nav>
        </div>
    </menu>
    <section class="flex flex-col items-center w-full gap-10 py-20">
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
</body>

</html>