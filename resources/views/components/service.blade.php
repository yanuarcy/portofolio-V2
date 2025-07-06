<section class="service">
    <h3 class="h3 service-title">What I'm Currently Doing</h3>

    <ul class="service-list">
        @foreach ($services as $item)
            <li class="service-item">
                <div class="service-icon-box">
                    <img src="{{ asset('storage/' . $item->image) }}
    " alt="design icon" width="40" />
                </div>

                <div class="service-content-box">
                    <h4 class="h4 service-item-title">{{ $item->name }}</h4>

                    <p class="service-item-text">{{ $item->description }}</p>
                </div>
            </li>
        @endforeach
    </ul>
</section>
