<x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.admincss')
  </head>
  <body>
   <div class="container-scroller">
       @include('admin.navbar')
       <div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
        <form action="{{ url('/foodUpload') }}" method="POST" enctype="multipart/form-data" class="p-4 border rounded shadow-lg bg-dark text-white">
            @csrf
                <h4 class="text-center mb-4">Foodie's Delight</h4>
                <!-- Title -->
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text"  class="form-control rounded-3 border-0 bg-secondary text-white" id="title" name="title" required>
                </div>

                <!-- Price -->
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control rounded-3 border-0 bg-secondary text-white" id="price" name="price" required>
                </div>

                <!-- Image -->
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control rounded-3 border-0 bg-secondary text-white" id="image" name="image" accept="image/*" required>
                </div>

                <!-- Description -->
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control rounded-3 border-0 bg-secondary text-white" id="description" name="description" rows="4" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary w-100 fw-bold py-2 rounded-3 shadow-lg"> Submit</button>
            </form>
        </div>
    </div>
</div>

    </div>
    <!-- container-scroller -->
     @include('admin.adminscript')
  </body>
</html>
</x-app-layout>
