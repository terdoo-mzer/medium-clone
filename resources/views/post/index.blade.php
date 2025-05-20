<x-app-layout>
    <div class="py-4">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <!-- Categories --->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900">
                    <x-category-tab>
                        No Categories found <!--This is slotted. Fallback for when there is no category -->
                    </x-category-tab>
                </div>
            </div>

            <!-- Posts -->
            <div class="mt-8 text-gray-900">
                @forelse ($posts as $post )
                    <x-post-item :post="$post"></x-post-item>
                    @empty
                    <div>
                        <p class="text-gray-900 text-center">No posts found</p>
                    </div>
                @endforelse
            </div>

            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>