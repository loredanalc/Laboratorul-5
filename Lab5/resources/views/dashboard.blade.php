<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if(Auth::user()->role === 'admin')
                        <h3 class="text-lg font-semibold">{{ __('Users List') }}</h3>
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
                                <thead>
                                    <tr class="bg-gray-200 dark:bg-gray-700">
                                        <th class="py-3 px-4 text-left text-sm font-semibold text-gray-600 dark:text-gray-200">{{ __('Username') }}</th>
                                        <th class="py-3 px-4 text-left text-sm font-semibold text-gray-600 dark:text-gray-200">{{ __('Email') }}</th>
                                        <th class="py-3 px-4 text-left text-sm font-semibold text-gray-600 dark:text-gray-200">{{ __('Role') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                        <tr class="bg-white dark:bg-gray-800">
                                            <td class="py-3 px-4 text-sm text-gray-900 dark:text-gray-100">{{ $user->name }}</td>
                                            <td class="py-3 px-4 text-sm text-gray-900 dark:text-gray-100">{{ $user->email }}</td>
                                            <td class="py-3 px-4 text-sm text-gray-900 dark:text-gray-100">{{ $user->role }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <p>{{ __('Welcome, :name!', ['name' => Auth::user()->name]) }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
