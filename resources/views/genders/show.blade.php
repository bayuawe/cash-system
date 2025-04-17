@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-4">Detail Gender</h1>

    <div class="border rounded p-4">
        <p><strong>Nama:</strong> {{ $gender->name }}</p>
        <p><strong>Slug:</strong> {{ $gender->slug }}</p>
    </div>

    <a href="{{ route('genders.index') }}" class="text-blue-600 mt-4 inline-block">← Kembali</a>
</div>
@endsection
