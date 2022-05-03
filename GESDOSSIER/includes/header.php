<body class="nk-body npc-apps apps-only has-apps-sidebar npc-apps-files">
    <div class="nk-app-root">
        <div class="nk-apps-sidebar is-theme">
            <div class="nk-apps-brand">
                <a href="../index.html" class="logo-link"><img class="logo-light logo-img"
                        src="images/logo-small.png" srcset="/demo3/images/logo-small2x.png 2x" alt="logo"><img
                        class="logo-dark logo-img" src="images/logo-dark-small.png"
                        srcset="/demo3/images/logo-dark-small2x.png 2x" alt="logo-dark"></a>
            </div>
            <div class="nk-sidebar-element">
                <div class="nk-sidebar-body">
                    <div class="nk-sidebar-content" data-simplebar>
                        <div class="nk-sidebar-menu">
                            <ul class="nk-menu apps-menu">
                                <li class="nk-menu-item"><a href="file-manager.html" class="nk-menu-link"
                                        title="File Manager"><span class="nk-menu-icon"><em
                                                class="icon ni ni-folder"></em></span></a></li>
                            </ul>
                        </div>
                        <div class="nk-sidebar-footer">
                            <ul class="nk-menu nk-menu-md">
                                <li class="nk-menu-item"><a href="#" class="nk-menu-link" title="Settings"><span
                                            class="nk-menu-icon"><em class="icon ni ni-setting"></em></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="nk-sidebar-profile nk-sidebar-profile-fixed dropdown">
                        <a href="#" data-bs-toggle="dropdown" data-offset="50,-60">
                            <div class="user-avatar"><span>AB</span> </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md ms-4">
                            <div class="dropdown-inner user-card-wrap d-none d-md-block">
                                <div class="user-card">
                                    <div class="user-avatar"><span>AB</span></div>
                                    <div class="user-info"><span class="lead-text"><?php echo $username?></span><span
                                            class="sub-text text-soft">info@softnio.com</span></div>
                                </div>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="../user-profile-regular.html"><em
                                                class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                    <li><a href="../user-profile-setting.html"><em
                                                class="icon ni ni-setting-alt"></em><span>Account Setting</span></a>
                                    </li>
                                    <li><a href="logout.php"><em
                                                class="icon ni ni-activity-alt"></em><span>Login Activity</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="logout.php"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-main ">
            <div class="nk-wrap ">
                <div class="nk-header nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ms-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em
                                        class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-app-name">
                                <div class="nk-header-app-logo"><em class="icon ni ni-folder bg-purple-dim"></em></div>
                                <div class="nk-header-app-info"><span class="sub-text">Apps</span><span
                                        class="lead-text">File Manager</span></div>
                            </div>
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle me-n1" data-bs-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm"><em class="icon ni ni-user-alt"></em>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>AB</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">Abu Bin Ishtiyak</span>
                                                        <span class="sub-text">info@softnio.com</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li>
                                                        <a href="../user-profile-regular.html"><em
                                                                class="icon ni ni-user-alt"></em><span>View
                                                                Profile</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="../user-profile-setting.html"><em
                                                                class="icon ni ni-setting-alt"></em><span>Account
                                                                Setting</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="../user-profile-activity.html"><em
                                                                class="icon ni ni-activity-alt"></em><span>Login
                                                                Activity</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li>
                                                        <a href="#"><em class="icon ni ni-signout"></em><span>Sign
                                                                out</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-content p-0">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-fmg">
                                <div class="nk-fmg-aside" data-content="files-aside" data-toggle-overlay="true"
                                    data-toggle-body="true" data-toggle-screen="lg" data-simplebar>
                                    <div class="nk-fmg-aside-wrap">
                                        <div class="nk-fmg-aside-top">
                                            <ul class="nk-fmg-menu">
                                                <li class="active"><a class="nk-fmg-menu-item"
                                                        href="home.php"><em
                                                            class="icon ni ni-home-alt"></em><span
                                                            class="nk-fmg-menu-text">Home</span></a></li>
                                                <li><a class="nk-fmg-menu-item" href="file.php"><em
                                                            class="icon ni ni-file-docs"></em><span
                                                            class="nk-fmg-menu-text">Equipe</span></a></li>
                                                <li><a class="nk-fmg-menu-item" href="file.php"><em
                                                            class="icon ni ni-star"></em><span
                                                            class="nk-fmg-menu-text">Starred</span></a></li>
                                                <li><a class="nk-fmg-menu-item" href="setting.php"><em
                                                            class="icon ni ni-setting-alt"></em><span
                                                            class="nk-fmg-menu-text">Settings</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="nk-fmg-aside-bottom">
                                            <div class="nk-fmg-status">
                                                <h6 class="nk-fmg-status-title"><em
                                                        class="icon ni ni-hard-drive"></em><span>Storage</span></h6>
                                                <div class="progress progress-md bg-light">
                                                    <div class="progress-bar" data-progress="5"></div>
                                                </div>
                                                <div class="nk-fmg-status-info">12.47 GB of 50 GB used</div>
                                                <div class="nk-fmg-status-action"><a href="#"
                                                        class="link link-primary link-sm">Upgrade Storage</a></div>
                                            </div>
                                            <div class="nk-fmg-switch">
                                                <div class="dropdown"><a href="#" data-bs-toggle="dropdown"
                                                        data-offset="-10, 12"
                                                        class="dropdown-toggle dropdown-indicator-unfold">
                                                        <div class="lead-text">Personal</div>
                                                        <div class="sub-text">Only you</div>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><span>Team Plan</span></a></li>
                                                            <li><a class="active" href="#"><span>Personal</span></a>
                                                            </li>
                                                            <li class="divider"></li>
                                                            <li><a class="link" href="#"><span>Upgrade Plan</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                