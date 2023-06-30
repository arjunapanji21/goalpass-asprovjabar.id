<template lang="">
    <teleport to='head'>
        <title>PSSI JATIM | Login</title>
    </teleport>
    <div class="hero min-h-screen bg-slate-100">
        <div class="hero-content flex-col md:flex-row-reverse">
            <div class="text-center md:text-left">
                <img
                    src="../../../public/images/logo_goalpass.png"
                    alt="logo_goalpass.png"
                    class="mx-auto max-w-md p-10"
                />
            </div>
            <div
                class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-white"
            >
                <div class="card-body">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">No. Anggota</span>
                        </label>
                        <input
                            type="text"
                            placeholder="01.02.04.XX.XXX"
                            class="input input-bordered"
                            v-model="form.no_anggota"
                        />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Password</span>
                        </label>
                        <input
                            type="password"
                            placeholder="password"
                            class="input input-bordered"
                            v-model="form.password"
                        />
                    </div>
                    <div class="form-control mt-6">
                        <button @click="btn_submit()" class="btn btn-primary">Masuk</button>
                    </div>
                    <label class="label justify-center">
                        <a href="#" class="label-text-alt link link-hover"
                            >Lupa password?</a
                        >
                    </label>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import { useForm } from "@inertiajs/inertia-vue3";
export default {
    setup(props) {
        const form = useForm({
            no_anggota: null,
            password: null,
        });
        return { form };
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
