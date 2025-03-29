<x-app-layout>
    <x-slot name="header">
        <h2 class="content text-5xl text-[#383435] font-bold mb-8">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="content bg-[#E9DDCD] rounded-3xl shadow p-6 mb-8">
        <h2 class="text-3xl font-semibold mb-4 text-[#383435]">Активные заявки</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 xl:gap-12">
            <!-- Горячие -->
            <div class="bg-[#D8443A] text-white p-4 rounded-2xl">
                <div class="text-white font-medium">Горячие</div>
                <div class="text-5xl font-bold my-2">107</div>
                <div class="text-2xl">2%</div>
            </div>

            <!-- Теплые -->
            <div class="bg-[#DF6D44] text-white p-4 rounded-2xl">
                <div class="font-medium">Теплые</div>
                <div class="text-5xl font-bold my-2">34</div>
                <div class="text-2xl">15%</div>
            </div>

            <!-- Холодные -->
            <div class="bg-[#98857E] text-white p-4 rounded-2xl">
                <div class="font-medium">Холодные</div>
                <div class="text-5xl font-bold my-2">127</div>
                <div class="text-2xl">89%</div>
            </div>
        </div>
    </div>

    <!-- Закрытые заявки -->
    <div class="content bg-[#E9DDCD] rounded-3xl shadow p-6 mb-8">
        <h2 class="text-2xl font-semibold mb-4 text-[#383435]">Закрытые заявки</h2>

        <div class="flex flex-col xl:flex-row xl:gap-20 justify-between w-full">

            <livewire:line-chart/>

{{--            <div class="flex flex-col xl:flex-row gap-8 w-full xl:w-2/5">--}}
{{--                <div class="w-full">--}}
{{--                    <canvas id="closedRequestsChart" height="200"></canvas>--}}
{{--                </div>--}}
{{--            </div>--}}

            <div class="w-full xl:w-1/2 mt-10 xl:mt-[-30px] flex flex-col gap-y-10">

                <div class="flex-col sm:flex-row flex gap-x-5 gap-y-3">
                    <button autofocus class="py-1 px-7 rounded-3xl border-2 border-[#383435] focus:outline-[#383435] focus:bg-[#383435] hover:bg-[#383435]
                         focus:text-white hover:text-white transition duration-600">Месяц</button>
                    <button class="py-1 px-7 rounded-3xl border-2 border-[#383435] focus:bg-[#383435] hover:bg-[#383435]
                         focus:text-white hover:text-white transition duration-600">Квартал</button>
                    <button class="py-1 px-7 rounded-3xl border-2 border-[#383435] focus:bg-[#383435] hover:bg-[#383435]
                         focus:text-white hover:text-white transition duration-600">Год</button>
                </div>

                <livewire:circle-diagram/>
            </div>

        </div>
    </div>

    <!-- Динамика заявок -->
    <div class="content bg-[#E9DDCD] rounded-3xl shadow p-6 ">
        <h2 class="text-2xl font-semibold mb-4 text-[#383435]">Динамика заявок</h2>
        <div class="flex flex-col xl:flex-row gap-y-10 gap-x-36">

            <livewire:column-chart/>
{{--            <div class="w-full xl:w-2/3">--}}
{{--                <canvas id="requestsChart" height="200"></canvas>--}}
{{--            </div>--}}

            <div class="w-full xl:w-1/5">
                <div class="space-y-4">
                    <div class="flex items-center">
                        <div class="size-5 bg-[#D8443A] rounded-full mr-2"></div>
                        <span>Переход в Горячие</span>
                    </div>
                    <div class="flex items-center">
                        <div class="size-5 bg-[#DF6D44] rounded-full mr-2"></div>
                        <span>Переход в Теплые</span>
                    </div>
                    <div class="flex items-center">
                        <div class="size-5 bg-[#98857E] rounded-full mr-2"></div>
                        <span>Переход в Холодные</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6 text-gray-900">--}}
{{--                    {{ __("You're logged in!") }}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</x-app-layout>
