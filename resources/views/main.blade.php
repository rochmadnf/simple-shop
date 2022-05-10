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

<body class="w-screen h-screen">
    <header class="flex bg-white shadow-md shadow-slate-100 py-3 px-5 justify-between items-center">
        {{-- left --}}
        <div class="logo">Simple Shop</div>

        {{-- right --}}
        <div class="actions">
            <div class="action">
                <x-phosphor-shopping-cart-fill />
                <span class="counter">5</span>
            </div>
            <div class="action">
                <x-phosphor-newspaper-clipping-fill />
            </div>
        </div>
    </header>
</body>

</html>
