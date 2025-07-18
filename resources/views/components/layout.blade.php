<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel-Position</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" 
        href="https://fonts.googleapis.com/css2?family=Hanken-Grotesk:wght@400;500;600&display=swap">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-black text-white font-hanken-Grotesk">
    
    <div>
        <nav class="flex justify-between items-center  py-4 border-b border-white/20">
            <div >
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/images.png')}}" alt="" class="w-12 h-12 object-contain rounded-full shadow">
                </a>
            </div>
            <div class="space-x-6 font-bold">
                <a href="">Jobs</a>
                <a href="">Carrière</a>
                <a href="">Salaires</a>
                <a href="">Compagnies</a>
            </div>

            @auth
                <div class="space-x-6 font-bold flex">
                    <a href="/jobs/create">Post Job</a>

                    <form method="POST" action="/logout">
                    @csrf
                    @method('DELETE')
                    <button>Déconnectez-vous </button>
                </form>
                </div>

               
            @endauth

            @guest
                <div class="space-x-6 font-bold">
                    <a href="/register">Inscription</a>
                    <a href="/login">Connexion</a>
                </div>
            @endguest
            
        </nav>
        <main class="mt-10 max-w-[986px] mx-auto">
            {{$slot}}
        </main>
    </div>
</body>
</html>