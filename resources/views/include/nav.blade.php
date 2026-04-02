<ul class="nav-menu">
    <li><a href="{{ route('home') }}" class="active">Головна</a></li>
    <li><a href="{{ route('products') }}">Автомобілі</a></li>
    <li><a href="{{ route('about') }}">Про нас</a></li>
    <li><a href="{{ route('contact') }}">Контакти</a></li>
    @auth
    <li><a href="{{ route('admin') }}">Адмін</a></li>
    @endauth
    @guest
    <li><a href="{{ route('login') }}">Увійти в Адмінку</a></li>
    @endguest
    @auth
    <li><form method="POST" action="{{ route('logout') }}" style="display:inline;">
    @csrf
    <button type="submit" style="background:none;border:none;color:var(--text-dark);cursor:pointer;transition: color 0.3s;font-family: 'Segoe UI', Arial, sans-serif;font-weight: 500;font-size: 1rem;">
        Вийти з адмінки
    </button>
</form></li>
@endauth
</ul>
<div class="hamburger">
    <span></span>
    <span></span>
    <span></span>
</div>