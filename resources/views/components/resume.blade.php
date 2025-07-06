<article class="resume" data-page="resume">
    <header>
        <h2 class="h2 article-title">Resume</h2>
    </header>

    <section class="timeline">
        <div class="title-wrapper">
            <div class="icon-box">
                <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Education</h3>
        </div>

        <ol class="timeline-list">
            @foreach ($educations as $item)
                <li class="timeline-item">
                    <h4 class="h4 timeline-item-title">{{ $item->name_school }}</h4>

                    <span>{{ \Carbon\Carbon::parse($item->start_year)->format('Y') }}-{{ \Carbon\Carbon::parse($item->end_year)->format('Y') }}</span>

                    <p class="timeline-text">{{ $item->description }}</p>
                </li>
            @endforeach
        </ol>
    </section>

    <section class="timeline">
        <div class="title-wrapper">
            <div class="icon-box">
                <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Experience</h3>
        </div>

        <ol class="timeline-list">
            @foreach ($experiences as $item)
                <li class="timeline-item">
                    <h4 class="h4 timeline-item-title">{{ $item->position }}</h4>

                    <span>{{ \Carbon\Carbon::parse($item->start_year)->format('Y') }}-{{ \Carbon\Carbon::parse($item->end_year)->format('Y') }}</span>

                    <p class="timeline-text">{{ $item->description }}</p>
                </li>
            @endforeach
        </ol>
    </section>

    <section class="skill">
        <h3 class="h3 skills-title">My skills</h3>

        <ul class="skills-list content-card">
            @foreach ($services as $item)
                <li class="skills-item">
                    <div class="title-wrapper">
                        <h5 class="h5">{{ $item->name }}</h5>
                        <data value="80">{{ $item->percentage }}%</data>
                    </div>

                    <div class="skill-progress-bg">
                        <div class="skill-progress-fill" style="width: {{ $item->percentage }}%"></div>
                    </div>
                </li>
            @endforeach
        </ul>
    </section>
</article>
