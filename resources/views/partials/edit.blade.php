<section class="w-50 mx-auto mb-5">
    <div class="bg-primary py-5">
        <h1 class="text-center text-white">Créer un animal</h1>
       
        <form class="w-75 mx-auto" action="/update/{{$edit->id}} " method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="addSmallerInputName" class="form-label">Name</label>
              <input name="name" type="text" value="{{$edit->name}} " class="form-control" id="addSmallerInputName"
                  aria-describedby="addSmallerInputNameHelp">
          </div>
            <div class="mb-3">
              <label for="addSmallerInputName" class="form-label">Type</label>
              <input name="type" type="text" value="{{$edit->type}} " class="form-control" id="addSmallerInputName"
                  aria-describedby="addSmallerInputNameHelp">
          </div>
          <div class="mb-3">
              <label for="addTreeInputLatin" class="form-label">coulor</label>
              <input name="color" type="text" value="{{$edit->color}} " class="form-control" id="addTreeInputLatin"
                  aria-describedby="addTreeInputLatinHelp">
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</section>
