<!-- Contact Section -->
<section class="contact-section">
    <div class="container">
        <div class="contact-content">
            <div class="contact-form-container">
                <h2>Увійти в адмін Панель</h2>
                <form class="contact-form" id="contactForm" action="{{ route('authentification') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Електронна пошта *</label>
                        <input type="email" name="email" required value=" {{ old('email') }} ">
                    </div>
                    <div class="form-group">
                        <label>Пароль *</label>
                        <input type="password" name="password" required>
                    </div>
                    <!--<button type="submit" class="btn btn-primary">Надіслати повідомлення</button>-->
                    <input type="submit" class="btn btn-primary" value="Авторізуватися">
                </form>
                <div id="formMessage" class="form-message"></div>
            </div>
        </div>
    </div>
</section>