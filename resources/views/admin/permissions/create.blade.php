<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Permissions') }}
        </h2>
    </x-slot>

    <form class="space-y-4" action="{{ route('admin.permissions.store') }}" method="post">
        @csrf

        <div class="space-y-2">
            <label class="text-base font-medium text-slate-700 dark:text-slate-50"
                for="name">{{ __('Name') }}</label>
            <input class="block w-full px-2 py-1 border rounded-md shadow-sm border-slate-300" type="text"
                name="name" id="name" value="{{ old('name') }}" required autofocus />
            @error('name')
                <span class="text-sm text-red-600">{{ $message }}</span>
            @enderror
        </div>

        @if ($roles->count())
            <div class="space-y-2">
                <label class="block text-base font-medium text-slate-700 dark:text-slate-50"
                    for="permissions">{{ __('Give this permission to') }}</label>
                <div class="space-x-2">
                    @foreach ($roles as $id => $name)
                        <div class="inline-flex space-x-1">
                            <input class="rounded-md shadow-sm border-slate-300" type="checkbox" name="roles[]"
                                id="role-{{ $id }}" value="{{ $id }}" @checked(old('role-' . $id))>
                            <label class="text-sm font-medium text-slate-700 dark:text-slate-50"
                                for="role-{{ $id }}">{{ $name }}</label>
                        </div>
                    @endforeach
                </div>
                @error('roles')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>
        @endif

        <button
            class="px-4 py-2 font-semibold rounded-lg bg-slate-800 text-slate-50 hover:bg-slate-50 hover:text-slate-800 hover:border-slate-800 hover:border"
            type="submit">
            {{ __('save') }}
        </button>
    </form>
</x-app-layout>
