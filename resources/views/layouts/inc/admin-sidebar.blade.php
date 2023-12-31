<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link {{ Request::is('admin/dashboard') ? 'active':''}}" href="{{url('admin/dashboard')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>

                            <a class="nav-link {{Request::is('admin/company') || Request::is('admin/add-category') || Request::is('admin/edit-category/*')? 'collapse active' : 'collapsed'}}" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Company
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse {{Request::is('admin/company') ||  Request::is('admin/add-company') || Request::is('admin/edit-company/*')  ? 'show' : ''}}" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link  {{ Request::is('admin/add-company') ? 'active':''}}" href="{{url('admin/add-company')}}">Add Company</a>
                                    <a class="nav-link {{ Request::is('admin/company') || Request::is('admin/edit-company/*') ? 'active':''}}" href="{{url('admin/company')}}">View Company</a>
                                </nav>
                            </div>


                            <a class="nav-link {{Request::is('admin/employees') || Request::is('admin/add-employee') || Request::is('admin/employee/*')? 'collapse active' : 'collapsed'}}" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePost" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Employee
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse {{Request::is('admin/employees') ||  Request::is('admin/add-employee') || Request::is('admin/employee/*')  ? 'show' : ''}}" id="collapsePost" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link {{ Request::is('admin/add-employee') ? 'active':''}}" href="{{url('admin/add-employee')}}">Add Employee</a>
                                    <a class="nav-link {{ Request::is('admin/employees') ? 'active':''}}" href="{{url('admin/employees')}}">View Employee</a>
                                </nav>
                            </div>

                            <a class="nav-link {{ Request::is('admin/users') ? 'active':''}}" href="{{url('admin/users')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Users
                            </a>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div>
                </nav>
            </div>