<x-app-layout>
    <div class="poem-container single-note">
            <div class="poem-header">
                <h1 class="text-3xl py-4">Author: {{ $poem->author }}</h1></br>
                <h1 class="text-3xl py-4">Title: {{ $poem->title }}</h1></br>
                <div class="poem-buttons">
                    <a href="{{ route('poem.edit', $poem) }}" class="poem-edit-button">Edit</a>
                    <form action="{{ route('poem.destroy', $poem) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="poem-delete-button">Delete</button>
                    </form>
                </div>
            </div>
            <div class="poem">
                <div class="poem-body-show">
                    {!!nl2br($poem->text)!!}
                </div>
            </br>
            Resources:  {!!nl2br($poem->resources)!!}
            </div>
        </div>
    </x-app-layout>
