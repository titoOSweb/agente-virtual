<nav id="sidebar">
    <div id="main-menu">
        <ul class="sidebar-nav">
            <li class="<?= Request::is('*dashboard') ? 'current' : '' ?>">
                <a href="/dashboard"><i class="fa fa-dashboard"></i><span class="sidebar-text">Dashboard</span></a>
            </li>

            <li class="<?= Request::is('*silabas*') ? 'current' : '' ?>">
                <a href="/dashboard/silabas"><i class="glyphicon glyphicon-font"></i><span class="sidebar-text">Modulo de Sílabas</span></a>
            </li>

            <li class="<?= Request::is('*figuras*') ? 'current' : '' ?>">
                <a href="/dashboard/figuras"><i class="glyphicon glyphicon-bold"></i><span class="sidebar-text">Figuras + Letras</span></a>
            </li>

            <li class="<?= Request::is('*sorp*') ? 'current' : '' ?>">
                <a href="/dashboard/sorp"><i class="glyphicon glyphicon-italic"></i><span class="sidebar-text">Singular y plural</span></a>
            </li>

            <li class="<?= Request::is('*camino*') ? 'current' : '' ?>">
                <a href="/dashboard/camino"><i class="glyphicon glyphicon-text-height"></i><span class="sidebar-text">Camino de letras</span></a>
            </li>
                     
            <br>
        </ul>
    </div>
</nav>