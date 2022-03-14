<section class="row mt-5">
    <div class="card col-3 mx-auto" style="width: 18rem;">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">{{$show->name}} </li>
          <li class="list-group-item">{{$show->type}} </li>
          <li class="list-group-item">{{$show->color}} </li>
        </ul>
      </div>
      <div class="d-flex justify-content-center text-center mx-3 mb-5">
        <form action="/animal/delete/{{ $show->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger mx-2">Supprimer</button>
        </form>
        <button class="btn btn-primary">
            @csrf
            <a class="text-decoration-none text-white" href="/edit/{{ $show->id }} ">Modifier</a>
        </button>

    </div>

</section>