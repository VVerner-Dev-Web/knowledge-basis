<div x-data="initNavbar()" x-on:scroll.window="scroll()" class="navbar is-scrolled is-fixed-top is-solid" role="navigation"
    aria-label="main navigation"  :class="{
            &#39;is-scrolled&#39;: scrolled,
            &#39;&#39;: !scrolled,
            &#39;is-solid&#39;: mobileOpen,
            &#39;&#39;: !mobileOpen
        }">
    <div class="container">
      <div class="navbar-brand">
        <a class="navbar-item" href="<?php echo get_home_url();?>">
            <img id="site-logo" width="150" height="90" class="header-logo">
        </a>

        <div class="navbar-burger" @click="openMobileMenu()">
          <div class="menu-toggle">
            <div class="icon-box-toggle is-navbar" :class="{
                    &#39;active&#39;: mobileOpen,
                    &#39;&#39;: !mobileOpen
                }">
              <div class="rotate">
                <i class="icon-line-top"></i>
                <i class="icon-line-center"></i>
                <i class="icon-line-bottom"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="navbar-menu" :class="{
                &#39;is-active&#39;: mobileOpen,
                &#39;&#39;: !mobileOpen
            }">
        <div class="navbar-start">
          <a href="#" class="navbar-item"> Categorias </a>
          <a href="#" class="navbar-item"> Conteúdos </a>
          <a href="#" class="navbar-item"> Login </a>
        </div>

        <div class="navbar-end">
          <div class="navbar-item is-mobile-centered">
            <label class="theme-toggle">
              <input type="checkbox" x-on:change="toggleTheme()">
              <span class="theme-toggle-inner">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                  role="img" class="iconify iconify--feather sun-icon" width="1em" height="1em"
                  preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" data-icon="feather:sun">
                  <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                    <circle cx="12" cy="12" r="5"></circle>
                    <path
                      d="M12 1v2m0 18v2M4.22 4.22l1.42 1.42m12.72 12.72l1.42 1.42M1 12h2m18 0h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42">
                    </path>
                  </g>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                  role="img" class="iconify iconify--feather moon-icon" width="1em" height="1em"
                  preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" data-icon="feather:moon">
                  <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" d="M21 12.79A9 9 0 1 1 11.21 3A7 7 0 0 0 21 12.79z"></path>
                </svg>
              </span>
            </label>
          </div>
          <div class="navbar-item">
            <div class="buttons">
              <a class="button is-long-1 is-secondary is-outlined"> Explore </a>
              <a class="button is-primary is-long-1 raised"> Cadastre-se </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
