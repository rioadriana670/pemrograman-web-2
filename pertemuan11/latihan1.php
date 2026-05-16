<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu Modern</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-slate-100 min-h-screen flex flex-col items-center justify-center p-4">

    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-8 border border-slate-100">
        
        <h1 class="text-3xl font-bold text-center text-slate-800 mb-2 tracking-wide uppercase">
            Buku Tamu
        </h1>
        <p class="text-sm text-center text-slate-400 mb-8">
            Silakan isi formulir di bawah ini untuk meninggalkan pesan.
        </p>

        <form method="POST" action="simpan.php" class="space-y-5">
            
            <div>
                <label for="nama" class="block text-sm font-medium text-slate-600 mb-1.5">Nama Lengkap</label>
                <input 
                    type="text" 
                    id="nama"
                    name="nama" 
                    placeholder="Masukkan nama Anda" 
                    required
                    class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-slate-700 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                >
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-slate-600 mb-1.5">Alamat Email</label>
                <input 
                    type="email" 
                    id="email"
                    name="email" 
                    placeholder="nama@email.com" 
                    required
                    class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-slate-700 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                >
            </div>

            <div>
                <label for="pesan" class="block text-sm font-medium text-slate-600 mb-1.5">Pesan</label>
                <textarea 
                    id="pesan"
                    name="pesan" 
                    rows="4" 
                    placeholder="Tuliskan pesan atau kesan Anda di sini..." 
                    required
                    class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-slate-700 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 resize-none"
                ></textarea>
            </div>

            <button 
                type="submit" 
                class="w-full bg-slate-900 hover:bg-slate-800 text-white font-semibold py-3 px-4 rounded-xl shadow-md hover:shadow-lg transition duration-200 transform active:scale-[0.98] cursor-pointer text-center"
            >
                Simpan Data
            </button>
            
        </form>
    </div>

</body>
</html>