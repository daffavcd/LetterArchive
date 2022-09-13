<x-app-layout>
    <div class="py-12">
        <div class="row bg-white overflow-hidden shadow-sm rounded px-8 mx-auto py-12">
            <div class="col-md-12">
                <h3 style="font-size: 1.75rem!important">Arsip Surat</h3>
                <p>Berikut ini adalah surat-surat yang telah terbit dan diarsipkan. <br> Klik "Lihat" pada kolom aksi
                    untuk menampilkan surat.</p>
            </div>
            <div class="col-md-12 mt-4">
                <form action="">
                    <div class="row">
                        <div class="col-md-2 text-right mb-2">
                            <font class="text-xl">Cari Surat :</font>
                        </div>
                        <div class="col-md-8 mb-2">
                            <input
                                class="shadow-sm appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="text" placeholder="Search letter ...">
                        </div>
                        <div class="col-md-2 mb-2">
                            <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded"
                                type="submit">Cari !</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-12 mt-2">
                <div style="overflow-x:auto;">
                    <table class="table-auto table">
                        <thead>
                            <tr>
                                <th>Nomor Surat</th>
                                <th>Kategori</th>
                                <th>Judul</th>
                                <th>Waktu Pengarsipan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2020/PD3/TU/001</td>
                                <td>Pengumuman</td>
                                <td>Judul</td>
                                <td>2021-06-21 17:23</td>
                                <td>
                                    <div>
                                        <a class="bg-red-500 hover:bg-red-700 text-white py-1 px-3 rounded text-base"
                                            type="submit">Hapus</a>
                                        <a class="bg-yellow-500 hover:bg-yellow-700 text-white py-1 px-3 rounded text-base"
                                            type="submit">Unduh</a>
                                        <a class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-3 rounded text-base"
                                            type="submit">Lihat >></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>