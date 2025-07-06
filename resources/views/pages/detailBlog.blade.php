<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $blog->title }}</title>
    @include('includes.style')
</head>

<body>
    <main>
        <x-sidebar />
        <div class="main-content">
            <article class="project-item active" data-page="portofolio">
                <header>
                    <h2 class="h2 article-title">{{ $blog->title }}</h2>
                </header>
                {{-- image --}}
                <section class="mapbox" data-mapbox>
                    <figure>
                        <img style="width: 100%;object-fit: cover" src="{{ asset('storage/' . $blog->image) }}"
                            alt="">
                    </figure>
                </section>
                <section class="about-text">
                    {!! $blog->description !!}
                </section>

            </article>
        </div>
    </main>
    @include('includes.script')
</body>

</html>
