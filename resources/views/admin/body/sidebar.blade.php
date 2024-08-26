<div class="vertical-menu">

<div data-simplebar class="h-100">

    <!-- User details -->
  

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title">Menu</li>

            <li>
                <a href="   /dashboard" class="waves-effect">
                    <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end"></span>
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-mail-send-line"></i>
                    <span>Personal Detail Setup</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('personal-detail.setup') }}">Personal Detail Setup</a></li>
                    
                </ul>
            </li>

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
                    <span>Work Experience Setup</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('work-experience.setup') }}">Add Work Experience</a></li>
                    <li><a href="{{ route('work-experience.show') }}">Work Experiences</a></li>    
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-mail-send-line"></i>
                    <span>Education Setup</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('education.setup') }}">Add Education</a></li>
                    <li><a href="{{ route('education.show') }}">Educations</a></li>     
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-mail-send-line"></i>
                    <span>Languages Setup</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('language.setup') }}">Add Language</a></li>
                    <li><a href="{{ route('language.show') }}">Languages</a></li>
                    
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-mail-send-line"></i>
                    <span>Reference Setup</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('reference.setup') }}">Add Reference</a></li>
                    <li><a href="{{ route('reference.show') }}">References</a></li>     
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-mail-send-line"></i>
                    <span>Contact Us</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('contact.setup') }}">Give Feedback</a></li>                   
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-mail-send-line"></i>
                    <span>Resume</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('resume.view') }}" target="_blank">View</a></li>                   
                    <li><a href="{{ route('resume.download') }}" target="_blank">Download</a></li>                   
                    <li><a href="{{ route('resume.showcase') }}" target="_blank">Showcase</a></li>                   
                </ul>
            </li>

            {{-- <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-mail-send-line"></i>
                    <span>Contact Setup</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
            
                    
                </ul>
            </li> --}}



            
        </ul>
    </div>
    <!-- Sidebar -->
</div>
</div>