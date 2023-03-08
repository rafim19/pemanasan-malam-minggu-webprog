<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url(asset('css/style.css')) }}">
    {{-- CDN Bulma --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Home</title>
</head>
<body>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <div class="navbar-item" href="#">
                {{-- <img class="navbar-logo" src="{{ asset('pics/logo_binus.png') }}" width="100%" height="100%" alt="Binus Logo"> --}}
                <strong>WEB PROG</strong>
            </div>
        </div>

        <div class="navbar-menu">
            <div class="navbar-end">
                <div class="navbar-item">
                    <a class="button is-link is-rounded is-hovered is-size-7">
                        Bingung naro apa di navbarnya
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <main class="is-flex container is-fluid" style="color: white">
        <div class="is-flex is-justify-content-space-around is-align-items-center container is-fluid">
            {{-- About us --}}
            <div>
                <div class="mb-4">
                    <h1 class="is-size-3">NANTI DIISI NAMA</h1>
                    <h6 class="is-size-5">Wanted $120.000</h6>
                </div>
                <div class="mb-4">
                    <p>Summary tentang diri kita</p>
                </div>
                <div class="mb-4">
                    <p>Hobby kita</p>
                    <p class="ml-3">List hobby kita (ide = keknya bagus pake icon-icon gitu nanti)</p>
                </div>
                <div class="mb-4">
                    <p>Mata kuliah favorit kita</p>
                    <p class="ml-3">List mata kuliah favorit</p>
                </div>
                <div class="mb-4">
                    <p>dll. Kalo cukup. Kalo ga cukup taro di page profile</p>
                </div>
                <a class="button is-warning is-rounded" href="#">Profile</a>
            </div>
            {{-- Gambar kita --}}
            <div>
                Nanti diisi gambar user yang dipilih
            </div>
            <div>
                Nanti diisi gambar user yang tidak dipilih
            </div>
        </div>
    </main>
    <footer>
        <div class="has-text-centered">
            <p>
                Bingung mau nulis apa, palingan ntar logo-logo socmed
            </p>
        </div>
    </footer>
    <script src="../js/script.js"></script>
</body>
</html>