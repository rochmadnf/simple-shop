<!DOCTYPE html>
<html lang="id">

<head>
    <!-- meta data -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="simple shop untuk ujicoba lowongan pekerjaan pada PT. MAHAPURNA MANDIRI UTAMA" />
    <meta name="author" content="Rochmad Nurul Fahmi" />

    <title>Simple Shop</title>

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

        <section class="products">
            <div class="card">
                <div class="card-img">
                    <img src="https://via.placeholder.com/300" alt="">
                </div>
                <div class="card-body">
                    <div class="card-title">Brightening Body Serum</div>
                    <div class="card-price">Rp50000</div>
                    <div class="card-buttons">
                        <button class="btn btn-outline btn-outline-primary">Beli Langsung</button>
                        <button class="btn btn-primary">+ Keranjang</button>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer>
        Test Case &copy; 2022 by Rochmad Nurul Fahmi
    </footer>
</body>

</html>
