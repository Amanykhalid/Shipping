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
           
    
            <li class="nav-item has-treeview ">
              <a href="#" class="nav-link ">
                <i class="fa fa-user" aria-hidden="true"></i>
                <p>
                  المستخدمين
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                
                <li class="nav-item">
                  <a href="/admins" class="nav-link ">
                    <i class="fa fa-angle-double-left"></i>
                                        <p>الاداريين</p>
                  </a>
                </li>
            
                <li class="nav-item">
                  <a href="/supervisor" class="nav-link">
                    <i class="fa fa-angle-double-left"></i>
                                        <p>المشرفين</p>
                  </a>
                </li> 
                <li class="nav-item">
                  <a href="/authorities" class="nav-link">
                    <i class="fa fa-angle-double-left"></i>
                                        <p>الجهات المختصة</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/monitors" class="nav-link">
                    <i class="fa fa-angle-double-left"></i>
                                        <p>المنذرين</p>
                  </a>
                </li> 
            

                
                
                <li class="nav-item">
                  <a href="/people" class="nav-link">
                    <i class="fa fa-angle-double-left"></i>
                                        <p>اصحاب التذاكر</p>
                  </a>
                </li>
               
                

                {{-- <li class="nav-item">
                  <a href="/user/create" class="nav-link">
                    <i class="fa fa-angle-double-left"></i>
                                        <p>اضافة جديد</p>
                  </a> --}}
            
                </li> 
             
              </ul>
            </li>
            <li class="nav-item has-treeview ">
              <a href="#" class="nav-link ">
                <i class="fa fa-ticket" aria-hidden="true"></i>
                <p>
                  التذاكر
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/tickets" class="nav-link ">
                    <i class="fa fa-angle-double-left"></i>
                    <p>جميع التذاكر</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/tickets/create" class="nav-link ">
                    <i class="fa fa-angle-double-left"></i>
                    <p>انشاء تذكرة</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview ">
              <a href="/reports" class="nav-link ">
                <i class="nav-icon fas fa-book" aria-hidden="true"></i>
                <p>
                  التقارير
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
          
            </li>
            {{--  <li class="nav-item has-treeview ">
              <a href="#" class="nav-link ">
                <i class="fa fa-cog" aria-hidden="true"></i>
                <p>
               التقراير
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="" class="nav-link ">
                    <i class="fa fa-angle-double-left"></i>
                    <p>الاعدادت الاساسية</p>
                  </a>
                </li>
              </ul>
            </li>  --}}
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
            <li class="nav-item has-treeview ">
              <a href="#" class="nav-link ">
                <i class="fa fa-cog" aria-hidden="true"></i>
                <p>
                  اعدادات النظام
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/configs" class="nav-link ">
                    <i class="fa fa-angle-double-left"></i>
                    <p>الاعدادت الاساسية</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/social" class="nav-link ">
                    <i class="fa fa-angle-double-left"></i>
                    <p>حسابات السوشل ميديا</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview ">
              <a href="#" class="nav-link ">
                <i class="fa fa-cog" aria-hidden="true"></i>
                <p>
                  اعدادات الاوجهة الامامية
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/admin/sliders" class="nav-link ">
                    <i class="fa fa-angle-double-left"></i>
                    <p>السلاديرات</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/admin/pages" class="nav-link ">
                    <i class="fa fa-angle-double-left"></i>
                    <p>الصفحات</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/admin/menu" class="nav-link ">
                    <i class="fa fa-angle-double-left"></i>
                    <p>القوائم</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/admin/offers" class="nav-link ">
                    <i class="fa fa-angle-double-left"></i>
                    <p>العروض</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/admin/contact" class="nav-link ">
                    <i class="fa fa-angle-double-left"></i>
                    <p>التواصل</p>
                  </a>
                </li>
              </ul>
            </li>
             </li>
    
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
