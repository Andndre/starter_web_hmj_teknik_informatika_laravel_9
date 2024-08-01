{{-- TODO: Ini menggunakan template _sidebar.blade.php, contoh bisa di lihat di https://git.undiksha.ac.id/akuisisi/newhmjinformatika/e-ors/-/tree/master/resources/views/admin/layouts/components/sidebar --}}
@include('admin.layouts.components.sidebar._sidebar', [
    'navItems' => [
        [
            'group' => 'ETIKA',
            'items' => [
                [
                    'name' => 'Dashboard',
                    'routeis' => 'admin.home.index',
                    'route' => route('admin.home.index'),
                    'icon' => 'mdi mdi-home',
                ],
                // [
                //     'name' => 'Manajemen Kegiatan',
                //     'routeis' => 'admin.manajemen-kegiatan*',
                //     'icon' => 'mdi mdi-calendar-multiple',
                //     'dropdownId' => 'manajemen-kegiatan',
                //     'items' => [
                //         [
                //             'name' => 'Tambah Kegiatan',
                //             'routeis' => 'admin.manajemen-kegiatan.create',
                //             'route' => route('admin.manajemen-kegiatan.create'),
                //             'icon' => 'mdi mdi-plus',
                //         ],
                //         [
                //             'name' => 'Semua Kegiatan',
                //             'routeis' => 'admin.manajemen-kegiatan.index',
                //             'route' => route('admin.manajemen-kegiatan.index'),
                //             'icon' => 'mdi mdi-table',
                //         ],
                //     ],
                // ]
            ],
        ],
        // [
        //     'group' => 'CONFIG',
        //     'items' => [
        //         [
        //             'name' => 'Konfigurasi',
        //             'routeis' => 'admin.konfigurasi.index',
        //             'route' => route('admin.konfigurasi.index'),
        //             'icon' => 'mdi mdi-cog',
        //         ],
        //     ],
        // ],
    ],
])
