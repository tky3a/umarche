{{-- propsの初期値をセット --}}
@props(['status' => 'info']);

{{-- 処理 --}}
@php
if ($status === 'info') {
    $bgColor = 'bg-blue-300';
}

if ($status === 'error') {
    $bgColor = 'bg-red-500';
}
@endphp

{{-- View --}}
@if (session('message'))
  <div class="{{ $bgColor }} mx-auto w-1/2 p-2 text-white">
    {{ session('message') }}
  </div>
@endif
