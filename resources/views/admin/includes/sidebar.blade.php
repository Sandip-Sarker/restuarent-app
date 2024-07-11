<!-- Sidebar menu starts -->
<div class="sidebarMenuScroll">
    <ul class="sidebar-menu">
        <li class="active current-page">
            <a href="{{route('admin.home')}}">
                <i class="bi bi-pie-chart"></i>
                <span class="menu-text">Dashboard</span>
            </a>
        </li>

        <li class="treeview">
            <a href="#!">
                <i class="bi bi-menu-app"></i>
                <span class="menu-text">Category Module</span>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{route('category.create')}}">Add Category</a>
                </li>
                <li>
                    <a href="{{route('category.index')}}">Manage Category</a>
                </li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#!">
                <i class="bi bi-menu-app"></i>
                <span class="menu-text">Item Module</span>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{route('item.create')}}">Add Item</a>
                </li>
                <li>
                    <a href="{{route('item.index')}}">Manage Item</a>
                </li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#!">
                <i class="bi bi-stack-overflow"></i>
                <span class="menu-text">Order Module</span>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="form-inputs.html">Add Order</a>
                </li>
                <li>
                    <a href="form-file-input.html">Manage Order</a>
                </li>
            </ul>
        </li>

    </ul>
</div>
<!-- Sidebar menu ends -->
