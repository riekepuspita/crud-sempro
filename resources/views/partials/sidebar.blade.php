    <nav id="sidebar" aria-label="Main Navigation">
        <!-- Side Header -->
        <div class="content-header">
            <!-- Logo -->
            <a class="font-semibold text-dual" href="/">
                <span class="smini-visible">
                    <i class="fa fa-circle-notch text-primary"></i>
                </span>
                <span class="smini-hide fs-5 tracking-wider">One<span class="fw-normal">UI</span></span>
            </a>
            <!-- END Logo -->

            <!-- Extra -->
            <div>
                <!-- Dark Mode -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <a class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="dark_mode_toggle"
                    href="javascript:void(0)">
                    <i class="far fa-moon"></i>
                </a>
                <!-- END Dark Mode -->

                <!-- Options -->
                <div class="dropdown d-inline-block ms-1">
                    <a class="btn btn-sm btn-alt-secondary" id="sidebar-themes-dropdown" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="fa fa-brush"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end fs-sm smini-hide border-0"
                        aria-labelledby="sidebar-themes-dropdown">
                        <!-- Sidebar Styles -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <a class="dropdown-item fw-medium" data-toggle="layout" data-action="sidebar_style_light"
                            href="javascript:void(0)">
                            <span>Sidebar Light</span>
                        </a>
                        <a class="dropdown-item fw-medium" data-toggle="layout" data-action="sidebar_style_dark"
                            href="javascript:void(0)">
                            <span>Sidebar Dark</span>
                        </a>
                        <!-- END Sidebar Styles -->

                        <div class="dropdown-divider"></div>

                        <!-- Header Styles -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <a class="dropdown-item fw-medium" data-toggle="layout" data-action="header_style_light"
                            href="javascript:void(0)">
                            <span>Header Light</span>
                        </a>
                        <a class="dropdown-item fw-medium" data-toggle="layout" data-action="header_style_dark"
                            href="javascript:void(0)">
                            <span>Header Dark</span>
                        </a>
                        <!-- END Header Styles -->
                    </div>
                </div>
                <!-- END Options -->

                <!-- Close Sidebar, Visible only on mobile screens -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <a class="d-lg-none btn btn-sm btn-alt-secondary ms-1" data-toggle="layout" data-action="sidebar_close"
                    href="javascript:void(0)">
                    <i class="fa fa-fw fa-times"></i>
                </a>
                <!-- END Close Sidebar -->
            </div>
            <!-- END Extra -->
        </div>
        <!-- END Side Header -->
