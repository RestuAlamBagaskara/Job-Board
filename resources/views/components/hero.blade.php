<section class="text-gray-600 body-font border-b border-gray-100">
    <div class="container mx-auto flex flex-col px-5 pt-16 pb-8 justify-center items-center">
        <div class="w-full md:w-2/3 flex flex-col items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Temukan Banyak Lowongan Pekerjaan</h1>
            <p class="mb-8 leading-relaxed">Antara Anda ingin berpindah ke pekerjaan baru atau hanya melihat apa yang tersedia, kami telah mengumpulkan daftar lengkap posisi terbuka ini dari berbagai perusahaan dan lokasi untuk Anda pilih.</p>
            <form class="flex w-full justify-center items-end" action="{{ route('listings.index') }}" method="get">
                <div class="relative mr-4 w-full lg:w-1/2 text-left">
                    <input type="text" id="s" name="s" value="{{ request()->get('s') }}" class="w-full bg-gray-100 bg-opacity-50 rounded focus:ring-2 focus:ring-sky-200 focus:bg-transparent border border-gray-300 focus:border-sky-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <button class="inline-flex text-white bg-sky-500 border-0 py-2 px-6 focus:outline-none hover:bg-sky-500/75 rounded text-lg">Cari</button>
            </form>
            <p class="text-sm mt-2 text-gray-500 mb-8 w-full">Fullstack PHP, Vue dan nNode, React Native</p>
        </div>
    </div>
</section>
