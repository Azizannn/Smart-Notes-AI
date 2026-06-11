@extends ('layouts.app')

@section('content')
    <div class="space-y-4">
        <h2 class="text-3xl font-bold">
            Notes
        </h2>

        <p class="text-slate-500 mt-2">
            Buat Catatanmu jadi lebih berwarna
        </p>

        <x-card>
            <h3 class="text-lg font-bold mb-6">
                Tambahkan Catatan</h3>

            <div class="space-y-4">
                <div>
                    <label class="block mb-2">Judul</label>
                    <x-forminput type="text" name="title" />
                </div>

                <div>
                    <label class="block mb-2">Catatan</label>
                    <textarea rows="6" type="text" name="notes" class="w-full border rounded-lg px-2 py-1"></textarea>
                </div>
                <x-button type="submit">Simpan</x-button>
            </div>
        </x-card>

        <x-card>
            <h3 class="lg font-semibold">
                Upload Catatan
            </h3>
            <input type="file" class="w-full border rounded-lg px-4 py-2">
            <x-text class="mt-4">
                Upload Catatan Yang ingin anda simpulkan
            </x-text>
        </x-card>

        <div>
            <h3 class="text-xl font-bold mb-4"> Catatan Saya </h3>

            <div class="space-y-4">
                <x-card>
                    <h4 class="">Belajar Laravel</h4>
                    <p class="text-shadow-yellow-50 mt-2">
                        Saya Sedang belajar Laravel
                    </p>
                    <div class="flex gap-2 mt-4">
                        <x-button>
                            Simpulkan Menggunakan AI
                        </x-button>
                        <x-button class="bg-emerald-500">
                            Buat Quiz Dengan AI
                        </x-button>
                        <x-button class="bg-red-600">
                            Hapus
                        </x-button>
                    </div>
                </x-card>
                <x-card>
                    <h4 class="">Belajar Node JS</h4>
                    <p class="text-shadow-yellow-50 mt-2">
                        Saya Sedang belajar Node JS dengan framework Next JS
                    </p>
                    <x-button>
                        Simpulkan Menggunakan AI
                    </x-button>
                    <x-button class="bg-emerald-500">
                        Buat Quiz Dengan AI
                    </x-button>
                    <x-button class="bg-red-600">
                        Hapus
                    </x-button>
                </x-card>
            </div>
        </div>
    </div>
@endsection
