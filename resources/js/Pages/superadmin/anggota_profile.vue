<template lang="">
    <div>
        <div class="flex m-2 gap-4 items-center">
            <div
                class="text-2xl w-[640px] md:w-[400px] xl:w-[320px] flex gap-2 font-semibold text-center"
            >
                <span>Profile Anggota</span>
            </div>
            <div class="divider w-full"></div>
        </div>
        <div>
            <div
                class="card card-compact w-full bg-base-100 shadow xl:col-span-2"
            >
                <div class="card-body">
                    <div class="grid md:grid-cols-2 gap-8">
                        <div>
                            <div class="divider">Data Anggota</div>
                            <div class="grid grid-cols-2 gap-2">
                                <div class="form-control w-full col-span-2">
                                    <label class="label justify-start gap-1">
                                        <span class="label-text"
                                            >Nama Lengkap</span
                                        >
                                        <span class="label-text-alt text-error"
                                            >*</span
                                        >
                                    </label>
                                    <input
                                        type="text"
                                        placeholder="Nama Lengkap"
                                        class="input bg-slate-50 input-bordered w-full"
                                        :value="master.anggota.nama"
                                    />
                                </div>
                                <div class="form-control w-full">
                                    <label class="label justify-start gap-1">
                                        <span class="label-text">NIK</span>
                                        <span class="label-text-alt text-error"
                                            >*</span
                                        >
                                    </label>
                                    <input
                                        type="text"
                                        placeholder="Nomor Induk Kependudukan"
                                        class="input bg-slate-50 input-bordered w-full"
                                        :value="master.anggota.nik"
                                    />
                                </div>
                                <div class="form-control w-full">
                                    <label class="label justify-start gap-1">
                                        <span class="label-text"
                                            >Tgl. Lahir</span
                                        >
                                        <span class="label-text-alt text-error"
                                            >*</span
                                        >
                                    </label>
                                    <input
                                        type="text"
                                        placeholder="Tanggal Lahir"
                                        class="input bg-slate-50 input-bordered w-full"
                                        :value="
                                            moment(
                                                master.anggota.tgl_lahir
                                            ).format('DD/MM/YYYY')
                                        "
                                    />
                                </div>
                                <div class="form-control w-full">
                                    <label class="label justify-start gap-1">
                                        <span class="label-text">Klub</span>
                                        <span class="label-text-alt text-error"
                                            >*</span
                                        >
                                    </label>
                                    <input
                                        type="text"
                                        placeholder="Klub"
                                        class="input bg-slate-50 input-bordered w-full"
                                        :value="master.anggota.klub"
                                    />
                                </div>
                                <div class="form-control w-full">
                                    <label class="label justify-start gap-1">
                                        <span class="label-text">Umur</span>
                                        <span class="label-text-alt text-error"
                                            >*</span
                                        >
                                    </label>
                                    <input
                                        type="text"
                                        placeholder="Umur"
                                        class="input bg-slate-50 input-bordered w-full"
                                        :value="master.anggota.umur"
                                    />
                                </div>
                                <div class="form-control w-full">
                                    <label class="label justify-start gap-1">
                                        <span class="label-text"
                                            >Tgl. Rilis</span
                                        >
                                        <span class="label-text-alt text-error"
                                            >*</span
                                        >
                                    </label>
                                    <input
                                        type="text"
                                        placeholder="Umur"
                                        class="input bg-slate-50 input-bordered w-full"
                                        :value="
                                            moment(
                                                master.anggota.tgl_rilis
                                            ).format('DD/MM/YYYY')
                                        "
                                    />
                                </div>
                                <div class="form-control w-full">
                                    <label class="label justify-start gap-1">
                                        <span class="label-text">Expired</span>
                                        <span class="label-text-alt text-error"
                                            >*</span
                                        >
                                    </label>
                                    <input
                                        type="text"
                                        placeholder="-"
                                        class="input bg-slate-50 input-bordered w-full"
                                        :value="master.anggota.expired"
                                    />
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="divider">Kartu Anggota</div>
                            <div>
                                <img
                                    src="../../../../public/images/kartu.jpg"
                                    alt="kartu-anggota"
                                    class="mx-auto mt-14"
                                    width="400"
                                    style="border-radius: 30px"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="h-20 md:hidden"></div>
        </div>
    </div>
</template>
<script>
import moment from "moment";
import layout from "../superadmin/layout.vue";
export default {
    layout: layout,
    props: {
        auth: Object,
        master: Object,
    },
    setup() {
        return {
            moment,
        };
    },
    methods: {},
};
</script>
<style lang=""></style>
