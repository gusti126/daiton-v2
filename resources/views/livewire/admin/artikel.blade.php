<div>
    @section('title')
        Artikel
    @endsection
    @forelse ($artikels as $item)
        <div class="flex items-stretch  mb-4 p-4 bg-white rounded">
            <img src="{{ $item->thumbnail }}" alt="" class="rounded h-20 mr-6">
            <div class="w-full">
                <div class="font-extrabold">{{ $item->title }}</div>
                <div class="text-gray-400 text-xs">{{ $item->created_at }}</div>
                <div class="flex justify-between items-end">
                    <div class="text-gray-400 flex self-end mt-5 text-xs">
                        <div class="mr-4">
                            <i class="far fa-eye"></i> <span>{{ number_format(30000) }}</span>
                        </div>
                        <div class="mr-4">
                            <i class="far fa-comments"></i> <span>{{ number_format(380) }}</span>
                        </div>
                    </div>
                    <div class="flex">

                        {{-- delete --}}
                        <div class="___class_+?10___">
                            @if ($confirmId === $item->id)
                                <div class="___class_+?15___">
                                    <button class="bg-red-700 px-2 py-1 rounded text-white text-sm"
                                        wire:click="delete">Yes</button>
                                    <button class="bg-blue-700 px-2 py-1 rounded text-white text-sm"
                                        wire:click="deleteNO">No</button>
                                </div>
                            @else
                                <div class="flex">
                                    {{-- info --}}
                                    <div>
                                        <a href=""
                                            class="bg-purple-500 px-2 py-1 rounded text-white text-sm mr-3">Detail</a>
                                    </div>
                                    {{-- edit --}}
                                    <div>
                                        <a href=""
                                            class="bg-blue-700 px-2 py-1 rounded text-white text-sm mr-3">Detail</a>
                                    </div>
                                    <button class="bg-red-700 px-2 py-1 rounded text-white text-sm"
                                        wire:click="confirmDelete({{ $item->id }})">Hapus</button>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="col-span-12 text-center font-semibold text-2xl">
            Tidak ada data
        </div>
    @endforelse
    <div class="flex">
        <div class="border-blue-600 border-2 cursor-pointer text-blue-600 px-2 py-1 rounded mx-auto"
            wire:click="loadMore">Load
            More</div>
    </div>
</div>
