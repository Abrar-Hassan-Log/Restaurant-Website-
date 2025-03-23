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
       <h3>Order Records</h3>
           <div class="content-wrapper">
               <!-- 📊 Table Section -->
               <div class="table-container">
                   <table id="myTable" class="table table-dark table-striped">
                       <thead>
                           <tr>
                               <th>ID</th>
                               <th>Food Name</th>
                               <th>Price</th>
                               <th>Quantity</th>
                               <th>Name</th>
                               <th>Phone No</th>
                               <th>Address</th>
                               <th>Total Amount</th>
                           </tr>
                       </thead>
                       <tbody>
                        @foreach($orders as $order)
                           <tr>
                            <td>{{$order->id}}</td>
                            <td>{{$order->foodname}}</td>
                            <td>Rs:{{$order->price}}</td>
                            <td>{{$order->quantity}}</td>
                            <td>{{$order->name}}</td>
                            <td>{{$order->phone}}</td>
                            <td>{{$order->address}}</td>
                            <td>Rs:{{$order->price*$order->quantity}}</td>
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
