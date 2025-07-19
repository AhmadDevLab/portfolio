
        <div class="loader">
            <div class="spinner-border text-primary" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <div class="alpha-app">
            <div class="page-header">
                <nav class="navbar navbar-expand primary">
                    <section class="material-design-hamburger navigation-toggle">
                        <a href="javascript:void(0)" data-activates="slide-out" class="button-collapse material-design-hamburger__icon">
                            <span class="material-design-hamburger__layer"></span>
                        </a>
                    </section>
                    <a class="navbar-brand" href="#">Ahmed</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <form class="form-inline my-2 my-lg-0 search">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <label for="search" class="active"><i class="material-icons search-icon">search</i></label>
                            <a href="#" id="close-search-input"><i class="material-icons">close</i></a>
                        </form>
                        <ul class="navbar-nav ml-auto">
                            <li class="d-md-block d-lg-none nav-item">
                                <a class="nav-link search-link" href="#"><i class="material-icons">search</i></a>
                            </li>
                            <li class="nav-item dropdown d-none d-lg-block">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">notifications_none</i>
                                    <span class="badge">4</span>
                                </a>
                           
                            </li>
                            <li class="nav-item">
                                <a class="nav-link right-sidebar-link" href="#"><i class="material-icons">more_vert</i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div><!-- Page Header -->
    <!-- Quick Search Results -->
            <div class="page-sidebar">
                <div class="page-sidebar-inner">
                    <div class="page-sidebar-profile">
                        <div class="sidebar-profile-image">
                            <img src="../assets/images/avatars/avatar1.png">
                        </div>
                        <div class="sidebar-profile-info">
                            <a href="javascript:void(0);" class="account-settings-link">
                                <p>Ahmed</p>
                                
                            </a>
                        </div>
                    </div>
                    <div class="page-sidebar-menu">
                   
                        <div class="sidebar-accordion-menu">
                            <ul class="sidebar-menu list-unstyled">
                                <li>
                                    <a href="/Portfolio_ahmed/backend/index.php" class="waves-effect waves-grey active">
                                        <i class="material-icons">settings_input_svideo</i>Dashboard
                                    </a>
                                </li>
   <!-- Hero Section Dropdown -->
<li>
    <a href="#" class="waves-effect waves-grey d-flex justify-content-between align-items-center">
        <span class="d-flex align-items-center">
            <i class="fas fa-layer-group me-1" style="font-size: 13px;"></i> Hero Section
        </span>
        <i class="material-icons sub-arrow">keyboard_arrow_right</i>
    </a>
    <ul class="accordion-submenu list-unstyled ps-3">
        <li>
            <a href="/Portfolio_ahmed/backend/crud/add.php?table=hero_areas" class="d-flex align-items-center">
                <i class="fas fa-plus-circle" style="font-size: 13px; margin-right: 6px;"></i> Add Hero
            </a>
        </li>
        <li>
            <a href="/Portfolio_ahmed/backend/crud/show.php?table=hero_areas" class="d-flex align-items-center">
                <i class="fas fa-eye" style="font-size: 13px; margin-right: 6px;"></i> Show Hero
            </a>
        </li>
    </ul>
</li>

<!-- About Section Dropdown -->
<li>
    <a href="#" class="waves-effect waves-grey d-flex justify-content-between align-items-center">
        <span class="d-flex align-items-center">
            <i class="fas fa-info-circle me-1" style="font-size: 13px;"></i> About Section
        </span>
        <i class="material-icons sub-arrow">keyboard_arrow_right</i>
    </a>
    <ul class="accordion-submenu list-unstyled ps-3">
        <li>
            <a href="/Portfolio_ahmed/backend/crud/add.php?table=about_section" class="d-flex align-items-center">
                <i class="fas fa-plus-circle" style="font-size: 13px; margin-right: 6px;"></i> Add About
            </a>
        </li>
        <li>
            <a href="/Portfolio_ahmed/backend/crud/show.php?table=about_section" class="d-flex align-items-center">
                <i class="fas fa-eye" style="font-size: 13px; margin-right: 6px;"></i> Show About
            </a>
        </li>
    </ul>
</li>

