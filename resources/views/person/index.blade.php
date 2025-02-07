<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pessoa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <h2 class="text-lg font-medium text-gray-900">

                        <section>
                            <header>
                                <div class="flex">
                                    <h2 class="text-lg font-medium text-gray-900">
                                        {{ __('Cadastro de Pessoas') }}
                                    </h2>
                                    <a href='' class='inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150'>Button</a>
                                </div>

                                {{--                                <p class="mt-1 text-sm text-gray-600">--}}
{{--                                    {{ __("Registration of people") }}--}}
{{--                                </p>--}}
                            </header>
                        </section>

                    </h2>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
