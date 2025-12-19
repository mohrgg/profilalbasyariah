<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }} | SMK Al-Basyariah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        h1, h2, h3, .font-outfit { font-family: 'Outfit', sans-serif; }
        .glass { background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); }
        .prose img { border-radius: 1.5rem; margin: 2rem 0; }
        .prose p { margin-bottom: 1.5rem; line-height: 1.8; color: #475569; }
    </style>
</head>
<body class="bg-slate-50 text-slate-900">

    <!-- Navbar -->
    <nav class="fixed top-0 w-full z-50 glass border-b border-white/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex items-center gap-2">
                    <a href="/" class="flex items-center gap-2">
                        <div class="w-10 h-10 bg-emerald-600 rounded-lg flex items-center justify-center text-white">
                            <i class="fas fa-graduation-cap text-xl"></i>
                        </div>
                        <span class="font-outfit font-bold text-xl tracking-tight text-emerald-900 uppercase">SMK AL BASYARIAH</span>
                    </a>
                </div>
                <div class="flex items-center gap-8">
                    <a href="/" class="text-sm font-semibold text-emerald-600 hover:text-emerald-700 flex items-center gap-2">
                        <i class="fas fa-arrow-left text-xs"></i> Kembali ke Beranda
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main class="pt-32 pb-24">
        <div class="max-w-4xl mx-auto px-4">
            <!-- Article Header -->
            <div class="mb-12 text-center">
                <div class="flex justify-center items-center gap-4 text-emerald-600 font-bold text-sm uppercase tracking-widest mb-6">
                    <span>Berita & Informasi</span>
                    <span class="w-1 h-1 bg-slate-300 rounded-full"></span>
                    <span>{{ $post->published_at ? $post->published_at->format('d M Y') : 'Draft' }}</span>
                </div>
                <h1 class="text-4xl lg:text-6xl font-outfit font-bold text-slate-900 leading-tight mb-8">{{ $post->title }}</h1>
            </div>

            <!-- Featured Image -->
            <div class="mb-16 relative aspect-[21/9] rounded-[3rem] overflow-hidden shadow-2xl">
                <img src="{{ $post->thumbnail ? asset('storage/' . $post->thumbnail) : 'https://placehold.co/1200x600/10b981/ffffff?text=Berita' }}" class="w-full h-full object-cover" alt="{{ $post->title }}">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/20 to-transparent"></div>
            </div>

            <!-- Article Content -->
            <article class="prose prose-emerald prose-lg max-w-none text-slate-600 bg-white p-8 lg:p-16 rounded-[3rem] border border-slate-100 shadow-sm leading-relaxed">
                {!! $post->content !!}
            </article>

            <!-- Back Footer -->
            <div class="mt-16 flex justify-center">
                <a href="/" class="px-8 py-4 bg-emerald-600 text-white rounded-2xl font-bold hover:bg-emerald-700 transition-all shadow-xl shadow-emerald-200 flex items-center gap-3 group">
                    <i class="fas fa-arrow-left group-hover:-translate-x-1 transition-transform"></i>
                    Kembali ke Beranda
                </a>
            </div>
        </div>
    </main>

    <!-- Footer Simple -->
    <footer class="bg-slate-900 py-12 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p class="text-slate-500 text-sm font-medium">&copy; 2024 SMK AL BASYARIAH. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
