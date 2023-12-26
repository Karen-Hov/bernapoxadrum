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
{{--                    <a href="{{route('/')}}"--}}
{{--                       class="nav-link  @if(strpos(url()->current(),'about_us')!== false)) active @endif">--}}
{{--                        <i class="nav-icon fas fa-address-card"></i>--}}
{{--                        <p>--}}
{{--                            Dashboard--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                </li>--}}

{{--                <li class="nav-item">--}}
{{--                    <a href="{{url('my_admin/info')}}"--}}
{{--                       class="nav-link  @if(strpos(url()->current(),'info')!== false)) active @endif">--}}
{{--                        <i class="nav-icon fas fa-address-card"></i>--}}
{{--                        <p>--}}
{{--                            Տեղեկատվություն--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                </li>--}}

                <li class="nav-item">
                    <a href="{{route('about_us.index')}}"
                       class="nav-link  @if(strpos(url()->current(),'about_us')!== false)) active @endif">
                        <i class="nav-icon fas fa-address-card"></i>
                        <p>
                            Մեր մասին
                        </p>
                    </a>
                </li>
{{--                <li class="nav-item">--}}
{{--                    <a href="{{route('features.index')}}"--}}
{{--                       class="nav-link  @if(strpos(url()->current(),'features')!== false)) active @endif">--}}
{{--                        <i class="nav-icon fas fa-th"></i>--}}
{{--                        <p>--}}
{{--                            Հատկություններ--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                </li>--}}
                <li class="nav-item has-treeview  @if(strpos(url()->current(),'menu')!=false) active menu-open @endif ">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>                        <p>
                            Մենու
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
{{--                                        @dd(Route::currentRouteName())--}}
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('menu.index')}}"
                               class="nav-link  @if(strpos(url()->current(),'my_admin/menu')!== false)) active @endif">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Մենու
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
                                    Ենթամենու
                                </p>
                            </a>
                        </li>

                    </ul>
                </li>




{{--                <li class="nav-item">--}}
{{--                    <a href="{{route('categories.index')}}"--}}
{{--                       class="nav-link @if(strpos(url()->current(),'categories')!== false)) active @endif">--}}
{{--                        <i class="nav-icon fas fa-th"></i>--}}
{{--                        <p>--}}
{{--                            Պորտֆոլիո կատեգորիա--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                </li>--}}
                <li class="nav-item">
                    <a href="{{route('posts.index')}}"
                       class="nav-link @if(strpos(url()->current(),'posts')!== false)) active @endif">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Նորություններ
                        </p>
                    </a>
                </li>







{{--                <li class="nav-item has-treeview--}}
{{--                   @if(strpos(url()->current(),'pricing')!== false || strpos(url()->current(),'posts')!== false)active menu-open @endif ">--}}
{{--                    <a href="{{url('my_admin/subscribe')}}" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-edit"></i>--}}
{{--                        <p>--}}
{{--                            Գնագոյացում--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route('pricing.index')}}"--}}
{{--                               class="nav-link  @if(strpos(url()->current(),'pricing')!== false) active @endif">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>--}}
{{--                                    Գնագոյացում--}}
{{--                                </p>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                    </ul>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route('posts.index')}}"--}}
{{--                               class="nav-link  @if(strpos(url()->current(),'posts')!== false)) active @endif">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Փաթեթներ</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                    </ul>--}}
{{--                </li>--}}




{{--                <li class="nav-item">--}}
{{--                    <a href="{{route('faq.index')}}"--}}
{{--                       class="nav-link  @if(strpos(url()->current(),'faq')!== false)) active @endif">--}}
{{--                        <i class="nav-icon fas fa-th"></i>--}}
{{--                        <p>--}}
{{--                            ՀՏՀ--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                </li>--}}


                <li class="nav-item has-treeview
                   @if(url()->current()==url('my_admin/messages/contact') || url()->current()==url('my_admin/messages/partner') || url()->current()==url('my_admin/messages/request'))active menu-open @endif ">
                    <a href="{{url('my_admin/subscribe')}}" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Նամակներ

                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>


                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('my_admin/messages/contact')}}"
                               class="nav-link   @if(url()->current()==url('my_admin/messages/contact')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Կոնտակտային</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('my_admin/messages/partner')}}"
                               class="nav-link  @if(url()->current()==url('my_admin/messages/partner')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Գործընկերոջ</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('my_admin/messages/request')}}"
                               class="nav-link  @if(url()->current()==url('my_admin/messages/request')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Հարցման</p>
                            </a>
                        </li>

                    </ul>
                </li>





{{--                <li class="nav-item">--}}
{{--                    <a href="{{url('my_admin/contact_us')}}"--}}
{{--                       class="nav-link  @if(Route::currentRouteName()=='contact_us.index') active @endif">--}}
{{--                        <i class="nav-icon fas fa-th"></i>--}}
{{--                        <p>--}}
{{--                            Նամակներ--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                @dd(Route::currentRouteName())--}}
                <li class="nav-item has-treeview  @if(strpos(url()->current(),'my_admin/subscribe/')!=false) active menu-open @endif ">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Բաժանորդագրվածներ
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    {{--                    @dd(Route::currentRouteName())--}}
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('my_admin/subscribe/show')}}"
                               class="nav-link @if(url()->current()==url('my_admin/subscribe/show')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Բաժանորդագրվածներ</p>
                            </a>
                        </li>

                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('my_admin/subscribe/send')}}"
                               class="nav-link  @if(url()->current()==url('my_admin/subscribe/send')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Թարմացմումներ</p>
                            </a>
                        </li>

                    </ul>
                </li>

{{--                <li class="nav-item">--}}
{{--                    <a href="{{url('my_admin/contact_us')}}"--}}
{{--                       class="nav-link  @if(Route::currentRouteName()=='contact_us') active @endif">--}}
{{--                        <i class="nav-icon far fa-envelope"></i>--}}
{{--                        <p>--}}
{{--                            Email--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="{{url('my_admin/users')}}"--}}
{{--                       class="nav-link  @if(Route::currentRouteName()=='users') active @endif">--}}
{{--                        <i class="nav-icon fas fa-th"></i>--}}
{{--                        <p>--}}
{{--                            Users--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                </li>--}}

{{--                <li class="nav-item">--}}
{{--                    <a href="{{url('my_admin/subscribe')}}"--}}
{{--                       class="nav-link @if(Route::currentRouteName()=='admin.subscribe.index') active @endif">--}}
{{--                        <i class="nav-icon fas fa-th"></i>--}}
{{--                        <p>--}}
{{--                            Subscribers--}}
{{--                        </p>--}}
{{--                    </a>--}}
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
