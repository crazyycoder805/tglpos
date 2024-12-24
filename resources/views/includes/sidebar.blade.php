<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">
        <div class="multinav">
            <div class="multinav-scroll" style="height: 99%;">
                @php
                    use Illuminate\Support\Facades\Auth;

                    // $allowedSections = $user->sectionsAllow?->fields ?? [];
                    $allSections = [
                        'home' => ['icon' => 'icon-Home', 'label' => 'Home', 'url' => '/'],
                        'products_setup' => [
                            'icon' => 'icon-Home',
                            'label' => 'Products Setup',
                            'children' => [
                                ['label' => 'Products', 'url' => '/products'],
                                ['label' => 'Sections', 'url' => '/sections'],
                            ],
                        ],
                        'expenses' => [
                            'icon' => 'icon-Home',
                            'label' => 'Expenses',
                            'url' => '/expenses',
                        ],
                        'accounts' => [
                            'icon' => 'icon-Home',
                            'label' => 'Accounts',
                            'children' => [
                                ['label' => 'Bussines Setup', 'url' => '/businesses'],
                                ['label' => 'Types Setup', 'url' => '/types'],
                                ['label' => 'Category Setup', 'url' => '/categories'],
                                ['label' => 'Sub Category', 'url' => '/sub-categories'],
                                ['label' => 'Groups Setup', 'url' => '/groups'],
                                ['label' => 'Subsidary Setup', 'url' => '/subsidaries'],
                            ],
                        ],

                        'suppliers' => [
                            'icon' => 'icon-Home',
                            'label' => 'Suppliers',
                            'url' => '/suppliers',
                        ],
                        'user' => [
                            'icon' => 'icon-Home',
                            'label' => 'User',
                            'url' => '/manage-users',
                        ],
                        'services' => [
                            'icon' => 'icon-Home',
                            'label' => 'Service Setup',
                            'url' => '/services',
                        ],
                        'cashiers' => [
                            'icon' => 'icon-Home',
                            'label' => 'Cashiers',
                            'url' => '/cashiers',
                        ],
                        'settings' => [
                            'icon' => 'icon-Home',
                            'label' => 'Settings',
                            'url' => '/software-settings',
                        ],
                        'reports' => [
                            'icon' => 'icon-Home',
                            'label' => 'Reportings',
                            'children' => [['label' => 'Daily Reports', 'url' => '/daily-reports']],
                        ],
                    ];
                @endphp
                <!-- sidebar menu-->
                <ul class="sidebar-menu" data-widget="tree">
                    @foreach ($allSections as $key => $section)
                        <li class="treeview">
                            <a href="#">
                                <i data-feather="home"></i>
                                <span>{{ $section['label'] }}</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                @if (isset($section['children']))
                                    <!-- Check if 'children' is provided -->
                                    @foreach ($section['children'] as $child)
                                        <li>
                                            <a href="{{ $child['url'] }}">
                                                <i class="{{ $section['icon'] }}">
                                                    <span class="path1"></span><span class="path2"></span>
                                                </i>
                                                {{ $child['label'] }}
                                            </a>
                                        </li>
                                    @endforeach
                                @elseif (isset($section['url']))
                                    <!-- Fallback to single 'url' -->
                                    <li>
                                        <a href="{{ $section['url'] }}">
                                            <i class="{{ $section['icon'] }}">
                                                <span class="path1"></span><span class="path2"></span>
                                            </i>
                                            {{ $section['label'] }}
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </li>
                    @endforeach
                </ul>


            </div>
        </div>
    </section>
</aside>
