<div onclick="closeContactOnBackground(event)" id="contactModal"
    class="fixed inset-0 bg-black/50 hidden flex items-center justify-center z-50">

    <div onclick="event.stopPropagation()"
        class="bg-[#1e1e52] rounded-2xl shadow-2xl w-full max-w-4xl p-8 relative grid grid-cols-1 md:grid-cols-2 gap-8 text-white">

        <!-- LEFT  -->
        <div class="space-y-3">
            <h1
                class=" text-3xl no-underline font-bold bg-gradient-to-r from-[#3dc1fc] to-[#ffb400] bg-clip-text text-transparent transition duration-300 hover:from-[#ffb400] hover:to-white">
                Get In Touch
            </h1>

            <p class=" py-2 text-white">You can connect with me via social media or email. <br /> I'd love to hear from you!</p>

            <div class="space-y-3">
                <p><strong>📞 Phone:</strong> <span class="text-[#3dc1fc]">09701275112</span></p>
                <p><strong>📧 Email:</strong> <a href="mailto:jakemayores05@gmail.com"
                        class="text-[#00a1e6] hover:underline">jakemayores05@gmail.com</a></p>
            </div>

            <!-- SOCIAL LINKS -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-lg font-semibold">

                <a href="https://www.linkedin.com/in/jake-mayores-81677530a" target="_blank"
                    class="flex items-center gap-3 p-4 rounded-xl bg-gradient-to-r from-[#0077b5] to-[#00a1e6] text-white shadow-md hover:scale-105 transition transform">
                    <i class="fab fa-linkedin text-2xl"></i>
                    <span>Connect on LinkedIn</span>
                </a>

                <a href="https://twitter.com/your-profile" target="_blank"
                    class="flex items-center gap-3 p-4 rounded-xl bg-gradient-to-r from-black to-gray-700 text-white shadow-md hover:scale-105 transition transform">
                    <i class="fab fa-x-twitter text-2xl"></i>
                    <span>Follow on X</span>
                </a>

                <a href="https://www.instagram.com/mayoresjake" target="_blank"
                    class="flex items-center gap-3 p-4 rounded-xl bg-gradient-to-r from-[#f58529] via-[#dd2a7b] to-[#8134af] text-white shadow-md hover:scale-105 transition transform">
                    <i class="fab fa-instagram text-2xl"></i>
                    <span>Follow on Instagram</span>
                </a>

                <a href="https://www.facebook.com/jakejmayores" target="_blank"
                    class="flex items-center gap-3 p-4 rounded-xl bg-gradient-to-r from-[#1877f2] to-[#3dc1fc] text-white shadow-md hover:scale-105 transition transform">
                    <i class="fab fa-facebook text-2xl"></i>
                    <span>Follow on Facebook</span>
                </a>
            </div>
        </div>

        <!-- RIGHT  -->
         <div class="bg-gradient-to-br from-[#2a2a7a] to-[#1e1e52] rounded-xl p-6 shadow-lg text-white">
            <h2 class="text-2xl font-bold mb-4">Send a Message</h2>
            <form class="space-y-4">
                <input type="text" placeholder="Your Name" 
                    class="w-full border border-gray-600 bg-transparent text-white rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#00a1e6]" required>

                <input type="email" placeholder="Your Email" 
                    class="w-full border border-gray-600 bg-transparent text-white rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#00a1e6]" required>

                <textarea placeholder="Your Message" rows="4" 
                    class="w-full border border-gray-600 bg-transparent text-white rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#3dc1fc] resize-none" required></textarea>

                <button type="submit" 
                    class="w-full bg-gradient-to-r from-[#00a1e6] to-[#3dc1fc] text-white font-semibold rounded-lg py-2 hover:from-[#3dc1fc] hover:to-[#00a1e6] transition">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</div>
