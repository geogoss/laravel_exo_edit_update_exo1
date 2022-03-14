<section class="row m-5">
    @foreach ($animals as $item)
        <div class="col-3 mx-auto">
            <a href="/show/{{ $item->id }} ">
                <div class="card" style="width: 18rem;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $item->name }} </li>
                        <li class="list-group-item">{{ $item->type }} </li>
                        <li class="list-group-item">{{ $item->color }} </li>
                    </ul>
                </div>
            </a>
        </div>
        <div class="d-flex justify-content-center text-center mx-3 mb-5">
          <form action="/animal/delete/{{ $item->id }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger mx-2">Supprimer</button>
          </form>
          <button class="btn btn-primary">
              @csrf
              <a class="text-decoration-none text-white" href="/edit/{{ $item->id }} ">Modifier</a>
          </button>
  
      </div>

    @endforeach

</section>
