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
            <form action="{{url('editfood/'.$fooddata->id)}}" method="POST" enctype="multipart/form-data"
                class="p-4 bg-dark rounded-3 text-white shadow-lg  row w-100">

                @csrf <!-- Laravel security token -->

                <h3 class="text-center mb-4">Food Update Form</h3>

                <!-- Title -->
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" value="{{$fooddata->title}}" name="title" required>
                </div>

                <!-- Price -->
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" id="price" value="{{$fooddata->price}}" name="price" required>
                </div>

                <!-- Image Upload -->
                <div class="mb-3">
                    <label for="image" class="form-label">New Image</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                </div>

                 <!-- Image Old -->
                 <div class="mb-3">
                    <label for="image" class="form-label">Old Image</label>
                    <img src="{{ asset('uploads/'.$fooddata->image) }}" alt="Food Image" class="d-block mx-auto img-fluid" style="max-width: 200px;">
                    </div>

                <!-- Description -->
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="4" required>{{$fooddata->description}}</textarea>
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
