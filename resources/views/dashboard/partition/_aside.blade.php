<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="{{ asset('dashboard/olivxlogo.png') }}" alt="Olivx logo" class="brand-image img-circle elevation-3"
           style="opacity: .8;width: 32%;">
      <span class="brand-text font-weight-light">Olivx Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img style="" src="{{ asset('dashboard/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">user name</a>

        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
       
          <li class="nav-item ">
            <a href="/" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                الرئيسية
              </p>
            </a>
           
          </li>
          @can('المستخدمين')
            <li class="nav-item has-treeview ">

              <a href="#" class="nav-link ">
                <i class="fa fa-user" aria-hidden="true"></i>
                <p>
                  المستخدمين
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              @can('قائمة المستخدمين')
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/admin/users" class="nav-link ">
                    <i class="fa fa-angle-double-left"></i>
                    <p> قائمة المستخدمين</p>
                  </a>
                </li>
              </ul>
              @endcan

              @can('صلاحيات المستخدمين')
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/admin/roles" class="nav-link ">
                    <i class="fa fa-angle-double-left"></i>
                    <p> صلاحيات المستخدمين</p>
                  </a>
                </li>
              </ul>
              @endcan
            </li>
          @endcan
          @can('قائمة اللغات')
            <li class="nav-item has-treeview ">
              <a href="#" class="nav-link ">
                <i class="fa fa-flag" aria-hidden="true"></i>
                <p>
                  اللغات
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/admin/langs" class="nav-link ">
                    <i class="fa fa-angle-double-left"></i>
                    <p>جميع اللغات</p>
                  </a>
                  
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/admin/langs/create" class="nav-link ">
                    <i class="fa fa-angle-double-left"></i>
                    <p> اضافة لغة جديدة</p>
                  </a>
                </li>
              </ul>
            </li>
          @endcan
            <li class="nav-item has-treeview ">
              <a href="#" class="nav-link ">
                <i class="fa fa-cog" aria-hidden="true"></i>
                <p>
                  اعدادات الاوجهة الامامية
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                @can(' سلايدرات')
                <li class="nav-item">
                  <a href="/admin/sliders" class="nav-link ">
                    <i class="fa fa-angle-double-left"></i>
                    <p>السلاديرات</p>
                  </a>
                </li>
                @endcan
                @can(' الصفحات')
                <li class="nav-item">
                  <a href="/admin/pages" class="nav-link ">
                    <i class="fa fa-angle-double-left"></i>
                    <p>الصفحات</p>
                  </a>
                </li>
                @endcan
                @can(' القوائم')
                <li class="nav-item">
                  <a href="/admin/menu" class="nav-link ">
                    <i class="fa fa-angle-double-left"></i>
                    <p>القوائم</p>
                  </a>
                </li>
                @endcan
                @can(' العروض')
                <li class="nav-item">
                  <a href="/admin/offers" class="nav-link ">
                    <i class="fa fa-angle-double-left"></i>
                    <p>العروض</p>
                  </a>
                </li>
                @endcan
                @can(' التواصل')
                <li class="nav-item">
                  <a href="/admin/contact" class="nav-link ">
                    <i class="fa fa-angle-double-left"></i>
                    <p>التواصل</p>
                  </a>
                </li>
                @endcan
              </ul>
            </li>
             </li>
    
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
