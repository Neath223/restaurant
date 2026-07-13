<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6 sm:py-8 lg:py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm rounded-xl">
                <div class="p-4 sm:p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-4 sm:gap-6 mt-6">
                <div class="rounded-2xl border border-red-200 bg-yellow-100 p-5 text-center shadow-sm">
                    <h3 class="text-lg font-semibold">Total Customers</h3>
                    <p class="mt-3 text-4xl font-bold">{{ $totalCustomers }}</p>
                </div>

                <div class="rounded-2xl border border-blue-200 bg-yellow-100 p-5 text-center shadow-sm">
                    <h3 class="text-lg font-semibold">Total Items</h3>
                    <p class="mt-3 text-4xl font-bold">{{ $totalItems }}</p>
                </div>

                <div class="rounded-2xl border border-blue-200 bg-yellow-100 p-5 text-center shadow-sm sm:col-span-2 xl:col-span-1">
                    <h3 class="text-lg font-semibold">Total Orders</h3>
                    <p class="mt-3 text-4xl font-bold">{{ $totalOrders }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>