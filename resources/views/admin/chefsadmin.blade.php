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
        <form action="{{ url('/chefsUpload') }}" method="POST" enctype="multipart/form-data">
        @csrf

    <h3 class="text-center mb-4">Chefs Information</h3>

    <!-- Name -->
    <div class="mb-3">
        <label for="name" class="form-label">Chef Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter chef's name" required>
    </div>

    <!-- Speciality -->
    <div class="mb-3">
        <label for="speciality" class="form-label">Speciality</label>
        <input type="text" class="form-control" id="speciality" name="speciality" placeholder="Enter speciality" required>
    </div>

    <!-- Image Upload -->
    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
    </div>

    <!-- Submit Button -->
    <div class="text-center"> 
        <button type="submit" class="btn btn-primary px-4 py-2">
            Save Chef
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
