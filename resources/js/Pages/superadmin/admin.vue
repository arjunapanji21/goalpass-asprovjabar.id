<template lang="">
    <div class="p-4">
        <div class="flex m-2 gap-4 items-center">
            <div class="text-2xl flex gap-2 font-semibold text-center">
                <span>Admin</span>
                <button class="btn btn-sm btn-primary btn-circle">
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
                </button>
            </div>
            <div class="divider w-full"></div>
        </div>
        <div>
            <div class="overflow-x-auto shadow">
                <table class="table table-compact w-full">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Foto</th>
                            <th>Nama Lengkap</th>
                            <th>Role</th>
                            <th>Tgl. Dibuat</th>
                            <th class="text-center">Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- row 1 -->
                        <tr class="hover">
                            <th>1</th>
                            <td>
                                <div class="avatar">
                                    <div class="mask mask-squircle w-12 h-12">
                                        <img
                                            :src="auth.user.foto"
                                            alt="Foto Anggota"
                                        />
                                    </div>
                                </div>
                            </td>
                            <td>
                                {{ auth.user.firstname }}
                                {{ auth.user.middlename }}
                                {{ auth.user.lastname }}
                            </td>
                            <td>{{ auth.user.no_anggota }}</td>
                            <td>
                                {{
                                    moment(auth.user.created_at).format(
                                        "DD MMMM YYYY H:mm a"
                                    )
                                }}
                            </td>
                            <td class="text-center">
                                <button
                                    class="btn btn-circle btn-outline btn-primary btn-sm"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="16"
                                        height="16"
                                        fill="currentColor"
                                        class="bi bi-person-lines-fill"
                                        viewBox="0 0 16 16"
                                    >
                                        <path
                                            d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"
                                        />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
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
