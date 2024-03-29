<!-- Header -->
<header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.html"><h2>Stand Blog<em>.</em></h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
              <a class="nav-link" href="/">Home
                <span class="sr-only">(current)</span>
              </a>
            </li> 
            <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
              <a class="nav-link" href="/about">About Us</a>
            </li>
            <li class="nav-item {{ Request::is('blog') ? 'active' : '' }}">
              <a class="nav-link" href="/blog">Blog Entries</a>
            </li>
            <li class="nav-item {{ Request::is('post-details') ? 'active' : '' }}">
              <a class="nav-link" href="/postdetails">Post Details</a>
            </li>
            <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
              <a class="nav-link" href="/contact">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</header>