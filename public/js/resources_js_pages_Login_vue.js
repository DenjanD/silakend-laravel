"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_pages_Login_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/Login.vue?vue&type=script&lang=js&":
/*!*******************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/Login.vue?vue&type=script&lang=js& ***!
  \*******************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "login",
  data: function data() {
    return {
      isError: false,
      errorMessage: "",
      bgImage: "/assets/img/office-dark.jpg",
      model: {
        email: "",
        password: ""
      }
    };
  },
  methods: {
    loginAttempt: function loginAttempt() {
      var _this = this;

      var postData = {
        email: this.model.email,
        password: this.model.password
      };
      /*let reqConfig = {
          headers: {
              Authorization: "Bearer " + localStorage.getItem("token"),
          },
      };*/

      this.axios.post("api/v1/auth/login", postData).then(function (response) {
        localStorage.setItem("token", response.data.token);

        _this.$router.push("/dashboard");
      })["catch"](function (error) {
        _this.isError = true;
        _this.errorMessage = "Email atau Password salah! Silakan coba lagi";
      });
    }
  }
});

/***/ }),

/***/ "./resources/js/pages/Login.vue":
/*!**************************************!*\
  !*** ./resources/js/pages/Login.vue ***!
  \**************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Login_vue_vue_type_template_id_3b6adb30___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Login.vue?vue&type=template&id=3b6adb30& */ "./resources/js/pages/Login.vue?vue&type=template&id=3b6adb30&");
/* harmony import */ var _Login_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Login.vue?vue&type=script&lang=js& */ "./resources/js/pages/Login.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _Login_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Login_vue_vue_type_template_id_3b6adb30___WEBPACK_IMPORTED_MODULE_0__.render,
  _Login_vue_vue_type_template_id_3b6adb30___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/pages/Login.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/pages/Login.vue?vue&type=script&lang=js&":
