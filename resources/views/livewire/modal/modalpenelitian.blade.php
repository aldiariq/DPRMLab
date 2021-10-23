<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​

        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form>
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="">
                        <div class="mb-4">
                            <label for="judul_penelitian" class="block text-gray-700 text-sm font-bold mb-2">Judul Penelitian :</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="judul_penelitian" wire:model="judul_penelitian">
                            @error('judul_penelitian') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="nama_penelitian" class="block text-gray-700 text-sm font-bold mb-2">Nama Peneliti :</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nama_penelitian" wire:model="nama_penelitian">
                            @error('nama_penelitian') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="tanggal_penelitian" class="block text-gray-700 text-sm font-bold mb-2">Tanggal Penelitian :</label>
                            <input type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="tanggal_penelitian" wire:model="tanggal_penelitian">
                            @error('tanggal_penelitian') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="status_penelitian" class="block text-gray-700 text-sm font-bold mb-2">Status Penelitian :</label>
                            <select id="status_penelitian" wire:model="status_penelitian" class="flex flex-wrap shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="">
                                    {{ __('Pilih Status Penelitian') }}
                                </option>
                                <option value="SELESAI" selected>
                                    {{ __('SELESAI') }}
                                </option>
                                <option value="BELUMSELESAI">
                                    {{ __('BELUM SELESAI') }}
                                </option>
                            </select>
                            @error('status_penelitian') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="penjelasan_penelitian" class="block text-gray-700 text-sm font-bold mb-2">Penjelasan Penelitian :</label>
                            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="penjelasan_penelitian" wire:model="penjelasan_penelitian"></textarea>
                            @error('penjelasan_penelitian') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="foto_penelitian" class="block text-gray-700 text-sm font-bold mb-2">Foto Penelitian :</label>
                            <input type="file" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="foto_penelitian" wire:model="foto_penelitian">
                            @error('foto_penelitian') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        @php
                        $array = explode(".",$foto_penelitian);
                        @endphp
                        @if ($array[count($array)-1] == "png" || $array[count($array)-1] == "jpg" || $array[count($array)-1] == "jpeg")
                        <div class="mb-4">
                            <img src="{{asset('storage/'.$foto_penelitian)}}" width="400" class="mx-auto shadow-xl">
                        </div>
                        @endif
                    </div>
                </div>

                <div class="bg-gray-50 px-3 py-3 sm:flex sm:flex-row-reverse">
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto px-2">
                        <button wire:click.prevent="store()" class="w-full h-10 px-6 text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">
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