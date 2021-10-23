<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Penelitian') }}
        </h2>
    </x-slot>
    <div class="py-6">
        @if($modal)
        @include('livewire.modal.modalpenelitian')
        @endif

        @if($modaldelete)
        <div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity">
                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                </div>
                <!-- This element is to trick the browser into centering the modal contents. -->
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​

                <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                    <h3 class="font-semibold text-xl text-gray-800 leading-tight px-3 py-6 text-center">
                        {{ __('Ingin Menghapus Data?') }}
                    </h3>
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                            <button wire:click.prevent="delete({{$id_penelitian}})" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-red-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                Hapus
                            </button>
                        </span>
                        <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                            <button wire:click="closeModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                Batal
                            </button>
                        </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden sm:rounded-lg">
                <div class="min-w-screen justify-center min-h-screen bg-gray-100 flex justify-center bg-gray-100 font-sans overflow-hidden">
                    <div class="w-full lg:w-5/6 px-2">
                        <button wire:click="showModal()" class="w-full h-10 px-6 text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">
                            <h2 class="font-semibold text-sm text-white-800 leading-tight">
                                {{ __('Tambah Penelitian') }}
                            </h2>
                        </button>
                        <div class="bg-white shadow-md rounded my-6 overflow-x-scroll">
                            <table class="divide-y divide-gray-200 table-fixed w-full">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="w-1/2 px-6 py-3 bg-gray-200 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                                            Judul
                                        </th>
                                        <th class="w-1/2 px-6 py-3 bg-gray-200 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                                            Nama
                                        </th>
                                        <th class="w-1/2 px-6 py-3 bg-gray-200 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                                            Tanggal
                                        </th>
                                        <th class="w-1/2 px-6 py-3 bg-gray-200 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                                            Status
                                        </th>
                                        <th class="w-1/2 px-6 py-3 bg-gray-200 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                                            Penjelasan
                                        </th>
                                        <th class="w-1/2 px-6 py-3 bg-gray-200 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                                            Foto
                                        </th>
                                        <th class="w-1/2 px-6 py-3 bg-gray-200 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @forelse ($penelitian as $data)
                                    <tr>
                                        <td class="px-6 py-4 text-sm text-gray-500 break-normal">
                                            <span class="font-medium ">{{ $data->judul_penelitian }}</span>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500 break-normal">
                                            <span class="font-medium">{{ $data->nama_penelitian }}</span>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500 break-normal">
                                            <span class="font-medium">{{ $data->tanggal_penelitian }}</span>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500 break-normal">
                                            @if($data->status_penelitian == "SELESAI")
                                            <div class="flex items-center justify-center py-2 bg-green-600">
                                                <span class="font-medium font-bold text-white text-center">{{ __('SELESAI') }}</span>
                                            </div>
                                            @else
                                            <div class="flex items-center justify-center py-2 bg-red-600">
                                                <span class="font-medium font-bold text-white text-center">{{ __('BELUM SELESAI') }}</span>
                                            </div>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500 break-normal">
                                            <span class="font-medium">{{ $data->penjelasan_penelitian }}</span>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500 break-normal">
                                            <img class="h-20 w-20 rounded-full object-cover" src="{{ asset('storage/'.$data->foto_penelitian)}}" />
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500 break-normal">
                                            <div class="flex item-center justify-center">
                                                <button wire:click="edit({{ $data->id_penelitian }})" class="flex text-sm border-2 border-transparent transition">
                                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                        </svg>
                                                    </div>
                                                </button>
                                                <button wire:click="showModaldelete({{ $data->id_penelitian }})" class="flex text-sm border-2 border-transparent transition">
                                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                    </div>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <h2 class="font-semibold text-sm text-center text-gray-800 leading-tight">
                                        {{ __('Data Tidak Ditemukan') }}
                                    </h2>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="py-3">
                            {{ $penelitian->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>