<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KBBI Query</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white h-screen flex items-center justify-center">
    <div class="text-center w-full px-4"> <!-- Added w-full and px-4 for responsive padding -->
        <h1 class="text-2xl sm:text-3xl font-semibold mb-8">Kata apa yang ingin kamu cari?</h1>
        <form action="{{ route('search') }}" method="POST" class="flex justify-center">
            @csrf
            <div class="relative w-full max-w-sm sm:max-w-md"> <!-- Adjusted for responsiveness -->
                <input type="text" name="word" placeholder="Cari kata..."
                    class="w-full py-3 pl-4 pr-10 bg-gray-800 text-white rounded-full focus:outline-none focus:ring-2 focus:ring-green-500"
                />
                <button type="submit" class="absolute top-1/2 right-2 transform -translate-y-1/2 bg-transparent">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400 hover:text-green-500 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </button>
            </div>
        </form>
    </div>
</body>
</html>
