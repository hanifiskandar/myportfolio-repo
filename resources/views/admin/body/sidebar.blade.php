<div class="vertical-menu">

<div data-simplebar class="h-100">

    <!-- User details -->
  

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title">Menu</li>

            <li>
                <a href="index.html" class="waves-effect">
                    <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                    <span>Dashboard</span>
                </a>
            </li>

            {{-- <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-mail-send-line"></i>
                    <span>Home Setup</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('home.setup') }}">Home Setup</a></li>
                    
                </ul>
            </li> --}}
            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-mail-send-line"></i>
                    <span>Personal Detail Setup</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('personal-detail.setup') }}">Personal Detail Setup</a></li>
                    
                </ul>
            </li>
            {{-- <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-mail-send-line"></i>
                    <span>About Setup</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('about.setup') }}">About Setup</a></li>
                    
                </ul>
            </li> --}}
            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-mail-send-line"></i>
                    <span>Skills Setup</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('skill.setup') }}">Add Skill</a></li>
                    <li><a href="{{ route('skill.show') }}">Skills</a></li>
                    
                </ul>
            </li>
            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-mail-send-line"></i>
                    <span>Resume Setup</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('resume.setup') }}">Add Resume</a></li>
                    <li><a href="{{ route('resume.all') }}">All Resume</a></li>
                    
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-mail-send-line"></i>
                    <span>Work Setup</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('work.setup') }}">Add Work</a></li>
                    <li><a href="{{ route('work.all') }}">All Work</a></li>
                    
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-mail-send-line"></i>
                    <span>Contact Setup</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    {{-- <li><a href="{{ route('work.setup') }}">Add Work</a></li> --}}
                    <li><a href="{{ route('contact.all') }}">All Contact</a></li>
                    
                </ul>
            </li>



            
        </ul>
    </div>
    <!-- Sidebar -->
</div>
</div>