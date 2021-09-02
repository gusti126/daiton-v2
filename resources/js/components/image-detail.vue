<template>
    <div>
    <div class="md:px-20 px-4 -mt-20" id="app">
        <div class="grid grid-flow-row grid-cols-12 gap-4">
            <div class="col-span-7 h-full">
                <img :src="photos[0].url" alt="" class="w-full rounded h-full object-cover">

            </div>
            <div class="col-span-5">
                <div class="grid grid-flow-row grid-cols-12 gap-4">
                    @foreach ($item->image as $image)
                        <div class="col-span-12">
                            <img src="{{ $image->image }}" alt=""
                                class="w-full rounded object-cover h-40 cursor-pointer border-2 border-transparent hover:border-gray-500">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
</template>

<script>
export default {
    
}
</script>