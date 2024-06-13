@extends('layouts.app')

@section('content')
    <section class="min-h-screen">
        @include('inc.search-section')

        <section>
            <div class="container mx-auto">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="border rounded-lg overflow-hidden dark:border-neutral-700 bg-white">
                            <table class="min-w-full divide-y dark:bg-slate-800 divide-gray-200 dark:divide-gray-700">
                                <thead class="bg-gray-50 dark:bg-slate-800">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-400">
                                            <div class="flex items-center space-x-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                </svg>
                                                <span class="text-md font-black">Doman Age</span>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                            Domain Age
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                            : {{ $age }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container mx-auto">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="border rounded-lg overflow-hidden dark:border-neutral-700 bg-white">
                            <table class="min-w-full divide-y dark:bg-slate-800 divide-gray-200 dark:divide-gray-700">
                                <thead class="bg-gray-50 dark:bg-slate-800">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-400">
                                            <div class="flex items-center space-x-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                </svg>
                                                <span class="text-md font-black">Doman Information</span>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                    @foreach ($arr as $key => $val)
                                        @php
                                            $data = strtolower($key);
                                        @endphp
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">{{ $key }} </td>
                                            <<td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">: @if (strpos($data, 'creation date') || strpos($data, 'updated date') || strpos($data, 'registry expiry date'))
                                                    @php
                                                        $date = new DateTime($val);
                                                        $formattedDate = $date->format('d F Y');
                                                        echo $formattedDate;
                                                    @endphp
                                                @else
                                                    {{ $val }}
                                                @endif
                                            </td>

                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
