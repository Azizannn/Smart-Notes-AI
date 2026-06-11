@extends('layouts.app')

@section('content')
    <div class="space-y-6">
        <h2 class="text-3xl font-bold mb-2">
            Pertanyaan
        </h2>

        <x-card>
            <h3 class="font-semibold mb-4">Soal 1</h3>
            <p class="mb-4">Apa itu Composer</p>

            <div class="space-y-2">
                <div>A. Sebuah Package manager untuk PHP</div>
                <div>B. Bawaan Apliasi Node JS</div>
                <div>C. Package Manager Node JS</div>
                <div>D. Package Manager untuk Install Next JS</div>
            </div>
        </x-card>
    </div>
@endsection