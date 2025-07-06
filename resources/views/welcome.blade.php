<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <title>kartu Personal Portfolio | ROOT IDN</title>
    @include('includes.style')
</head>

<body>
    <main>
        <x-sidebar />
        <div class="main-content">
            <x-navbar />
            <article class="about active" data-page="about">
                <x-about />
                <x-service />
                <x-testimoni />
                <x-client />
            </article>

            <x-resume />

            <x-portofolio />


            <x-blog />


            <x-contact />
            @yield('content')
            {{-- @include('sweetalert::alert') --}}
        </div>
    </main>
    @include('includes.script')
</body>

</html>
