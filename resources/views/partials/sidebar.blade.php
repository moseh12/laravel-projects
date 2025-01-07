<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion " id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="bi bi-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Eclassify Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading font-weight-bold">
        <strong>Ads Listing</strong>
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.categories.index') }}">
            <i class="bi bi-tag"style="color: orange; text-shadow: 0 0 10px orange;"></i>
            <span>Categories</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.custom_fields.index') }}">
            <i class="bi bi-text-paragraph" style="color: orange; text-shadow: 0 0 10px orange;"></i>
            <span>Custom Fields</span>
        </a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        <b>ITEM MANAGEMENT</b>
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.items.index') }}">
            <i class="bi bi-box"style="color: orange; text-shadow: 0 0 10px orange;"></i>
            <span>Items</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.tips.index') }}">
            <i class="bi bi-lightbulb" style="color: orange; text-shadow: 0 0 10px orange;"></i>

            <span>Tips</span>
        </a>
    </li>
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        BUY UTILITIES
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.buy_utilities.index') }}">
            <i class="bi bi-lightning-charge-fill text-warning"></i>
            <span>Buy Utilities</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        PACKAGE MANAGEMENT
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.item_listing.index') }}">
            <i class="bi bi-list"style="color: orange; text-shadow: 0 0 10px orange;"></i>
            <span>Item Listing Packages</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.advertisement.index') }}">
            <i class="bi bi-megaphone" style="color: orange; text-shadow: 0 0 10px orange;"></i>
            <span>Advertisement Packages</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.user_packages.index') }}">
            <i class="bi bi-user-check" style="color: orange; text-shadow: 0 0 10px orange;"></i>
            <span>User Packages</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.payment.index') }}">
            <i class="bi bi-credit-card" style="color: orange; text-shadow: 0 0 10px orange;"></i>
            <span>Payment Transactions</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        HOME SCREEN MANAGEMENT
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.slider.index') }}">
            <i class="bi bi-sliders" style="color: orange; text-shadow: 0 0 10px orange;"></i>
            <span>Slider</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.future_section.index') }}">
            <i class="bi bi-rocket" style="color: orange; text-shadow: 0 0 10px orange;"></i>
            <span>Future Section</span>
        </a>
    </li>
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        PLACES/LOCATION MANAGEMENT
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.countries.index') }}">
            <i class="bi bi-globe"style="color: orange; text-shadow: 0 0 10px orange;"></i>
            <span>Countries</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.states.index') }}">
            <i class="bi bi-flag" style="color: orange; text-shadow: 0 0 10px orange;"></i>
            <span>States</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.city.index') }}">

            <i class="bi bi-house-door" style="color: orange; text-shadow: 0 0 10px orange;"></i>
            <span>City</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.areas.index') }}">
            <i class="bi bi-map" style="color: orange; text-shadow: 0 0 10px orange;"></i>
            <span>Areas</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        REPORT MANAGEMENT
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.report.index') }}">
            <i class="bi bi-flag" style="color: red; text-shadow: 0 0 10px orange;"></i>
            <span>Report Reasons</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.user_report.index') }}">
            <i class="bi bi-file-earmark-bar-graph" style="color: orange; text-shadow: 0 0 10px orange;"></i>
<span>User Reports</span>


        </a>
    </li>

    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        PROMOTIONAL MESSAGES
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.notifications.index') }}">
            <i class="bi bi-bell" style="color: orange; text-shadow: 0 0 10px orange;"></i>
            <span>Send Notifications</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        CUSTOMERS
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.customers.index') }}">
            <i class="bi bi-people" style="color: orange; text-shadow: 0 0 10px orange;"></i>
            <span>Customers</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.chats.index') }}">
            <i class="bi bi-chat" style="color: orange; text-shadow: 0 0 10px orange;"></i>
            <span>Chats with Businesses</span>
        </a>
    </li>
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        FRAUD CASES
    </div>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="emergencyDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-shield-lock" style="color: red; text-shadow: 0 0 10px orange;"></i>
            <span>Report Emergencies</span>
        </a>
        <ul class="dropdown-menu" aria-labelledby="emergencyDropdown">
            <li>
                <a class="dropdown-item" href="{{ route('admin.police.index') }}">
                    <i class="bi bi-police" style="color: blue;"></i> Police
                </a>
            </li>
            <li>
                <a class="dropdown-item" href="{{ route('admin.fire.index') }}">
                    <i class="bi bi-fire" style="color: orange;"></i> Fire
                </a>
            </li>
            <li>
                <a class="dropdown-item" href="{{ route('admin.medical.index') }}">
                    <i class="bi bi-heart-pulse" style="color: red;"></i> Medical
                </a>
            </li>
            <li>
                <a class="dropdown-item" href="{{ route('admin.road.index') }}">
                    <i class="bi bi-cone-striped" style="color: green;"></i> Roadside and Safety
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="emergencyDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-shield-lock" style="color: red; text-shadow: 0 0 10px orange;"></i>
            <span>Report Emergencies</span>
        </a>
        <ul class="dropdown-menu" aria-labelledby="emergencyDropdown">
            <li><a class="dropdown-item" href="{{ route('admin.police.index') }}"><i class="bi bi-police" style="color: blue;"></i> Police</a></li>
            <li><a class="dropdown-item" href="{{ route('admin.fire.index') }}"><i class="bi bi-fire" style="color: orange;"></i> Fire</a></li>
            <li><a class="dropdown-item" href="{{ route('admin.medical.index') }}"><i class="bi bi-heart-pulse" style="color: red;"></i> Medical</a></li>
            <li><a class="dropdown-item" href="{{ route('admin.road.index') }}"><i class="bi bi-cone-striped" style="color: green;"></i> Roadside and Safety</a></li>
        </ul>
    </li>


    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.pending_cases.index') }}">
            <i class="bi bi-journal-text"style="color: orange; text-shadow: 0 0 10px orange;"></i>
            <span>Cases Pending</span>
        </a>
    </li>
     <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.solved_cases.index') }}">
            <i class="bi bi-check-circle" style="color: orange; text-shadow: 0 0 10px orange;"></i>
            <span>Cases Solved</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        STAFF MANAGEMENT
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.staff.index') }}">
            <i class="bi bi-person-fill" style="color: orange; text-shadow: 0 0 10px orange;"></i>
            <span>Staff</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.roles.index') }}">
            <i class="bi bi-key" style="color: orange; text-shadow: 0 0 10px orange;"></i>
            <span>Role Management</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        BLOG MANAGEMENT
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.blogs.index') }}">
            <i class="bi bi-pencil" style="color: orange; text-shadow: 0 0 10px orange;"></i>
            <span>Blogs</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        FAQS
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.faqs.index') }}">
            <i class="bi bi-question-circle" style="color: orange; text-shadow: 0 0 10px orange;"></i>
            <span>FAQs</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        SYSTEM SETTINGS
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.general_settings.index') }}">
            <i class="bi bi-sliders" style="color: orange; text-shadow: 0 0 10px orange;"></i>
            <span>General Settings</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.taxation.index') }}">
            <i class="bi bi-calculator" style="color: orange; text-shadow: 0 0 10px orange;"></i>
            <span>Tax Settings</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.currency.index') }}">
            <i class="bi bi-currency-dollar" style="color: orange; text-shadow: 0 0 10px orange;"></i>
            <span>Currency Settings</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.site.index') }}">
            <i class="bi bi-gear" style="color: orange; text-shadow: 0 0 10px orange;"></i>
            <span>Website Settings</span>
        </a>
    </li>
</ul>
<!-- End of Sidebar -->

