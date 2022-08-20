<x-app-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      {{-- <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg"> --}}
      <div class="border-b border-gray-200 bg-white p-6">
        @foreach ($owners as $owner)
          {{ $owner->name }}
          {{ $owner->email }}
          {{ $owner->created_at->diffForHumans() }}
        @endforeach

        <section class="body-font text-gray-600">
          <div class="container mx-auto px-5 py-24">
            <div class="mb-4 flex justify-end">
              <button onclick="location.href='{{ route('admin.owners.create') }}'"
                class="rounded border-0 bg-indigo-500 py-2 px-8 text-lg text-white hover:bg-indigo-600 focus:outline-none">登録</button>
            </div>
            <div class="mx-auto w-full overflow-auto lg:w-2/3">
              <table class="whitespace-no-wrap w-full table-auto text-left text-red-700">
                <thead>
                  <tr>
                    <th
                      class="title-font rounded-tl rounded-bl bg-gray-100 px-4 py-3 text-sm font-medium tracking-wider text-gray-900">
                      名前</th>
                    <th class="title-font bg-gray-100 px-4 py-3 text-sm font-medium tracking-wider text-gray-900">
                      メール</th>
                    <th class="title-font bg-gray-100 px-4 py-3 text-sm font-medium tracking-wider text-gray-900">
                      作成日</th>
                    <th class="title-font bg-gray-100 px-4 py-3 text-sm font-medium tracking-wider text-gray-900">
                    </th>
                    <th
                      class="title-font w-10 rounded-tr rounded-br bg-gray-100 text-sm font-medium tracking-wider text-gray-900">
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($owners as $owner)
                    <tr>


                      <td class="px-4 py-3">{{ $owner->name }}</td>
                      <td class="px-4 py-3">{{ $owner->email }}</td>
                      <td class="px-4 py-3">{{ $owner->created_at->diffForHumans() }}</td>
                      <td class="w-10 text-center">
                        <input name="plan" type="radio">
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </section>

        {{-- エロクアント
          @foreach ($e_all as $e_owner)
            {{ $e_owner->name }}
            {{ $e_owner->created_at->diffForHumans() }}
          @endforeach
          <br>
          クエリビルド
          @foreach ($q_get as $q_owner)
            {{ $q_owner->name }}
            {{ Carbon\Carbon::parse($q_owner->created_at)->diffForHumans() }}
          @endforeach --}}
      </div>
      {{-- </div> --}}
    </div>
  </div>
</x-app-layout>