<li>
    <a href="#" class="waves-effect waves-grey d-flex justify-content-between align-items-center">
        <span class="d-flex align-items-center">
            <i class="fas fa-project-diagram me-1" style="font-size: 13px;"></i> Projects Section
        </span>
        <i class="material-icons sub-arrow">keyboard_arrow_right</i>
    </a>
    <ul class="accordion-submenu list-unstyled ps-3">
        <li>
            <a href="/Portfolio_ahmed/backend/crud/add.php?table=projects" class="d-flex align-items-center">
                <i class="fas fa-plus-circle me-2" style="font-size: 13px;"></i> Add Project
            </a>
        </li>
        <li>
            <a href="/Portfolio_ahmed/backend/crud/show.php?table=projects" class="d-flex align-items-center">
                <i class="fas fa-eye me-2" style="font-size: 13px;"></i> Show Projects
            </a>
        </li>
    </ul>
</li>


<li>
    <a href="#" class="waves-effect waves-grey d-flex justify-content-between align-items-center">
        <span class="d-flex align-items-center">
            <i class="fab fa-github me-1" style="font-size: 13px;"></i> GitHub Contributs
        </span>
        <i class="material-icons sub-arrow">keyboard_arrow_right</i>
    </a>
    <ul class="accordion-submenu list-unstyled ps-3">
        <li>
            <a href="/Portfolio_ahmed/backend/crud/add.php?table=github_contribution" class="d-flex align-items-center">
                <i class="fas fa-plus-circle" style="font-size: 13px; margin-right: 6px;"></i> Add Contributs
            </a>
        </li>
        <li>
            <a href="/Portfolio_ahmed/backend/crud/show.php?table=github_contribution" class="d-flex align-items-center">
                <i class="fas fa-eye" style="font-size: 13px; margin-right: 6px;"></i> Show Contributs
            </a>
        </li>
    </ul>
</li>
<li>
    <a href="#" class="waves-effect waves-grey d-flex justify-content-between align-items-center">
        <span class="d-flex align-items-center">
            <i class="fas fa-star me-1" style="font-size: 13px;"></i> Skill Section
        </span>
        <i class="material-icons sub-arrow">keyboard_arrow_right</i>
    </a>
    <ul class="accordion-submenu list-unstyled ps-3">
        <li>
            <a href="/Portfolio_ahmed/backend/crud/add.php?table=skills" class="d-flex align-items-center">
                <i class="fas fa-plus-circle" style="font-size: 13px; margin-right: 6px;"></i> Add Skill
            </a>
        </li>
        <li>
            <a href="/Portfolio_ahmed/backend/crud/show.php?table=skills" class="d-flex align-items-center">
                <i class="fas fa-eye" style="font-size: 13px; margin-right: 6px;"></i> Show Skills
            </a>
        </li>
    </ul>
</li>

                               

<!-- Contact Section Dropdown -->
<li>
    <a href="#" class="waves-effect waves-grey d-flex justify-content-between align-items-center">
        <span class="d-flex align-items-center">
            <i class="fas fa-envelope me-1" style="font-size: 13px;"></i> Contact Section
        </span>
        <i class="material-icons sub-arrow">keyboard_arrow_right</i>
    </a>
    <ul class="accordion-submenu list-unstyled ps-3">
        <li>
            <a href="/Portfolio_ahmed/backend/crud/show.php?table=contact_messages" class="d-flex align-items-center">
                <i class="fas fa-eye" style="font-size: 13px; margin-right: 6px;"></i> Show Contacts
            </a>
        </li>
    </ul>
</li>
                 
                           <li>
    <a href="#" class="waves-effect waves-grey d-flex justify-content-between align-items-center">
        <span class="d-flex align-items-center">
            <i class="fas fa-user-shield me-2" style="font-size: 13px;"></i> Admin Section
        </span>
        <i class="material-icons sub-arrow">keyboard_arrow_right</i>
    </a>
    <ul class="accordion-submenu list-unstyled ps-3">
        <li>
            <a href="/Portfolio_ahmed/backend/crud/show.php?table=admin_users" class="d-flex align-items-center">
                <i class="fas fa-users-cog me-2" style="font-size: 13px;"></i> Show Admins
            </a>
        </li>
        <!-- <li>
            <a href="/Portfolio_ahmed/backend/admin/pages-sign-in.html" class="d-flex align-items-center">
                <i class="fas fa-sign-in-alt me-2" style="font-size: 13px;"></i> Sign In
            </a>
        </li> -->
        <li>
            <a href="/Portfolio_ahmed/backend/admin/pages-sign-up.php" class="d-flex align-items-center">
                <i class="fas fa-user-plus me-2" style="font-size: 13px;"></i> Sign Up
            </a>
        </li>
        <li>
            <a href="/Portfolio_ahmed/backend/admin/logout.php" class="d-flex align-items-center">
                <i class="fas fa-sign-out-alt me-2" style="font-size: 13px;"></i> Logout
            </a>
        </li>
    </ul>
