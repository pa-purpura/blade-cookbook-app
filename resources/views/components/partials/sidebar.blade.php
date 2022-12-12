<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user">
        <div>
            <p class="app-sidebar__user-name">welcome, </p>
            {{-- <p class="app-sidebar__user-name">welcome, {{ auth()->user()->name}}</p> --}}
            <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
    </div>
    <ul class="app-menu">        
        <li>
            <x-partials.sidebar-item href='/dashboard' class="fa fa-dashboard">Dashboard</x-partials.sidebar-item>
            <x-partials.sidebar-item href='/user' class="fa fa-users"  >Users</x-partials.sidebar-item>
            <x-partials.sidebar-item href='/setting' class="fa fa-cogs">Setting</x-partials.sidebar-item>
        </li>
        {{-- <li class="treeview is-expanded"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">UI Elements</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item active" href="bootstrap-components.html"><i class="icon fa fa-circle-o"></i> Bootstrap Elements</a></li>
            <li><a class="treeview-item" href="https://fontawesome.com/v4.7.0/icons/" target="_blank" rel="noopener"><i class="icon fa fa-circle-o"></i> Font Icons</a></li>
            <li><a class="treeview-item" href="ui-cards.html"><i class="icon fa fa-circle-o"></i> Cards</a></li>
            <li><a class="treeview-item" href="widgets.html"><i class="icon fa fa-circle-o"></i> Widgets</a></li>
          </ul>
        </li> --}}
    </ul>
</aside>