<x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.admincss')
  </head>
  <body>
   <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
       @include('admin.navbar')
       <h1>User Here</h1>
    </div>
    <!-- container-scroller -->
     @include('admin.adminscript')
  </body>
</html>
</x-app-layout>
