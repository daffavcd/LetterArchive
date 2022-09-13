<x-app-layout>
    <div class="py-12">
        <div class="row bg-white overflow-hidden shadow-sm rounded px-8 mx-auto py-12">
            <div class="col-md-12 mb-4">
                <h3 style="font-size: 1.75rem!important">Arsip Surat >> Lihat</h3>
                <p>Nomor : {{$archive->no}}</p>
                <p>Kategori : {{$archive->kategori}}</p>
                <p>Judul : {{$archive->judul}}</p>
                <p>Waktu Diunggah : {{$archive->updated_at}}</p>
            </div>
            <div class="col-md-12 mt-2">
                PDF EMBBEDED VIEWER
            </div>
            <div class="col-md-12 mt-4">
                <div class="row">
                    <div class="col-md-12 mb-2">
                        <a href="/archive"
                            class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded me-2">
                            {{'<<'}} Kembali
                        </a>
                        <a href="{{ asset('/storage/pdfArchive/'.$archive->file) }}" target="_blank" rel="noopener"
                            class="bg-yellow-500 hover:bg-yellow-700 text-black font-bold py-2 px-4 rounded me-2">
                            Unduh
                        </a>
                        <a href="/archive/{{$archive->id}}/edit"
                            class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded me-2">
                            Edit / Ganti File
                        </a>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>