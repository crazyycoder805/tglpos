<footer class="main-footer bt-1">
    {{--  --}}
    &copy;
    <script>
        document.write(new Date().getFullYear())
    </script> <a target="_blank" href="https://thegroominglounge.pk">The Grooming Lounge</a>. All Rights
    Reserved.
</footer>

<div class="modal modal-right fade" id="quick_user_toggle" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content slim-scroll3">
            <div class="modal-body p-30 bg-white">
                <div class="d-flex align-items-center mb-15 justify-content-between pb-30">
                    <h4 class="m-0">User Profile
                    </h4>
                    <a href="#" class="btn btn-icon btn-danger-light btn-sm no-shadow" data-bs-dismiss="modal">
                        <span class="fa fa-close"></span>
                    </a>
                </div>
                <div>
                    <div class="d-flex flex-row">
                        <div class=""><img src="{{ asset('assets/images/mc/du.jpg') }}" alt="user"
                                class="rounded bg-danger-light w-150" width="100"></div>
                        <div class="ps-20">
                            <h5 class="mb-0">{{ auth()->user()->name }}</h5>
                            <p class="my-5 text-fade">{{ auth()->user()->role }}</p>
                            {{-- <a href="mailto:dummy@gmail.com"><span
                                    class="icon-Mail-notification me-5 text-success"><span class="path1"></span><span
                                        class="path2"></span></span>
                                dummy@gmail.com</a>
                            <button class="btn btn-success-light btn-sm mt-5"><i class="ti-plus"></i>
                                Follow</button> --}}
                        </div>
                    </div>
                </div>
                <div class="dropdown-divider my-30"></div>
                <div>
                    {{-- <div class="d-flex align-items-center mb-30">
                        <div class="me-15 bg-primary-light h-50 w-50 l-h-60 rounded text-center">
                            <span class="icon-Library fs-24"><span class="path1"></span><span
                                    class="path2"></span></span>
                        </div>
                        <div class="d-flex flex-column fw-500">
                            <a href="extra_profile.html" class="text-dark hover-primary mb-1 fs-16">My
                                Profile</a>
                            <span class="text-fade">Account settings and more</span>
                        </div>
                    </div> --}}
                    <div class="d-flex align-items-center mb-30">
                        <div class="me-15 bg-primary-light h-50 w-50 l-h-60 rounded text-center">
                            <span class="icon-Library fs-24"><span class="path1"></span><span
                                    class="path2"></span></span>
                        </div>
                        <div class="d-flex flex-column fw-500">

                            <span class="text-fade">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf


                                    <div class="row mb-3">
                                        <div class="col-sm-10 offset-sm-2">
                                            <button type="submit" class="btn btn-primary">Logout</button>
                                        </div>
                                    </div>
                                </form>
                            </span>
                        </div>
                    </div>

                    {{-- <div class="d-flex align-items-center mb-30">
                        <div class="me-15 bg-danger-light h-50 w-50 l-h-60 rounded text-center">
                            <span class="icon-Write fs-24"><span class="path1"></span><span
                                    class="path2"></span></span>
                        </div>
                        <div class="d-flex flex-column fw-500">
                            <a href="mailbox.html" class="text-dark hover-danger mb-1 fs-16">My Messages</a>
                            <span class="text-fade">Inbox and tasks</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-30">
                        <div class="me-15 bg-success-light h-50 w-50 l-h-60 rounded text-center">
                            <span class="icon-Group-chat fs-24"><span class="path1"></span><span
                                    class="path2"></span></span>
                        </div>
                        <div class="d-flex flex-column fw-500">
                            <a href="setting.html" class="text-dark hover-success mb-1 fs-16">Settings</a>
                            <span class="text-fade">Accout Settings</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-30">
                        <div class="me-15 bg-info-light h-50 w-50 l-h-60 rounded text-center">
                            <span class="icon-Attachment1 fs-24"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span><span
                                    class="path4"></span></span>
                        </div>
                        <div class="d-flex flex-column fw-500">
                            <a href="extra_taskboard.html" class="text-dark hover-info mb-1 fs-16">Project</a>
                            <span class="text-fade">latest tasks and projects</span>
                        </div>
                    </div> --}}
                </div>
                <div class="dropdown-divider my-30"></div>
                {{-- <div>
                    <div class="media-list">
                        <a class="media media-single px-0" href="#">
                            <h4 class="w-50 text-gray fw-500">10:10</h4>
                            <div class="media-body ps-15 bs-5 rounded border-primary">
                                <p>Morbi quis ex eu arcu auctor sagittis.</p>
                                <span class="text-fade">by Johne</span>
                            </div>
                        </a>

                        <a class="media media-single px-0" href="#">
                            <h4 class="w-50 text-gray fw-500">08:40</h4>
                            <div class="media-body ps-15 bs-5 rounded border-success">
                                <p>Proin iaculis eros non odio ornare efficitur.</p>
                                <span class="text-fade">by Amla</span>
                            </div>
                        </a>

                        <a class="media media-single px-0" href="#">
                            <h4 class="w-50 text-gray fw-500">07:10</h4>
                            <div class="media-body ps-15 bs-5 rounded border-info">
                                <p>In mattis mi ut posuere consectetur.</p>
                                <span class="text-fade">by Josef</span>
                            </div>
                        </a>

                        <a class="media media-single px-0" href="#">
                            <h4 class="w-50 text-gray fw-500">01:15</h4>
                            <div class="media-body ps-15 bs-5 rounded border-danger">
                                <p>Morbi quis ex eu arcu auctor sagittis.</p>
                                <span class="text-fade">by Rima</span>
                            </div>
                        </a>

                        <a class="media media-single px-0" href="#">
                            <h4 class="w-50 text-gray fw-500">23:12</h4>
                            <div class="media-body ps-15 bs-5 rounded border-warning">
                                <p>Morbi quis ex eu arcu auctor sagittis.</p>
                                <span class="text-fade">by Alaxa</span>
                            </div>
                        </a>
                        <a class="media media-single px-0" href="#">
                            <h4 class="w-50 text-gray fw-500">10:10</h4>
                            <div class="media-body ps-15 bs-5 rounded border-primary">
                                <p>Morbi quis ex eu arcu auctor sagittis.</p>
                                <span class="text-fade">by Johne</span>
                            </div>
                        </a>

                        <a class="media media-single px-0" href="#">
                            <h4 class="w-50 text-gray fw-500">08:40</h4>
                            <div class="media-body ps-15 bs-5 rounded border-success">
                                <p>Proin iaculis eros non odio ornare efficitur.</p>
                                <span class="text-fade">by Amla</span>
                            </div>
                        </a>

                        <a class="media media-single px-0" href="#">
                            <h4 class="w-50 text-gray fw-500">07:10</h4>
                            <div class="media-body ps-15 bs-5 rounded border-info">
                                <p>In mattis mi ut posuere consectetur.</p>
                                <span class="text-fade">by Josef</span>
                            </div>
                        </a>

                        <a class="media media-single px-0" href="#">
                            <h4 class="w-50 text-gray fw-500">01:15</h4>
                            <div class="media-body ps-15 bs-5 rounded border-danger">
                                <p>Morbi quis ex eu arcu auctor sagittis.</p>
                                <span class="text-fade">by Rima</span>
                            </div>
                        </a>

                        <a class="media media-single px-0" href="#">
                            <h4 class="w-50 text-gray fw-500">23:12</h4>
                            <div class="media-body ps-15 bs-5 rounded border-warning">
                                <p>Morbi quis ex eu arcu auctor sagittis.</p>
                                <span class="text-fade">by Alaxa</span>
                            </div>
                        </a>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
<!-- /quick_user_toggle -->

<!-- Control Sidebar -->
<aside class="control-sidebar">

    <div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger" data-toggle="control-sidebar"><i
                class="ion ion-close text-white"></i></span> </div>
    <!-- Create the tabs -->
    {{-- <ul class="nav nav-tabs control-sidebar-tabs">
        <li class="nav-item"><a href="#control-sidebar-home-tab" data-bs-toggle="tab"><i
                    class="mdi mdi-message-text"></i></a></li>
        <li class="nav-item"><a href="#control-sidebar-settings-tab" data-bs-toggle="tab"><i
                    class="mdi mdi-playlist-check"></i></a></li>
    </ul> --}}
    <!-- Tab panes -->
    <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane" id="control-sidebar-home-tab">
            <div class="flexbox">
                <a href="javascript:void(0)" class="text-grey">
                    <i class="ti-more"></i>
                </a>
                <p>Users</p>
                <a href="javascript:void(0)" class="text-end text-grey"><i class="ti-plus"></i></a>
            </div>
            <div class="lookup lookup-sm lookup-right d-none d-lg-block">
                <input type="text" name="s" placeholder="Search" class="w-p100">
            </div>
            <div class="media-list media-list-hover mt-20">
                <div class="media py-10 px-0">
                    <a class="avatar avatar-lg status-success" href="#">
                        <img src="{{ asset('assets/images/avatar/1.jpg') }}" alt="...">
                    </a>
                    <div class="media-body">
                        <p class="fs-16">
                            <a class="hover-primary" href="#"><strong>Tyler</strong></a>
                        </p>
                        <p>Praesent tristique diam...</p>
                        <span>Just now</span>
                    </div>
                </div>

                <div class="media py-10 px-0">
                    <a class="avatar avatar-lg status-danger" href="#">
                        <img src="{{ asset('assets/images/avatar/2.jpg') }}" alt="...">
                    </a>
                    <div class="media-body">
                        <p class="fs-16">
                            <a class="hover-primary" href="#"><strong>Luke</strong></a>
                        </p>
                        <p>Cras tempor diam ...</p>
                        <span>33 min ago</span>
                    </div>
                </div>

                <div class="media py-10 px-0">
                    <a class="avatar avatar-lg status-warning" href="#">
                        <img src="{{ asset('assets/images/avatar/3.jpg') }}" alt="...">
                    </a>
                    <div class="media-body">
                        <p class="fs-16">
                            <a class="hover-primary" href="#"><strong>Evan</strong></a>
                        </p>
                        <p>In posuere tortor vel...</p>
                        <span>42 min ago</span>
                    </div>
                </div>

                <div class="media py-10 px-0">
                    <a class="avatar avatar-lg status-primary" href="#">
                        <img src="{{ asset('assets/images/avatar/4.jpg') }}" alt="...">
                    </a>
                    <div class="media-body">
                        <p class="fs-16">
                            <a class="hover-primary" href="#"><strong>Evan</strong></a>
                        </p>
                        <p>In posuere tortor vel...</p>
                        <span>42 min ago</span>
                    </div>
                </div>

                <div class="media py-10 px-0">
                    <a class="avatar avatar-lg status-success" href="#">
                        <img src="{{ asset('assets/images/avatar/1.jpg') }}" alt="...">
                    </a>
                    <div class="media-body">
                        <p class="fs-16">
                            <a class="hover-primary" href="#"><strong>Tyler</strong></a>
                        </p>
                        <p>Praesent tristique diam...</p>
                        <span>Just now</span>
                    </div>
                </div>

                <div class="media py-10 px-0">
                    <a class="avatar avatar-lg status-danger" href="#">
                        <img src="{{ asset('assets/images/avatar/2.jpg') }}" alt="...">
                    </a>
                    <div class="media-body">
                        <p class="fs-16">
                            <a class="hover-primary" href="#"><strong>Luke</strong></a>
                        </p>
                        <p>Cras tempor diam ...</p>
                        <span>33 min ago</span>
                    </div>
                </div>

                <div class="media py-10 px-0">
                    <a class="avatar avatar-lg status-warning" href="#">
                        <img src="{{ asset('assets/images/avatar/3.jpg') }}" alt="...">
                    </a>
                    <div class="media-body">
                        <p class="fs-16">
                            <a class="hover-primary" href="#"><strong>Evan</strong></a>
                        </p>
                        <p>In posuere tortor vel...</p>
                        <span>42 min ago</span>
                    </div>
                </div>

                <div class="media py-10 px-0">
                    <a class="avatar avatar-lg status-primary" href="#">
                        <img src="{{ asset('assets/images/avatar/4.jpg') }}" alt="...">
                    </a>
                    <div class="media-body">
                        <p class="fs-16">
                            <a class="hover-primary" href="#"><strong>Evan</strong></a>
                        </p>
                        <p>In posuere tortor vel...</p>
                        <span>42 min ago</span>
                    </div>
                </div>

            </div>

        </div>
        <!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class="tab-pane" id="control-sidebar-settings-tab">
            <div class="flexbox">
                <a href="javascript:void(0)" class="text-grey">
                    <i class="ti-more"></i>
                </a>
                <p>Todo List</p>
                <a href="javascript:void(0)" class="text-end text-grey"><i class="ti-plus"></i></a>
            </div>
            <ul class="todo-list mt-20">
                <li class="py-15 px-5 by-1">
                    <!-- checkbox -->
                    <input type="checkbox" id="basic_checkbox_1" class="filled-in">
                    <label for="basic_checkbox_1" class="mb-0 h-15"></label>
                    <!-- todo text -->
                    <span class="text-line">Nulla vitae purus</span>
                    <!-- Emphasis label -->
                    <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                    <!-- General tools such as edit or delete-->
                    <div class="tools">
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-trash-o"></i>
                    </div>
                </li>
                <li class="py-15 px-5">
                    <!-- checkbox -->
                    <input type="checkbox" id="basic_checkbox_2" class="filled-in">
                    <label for="basic_checkbox_2" class="mb-0 h-15"></label>
                    <span class="text-line">Phasellus interdum</span>
                    <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                    <div class="tools">
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-trash-o"></i>
                    </div>
                </li>
                <li class="py-15 px-5 by-1">
                    <!-- checkbox -->
                    <input type="checkbox" id="basic_checkbox_3" class="filled-in">
                    <label for="basic_checkbox_3" class="mb-0 h-15"></label>
                    <span class="text-line">Quisque sodales</span>
                    <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                    <div class="tools">
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-trash-o"></i>
                    </div>
                </li>
                <li class="py-15 px-5">
                    <!-- checkbox -->
                    <input type="checkbox" id="basic_checkbox_4" class="filled-in">
                    <label for="basic_checkbox_4" class="mb-0 h-15"></label>
                    <span class="text-line">Proin nec mi porta</span>
                    <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
                    <div class="tools">
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-trash-o"></i>
                    </div>
                </li>
                <li class="py-15 px-5 by-1">
                    <!-- checkbox -->
                    <input type="checkbox" id="basic_checkbox_5" class="filled-in">
                    <label for="basic_checkbox_5" class="mb-0 h-15"></label>
                    <span class="text-line">Maecenas scelerisque</span>
                    <small class="badge bg-primary"><i class="fa fa-clock-o"></i> 1 week</small>
                    <div class="tools">
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-trash-o"></i>
                    </div>
                </li>
                <li class="py-15 px-5">
                    <!-- checkbox -->
                    <input type="checkbox" id="basic_checkbox_6" class="filled-in">
                    <label for="basic_checkbox_6" class="mb-0 h-15"></label>
                    <span class="text-line">Vivamus nec orci</span>
                    <small class="badge bg-info"><i class="fa fa-clock-o"></i> 1 month</small>
                    <div class="tools">
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-trash-o"></i>
                    </div>
                </li>
                <li class="py-15 px-5 by-1">
                    <!-- checkbox -->
                    <input type="checkbox" id="basic_checkbox_7" class="filled-in">
                    <label for="basic_checkbox_7" class="mb-0 h-15"></label>
                    <!-- todo text -->
                    <span class="text-line">Nulla vitae purus</span>
                    <!-- Emphasis label -->
                    <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                    <!-- General tools such as edit or delete-->
                    <div class="tools">
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-trash-o"></i>
                    </div>
                </li>
                <li class="py-15 px-5">
                    <!-- checkbox -->
                    <input type="checkbox" id="basic_checkbox_8" class="filled-in">
                    <label for="basic_checkbox_8" class="mb-0 h-15"></label>
                    <span class="text-line">Phasellus interdum</span>
                    <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                    <div class="tools">
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-trash-o"></i>
                    </div>
                </li>
                <li class="py-15 px-5 by-1">
                    <!-- checkbox -->
                    <input type="checkbox" id="basic_checkbox_9" class="filled-in">
                    <label for="basic_checkbox_9" class="mb-0 h-15"></label>
                    <span class="text-line">Quisque sodales</span>
                    <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                    <div class="tools">
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-trash-o"></i>
                    </div>
                </li>
                <li class="py-15 px-5">
                    <!-- checkbox -->
                    <input type="checkbox" id="basic_checkbox_10" class="filled-in">
                    <label for="basic_checkbox_10" class="mb-0 h-15"></label>
                    <span class="text-line">Proin nec mi porta</span>
                    <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
                    <div class="tools">
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-trash-o"></i>
                    </div>
                </li>
            </ul>
        </div>
        <!-- /.tab-pane -->
    </div>
</aside>
<!-- /.control-sidebar -->

<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
