<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Permissions') }}
        </h2>
    </x-slot>
    <div class="flex mb-4">
        <a class="px-4 py-2 text-xs font-semibold text-white bg-gray-800 border border-transparent rounded-md hover:bg-gray-700"
            href="{{ route('admin.permissions.create') }}">Create</a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left bg-white border border-gray-300 divide-y shadow-sm table-auto rounded-xl">
            <thead>
                <tr class="bg-gray-500/5">
                    <th class="px-4">{{ __('id') }}</th>
                    <th>{{ __('name') }}</th>
                    <th>{{ __('created_at') }}</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @forelse($permissions as $permission)
                    <tr>
                        <td class="px-4 py-3">{{ $permission->id }}</td>
                        <td>{{ $permission->name }}</td>
                        <td>{{ $permission->created_at }}</td>
                        <td class="px-4 divide-x-2">
                            <a class="px-4 py-2 text-xs font-semibold text-white bg-gray-800 border border-transparent rounded-md hover:bg-gray-700"
                                href="{{ route('admin.permissions.edit', $permission) }}">
                                {{ __('edit') }}
                            </a>

                            <form action="{{ route('admin.permissions.destroy', $permission) }}" method="POST"
                                style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button
                                    class="px-4 py-2 text-xs font-semibold text-white bg-gray-800 rounded-md hover:bg-gray-700"
                                    type="submit" onclick="return confirm({{ __('Are you sure?') }})">
                                    {{ __('delete') }}
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="p-4" colspan="4">{{ __('No records found.') }}</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>
