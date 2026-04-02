<!-- Contact Section -->
<section class="contact-section">
    <div class="container">
        <div class="contact-content">
            <div class="contact-info">
                <h2>Зв'яжіться з нами</h2>
                <p>Маєте питання або потребуєте допомоги? Ми тут, щоб допомогти. Зв'яжіться з нами будь-яким з наступних способів:</p>
                
                <div class="contact-details">
                    <div class="contact-item">
                        <div class="contact-icon">📧</div>
                        <div>
                            <h3>Електронна пошта</h3>
                            <p>info@premiumsales.com</p>
                            <p>support@premiumsales.com</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">📞</div>
                        <div>
                            <h3>Телефон</h3>
                            <p>(555) 123-4567</p>
                            <p>Пн-Пт: 9:00 - 18:00</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">📍</div>
                        <div>
                            <h3>Адреса</h3>
                            <p>вул. Торгова, 123</p>
                            <p>Київ, 01001</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-form-container">
                <h2>Надішліть нам повідомлення</h2>
                <form class="contact-form" id="contactForm" action="{{ route('contact2') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Ім'я *</label>
                        <input type="text" id="name" name="name" required value=" {{ old('name') }} ">
                    </div>
                    <div class="form-group">
                        <label for="email">Електронна пошта *</label>
                        <input type="email" id="email" name="email" required value=" {{ old('email') }} ">
                    </div>
                    <div class="form-group">
                        <label for="phone">Телефон</label>
                        <input type="tel" id="phone" name="phone" value=" {{ old('phone') }} ">
                    </div>
                    <div class="form-group">
                        <label for="subject">Тема *</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Повідомлення *</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>
                    <!--<button type="submit" class="btn btn-primary">Надіслати повідомлення</button>-->
                    <input type="submit" class="btn btn-primary" value="Надіслати повідомлення">
                </form>
                <div id="formMessage" class="form-message"></div>
            </div>
        </div>
    </div>
</section>