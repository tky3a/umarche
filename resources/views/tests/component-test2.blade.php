<x-tests.app>
  <x-slot name="header">
    ヘッダー２
  </x-slot>
  コンポーネント２
  <x-test-class-base classBaseMessage="メッセージ" />
  <div class="p-4">
    <x-test-class-base classBaseMessage="メッセージ2" defaultMessage="初期値から変更" />
  </div>
</x-tests.app>
