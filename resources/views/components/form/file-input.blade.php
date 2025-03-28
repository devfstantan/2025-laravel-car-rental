@props(['disabled' => false, 'value' => ""])

<div 
    x-data="{ 
        files: null,
        filename: '{{ $value ? basename($value) : '' }}',
        dragOver: false,
        previewUrl: '{{ $value ? asset($value) : null }}',
        handleFiles(files) {
            if (files.length > 0) {
                this.files = files;
                this.filename = files[0].name;
                
                // Create preview URL
                const reader = new FileReader();
                reader.onload = (e) => {
                    this.previewUrl = e.target.result;
                };
                reader.readAsDataURL(files[0]);
            }
        }
    }"
    class="relative"
>
    {{-- Hidden file input --}}
    <input 
        type="file" 
        class="sr-only" 
        value="{{ $value }}"
        {{ $attributes }}
        @change="handleFiles($event.target.files)"
        x-ref="input"
        @disabled($disabled)
    >

    {{-- Drag & Drop Zone --}}
    <div
        @click="$refs.input.click()"
        @dragover.prevent="dragOver = true"
        @dragleave.prevent="dragOver = false"
        @drop.prevent="dragOver = false; handleFiles($event.dataTransfer.files)"
        :class="{ 
            'border-primary bg-primary/5': dragOver,
            'border-gray-300': !dragOver 
        }"
        class="group relative flex flex-col items-center justify-center h-48 border-2 border-dashed rounded-lg cursor-pointer transition-colors"
    >
        {{-- Preview Image --}}
        <template x-if="previewUrl">
            <img :src="previewUrl " class="absolute inset-0 w-full h-full object-contain p-2">
        </template>

        {{-- Upload Instructions --}}
        <div class="space-y-2 text-center" :class="{ 'hidden': previewUrl }">
            <div class="text-gray-500">
                <i class="fa-solid fa-cloud-arrow-up text-3xl mb-2"></i>
                <p class="text-sm">
                    <span class="font-semibold">Cliquez pour télécharger</span> ou glissez et déposez
                </p>
            </div>
            <p class="text-xs text-gray-500">PNG, JPG jusqu'à 10MB</p>
        </div>

        {{-- Hover Overlay --}}
        <div 
            class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity"
            :class="{ 'hidden': !previewUrl }"
        >
            <span class="text-white text-sm">Changer l'image</span>
        </div>
    </div>

    {{-- Filename --}}
    <div 
        x-show="filename" 
        x-cloak
        class="mt-2 text-sm text-gray-500 flex items-center"
    >
        <i class="fa-solid fa-image mr-2"></i>
        <span x-text="filename"></span>
        <button 
            @click.prevent="files = null; filename = ''; previewUrl = null" 
            class="ml-auto text-red-500 hover:text-red-700"
        >
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>
</div>