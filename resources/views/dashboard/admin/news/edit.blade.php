<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit News') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-10 shadow-sm sm:rounded-lg">

                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="py-3 w-full rounded-3xl bg-red-500 text-white">
                            {{$error}}
                        </div>
                    @endforeach
                @endif

                <!-- Form to Edit Event -->
                <form method="POST" action="{{ route('admin.news.update', $news->ID_News) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT') <!-- This specifies that this is an update operation -->

                    <!-- News Title -->
                    <div>
                        <x-input-label for="News_Title" :value="__('News Title')" />
                        <x-text-input id="News_Title" class="block mt-1 w-full" type="text" name="News_Title"
                            :value="old('News_Title', $news->News_Title)" required minlength="16" autofocus
                            autocomplete="News_Title" />
                        <x-input-error :messages="$errors->get('News_Title')" class="mt-2" />
                    </div>

                    <!-- News Content -->
                    <div class="mt-4">
                        <x-tinymce-config />
                        <x-input-label for="News_Content" :value="__('News Content')" />
                        <textarea id="News_Content" name="News_Content" class="block mt-1 w-full" rows="4"
                            required>{{ old('News_Content', $news->News_Content) }}</textarea>
                        <x-input-error :messages="$errors->get('News_Content')" class="mt-2" />
                    </div>

                    <!-- News Image -->
                    <div x-data="{ preview: '{{ asset('storage/' . $news->News_Image) }}' }" class="mt-4">
                        <x-input-label for="News_Image" :value="__('News Image')" />
                        <input type="file" id="News_Image" name="News_Image" class="block mt-1 w-full" accept="image/*"
                            @change="preview = URL.createObjectURL($event.target.files[0])">

                        <!-- Image Preview -->
                        <div x-show="preview" class="mt-4">
                            <p class="text-gray-600">Preview Image:</p>
                            <img :src="preview" alt="Image Preview" class="object-contain rounded-lg border"
                                style="max-width: 100%; height: auto; max-height: 200px;">
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                            Update News
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>