<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm ovdashboarderflow-hidden dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
            <div class="grid max-w-full grid-cols-3 gap-4">
                <div class="max-w-lg my-2">
                    <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                        <div class="p-4 text-3xl text-gray-900 dark:text-gray-100">
                            {{ $usersCount ?? 0 }}
                        </div>
                        <h3 class="p-4">Users</h3>
                    </div>
                </div>
                <div class="max-w-lg my-2">
                    <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                        <div class="p-4 text-3xl text-gray-900 dark:text-gray-100">
                            {{ $rolesCount ?? 0 }}
                        </div>
                        <h3 class="p-4">Roles</h3>
                    </div>
                </div>
                <div class="max-w-lg my-2">
                    <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                        <div class="p-4 text-3xl text-gray-900 dark:text-gray-100">
                            {{ $permissionsCount ?? 0 }}
                        </div>
                        <h3 class="p-4">Permissions</h3>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
