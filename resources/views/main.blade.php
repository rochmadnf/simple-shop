<!DOCTYPE html>
<html lang="id">

<head>
    <!-- meta data -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="simple shop untuk ujicoba lowongan pekerjaan pada PT. MAHAPURNA MANDIRI UTAMA" />
    <meta name="author" content="Rochmad Nurul Fahmi" />

    <title>{{ env('APP_NAME') }}</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css"
        integrity="sha512-O03ntXoVqaGUTAeAmvQ2YSzkCvclZEcPQu1eqloPaHfJ5RuNGiS4l+3duaidD801P50J28EHyonCV06CUlTSag=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- style -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    {{-- component header --}}
    <header class="flex bg-white shadow-md shadow-slate-100 py-3 px-5 justify-between items-center">
        {{-- left --}}
        <div class="logo">
            <a href="/">
                {{ env('APP_NAME') }}
            </a>
        </div>

        {{-- middle --}}
        <div class="hidden md:flex rounded-full justify-around items-center pl-2 pr-4 border-2 border-gray-100">
            <label for="search" class="rounded-full bg-blue-400 p-1">
                <x-phosphor-magnifying-glass-bold class="h-4 w-4 text-white" />
            </label>
            <input type="search" name="search" id="search" placeholder="Cari body serum">
        </div>

        {{-- right --}}
        <div class="actions">
            <div class="action">
                <x-phosphor-shopping-cart-fill />
                <span class="counter">5</span>
            </div>
            <div class="action">
                <x-phosphor-user-circle-fill />
            </div>
        </div>
    </header>

    <main class="mt-2 py-10 px-0">
        <div class="heading">
            <h1 class="flex justify-center items-center text-3xl text-gray-700 font-semibold">Semua Produk</h1>
        </div>

        <section class="products" id="products">
            <x-skeleton-card />
            <x-skeleton-card />
            <x-skeleton-card />
            <x-skeleton-card />
        </section>

    </main>

    <footer>
        Test Case &copy; 2022 by Rochmad Nurul Fahmi
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"
        integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
