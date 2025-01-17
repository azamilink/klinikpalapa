<x-main-layout title="About">
    {{-- Heading Start --}}
    <section class="w-full h-96 bg-cover" style="background-image: url({{ asset('images/about/heading_about_us.jpg') }})">
        <div class="max-w-6xl h-full container mx-auto text-white flex justify-center items-center flex-col">
            <p class="text-5xl font-bold">HALO</p>
            <p class="text-2xl font-medium">-- KAMI DARI PALAPA DENTIST --</p>
        </div>
    </section>
    {{-- Heading End --}}

    {{-- Jumbotron Start --}}
    <section class="-mt-28 mb-32">
        <div class="max-w-6xl h-auto container mx-auto">
            <img src="{{ asset('images/about/about_jumbotron.webp') }}" alt="jumbotron" class="w-ful h-full rounded-3xl">
        </div>
    </section>
    {{-- Jumbotron End --}}

    {{-- Service Start --}}
    <section class="min-h-screen w-full container mx-auto">
        <div class="max-w-5xl container mx-auto text-center mb-16">
            <h1 class="text-5xl font-bold mb-4">Layanan Perawatan Gigi Kami meliputi</h1>
            <p class="text-md font-extralight">
                Tujuan kami adalah untuk membantu mempertahankan senyum cemerlang Anda dengan tim ahli bedah gigi Kami yang berpengalaman dan berdedikasi.
                Kami di sini siap untuk membantu menangani kebutuhan gigi Anda.
            </p>
        </div>
        <div class="max-w-6xl container mx-auto text-center grid lg:grid-cols-4 gap-1">
            <div class="w-60 h-96 flex justify-start items-center flex-col mb-8">
                <div class="h-24 w-24 mb-4">
                    <img src="{{ asset('images/services/service_1.png') }}" alt="service" class="h-full w-full">
                </div>
                <h3 class="text-2xl font-semibold mb-2">Tim Dokter Terampil</h3>
                <p>Para dokter dan spesialis di Palapa Dentists merupakan lulusan dari universitas terbaik di Indonesia dan terus meningkatkan ilmu serta skill dalam spesialisasi yang digelutinya, sehingga mampu memberikan pelayanan yang komprehensif, terbaik dan berkualitas</p>
            </div>
            <div class="w-60 h-96 flex justify-start items-center flex-col mb-8">
                <div class="h-24 w-24 mb-4">
                    <img src="{{ asset('images/services/service_2.png') }}" alt="service" class="h-full w-full">
                </div>
                <h3 class="text-2xl font-semibold mb-2">Peralatan Canggih dan Modern</h3>
                <p>Didukung oleh peralatan modern dan lengkap untuk memberikan perawatan yang lebih nyaman dan hasil yang lebih baik</p>
            </div>
            <div class="w-60 h-96 flex justify-start items-center flex-col mb-8">
                <div class="h-24 w-24 mb-4">
                    <img src="{{ asset('images/services/service_3.png') }}" alt="service" class="h-full w-full">
                </div>
                <h3 class="text-2xl font-semibold mb-2">Lingkungan Nyaman dan Bersih</h3>
                <p>Suasana yang nyaman dan penuh keramahan, akan membuat Anda lebih rileks dalam menerima perawatan</p>
            </div>
            <div class="w-60 h-96 flex justify-start items-center flex-col mb-8">
                <div class="h-24 w-24 mb-4">
                    <img src="{{ asset('images/services/service_4.png') }}" alt="service" class="h-full w-full">
                </div>
                <h3 class="text-2xl font-semibold mb-2">Adanya Alat Penunjang</h3>
                <p>Memiliki peralatan penunjang seperti rontgen gigi, panoramic serta chepalometric, sehingga tidak perlu rujukan dan mempersingkat waktu kunjungan</p>
            </div>

        </div>
    </section>
    {{-- Service End --}}

    {{-- Penanggung Jawab Start --}}
    <section class="hero bg-slate-200 min-h-screen pt-4">
        <div class="hero-content flex-col lg:flex-row">
            <img src="{{ asset('images/drg-Anggraeni-10-1024x1024.webp') }}" class="max-w-sm rounded-full shadow-2xl m-3" />
            <div class="m-8">
                <h1 class="text-5xl font-bold">Penanggung Jawab Klinik</h1>
                <h5 class="text-2xl font-semibold mt-4">
                    <a href="https://palapadentists.com/our-doctor/dr-drg-anggraeni-sp-kg/">Dr. drg. Anggraeni, Sp.KG</a>
                </h5>
                <p class="py-6">
                    Dikenal dengan panggilan drg.Rani, memulai karirnya di dunia kedokteran gigi setelah tamat dari Universitas Indonesia tahun 1999 dengan melanjutkan pendidikan Spesialis Konservasi Gigi.
                </p>
            </div>
            <div class="max-w-xs">
                <h1 class="text-5xl font-bold mb-4">Para Pendiri</h1>

                <p class="py-2">
                    Palapa Dentists merupakan klinik gigi spesialis di Jakarta Selatan dengan konsep pelayanan klinik gigi profesional dan terpadu dengan nuansa rumah yang nyaman (homey) sehingga berbeda dengan nuansa rumah sakit pada umumnya.

                    Sebelumnya, klinik ini dikenal sebagai Praktek Gigi drg. Solhah Busro, M. Kes. Praktek Gigi yang bertempat di rumah pribadi drg. Solhah Busro, di Jl. Palapa 1 No. 4, Pasar Minggu Jakarta Selatan ini telah berdiri sejak tahun 1980. drg. Solhah Busro merupakan dokter gigi sekaligus dosen di Fakultas Kedokteran Gigi (FKG) Universitas Trisakti. Beliau wafat pada tahun 2007.
                </p>
            </div>
        </div>
    </section>
    {{-- Penanggung Jawab End --}}

    {{-- Sejarah Start --}}
    <section class="w-full min-h-screen py-12" style="background-image: url({{ asset('images/about/background.jpg') }})">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 justify-items-center my-4">
                <h2 class="text-pretty text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl">
                    Sejarah Kami
                </h2>
                <p class="mt-6 text-lg/8 text-gray-600">Awal Mula Palapa Dentist Berdiri.</p>
            </div>


            <ul class="timeline timeline-snap-icon max-md:timeline-compact timeline-vertical max-w-4xl mx-auto mt-2">
                <li>
                    <div class="timeline-middle">
                        <div class="avatar">
                            <div class="w-24 rounded-full">
                                <img src="https://palapadentists.com/wp-content/uploads/2019/01/Icon-Foto-drg.-Rani.png" />
                            </div>
                        </div>
                    </div>
                    <div class="timeline-start mb-10 md:text-end">
                        <time class="font-mono italic">2007</time>
                        <div class="text-lg font-black">- Kelanjutan</div>
                        Setelah wafatnya drg. Solhah Busro ditahun 2007, kelanjutan klinik diteruskan dan dikembangkan oleh putri beliau Dr. drg. Anggraeni Sp.KG. (drg. Rani) yang merupakan salah satu alumnus terbaik Fakultas Kedokteran Gigi Universitas Indonesia.
                    </div>
                    <hr />
                </li>
                <li>
                    <hr />
                    <div class="timeline-middle">
                        <div class="avatar">
                            <div class="w-24 rounded-full">
                                <img src="https://palapadentists.com/wp-content/uploads/2019/01/Icon-Foto-drg.-Solhah.png" />
                            </div>
                        </div>
                    </div>
                    <div class="timeline-end md:mb-10">
                        <time class="font-mono italic">1980</time>
                        <div class="text-lg font-black">- Mulai Berdiri</div>
                        Pada awalnya, klinik ini merupakan bagian dari rumah pribadi drg. Solhah Busro yang terletak di Jl. Palapa 1 No. 4, Pasar Minggu Jakarta Selatan. drg. Solhah Busro merupakan dokter gigi yang juga sekaligus dosen di Fakultas Kedokteran Gigi Universitas Trisakti.
                    </div>
                    <hr />
                </li>
            </ul>
        </div>
    </section>
    {{-- Sejarah End --}}


    {{-- Comment Start --}}
    <section class="container mx-auto my-12 max-w-4xl">
        <p class="mb-8 text-primary">Leave Your Comment</p>
        <div class="lg:grid lg:grid-cols-3 lg:gap-2 content-center">
            <label class="input input-bordered flex items-center gap-2 mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-4 w-4 opacity-70">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" />
                </svg>
                <input type="text" class="grow" placeholder="Name" />
            </label>
            <label class="input input-bordered flex items-center gap-2 mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-4 w-4 opacity-70">
                    <path d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" />
                    <path d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" />
                </svg>
                <input type="text" class="grow" placeholder="Email" />
            </label>
            <label class="input input-bordered flex items-center gap-2 mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-4 w-4 opacity-70">
                    <path fill-rule="evenodd" d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z" clip-rule="evenodd" />
                </svg>
                <input type="text" class="grow" placeholder="Website" />
            </label>

            <div class="lg:col-span-3 mb-4">
                <textarea class="textarea textarea-bordered textarea-lg w-full max-w-full" placeholder="Comment"></textarea>
            </div>


            <button class="btn btn-outline btn-info btn-lg mb-4">Post Comment</button>
        </div>
    </section>
    {{-- Comment Start --}}

</x-main-layout>
