<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin_dashboard') }}">Admin Panel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin_dashboard') }}"></a>
        </div>

        <ul class="sidebar-menu">

            <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin_dashboard') }}"><i class="fa-solid fa-palette"></i> <span>Dashboard</span></a>
            </li>

            <li
                class="nav-item dropdown {{ Request::is('admin/settings/*') || Request::is('admin/slider/*') || Request::is('admin/special/*') || Request::is('admin/feature/*') || Request::is('admin/testimonial/*') || Request::is('admin/counter/*') || Request::is('admin/faq/*') || Request::is('admin/other-pages/*') || Request::is('admin/home-page/*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fa-solid fa-gear"></i><span>Admin
                        Settings</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/settings/*') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin_settings_index') }}"><i class="fas fa-angle-right"></i> Settings</a>
                    </li>
                    <li class="{{ Request::is('admin/slider/*') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin_slider_index') }}"><i class="fas fa-angle-right"></i> Sliders</a></li>
                    <li class="{{ Request::is('admin/special/*') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin_special_edit') }}"><i class="fas fa-angle-right"></i> Special</a>
                    </li>
                    <li class="{{ Request::is('admin/feature/*') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin_feature_index') }}"><i class="fas fa-angle-right"></i> Features</a>
                    </li>
                    <li class="{{ Request::is('admin/testimonial/*') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin_testimonial_index') }}"><i class="fas fa-angle-right"></i>
                            Testimonials</a></li>
                    <li class="{{ Request::is('admin/counter/*') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin_counter_edit') }}"><i class="fas fa-angle-right"></i> Counters</a>
                    </li>
                    <li class="{{ Request::is('admin/faq/*') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin_faq_index') }}"><i class="fas fa-angle-right"></i> FAQs</a></li>
                    <li class="{{ Request::is('admin/other-pages/terms') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin_terms_page') }}">
                            <i class="fas fa-angle-right"></i> Terms Page
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/other-pages/privacy') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin_privacy_page') }}">
                            <i class="fas fa-angle-right"></i> Privacy Page
                        </a>
                    </li>

                    <li class="{{ Request::is('admin/home-page/*') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin_home_page_index') }}"><i class="fas fa-angle-right"></i> Home Page
                            Items</a></li>
                </ul>
            </li>


            <li
                class="nav-item dropdown {{ Request::is('admin/photo-category/*') || Request::is('admin/photo/*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fa-solid fa-camera"></i><span>Photo
                        Gallery</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/photo-category/*') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin_photo_category_index') }}"><i class="fas fa-angle-right"></i>
                            Categories</a></li>
                    <li class="{{ Request::is('admin/photo/*') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin_photo_index') }}"><i class="fas fa-angle-right"></i> Photos</a></li>
                </ul>
            </li>


            <li
                class="nav-item dropdown {{ Request::is('admin/video-category/*') || Request::is('admin/video/*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fa-solid fa-video"></i><span>Video
                        Gallery</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/video-category/*') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin_video_category_index') }}"><i class="fas fa-angle-right"></i>
                            Categories</a></li>
                    <li class="{{ Request::is('admin/video/*') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin_video_index') }}"><i class="fas fa-angle-right"></i> Videos</a></li>
                </ul>
            </li>

            <li
                class="nav-item dropdown {{ Request::is('admin/post-category/*') || Request::is('admin/post/*') || Request::is('admin/comments') || Request::is('admin/replies') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fa-solid fa-blog"></i><span>Blog
                        Section</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/post-category/*') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin_post_category_index') }}"><i class="fas fa-angle-right"></i>
                            Categories</a></li>
                    <li class="{{ Request::is('admin/post/*') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin_post_index') }}"><i class="fas fa-angle-right"></i> Posts</a></li>
                    <li class="{{ Request::is('admin/comments') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin_comment') }}"><i class="fas fa-angle-right"></i> Comments</a></li>
                    <li class="{{ Request::is('admin/replies') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin_reply') }}"><i class="fas fa-angle-right"></i> Replies</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown {{ Request::is('admin/subscriber/*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i
                        class="fa-solid fa-users-viewfinder"></i><span>Subscriber Section</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/subscriber/index') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin_subscriber_index') }}"><i class="fas fa-angle-right"></i> All
                            Subscribers</a></li>
                    <li class="{{ Request::is('admin/subscriber/send-message') ? 'active' : '' }}"><a
                            class="nav-link" href="{{ route('admin_subscriber_send_message') }}"><i
                                class="fas fa-angle-right"></i> Send Message to All</a></li>
                </ul>
            </li>

            <li class="{{ Request::is('admin/event/*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin_event_index') }}"><i class="fa-solid fa-calendar-days"></i>
                    <span>Events</span></a></li>

            <li class="{{ Request::is('admin/cause/*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin_cause_index') }}"><i class="fa-solid fa-hand-holding-hand"></i>
                    <span>Projects</span></a></li>

            <li class="{{ Request::is('admin/cause-approval*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin_cause_approval') }}"><i class="fa-solid fa-person-circle-check"></i>
                    <span>Projects Approval</span></a></li>

            <li class="{{ Request::is('admin/volunteer-opportunity/*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin_volunteer_opportunity_index') }}"><i
                        class="fa-solid fa-handshake-angle"></i>
                    <span>Volunteer opportunities</span></a></li>

            <li class="{{ Request::is('admin/users/*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin_user_index') }}"><i class="fa-solid fa-user"></i>
                    <span>Users</span></a></li>

        </ul>
    </aside>
</div>
