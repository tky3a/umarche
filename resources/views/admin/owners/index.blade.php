<x-app-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
        <div class="border-b border-gray-200 bg-white p-6">
          エロクアント
          @foreach ($e_all as $e_owner)
            {{ $e_owner->name }}
            {{ $e_owner->created_at->diffForHumans() }}
          @endforeach
          <br>
          クエリビルド
          @foreach ($q_get as $q_owner)
            {{ $q_owner->name }}
            {{ Carbon\Carbon::parse($q_owner->created_at)->diffForHumans() }}
          @endforeach
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
