<template lang="">
    <div class="bg-base-200 p-4">
        <div class="flex m-2 gap-4 items-center">
            <div
                class="text-2xl w-[640px] md:w-[400px] xl:w-[320px] flex gap-2 font-semibold text-center"
            >
                <span>Profile Anggota</span>
            </div>
            <div class="divider w-full"></div>
        </div>
        <div>
            <div class="">
                <div class="flex justify-end">
                    <div
                        class="avatar rounded-full shadow-xl z-10 border-4 lg:border-8 border-primary mr-4 w-1/3 lg:w-1/5"
                    >
                        <div
                            class="mask mask-circle rounded-full bg-base-100 border-8 border-base-100"
                        >
                            <img
                                :src="
                                    '/foto_anggota/' +
                                    master.anggota.foto.replace(/’/g, '__')
                                "
                                alt="Foto Anggota"
                            />
                        </div>
                    </div>
                </div>
                <div class="card bg-base-100 -mt-7 lg:-mt-16">
                    <div class="card-body">
                        <div
                            class="flex flex-col lg:flex-row lg:items-end gap-2"
                        >
                            <div
                                class="card-title text-2xl lg:text-4xl font-bold text-primary"
                            >
                                {{ master.anggota.nama }}
                            </div>
                            <div
                                class="font-bold lg:text-2xl italic text-primary opacity-50"
                            >
                                {{ master.anggota.klub }} [{{
                                    master.anggota.umur
                                }}]
                            </div>
                        </div>
                        <div class="block lg:flex">
                            <div
                                class="font-bold text-primary-focus text-xl border-2 border-primary w-max p-2 rounded"
                            >
                                {{ master.anggota.kd_kartu }}
                            </div>
                            <div class="divider lg:divider-horizontal"></div>
                            <div>
                                <div>
                                    <span
                                        class="uppercase font-bold text-primary"
                                        >Lahir Pada:</span
                                    >
                                    {{
                                        moment(master.anggota.tgl_lahir).format(
                                            "DD MMMM YYYY"
                                        )
                                    }}
                                </div>
                                <div>
                                    <span
                                        class="uppercase font-bold text-primary"
                                        >Kota/Kabupaten:</span
                                    >
                                    {{ master.anggota.kota_kab }}
                                </div>
                            </div>
                            <div class="divider lg:divider-horizontal"></div>
                            <div>
                                <div>
                                    <span
                                        class="uppercase font-bold text-primary"
                                        >Tinggi Badan:</span
                                    >
                                    n/a
                                </div>
                                <div>
                                    <span
                                        class="uppercase font-bold text-primary"
                                        >Berat Badan:</span
                                    >
                                    n/a
                                </div>
                            </div>
                            <div class="divider lg:divider-horizontal"></div>
                            <div>
                                <div>
                                    <span
                                        class="uppercase font-bold text-primary"
                                        >Kaki Terbaik:</span
                                    >
                                    n/a
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card bg-base-100 my-4">
                    <div class="card-body">
                        <div
                            class="text-xl font-bold mb-4 text-center text-primary"
                        >
                            Statistik Pemain
                        </div>
                        <div class="lg:flex lg:gap-2 lg:justify-center">
                            <div
                                class="card bg-primary text-primary-content w-full lg:w-52 shadow-xl"
                            >
                                <div class="card-body">
                                    <div class="text-center font-bold text-4xl">
                                        0
                                    </div>
                                    <div class="text-center uppercase">
                                        Goal
                                    </div>
                                </div>
                            </div>
                            <div class="divider lg:divider-horizontal"></div>
                            <div
                                class="card bg-primary text-primary-content w-full lg:w-52 shadow-xl"
                            >
                                <div class="card-body">
                                    <div class="text-center font-bold text-4xl">
                                        0
                                    </div>
                                    <div class="text-center uppercase">
                                        Assist
                                    </div>
                                </div>
                            </div>
                            <div class="divider lg:divider-horizontal"></div>
                            <div
                                class="card bg-primary text-primary-content w-full lg:w-52 shadow-xl"
                            >
                                <div class="card-body">
                                    <div class="text-center font-bold text-4xl">
                                        0
                                    </div>
                                    <div class="text-center uppercase">
                                        Menit Bermain
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="flex justify-center">
                            <div class="flex items-center gap-2">
                                <div class="p-2 font-bold rounded bg-warning">
                                    0
                                </div>
                                <div class="uppercase font-semibold">
                                    Kartu Kuning
                                </div>
                            </div>
                            <div class="divider divider-horizontal"></div>
                            <div class="flex items-center gap-2">
                                <div class="p-2 font-bold rounded bg-error">
                                    0
                                </div>
                                <div class="uppercase font-semibold">
                                    Kartu Merah
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid lg:grid-cols-2 lg:gap-4">
                    <div class="card bg-base-100 my-4">
                        <div class="card-body">
                            <div
                                class="text-xl font-bold mb-4 text-center text-primary"
                            >
                                Posisi Bermain
                            </div>
                            <div
                                class="flex flex-col gap-4 mx-auto lg:flex-row"
                            >
                                <div class="w-64 h-80 md:h-64">
                                    <div class="absolute">
                                        <img
                                            src="../../../public/images/lapangan.png"
                                            alt="lapangan.png"
                                            width="240"
                                        />
                                        <!-- <div
                                            class="btn btn-circle btn-sm text-primary-content rounded-full absolute bg-primary top-10 left-4"
                                        >
                                            SK
                                        </div>
                                        <div
                                            class="btn btn-circle btn-sm text-base-100 rounded-full absolute bg-error top-6 left-20"
                                        >
                                            S
                                        </div>
                                        <div
                                            class="btn btn-circle btn-sm text-primary-content rounded-full absolute bg-primary top-10 right-4"
                                        >
                                            SK
                                        </div> -->
                                    </div>
                                </div>
                                <div>
                                    <div class="flex flex-col gap-5 w-48">
                                        <div>
                                            <div
                                                class="text-primary font-bold capitalize border-b border-b-primary"
                                            >
                                                Posisi Utama
                                            </div>
                                            <div class="flex justify-between">
                                                <div
                                                    class="text-error capitalize font-semibold"
                                                >
                                                    n/a
                                                </div>
                                                <div
                                                    class="text-error capitalize font-semibold"
                                                >
                                                    0%
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div
                                                class="text-primary font-bold capitalize border-b border-b-primary"
                                            >
                                                Posisi Lain
                                            </div>
                                            <div class="flex justify-between">
                                                <div
                                                    class="text-primary capitalize font-semibold"
                                                >
                                                    n/a
                                                </div>
                                                <div
                                                    class="text-primary capitalize font-semibold"
                                                >
                                                    0%
                                                </div>
                                            </div>
                                            <!-- <div class="flex justify-between">
                                                <div
                                                    class="text-primary capitalize font-semibold"
                                                >
                                                    Sayap Kiri
                                                </div>
                                                <div
                                                    class="text-primary capitalize font-semibold"
                                                >
                                                    0%
                                                </div>
                                            </div> -->
                                        </div>
                                        <div>
                                            <div
                                                class="text-primary font-bold capitalize border-b border-b-primary"
                                            >
                                                Posisi Lama
                                            </div>
                                            <div class="flex justify-between">
                                                <div
                                                    class="capitalize font-semibold"
                                                >
                                                    n/a
                                                </div>
                                                <div
                                                    class="capitalize font-semibold"
                                                >
                                                    0%
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card w-full bg-base-100 my-4">
                        <div class="card-body">
                            <div
                                class="text-xl font-bold mb-4 text-center text-primary"
                            >
                                Kemampuan Pemain
                            </div>
                            <div class="w-72 lg:w-full overflow-auto">
                                <table class="table table-xs">
                                    <tr class="text-center">
                                        <th
                                            class="border border-primary bg-primary"
                                        ></th>
                                        <th
                                            class="border border-primary text-primary"
                                        >
                                            SIT AND REACH (CM)
                                        </th>
                                    </tr>
                                    <tr class="active">
                                        <th
                                            class="border border-primary text-primary"
                                        >
                                            FLEKSIBILITAS
                                        </th>
                                        <td
                                            class="border border-primary text-center"
                                        >
                                            n/a
                                        </td>
                                    </tr>
                                </table>
                                <table class="table table-xs">
                                    <tr class="text-center">
                                        <th
                                            class="border border-primary bg-primary"
                                        ></th>
                                        <th
                                            class="border border-primary text-primary"
                                        >
                                            PUSH UP
                                        </th>
                                        <th
                                            class="border border-primary text-primary"
                                        >
                                            SIT UP
                                        </th>
                                        <th
                                            class="border border-primary text-primary"
                                        >
                                            BACK UP
                                        </th>
                                    </tr>
                                    <tr class="active">
                                        <th
                                            class="border border-primary text-primary"
                                        >
                                            MUSCLE
                                        </th>
                                        <td
                                            class="border border-primary text-center"
                                        >
                                            n/a
                                        </td>
                                        <td
                                            class="border border-primary text-center"
                                        >
                                            n/a
                                        </td>
                                        <td
                                            class="border border-primary text-center"
                                        >
                                            n/a
                                        </td>
                                    </tr>
                                </table>
                                <table class="table table-xs">
                                    <tr class="text-center">
                                        <th
                                            class="border border-primary bg-primary"
                                        ></th>
                                        <th
                                            class="border border-primary text-primary"
                                        >
                                            VERTICAL JUMP
                                        </th>
                                        <th
                                            class="border border-primary bg-primary"
                                        ></th>
                                        <th
                                            class="border border-primary text-primary"
                                        >
                                            30 METER (SEC)
                                        </th>
                                    </tr>
                                    <tr class="active">
                                        <th
                                            class="border border-primary text-primary"
                                        >
                                            POWER
                                        </th>
                                        <td
                                            class="border border-primary text-center"
                                        >
                                            n/a
                                        </td>
                                        <th
                                            class="border border-primary text-primary"
                                        >
                                            SPEED
                                        </th>
                                        <td
                                            class="border border-primary text-center"
                                        >
                                            n/a
                                        </td>
                                    </tr>
                                </table>

                                <table class="table table-xs">
                                    <tr class="text-center">
                                        <th
                                            class="border border-primary bg-primary"
                                        ></th>
                                        <th
                                            colspan="2"
                                            class="border border-primary text-primary"
                                        >
                                            ARROW HEAD (SEC)
                                        </th>
                                    </tr>
                                    <tr class="text-center text-primary">
                                        <th
                                            class="border border-primary bg-primary"
                                        ></th>
                                        <th class="border border-primary">
                                            LEFT
                                        </th>
                                        <th class="border border-primary">
                                            RIGHT
                                        </th>
                                    </tr>
                                    <tr class="active">
                                        <th
                                            class="border border-primary text-primary"
                                        >
                                            AGILITY
                                        </th>
                                        <td
                                            class="border border-primary text-center"
                                        >
                                            n/a
                                        </td>
                                        <td
                                            class="border border-primary text-center"
                                        >
                                            n/a
                                        </td>
                                    </tr>
                                </table>
                                <table class="table table-xs">
                                    <tr class="text-center">
                                        <th
                                            class="border border-primary bg-primary"
                                        ></th>
                                        <th
                                            colspan="5"
                                            class="border border-primary text-primary"
                                        >
                                            YYIRT 2
                                        </th>
                                    </tr>
                                    <tr class="text-center text-primary">
                                        <th
                                            class="border border-primary bg-primary"
                                        ></th>
                                        <th class="border border-primary">
                                            STAGE
                                        </th>
                                        <th class="border border-primary">
                                            SPEED LEVEL
                                        </th>
                                        <th class="border border-primary">
                                            SHUTTLE
                                        </th>
                                        <th class="border border-primary">
                                            DISTANCE
                                        </th>
                                        <th class="border border-primary">
                                            VO2MAX
                                        </th>
                                    </tr>
                                    <tr class="active">
                                        <th
                                            class="border border-primary text-primary"
                                        >
                                            ENDURANCE
                                        </th>
                                        <td
                                            class="border border-primary text-center"
                                        >
                                            n/a
                                        </td>
                                        <td
                                            class="border border-primary text-center"
                                        >
                                            n/a
                                        </td>
                                        <td
                                            class="border border-primary text-center"
                                        >
                                            n/a
                                        </td>
                                        <td
                                            class="border border-primary text-center"
                                        >
                                            n/a
                                        </td>
                                        <td
                                            class="border border-primary text-center"
                                        >
                                            n/a
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card bg-base-100 my-4">
                    <div class="card-body">
                        <div
                            class="text-xl font-bold mb-4 text-center text-primary"
                        >
                            Torehan Gelar
                        </div>
                        <div class="text-center">No Data</div>
                    </div>
                </div>
                <div class="card bg-base-100 my-4">
                    <div class="card-body">
                        <div
                            class="text-xl font-bold mb-4 text-center text-primary"
                        >
                            Penghargaan
                        </div>
                        <div class="text-center">No Data</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import moment from "moment";
// import layout from "../superadmin/layout.vue";
export default {
    // layout: layout,
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
