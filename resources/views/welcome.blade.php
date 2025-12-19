<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Al-Basyariah | Cerdas, Terampil, Tangguh</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        h1, h2, h3, .font-outfit { font-family: 'Outfit', sans-serif; }
        .glass { background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); }
    </style>
</head>
<body class="bg-slate-50 text-slate-900">

    <!-- Navbar -->
    <nav class="fixed top-0 w-full z-50 glass border-b border-white/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex items-center gap-2">
                    <div class="w-10 h-10 bg-emerald-600 rounded-lg flex items-center justify-center text-white">
                        <i class="fas fa-graduation-cap text-xl"></i>
                    </div>
                    <span class="font-outfit font-bold text-xl tracking-tight text-emerald-900 uppercase">SMK AL BASYARIAH</span>
                </div>
                <div class="hidden md:flex items-center gap-8">
                    <a href="#history" class="text-sm font-medium text-slate-600 hover:text-emerald-600 transition-colors">Sejarah</a>
                    <a href="#vision" class="text-sm font-medium text-slate-600 hover:text-emerald-600 transition-colors">Visi & Misi</a>
                    <a href="#news" class="text-sm font-medium text-slate-600 hover:text-emerald-600 transition-colors">Berita</a>
                    <a href="#programs" class="text-sm font-medium text-slate-600 hover:text-emerald-600 transition-colors">Kompetensi</a>
                    <a href="/admin" class="px-5 py-2.5 bg-emerald-600 text-white rounded-full text-sm font-semibold hover:bg-emerald-700 transition-all shadow-lg shadow-emerald-200">Portal Admin</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <header class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden min-h-[80vh] flex items-center">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/gambar1.jpg') }}" class="w-full h-full object-cover" alt="Hero">
            <div class="absolute inset-0 bg-gradient-to-r from-emerald-950/90 to-emerald-900/40"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 relative z-10 w-full">
            <div class="max-w-3xl" data-aos="fade-right">
                <span class="inline-block px-4 py-1.5 bg-emerald-500/20 text-emerald-300 rounded-full text-xs font-bold tracking-widest uppercase mb-6">Masa Depan Cerah</span>
                <h1 class="text-5xl lg:text-7xl font-outfit font-bold text-white mb-8 leading-tight">Membangun Masa Depan <span class="text-emerald-400">Gemilang</span></h1>
                <p class="text-lg text-emerald-50/80 mb-10 leading-relaxed max-w-2xl">SMK Al-Basyariah berdedikasi mencetak cendekiawan muslim yang bertakwa, berakhlak mulia, cerdas, terampil, dan tangguh untuk tantangan global.</p>
                <div class="flex flex-wrap gap-4">
                    <a href="#news" class="px-8 py-4 bg-white text-emerald-900 rounded-2xl font-bold hover:bg-emerald-50 transition-all shadow-xl">Jelajahi Berita</a>
                    <a href="#about" class="px-8 py-4 bg-emerald-700/50 backdrop-blur-md text-white border border-white/20 rounded-2xl font-bold hover:bg-emerald-700/70 transition-all">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </header>

    <!-- News Section -->
    <section id="news" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
                <div data-aos="fade-up">
                    <h2 class="text-sm font-bold text-emerald-600 uppercase tracking-widest mb-3">Update Terbaru</h2>
                    <h3 class="text-4xl font-outfit font-bold text-slate-900">Berita & Informasi</h3>
                </div>
                <p class="text-slate-500 max-w-md" data-aos="fade-up" data-aos-delay="100">Ikuti perkembangan terbaru mengenai kegiatan, prestasi, dan pengumuman resmi dari SMK Al-Basyariah.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse($posts as $post)
                    <a href="{{ route('posts.show', $post->slug) }}" class="group block" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <article class="bg-slate-50 rounded-3xl overflow-hidden border border-slate-100 group-hover:border-emerald-200 transition-all group-hover:shadow-2xl group-hover:shadow-emerald-100/50 h-full">
                            <div class="aspect-video relative overflow-hidden">
                                <img src="{{ $post->thumbnail ? asset('storage/' . $post->thumbnail) : 'https://placehold.co/600x400/10b981/ffffff?text=Berita' }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="{{ $post->title }}">
                                <div class="absolute top-4 left-4">
                                    <span class="px-3 py-1 bg-white/90 backdrop-blur-sm text-emerald-700 text-[10px] font-bold uppercase rounded-full">Informasi</span>
                                </div>
                            </div>
                            <div class="p-8">
                                <div class="flex items-center gap-2 text-xs text-slate-400 mb-4 font-semibold">
                                    <i class="far fa-calendar"></i>
                                    <span>{{ $post->published_at ? $post->published_at->format('d M Y') : 'Draft' }}</span>
                                </div>
                                <h4 class="text-xl font-bold text-slate-900 mb-4 group-hover:text-emerald-600 transition-colors line-clamp-2">{{ $post->title }}</h4>
                                <div class="text-slate-500 text-sm line-clamp-3 mb-6">
                                    {!! strip_tags($post->content) !!}
                                </div>
                                <div class="inline-flex items-center gap-2 text-emerald-600 font-bold text-sm group/link">
                                    Baca Selengkapnya 
                                    <i class="fas fa-arrow-right text-[10px] group-hover/link:translate-x-1 transition-transform"></i>
                                </div>
                            </div>
                        </article>
                    </a>
                @empty
                    <div class="col-span-3 py-20 text-center bg-slate-50 rounded-3xl border-2 border-dashed border-slate-200">
                        <i class="far fa-newspaper text-5xl text-slate-300 mb-4"></i>
                        <p class="text-slate-500 font-medium">Belum ada berita yang dipublikasikan.</p>
                        <a href="/admin" class="mt-4 inline-block text-emerald-600 font-bold hover:underline">Tambah Berita Pertama</a>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- History -->
    <section id="history" class="py-24 bg-slate-50 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="relative" data-aos="fade-right">
                    <div class="absolute -top-10 -left-10 w-64 h-64 bg-emerald-200/50 rounded-full blur-3xl -z-10"></div>
                    <img src="{{ asset('images/gambar1.jpg') }}" class="rounded-[2.5rem] shadow-2xl relative z-10" alt="Sejarah">
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-emerald-600 rounded-3xl flex items-center justify-center text-white shadow-xl z-20" data-aos="zoom-in" data-aos-delay="300">
                        <div class="text-center">
                            <span class="block text-3xl font-bold">20+</span>
                            <span class="text-[10px] font-bold uppercase tracking-widest">Tahun Bakti</span>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-left">
                    <h2 class="text-sm font-bold text-emerald-600 uppercase tracking-widest mb-3">Awal Mula Kami</h2>
                    <h3 class="text-4xl font-outfit font-bold text-slate-900 mb-8 leading-tight">Sejarah Yayasan Pendidikan <br>Islam Al-Basyariah</h3>
                    <div class="space-y-6 text-slate-600 leading-relaxed">
                        <p>Yayasan Pendidikan Islam Al-Basyariah didirikan oleh <strong>Bpk. H. Asmat Basyar dan Ibunda Hj. Marhani</strong>, sosok yang berdedikasi untuk pembangunan masyarakat Citayam.</p>
                        <p>Berawal dari klinik kesehatan di tahun 2000, visi besar beliau berkembang menjadi sarana pendidikan formal pada tahun 2004. Kini, SMK Al-Basyariah telah bertransformasi menjadi salah satu sekolah unggulan yang dipercaya masyarakat dengan berbagai program keahlian yang relevan dengan industri.</p>
                    </div>
                    <div class="mt-10 grid grid-cols-2 gap-6">
                        <div class="p-6 bg-white rounded-2xl shadow-sm border border-slate-100 italic font-medium text-slate-700">
                            "Mencetak umat yang cerdas dan berakhlakul karimah."
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision & Mission -->
    <section id="vision" class="py-24 bg-emerald-900 text-white relative overflow-hidden">
        <div class="absolute top-0 right-0 w-1/2 h-full bg-emerald-800/30 skew-x-12 translate-x-32"></div>
        <div class="max-w-7xl mx-auto px-4 relative z-10">
            <div class="text-center mb-20" data-aos="fade-up">
                <h2 class="text-emerald-400 font-bold uppercase tracking-widest mb-4">Arah & Tujuan</h2>
                <h3 class="text-4xl lg:text-5xl font-outfit font-bold">Visi & Misi Pendidikan</h3>
            </div>
            <div class="grid lg:grid-cols-2 gap-12">
                <div class="p-10 bg-white/10 backdrop-blur-md rounded-[2.5rem] border border-white/10 group hover:bg-white/20 transition-all" data-aos="fade-right">
                    <i class="fas fa-eye text-4xl text-emerald-400 mb-8"></i>
                    <h4 class="text-2xl font-bold mb-6">Visi SMK Al-Basyariah</h4>
                    <p class="text-emerald-50/80 leading-relaxed text-lg italic">"Mewujudkan cendekiawan muslim yang bertakwa, berakhlak mulia, cerdas, terampil, tangguh, dan bertanggung jawab atas pembangunan umat."</p>
                </div>
                <div class="p-10 bg-white/10 backdrop-blur-md rounded-[2.5rem] border border-white/10 group hover:bg-white/20 transition-all" data-aos="fade-left">
                    <i class="fas fa-bullseye text-4xl text-emerald-400 mb-8"></i>
                    <h4 class="text-2xl font-bold mb-6">Misi SMK Al-Basyariah</h4>
                    <p class="text-emerald-50/80 leading-relaxed text-lg">Mewujudkan sistem pendidikan dan pengetahuan teknologi yang berkualitas tinggi di bidang ilmu pengetahuan umum, serta menjadikan sekolah Al-Basyariah sebagai sekolah unggulan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs -->
    <section id="programs" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-emerald-600 font-bold uppercase tracking-widest mb-3 text-sm">Pilihan Keahlian</h2>
                <h3 class="text-4xl font-outfit font-bold text-slate-900 mb-4">Kompetensi Keahlian</h3>
                <p class="text-slate-500 max-w-2xl mx-auto">Pilih jalur masa depanmu dengan beragam program keahlian unggulan yang dirancang sesuai kebutuhan industri modern.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- MPLB -->
                <div class="group p-8 bg-slate-50 rounded-3xl border border-slate-100 hover:border-emerald-200 hover:bg-white hover:shadow-xl transition-all" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-14 h-14 bg-emerald-100 text-emerald-600 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-emerald-600 group-hover:text-white transition-all">
                        <i class="fas fa-briefcase text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-3">Manajemen Perkantoran</h4>
                    <p class="text-slate-500 text-sm leading-relaxed">MPLB - Layanan Bisnis. Mencetak tenaga profesional di bidang administrasi dan tata kelola bisnis modern.</p>
                </div>

                <!-- AKL -->
                <div class="group p-8 bg-slate-50 rounded-3xl border border-slate-100 hover:border-emerald-200 hover:bg-white hover:shadow-xl transition-all" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-14 h-14 bg-emerald-100 text-emerald-600 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-emerald-600 group-hover:text-white transition-all">
                        <i class="fas fa-calculator text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-3">Akuntansi</h4>
                    <p class="text-slate-500 text-sm leading-relaxed">AKL - Keuangan Lembaga. Mengembangkan keahlian dalam pencatatan keuangan dan analisis data finansial.</p>
                </div>

                <!-- PM -->
                <div class="group p-8 bg-slate-50 rounded-3xl border border-slate-100 hover:border-emerald-200 hover:bg-white hover:shadow-xl transition-all" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-14 h-14 bg-emerald-100 text-emerald-600 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-emerald-600 group-hover:text-white transition-all">
                        <i class="fas fa-shopping-cart text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-3">Pemasaran</h4>
                    <p class="text-slate-500 text-sm leading-relaxed">PM - Bisnis Daring. Mempersiapkan wirausahawan masa depan dengan strategi pemasaran digital yang handal.</p>
                </div>

                <!-- TJKT -->
                <div class="group p-8 bg-slate-50 rounded-3xl border border-slate-100 hover:border-emerald-200 hover:bg-white hover:shadow-xl transition-all" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-14 h-14 bg-emerald-100 text-emerald-600 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-emerald-600 group-hover:text-white transition-all">
                        <i class="fas fa-network-wired text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-3">Teknik Jaringan</h4>
                    <p class="text-slate-500 text-sm leading-relaxed">TJKT - Telekomunikasi. Menguasai infrastruktur jaringan komputer dan sistem komunikasi data.</p>
                </div>

                <!-- PPLG -->
                <div class="group p-8 bg-slate-50 rounded-3xl border border-slate-100 hover:border-emerald-200 hover:bg-white hover:shadow-xl transition-all" data-aos="fade-up" data-aos-delay="500">
                    <div class="w-14 h-14 bg-emerald-100 text-emerald-600 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-emerald-600 group-hover:text-white transition-all">
                        <i class="fas fa-code text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-3">PPLG (RPL)</h4>
                    <p class="text-slate-500 text-sm leading-relaxed">Pengembangan Perangkat Lunak dan Gim. Mencetak programmer dan pengembang aplikasi yang kreatif.</p>
                </div>

                <!-- DKV -->
                <div class="group p-8 bg-slate-50 rounded-3xl border border-slate-100 hover:border-emerald-200 hover:bg-white hover:shadow-xl transition-all" data-aos="fade-up" data-aos-delay="600">
                    <div class="w-14 h-14 bg-emerald-100 text-emerald-600 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-emerald-600 group-hover:text-white transition-all">
                        <i class="fas fa-palette text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-3">DKV</h4>
                    <p class="text-slate-500 text-sm leading-relaxed">Desain Komunikasi Visual. Mengolah kreativitas visual menjadi karya desain yang komunikatif.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Support / Contact Info Card -->
    <section id="about" class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="bg-white rounded-[3rem] p-8 lg:p-16 shadow-xl border border-slate-100 overflow-hidden relative" data-aos="zoom-in">
                <div class="absolute top-0 right-0 w-64 h-64 bg-emerald-50 rounded-full blur-3xl -z-0 -mr-20 -mt-20"></div>
                <div class="relative z-10 grid lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2 class="text-sm font-bold text-emerald-600 uppercase tracking-widest mb-4">Informasi Kontak</h2>
                        <h3 class="text-4xl font-outfit font-bold text-slate-900 mb-8">Siap Memulai <br>Perjalanan Anda?</h3>
                        <div class="space-y-6">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-slate-50 rounded-2xl flex items-center justify-center text-emerald-600 shrink-0">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div>
                                    <h5 class="font-bold text-slate-900">Alamat Sekolah</h5>
                                    <p class="text-slate-500 text-sm">Jl. Raya Pabuaran RT.001 RW.002, Bojong Gede, Bogor</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-slate-50 rounded-2xl flex items-center justify-center text-emerald-600 shrink-0">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div>
                                    <h5 class="font-bold text-slate-900">Telepon / Fax</h5>
                                    <p class="text-slate-500 text-sm">021-87982715</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-slate-50 rounded-2xl flex items-center justify-center text-emerald-600 shrink-0">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div>
                                    <h5 class="font-bold text-slate-900">Email Resmi</h5>
                                    <p class="text-slate-500 text-sm">info@albasyariah.sch.id</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-8 lg:p-12 bg-emerald-900 rounded-[2rem] text-white">
                        <div class="text-center mb-8">
                            <span class="block text-emerald-400 font-bold uppercase tracking-widest text-xs mb-2">Terdaftar Resmi</span>
                            <span class="text-3xl font-outfit font-bold tracking-tight">NPSN: 20232416</span>
                        </div>
                        <div class="space-y-4">
                            <a href="https://www.instagram.com/officialalbasyariah" class="flex items-center justify-between p-4 bg-white/10 hover:bg-white/20 rounded-2xl transition-all group">
                                <span class="font-bold">Instagram Resmi</span>
                                <i class="fab fa-instagram text-xl group-hover:scale-110 transition-transform"></i>
                            </a>
                            <a href="http://www.albasyariah.sch.id" class="flex items-center justify-between p-4 bg-white/10 hover:bg-white/20 rounded-2xl transition-all group">
                                <span class="font-bold">Website Utama</span>
                                <i class="fas fa-globe text-xl group-hover:scale-110 transition-transform"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-900 pt-20 pb-10">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid lg:grid-cols-4 gap-12 mb-20">
                <div class="lg:col-span-2">
                    <div class="flex items-center gap-2 mb-8">
                        <div class="w-10 h-10 bg-emerald-600 rounded-lg flex items-center justify-center text-white">
                            <i class="fas fa-graduation-cap text-xl"></i>
                        </div>
                        <span class="font-outfit font-bold text-2xl tracking-tight text-white uppercase">SMK AL BASYARIAH</span>
                    </div>
                    <p class="text-slate-400 max-w-sm mb-8 leading-relaxed">Jl. Raya Pabuaran RT.001 RW.002, Kel. Rawa Panjang, Kec. Bojong Gede, Kab. Bogor, Jawa Barat 16920</p>
                    <div class="flex gap-4">
                        <a href="#" class="w-12 h-12 rounded-full bg-slate-800 flex items-center justify-center text-white hover:bg-emerald-600 transition-colors shadow-lg"><i class="fab fa-instagram text-xl"></i></a>
                        <a href="#" class="w-12 h-12 rounded-full bg-slate-800 flex items-center justify-center text-white hover:bg-emerald-600 transition-colors shadow-lg"><i class="fab fa-facebook text-xl"></i></a>
                        <a href="#" class="w-12 h-12 rounded-full bg-slate-800 flex items-center justify-center text-white hover:bg-emerald-600 transition-colors shadow-lg"><i class="fab fa-youtube text-xl"></i></a>
                    </div>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-8 uppercase tracking-widest text-sm">Navigasi</h4>
                    <ul class="space-y-4 text-slate-400 font-medium">
                        <li><a href="#history" class="hover:text-emerald-400 transition-colors">Sejarah</a></li>
                        <li><a href="#vision" class="hover:text-emerald-400 transition-colors">Visi & Misi</a></li>
                        <li><a href="#news" class="hover:text-emerald-400 transition-colors">Berita Utama</a></li>
                        <li><a href="#programs" class="hover:text-emerald-400 transition-colors">Kompetensi</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-8 uppercase tracking-widest text-sm">Hubungi Kami</h4>
                    <ul class="space-y-4 text-slate-400 font-medium text-sm">
                        <li class="flex items-center gap-3"><i class="fas fa-phone text-emerald-500"></i> (021) 87982715</li>
                        <li class="flex items-center gap-3"><i class="fas fa-envelope text-emerald-500"></i> info@albasyariah.sch.id</li>
                    </ul>
                </div>
            </div>
            <div class="pt-8 border-t border-slate-800 flex flex-col md:flex-row justify-between items-center gap-6">
                <p class="text-slate-500 text-sm font-medium">&copy; 2024 SMK AL BASYARIAH. All rights reserved.</p>
                <p class="text-slate-500 text-sm font-medium">NPSN: 20232416</p>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100,
            disable: 'mobile'
        });
    </script>
</body>
</html>
