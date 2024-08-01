        <!-- BEGIN: Side Menu -->
        <nav class="side-nav z-50 -mt-4 hidden w-[100px] overflow-x-hidden px-5 pb-16 pt-32 md:block xl:w-[260px]">
            <ul>
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="side-menu {{ request()->routeIs('admin.dashboard') ? 'side-menu--active' : '' }}">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="home" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Dashboard
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.members.index') }}" class="side-menu {{ request()->routeIs('admin.members.index') ? 'side-menu--active' : '' }}">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="users" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Members
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="shopping-bag" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Transactions
                            <div class="side-menu__sub-icon transform rotate-180">
                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="side-menu__sub">
                        <li>
                            <a href="#"
                                class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="dollar-sign" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Deposit
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="credit-card" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Withdraw
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- <li>
                    <a href="javascript:;" class="side-menu side-menu--active">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="home" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Dashboard
                            <div class="side-menu__sub-icon transform rotate-180">
                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="side-menu__sub-open">
                        <li>
                            <a href="enigma-side-menu-dashboard-overview-1-page.html"
                                class="side-menu side-menu--active">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Overview 1
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="enigma-side-menu-dashboard-overview-2-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Overview 2
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="enigma-side-menu-dashboard-overview-3-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Overview 3
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="enigma-side-menu-dashboard-overview-4-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Overview 4
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="shopping-bag" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            E-Commerce
                            <div class="side-menu__sub-icon ">
                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="enigma-side-menu-categories-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Categories
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="enigma-side-menu-add-product-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Add Product
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Products
                                    <div class="side-menu__sub-icon ">
                                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="enigma-side-menu-product-list-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Product List
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="enigma-side-menu-product-grid-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Product Grid
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Transactions
                                    <div class="side-menu__sub-icon ">
                                        <i data-tw-merge="" data-lucide="chevron-down"
                                            class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="enigma-side-menu-transaction-list-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Transaction List
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="enigma-side-menu-transaction-detail-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Transaction Detail
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Sellers
                                    <div class="side-menu__sub-icon ">
                                        <i data-tw-merge="" data-lucide="chevron-down"
                                            class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="enigma-side-menu-seller-list-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Seller List
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="enigma-side-menu-seller-detail-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Seller Detail
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="enigma-side-menu-reviews-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Reviews
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="enigma-side-menu-inbox-page.html" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="inbox" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Inbox
                        </div>
                    </a>
                </li>
                <li>
                    <a href="enigma-side-menu-file-manager-page.html" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="hard-drive" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            File Manager
                        </div>
                    </a>
                </li>
                <li>
                    <a href="enigma-side-menu-point-of-sale-page.html" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="credit-card" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Point of Sale
                        </div>
                    </a>
                </li>
                <li>
                    <a href="enigma-side-menu-chat-page.html" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="message-square" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Chat
                        </div>
                    </a>
                </li>
                <li>
                    <a href="enigma-side-menu-post-page.html" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="file-text" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Post
                        </div>
                    </a>
                </li>
                <li>
                    <a href="enigma-side-menu-calendar-page.html" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="calendar" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Calendar
                        </div>
                    </a>
                </li>
                <li class="side-nav__divider my-6"></li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="edit" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Crud
                            <div class="side-menu__sub-icon ">
                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="enigma-side-menu-crud-data-list-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Data List
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="enigma-side-menu-crud-form-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Form
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="users" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Users
                            <div class="side-menu__sub-icon ">
                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="enigma-side-menu-users-layout-1-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Layout 1
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="enigma-side-menu-users-layout-2-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Layout 2
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="enigma-side-menu-users-layout-3-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Layout 3
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="trello" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Profile
                            <div class="side-menu__sub-icon ">
                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="enigma-side-menu-profile-overview-1-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Overview 1
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="enigma-side-menu-profile-overview-2-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Overview 2
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="enigma-side-menu-profile-overview-3-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Overview 3
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="layout" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Pages
                            <div class="side-menu__sub-icon ">
                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Wizards
                                    <div class="side-menu__sub-icon ">
                                        <i data-tw-merge="" data-lucide="chevron-down"
                                            class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="enigma-side-menu-wizard-layout-1-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Layout 1
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="enigma-side-menu-wizard-layout-2-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Layout 2
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="enigma-side-menu-wizard-layout-3-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Layout 3
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Blog
                                    <div class="side-menu__sub-icon ">
                                        <i data-tw-merge="" data-lucide="chevron-down"
                                            class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="enigma-side-menu-blog-layout-1-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Layout 1
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="enigma-side-menu-blog-layout-2-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Layout 2
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="enigma-side-menu-blog-layout-3-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Layout 3
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Pricing
                                    <div class="side-menu__sub-icon ">
                                        <i data-tw-merge="" data-lucide="chevron-down"
                                            class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="enigma-side-menu-pricing-layout-1-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Layout 1
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="enigma-side-menu-pricing-layout-2-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Layout 2
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Invoice
                                    <div class="side-menu__sub-icon ">
                                        <i data-tw-merge="" data-lucide="chevron-down"
                                            class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="enigma-side-menu-invoice-layout-1-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Layout 1
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="enigma-side-menu-invoice-layout-2-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Layout 2
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    FAQ
                                    <div class="side-menu__sub-icon ">
                                        <i data-tw-merge="" data-lucide="chevron-down"
                                            class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="enigma-side-menu-faq-layout-1-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Layout 1
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="enigma-side-menu-faq-layout-2-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Layout 2
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="enigma-side-menu-faq-layout-3-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Layout 3
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="enigma-side-menu-login-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Login
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="enigma-side-menu-register-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Register
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="enigma-side-menu-error-page-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Error Page
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="enigma-side-menu-update-profile-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Update profile
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="enigma-side-menu-change-password-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Change Password
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="side-nav__divider my-6"></li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="inbox" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Components
                            <div class="side-menu__sub-icon ">
                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Grid
                                    <div class="side-menu__sub-icon ">
                                        <i data-tw-merge="" data-lucide="chevron-down"
                                            class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="enigma-side-menu-regular-table-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Regular Table
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="enigma-side-menu-tabulator-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Tabulator
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Overlay
                                    <div class="side-menu__sub-icon ">
                                        <i data-tw-merge="" data-lucide="chevron-down"
                                            class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="enigma-side-menu-modal-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Modal
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="enigma-side-menu-slide-over-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Slide Over
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="enigma-side-menu-notification-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Notification
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="enigma-side-menu-tab-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Tab
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="enigma-side-menu-accordion-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Accordion
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="enigma-side-menu-button-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Button
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="enigma-side-menu-alert-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Alert
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="enigma-side-menu-progress-bar-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Progress Bar
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="enigma-side-menu-tooltip-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Tooltip
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="enigma-side-menu-dropdown-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Dropdown
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="enigma-side-menu-typography-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Typography
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="enigma-side-menu-icon-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Icon
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="enigma-side-menu-loading-icon-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Loading Icon
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="sidebar" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Forms
                            <div class="side-menu__sub-icon ">
                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="enigma-side-menu-regular-form-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Regular Form
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="enigma-side-menu-datepicker-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Datepicker
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="enigma-side-menu-tom-select-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Tom Select
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="enigma-side-menu-file-upload-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    File Upload
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Wysiwyg Editor
                                    <div class="side-menu__sub-icon ">
                                        <i data-tw-merge="" data-lucide="chevron-down"
                                            class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="enigma-side-menu-wysiwyg-editor-classic-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Classic
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="enigma-side-menu-wysiwyg-editor-inline-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Inline
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="enigma-side-menu-wysiwyg-editor-balloon-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Balloon
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="enigma-side-menu-wysiwyg-editor-balloon-block-page.html"
                                        class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Balloon Block
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="enigma-side-menu-wysiwyg-editor-document-page.html" class="side-menu">
                                        <div class="side-menu__icon">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                        </div>
                                        <div class="side-menu__title">
                                            Document
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="enigma-side-menu-validation-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Validation
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="hard-drive" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Widgets
                            <div class="side-menu__sub-icon ">
                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="enigma-side-menu-chart-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Chart
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="enigma-side-menu-slider-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Slider
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="enigma-side-menu-image-zoom-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Image Zoom
                                </div>
                            </a>
                        </li>
                    </ul>
                </li> --}}
            </ul>
        </nav>
        <!-- END: Side Menu -->
