<!-- resources/views/partials/footer.blade.php -->
<footer class="bg-bluePrimary text-white relative overflow-hidden">
    <!-- Background Logo -->
    <div class="absolute inset-0 z-0 opacity-10">
        <img src="{{ asset('images/logoUnhasWhite.png') }}" alt="Logo Unhas" class="max-h-full">
    </div>

    <!-- Main Footer Content -->
    <div class="container mx-auto relative z-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 items-start px-12 py-12 pb-16">
        <!-- University Info with Logo -->
        <div class="space-y-4 pe-2">
            <div class="flex items-center gap-4">
                <img src="{{ asset('images/logoUnhas.png') }}" alt="Logo" class="w-14">
                <div class="w-px h-16 bg-white"></div>
                <span class="font-bold text-2xl">Hasanuddin <br> University</span>
            </div>
            <p>Jl. Perintis Kemerdekaan Km.10 Tamalanrea, Makassar Sulawesi Selatan Indonesia</p>
            <p>Phone: 0411 542156</p>
            <p>Email: internationalClassUH@gmail.com</p>
        </div>

        <!-- Navigation Links -->
        <nav class="space-y-8 px-8">
            <h3 class="font-semibold text-lg">Pages</h3>
            <a href="{{ route('about.index') }}" class="hover:text-gray-300 block pt-4">About</a>
            <a href="{{ route('studyProgram.index') }}" class="hover:text-gray-300 block">Study Program</a>
            <a href="{{ route('studyProgram.index') }}" class="hover:text-gray-300 block">IE Program</a>
            <a href="{{ route('news.index') }}" class="hover:text-gray-300 block">News</a>
            <a href="{{ route('event.index') }}" class="hover:text-gray-300 block">Event</a>
        </nav>


        <nav class="space-y-8 px-8">
            <h3 class="font-semibold text-lg">Quick Links</h3>
            <a href="https://neosia.unhas.ac.id/login" class="hover:text-gray-300 block pt-4">Portal Mahasiswa</a>
            <a href="https://journal.unhas.ac.id/" class="hover:text-gray-300 block">Jurnal</a>
            <a href="https://sikola-v2.unhas.ac.id/login/index.php" class="hover:text-gray-300 block">Sikola</a>
        </nav>

        <nav class="space-y-8 px-8">
            <h3 class="font-semibold text-lg">Maps</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.8105916625614!2d119.48550367436482!3d-5.134181751937442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefd5b8062793d%3A0xadf1342c0dbca9c2!2sUniversitas%20Hasanuddin!5e0!3m2!1sid!2sid!4v1730559537698!5m2!1sid!2sid" width="220" height="220" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </nav>
    </div>
</footer>

<!-- Footer Bottom -->
<div class="bg-blueSecondary text-start py-4 ps-3 text-white">
    <p>&copy; Hasanuddin University. All Rights Reserved.</p>
</div>
