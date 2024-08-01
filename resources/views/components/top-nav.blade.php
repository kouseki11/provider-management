<!-- BEGIN: Mobile Menu -->
<div class="mobile-menu group top-0 inset-x-0 fixed bg-theme-1/90 z-[60] border-b border-white/[0.08] dark:bg-darkmode-800/90 md:hidden before:content-[''] before:w-full before:h-screen before:z-10 before:fixed before:inset-x-0 before:bg-black/90 before:transition-opacity before:duration-200 before:ease-in-out before:invisible before:opacity-0 [&.mobile-menu--active]:before:visible [&.mobile-menu--active]:before:opacity-100">
    <div class="flex h-[70px] items-center px-3 sm:px-8">
        <a class="mr-auto flex" href="#">
            <img class="w-6" src="{{ asset('dist/images/logo.svg') }}" alt="Midone - Tailwind Admin Dashboard Template">
        </a>
        <a class="mobile-menu-toggler" href="#">
            <i data-tw-merge="" data-lucide="bar-chart2" class="stroke-1.5 h-8 w-8 -rotate-90 transform text-white"></i>
        </a>
    </div>
    <div class="scrollable h-screen z-20 top-0 left-0 w-[270px] -ml-[100%] bg-primary transition-all duration-300 ease-in-out dark:bg-darkmode-800 [&[data-simplebar]]:fixed [&_.simplebar-scrollbar]:before:bg-black/50 group-[.mobile-menu--active]:ml-0">
        <a href="#" class="fixed top-0 right-0 mt-4 mr-4 transition-opacity duration-200 ease-in-out invisible opacity-0 group-[.mobile-menu--active]:visible group-[.mobile-menu--active]:opacity-100">
            <i data-tw-merge="" data-lucide="x-circle" class="stroke-1.5 mobile-menu-toggler h-8 w-8 -rotate-90 transform text-white"></i>
        </a>
        <ul class="py-2">
            <!-- BEGIN: First Child -->
            <li>
                <a class="menu {{ request()->routeIs('admin.dashboard') ? 'menu--active' : '' }}" href="{{ route('admin.dashboard') }}">
                    <div class="menu__icon">
                        <i data-tw-merge="" data-lucide="home" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                    <div class="menu__title">
                        Dashboard
                    </div>
                </a>
            </li>
            <li>
                <a class="menu {{ request()->routeIs('admin.members.index') ? 'menu--active' : '' }}" href="{{ route('admin.members.index') }}">
                    <div class="menu__icon">
                        <i data-tw-merge="" data-lucide="users" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                    <div class="menu__title">
                    Members
                    </div>
                </a>
            </li>
            <li>
                <a class="menu" href="javascript:;">
                    <div class="menu__icon">
                        <i data-tw-merge="" data-lucide="shopping-bag" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                    <div class="menu__title">
                        Transactions
                        <div class="menu__sub-icon ">
                            <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a class="menu" href="#">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="dollar-sign" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">Deposit</div>
                        </a>
                    </li>
                    <li>
                        <a class="menu" href="#">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="credit-card" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">Withdraw</div>
                        </a>
                    </li>
                </ul>
            </li>
            {{-- <li>
                <a class="menu menu--active" href="javascript:;">
                    <div class="menu__icon">
                        <i data-tw-merge="" data-lucide="home" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                    <div class="menu__title">
                        Dashboard
                        <div class="menu__sub-icon transform rotate-180">
                            <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                    </div>
                </a>
                <ul class="menu__sub-open">
                    <li>
                        <a class="menu menu--active" href="enigma-side-menu-dashboard-overview-1-page.html">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Overview 1
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="menu" href="enigma-side-menu-dashboard-overview-2-page.html">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Overview 2
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="menu" href="enigma-side-menu-dashboard-overview-3-page.html">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Overview 3
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="menu" href="enigma-side-menu-dashboard-overview-4-page.html">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Overview 4
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="menu" href="javascript:;">
                    <div class="menu__icon">
                        <i data-tw-merge="" data-lucide="shopping-bag" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                    <div class="menu__title">
                        E-Commerce
                        <div class="menu__sub-icon ">
                            <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a class="menu" href="enigma-side-menu-categories-page.html">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Categories
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="menu" href="enigma-side-menu-add-product-page.html">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Add Product
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="menu" href="javascript:;">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Products
                                <div class="menu__sub-icon ">
                                    <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a class="menu" href="enigma-side-menu-product-list-page.html">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">Product List</div>
                                </a>
                            </li>
                            <li>
                                <a class="menu" href="enigma-side-menu-product-grid-page.html">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">Product Grid</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="menu" href="javascript:;">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Transactions
                                <div class="menu__sub-icon ">
                                    <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a class="menu" href="enigma-side-menu-transaction-list-page.html">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">Transaction List</div>
                                </a>
                            </li>
                            <li>
                                <a class="menu" href="enigma-side-menu-transaction-detail-page.html">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">Transaction Detail</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="menu" href="javascript:;">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Sellers
                                <div class="menu__sub-icon ">
                                    <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a class="menu" href="enigma-side-menu-seller-list-page.html">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">Seller List</div>
                                </a>
                            </li>
                            <li>
                                <a class="menu" href="enigma-side-menu-seller-detail-page.html">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">Seller Detail</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="menu" href="enigma-side-menu-reviews-page.html">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Reviews
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="menu" href="enigma-side-menu-inbox-page.html">
                    <div class="menu__icon">
                        <i data-tw-merge="" data-lucide="inbox" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                    <div class="menu__title">
                        Inbox
                    </div>
                </a>
            </li>
            <li>
                <a class="menu" href="enigma-side-menu-file-manager-page.html">
                    <div class="menu__icon">
                        <i data-tw-merge="" data-lucide="hard-drive" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                    <div class="menu__title">
                        File Manager
                    </div>
                </a>
            </li>
            <li>
                <a class="menu" href="enigma-side-menu-point-of-sale-page.html">
                    <div class="menu__icon">
                        <i data-tw-merge="" data-lucide="credit-card" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                    <div class="menu__title">
                        Point of Sale
                    </div>
                </a>
            </li>
            <li>
                <a class="menu" href="enigma-side-menu-chat-page.html">
                    <div class="menu__icon">
                        <i data-tw-merge="" data-lucide="message-square" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                    <div class="menu__title">
                        Chat
                    </div>
                </a>
            </li>
            <li>
                <a class="menu" href="enigma-side-menu-post-page.html">
                    <div class="menu__icon">
                        <i data-tw-merge="" data-lucide="file-text" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                    <div class="menu__title">
                        Post
                    </div>
                </a>
            </li>
            <li>
                <a class="menu" href="enigma-side-menu-calendar-page.html">
                    <div class="menu__icon">
                        <i data-tw-merge="" data-lucide="calendar" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                    <div class="menu__title">
                        Calendar
                    </div>
                </a>
            </li>
            <li class="menu__divider my-6"></li>
            <li>
                <a class="menu" href="javascript:;">
                    <div class="menu__icon">
                        <i data-tw-merge="" data-lucide="edit" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                    <div class="menu__title">
                        Crud
                        <div class="menu__sub-icon ">
                            <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a class="menu" href="enigma-side-menu-crud-data-list-page.html">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Data List
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="menu" href="enigma-side-menu-crud-form-page.html">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Form
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="menu" href="javascript:;">
                    <div class="menu__icon">
                        <i data-tw-merge="" data-lucide="users" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                    <div class="menu__title">
                        Users
                        <div class="menu__sub-icon ">
                            <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a class="menu" href="enigma-side-menu-users-layout-1-page.html">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Layout 1
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="menu" href="enigma-side-menu-users-layout-2-page.html">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Layout 2
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="menu" href="enigma-side-menu-users-layout-3-page.html">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Layout 3
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="menu" href="javascript:;">
                    <div class="menu__icon">
                        <i data-tw-merge="" data-lucide="trello" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                    <div class="menu__title">
                        Profile
                        <div class="menu__sub-icon ">
                            <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a class="menu" href="enigma-side-menu-profile-overview-1-page.html">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Overview 1
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="menu" href="enigma-side-menu-profile-overview-2-page.html">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Overview 2
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="menu" href="enigma-side-menu-profile-overview-3-page.html">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Overview 3
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="menu" href="javascript:;">
                    <div class="menu__icon">
                        <i data-tw-merge="" data-lucide="layout" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                    <div class="menu__title">
                        Pages
                        <div class="menu__sub-icon ">
                            <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a class="menu" href="javascript:;">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Wizards
                                <div class="menu__sub-icon ">
                                    <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a class="menu" href="enigma-side-menu-wizard-layout-1-page.html">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">Layout 1</div>
                                </a>
                            </li>
                            <li>
                                <a class="menu" href="enigma-side-menu-wizard-layout-2-page.html">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">Layout 2</div>
                                </a>
                            </li>
                            <li>
                                <a class="menu" href="enigma-side-menu-wizard-layout-3-page.html">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">Layout 3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="menu" href="javascript:;">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Blog
                                <div class="menu__sub-icon ">
                                    <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a class="menu" href="enigma-side-menu-blog-layout-1-page.html">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">Layout 1</div>
                                </a>
                            </li>
                            <li>
                                <a class="menu" href="enigma-side-menu-blog-layout-2-page.html">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">Layout 2</div>
                                </a>
                            </li>
                            <li>
                                <a class="menu" href="enigma-side-menu-blog-layout-3-page.html">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">Layout 3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="menu" href="javascript:;">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Pricing
                                <div class="menu__sub-icon ">
                                    <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a class="menu" href="enigma-side-menu-pricing-layout-1-page.html">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">Layout 1</div>
                                </a>
                            </li>
                            <li>
                                <a class="menu" href="enigma-side-menu-pricing-layout-2-page.html">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">Layout 2</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="menu" href="javascript:;">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Invoice
                                <div class="menu__sub-icon ">
                                    <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a class="menu" href="enigma-side-menu-invoice-layout-1-page.html">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">Layout 1</div>
                                </a>
                            </li>
                            <li>
                                <a class="menu" href="enigma-side-menu-invoice-layout-2-page.html">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">Layout 2</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="menu" href="javascript:;">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                FAQ
                                <div class="menu__sub-icon ">
                                    <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a class="menu" href="enigma-side-menu-faq-layout-1-page.html">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">Layout 1</div>
                                </a>
                            </li>
                            <li>
                                <a class="menu" href="enigma-side-menu-faq-layout-2-page.html">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">Layout 2</div>
                                </a>
                            </li>
                            <li>
                                <a class="menu" href="enigma-side-menu-faq-layout-3-page.html">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">Layout 3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="menu" href="enigma-side-menu-login-page.html">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Login
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="menu" href="enigma-side-menu-register-page.html">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Register
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="menu" href="enigma-side-menu-error-page-page.html">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Error Page
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="menu" href="enigma-side-menu-update-profile-page.html">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Update profile
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="menu" href="enigma-side-menu-change-password-page.html">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Change Password
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu__divider my-6"></li>
            <li>
                <a class="menu" href="javascript:;">
                    <div class="menu__icon">
                        <i data-tw-merge="" data-lucide="inbox" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                    <div class="menu__title">
                        Components
                        <div class="menu__sub-icon ">
                            <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a class="menu" href="javascript:;">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Grid
                                <div class="menu__sub-icon ">
                                    <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a class="menu" href="enigma-side-menu-regular-table-page.html">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">Regular Table</div>
                                </a>
                            </li>
                            <li>
                                <a class="menu" href="enigma-side-menu-tabulator-page.html">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">Tabulator</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="menu" href="javascript:;">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Overlay
                                <div class="menu__sub-icon ">
                                    <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a class="menu" href="enigma-side-menu-modal-page.html">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">Modal</div>
                                </a>
                            </li>
                            <li>
                                <a class="menu" href="enigma-side-menu-slide-over-page.html">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">Slide Over</div>
                                </a>
                            </li>
                            <li>
                                <a class="menu" href="enigma-side-menu-notification-page.html">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">Notification</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="menu" href="enigma-side-menu-tab-page.html">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Tab
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="menu" href="enigma-side-menu-accordion-page.html">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Accordion
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="menu" href="enigma-side-menu-button-page.html">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Button
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="menu" href="enigma-side-menu-alert-page.html">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Alert
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="menu" href="enigma-side-menu-progress-bar-page.html">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Progress Bar
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="menu" href="enigma-side-menu-tooltip-page.html">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Tooltip
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="menu" href="enigma-side-menu-dropdown-page.html">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Dropdown
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="menu" href="enigma-side-menu-typography-page.html">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Typography
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="menu" href="enigma-side-menu-icon-page.html">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Icon
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="menu" href="enigma-side-menu-loading-icon-page.html">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Loading Icon
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="menu" href="javascript:;">
                    <div class="menu__icon">
                        <i data-tw-merge="" data-lucide="sidebar" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                    <div class="menu__title">
                        Forms
                        <div class="menu__sub-icon ">
                            <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a class="menu" href="enigma-side-menu-regular-form-page.html">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Regular Form
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="menu" href="enigma-side-menu-datepicker-page.html">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Datepicker
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="menu" href="enigma-side-menu-tom-select-page.html">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Tom Select
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="menu" href="enigma-side-menu-file-upload-page.html">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                File Upload
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="menu" href="javascript:;">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Wysiwyg Editor
                                <div class="menu__sub-icon ">
                                    <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a class="menu" href="enigma-side-menu-wysiwyg-editor-classic-page.html">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">Classic</div>
                                </a>
                            </li>
                            <li>
                                <a class="menu" href="enigma-side-menu-wysiwyg-editor-inline-page.html">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">Inline</div>
                                </a>
                            </li>
                            <li>
                                <a class="menu" href="enigma-side-menu-wysiwyg-editor-balloon-page.html">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">Balloon</div>
                                </a>
                            </li>
                            <li>
                                <a class="menu" href="enigma-side-menu-wysiwyg-editor-balloon-block-page.html">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">Balloon Block</div>
                                </a>
                            </li>
                            <li>
                                <a class="menu" href="enigma-side-menu-wysiwyg-editor-document-page.html">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">Document</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="menu" href="enigma-side-menu-validation-page.html">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Validation
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="menu" href="javascript:;">
                    <div class="menu__icon">
                        <i data-tw-merge="" data-lucide="hard-drive" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                    <div class="menu__title">
                        Widgets
                        <div class="menu__sub-icon ">
                            <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a class="menu" href="enigma-side-menu-chart-page.html">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Chart
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="menu" href="enigma-side-menu-slider-page.html">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Slider
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="menu" href="enigma-side-menu-image-zoom-page.html">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Image Zoom
                            </div>
                        </a>
                    </li>
                </ul>
            </li> --}}
            <!-- END: First Child -->
        </ul>
    </div>
