<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Main</li>

                <li>
                    <a href="{{route('admin.index')}}" class="waves-effect">
                        <i class="dripicons-device-desktop"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-truck-delivery"></i>
                        <span> Shipment </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('admin.shipment.create')}}">Add Shipment</a></li>
                        <li><a href="{{route('admin.shipment.index')}}">All Shipments</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{route('admin.shipment.settings')}}" class=" waves-effect">
                        <i class="fa fa-cog"></i>
                        <span>Shipment Setting</span>
                    </a>
                </li>

                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-list"></i>
                        <span> Pages </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tables-basic.html">Basic Tables</a></li>
                        <li><a href="tables-datatable.html">Data Tables</a></li>
                        <li><a href="tables-responsive.html">Responsive Table</a></li>
                        <li><a href="tables-editable.html">Editable Table</a></li>
                    </ul>
                </li> --}}

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-cog"></i>
                        <span> Settings </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('admin.setting.index')}}"> Site Settings</a></li>
                        <li><a href="{{route('admin.setting.email')}}"> Email Setting</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{route('admin.clear-cache')}}" class=" waves-effect">
                        <i class="fa fa-server"></i>
                        <span>Clear Cache</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