</li>

                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div><!-- Left Sidebar -->
            <div class="page-content">

                <div class="container-fluid">
                 
                  
                </div>
                
            </div><!-- Page Content -->
            <div class="page-right-sidebar">
                <div class="page-right-sidebar-inner">
                    <div class="right-sidebar-header">
                        <ul class="nav nav-tabs">
                          
                            <li class="nav-item">
                                <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings-content" role="tab" aria-controls="settings" aria-selected="false">Settings</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="sidebar-messages tab-pane fade show active" id="chat-content" role="tabpanel" aria-labelledby="chat-content">
                       
                            <div class="chat-sidebar-options">
                                <a href="#" class="float-left"><i class="material-icons">edit</i></a>
                                <a href="#" class="float-right"><i class="material-icons">settings</i></a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="settings-content" role="tabpanel" aria-labelledby="settings-content">
                            <p class="right-sidebar-heading">SYSTEM</p>
                            <div class="settings-list">
                                <div class="setting-item">
                                    <div class="setting-text">Notifications</div>
                                    <div class="setting-set">
                                        <div class="material-switch pull-right">
                                            <input id="set-1" name="someSwitchOption001" type="checkbox" checked/>
                                            <label for="set-1" class="label-default"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">Quick Results</div>
                                    <div class="setting-set">
                                        <div class="material-switch pull-right">
                                            <input id="set-2" name="someSwitchOption001" type="checkbox" checked/>
                                            <label for="set-2" class="label-default"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">Auto Updates</div>
                                    <div class="setting-set">
                                        <div class="material-switch pull-right">
                                            <input id="set-3" name="someSwitchOption001" type="checkbox"/>
                                            <label for="set-3" class="label-default"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         
                        </div>
                    </div>
                </div>
            </div><!-- Right Sidebar (CHAT & SETTINGS) -->
            <div class="chat-sidebar">
                <p class="sidebar-chat-name">Tom Simpson<a href="#" data-activates="chat-messages" class="chat-message-link"><i class="material-icons">keyboard_arrow_right</i></a></p>
                <div class="messages-container">
                    <div class="message-wrapper them">
                        <div class="circle-wrapper"><img src="../assets/images/avatars/avatar1.png" class="circle" alt=""></div>
                        <div class="text-wrapper">Lorem Ipsum</div>
                    </div>
                    <div class="message-wrapper me">
                        <div class="circle-wrapper"><img src="../assets/images/avatars/avatar2.png" class="circle" alt=""></div>
                        <div class="text-wrapper">Integer in faucibus diam?</div>
                    </div>
                    <div class="message-wrapper them">
                        <div class="circle-wrapper"><img src="../assets/images/avatars/avatar1.png" class="circle" alt=""></div>
                        <div class="text-wrapper">Vivamus quis neque volutpat, hendrerit justo vitae, suscipit dui</div>
                    </div>
                    <div class="message-wrapper me">
                        <div class="circle-wrapper"><img src="../assets/images/avatars/avatar2.png" class="circle" alt=""></div>
                        <div class="text-wrapper">Suspendisse condimentum tortor et lorem pretium</div>
                    </div>
                    <div class="message-wrapper them">
                        <div class="circle-wrapper"><img src="../assets/images/avatars/avatar1.png" class="circle" alt=""></div>
                        <div class="text-wrapper">dolore eu fugiat nulla pariatur</div>
                    </div>
                    <div class="message-wrapper me">
                        <div class="circle-wrapper"><img src="../assets/images/avatars/avatar2.png" class="circle" alt=""></div>
                        <div class="text-wrapper">Duis maximus leo eget massa porta</div>
                    </div>
                </div>
                <div class="message-compose-box">
                    <div class="input-field">
                        
                        <div class="form-group">
                            <label for="message_compose">Write message</label>
                            <input placeholder="Write message" id="message_compose" type="text">
                        </div>
                    </div>
                </div>
            </div><!-- Chat Sidebar -->
            
            
        </div><!-- App Container -->
      