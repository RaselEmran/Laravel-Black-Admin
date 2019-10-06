<div class="d-flex no-block nav-text-box align-items-center">
                <span><img src="{{asset('assets/images/logo-icon.png')}}" alt="elegant admin template"></span>
                <a class="nav-lock waves-effect waves-dark ml-auto hidden-md-down" href="javascript:void(0)"><i class="mdi mdi-toggle-switch"></i></a>
                <a class="nav-toggler waves-effect waves-dark ml-auto hidden-sm-up" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
            </div>
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="{{ route('admin.dashboard') }}" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Dashboard</span></a>
                        </li>

                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-people"></i><span class="hide-menu">User Role</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('admin.user.role') }}">
                                    Role <i class="ti-calendar"></i></a>
                                </li>

                                <li><a href="{{ route('admin.user.index') }}">
                                    User <i class="ti-calendar"></i></a>
                                </li>
                               
                    
                            </ul>
                        </li>

                          <li> <a class="waves-effect waves-dark" href="{{ route('admin.language') }}" aria-expanded="false"><i class="ti-video-clapper"></i><span class="hide-menu">{{_lang('language')}}</span></a>
                        </li>

                          <li> <a class="waves-effect waves-dark" href="{{ route('admin.setting') }}" aria-expanded="false"><i class="ti-video-clapper"></i><span class="hide-menu">{{_lang('setting')}}</span></a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->