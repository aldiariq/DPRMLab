<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​

        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form>
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-6">
                    <div class="">
                        <div class="mb-4">
                            <label for="logo_laboratorium" class="block text-gray-700 text-sm font-bold mb-2">Logo Laboratorium :</label>
                            <input type="file" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="logo_laboratorium" wire:model="logo_laboratorium">
                            @error('logo_laboratorium') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        @php
                        $array = explode(".",$logo_laboratorium);
                        @endphp
                        @if ($array[count($array)-1] == "png" || $array[count($array)-1] == "jpg" || $array[count($array)-1] == "jpeg")
                        <div class="mb-4">
                            <img src="{{asset('storage/'.$logo_laboratorium)}}" width="400" class="mx-auto shadow-xl">
                        </div>
                        @endif
                        <div class="mb-4">
                            <label for="foto_laboratorium" class="block text-gray-700 text-sm font-bold mb-2">Foto Laboratorium :</label>
                            <input type="file" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="foto_laboratorium" wire:model="foto_laboratorium">
                            @error('foto_laboratorium') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        @php
                        $array = explode(".",$foto_laboratorium);
                        @endphp
                        @if ($array[count($array)-1] == "png" || $array[count($array)-1] == "jpg" || $array[count($array)-1] == "jpeg")
                        <div class="mb-4">
                            <img src="{{asset('storage/'.$foto_laboratorium)}}" width="400" class="mx-auto shadow-xl">
                        </div>
                        @endif
                        <div class="mb-4">
                            <label for="nama_laboratorium" class="block text-gray-700 text-sm font-bold mb-2">Nama Laboratorium :</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nama_laboratorium" wire:model="nama_laboratorium">
                            @error('nama_laboratorium') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="penjelasan_laboratorium" class="block text-gray-700 text-sm font-bold mb-2">Penjelasan Laboratorium :</label>
                            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="penjelasan_laboratorium" wire:model="penjelasan_laboratorium"></textarea>
                            @error('penjelasan_laboratorium') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="instagram_laboratorium" class="block text-gray-700 text-sm font-bold mb-2">Instagram Laboratorium :</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="instagram_laboratorium" wire:model="instagram_laboratorium">
                            @error('instagram_laboratorium') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="youtube_laboratorium" class="block text-gray-700 text-sm font-bold mb-2">Youtube Laboratorium :</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="youtube_laboratorium" wire:model="youtube_laboratorium">
                            @error('youtube_laboratorium') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="github_laboratorium" class="block text-gray-700 text-sm font-bold mb-2">Github Laboratorium :</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="github_laboratorium" wire:model="github_laboratorium">
                            @error('github_laboratorium') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="email_laboratorium" class="block text-gray-700 text-sm font-bold mb-2">Email Laboratorium :</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email_laboratorium" wire:model="email_laboratorium">
                            @error('email_laboratorium') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="warnatajuk_laboratorium" class="block text-gray-700 text-sm font-bold mb-2">Warna Tajuk Laboratorium :</label>
                            <span class="text-blue-500 text-xs">{{ __('Silahkan klik/tekan warna dibawah untuk pemilihan warna') }}</span>
                            <input type="color" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="warnatajuk_laboratorium" wire:model="warnatajuk_laboratorium">
                            @error('warnatajuk_laboratorium') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 px-3 py-3 sm:flex sm:flex-row-reverse">
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto px-2">
                        <button wire:click.prevent="storeLaboratorium()" class="w-full h-10 px-6 text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">
                            <h2 class="font-semibold text-sm text-white-800 leading-tight">
                                {{ __('Simpan') }}
                            </h2>
                        </button>
                    </span>
                    <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">

                        <button wire:click="closeModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Batal
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>
</div>