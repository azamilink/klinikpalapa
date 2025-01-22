<x-main-layout>

    {{-- Jumbotron Start --}}
    <section class="min-h-screen bg-fixed flex justify-center items-center" style="background-image: url({{ asset('images/jumbotron.png') }});">
        <div class="hero-content text-neutral-content">
            <div class="max-w-3xl text-center">
                <h1 class="mb-5 text-4xl font-bold">Selamat Datang di</h1>
                <H2 class="mb-5 text-7xl font-bold text-primary">PALAPA DENTIST</H2>
                <p class="mb-5">
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
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.0375 1.2374C11.8125 -0.393851 2.92503 5.7374 1.29378 14.9624C0.450029 19.4061 1.46253 23.9624 4.05003 27.6749C6.63753 31.4436 10.5188 33.9186 14.9625 34.7624C15.975 34.9311 16.9875 35.0436 18 35.0436C26.0438 35.0436 33.2438 29.2499 34.7625 21.0374C36.3938 11.8124 30.2625 2.9249 21.0375 1.2374ZM32.2313 20.5874C32.175 21.0374 32.0625 21.4874 31.95 21.8811L19.2375 17.0999V3.5999C19.6875 3.65615 20.1375 3.7124 20.5313 3.76865C28.4063 5.1749 33.6375 12.7124 32.2313 20.5874ZM16.7063 3.5999V16.7624H3.60003C3.65628 16.3124 3.71253 15.8624 3.76878 15.4124C4.95003 8.83115 10.4063 4.10615 16.7063 3.5999ZM15.4125 32.2311C11.5875 31.5561 8.32503 29.4186 6.13128 26.2124C4.66878 24.1311 3.82503 21.7124 3.60003 19.2374H17.775L31.05 24.2436C28.2938 29.9811 21.9375 33.4686 15.4125 32.2311Z" fill="white" />
                            </svg>
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
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.89195 14.625C10.9995 10.1252 13.769 7.875 18.1996 7.875C24.8458 7.875 25.6765 12.9375 28.9996 13.7812C31.2151 14.3439 33.1535 13.5002 34.815 11.25C33.7075 15.7498 30.9379 18 26.5073 18C19.8611 18 19.0304 12.9375 15.7073 12.0938C13.4918 11.5311 11.5535 12.3748 9.89195 14.625ZM1.58423 24.75C2.69174 20.2502 5.46132 18 9.89195 18C16.5381 18 17.3689 23.0625 20.692 23.9062C22.9075 24.4689 24.8458 23.6252 26.5073 21.375C25.3998 25.8748 22.6302 28.125 18.1996 28.125C11.5535 28.125 10.7227 23.0625 7.39963 22.2188C5.18405 21.6561 3.24576 22.4998 1.58423 24.75Z" fill="white" />
                            </svg>
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
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M30.2625 10.6312C27.1688 7.36875 22.8375 5.34375 18 5.34375C8.60626 5.34375 1.01251 12.9937 1.01251 22.3875C1.01251 25.0312 1.63126 27.6187 2.75626 29.925C2.92501 30.2625 3.20626 30.4875 3.54376 30.6C3.65626 30.6 3.71251 30.6562 3.82501 30.6562C3.82501 30.6562 3.82501 30.6562 3.88126 30.6562C3.88126 30.6562 3.88126 30.6562 3.93751 30.6562C3.99376 30.6562 4.05001 30.6562 4.10626 30.6562C4.21876 30.6562 4.38751 30.6 4.50001 30.5437L6.80626 29.4187C7.42501 29.1375 7.70626 28.35 7.36876 27.7312C7.03126 27.1125 6.30001 26.8312 5.68126 27.1687L4.55626 27.7312C3.88126 26.1 3.60001 24.3562 3.54376 22.5562H5.90626C6.58126 22.5562 7.20001 21.9937 7.20001 21.2625C7.20001 20.5312 6.63751 19.9687 5.90626 19.9687H3.71251C4.10626 17.4937 5.17501 15.2437 6.69376 13.3875L8.71876 15.4125C8.94376 15.6375 9.28126 15.8062 9.61876 15.8062C9.95626 15.8062 10.2938 15.6937 10.5188 15.4125C11.025 14.9062 11.025 14.1187 10.5188 13.6125L8.43751 11.5312C10.6875 9.5625 13.5563 8.2125 16.7625 7.9875V11.4187C16.7625 12.0937 17.325 12.7125 18.0563 12.7125C18.7313 12.7125 19.35 12.15 19.35 11.4187V7.9875C22.5 8.26875 25.425 9.5625 27.675 11.5312L26.1 13.1062C25.5938 13.6125 25.5938 14.4 26.1 14.9062C26.325 15.1312 26.6625 15.3 27 15.3C27.3375 15.3 27.675 15.1875 27.9 14.9062L29.4188 13.3875C30.9375 15.2437 31.95 17.4937 32.4 19.9687H30.2063C29.5313 19.9687 28.9125 20.5312 28.9125 21.2625C28.9125 21.9937 29.475 22.5562 30.2063 22.5562H32.5688C32.5688 24.3562 32.2313 26.1 31.5563 27.7875L30.4313 27.225C29.8125 26.8875 29.025 27.1687 28.7438 27.7875C28.4625 28.4062 28.6875 29.1937 29.3063 29.475L31.6125 30.6C31.7813 30.7125 32.0063 30.7125 32.175 30.7125C32.175 30.7125 32.175 30.7125 32.2313 30.7125C32.2313 30.7125 32.2313 30.7125 32.2875 30.7125C32.7375 30.7125 33.1875 30.4312 33.4125 30.0375C34.5938 27.7312 35.1563 25.0875 35.1563 22.5C35.0438 17.8312 33.1875 13.6687 30.2625 10.6312Z" fill="white" />
                                <path d="M21.4313 19.3499L17.6625 22.1624C16.9875 22.2749 16.3688 22.6687 15.975 23.2312C15.9188 23.3437 15.8625 23.3999 15.8063 23.5124L15.6938 23.6249H15.75C15.1313 24.8062 15.4688 26.2687 16.5938 27.1124C17.7188 27.8999 19.2375 27.7874 20.1375 26.8312H20.1938L20.25 26.7187C20.3063 26.6624 20.4188 26.5499 20.475 26.4374C20.925 25.8749 21.0375 25.1437 20.9813 24.4687L22.4438 19.9687C22.6125 19.4624 21.9375 19.0124 21.4313 19.3499Z" fill="white" />
                            </svg>
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
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M30.0937 21.8251L29.6437 21.6001L30.2062 21.2626C31.3312 20.5876 31.95 19.4063 31.95 18.0563C31.95 16.7626 31.2187 15.5813 30.0937 14.9063L28.9125 14.2313L30.2062 13.4438C31.3312 12.7688 31.95 11.5876 31.95 10.2376C31.95 8.94385 31.2187 7.7626 30.0937 7.14385L19.9125 1.4626C18.7875 0.843848 17.3812 0.843848 16.3125 1.4626L5.84999 7.5376C4.72499 8.2126 4.04999 9.39385 4.04999 10.6876C4.04999 11.9813 4.72499 13.2188 5.84999 13.8376L7.08749 14.5688L5.84999 15.3001C4.72499 15.9751 4.04999 17.1563 4.04999 18.4501C4.04999 19.7438 4.72499 20.9813 5.84999 21.6001L6.35624 21.8813L5.84999 22.1626C4.72499 22.8376 3.99374 24.0188 3.99374 25.3126C3.99374 26.6626 4.66874 27.8438 5.79374 28.4626L16.1437 34.4813C16.7062 34.8188 17.325 34.9876 18 34.9876C18.675 34.9876 19.35 34.8188 19.9125 34.4251L30.2625 28.1251C31.3875 27.4501 32.0062 26.2688 32.0062 24.9188C31.95 23.6251 31.275 22.4438 30.0937 21.8251ZM6.52499 10.6876C6.52499 10.5188 6.58124 10.0126 7.08749 9.73135L17.55 3.65635C17.8875 3.43135 18.3375 3.43135 18.675 3.65635L28.9125 9.3376C29.4187 9.61885 29.475 10.1251 29.475 10.2938C29.475 10.4626 29.4187 10.9688 28.9125 11.3063L18.6187 17.6626C18.2812 17.8876 17.8312 17.8876 17.4375 17.6626L7.08749 11.6438C6.58124 11.3626 6.52499 10.8563 6.52499 10.6876ZM7.08749 17.4938L9.56249 16.0313L16.1437 19.8563C16.7062 20.1938 17.325 20.3626 18 20.3626C18.675 20.3626 19.35 20.1938 19.9125 19.8001L26.4375 15.8063L28.8562 17.1563C29.3625 17.4376 29.4187 17.9438 29.4187 18.1126C29.4187 18.2813 29.3625 18.7876 28.8562 19.1251L18.6187 25.4251C18.2812 25.6501 17.8312 25.6501 17.4375 25.4251L7.08749 19.4063C6.58124 19.1251 6.52499 18.6188 6.52499 18.4501C6.52499 18.2813 6.58124 17.7751 7.08749 17.4938ZM28.9125 25.9876L18.6187 32.3438C18.2812 32.5688 17.8312 32.5688 17.4375 32.3438L7.08749 26.3251C6.58124 26.0438 6.52499 25.5376 6.52499 25.3688C6.52499 25.2001 6.58124 24.6938 7.08749 24.4126L8.83124 23.4001L16.2 27.6751C16.7625 28.0126 17.3812 28.1813 18.0562 28.1813C18.7312 28.1813 19.4062 28.0126 19.9687 27.6188L27.225 23.1751L28.9125 24.0751C29.4187 24.3563 29.475 24.8626 29.475 25.0313C29.475 25.2001 29.4187 25.7063 28.9125 25.9876Z" fill="white" />
                            </svg>
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
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.725 16.3124C4.89375 16.3124 5.11875 16.2562 5.2875 16.1999L11.5312 14.0062C12.2062 13.7812 12.5437 13.0499 12.3187 12.3749C12.0937 11.6999 11.3625 11.3624 10.6875 11.5874L6.80625 12.9374C8.6625 8.0999 13.3875 4.8374 18.7875 4.8374C24.6938 4.8374 29.8125 8.7749 31.275 14.3999C31.4437 15.0749 32.1187 15.4687 32.7937 15.2999C33.4687 15.1312 33.8625 14.4562 33.6938 13.7812C31.95 7.03115 25.8187 2.30615 18.7312 2.30615C12.4312 2.30615 6.8625 6.01865 4.55625 11.5874L3.375 8.2124C3.15 7.5374 2.41875 7.1999 1.74375 7.4249C1.06875 7.6499 0.73125 8.38115 0.95625 9.05615L3.09375 15.1874C3.43125 15.9187 4.05 16.3124 4.725 16.3124Z" fill="white" />
                                <path d="M34.9312 27.9562L32.625 21.9375C32.4562 21.5437 32.175 21.2062 31.7812 21.0375C31.3875 20.8687 30.9375 20.8687 30.5437 21.0375L24.3562 23.3999C23.6812 23.6249 23.4 24.3562 23.625 25.0312C23.85 25.7062 24.5813 25.9875 25.2563 25.7625L29.1375 24.3C26.8875 28.4062 22.5 31.1062 17.6062 31.1062C12.0375 31.1062 7.14375 27.6187 5.4 22.4437C5.175 21.7687 4.44375 21.4312 3.825 21.6562C3.15 21.8812 2.8125 22.6124 3.0375 23.2312C5.11875 29.4187 10.9687 33.5812 17.6062 33.5812C23.4 33.5812 28.6312 30.375 31.275 25.425L32.5688 28.8562C32.7375 29.3625 33.2437 29.6437 33.75 29.6437C33.9187 29.6437 34.0312 29.6437 34.2 29.5312C34.875 29.3625 35.1562 28.6312 34.9312 27.9562Z" fill="white" />
                            </svg>
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
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.2063 1.9126H5.0625C3.15 1.9126 1.575 3.4876 1.575 5.4001V12.5438C1.575 14.4563 3.15 16.0313 5.0625 16.0313H12.2063C14.1188 16.0313 15.6938 14.4563 15.6938 12.5438V5.45635C15.75 3.4876 14.175 1.9126 12.2063 1.9126ZM13.2188 12.6001C13.2188 13.1626 12.7688 13.6126 12.2063 13.6126H5.0625C4.5 13.6126 4.05 13.1626 4.05 12.6001V5.45635C4.05 4.89385 4.5 4.44385 5.0625 4.44385H12.2063C12.7688 4.44385 13.2188 4.89385 13.2188 5.45635V12.6001Z" fill="white" />
                                <path d="M30.9375 1.9126H23.7937C21.8812 1.9126 20.3062 3.4876 20.3062 5.4001V12.5438C20.3062 14.4563 21.8812 16.0313 23.7937 16.0313H30.9375C32.85 16.0313 34.425 14.4563 34.425 12.5438V5.45635C34.425 3.4876 32.85 1.9126 30.9375 1.9126ZM31.95 12.6001C31.95 13.1626 31.5 13.6126 30.9375 13.6126H23.7937C23.2312 13.6126 22.7812 13.1626 22.7812 12.6001V5.45635C22.7812 4.89385 23.2312 4.44385 23.7937 4.44385H30.9375C31.5 4.44385 31.95 4.89385 31.95 5.45635V12.6001Z" fill="white" />
                                <path d="M12.2063 19.8564H5.0625C3.15 19.8564 1.575 21.4314 1.575 23.3439V30.4877C1.575 32.4002 3.15 33.9752 5.0625 33.9752H12.2063C14.1188 33.9752 15.6938 32.4002 15.6938 30.4877V23.4002C15.75 21.4314 14.175 19.8564 12.2063 19.8564ZM13.2188 30.5439C13.2188 31.1064 12.7688 31.5564 12.2063 31.5564H5.0625C4.5 31.5564 4.05 31.1064 4.05 30.5439V23.4002C4.05 22.8377 4.5 22.3877 5.0625 22.3877H12.2063C12.7688 22.3877 13.2188 22.8377 13.2188 23.4002V30.5439Z" fill="white" />
                                <path d="M30.9375 19.8564H23.7937C21.8812 19.8564 20.3062 21.4314 20.3062 23.3439V30.4877C20.3062 32.4002 21.8812 33.9752 23.7937 33.9752H30.9375C32.85 33.9752 34.425 32.4002 34.425 30.4877V23.4002C34.425 21.4314 32.85 19.8564 30.9375 19.8564ZM31.95 30.5439C31.95 31.1064 31.5 31.5564 30.9375 31.5564H23.7937C23.2312 31.5564 22.7812 31.1064 22.7812 30.5439V23.4002C22.7812 22.8377 23.2312 22.3877 23.7937 22.3877H30.9375C31.5 22.3877 31.95 22.8377 31.95 23.4002V30.5439Z" fill="white" />
                            </svg>
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
