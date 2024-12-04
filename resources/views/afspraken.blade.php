<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Afspraken') }}
        </h2>
        <a href="{{ route('appointments.create') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Nieuwe Afspraak</a>



    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div>
                        <div class="px-4 sm:px-0">
                          <p class="mt-1 max-w-2xl text-sm/6 text-gray-500">Persoonsgegevens.</p>
                        </div>
                        <div class="mt-6 border-t border-gray-100">
                          <dl class="divide-y divide-gray-100">
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                              <dt class="text-sm/6 font-medium text-gray-900">Volledigenaam</dt>
                              <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">Margot Foster</dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                              <dt class="text-sm/6 font-medium text-gray-900">Afspraak voor</dt>
                              <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">Backend Developer</dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                              <dt class="text-sm/6 font-medium text-gray-900">Email address</dt>
                              <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">margotfoster@example.com</dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                              <dt class="text-sm/6 font-medium text-gray-900">Behandeling</dt>
                              <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">$120,000</dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                              <dt class="text-sm/6 font-medium text-gray-900">Afspraak Details</dt>
                              <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">Fugiat ipsum ipsum deserunt culpa aute sint do nostrud anim incididunt cillum culpa consequat. Excepteur qui ipsum aliquip consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. Irure nostrud pariatur mollit ad adipisicing reprehenderit deserunt qui eu.</dd>
                            </div>
                           
                          </dl>
                        </div>
                      </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>