</div>
<!-- END: Mobile Menu -->
<!-- BEGIN: Top Bar -->
<div class="h-[70px] md:h-[65px] z-[51] border-b border-white/[0.08] mt-12 md:mt-0 -mx-5 sm:-mx-8 md:-mx-0 px-3 md:border-b-0 relative md:fixed md:inset-x-0 md:top-0 sm:px-8 md:px-10 md:pt-10 md:bg-gradient-to-b md:from-slate-100 md:to-transparent dark:md:from-darkmode-700 before:content-[''] before:absolute before:h-[65px] before:inset-0 before:top-0 before:mx-7 before:bg-primary/30 before:mt-3 before:rounded-xl before:hidden before:md:block before:dark:bg-darkmode-600/30 after:content-[''] after:absolute after:inset-0 after:h-[65px] after:mx-3 after:bg-primary after:mt-5 after:rounded-xl after:shadow-md after:hidden after:md:block after:dark:bg-darkmode-600">
    <div class="flex h-full items-center">
        <!-- BEGIN: Logo -->
        <a href="#" class="-intro-x hidden md:flex xl:w-[180px]">
            <img class="w-6" src="{{ asset('dist/images/logo.svg') }}" alt="Enigma Tailwind HTML Admin Template">
            <span class="ml-3 text-lg text-white hidden xl:block">
                Enigma
            </span>
        </a>
        <!-- END: Logo -->
        <!-- BEGIN: Breadcrumb -->
        <nav aria-label="breadcrumb" class="flex h-[45px] md:ml-10 md:border-l border-white/[0.08] dark:border-white/[0.08] mr-auto -intro-x md:pl-6">
            <ol class="flex items-center text-theme-1 dark:text-slate-300 text-white/90">
                <li class="">
                    <a href="#">Application</a>
                </li>
                <li class="relative ml-5 pl-0.5 before:content-[''] before:w-[14px] before:h-[14px] before:bg-chevron-white before:transform before:rotate-[-90deg] before:bg-[length:100%] before:-ml-[1.125rem] before:absolute before:my-auto before:inset-y-0 dark:before:bg-chevron-white text-white/70">
                    <a href="#">Dashboard</a>
                </li>
            </ol>
        </nav>
        <!-- END: Breadcrumb -->
        <!-- BEGIN: Search -->
        <div class="intro-x relative mr-3 sm:mr-6">
            <div class="search relative hidden sm:block">
                <input data-tw-merge="" type="text" placeholder="Search..." class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent ease-in-out text-sm placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-opacity-40 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 w-56 rounded-full border-transparent bg-slate-200 pr-8 shadow-none transition-[width] duration-300 focus:w-72 focus:border-transparent dark:bg-darkmode-400">
                <i data-tw-merge="" data-lucide="search" class="stroke-1.5 w-5 h-5 absolute inset-y-0 right-0 my-auto mr-3 text-slate-600 dark:text-slate-500"></i>
            </div>
            <a class="relative text-white/70 sm:hidden" href="#">
                <i data-tw-merge="" data-lucide="search" class="stroke-1.5 w-5 h-5 dark:text-slate-500"></i>
            </a>
            <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="mt-5 invisible opacity-0 translate-y-1" data-enter-to="mt-[3px] visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="mt-[3px] visible opacity-100 translate-y-0" data-leave-to="mt-5 invisible opacity-0 translate-y-1" class="search-result absolute right-0 z-10 mt-[3px] hidden">
                <div class="box w-[450px] p-5">
                    <div class="mb-2 font-medium">Pages</div>
                    <div class="mb-5">
                        <a class="flex items-center" href="#">
                            <div class="flex h-8 w-8 items-center justify-center rounded-full bg-success/20 text-success dark:bg-success/10">
                                <i data-tw-merge="" data-lucide="inbox" class="stroke-1.5 h-4 w-4"></i>
                            </div>
                            <div class="ml-3">Mail Settings</div>
                        </a>
                        <a class="mt-2 flex items-center" href="#">
                            <div class="flex h-8 w-8 items-center justify-center rounded-full bg-pending/10 text-pending">
                                <i data-tw-merge="" data-lucide="users" class="stroke-1.5 h-4 w-4"></i>
                            </div>
                            <div class="ml-3">Users & Permissions</div>
                        </a>
                        <a class="mt-2 flex items-center" href="#">
                            <div class="flex h-8 w-8 items-center justify-center rounded-full bg-primary/10 text-primary/80 dark:bg-primary/20">
                                <i data-tw-merge="" data-lucide="credit-card" class="stroke-1.5 h-4 w-4"></i>
                            </div>
                            <div class="ml-3">Transactions Report</div>
                        </a>
                    </div>
                    <div class="mb-2 font-medium">Users</div>
                    <div class="mb-5">
                        <a class="mt-2 flex items-center" href="#">
                            <div class="image-fit h-8 w-8">
                                <img class="rounded-full" src="{{ asset('dist/images/fakers/profile-13.jpg') }}" alt="Midone Tailwind HTML Admin Template">
                            </div>
                            <div class="ml-3">Christian Bale</div>
                            <div class="ml-auto w-48 truncate text-right text-xs text-slate-500">
                                christianbale@left4code.com
                            </div>
                        </a>
                        <a class="mt-2 flex items-center" href="#">
                            <div class="image-fit h-8 w-8">
                                <img class="rounded-full" src="{{ asset('dist/images/fakers/profile-9.jpg') }}" alt="Midone Tailwind HTML Admin Template">
                            </div>
                            <div class="ml-3">Kevin Spacey</div>
                            <div class="ml-auto w-48 truncate text-right text-xs text-slate-500">
                                kevinspacey@left4code.com
                            </div>
                        </a>
                        <a class="mt-2 flex items-center" href="#">
                            <div class="image-fit h-8 w-8">
                                <img class="rounded-full" src="{{ asset('dist/images/fakers/profile-15.jpg') }}" alt="Midone Tailwind HTML Admin Template">
                            </div>
                            <div class="ml-3">Tom Cruise</div>
                            <div class="ml-auto w-48 truncate text-right text-xs text-slate-500">
                                tomcruise@left4code.com
                            </div>
                        </a>
                        <a class="mt-2 flex items-center" href="#">
                            <div class="image-fit h-8 w-8">
                                <img class="rounded-full" src="{{ asset('dist/images/fakers/profile-14.jpg') }}" alt="Midone Tailwind HTML Admin Template">
                            </div>
                            <div class="ml-3">Johnny Depp</div>
                            <div class="ml-auto w-48 truncate text-right text-xs text-slate-500">
                                johnnydepp@left4code.com
                            </div>
                        </a>
                    </div>
                    <div class="mb-2 font-medium">Products</div>
                    <a class="mt-2 flex items-center" href="#">
                        <div class="image-fit h-8 w-8">
                            <img class="rounded-full" src="{{ asset('dist/images/fakers/preview-2.jpg') }}" alt="Midone Tailwind HTML Admin Template">
                        </div>
                        <div class="ml-3">Sony A7 III</div>
                        <div class="ml-auto w-48 truncate text-right text-xs text-slate-500">
                            Photography
                        </div>
                    </a>
                    <a class="mt-2 flex items-center" href="#">
                        <div class="image-fit h-8 w-8">
                            <img class="rounded-full" src="{{ asset('dist/images/fakers/preview-5.jpg') }}" alt="Midone Tailwind HTML Admin Template">
                        </div>
                        <div class="ml-3">Dell XPS 13</div>
                        <div class="ml-auto w-48 truncate text-right text-xs text-slate-500">
                            PC & Laptop
                        </div>
                    </a>
                    <a class="mt-2 flex items-center" href="#">
                        <div class="image-fit h-8 w-8">
                            <img class="rounded-full" src="{{ asset('dist/images/fakers/preview-1.jpg') }}" alt="Midone Tailwind HTML Admin Template">
                        </div>
                        <div class="ml-3">Apple MacBook Pro 13</div>
                        <div class="ml-auto w-48 truncate text-right text-xs text-slate-500">
                            PC & Laptop
                        </div>
                    </a>
                    <a class="mt-2 flex items-center" href="#">
                        <div class="image-fit h-8 w-8">
                            <img class="rounded-full" src="{{ asset('dist/images/fakers/preview-5.jpg') }}" alt="Midone Tailwind HTML Admin Template">
                        </div>
                        <div class="ml-3">Nikon Z6</div>
                        <div class="ml-auto w-48 truncate text-right text-xs text-slate-500">
                            Photography
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- END: Search -->
        <!-- BEGIN: Notifications -->
        <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative intro-x mr-4 sm:mr-6">
            <div data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer relative block text-white/70 outline-none before:absolute before:right-0 before:top-[-2px] before:h-[8px] before:w-[8px] before:rounded-full before:bg-danger before:content-['']"><i data-tw-merge="" data-lucide="bell" class="stroke-1.5 w-5 h-5 dark:text-slate-500"></i></div>
            <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 mt-2 w-[280px] p-5 sm:w-[350px]">
                    <div class="mb-5 font-medium">Notifications</div>
                    <div class="cursor-pointer relative flex items-center">
                        <div class="image-fit relative mr-1 h-12 w-12 flex-none">
                            <img class="rounded-full" src="{{ asset('dist/images/fakers/profile-13.jpg') }}" alt="Midone Tailwind HTML Admin Template">
                            <div class="absolute bottom-0 right-0 h-3 w-3 rounded-full border-2 border-white bg-success dark:border-darkmode-600">
                            </div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a class="mr-5 truncate font-medium" href="#">
                                    Christian Bale
                                </a>
                                <div class="ml-auto whitespace-nowrap text-xs text-slate-400">
                                    05:09 AM
                                </div>
                            </div>
                            <div class="mt-0.5 w-full truncate text-slate-500">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500
                            </div>
                        </div>
                    </div>
                    <div class="cursor-pointer relative flex items-center mt-5">
                        <div class="image-fit relative mr-1 h-12 w-12 flex-none">
                            <img class="rounded-full" src="{{ asset('dist/images/fakers/profile-9.jpg') }}" alt="Midone Tailwind HTML Admin Template">
                            <div class="absolute bottom-0 right-0 h-3 w-3 rounded-full border-2 border-white bg-success dark:border-darkmode-600">
                            </div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a class="mr-5 truncate font-medium" href="#">
                                    Kevin Spacey
                                </a>
                                <div class="ml-auto whitespace-nowrap text-xs text-slate-400">
                                    01:10 PM
                                </div>
                            </div>
                            <div class="mt-0.5 w-full truncate text-slate-500">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500
                            </div>
                        </div>
                    </div>
                    <div class="cursor-pointer relative flex items-center mt-5">
                        <div class="image-fit relative mr-1 h-12 w-12 flex-none">
                            <img class="rounded-full" src="{{ asset('dist/images/fakers/profile-15.jpg') }}" alt="Midone Tailwind HTML Admin Template">
                            <div class="absolute bottom-0 right-0 h-3 w-3 rounded-full border-2 border-white bg-success dark:border-darkmode-600">
                            </div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a class="mr-5 truncate font-medium" href="#">
                                    Tom Cruise
                                </a>
                                <div class="ml-auto whitespace-nowrap text-xs text-slate-400">
                                    05:09 AM
                                </div>
                            </div>
                            <div class="mt-0.5 w-full truncate text-slate-500">
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi
                            </div>
                        </div>
                    </div>
                    <div class="cursor-pointer relative flex items-center mt-5">
                        <div class="image-fit relative mr-1 h-12 w-12 flex-none">
                            <img class="rounded-full" src="{{ asset('dist/images/fakers/profile-14.jpg') }}" alt="Midone Tailwind HTML Admin Template">
                            <div class="absolute bottom-0 right-0 h-3 w-3 rounded-full border-2 border-white bg-success dark:border-darkmode-600">
                            </div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a class="mr-5 truncate font-medium" href="#">
                                    Johnny Depp
                                </a>
                                <div class="ml-auto whitespace-nowrap text-xs text-slate-400">
                                    06:05 AM
                                </div>
                            </div>
                            <div class="mt-0.5 w-full truncate text-slate-500">
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem
                            </div>
                        </div>
                    </div>
                    <div class="cursor-pointer relative flex items-center mt-5">
                        <div class="image-fit relative mr-1 h-12 w-12 flex-none">
                            <img class="rounded-full" src="{{ asset('dist/images/fakers/profile-12.jpg') }}" alt="Midone Tailwind HTML Admin Template">
                            <div class="absolute bottom-0 right-0 h-3 w-3 rounded-full border-2 border-white bg-success dark:border-darkmode-600">
                            </div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a class="mr-5 truncate font-medium" href="#">
                                    Kevin Spacey
                                </a>
                                <div class="ml-auto whitespace-nowrap text-xs text-slate-400">
                                    05:09 AM
                                </div>
                            </div>
                            <div class="mt-0.5 w-full truncate text-slate-500">
                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Notifications -->
        <!-- BEGIN: Account Menu -->
        <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer image-fit zoom-in intro-x block h-8 w-8 scale-110 overflow-hidden rounded-full shadow-lg"><img src="{{ asset('dist/images/fakers/profile-12.jpg') }}" alt="Midone Tailwind HTML Admin Template">
            </button>
            <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                <div data-tw-merge="" class="dropdown-content rounded-md border-transparent p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 relative mt-px w-56 bg-theme-1/80 text-white before:absolute before:inset-0 before:z-[-1] before:block before:rounded-md before:bg-black">
                    <div class="p-2 font-medium font-normal">
                        <div class="font-medium">Christian Bale</div>
                        <div class="mt-0.5 text-xs text-white/70 dark:text-slate-500">
                            Frontend Engineer
                        </div>
                    </div>
                    <div class="h-px my-2 -mx-2 bg-slate-200/60 dark:bg-darkmode-400 bg-white/[0.08]">
                    </div>
                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item hover:bg-white/5"><i data-tw-merge="" data-lucide="user" class="stroke-1.5 mr-2 h-4 w-4"></i>
                        Profile</a>
                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item hover:bg-white/5"><i data-tw-merge="" data-lucide="edit" class="stroke-1.5 mr-2 h-4 w-4"></i>
                        Add Account</a>
                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item hover:bg-white/5"><i data-tw-merge="" data-lucide="lock" class="stroke-1.5 mr-2 h-4 w-4"></i>
                        Reset Password</a>
                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item hover:bg-white/5"><i data-tw-merge="" data-lucide="help-circle" class="stroke-1.5 mr-2 h-4 w-4"></i>
                        Help</a>
                    <div class="h-px my-2 -mx-2 bg-slate-200/60 dark:bg-darkmode-400 bg-white/[0.08]">
                    </div>
                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item hover:bg-white/5"><i data-tw-merge="" data-lucide="toggle-right" class="stroke-1.5 mr-2 h-4 w-4"></i>
                        Logout</a>
                </div>
            </div>
        </div>
        <!-- END: Account Menu -->
    </div>
</div>
<!-- END: Top Bar -->