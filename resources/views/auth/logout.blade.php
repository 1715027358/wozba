<ul class="dropdown-menu" role="menu">
    <li>
        <a href="{{ url('/admin/logout') }}"
           onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
            Logout
        </a>

        <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </li>
</ul>
