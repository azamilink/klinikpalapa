<x-main-layout>

    {{-- Jumbotron Start --}}
    <section class="min-h-screen bg-fixed flex justify-center items-center lg:bg-cover bg-opacity-85" style="background-image: url({{ asset('images/jumbotron.png') }});">
        <div class="hero-content text-neutral-content">
            <div class="max-w-3xl text-center">
                <h1 class="mb-5 text-5xl font-bold text-white">Selamat Datang di</h1>
                <H2 class="mb-5 text-7xl font-bold text-primary">PALAPA DENTIST</H2>
                <p class="mb-5 text-xl font-semibold text-white">
                    Klinik Gigi Spesialis di Jakarta Selatan dengan konsep pelayanan profesional dan terpadu dengan nuansa ‘homey’
                </p>
                <a href="{{ url('/auth/redirect') }}" class="btn btn-primary">
                    Get Start
                </a>
            </div>
        </div>
    </section>
    {{-- Jumbotron End --}}

    {{-- Tabs Pendaftaran Start --}}
    <div class="mt-8 lg:-mt-32 container mx-auto max-w-5xl">
        <div role="tablist" class="tabs tabs-lifted">
            {{-- Tab 1 Start --}}
            <input type="radio" name="my_tabs_2" role="tab" class="tab text-primary font-bold bg-slate-400" aria-label="Buat_Perjanjian" checked="checked" />
            <div role="tabpanel" class="tab-content bg-primary border-base-300 rounded-box p-6">
                <div class="card bg-primary w-full shrink-0 shadow-2xl">
                    <form class="card-body text-black grid lg:grid-cols-3 gap-1">
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text text-white">Nama</span>
                            </label>
                            <input type="email" placeholder="nama" class="input input-bordered" required />
                        </div>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text text-white">Jenis Kelamin</span>
                            </label>
                            <select class="select select-bordered w-full max-w-xs">
                                <option disabled selected>Pilih Gender Anda...</option>
                                <option>Pria</option>
                                <option>Wanita</option>
                            </select>
                        </div>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text text-white">Handphone</span>
                            </label>
                            <input type="text" placeholder="Tuliskan Nomor Ponsel Anda" class="input input-bordered" required />
                        </div>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text text-white">Alamat</span>
                            </label>
                            <textarea class="textarea textarea-dark" placeholder="Alamat"></textarea>
                        </div>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text text-white">Keluhan</span>
                            </label>
                            <textarea class="textarea textarea-primary" placeholder="Keluhan"></textarea>
                        </div>

                        <div class="form-control mt-6 place-self-end w-full">
                            <button class="btn btn-secondary">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
            {{-- Tab 1 End --}}
            {{-- Tabs 2 start --}}
            <input type="radio" name="my_tabs_2" role="tab" class="tab text-primary font-bold bg-slate-400" aria-label="Rating_Kami" />
            <div role="tabpanel" class="tab-content bg-primary border-base-300 p-6">
                <div class="stats shadow grid grid-cols-3 gap-1">
                    <div class="stat">
                        <div class="stat-title">Total Pengunjung</div>
                        <div class="stat-value text-primary">25.6K</div>
                        <div class="stat-desc">21% more than</div>
                    </div>

                    <div class="stat">
                        <div class="stat-title">Jumlah Dentist</div>
                        <div class="stat-value text-secondary">6</div>
                        <div class="stat-desc">21% more than</div>
                    </div>

                    <div class="stat">
                        <div class="stat-value">86%</div>
                        <div class="stat-title">Pasien Terlayani</div>
                        <div class="stat-desc text-secondary">31 tasks remaining</div>
                    </div>
                </div>
            </div>
            {{-- Tab 2 End --}}
        </div>
    </div>
    {{-- Tabs Pendaftaran End --}}

    {{-- Reason Start --}}
    <section class="py-4 container mx-auto max-w-7xl">
        <div class="hero rounded-t-3xl">
            <div class="hero-content flex flex-col lg:flex-row-reverse">
                <div class="flex-1">
                    <img src="{{ asset('images/home/FOTO1-1.jpg') }}" class="rounded-lg shadow-2xl" />
                </div>
                <div class="flex-[1.5]">
                    <h1 class="text-5xl font-bold">Kenapa Memilih Palapa Dentists?</h1>
                    <p class="py-6">
                        Palapa Dentists merupakan klinik gigi spesialis di Jakarta Selatan dengan konsep pelayanan klinik gigi profesional dan terpadu bernuansa homey sehingga berbeda dengan nuansa rumah sakit pada umumnya.
                    </p>
                    <ul>
                        <li>❤️ Dokter yang berkualifikasi tinggi</li>
                        <li>❤️ Pelayanan satu tempat</li>
                        <li>❤️ Bekerjasama dengan berbagai asuransi</li>
                        <li>❤️ Klinik Gigi dengan nuansa rumah yang nyaman</li>
                        <li>❤️ Lingkungan ramah anak dan keluarga</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{-- Reason End --}}

    {{-- Penanggung Jawab Start --}}
    <section class="hero bg-white pt-4  container mx-auto max-w-7xl">
        <div class="hero-content flex-col lg:flex-row">
            <img src="{{ asset('images/drg-Anggraeni-10-1024x1024.webp') }}" class="max-w-sm rounded-full shadow-2xl m-3" />
            <div>
                <h1 class="text-5xl font-bold">Penanggung Jawab Klinik</h1>
                <h5 class="text-2xl font-semibold mt-4">
                    <a href="https://palapadentists.com/our-doctor/dr-drg-anggraeni-sp-kg/">Dr. drg. Anggraeni, Sp.KG</a>
                </h5>
                <p class="py-6">
                    Dikenal dengan panggilan drg.Rani, memulai karirnya di dunia kedokteran gigi setelah tamat dari Universitas Indonesia tahun 1999 dengan melanjutkan pendidikan Spesialis Konservasi Gigi.
                </p>
            </div>
        </div>
    </section>
    {{-- Penanggung Jawab End --}}

    {{-- Service Start --}}
    <!-- ====== Services Section Start -->
    <section class="py-12 lg:pt-[120px] lg:pb-[90px] dark:bg-dark  container mx-auto max-w-7xl">
        <div class=" container mx-auto">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="container mx-auto mb-12 max-w-[510px] text-center lg:mb-20">
                        <span class="text-primary mb-2 block text-lg font-semibold">
                            Layanan Kami
                        </span>
                        <h2 class="text-dark dark:text-white mb-3 text-3xl leading-[1.2] font-bold sm:text-4xl md:text-[40px]">
                            Apa Yang Kami Tawarkan?
                        </h2>
                        <p class="text-body-color text-base dark:text-dark-6">
                            Layanan perawatan gigi kami meliputi :
                        </p>
                    </div>
                </div>
            </div>
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="mb-9 rounded-[20px] bg-white dark:bg-dark-2 p-10 shadow-2 hover:shadow-lg md:px-7 xl:px-10">
                        <div class="bg-primary mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl">
                            <img src="{{ asset('images/home/service/gigi1.png') }}" alt="gigi" class="h-9 w-9">
                        </div>
                        <h4 class="text-dark dark:text-white mb-[14px] text-2xl font-semibold">
                            Konservasi Gigi / Endodontic
                        </h4>
                        <p class="text-body-color dark:text-dark-6">
                            Merupakan sebuah cabang ilmu kedokteran gigi yang bertujuan untuk mempertahankan gigi selama mungkin di dalam mulut. Layanan dari bidang spesialis...
                        </p>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="mb-9 rounded-[20px] bg-white dark:bg-dark-2 p-10 shadow-2 hover:shadow-lg md:px-7 xl:px-10">
                        <div class="bg-primary mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl">
                            <img src="{{ asset('images/home/service/gigi2.png') }}" alt="gigi" class="h-9 w-9">
                        </div>
                        <h4 class="text-dark dark:text-white mb-[14px] text-2xl font-semibold">
                            Meratakan Gigi / Orthodontic
                        </h4>
                        <p class="text-body-color dark:text-dark-6">
                            Merupakan sebuah cabang ilmu kedokteran gigi yang mempelajari perawatan ketidakharmonisan gigi. Spesialis ini berfokus dalam memperbaiki posisi gigi yang tidak...
                        </p>
                    </div>
                </div>

                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="mb-9 rounded-[20px] bg-white dark:bg-dark-2 p-10 shadow-2 hover:shadow-lg md:px-7 xl:px-10">
                        <div class="bg-primary mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl">
                            <img src="{{ asset('images/home/service/gigi3.png') }}" alt="gigi" class="h-9 w-9">
                        </div>
                        <h4 class="text-dark dark:text-white mb-[14px] text-2xl font-semibold">
                            Bedah Mulut / Oral Surgery
                        </h4>
                        <p class="text-body-color dark:text-dark-6">
                            Merupakan spesialisasi bedah dalam kedokteran gigi yang yang dilakukan pada area mulut (oral) dan rahang.
                        </p>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="mb-9 rounded-[20px] bg-white dark:bg-dark-2 p-10 shadow-2 hover:shadow-lg md:px-7 xl:px-10">
                        <div class="bg-primary mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl">
                            <img src="{{ asset('images/home/service/gigi4.png') }}" alt="gigi" class="h-9 w-9">
                        </div>
                        <h4 class="text-dark dark:text-white mb-[14px] text-2xl font-semibold">
                            Pembuatan Gigi Palsu / Prosthodontic
                        </h4>
                        <p class="text-body-color dark:text-dark-6">
                            Merupakan cabang ilmu kedokteran gigi yang berfokus pada perawatan gangguan gigi yang parah, seperti gigi yang lepas, karies gigi, gigi...
                        </p>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="mb-9 rounded-[20px] bg-white dark:bg-dark-2 p-10 shadow-2 hover:shadow-lg md:px-7 xl:px-10">
                        <div class="bg-primary mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl">
                            <img src="{{ asset('images/home/service/gigi5.png') }}" alt="gigi" class="h-9 w-9">
                        </div>
                        <h4 class="text-dark dark:text-white mb-[14px] text-2xl font-semibold">
                            Jaringan Penyangga Gigi / Periodontic
                        </h4>
                        <p class="text-body-color dark:text-dark-6">
                            Merupakan spesialisasi kedokteran gigi yang menangani masalah jaringan penyangga gigi seperti gusi, tulang, dan struktur lain terkait gigi.
                        </p>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="mb-9 rounded-[20px] bg-white dark:bg-dark-2 p-10 shadow-2 hover:shadow-lg md:px-7 xl:px-10">
                        <div class="bg-primary mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl">
                            <img src="{{ asset('images/home/service/gigi6.png') }}" alt="gigi" class="h-9 w-9">
                        </div>
                        <h4 class="text-dark dark:text-white mb-[14px] text-2xl font-semibold">
                            Perawatan Gigi Anak / Pedodontic
                        </h4>
                        <p class="text-body-color dark:text-dark-6">
                            Merupakan cabang ilmu kedokteran gigi yang khusus melakukan perawatan gigi pada pasien anak-anak di bawah umur 15 tahun.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Services Section End -->
    {{-- Service End --}}

    <!-- ====== Testimonials Section Start -->
    <section class="my-10 md:my-24  container mx-auto max-w-7xl min-h-screen flex flex-col md:flex-row shadow-sm overflow-hidden" x-data="{ testimonialActive: 2 }" x-cloak>
        <div class="relative w-full py-2 md:py-24 bg-indigo-700 md:w-1/2 flex flex-col item-center justify-center">

            <div class="absolute top-0 left-0 z-10 grid-indigo w-16 h-16 md:w-40 md:h-40 md:ml-20 md:mt-24"></div>

            <div class="relative text-2xl md:text-5xl py-2 px-6 md:py-6 md:px-1 md:w-64 md:container mx-auto text-indigo-100 font-semibold leading-tight tracking-tight mb-0 z-20">
                <span class="md:block">Yang</span>
                <span class="md-block">Pelanggan</span>
                <span class="block">Kami Katakan...!</span>
            </div>

            <div class="absolute right-0 bottom-0 mr-4 mb-4 hidden md:block">
                <button class="rounded-l-full border-r bg-gray-100 text-gray-500 focus:outline-none hover:text-indigo-500 font-bold w-12 h-10" x-on:click="testimonialActive = testimonialActive === 1 ? 3 : testimonialActive - 1">
                    &#8592;
                </button><button class="rounded-r-full bg-gray-100 text-gray-500 focus:outline-none hover:text-indigo-500 font-bold w-12 h-10" x-on:click="testimonialActive = testimonialActive >= 3 ? 1 : testimonialActive + 1">
                    &#8594;
                </button>
            </div>
        </div>
        <div class="bg-gray-100 md:w-1/2">
            <div class="flex flex-col h-full relative">

                <div class="absolute top-0 left-0 mt-3 ml-4 md:mt-5 md:ml-12">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-indigo-200 fill-current w-12 h-12 md:w-16 md:h-16" viewBox="0 0 24 24">
                        <path d="M6.5 10c-.223 0-.437.034-.65.065.069-.232.14-.468.254-.68.114-.308.292-.575.469-.844.148-.291.409-.488.601-.737.201-.242.475-.403.692-.604.213-.21.492-.315.714-.463.232-.133.434-.28.65-.35.208-.086.39-.16.539-.222.302-.125.474-.197.474-.197L9.758 4.03c0 0-.218.052-.597.144C8.97 4.222 8.737 4.278 8.472 4.345c-.271.05-.56.187-.882.312C7.272 4.799 6.904 4.895 6.562 5.123c-.344.218-.741.4-1.091.692C5.132 6.116 4.723 6.377 4.421 6.76c-.33.358-.656.734-.909 1.162C3.219 8.33 3.02 8.778 2.81 9.221c-.19.443-.343.896-.468 1.336-.237.882-.343 1.72-.384 2.437-.034.718-.014 1.315.028 1.747.015.204.043.402.063.539.017.109.025.168.025.168l.026-.006C2.535 17.474 4.338 19 6.5 19c2.485 0 4.5-2.015 4.5-4.5S8.985 10 6.5 10zM17.5 10c-.223 0-.437.034-.65.065.069-.232.14-.468.254-.68.114-.308.292-.575.469-.844.148-.291.409-.488.601-.737.201-.242.475-.403.692-.604.213-.21.492-.315.714-.463.232-.133.434-.28.65-.35.208-.086.39-.16.539-.222.302-.125.474-.197.474-.197L20.758 4.03c0 0-.218.052-.597.144-.191.048-.424.104-.689.171-.271.05-.56.187-.882.312-.317.143-.686.238-1.028.467-.344.218-.741.4-1.091.692-.339.301-.748.562-1.05.944-.33.358-.656.734-.909 1.162C14.219 8.33 14.02 8.778 13.81 9.221c-.19.443-.343.896-.468 1.336-.237.882-.343 1.72-.384 2.437-.034.718-.014 1.315.028 1.747.015.204.043.402.063.539.017.109.025.168.025.168l.026-.006C13.535 17.474 15.338 19 17.5 19c2.485 0 4.5-2.015 4.5-4.5S19.985 10 17.5 10z" />
                    </svg>
                </div>

                <div class="h-full relative z-10">
                    <div x-show.immediate="testimonialActive === 1">
                        <p class="text-gray-600 serif font-normal italic px-6 py-6 md:px-16 md:py-10 text-xl md:text-2xl" x-show.transition="testimonialActive == 1">
                            Palapa Dentists merupakan klinik gigi yang sangat baik. Para stafnya juga sangat ramah, keseluruhan prosedur sudah memenuhi persyaratan keamanan apalagi di era Covid-19. Fasilitasnya juga cukup lengkap, misalnya jika dibutuhkan untuk foto (rontgen) juga tersedia.
                        </p>
                    </div>

                    <div x-show.immediate="testimonialActive === 2">
                        <p class="text-gray-600 serif font-normal italic px-6 py-6 md:px-16 md:py-10 text-xl md:text-2xl" x-show.transition="testimonialActive == 2">
                            Saya sering sakit gigi, dan saya sudah sering mendatangi instalasi-instalasi pengobatan gigi, dan Palapa Dentists menurut saya adalah yang paling baik. Seluruh stafnya, level profisiensinya tinggi, pelayanan dokternya pun sangat memuaskan. Terima kasih Palapa Dentists!
                        </p>
                    </div>

                    <div x-show.immediate="testimonialActive === 3">
                        <p class="text-gray-600 serif font-normal italic px-6 py-6 md:px-16 md:py-10 text-xl md:text-2xl" x-show.transition="testimonialActive == 3">
                            Kurang lebih saya telah menjadi pasien Palapa Dentists yang ditangani oleh Dr. drg. Anggraeni, Sp. KG sejak awal berdiri. Alhamdulillah, sejauh ini, pelayanan, perawatan, maupun pengobatan yang dilakukan di Palapa Dentists ini cukup memuaskan dan juga menjadikan kesehatan gigi cukup terjaga dengan baik.
                        </p>
                    </div>
                </div>

                <div class="flex my-4 justify-center items-center">
                    <button @click.prevent="testimonialActive = 1" class="text-center font-bold shadow-xs focus:outline-none focus:shadow-outline inline-block rounded-full mx-2" :class="{ 'h-12 w-12 opacity-25 bg-indigo-300 text-gray-600': testimonialActive != 1, 'h-16 w-16 opacity-100 bg-indigo-600 text-white': testimonialActive == 1 }">LW</button>
                    <button @click.prevent="testimonialActive = 2" class="text-center font-bold shadow-xs focus:outline-none focus:shadow-outline h-16 w-16 inline-block bg-indigo-600 rounded-full mx-2" :class="{ 'h-12 w-12 opacity-25 bg-indigo-300 text-gray-600': testimonialActive != 2, 'h-16 w-16 opacity-100 bg-indigo-600 text-white': testimonialActive == 2 }">ST</button>
                    <button @click.prevent="testimonialActive = 3" class="text-center font-bold shadow-xs focus:outline-none focus:shadow-outline h-12 w-12 inline-block bg-indigo-600 rounded-full mx-2" :class="{ 'h-12 w-12 opacity-25 bg-indigo-300 text-gray-600': testimonialActive != 3, 'h-16 w-16 opacity-100 bg-indigo-600 text-white': testimonialActive == 3 }">RW</button>
                </div>

                <div class="flex justify-center px-6 pt-2 pb-6 md:py-6">
                    <div class="text-center" x-show="testimonialActive == 1">
                        <h2 class="text-sm md:text-base font-bold text-gray-700 leading-tight">Bp. Sofwan Farisyi</h2>
                        <small class="text-gray-500 text-xs md:text-sm truncate">CEO, ABC Inc.</small>
                    </div>

                    <div class="text-center" x-show="testimonialActive == 2">
                        <h2 class="text-sm md:text-base font-bold text-gray-700 leading-tight">Dr. Subakat Hadi</h2>
                        <small class="text-gray-500 text-xs md:text-sm truncate">CTO, XYZ Corp.</small>
                    </div>

                    <div class="text-center" x-show="testimonialActive == 3">
                        <h2 class="text-sm md:text-base font-bold text-gray-700 leading-tight">Prof. Sutoto</h2>
                        <small class="text-gray-500 text-xs md:text-sm truncate">Product Manager, Fake Corp.</small>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Testimonials Section End -->

    <!-- ====== Blog Section Start -->
    <section class="pt-20 pb-10 lg:pt-[120px] lg:pb-20 bg-white dark:bg-dark  container mx-auto max-w-7xl">
        <div class=" container mx-auto">
            <div class="flex flex-wrap justify-center -mx-4">
                <div class="w-full px-4">
                    <div class="container mx-auto mb-[60px] max-w-[510px] text-center lg:mb-20">
                        <span class="block mb-2 text-lg font-semibold text-primary">
                            Info Penting
                        </span>
                        <h2 class="mb-4 text-3xl font-bold text-dark sm:text-4xl md:text-[40px] dark:text-white">
                            Berita Terbaru Dari Kami
                        </h2>
                        <p class="text-base text-body-color dark:text-dark-6">
                            Artikel seputar kesehatan, perawatan gigi dan manfaat pemeriksaan rutin di klinik yang terpecaya.
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="w-full mb-10">
                        <div class="mb-8 overflow-hidden rounded">
                            <img src="https://palapadentists.com/wp-content/uploads/2024/10/52.png" alt="image" class="w-full" />
                        </div>
                        <div>
                            <span class="inline-block px-4 py-1 mb-5 text-xs font-semibold leading-loose text-center text-white rounded bg-primary">
                                Dec 22, 2023
                            </span>
                            <h3>
                                <a href="javascript:void(0)" class="inline-block mb-4 text-xl font-semibold text-dark dark:text-white hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl">
                                    Hukum Memasang Implant Gigi, Haruskah Dilepas Jika Seorang Meninggal?
                                </a>
                            </h3>
                            <p class="text-base text-body-color dark:text-dark-6">
                                Memasang gigi (palsu) itu merupakan suatu hajat/kebutuhan bagi orang yang tidak ada lagi giginya untuk bisa mengunyah makanan sebelum ditelan atau untuk membantu pencernaan makanan.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="w-full mb-10">
                        <div class="mb-8 overflow-hidden rounded">
                            <img src="https://palapadentists.com/wp-content/uploads/2024/07/31.webp" alt="image" class="w-full" />
                        </div>
                        <div>
                            <span class="inline-block px-4 py-1 mb-5 text-xs font-semibold leading-loose text-center text-white rounded bg-primary">
                                Mar 15, 2023
                            </span>
                            <h3>
                                <a href="javascript:void(0)" class="inline-block mb-4 text-xl font-semibold text-dark dark:text-white hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl">
                                    Menyikat gigi dengan/secara keras tidak membuat gigi menjadi lebih bersih!
                                </a>
                            </h3>
                            <p class="text-base text-body-color dark:text-dark-6">
                                Menyikat gigi 2x sehari merupakan aktivitas fundamental dalam memelihara kesehatan rongga mulut. Namun, terdapat miskonsepsi mengenai cara menyikat gigi di masyarakat: “menyikat gigi dengan/secara keras dapat menghasilkan gigi yang lebih bersih”. Faktanya, menyikat gigi dengan tekanan keras justru dapat mengakibatkan permasalahan gigi lho! Yuk, kita bahas bersama-sama.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="w-full mb-10">
                        <div class="mb-8 overflow-hidden rounded">
                            <img src=https://palapadentists.com/wp-content/uploads/2024/06/Konten-Palapa-2.webp" alt="image" class="w-full" />
                        </div>
                        <div>
                            <span class="inline-block px-4 py-1 mb-5 text-xs font-semibold leading-loose text-center text-white rounded bg-primary">
                                Jan 05, 2023
                            </span>
                            <h3>
                                <a href="javascript:void(0)" class="inline-block mb-4 text-xl font-semibold text-dark dark:text-white hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl">
                                    Pakai Behel Sia Sia, Gara-gara Malas Pakai Retainer
                                </a>
                            </h3>
                            <p class="text-base text-body-color dark:text-dark-6">
                                Setelah kawat gigi dilepas, gigi masih membutuhkan waktu untuk stabil secara alami dalam posisi barunya. Tanpa dukungan yang tepat, terdapat risiko dimana gigi secara bertahap bergeser kembali ke posisi semula. Retainer membantu mencegah hal ini dengan menahan gigi pada tempatnya dan menjaga tulang dan jaringan di sekitarnya beradaptasi dengan posisi baru.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Blog Section End -->

    {{-- Subscriptin Start --}}
    <section class="bg-indigo-500 text-black py-16 sm:py-24 lg:py-32 mb-12">
        <div class="container mx-auto grid max-w-7xl grid-cols-1 gap-10 px-6 lg:grid-cols-12 lg:gap-8 lg:px-8">
            <div class="max-w-xl text-3xl font-bold tracking-tight text-white sm:text-4xl lg:col-span-7">
                <h2 class="inline sm:block lg:inline xl:block">Want product news and updates?</h2>
                <p class="inline sm:block lg:inline xl:block">Sign up for our newsletter.</p>
            </div>
            <form class="w-full max-w-md lg:col-span-5 lg:pt-2">
                <div class="flex gap-x-4">
                    <label for="email-address" class="sr-only">Email address</label>
                    <input id="email-address" name="email" type="email" autocomplete="email" required class="min-w-0 flex-auto rounded-md border-0 bg-white/10 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 placeholder:text-white/75 focus:ring-2 focus:ring-inset focus:ring-white sm:text-sm sm:leading-6" placeholder="Enter your email">
                    <button type="submit" class="flex-none rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-indigo-600 shadow-sm hover:bg-indigo-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Subscribe</button>
                </div>
                <p class="mt-4 text-sm leading-6 text-gray-300">We care about your data. Read our <a href="#" class="font-semibold text-white hover:text-indigo-50">privacy&nbsp;policy</a>.</p>
            </form>
        </div>
    </section>
    {{-- Subscriptin End --}}

    {{-- Coment Start --}}
    <section class=" container mx-auto  max-w-4xl lg:grid lg:grid-cols-3 lg:gap-2 content-center mb-12">
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
    </section>
    {{-- Coment end --}}

    </x-guest-layout>
