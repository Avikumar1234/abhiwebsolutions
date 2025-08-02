{{-- <x-app-layout> --}}
    <div class="py-10 max-w-xl mx-auto">
        <div class="bg-white shadow rounded p-6 text-center">
            <h2 class="text-2xl font-bold text-red-600 mb-4">Are you sure?</h2>
            <p class="text-gray-700 mb-6">You are about to delete <strong>{{ $service->title }}</strong>.</p>

            <form method="POST" action="{{ route('admin.services.destroy', $service->id) }}">
                @csrf
                @method('DELETE')

                <button type="submit" class="bg-red-600 text-white px-6 py-2 rounded hover:bg-red-700">
                    🗑 Yes, Delete
                </button>

                <a href="{{ route('admin.services.index') }}" class="ml-4 text-gray-600 hover:text-blue-600">
                    Cancel
                </a>
            </form>
        </div>
    </div>
{{-- </x-app-layout> --}}
