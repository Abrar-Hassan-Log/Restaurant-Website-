<x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include('admin.admincss')
  </head>
  <body>
      <!-- partial:partials/_sidebar.html -->
      <div class="container-scroller ">

       @include('admin.navbar')
       <div class="container vh-50 d-flex justify-content-center align-items-center">
    <div class="row w-100">
        <div class="col-md-8 col-lg-6 mx-auto">
        <form action="{{url('updateChefsdata',$chefupdate->id)}}" method="POST" enctype="multipart/form-data"
      class="p-4 bg-dark rounded-3 text-white shadow-lg row w-100">
    
    @csrf <!-- Laravel security token -->

    <h3 class="text-center mb-4">Food Update Form</h3>

    <!-- Name -->
    <div class="mb-3">
        <label for="name" class="form-label">Chef Name</label>
        <input type="text" class="form-control" id="name" value="{{$chefupdate->name}}" name="name" required>
    </div>

    <!-- Speciality -->
    <div class="mb-3">
        <label for="speciality" class="form-label">Speciality</label>
        <input type="text" class="form-control" id="speciality" value="{{$chefupdate->speciality}}" name="speciality" required>
    </div>

    <!-- Old Image -->
    <div class="mb-3">
        <label for="old_image" class="form-label">Old Image</label>
        <br>
        <img src="{{asset('chefsimages/'.$chefupdate->image)}}" alt="Food Image" class="d-block mx-auto img-fluid" style="max-width: 200px;">
    </div>

    <!-- New Image -->
    <div class="mb-3">
        <label for="image" class="form-label">New Image</label>
        <input type="file" class="form-control" id="image" name="image" accept="image/*">
    </div>

    <!-- Submit Button -->
    <div class="text-center"> 
        <button type="submit" class="btn btn-primary px-4 py-2">
            Submit
        </button>
    </div>
</form>
        </div>
    </div>
</div>

</div>
    <!-- container-scroller -->
     @include('admin.adminscript')
</html>
</x-app-layout>
