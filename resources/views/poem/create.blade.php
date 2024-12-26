<x-app-layout>
    <div class="poem-container single-poem">
        <h1>Create new poem</h1>
        <form action="{{ route('poem.store') }}" method="POST" class="poem">
            @csrf
            <textarea name="author" rows="1" class="poem-body" placeholder="Enter your author here"></textarea>
            <textarea name="title" rows="2" class="poem-body" placeholder="Enter your title here"></textarea>
            <textarea name="text" rows="10" class="poem-body" placeholder="Enter your poem here"></textarea>
            <textarea name="resources" rows="2" class="poem-body" placeholder="Enter your resources here"></textarea>
            <div class="poem-buttons">
                <a href="{{ route('poem.index') }}" class="poem-cancel-button">Cancel</a>
                <button class="poem-submit-button">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>