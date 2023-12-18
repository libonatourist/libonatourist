<header id="header-container" class="sticky-header ">

    <!-- Header -->
    <div id="header">
        <div class="container">
            <!-- Left Side Content -->
            <div class="left-side">
                <div id="logo"
                    data-logo-transparent="https://libonatour.x10.mx/wp-content/uploads/2023/10/387556346_1314548566093017_1374649050620187749_n-removebg-preview.png"
                    data-logo="https://libonatour.x10.mx/wp-content/uploads/2023/10/387556346_1314548566093017_1374649050620187749_n-removebg-preview.png"
                    data-logo-sticky="https://libonatour.x10.mx/wp-content/uploads/2023/10/387556346_1314548566093017_1374649050620187749_n-removebg-preview.png">
                    <a href="/" title="Libona Tour" rel="home">
                        <img id="listeo_logo"
                            src="https://libonatour.x10.mx/wp-content/uploads/2023/10/387556346_1314548566093017_1374649050620187749_n-removebg-preview.png"
                            data-rjs="" alt="Libona Tour" /></a>
                </div>

                <!-- Mobile Navigation -->
                <div class="mmenu-trigger ">
                    <button class="hamburger hamburger--collapse" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>

                <!-- Main Navigation -->
                <nav id="navigation" class="style-1">
                    <ul id="responsive" class="menu">
                        <li
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home <?php if(request()->route()->named('home')): ?> current-menu-item <?php endif; ?> page_item page-item-114 current_page_item menu-item-229 parentid0 depth0 dropdown">
                            <a href="/">Home</a>
                        </li>
                        <li
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-222 parentid0 depth0 dropdown <?php if(request()->route()->named('places')): ?> current-menu-item <?php endif; ?>">
                            <a href="<?php echo e(route('places')); ?>">Places to Go</a>
                        </li>
                        <li
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-686 parentid0 depth0 dropdown <?php if(request()->route()->named('about')): ?> current-menu-item <?php endif; ?>">
                            <a href="<?php echo e(route('about')); ?>">About Us</a>
                        </li>
                    </ul>
                </nav>
                <div class="clearfix"></div>
                <!-- Main Navigation / End -->

            </div>

            <!-- Left Side Content / End -->

        </div>
    </div>
    <!-- Header / End -->

</header>
<?php /**PATH C:\Users\Administrator\Desktop\projects\laravel_project\touring\tour\resources\views/layout/header.blade.php ENDPATH**/ ?>