@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <h2 class="text-3xl font-bold mb-2">
        Welcome Back
    </h2>

    <x-text class="mb-8">
        Ready To Learning Today?
    </x-text>

    <div class="grid md:grid-cols-3 gap-6">
        <x-card>
            <x-text>
                Total Catatan
            </x-text>
            <h3 class="text-3xl font-bold mt-2">
                10
            </h3>
        </x-card>
        <x-card>
            <x-text>
                Total Quiz
            </x-text>
            <h3 class="text-3xl font-bold mt-2">
                12
            </h3>
        </x-card>
        <x-card>
            <x-text>
                Total Keseluruhan
            </x-text>
            <h3 class="text-3xl font-bold mt-2">
                14
            </h3>
        </x-card>
    </div>

    <x-card>
        <h3 class="font-bold mb-4">
            Aktifitas terbaru
        </h3>
        <ul class="space-y-3">
            <li>
                Membuat Quiz
            </li>
            <li>
                Mengupload Image
            </li>
        </ul>

    </x-card>
</div>

@endsection