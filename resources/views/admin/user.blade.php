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
    </style>
   <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
       @include('admin.navbar')

       <div class="container">
        <h2 class="text-center">Employee Data</h2>

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
                @foreach($userData as $user)
                  <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    @if($user->usertype == "1")
                      <td><a href="" class="btn btn-danger btn-sm disabled">Delete</a></td>
                    @else
                      <td><a href="{{url('user',$user->id)}}" class="btn btn-danger btn-sm">Delete</a></td>
                    @endif
                  </tr>

                @endforeach
            </tbody>
        </table>
    </div>

    </div>
    <!-- container-scroller -->
     @include('admin.adminscript')
  </body>
</html>
</x-app-layout>
