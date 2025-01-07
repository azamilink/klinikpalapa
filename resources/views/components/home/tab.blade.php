 <div class="container mx-auto max-w-6xl">
     <div class="mt-[-150px]">
         <div role="tablist" class="tabs tabs-lifted">
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
         </div>
     </div>
 </div>
