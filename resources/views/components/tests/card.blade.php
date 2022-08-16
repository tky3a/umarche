{{-- propsの初期設定 --}}
@props([
    'title' => '',
    'message' => '初期値メッセージ',
    'content' => '本文の初期値',
])

{{-- attributes mergeで画面側からクラスの変更を可能にする --}}
<div {{ $attributes->merge(['class' => 'w-1/4 border-2 p-2 shadow-md']) }}>
  <div>{{ $title }}</div>
  <div>画像</div>
  <div>{{ $content }}</div>
  <div>{{ $message }}</div>
</div>
