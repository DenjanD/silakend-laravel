<template>
    <div class="main-content mt-0">
        <div
            class="page-header align-items-start min-vh-100"
            style="background-image: url('images/polman-bandung.png')"
        >
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container my-auto">
                <div class="row">
                    <div class="col-lg-4 col-md-8 col-12 mx-auto">
                        <div
                            class="alert alert-danger alert-dismissible text-white"
                            role="alert"
                            id="errorAlert"
                            v-show="isError"
                        >
                            <span class="text-sm">{{ errorMessage }}</span>
                            <button
                                type="button"
                                class="btn-close text-lg py-3 opacity-10"
                                data-bs-dismiss="alert"
                                aria-label="Close"
                            >
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="card z-index-0 fadeIn3 fadeInBottom">
                            <div
                                class="card-header p-0 position-relative mt-n4 mx-3 z-index-2"
                            >
                                <div
                                    class="bg-gradient-info shadow-info border-radius-lg py-3 pe-1"
                                >
                                    <h4
                                        class="text-white font-weight-bolder text-center mt-2 mb-0"
                                    >
                                        Sistem Layanan Kendaraan Dinas
                                        (Silakend)
                                    </h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="text-center">
                                    Silakan login untuk melanjutkan
                                </p>
                                <form role="form" class="text-start">
                                    <div
                                        class="input-group input-group-outline my-3"
                                    >
                                        <label class="form-label">Email</label>
                                        <input
                                            v-model="model.email"
                                            type="email"
                                            class="form-control"
                                        />
                                    </div>
                                    <div
                                        class="input-group input-group-outline mb-3"
                                    >
                                        <label class="form-label"
                                            >Password</label
                                        >
                                        <input
                                            v-model="model.password"
                                            type="password"
                                            class="form-control"
                                        />
                                    </div>
                                    <div
                                        class="form-check form-switch d-flex align-items-center mb-3"
                                    >
                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            id="rememberMe"
                                        />
                                        <label
                                            class="form-check-label mb-0 ms-2"
                                            for="rememberMe"
                                            >Ingat saya</label
                                        >
                                    </div>
                                    <div class="text-center">
                                        <button
                                            @click.prevent="loginAttempt()"
                                            class="btn bg-gradient-info w-100 my-4 mb-2"
                                        >
                                            Login
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer position-absolute bottom-2 py-2 w-100">
                <div class="container">
                    <div class="row align-items-center justify-content-lg">
                        <div class="col-12 col-md-12 my-auto">
                            <div
                                class="copyright text-center text-sm text-white text-lg"
                            >
                                Copyright Polman Bandung &copy; 2022
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</template>
<script>
export default {
    name: "login",
    data() {
        return {
            isError: false,
            errorMessage: "",
            bgImage: "/assets/img/office-dark.jpg",
            model: {
                email: "",
                password: "",
            },
        };
    },
    methods: {
        loginAttempt() {
            var postData = {
                email: this.model.email,
                password: this.model.password,
            };
            /*let reqConfig = {
                headers: {
                    Authorization: "Bearer " + localStorage.getItem("token"),
                },
            };*/

            this.axios
                .post("api/v1/auth/login", postData)
                .then((response) => {
                    localStorage.setItem("token", response.data.token);
                    this.$router.push("/dashboard");
                })
                .catch((error) => {
                    this.isError = true;
                    this.errorMessage =
                        "Email atau Password salah! Silakan coba lagi";
                });
        },
    },
};
</script>
<style></style>
