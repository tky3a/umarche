<x-tests.app>
  <x-slot name="header">
    へっだー１
  </x-slot>
  コンポーネント１

  {{-- propsを使う例 --}}
  <div class="flex justify-center">
    <x-tests.card title="タイトル" content="本文" :message="$message" />
    <x-tests.card title="タイトル２" />
    <x-tests.card title="CSSを変更したい" class="bg-red-300" />
  </div>
</x-tests.app>
