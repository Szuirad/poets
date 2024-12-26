<x-app-layout>
    <div class="poem-container py-12">
        <!--<a href="/poem/create" class="new-poem-btn">-->
        <a href="{{ route('poem.create')}}" class="new-poem-btn">
            New poem
        </a>
        <div class="poems">
            @foreach ($poems as $poem)
                <div class="poem">
                    <div class="poem body">
              <!--      {!!nl2br($poem->text)!!} -->
                        <b>{{$poem->author}}</b></br>
                        <b>{{$poem->title}}</b></br></br>

                  {!!nl2br (Str::words($poem->text, 30))!!} 
                    </div>
                    <div class="poem-buttons">
                        <a href="{{ route('poem.show', $poem)}}" class="poem-edit-button">View</a>
                        <a href="{{ route('poem.edit', $poem)}}" class="poem-edit-button">Edit</a>
                        <form action="{{ route('poem.destroy', $poem) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="poem-delete-button">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="p-6">
            {{ $poems->links() }}
        </div>
    </div>

</x-app-lauout>
