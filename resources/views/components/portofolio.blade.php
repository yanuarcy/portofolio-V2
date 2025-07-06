<article class="portfolio" data-page="portfolio">
    <header>
        <h2 class="h2 article-title">Portfolio</h2>
    </header>

    <section class="projects">
        <ul class="filter-list">
            <li class="filter-item">
                <button class="active" data-filter-btn>All</button>
            </li>
            @foreach ($services as $item)
                <li class="filter-item">
                    <button data-filter-btn>{{ $item->name }}</button>
                </li>
            @endforeach
        </ul>

        <div class="filter-select-box">
            <button class="filter-select" data-select>
                <div class="select-value" data-selecct-value>Select category</div>

                <div class="select-icon">
                    <ion-icon name="chevron-down"></ion-icon>
                </div>
            </button>

            <ul class="select-list">
                <li class="select-item">
                    <button data-select-item>All</button>
                </li>

                @foreach ($services as $item)
                    <li class="select-item">
                        <button data-select-item>{{ $item->name }}</button>
                    </li>
                @endforeach
            </ul>
        </div>

        <ul class="project-list">
            @foreach ($portofolio as $item)
                <li class="project-item active" data-filter-item
                    data-category="{{ strtolower($item->fieldOfSkill->name) }}">
                    <a href="{{ route('project.show', Crypt::encrypt($item->id)) }}">
                        <figure class="project-img">
                            <div class="project-item-icon-box">
                                <ion-icon name="eye-outline"></ion-icon>
                            </div>

                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}"
                                loading="lazy" />
                        </figure>

                        <h3 class="project-title">{{ $item->name }}</h3>

                        <p class="project-category">{{ $item->fieldOfSkill->name }}</p>
                    </a>
                </li>
            @endforeach
        </ul>
    </section>
</article>
