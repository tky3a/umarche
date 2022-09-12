<x-app-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
      オーナー登録
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
        <div class="border-b border-gray-200 bg-white p-6">

          <section class="body-font relative text-gray-600">
            <div class="container mx-auto px-5">
              <div class="mb-12 flex w-full flex-col text-center">
                <h1 class="title-font mb-4 text-2xl font-medium text-gray-900 sm:text-3xl">オーナー登録</h1>
              </div>
              <div class="mx-auto md:w-2/3 lg:w-1/2">

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="post" action="{{ route('admin.owners.store') }}">
                  @csrf

                  <div class="-m-2 flex flex-col items-center">
                    <div class="w-1/2 p-2">
                      <div class="relative">
                        <label for="name" class="text-sm leading-7 text-gray-600">名前</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" required
                          class="w-full rounded border border-gray-300 bg-gray-100 bg-opacity-50 py-1 px-3 text-base leading-8 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                      </div>
                    </div>
                    <div class="w-1/2 p-2">
                      <div class="relative">
                        <label for="email" class="text-sm leading-7 text-gray-600">メールアドレス</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required
                          class="w-full rounded border border-gray-300 bg-gray-100 bg-opacity-50 py-1 px-3 text-base leading-8 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                      </div>
                    </div>
                    <div class="w-1/2 p-2">
                      <div class="relative">
                        <label for="password" class="text-sm leading-7 text-gray-600">パスワード</label>
                        <input type="password" id="password" name="password" required
                          class="w-full rounded border border-gray-300 bg-gray-100 bg-opacity-50 py-1 px-3 text-base leading-8 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                      </div>
                    </div>
                    <div class="w-1/2 p-2">
                      <div class="relative">
                        <label for="password_confirmation" class="text-sm leading-7 text-gray-600">パスワード確認</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" required
                          class="w-full rounded border border-gray-300 bg-gray-100 bg-opacity-50 py-1 px-3 text-base leading-8 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                      </div>
                    </div>
                    <div class="mt-4 flex w-full justify-around p-2">
                      <button type="button" onclick="location.href='{{ route('admin.owners.index') }}'"
                        class="mx-auto rounded border-0 bg-gray-200 py-2 px-8 text-lg text-white hover:bg-gray-500 focus:outline-none">戻る　</button>
                      <button type="submit"
                        class="mx-auto rounded border-0 bg-indigo-500 py-2 px-8 text-lg text-white hover:bg-indigo-600 focus:outline-none">登録</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </section>

        </div>
      </div>
    </div>
  </div>
</x-app-layout>
