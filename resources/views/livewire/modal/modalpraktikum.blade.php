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
                            <label for="hari_praktikum" class="block text-gray-700 text-sm font-bold mb-2">Hari Praktikum :</label>
                            <select id="hari_praktikum" wire:model="hari_praktikum" class="flex flex-wrap shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="">
                                    {{ __('Pilih Hari Praktikum') }}
                                </option>
                                <option value="Senin">
                                    <div class="overflow-hidden">
                                        <span>
                                            Senin
                                        </span>
                                    </div>
                                </option>
                                <option value="Selasa">
                                    <div class="overflow-hidden">
                                        <span>
                                            Selasa
                                        </span>
                                    </div>
                                </option>
                                <option value="Rabu">
                                    <div class="overflow-hidden">
                                        <span>
                                            Rabu
                                        </span>
                                    </div>
                                </option>
                                <option value="Kamis">
                                    <div class="overflow-hidden">
                                        <span>
                                            Kamis
                                        </span>
                                    </div>
                                </option>
                                <option value="Jumat">
                                    <div class="overflow-hidden">
                                        <span>
                                            Jumat
                                        </span>
                                    </div>
                                </option>
                                <option value="Sabtu">
                                    <div class="overflow-hidden">
                                        <span>
                                            Sabtu
                                        </span>
                                    </div>
                                </option>
                            </select>
                            @error('hari_praktikum') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="waktumulai_praktikum" class="block text-gray-700 text-sm font-bold mb-2">Waktu Mulai :</label>
                            <input type="time" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="waktumulai_praktikum" wire:model="waktumulai_praktikum">
                            @error('waktumulai_praktikum') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="waktuselesai_praktikum" class="block text-gray-700 text-sm font-bold mb-2">Waktu Selesai :</label>
                            <input type="time" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="waktuselesai_praktikum" wire:model="waktuselesai_praktikum">
                            @error('waktuselesai_praktikum') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="matakuliah_praktikum" class="block text-gray-700 text-sm font-bold mb-2">Mata Kuliah :</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="matakuliah_praktikum" wire:model="matakuliah_praktikum">
                            @error('matakuliah_praktikum') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="kelas_praktikum" class="block text-gray-700 text-sm font-bold mb-2">Kelas Praktikum :</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="kelas_praktikum" wire:model="kelas_praktikum">
                            @error('kelas_praktikum') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="dosen_praktikum" class="block text-gray-700 text-sm font-bold mb-2">Dosen Praktikum :</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="dosen_praktikum" wire:model="dosen_praktikum">
                            @error('dosen_praktikum') <span class="text-red-500">{{ $message }}</span>@enderror
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