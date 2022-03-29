require("./bootstrap");

window.Vue = require("vue").default;

/* Dependencies Imports */
import Vue from "vue";
import router from "./router";
import axios from "axios";
import VueAxios from "vue-axios";

import "bootstrap/dist/js/bootstrap";
import "@fortawesome/fontawesome-free/css/all.css";
import "@fortawesome/fontawesome-free/js/all";

/* Dependencies Imports */

/* Assets Imports */

import "./assets/scss/material-dashboard.scss";

import "./assets/js/plugins/chartjs.min.js";
import "./assets/js/core/popper.min.js";
import "./assets/js/core/bootstrap.min.js";
import "./assets/js/material-dashboard.min.js";

/* Assets Imports */

/* Vue Initialize */

Vue.component("app", require("./App.vue").default);
Vue.use(VueAxios, axios);

const app = new Vue({
    el: "#app",
    router,
});

/* Vue Initialize */