/*!***************************************************************!*\
  !*** ./resources/js/pages/Login.vue?vue&type=script&lang=js& ***!
  \***************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Login_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Login.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/Login.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Login_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/pages/Login.vue?vue&type=template&id=3b6adb30&":
/*!*********************************************************************!*\
  !*** ./resources/js/pages/Login.vue?vue&type=template&id=3b6adb30& ***!
  \*********************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Login_vue_vue_type_template_id_3b6adb30___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Login_vue_vue_type_template_id_3b6adb30___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Login_vue_vue_type_template_id_3b6adb30___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Login.vue?vue&type=template&id=3b6adb30& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/Login.vue?vue&type=template&id=3b6adb30&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/Login.vue?vue&type=template&id=3b6adb30&":
/*!************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/Login.vue?vue&type=template&id=3b6adb30& ***!
  \************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function () {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "main-content mt-0" }, [
    _c(
      "div",
      {
        staticClass: "page-header align-items-start min-vh-100",
        staticStyle: { "background-image": "url('images/polman-bandung.png')" },
      },
      [
        _c("span", { staticClass: "mask bg-gradient-dark opacity-6" }),
        _vm._v(" "),
        _c("div", { staticClass: "container my-auto" }, [
          _c("div", { staticClass: "row" }, [
            _c("div", { staticClass: "col-lg-4 col-md-8 col-12 mx-auto" }, [
              _c(
                "div",
                {
                  directives: [
                    {
                      name: "show",
                      rawName: "v-show",
                      value: _vm.isError,
                      expression: "isError",
                    },
                  ],
                  staticClass:
                    "alert alert-danger alert-dismissible text-white",
                  attrs: { role: "alert", id: "errorAlert" },
                },
                [
                  _c("span", { staticClass: "text-sm" }, [
                    _vm._v(_vm._s(_vm.errorMessage)),
                  ]),
                  _vm._v(" "),
                  _vm._m(0),
                ]
              ),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "card z-index-0 fadeIn3 fadeInBottom" },
                [
                  _vm._m(1),
                  _vm._v(" "),
                  _c("div", { staticClass: "card-body" }, [
                    _c("p", { staticClass: "text-center" }, [
                      _vm._v(
                        "\n                                Silakan login untuk melanjutkan\n                            "
                      ),
                    ]),
                    _vm._v(" "),
                    _c(
                      "form",
                      { staticClass: "text-start", attrs: { role: "form" } },
                      [
                        _c(
                          "div",
                          {
                            staticClass: "input-group input-group-outline my-3",
                          },
                          [
                            _c("label", { staticClass: "form-label" }, [
                              _vm._v("Email"),
                            ]),
                            _vm._v(" "),
                            _c("input", {
                              directives: [
                                {
                                  name: "model",
                                  rawName: "v-model",
                                  value: _vm.model.email,
                                  expression: "model.email",
                                },
                              ],
                              staticClass: "form-control",
                              attrs: { type: "email" },
                              domProps: { value: _vm.model.email },
                              on: {
                                input: function ($event) {
                                  if ($event.target.composing) {
                                    return
                                  }
                                  _vm.$set(
                                    _vm.model,
                                    "email",
                                    $event.target.value
                                  )
                                },
                              },
                            }),
                          ]
                        ),
                        _vm._v(" "),
                        _c(
                          "div",
                          {
                            staticClass: "input-group input-group-outline mb-3",
                          },
                          [
                            _c("label", { staticClass: "form-label" }, [
                              _vm._v("Password"),
                            ]),
                            _vm._v(" "),
                            _c("input", {
                              directives: [
                                {
                                  name: "model",
                                  rawName: "v-model",
                                  value: _vm.model.password,
                                  expression: "model.password",
                                },
                              ],
                              staticClass: "form-control",
                              attrs: { type: "password" },
                              domProps: { value: _vm.model.password },
                              on: {
                                input: function ($event) {
                                  if ($event.target.composing) {
                                    return
                                  }
                                  _vm.$set(
                                    _vm.model,
                                    "password",
                                    $event.target.value
                                  )
                                },
                              },
                            }),
                          ]
                        ),
                        _vm._v(" "),
                        _vm._m(2),
                        _vm._v(" "),
                        _c("div", { staticClass: "text-center" }, [
                          _c(
                            "button",
                            {
                              staticClass:
                                "btn bg-gradient-info w-100 my-4 mb-2",
                              on: {
                                click: function ($event) {
                                  $event.preventDefault()
                                  return _vm.loginAttempt()
                                },
                              },
                            },
                            [
                              _vm._v(
                                "\n                                        Login\n                                    "
                              ),
                            ]
                          ),
                        ]),
                      ]
                    ),
                  ]),
                ]
              ),
            ]),
          ]),
        ]),
        _vm._v(" "),
        _vm._m(3),
      ]
    ),
  ])
}
var staticRenderFns = [
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "button",
      {
        staticClass: "btn-close text-lg py-3 opacity-10",
        attrs: {
          type: "button",
          "data-bs-dismiss": "alert",
          "aria-label": "Close",
        },
      },
      [_c("span", { attrs: { "aria-hidden": "true" } }, [_vm._v("×")])]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "div",
      { staticClass: "card-header p-0 position-relative mt-n4 mx-3 z-index-2" },
      [
        _c(
          "div",
          {
            staticClass:
              "bg-gradient-info shadow-info border-radius-lg py-3 pe-1",
          },
          [
            _c(
              "h4",
              {
                staticClass:
                  "text-white font-weight-bolder text-center mt-2 mb-0",
              },
              [
                _vm._v(
                  "\n                                    Sistem Layanan Kendaraan Dinas\n                                    (Silakend)\n                                "
                ),
              ]
            ),
          ]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "div",
      { staticClass: "form-check form-switch d-flex align-items-center mb-3" },
      [
        _c("input", {
          staticClass: "form-check-input",
          attrs: { type: "checkbox", id: "rememberMe" },
        }),
        _vm._v(" "),
        _c(
          "label",
          {
            staticClass: "form-check-label mb-0 ms-2",
            attrs: { for: "rememberMe" },
          },
          [_vm._v("Ingat saya")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "footer",
      { staticClass: "footer position-absolute bottom-2 py-2 w-100" },
      [
        _c("div", { staticClass: "container" }, [
          _c(
            "div",
            { staticClass: "row align-items-center justify-content-lg" },
            [
              _c("div", { staticClass: "col-12 col-md-12 my-auto" }, [
                _c(
                  "div",
                  {
                    staticClass:
                      "copyright text-center text-sm text-white text-lg",
                  },
                  [
                    _vm._v(
                      "\n                            Copyright Polman Bandung © 2022\n                        "
                    ),
                  ]
                ),
              ]),
            ]
          ),
        ]),
      ]
    )
  },
]
render._withStripped = true



/***/ })

}]);