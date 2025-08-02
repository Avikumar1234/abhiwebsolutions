{{-- <x-app-layout> --}}
    <div class="py-8 max-w-3xl mx-auto">
        <h2 class="text-3xl font-bold text-blue-700 mb-6 text-center">Edit Service</h2>

        <form method="POST" action="{{ route('admin.services.update', $service->id) }}" enctype="multipart/form-data"
              class="bg-white p-6 rounded shadow border border-gray-200">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block font-bold mb-1 text-gray-700">Title</label>
                <input type="text" name="title" value="{{ $service->title }}" class="w-full border p-2 rounded" required>
            </div>

            <div class="mb-4">
                <label class="block font-bold mb-1 text-gray-700">Description</label>
                <textarea name="description" class="w-full border p-2 rounded" rows="4" required>{{ $service->description }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block font-bold mb-1 text-gray-700">Image</label>
                <input type="file" name="image" class="w-full border p-2 rounded">
                @if($service->image)
                    <img src="{{ asset('storage/' . $service->image) }}" class="mt-2 h-32 rounded">
                @endif
            </div>

            <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700">
                💾 Update Service
            </button>
        </form>
    </div>
{{-- </x-app-layout> --}}
