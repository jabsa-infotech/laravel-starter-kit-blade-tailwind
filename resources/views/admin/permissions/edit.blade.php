<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Permissions') }}
        </h2>
    </x-slot>
    <form class="space-y-4" action="{{ route('admin.permissions.update', $permission) }}" method="post">
        @csrf
        @method('PUT')
        <div class="space-y-2">
            <label class="text-base font-medium text-gray-700" for="name">{{ __('name') }}</label>
            <input class="block w-full px-2 py-1 border border-gray-300 rounded-md shadow-sm" type="text" name="name" id="name" value="{{ old('name', $permission->name) }}" required />
            @error('name')
                <span class="text-sm text-red-600">{{ $message }}</span>
            @enderror
        </div>

        @if($roles->count())
            <div class="space-y-2">
                <label class="block text-base font-medium text-gray-700" for="roles">{{ __('title') }}</label>
                <div class="space-x-2">
                    @foreach($roles as $id => $name)
                        <div class="inline-flex space-x-1">
                            <input class="border-gray-300 rounded-md shadow-sm" type="checkbox" name="roles[]" id="role-{{ $id }}" value="{{ $id }}" @checked(in_array($id, old('role', [])) || $permission->roles->contains($id))>
                            <label class="text-sm font-medium text-gray-700"  for="role-{{ $id }}">{{ $name }}</label>
                        </div>
                    @endforeach
                </div>
                @error('roles')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>
        @endif

        <button class="px-4 py-2 text-xs font-semibold text-white bg-gray-800 rounded-md hover:bg-gray-700" type="submit">
            {{ __('save') }}
        </button>
    </form>
</x-app-layout>
