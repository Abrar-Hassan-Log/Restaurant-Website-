<x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.admincss')
  </head>
  <body>
  <style>
    .dataTables_wrapper {
        margin-top: 20px;
    }
    table {
        background: #1e1e1e;
        color: white;
        border-radius: 10px;
        overflow: hidden;
        width: 100%; /* Table ki width ko adjust kiya */
    }
    table th {
        background: #333;
        color: white;
    }
    .form-control, .dataTables_length select {
        background: #222;
        color: white;
        border: 1px solid #555;
    }
    .form-control:focus, .dataTables_length select:focus {
        background: #333;
        color: white;
    }
    .dataTables_filter {
        text-align: right !important;
    }
    .dataTables_length {
        float: left !important;
    }
    .dataTables_filter input {
        background: #222 !important;
        color: white !important; 
        border: 1px solid #555;
        padding: 5px;
    }
    .dataTables_filter input::placeholder {
        color: #bbb; 
    }
    /* ✅ Form aur Table ko adjust karne ke liye flexbox use kiya */
    .content-wrapper {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: flex-start;
        gap: 20px;
    }
    .form-container {
        flex: 1;
        max-width: 400px;
    }
    .table-container {
        flex: 2;
    }
    .content-wrapper {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: flex-start;
    gap: 20px;
    background: transparent !important; /* Black background ko remove karne ke liye */
}
  </style>

   <div class="container-scroller">
       @include('admin.navbar')

       <div class="container mt-4">
           <div class="content-wrapper">
               <!-- 📝 Form Section -->
              <!-- 📝 Form Section -->
<div class="form-container" style="border: 2px solid white; padding: 20px; border-radius: 10px;">
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

               <!-- 📊 Table Section -->
               <!-- 📊 Table Section -->
<div class="table-container" style="border: 2px solid white; padding: 10px; border-radius: 10px; ">
    <table id="myTable" class="table table-dark table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Price</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($chefs as $chefsdata)
            <tr>
                <td>{{$chefsdata->id}}</td>
                <td>{{$chefsdata->name}}</td>
                <td>{{$chefsdata->speciality}}</td>
                <td><img src="{{asset('chefsimages/'.$chefsdata->image)}}" alt=""></td>
                <td>
                    <a href="{{url('updateChefs',$chefsdata->id)}}" class="btn btn-primary btn-sm me-2">Update</a>
                    <a href="{{url('deletechefs',$chefsdata->id)}}" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
           </div>
       </div>

   </div>
   @include('admin.adminscript')
  </body>
</html>
</x-app-layout>
