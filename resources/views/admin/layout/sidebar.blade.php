<nav class="sidebar">
  <div class="sidebar-header">
    <a href="{{route('dashboard')}}" class="sidebar-brand">
        Brooklyn<span>UI</span>
    </a>
    <div class="sidebar-toggler not-active">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="sidebar-body">
    <ul class="nav">
      <li class="nav-item nav-category">Main</li>
      <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ route('dashboard') }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['email/*']) }}">
        <a class="nav-link" data-bs-toggle="collapse" href="#email" role="button" aria-expanded="{{ is_active_route(['email/*']) }}" aria-controls="email">
          <i class="link-icon" data-feather="image"></i>
          <span class="link-title">Gallery</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ show_class(['email/*']) }}" id="email">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ route('gallerycategory.index') }}" class="nav-link {{ active_class(['email/inbox']) }}">Category</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('gallery.index') }}" class="nav-link {{ active_class(['email/read']) }}">All Gallery</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('gallery.create') }}" class="nav-link {{ active_class(['email/compose']) }}">Add Gallery</a>
            </li>
          </ul>
        </div>
      </li>
      {{-- Testmonial --}}
      <li class="nav-item {{ active_class(['admin/testmonial/*']) }}">
        <a class="nav-link" data-bs-toggle="collapse" href="#testmonial" role="button" aria-expanded="{{ is_active_route(['testmonial/*']) }}" aria-controls="testmonial">
          <i class="link-icon" data-feather="clipboard"></i>
          <span class="link-title">Testmonial</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ show_class(['testmonial/*']) }}" id="testmonial">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ route('testmonial.index') }}" class="nav-link {{ active_class(['admin/testmonial']) }}">All Testmonial</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('testmonial.create') }}" class="nav-link {{ active_class(['admin/testmonial/create']) }}">Add Testmonial</a>
            </li>
          </ul>
        </div>
      </li>
      {{-- blog --}}
      <li class="nav-item {{ active_class(['admin/blog/*']) }}">
        <a class="nav-link" data-bs-toggle="collapse" href="#blog" role="button" aria-expanded="{{ is_active_route(['blog/*']) }}" aria-controls="blog">
          <i class="link-icon" data-feather="bold"></i>
          <span class="link-title">Blog</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ show_class(['blog/*']) }}" id="blog">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ route('blog.index') }}" class="nav-link {{ active_class(['admin/blog']) }}">All Blog</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('blog.create') }}" class="nav-link {{ active_class(['admin/blog/create']) }}">Add Blog</a>
            </li>
          </ul>
        </div>
      </li>
      {{-- user --}}
      <li class="nav-item {{ active_class(['admin/usere/*']) }}">
        <a class="nav-link" data-bs-toggle="collapse" href="#usere" role="button" aria-expanded="{{ is_active_route(['usere/*']) }}" aria-controls="usere">
          <i class="link-icon" data-feather="users"></i>
          <span class="link-title">Users</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ show_class(['usere/*']) }}" id="usere">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ route('user.index') }}" class="nav-link {{ active_class(['admin/usere']) }}">All User</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('user.create') }}" class="nav-link {{ active_class(['admin/usere/create']) }}">Add User</a>
            </li>
          </ul>
        </div>
      </li>
      {{-- settings --}}
      <li class="nav-item {{ active_class(['apps/setting']) }}">
        <a href="{{ route('site') }}" class="nav-link">
          <i class="link-icon" data-feather="message-square"></i>
          <span class="link-title">Setting</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['apps/calendar']) }}">
        <a href="{{ url('admin/apps/calendar') }}" class="nav-link">
          <i class="link-icon" data-feather="calendar"></i>
          <span class="link-title">Calendar</span>
        </a>
      </li>
      
    </ul>
  </div>
</nav>
<nav class="settings-sidebar">
  <div class="sidebar-body">
    <a href="#" class="settings-sidebar-toggler">
      <i data-feather="settings"></i>
    </a>
    <h6 class="text-muted mb-2">Sidebar:</h6>
    <div class="mb-3 pb-3 border-bottom">
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight" value="sidebar-light" checked>
          Light
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark" value="sidebar-dark">
          Dark
        </label>
      </div>
    </div>
    <div class="theme-wrapper">
      <h6 class="text-muted mb-2">Light Version:</h6>
      <a class="theme-item active" href="https://www.nobleui.com/laravel/template/demo1/">
        <img src="{{ url('adminassets/images/screenshots/light.jpg') }}" alt="light version">
      </a>
      <h6 class="text-muted mb-2">Dark Version:</h6>
      <a class="theme-item" href="https://www.nobleui.com/laravel/template/demo2/">
        <img src="{{ url('adminassets/images/screenshots/dark.jpg') }}" alt="light version">
      </a>
    </div>
  </div>
</nav>
