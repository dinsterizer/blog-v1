<x-layouts.primary>

    <div class="bg-white overflow-hidden">
        <div class="relative max-w-7xl mx-auto pb-16 pt-24 px-4 sm:px-6 lg:px-8">
            <div class="hidden lg:block bg-gray-50 absolute top-0 bottom-0 left-3/4 w-screen"></div>
            <div class="mx-auto text-base max-w-prose lg:grid lg:grid-cols-2 lg:gap-8 lg:max-w-none">
                <div>
                    <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">
                        {{ $post->tags->pluck('name')->join(', ') }} </h2>
                    <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                        {{ $post->title }} </h3>
                </div>
            </div>
            <div class="mt-8 lg:grid lg:grid-cols-2 lg:gap-8">
                <div class="relative lg:row-start-1 lg:col-start-2">
                    <svg class="hidden lg:block absolute top-0 right-0 -mt-20 -mr-20" width="404" height="384"
                        fill="none" viewBox="0 0 404 384" aria-hidden="true">
                        <defs>
                            <pattern id="de316486-4a29-4312-bdfc-fbce2132a2c1" x="0" y="0" width="20" height="20"
                                patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                            </pattern>
                        </defs>
                        <rect width="404" height="384" fill="url(#de316486-4a29-4312-bdfc-fbce2132a2c1)" />
                    </svg>
                    <div class="relative text-base mx-auto max-w-prose lg:max-w-none">
                        <figure>
                            <div class="aspect-w-12 aspect-h-7 lg:aspect-none">
                                <img class="rounded-lg shadow-lg object-cover object-center"
                                    src="{{ Storage::url($post->representative_image_path) }}"
                                    alt="Whitney leaning against a railing on a downtown street" width="1184"
                                    height="1376">
                            </div>
                            <figcaption class="mt-3 flex text-sm text-gray-500">
                                <x-icons.camera class="flex-none w-5 h-5 text-gray-400" />
                                <span class="ml-2">Ảnh đăng bởi {{ $post->creator->name }}</span>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="mt-8 lg:mt-0">
                    <div class="text-base max-w-prose mx-auto lg:max-w-none">
                        <p class="text-lg text-gray-500">{{ $post->description }}</p>
                    </div>
                    <x-markdown
                        class="mt-5 prose prose-indigo text-gray-500 mx-auto lg:max-w-none lg:row-start-1 lg:col-start-1">
                        {{ $post->content }}
                    </x-markdown>
                </div>
            </div>
        </div>
    </div>

</x-layouts.primary>
