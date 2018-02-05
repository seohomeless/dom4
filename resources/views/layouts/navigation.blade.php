
<li class="nav-link active" ><a href="#">О нас</a></li>
<li class="nav-link active" ><a href="#">Акции</a></li>
<li class="nav-link active" ><a href="#">Гарантии</a></li>
<li class="nav-link active" ><a href="#">Кредит</a></li>
<li class="nav-link active" ><a href="#">Оплата/Доставка</a></li>
<li class="nav-link active" ><a href="#">Контакты</a></li>
@guest
    <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
    <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
@else
    <li class="dropdown">
        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <ul class="dropdown-menu">
            <li>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </li>
@endguest
