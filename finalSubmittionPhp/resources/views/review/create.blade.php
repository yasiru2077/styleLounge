<x-app-layout>
    <div class="bg-white rounded-lg shadow-md p-6">
        <h1 class="text-2xl font-semibold mb-6">Contact Us</h1>
        <form action="{{ route('review.store') }}" method="POST">
            @csrf <!-- Add the CSRF token field -->

            <div class="mb-4">
                <label for="score" class="block text-sm font-medium text-gray-700">Score</label>
                <input type="number" name="score" id="score" class="form-input w-full mt-1" min="1" max="5">
            </div>

            <div class="mb-4">
                <label for="review" class="block text-sm font-medium text-gray-700">Review</label>
                <textarea name="review" id="review" class="form-textarea w-full mt-1" rows="4"></textarea>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="px-4 py-2 bg-black text-white rounded">Save</button>
            </div>
        </form>
    </div>
</x-app-layout>
