<!-- Header -->
<header class="border-b border-gray-200 sticky top-0 z-50 bg-white/95 backdrop-blur-sm">
    <div class="container mx-auto px-5">
        <div class="flex justify-between items-center py-4 flex-wrap gap-4">
            <a href="#" class="text-2xl font-bold text-primary-600">VoteNow</a>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex gap-8">
                <a href="#" class="text-slate-800 font-medium hover:text-primary-600 transition">Home</a>
                <a href="contests.html" class="text-slate-800 font-medium hover:text-primary-600 transition">Contests</a>
                <a href="about.html" class="text-slate-800 font-medium hover:text-primary-600 transition">About</a>
                <a href="contact.html" class="text-slate-800 font-medium hover:text-primary-600 transition">Contact</a>
            </nav>

            <!-- Desktop Auth Buttons -->
            <div class="hidden md:flex items-center gap-4">
                <a href="#"
                    class="px-6 py-2 border border-primary-600 text-primary-600 font-semibold rounded-md hover:bg-primary-50 transition">Login</a>
                <a href="#"
                    class="px-6 py-2 bg-primary-600 text-white font-semibold rounded-md hover:bg-primary-700 transition">Register</a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="menuBtn" class="p-2 rounded-md hover:bg-gray-200 dark:hover:bg-gray-800">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <nav id="mobileMenu" class="hidden md:hidden pb-4 border-t border-gray-200 pt-4 space-y-3">
            <a href="#" class="block text-slate-800 font-medium hover:text-primary-600 transition">Home</a>
            <a href="contests.html"
                class="block text-slate-800 font-medium hover:text-primary-600 transition">Contests</a>
            <a href="about.html" class="block text-slate-800 font-medium hover:text-primary-600 transition">About</a>
            <a href="contact.html"
                class="block text-slate-800 font-medium hover:text-primary-600 transition">Contact</a>
            <div class="flex gap-3 pt-3">
                <a href="#"
                    class="flex-1 px-4 py-2 border border-primary-600 text-primary-600 font-semibold rounded-md hover:bg-primary-50 transition text-center">Login</a>
                <a href="#"
                    class="flex-1 px-4 py-2 bg-primary-600 text-white font-semibold rounded-md hover:bg-primary-700 transition text-center">Register</a>
            </div>
        </nav>
    </div>
</header>
