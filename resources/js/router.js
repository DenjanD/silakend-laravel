import Vue from "vue";
import VueRouter from "vue-router";

import DashboardLayout from "./layout/DashboardLayout";
import AuthLayout from "./layout/AuthLayout";

Vue.use(VueRouter);

const router = new VueRouter({
    linkExactActiveClass: "active",
    routes: [
        {
            path: "/dashboard",
            redirect: "dashboard",
            component: DashboardLayout,
            children: [
                {
                    path: "/dashboard",
                    name: "dashboard",
                    component: () => import("./pages/Home.vue"),
                },
            ],
            meta: {
                auth: true,
            },
        },
        {
            path: "/",
            redirect: "login",
            component: AuthLayout,
            children: [
                {
                    path: "/login",
                    name: "login",
                    component: () => import("./pages/Login.vue"),
                },
            ],
            meta: {
                login: true,
            },
        },
    ],
});

router.beforeEach((to, from, next) => {
    if (to.matched.some((record) => record.meta.login)) {
        if (localStorage.getItem("token") != null) {
            next("/dashboard");
        } else {
            next();
        }
    } else {
        next();
    }

    if (to.matched.some((record) => record.meta.auth)) {
        if (localStorage.getItem("token") === null) {
            next("/login");
        } else {
            next();
        }
    } else {
        next();
    }
});

export default router;
