<template lang="" class="">
    <teleport to="head">
        <title>PSSI JABAR | Landing Page</title>
    </teleport>
    <div class="drawer drawer-end">
        <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content bg-base-100">
            <!-- Page content here -->
            <!-- Navbar -->
            <div class="navbar z-50 mx-auto text-base-content w-11/12">
                <div class="navbar-start">
                    <a
                        ><img
                            src="../../../public/images/logo-pssi-jabar.png"
                            alt="logo"
                            width="90"
                    /></a>
                </div>
                <div class="navbar-center hidden lg:flex">
                    <ul class="menu menu-horizontal font-bold">
                        <li>
                            <a class="text-[#28166F]">Home</a>
                        </li>
                        <li><a>About</a></li>
                        <li><a>Contact</a></li>
                        <li><a>FAQs</a></li>
                    </ul>
                </div>
                <div class="navbar-end">
                    <ul
                        class="menu menu-horizontal font-bold flex items-center"
                    >
                        <li>
                            <Link
                                :href="route('login')"
                                class="bg-[#CAAE0F] rounded mx-1 py-3 text-white hover:scale-105"
                                >Login</Link
                            >
                        </li>
                    </ul>
                    <div>
                        <label
                            for="my-drawer-4"
                            tabindex="0"
                            class="bg-[#28166F] text-white p-3 mx-1 rounded-lg lg:hidden"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                class="inline-block w-6 h-6 stroke-current"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16"
                                ></path>
                            </svg>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Section 1 -->
            <div class="hero min-h-screen">
                <div class="hero-overlay bg-opacity-60">
                    <img
                        src="../../../public/images/banner6.jpg"
                        alt="banner"
                        class="w-full h-screen object-cover brightness-50"
                    />
                </div>
                <div class="hero-content text-center text-neutral-content">
                    <div class="max-w-md">
                        <h1 class="mb-5 text-5xl font-bold">Hello there</h1>
                        <p class="mb-5">
                            Provident cupiditate voluptatem et in. Quaerat
                            fugiat ut assumenda excepturi exercitationem quasi.
                            In deleniti eaque aut repudiandae et a id nisi.
                        </p>
                        <button class="bg-[#242D64] p-4 rounded-lg">
                            Get Started
                        </button>
                    </div>
                </div>
            </div>

            <!-- Section 2 -->
            <div class="hero min-h-screen bg-base-100"></div>

            <!-- Footer -->
            <footer class="footer p-10 bg-[#494e6e] text-primary-content">
                <div>
                    <img
                        src="../../../public/images/logo-pssi-jabar.png"
                        alt="logo"
                        width="300"
                    />
                    <!-- <p>PSSI JABAR<br />Providing reliable tech since 1992</p> -->
                </div>
                <div>
                    <span class="footer-title">Head Office:</span>
                    <a class="link link-hover"
                        >Jl. Lodaya No.20, Malabar, Kec. Lengkong<br />Kota
                        Bandung, Jawa Barat 40262</a
                    >
                </div>
                <div>
                    <span class="footer-title">Company</span>
                    <a class="link link-hover">About us</a>
                    <a class="link link-hover">Contact</a>
                    <a class="link link-hover">Jobs</a>
                    <a class="link link-hover">FAQs</a>
                </div>
                <div>
                    <span class="footer-title">Legal</span>
                    <a class="link link-hover">Terms of use</a>
                    <a class="link link-hover">Privacy policy</a>
                    <a class="link link-hover">Cookie policy</a>
                </div>
            </footer>
            <footer
                class="footer footer-center p-4 bg-[#242D64] text-primary-content"
            >
                <div>
                    <p>
                        Copyright © {{ moment().format("YYYY") }} - All right
                        reserved.
                    </p>
                </div>
            </footer>
            <!-- End page content -->
        </div>
        <div class="drawer-side">
            <label for="my-drawer-4" class="drawer-overlay"></label>
            <ul class="menu p-4 w-2/3 h-full bg-base-200 text-base-content">
                <!-- Sidebar content here -->
                <li><a>Sidebar Item 1</a></li>
                <li><a>Sidebar Item 2</a></li>
            </ul>
        </div>
    </div>
</template>
<script>
import { useForm } from "@inertiajs/inertia-vue3";
import moment from "moment";
export default {
    setup(props) {
        const form = useForm({
            no_anggota: null,
            password: null,
        });
        return { form, moment };
    },
    methods: {
        btn_submit() {
            this.form.post(route("auth"), {
                // onSuccess: () => {
                //     alert("Login Success!");
                // },
                preserveScroll: true,
            });
        },
    },
};
</script>
<style lang=""></style>
