<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | KawaiiTopUp Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-[#F8FAFC] flex items-center justify-center min-h-screen p-6">

    <div class="w-full max-w-[440px]">
        <div class="bg-white rounded-[2.5rem] shadow-2xl shadow-green-100/50 p-10 border border-gray-50 relative overflow-hidden">
            
            <div class="absolute top-0 right-0 w-32 h-32 bg-green-50 rounded-full -mr-16 -mt-16 opacity-50"></div>

            <div class="text-center mb-10 relative">
                <div class="w-20 h-20 bg-[#4ADE80] rounded-[2rem] flex items-center justify-center mx-auto mb-6 shadow-lg shadow-green-200 transform rotate-3">
                    <span class="text-4xl text-white">🎮</span>
                </div>
                <h1 class="text-2xl font-extrabold text-gray-800 tracking-tight">Admin Panel</h1>
                <p class="text-gray-400 mt-2 text-sm">Ohayou, Admin-san! Please sign in.</p>
            </div>

            <form action="{{ route('login.post') }}" method="POST" class="space-y-6 relative">
                @csrf
                
                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-2 ml-1">Email Address</label>
                    <input type="email" name="email" required
                        class="w-full px-6 py-4 bg-gray-50 border-2 border-transparent rounded-2xl focus:bg-white focus:border-[#4ADE80] focus:ring-0 outline-none transition-all text-gray-700 font-medium placeholder:text-gray-300"
                        placeholder="admin@kawaii.com"
                        value="{{ old('email') }}">
                </div>

                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-2 ml-1">Password</label>
                    <input type="password" name="password" required
                        class="w-full px-6 py-4 bg-gray-50 border-2 border-transparent rounded-2xl focus:bg-white focus:border-[#4ADE80] focus:ring-0 outline-none transition-all text-gray-700 font-medium placeholder:text-gray-300"
                        placeholder="••••••••">
                </div>

                @if($errors->any())
                <div class="bg-red-50 text-red-500 p-4 rounded-2xl text-xs font-bold flex items-center gap-2 border border-red-100">
                    <span>⚠️</span> {{ $errors->first() }}
                </div>
                @endif

                <button type="submit" 
                    class="w-full bg-[#1F2937] hover:bg-[#111827] text-white font-bold py-5 rounded-2xl shadow-xl shadow-gray-200 transition-all transform active:scale-[0.98] flex items-center justify-center gap-3 mt-8">
                    <span>Sign In</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
            </form>

            <div class="mt-12 pt-8 border-t border-gray-50 text-center">
                <p class="text-gray-300 text-[10px] font-bold uppercase tracking-[0.2em]">
                    KawaiiTopUp v2.4.0 • System Engine v10.x
                </p>
            </div>
        </div>
        
        <div class="text-center mt-8">
            <a href="/" class="text-gray-400 text-sm font-medium hover:text-green-500 transition-colors">← Back to Homepage</a>
        </div>
    </div>

</body>
</html>