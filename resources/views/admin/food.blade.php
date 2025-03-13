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
    background: transparent !important; /* 👈 Black background ko remove karne ke liye */
}
  </style>

   <div class="container-scroller">
       @include('admin.navbar')

       <div class="container mt-4">
           <div class="content-wrapper">
               <!-- 📝 Form Section -->
               <div class="form-container">
                   <form action="{{ url('/foodUpload') }}" method="POST" enctype="multipart/form-data" class="p-4 border rounded shadow-lg bg-dark text-white">
                       @csrf
                       <h4 class="text-center mb-4">Foodie's Delight</h4>
                       
                       <!-- Title -->
                       <div class="mb-3">
                           <label for="title" class="form-label">Title</label>
                           <input type="text" class="form-control rounded-3 border-0 bg-secondary text-white" id="title" name="title" required>
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

                       <button type="submit" class="btn btn-primary w-100 fw-bold py-2 rounded-3 shadow-lg">Submit</button>
                   </form>
               </div>

               <!-- 📊 Table Section -->
               <div class="table-container">
                   <table id="myTable" class="table table-dark table-striped">
                       <thead>
                           <tr>
                               <th>ID</th>
                               <th>Name</th>
                               <th>Email</th>
                               <th>Action</th>
                           </tr>
                       </thead>
                       <tbody>
                         
                           <tr>
                               <td>2</td>
                               <td>Ahmed Raza</td>
                               <td>ahmed.raza@example.com</td>
                               <td><a href="#" class="btn btn-danger btn-sm">Delete</a></td>
                           </tr>
                           <tr>
                               <td>3</td>
                               <td>Sara Sheikh</td>
                               <td>sara.sheikh@example.com</td>
                               <td><a href="#" class="btn btn-danger btn-sm">Delete</a></td>
                           </tr>
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
