<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Laboratorium') }}
        </h2>
    </x-slot>
    <div>
        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1 flex justify-between">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium text-gray-900">Informasi Laboratorium</h3>

                            <p class="mt-1 text-sm text-gray-600">
                                Administrator dapat mengubah informasi laboratorium seperti
                                logo, foto, nama, penjelasan singkat, instagram, youtube, github, dan
                                email laboratorium.
                            </p>
                        </div>

                        <div class="px-4 sm:px-0">

                        </div>
                    </div>

                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <form wire:submit.prevent="updateProfileInformation">
                            <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                                @foreach($laboratorium as $data)
                                <div class="flex flex-row space-x-10">
                                    <div>
                                        <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                                            <label class="block font-medium text-sm text-gray-700" for="photo">
                                                Logo
                                            </label>
                                            <div class="mt-2" x-show="! photoPreview">
                                                <img src="{{ asset('storage/'.$data->logo_laboratoriums)}}" alt="Admin DPRMLab ed" class="rounded-full h-64 w-64 object-cover">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                                            <label class="block font-medium text-sm text-gray-700" for="photo">
                                                Foto
                                            </label>
                                            <div class="mt-2" x-show="! photoPreview">
                                                <img src="{{ asset('storage/'.$data->foto_laboratoriums)}}" alt="Admin DPRMLab ed" class="rounded-full h-64 w-64 object-cover">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-6 gap-6 mt-8">
                                    <div class="col-span-6 sm:col-span-4">
                                        <label class="block font-medium text-sm text-gray-700" for="nama_laboratorium_show">
                                            Nama
                                        </label>
                                        <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="nama_laboratorium_show" value="{{ $data->nama_laboratoriums }}" type="text" disabled>
                                    </div>

                                    <div class="col-span-6 sm:col-span-4">
                                        <label class="block font-medium text-sm text-gray-700" for="penjelasan_laboratorium_show">
                                            Penjelasan
                                        </label>
                                        <textarea class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="penjelasan_laboratorium_show" cols="30" rows="5" disabled>{{ $data->penjelasan_laboratoriums }}</textarea>
                                    </div>

                                    <div class="col-span-6 sm:col-span-4">
                                        <label class="block font-medium text-sm text-gray-700" for="instagram_laboratorium_show">
                                            Instagram
                                        </label>
                                        <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="instagram_laboratorium_show" type="text" value="{{ $data->instagram_laboratoriums }}" disabled>
                                    </div>

                                    <div class="col-span-6 sm:col-span-4">
                                        <label class="block font-medium text-sm text-gray-700" for="youtube_laboratorium_show">
                                            Youtube
                                        </label>
                                        <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="youtube_laboratorium_show" type="text" value="{{ $data->youtube_laboratoriums }}" disabled>
                                    </div>

                                    <div class="col-span-6 sm:col-span-4">
                                        <label class="block font-medium text-sm text-gray-700" for="github_laboratorium_show">
                                            Github
                                        </label>
                                        <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="github_laboratorium_show" type="text" value="{{ $data->github_laboratoriums }}" disabled>
                                    </div>

                                    <div class="col-span-6 sm:col-span-4">
                                        <label class="block font-medium text-sm text-gray-700" for="email_laboratorium_show">
                                            Email
                                        </label>
                                        <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="email_laboratorium_show" type="text" value="{{ $data->email_laboratoriums }}" disabled>
                                    </div>

                                    <div class="col-span-6 sm:col-span-4">
                                        <label class="block font-medium text-sm text-gray-700" for="name">
                                            Warna Tajuk
                                        </label>
                                        <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="name" type="color" value="{{ $data->warnatajuk_laboratoriums }}" disabled>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                            <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                                <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" wire:loading.attr="disabled" wire:target="photo">
                                    Ubah
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="hidden sm:block">
                    <div class="py-8">
                        <div class="border-t border-gray-200"></div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1 flex justify-between">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium text-gray-900">Fokus Penelitian Laboratorium</h3>

                            <p class="mt-1 text-sm text-gray-600">
                                Administrator dapat menambah, melihat, mengubah, dan menghapus
                                fokus penelitian dari laboratorium yang nantinya akan tampil di
                                header pada halaman utama website.
                            </p>
                        </div>

                        <div class="px-4 sm:px-0">

                        </div>
                    </div>

                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                            <div class="w-full lg:w-6/6 px-2">
                                <button wire:click="showModal()" class="w-full h-10 px-6 text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">
                                    <h2 class="font-semibold text-sm text-white-800 leading-tight">
                                        {{ __('Tambah Fokus Penelitian') }}
                                    </h2>
                                </button>
                                <div class="bg-white shadow-md rounded my-6 overflow-x-scroll">
                                    <table class="divide-y divide-gray-200 table-fixed w-full">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th class="w-1/2 px-6 py-3 bg-gray-200 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                                                    No
                                                </th>
                                                <th class="w-1/2 px-6 py-3 bg-gray-200 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                                                    Topik Penelitian
                                                </th>
                                                <th class="w-1/2 px-6 py-3 bg-gray-200 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                                                    Aksi
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            @php
                                            $nomor = 1;
                                            @endphp
                                            @forelse ($fokuspenelitian as $data)
                                            <tr>
                                                <td class="px-6 py-4 text-sm text-gray-500 break-normal">
                                                    <span class="font-medium">{{ $nomor }}</span>
                                                </td>
                                                <td class="px-6 py-4 text-sm text-gray-500 break-normal">
                                                    <span class="font-medium">{{ $data->topik_fokuspenelitians }}</span>
                                                </td>
                                                <td class="px-6 py-4 text-sm text-gray-500 break-normal">
                                                    <div class="flex item-center justify-center">
                                                        <button wire:click="edit({{ $data->id_fokuspenelitian }})" class="flex text-sm border-2 border-transparent transition">
                                                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                                </svg>
                                                            </div>
                                                        </button>
                                                        <button wire:click="showModaldelete({{ $data->id_fokuspenelitian }})" class="flex text-sm border-2 border-transparent transition">
                                                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                </svg>
                                                            </div>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            @php
                                            $nomor++;
                                            @endphp
                                            @empty
                                            <h2 class="font-semibold text-sm text-center text-gray-800 leading-tight">
                                                {{ __('Data Tidak Ditemukan') }}
                                            </h2>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                                <div class="py-3">
                                    {{ $fokuspenelitian->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden sm:block">
                    <div class="py-8">
                        <div class="border-t border-gray-200"></div>
                    </div>
                </div>
            </div>
        </div>
        <x-jet-section-border />
    </div>
</div>