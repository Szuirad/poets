<x-app-layout>
<div class="poem-container single-poem">
        <h1 class="text-3xl py-4">Edit your poem</h1>
        <form action="{{ route('poem.update', $poem) }}" method="POST" class="poem">
            @csrf
            @method('PUT')
            <textarea name="author" rows="1" class="poem-body" placeholder="Enter your author here">{{ $poem->author }}</textarea>
            <textarea name="title" rows="1" class="poem-body" placeholder="Enter your title here">{{ $poem->title }}</textarea>
            <textarea name="text" rows="10" class="poem-body" placeholder="Enter your text here">{{ $poem->text }}</textarea>
            <textarea name="resources" rows="1" class="poem-body" placeholder="Enter your resources here">{{ $poem->resources }}</textarea>

            <div class="poem-buttons">
                <a href="{{ route('poem.index') }}" class="poem-cancel-button">Cancel</a>
                <button class="poem-submit-button">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>