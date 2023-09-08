<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Roles') }}
        </h2>
    </x-slot>
    <div class="flex mb-4">
        <a class="px-4 py-2 text-xs font-semibold text-white bg-gray-800 border border-transparent rounded-md hover:bg-gray-700" href="{{ route('admin.roles.create') }}">{{ __('create') }}</a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left bg-white border border-separate border-gray-300 divide-y shadow-sm table-auto rounded-xl">
            <thead>
                <tr class="bg-gray-500/5">
                    <th class="px-4">{{ __('id') }}</th>
                    <th>{{ __('name') }}</th>
                    <th>{{ __('permissions') }}</th>
                    <th>{{ __('created_at') }}</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @forelse($roles as $role)
                    <tr class="p-4">
                        <td class="">{{ $role->id }}</td>
                        <td>{{ $role->name }}</td>
                        <td>
                            @foreach($role->permissions as $permission)
                                <span class="px-2 py-1 text-xs text-blue-700 bg-blue-300 rounded-xl">{{ $permission->name }}</span>
                            @endforeach
                        </td>
                        <td>{{ $role->created_at }}</td>
                        <td class="flex divide-x-2">
                            <a class="px-4 py-2 text-xs font-semibold text-white bg-gray-800 border border-transparent rounded-md hover:bg-gray-700" href="{{ route('admin.roles.edit', $role) }}">
                                {{ __('edit') }}
                            </a>

                            <form action="{{ route('admin.roles.destroy', $role) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button class="px-4 py-2 text-xs font-semibold text-white bg-gray-800 rounded-md hover:bg-gray-700" type="submit" onclick="return confirm({{ __('confirm_action') }})">
                                    {{ __('delete') }}
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="p-4" colspan="4">{{ __('no_records') }}</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>
