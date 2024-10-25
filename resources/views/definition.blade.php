<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Definition Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white font-sans">
    <div class="flex flex-col items-center justify-center min-h-screen px-4 sm:px-8"> <!-- Added padding for mobile -->
        <!-- Header Kata Dicari -->
        <div class="text-center mb-8 mt-16 md:mt-12"> <!-- Added top margin -->
            @if(isset($definition))
                <h1 class="text-4xl sm:text-5xl font-bold mb-6">{{ $definition->word }}</h1> <!-- Kata yang dicari -->
                <div class="flex space-x-2 justify-center">
                    <span class="bg-gray-800 px-3 py-1 rounded-full text-sm">Definition</span>
                    <span class="bg-gray-800 px-3 py-1 rounded-full text-sm">Result</span>
                </div>
        </div>

        <!-- Deskripsi Definisi Tambahan -->
        <div class="w-full sm:w-2/3">
            <h2 class="text-2xl sm:text-3xl font-bold mb-4">Definisi</h2>
            <p class="text-sm sm:text-base leading-7">{{
                preg_match('/(.*?[\.\!\?])\s/', strip_tags(html_entity_decode($definition->arti)), $matches)
                ? $matches[1]
                : strip_tags(html_entity_decode($definition->arti))
            }}</p>
        </div>
        <!-- Pesan Error Jika Tidak Ditemukan -->
        @else
        <div class="w-full text-center text-red-400">
            <h1 class="text-5xl font-bold mb-2">Kata tidak ditemukan</h1>
        </div>
        @endif
    </div>
</body>
</html>
