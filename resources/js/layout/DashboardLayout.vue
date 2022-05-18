<template>
    <div
        class="g-sidenav-show bg-gray-200"
        id="sidenavComponent"
        v-bind:class="{ 'g-sidenav-pinned': sidenavActive == true }"
    >
        <aside
            class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-white"
            id="sidenav-main"
        >
            <div class="sidenav-header">
                <i
                    class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                    aria-hidden="true"
                    id="iconSidenav"
                ></i>
                <a
                    class="navbar-brand m-0"
                    href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard "
                    target="_blank"
                >
                    <img
                        :src="'/images/logo-polman.png'"
                        class="navbar-brand-img h-100"
                        alt="main_logo"
                    />
                    <span class="ms-1 font-weight-bold text-dark"
                        >SiLaKend</span
                    >
                </a>
            </div>
            <hr class="horizontal light mt-0 mb-2" />
            <div
                class="collapse navbar-collapse w-auto"
                id="sidenav-collapse-main"
            >
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a
                            class="nav-link text-dark active bg-gradient-info"
                            href="../pages/dashboard.html"
                        >
                            <div
                                class="text-dark text-center me-2 d-flex align-items-center justify-content-center"
                            >
                                <i class="material-icons opacity-10"
                                    >dashboard</i
                                >
                            </div>
                            <span class="nav-link-text ms-1">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link text-dark"
                            href="../pages/tables.html"
                        >
                            <div
                                class="text-dark text-center me-2 d-flex align-items-center justify-content-center"
                            >
                                <i class="material-icons opacity-10"
                                    >table_view</i
                                >
                            </div>
                            <span class="nav-link-text ms-1">Tables</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link text-dark"
                            href="../pages/billing.html"
                        >
                            <div
                                class="text-dark text-center me-2 d-flex align-items-center justify-content-center"
                            >
                                <i class="material-icons opacity-10"
                                    >receipt_long</i
                                >
                            </div>
                            <span class="nav-link-text ms-1">Billing</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link text-dark"
                            href="../pages/virtual-reality.html"
                        >
                            <div
                                class="text-dark text-center me-2 d-flex align-items-center justify-content-center"
                            >
                                <i class="material-icons opacity-10"
                                    >view_in_ar</i
                                >
                            </div>
                            <span class="nav-link-text ms-1"
                                >Virtual Reality</span
                            >
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="../pages/rtl.html">
                            <div
                                class="text-dark text-center me-2 d-flex align-items-center justify-content-center"
                            >
                                <i class="material-icons opacity-10"
                                    >format_textdirection_r_to_l</i
                                >
                            </div>
                            <span class="nav-link-text ms-1">RTL</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link text-dark"
                            href="../pages/notifications.html"
                        >
                            <div
                                class="text-dark text-center me-2 d-flex align-items-center justify-content-center"
                            >
                                <i class="material-icons opacity-10"
                                    >notifications</i
                                >
                            </div>
                            <span class="nav-link-text ms-1"
                                >Notifications</span
                            >
                        </a>
                    </li>
                    <li class="nav-item mt-3">
                        <h6
                            class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-8"
                        >
                            Account pages
                        </h6>
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link text-dark"
                            href="../pages/profile.html"
                        >
                            <div
                                class="text-dark text-center me-2 d-flex align-items-center justify-content-center"
                            >
                                <i class="material-icons opacity-10">person</i>
                            </div>
                            <span class="nav-link-text ms-1">Profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link text-dark"
                            href="#"
                            @click.prevent="logoutAttempt()"
                        >
                            <div
                                class="text-dark text-center me-2 d-flex align-items-center justify-content-center"
                            >
                                <i class="material-icons opacity-10">logout</i>
                            </div>
                            <span class="nav-link-text ms-1">Log Out</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="sidenav-footer position-absolute w-100 bottom-0"></div>
        </aside>
        <main
            class="main-content position-relative max-height-vh-100 h-100 border-radius-lg"
        >
            <!-- Navbar -->
            <nav
                class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl"
                id="navbarBlur"
                navbar-scroll="true"
            >
                <div class="container-fluid py-1 px-3">
                    <nav aria-label="breadcrumb">
                        <ol
                            class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5"
                        >
                            <li class="breadcrumb-item text-sm">
                                <a
                                    class="opacity-5 text-dark"
                                    href="javascript:;"
                                    >Pages</a
                                >
                            </li>
                            <li
                                class="breadcrumb-item text-sm text-dark active"
                                aria-current="page"
                            >
                                Dashboard
                            </li>
                        </ol>
                        <h5 class="font-weight-bolder mb-0">Dashboard</h5>
                    </nav>
                    <div
                        class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4"
                        id="navbar"
                    >
                        <div
                            class="ms-md-auto pe-md-3 d-flex align-items-center"
                        ></div>
                        <ul class="navbar-nav justify-content-end">
                            <li class="nav-item d-flex align-items-center">
                                <a
                                    href="javascript:;"
                                    class="nav-link text-body font-weight-bold px-0"
                                >
                                    <i class="fa fa-user me-sm-1"></i>
                                    <span class="d-sm-inline d-none"
                                        >Halo, User
                                        <a
                                            href="#"
                                            @click.prevent="logoutAttempt()"
                                            >(Logout)</a
                                        ></span
                                    >
                                </a>
                            </li>
                            <li
                                class="nav-item d-xl-none ps-3 d-flex align-items-center"
                                @click="sidebarInteraction()"
                            >
                                <a
                                    href="javascript:;"
                                    class="nav-link text-body p-0"
                                    id="iconNavbarSidenav"
                                >
                                    <div class="sidenav-toggler-inner">
                                        <i class="sidenav-toggler-line"></i>
                                        <i class="sidenav-toggler-line"></i>
                                        <i class="sidenav-toggler-line"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <router-view></router-view>
        </main>
    </div>
</template>
<script>
export default {
    data() {
        return {
            sidenavActive: false,
        };
    },
    mounted() {
        var win = navigator.platform.indexOf("Win") > -1;
        if (win && document.querySelector("#sidenav-scrollbar")) {
            var options = {
                damping: "0.5",
            };
            Scrollbar.init(
                document.querySelector("#sidenav-scrollbar"),
                options
            );
        }
    },
    methods: {
        sidebarInteraction() {
            if (this.sidenavActive == false) {
                this.sidenavActive = true;
            } else {
                this.sidenavActive = false;
            }
        },
        logoutAttempt() {
            var postData = {};
            let reqConfig = {
                headers: {
                    Authorization: "Bearer " + localStorage.getItem("token"),
                },
            };

            this.axios
                .post("api/v1/auth/logout", postData, reqConfig)
                .then((response) => {
                    localStorage.removeItem("token");
                    this.$router.push("/");
                });
        },
    },
};
</script>
