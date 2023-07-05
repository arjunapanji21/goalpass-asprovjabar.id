<template lang="">
    <div class="p-4">
        <div class="flex m-2 gap-4 items-center">
            <div class="text-2xl flex gap-2 font-semibold text-center">
                <span>Anggota</span>
                <Link
                    :href="route('anggota.tambah')"
                    class="btn btn-sm btn-primary btn-circle"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        fill="currentColor"
                        class="bi bi-person-plus-fill"
                        viewBox="0 0 16 16"
                    >
                        <path
                            d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"
                        />
                        <path
                            fill-rule="evenodd"
                            d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"
                        />
                    </svg>
                </Link>
            </div>
            <div class="divider w-full"></div>
        </div>
        <div>
            <div class="form-control py-2 w-full">
                <div class="input-group">
                    <select
                        v-model="formCari.filter"
                        class="select select-bordered"
                    >
                        <option value="nama">Filter By: Nama</option>
                        <option value="kd_kartu">Filter By: No. Anggota</option>
                        <option value="klub">Filter By: Klub</option>
                    </select>
                    <input
                        type="text"
                        placeholder="Search…"
                        class="input input-bordered w-full"
                        v-model="formCari.search"
                    />
                    <select
                        v-model="formCari.umur"
                        class="select select-bordered"
                    >
                        <option :value="null">Semua Umur</option>
                        <option value="u-13">U-13</option>
                        <option value="u-15">U-15</option>
                        <option value="u-17">U-17</option>
                    </select>
                    <button class="btn btn-square btn-primary">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                            />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="table table-compact w-full bg-base-100 shadow">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th>#</th>
                            <th class="text-center">Foto</th>
                            <th>Nama Lengkap</th>
                            <th>No. Anggota</th>
                            <th>Klub</th>
                            <th>Umur</th>
                            <th class="text-right">Jumlah Dicetak</th>
                            <!-- <th class="text-center">Detail</th> -->
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <template
                            v-for="(anggota, index) in master.anggota.data"
                            :key="index"
                        >
                            <tr class="hover">
                                <th>
                                    {{ anggota.id }}
                                </th>
                                <td class="text-center">
                                    <div class="avatar">
                                        <div
                                            class="mask mask-squircle w-12 h-12"
                                        >
                                            <img
                                                :src="
                                                    '/foto_anggota/' +
                                                    anggota.foto
                                                "
                                                alt="Foto Anggota"
                                            />
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    {{ anggota.nama }}
                                </td>
                                <td>
                                    {{ anggota.kd_kartu }}
                                </td>
                                <td>{{ anggota.klub }}</td>
                                <td>
                                    {{ anggota.umur }}
                                </td>
                                <td class="text-right">
                                    {{ anggota.jml_cetak }}
                                </td>
                                <td class="text-center">
                                    <div class="flex gap-1 justify-center">
                                        <Link
                                            class="btn btn-circle btn-outline btn-primary btn-sm"
                                        >
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="16"
                                                height="16"
                                                fill="currentColor"
                                                class="bi bi-pencil-fill"
                                                viewBox="0 0 16 16"
                                            >
                                                <path
                                                    d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"
                                                />
                                            </svg>
                                        </Link>
                                        <Link
                                            :href="
                                                route(
                                                    'anggota.cetak',
                                                    anggota.kd_kartu
                                                )
                                            "
                                            target="_blank"
                                            class="btn btn-circle btn-outline btn-primary btn-sm"
                                        >
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="16"
                                                height="16"
                                                fill="currentColor"
                                                class="bi bi-printer-fill"
                                                viewBox="0 0 16 16"
                                            >
                                                <path
                                                    d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"
                                                />
                                                <path
                                                    d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"
                                                />
                                            </svg>
                                        </Link>
                                        <Link
                                            class="btn btn-circle btn-outline btn-error btn-sm"
                                        >
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="16"
                                                height="16"
                                                fill="currentColor"
                                                class="bi bi-trash3-fill"
                                                viewBox="0 0 16 16"
                                            >
                                                <path
                                                    d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"
                                                />
                                            </svg>
                                        </Link>
                                    </div>
                                </td>
                            </tr>
                        </template>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="btn-group flex text-right justify-end pt-5">
            <div class="w-[28rem] md:w-full">
                <Link
                    class="btn btn-sm btn-primary bg-base-100 shadow btn-outline"
                    :class="{ 'btn-active': anggota.active }"
                    v-for="(anggota, index) in master.anggota.links"
                    :key="index"
                    :href="
                        anggota.url +
                        '&filter=' +
                        (master.filter || '') +
                        '&search=' +
                        (master.search || '') +
                        '&umur=' +
                        (master.umur || '')
                    "
                    v-html="anggota.label"
                ></Link>
            </div>
        </div>
    </div>
    <div class="pb-20"></div>
</template>
<script>
import moment from "moment";
import layout from "../superadmin/layout.vue";
import { useForm } from "@inertiajs/inertia-vue3";
export default {
    layout: layout,
    props: {
        auth: Object,
        master: Object,
    },
    setup(props) {
        const formCari = useForm({
            filter: props.master.filter || "nama",
            search: props.master.search || null,
            umur: props.master.umur || null,
        });

        return {
            moment,
            formCari,
        };
    },
    watch: {
        "formCari.search"(baru) {
            this.formCari.get(route("anggota"), {
                preserveState: true,
                preserveScroll: true,
            });
        },
        "formCari.umur"(baru) {
            this.formCari.get(route("anggota"), {
                preserveState: true,
                preserveScroll: true,
            });
        },
    },
};
</script>
<style lang=""></style>
