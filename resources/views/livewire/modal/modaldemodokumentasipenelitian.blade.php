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
                            <label for="id_penelitian" class="block text-gray-700 text-sm font-bold mb-2">Judul Penelitian :</label>
                            <select id="id_penelitian" wire:model="id_penelitian" class="flex flex-wrap shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="">
                                    {{ __('Pilih Judul Penelitian') }}
                                </option>
                                @foreach ($penelitian as $data)
                                @if($data->id_penelitian == $id_penelitian)
                                <option value="{{ $data->id_penelitian }}">
                                    {{ $data->judul_penelitian }}
                                </option>
                                @else
                                <option value="{{ $data->id_penelitian }}">
                                    {{ $data->judul_penelitian }}
                                </option>
                                @endif
                                @endforeach
                            </select>
                            @error('id_penelitian') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="ket_demo_dokumentasi_penelitian" class="block text-gray-700 text-sm font-bold mb-2">Keterangan :</label>
                            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="ket_demo_dokumentasi_penelitian" wire:model="ket_demo_dokumentasi_penelitian"></textarea>
                            @error('ket_demo_dokumentasi_penelitian') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="linkvideo_demo_dokumentasi_penelitian" class="block text-gray-700 text-sm font-bold mb-2">Link Video :</label>
                            <span class="text-blue-500 text-xs">{{ __('Contoh Link : https://www.youtube.com/watch?v=INh0A88iJC8&ab_channel=elektroprogramming') }}</span>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="linkvideo_demo_dokumentasi_penelitian" wire:model="linkvideo_demo_dokumentasi_penelitian">
                            @error('linkvideo_demo_dokumentasi_penelitian') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
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