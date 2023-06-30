<template lang="">
    <div class="p-4">
        <div class="flex m-2 gap-4 items-center">
            <div class="text-2xl font-semibold text-center">Beranda</div>
            <div class="divider w-full"></div>
        </div>
        <div class="block md:flex">
            <div class="m-2 card md:w-6/12 bg-base-100 shadow">
                <div class="card-body">
                    <div class="block gap-5 items-center">
                        <div class="text-primary">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                fill="currentColor"
                                class="bi bi-people-fill w-32 h-32 mx-auto"
                                viewBox="0 0 16 16"
                            >
                                <path
                                    d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"
                                />
                            </svg>
                        </div>
                    </div>
                    <div class="text-center">Jumlah Anggota</div>
                    <div class="text-center text-5xl font-bold">{{master.anggota}}</div>
                    <div class="card-actions justify-center pt-2">
                        <Link
                            :href="route('anggota')"
                            class="btn btn-primary btn-sm btn-outline normal-case"
                        >
                            Lihat
                        </Link>
                    </div>
                </div>
            </div>
            <div class="m-2 card md:w-6/12 bg-primary shadow">
                <div class="card-body">
                    <div class="block gap-5 items-center my-auto">
                        <div class="text-primary-content">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                fill="currentColor"
                                class="bi bi-qr-code-scan w-32 h-32 mx-auto"
                                viewBox="0 0 16 16"
                            >
                                <path
                                    d="M0 .5A.5.5 0 0 1 .5 0h3a.5.5 0 0 1 0 1H1v2.5a.5.5 0 0 1-1 0v-3Zm12 0a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0V1h-2.5a.5.5 0 0 1-.5-.5ZM.5 12a.5.5 0 0 1 .5.5V15h2.5a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5Zm15 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1H15v-2.5a.5.5 0 0 1 .5-.5ZM4 4h1v1H4V4Z"
                                />
                                <path
                                    d="M7 2H2v5h5V2ZM3 3h3v3H3V3Zm2 8H4v1h1v-1Z"
                                />
                                <path
                                    d="M7 9H2v5h5V9Zm-4 1h3v3H3v-3Zm8-6h1v1h-1V4Z"
                                />
                                <path
                                    d="M9 2h5v5H9V2Zm1 1v3h3V3h-3ZM8 8v2h1v1H8v1h2v-2h1v2h1v-1h2v-1h-3V8H8Zm2 2H9V9h1v1Zm4 2h-1v1h-2v1h3v-2Zm-4 2v-1H8v1h2Z"
                                />
                                <path d="M12 9h2V8h-2v1Z" />
                            </svg>
                        </div>
                    </div>
                    <div class="card-actions justify-center pt-2">
                        <button
                            class="btn text-white hover:btn-primary btn-sm btn-outline normal-case"
                        >
                            Scan QR
                        </button>
                    </div>
                </div>
            </div>
            <div class="h-20 md:hidden"></div>
        </div>
    </div>
</template>
<script>
import layout from "../superadmin/layout.vue";
export default {
    layout: layout,
    props: {
        auth: Object,
        master: Object
    },
};
</script>
<style lang=""></style>
