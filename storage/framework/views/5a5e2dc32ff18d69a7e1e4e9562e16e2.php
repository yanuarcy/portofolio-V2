<article class="contact" data-page="contact">
    <header>
        <h2 class="h2 article-title">Contact</h2>
    </header>

    <section class="mapbox" data-mapbox>
        <figure>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d247.32659404489442!2d112.80488017916794!3d-7.3285507510520675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1751784761503!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                width="400" height="300" loading="lazy"></iframe>
        </figure>
    </section>

    <section class="contact-form">
        <h3 class="h3 form-title">Get In Touch</h3>

        <form action="<?php echo e(route('contact.send')); ?>" method="POST" class="form" data-form>
            <?php echo csrf_field(); ?>
            <div class="input-wrapper">
                <input type="text" name="fullname" class="form-input" placeholder="Full Name" required
                    data-form-input />

                <input type="email" name="email" class="form-input" placeholder="Email Address" required
                    data-form-input />
            </div>

            <textarea name="message" class="form-input" placeholder="Your Message" required data-form-input></textarea>

            <button class="form-btn" type="submit" disabled data-form-btn>
                <ion-icon name="paper-plane"></ion-icon>
                <span>Send Message</span>
            </button>
        </form>
    </section>
</article>



<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('[data-form]');
        const formInputs = document.querySelectorAll('[data-form-input]');
        const formBtn = document.querySelector('[data-form-btn]');

        // Enable/disable button based on form validation
        function checkFormValidity() {
            let isValid = true;
            formInputs.forEach(input => {
                if (!input.value.trim()) {
                    isValid = false;
                }
            });
            formBtn.disabled = !isValid;
        }

        // Add event listeners to inputs
        formInputs.forEach(input => {
            input.addEventListener('input', checkFormValidity);
            input.addEventListener('blur', checkFormValidity);
        });

        // Handle form submission dengan AJAX dan SweetAlert
        form.addEventListener('submit', async function(e) {
            e.preventDefault();

            // Disable button and show loading state
            formBtn.disabled = true;
            const originalText = formBtn.querySelector('span').textContent;
            formBtn.querySelector('span').textContent = 'Mengirim...';

            try {
                const formData = new FormData(form);

                const response = await fetch('/contact', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                });

                const result = await response.json();

                if (result.success) {
                    // Show success message with SweetAlert
                    await Swal.fire({
                        title: 'Berhasil!',
                        text: result.message,
                        icon: 'success',
                        confirmButtonText: 'OK',
                        confirmButtonColor: '#667eea',
                        showClass: {
                            popup: 'animate__animated animate__fadeInDown'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOutUp'
                        }
                    });

                    // Reset form
                    form.reset();
                    checkFormValidity();
                } else {
                    await Swal.fire({
                        title: 'Error!',
                        text: result.message,
                        icon: 'error',
                        confirmButtonText: 'OK',
                        confirmButtonColor: '#e74c3c'
                    });
                }
            } catch (error) {
                console.error('Error:', error);
                await Swal.fire({
                    title: 'Error!',
                    text: 'Terjadi kesalahan jaringan. Silakan coba lagi.',
                    icon: 'error',
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#e74c3c'
                });
            } finally {
                // Reset button
                formBtn.querySelector('span').textContent = originalText;
                checkFormValidity();
            }
        });

        // Initial check
        checkFormValidity();
    });
</script>
<?php /**PATH D:\Code\VS Code\00- Template\src\Laravel\Portofolio V2\admin\resources\views/components/contact.blade.php ENDPATH**/ ?>