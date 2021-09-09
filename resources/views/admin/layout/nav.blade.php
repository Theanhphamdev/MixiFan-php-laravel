<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">

            <li>
                <a class=" ai-icon" href="/admin/dashboards" aria-expanded="false">
                    <i class="fas fa-tachometer-alt"></i>
                    <span class="nav-text"> Dash Boards </span>
                </a>
            </li>

            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-th-large"></i>
                    <span class="nav-text"> Products </span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="/admin/products">List Products</a></li>
                    @can('add product')
                    <li><a href="/admin/products/create">Create Products</a></li>
                    @endcan
                </ul>
            </li>

            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-table"></i>
                    <span class="nav-text"> Categories </span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="/admin/categories">List Categories</a></li>
                    <li><a href="/admin/categories/create">Create categories</a></li>
                </ul>
            </li>

            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-cogs"></i>
                    <span class="nav-text"> Setting </span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="/admin/banner">List Banner</a></li>
                    <li><a href="/admin/banner/create">Create Banner</a></li>
                </ul>
            </li>

            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-user-circle"></i>
                    <span class="nav-text"> Customer </span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="/admin/test">test</a></li>
                    <li><a href=""></a></li>
                </ul>
            </li>

        </ul>
    </div>
</div>
