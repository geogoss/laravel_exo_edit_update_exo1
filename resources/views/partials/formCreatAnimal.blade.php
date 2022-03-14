<section class="w-50 mx-auto mb-5">
    <div class="bg-primary py-5">
        <h1 class="text-center text-white">Créer un animal</h1>
       
        <form class="w-75 mx-auto" action="/animal/store" method="POST">
            @csrf
            <div class="mb-3">
              <label for="addSmallerInputName" class="form-label">Name</label>
              <input name="name" type="text" class="form-control" id="addSmallerInputName"
                  aria-describedby="addSmallerInputNameHelp">
          </div>
            <div class="mb-3">
              <label for="addSmallerInputName" class="form-label">Type</label>
              <input name="type" type="text" class="form-control" id="addSmallerInputName"
                  aria-describedby="addSmallerInputNameHelp">
          </div>
          <div class="mb-3">
              <label for="addTreeInputLatin" class="form-label">coulor</label>
              <input name="color" type="text" class="form-control" id="addTreeInputLatin"
                  aria-describedby="addTreeInputLatinHelp">
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</section>
<section class="mb-5">
  <div class="w-75 mx-auto">
    <table class="table table-striped table-danger">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Type</th>
            <th scope="col">Color</th>
            <th scope="col">Action</th>
          </tr>
        </thead>


        <tbody>
          @foreach ($animals as $item)
          <tr>
            <th scope="row">{{$item->id}} </th>
            <td>{{$item->name}} </td>
            <td>{{$item->type}} </td>
            <td>{{$item->color}} </td>
            <td>
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
        
            </td>
          </tr>
              
          @endforeach
        </tbody>
      </table>
</div>

</section>