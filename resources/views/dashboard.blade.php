<x-app-layout>
    <title>Dashboard</title>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Job Available') }}
    </h2>
    </x-slot>

    @if(Spatie\Multitenancy\Models\Tenant::current()->id==1)
        @foreach($user1 as $users => $value)
            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div>
                    <div class="p-6">
                    <div class="flex items-center">
                        <div class="ml-4 text-lg leading-7 font-semibold">
                        <a href="https://laravel.com/docs" class="text-gray-900 dark:text-white">{{ $value->name }}</a>
                        </div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm" style="text-align: justify;">
                            <strong>Job Title</strong>: {{ $value->title }}
                        </div>
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm" style="text-align: justify;">
                            @if(!$value->description== null)
                                Description: <i>{{ $value->description }}</i>
                            @endif 
                        </div>
                        @if(Auth::user()->admin == 1)
                            <button class="bg-white mt-2 text-sm hover:bg-gray-100 text-gray-800 font-semibold py-1 px-2 border border-gray-400 rounded shadow">
                                <a href="">Edit</a>
                            </button>
                            <button class="bg-red-100 mt-2 text-sm hover:bg-gray-100 text-gray-800 font-semibold py-1 px-2 border border-gray-400 rounded shadow">

                            </button>
                        @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        @elseif(Spatie\Multitenancy\Models\Tenant::current()->id==2)
            @foreach($user2 as $users => $value)
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div>
                        <div class="p-6">
                        <div class="flex items-center">
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <a href="https://laravel.com/docs" class="text-gray-900 dark:text-white">{{ $value->name }}</a>
                            </div>
                        </div>
                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm" style="text-align: justify;">
                                <strong>Job Title</strong>: {{ $value->title }}
                            </div>
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm" style="text-align: justify;">
                                @if(!$value->description== null)
                                    Description: <i>{{ $value->description }}</i>
                                @endif 
                            </div>
                            @if(Auth::user()->admin == 1)
                                <button class="bg-white mt-2 text-sm hover:bg-gray-100 text-gray-800 font-semibold py-1 px-2 border border-gray-400 rounded shadow">
                                    Edit
                                </button>
                                <button class="bg-red-100 mt-2 text-sm hover:bg-gray-100 text-gray-800 font-semibold py-1 px-2 border border-gray-400 rounded shadow">
                                   Delete
                                </button>
                            @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
        @foreach($user3 as $users => $value)
            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div>
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="ml-4 text-lg leading-7 font-semibold">
                        <a href="https://laravel.com/docs" class="text-gray-900 dark:text-white">{{ $value->name }}</a>
                        </div>
                    </div>
                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm" style="text-align: justify;">
                            <strong>Job Title</strong>: {{ $value->title }}
                        </div>
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm" style="text-align: justify;">
                            @if(!$value->description== null)
                                Description: <i>{{ $value->description }}</i>
                            @endif 
                        </div>
                        @if(Auth::user()->admin == 1)

                            <button class="bg-white mt-2 text-sm hover:bg-gray-100 text-gray-800 font-semibold py-1 px-2 border border-gray-400 rounded shadow">
                                Edit
                            </button>
                            <button class="bg-red-100 mt-2 text-sm hover:bg-gray-100 text-gray-800 font-semibold py-1 px-2 border border-gray-400 rounded shadow">
                                <a href="{{ DB::connection('php')->table('users')->where('name',$value->name)->delete()}}">Delete</a>
                            </button>
                        @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</x-app-layout>
