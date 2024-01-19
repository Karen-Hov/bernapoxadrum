<div class="showInHiddenSidebar">
{{--    <button><i class="fas fa-bars"></i></button>--}}
</div>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{asset('/')}}" class="brand-link">
        <img src="" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8;">
        <span class="brand-text font-weight-light"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

{{--                <li class="nav-item">--}}
{{--                    <a href="{{route('about_us.index')}}"--}}
{{--                       class="nav-link  @if(strpos(url()->current(),'about_us')!== false)) active @endif">--}}
{{--                        <i class="nav-icon fas fa-address-card"></i>--}}
{{--                        <p>--}}
{{--                            Մեր մասին--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                </li>--}}

                <li class="nav-item has-treeview  @if(strpos(url()->current(),'menu')!=false) active menu-open @endif ">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>                        <p>
                            Ծառայություններ
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
{{--                                        @dd(Route::currentRouteName())--}}
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('services.index')}}"
                               class="nav-link  @if(strpos(url()->current(),'my_admin/service')!== false)) active @endif">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Գլխավոր էջի
                                </p>
                            </a>
                        </li>

                    </ul>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('menu.index')}}"
                               class="nav-link  @if(strpos(url()->current(),'my_admin/menu')!== false)) active @endif">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Ծառայություններ
                                </p>
                            </a>
                        </li>

                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('submenu.index')}}"
                               class="nav-link  @if(strpos(url()->current(),'submenu')!== false)) active @endif">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    ԵնթաԾառայություններ
                                </p>
                            </a>
                        </li>

                    </ul>
                </li>


                                <li class="nav-item">
                                    <a href="{{route('contact_us.index')}}"
                                       class="nav-link  @if(strpos(url()->current(),'contact_us')!== false)) active @endif">
                                        <i class="nav-icon fas fa-address-card"></i>
                                        <p>
                                            ՀԵռախոսահամարներ
                                        </p>
                                    </a>
                                </li>

{{--                <li class="nav-item">--}}
{{--                    <a href="{{route('posts.index')}}"--}}
{{--                       class="nav-link @if(strpos(url()->current(),'posts')!== false)) active @endif">--}}
{{--                        <i class="nav-icon fas fa-th"></i>--}}
{{--                        <p>--}}
{{--                            Նորություններ--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                </li>--}}


{{--                <li class="nav-item has-treeview--}}
{{--                   @if(url()->current()==url('my_admin/messages/contact') || url()->current()==url('my_admin/messages/partner') || url()->current()==url('my_admin/messages/request'))active menu-open @endif ">--}}
{{--                    <a href="{{url('my_admin/subscribe')}}" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-edit"></i>--}}
{{--                        <p>--}}
{{--                            Նամակներ--}}

{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                        </p>--}}
{{--                    </a>--}}


{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{url('my_admin/messages/contact')}}"--}}
{{--                               class="nav-link   @if(url()->current()==url('my_admin/messages/contact')) active @endif">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Կոնտակտային</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{url('my_admin/messages/partner')}}"--}}
{{--                               class="nav-link  @if(url()->current()==url('my_admin/messages/partner')) active @endif">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Գործընկերոջ</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{url('my_admin/messages/request')}}"--}}
{{--                               class="nav-link  @if(url()->current()==url('my_admin/messages/request')) active @endif">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Հարցման</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                    </ul>--}}
{{--                </li>--}}


{{--                <li class="nav-item has-treeview  @if(strpos(url()->current(),'my_admin/subscribe/')!=false) active menu-open @endif ">--}}
{{--                    <a href="" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-edit"></i>--}}
{{--                        <p>--}}
{{--                            Բաժանորդագրվածներ--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    --}}{{--                    @dd(Route::currentRouteName())--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{url('my_admin/subscribe/show')}}"--}}
{{--                               class="nav-link @if(url()->current()==url('my_admin/subscribe/show')) active @endif">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Բաժանորդագրվածներ</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                    </ul>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{url('my_admin/subscribe/send')}}"--}}
{{--                               class="nav-link  @if(url()->current()==url('my_admin/subscribe/send')) active @endif">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Թարմացմումներ</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                    </ul>--}}
{{--                </li>--}}

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
