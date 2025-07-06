<aside class="sidebar" data-sidebar>
    <div class="sidebar-info">
        <figure class="avatar-box">
            <img style="border-radius: 20%; width: 100px; height: 100px; object-fit: cover;" src="{{ asset('storage/' . $user->image) ?? '/assets/images/my-avatar.png' }}" alt="Avatar User"
                width="80" />
        </figure>

        <div class="info-content">
            <h1 style="text-transform: capitalize" class="name" title="User Name">{{ $user->name }}</h1>

            <p class="title">{{ $user->status }}</p>
        </div>

        <button class="info_more-btn" data-sidebar-btn>
            <span>Lihat Kontact</span>

            <ion-icon name="chevron-down"></ion-icon>
        </button>
    </div>

    <div class="sidebar-info_more">
        <div class="separator"></div>

        <ul class="contacts-list">
            <li class="contact-item">
                <div class="icon-box">
                    <ion-icon name="mail-outline"></ion-icon>
                </div>

                <div class="contact-info">
                    <p class="contact-title">E-mail</p>

                    <a href="mailto:richard@example.com" class="contact-link">{{ $user->email }}</a>
                </div>
            </li>

            <li class="contact-item">
                <div class="icon-box">
                    <ion-icon name="phone-portrait-outline"></ion-icon>
                </div>

                <div class="contact-info">
                    <p class="contact-title">Telepon</p>

                    <a href="tel:+12133522795" class="contact-link">{{ $user->phone }}</a>
                </div>
            </li>

            <li class="contact-item">
                <div class="icon-box">
                    <ion-icon name="calendar-outline"></ion-icon>
                </div>

                <div class="contact-info">
                    <p class="contact-title">Kelahiran</p>

                    <time datetime="1982-06-23">{{ \Carbon\Carbon::parse($user->birthdate)->format('d F Y') }}</time>
                </div>
            </li>

            <li class="contact-item">
                <div class="icon-box">
                    <ion-icon name="location-outline"></ion-icon>
                </div>

                <div class="contact-info">
                    <p class="contact-title">Lokasi</p>

                    <address style="text-transform: capitalize">{{ $user->city }}, {{ $user->country }}</address>
                </div>
            </li>
        </ul>

        <div class="separator"></div>

        <ul class="social-list">
            <li class="social-item">
                <a href="#" class="social-link">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a>
            </li>

            <li class="social-item">
                <a href="#" class="social-link">
                    <ion-icon name="logo-twitter"></ion-icon>
                </a>
            </li>

            <li class="social-item">
                <a href="#" class="social-link">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a>
            </li>
        </ul>
    </div>
</aside>
