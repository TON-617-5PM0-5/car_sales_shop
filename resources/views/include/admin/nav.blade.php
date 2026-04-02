<ul class="nav-menu">
    <li><a href="{{ route('admin') }}" class="active">Адмін панель</a></li>
    <li><a href="{{ route('admin_products') }}">Редагувати Автомобілі</a></li>
    <li><a href="{{ route('admin_categories') }}">Категоріі Автомобілів</a></li>
    <li><a href="{{ route('admin_posts') }}">Глянуть Пости</a></li>
    <li><a href="{{ route('home') }}">Основный сайт</a></li>
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