<template lang="">
    <div class="p-4">
        <div class="flex m-2 gap-4 items-center">
            <div
                class="text-2xl w-[640px] md:w-[400px] xl:w-[320px] flex gap-2 font-semibold text-center"
            >
                <span>Tambah Anggota Baru</span>
            </div>
            <div class="divider w-full"></div>
        </div>
        <div>
            <div class="grid xl:grid-cols-3 gap-2">
                <div class="card card-compact w-full bg-base-100 shadow">
                    <div class="card-body">
                        <div class="divider">Preview</div>
                        <div class="w-full text-center">
                            <div class="avatar">
                                <div class="w-44 rounded-xl">
                                    <img
                                        src="https://img.a.transfermarkt.technology/portrait/big/28003-1671435885.jpg?lm=1"
                                    />
                                </div>
                            </div>
                            <div>
                                <table
                                    class="table table-compact table-zebra table-fixed w-full"
                                >
                                    <tr>
                                        <td class="w-40">Nama Lengkap</td>
                                        <td class="w-10">:</td>
                                        <td>Lionel Messi</td>
                                    </tr>
                                    <tr>
                                        <td class="w-40">
                                            Tempat/Tanggal Lahir
                                        </td>
                                        <td class="w-10">:</td>
                                        <td>Jambi, 21 Juni 1997</td>
                                    </tr>
                                    <tr>
                                        <td class="w-40">Kode Askot/Askab</td>
                                        <td class="w-10">:</td>
                                        <td>01</td>
                                    </tr>
                                    <tr>
                                        <td class="w-40">Kode Regional</td>
                                        <td class="w-10">:</td>
                                        <td>02</td>
                                    </tr>
                                    <tr>
                                        <td class="w-40">Kode SSB</td>
                                        <td class="w-10">:</td>
                                        <td>04</td>
                                    </tr>
                                    <tr>
                                        <td class="w-40">Kode Usia</td>
                                        <td class="w-10">:</td>
                                        <td>17</td>
                                    </tr>
                                    <tr>
                                        <td class="w-40">No. Anggota</td>
                                        <td class="w-10">:</td>
                                        <td class="font-bold">
                                            01.02.04.17.001
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="card card-compact w-full bg-base-100 shadow xl:col-span-2"
                >
                    <div class="card-body">
                        <div class="divider">Data Diri</div>
                        <div class="grid md:grid-cols-3 gap-2">
                            <div class="form-control w-full">
                                <label class="label justify-start gap-1">
                                    <span class="label-text">Nama Depan</span>
                                    <span class="label-text-alt text-error"
                                        >*</span
                                    >
                                </label>
                                <input
                                    type="text"
                                    placeholder="Nama Depan"
                                    class="input input-bordered w-full"
                                />
                            </div>
                            <div class="form-control w-full">
                                <label class="label">
                                    <span class="label-text"
                                        >Nama Tengah (Opsional)</span
                                    >
                                </label>
                                <input
                                    type="text"
                                    placeholder="Nama Tengah (Opsional)"
                                    class="input input-bordered w-full"
                                />
                            </div>
                            <div class="form-control w-full">
                                <label class="label justify-start gap-1">
                                    <span class="label-text"
                                        >Nama Belakang</span
                                    >
                                    <span class="label-text-alt text-error"
                                        >*</span
                                    >
                                </label>
                                <input
                                    type="text"
                                    placeholder="Nama Belakang"
                                    class="input input-bordered w-full"
                                />
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-2">
                            <div class="form-control w-full">
                                <label class="label justify-start gap-1">
                                    <span class="label-text">Tempat Lahir</span>
                                    <span class="label-text-alt text-error"
                                        >*</span
                                    >
                                </label>
                                <input
                                    type="text"
                                    placeholder="Tempat Lahir"
                                    class="input input-bordered w-full"
                                />
                            </div>
                            <div class="form-control w-full">
                                <label class="label justify-start gap-1">
                                    <span class="label-text"
                                        >Tanggal Lahir</span
                                    >
                                    <span class="label-text-alt text-error"
                                        >*</span
                                    >
                                </label>
                                <input
                                    type="date"
                                    placeholder="Tempat Lahir"
                                    class="input input-bordered w-full"
                                />
                            </div>
                        </div>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                            <div class="form-control w-full">
                                <label class="label justify-start gap-1">
                                    <span class="label-text"
                                        >Kode Askot/Askab</span
                                    >
                                    <span class="label-text-alt text-error"
                                        >*</span
                                    >
                                </label>
                                <select class="select select-bordered w-full">
                                    <option disabled selected>
                                        Pilih Kode Askot/Askab:
                                    </option>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <div class="form-control w-full">
                                <label class="label justify-start gap-1">
                                    <span class="label-text"
                                        >Kode Regional</span
                                    >
                                    <span class="label-text-alt text-error"
                                        >*</span
                                    >
                                </label>
                                <select class="select select-bordered w-full">
                                    <option disabled selected>
                                        Pilih Kode Regional:
                                    </option>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <div class="form-control w-full">
                                <label class="label justify-start gap-1">
                                    <span class="label-text">Kode SSB</span>
                                    <span class="label-text-alt text-error"
                                        >*</span
                                    >
                                </label>
                                <select class="select select-bordered w-full">
                                    <option disabled selected>
                                        Pilih Kode SSB:
                                    </option>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <div class="form-control w-full">
                                <label class="label justify-start gap-1">
                                    <span class="label-text">Kode Usia</span>
                                    <span class="label-text-alt text-error"
                                        >*</span
                                    >
                                </label>
                                <select class="select select-bordered w-full">
                                    <option disabled selected>
                                        Pilih Kode Usia:
                                    </option>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-control w-full">
                            <label class="label justify-start gap-1">
                                <span class="label-text">Pasfoto</span>
                                <span class="label-text-alt text-error">*</span>
                            </label>
                            <input
                                type="file"
                                class="file-input file-input-bordered w-full"
                            />
                            <label class="label">
                                <span class="label-text-alt text-error"
                                    >Ukuran maksimal: 2 MB (2048 KB)</span
                                >
                            </label>
                        </div>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary">Simpan</button>
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
