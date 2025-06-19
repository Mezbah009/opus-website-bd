<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
        <img src="{{ asset('admin-assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Opus Bangladesh</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{ route('sliders.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-camera"></i>
                        <p>Slider</p>
                    </a>
                </li> --}}
                <!-- Home menu with submenus -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Home
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('sliders.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-camera"></i>
                                <p>Slider</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('home_first_sections.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-info-circle"></i>
                                <p>Home First Section</p>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="{{ route('home_second_sections.index') }}" class="nav-link">
                                <i class="nav-icon far fa-file-alt"></i>
                                <p>Home Second Section</p>
                            </a>
                        </li> --}}
                        <li class="nav-item">
                            <a href="{{ route('home_services_section.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-hands-helping"></i>
                                <p>Home Service Section</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('testimonials.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-quote-left"></i>

                                <p>Testimonial</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- About n=ment with submenus -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-info-circle"></i>
                        <p>
                            About
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('home_second_sections.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-globe"></i>
                                <p>About First Section</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('journeys.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-route"></i> <!-- Represents a journey or path -->
                                <p>Our Journey</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('showcases.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-briefcase"></i>
                                <!-- Represents services or business showcase -->
                                <p>Service Showcase</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('accreditation.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-ribbon"></i>
                                <p>Accreditation Section</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('managements.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-users-cog"></i>
                                <p>Management Section</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('awards.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-trophy"></i>
                                <p>Awards Section</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('quality.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-shield-alt"></i>
                                <p>Quality Section</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Other menu items -->
                <li class="nav-item">
                    <a href="{{ route('products.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-box"></i>
                        <p>Product</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('cyber_security.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>Cyber Security</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('ai_solutions.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-brain"></i>
                        <p>Ai Solutions</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('team_members.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>Team Member</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('clients.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-handshake"></i>
                        <p>Clients</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('services.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>Service</p>
                    </a>
                </li>

                <!-- Blogs menu with submenus -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-pen-fancy"></i>


                        <p>
                            Blogs
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('blogs.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-pen-fancy"></i>

                                <p>Blogs</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('blog_authors.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>

                                <p>Blogs Author</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('blog_categories.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-folder"></i>
                                <p>Blogs Category</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('blog_tags.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-tag"></i>

                                <p>Blog Tag</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.comments.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-comments"></i>
                                <p>comments</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Blogs menu end-->

                <li class="nav-item">
                    <a href="{{ route('casestudy.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>Case Study</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('jobs.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-briefcase"></i>
                        <p>Jobs</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contact.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>Contact Us</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.contact.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>Contact Messages</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('demos.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-video"></i>
                        <p>Demo Requests</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('numbers.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-phone"></i>
                        <p>Numbers & Email</p>
                    </a>
                </li>
                {{--
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon  far fa-file-alt"></i>
                        <p>Pages</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>Product Reviews</p>
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-wrench"></i>
                        <p>Settings</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>

    <!-- /.sidebar -->
</aside>
