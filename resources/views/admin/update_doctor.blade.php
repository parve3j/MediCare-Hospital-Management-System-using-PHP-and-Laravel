<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <style type="text/css" >
        label{
            display: inline-block;
            width: 200px;
        }
    </style>
   @include('admin.css')
  </head>
  <body>
   <div class="container-scroller">
      @include('admin.sidebar')
      @include('admin.navbar')
      <div class="container-fluid page-body-wrapper">
        <div class="container" align="center" style="padding: 100px;" >
            <form action="{{url('edit_doctor', $data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div style="padding: 15px;" >
                    <label for="">Doctor Name</label>
                    <input type="text" name="name" value="{{$data->name}}">
                </div>
                <div style="padding: 15px;">
                    <label for="">Phone</label>
                    <input type="number" name="phone" value="{{$data->phone}}">
                </div>
                <div style="padding: 15px;">
                    <label for="">Speciality</label>
                    <input type="text" name="speciality" value="{{$data->speciality}}">
                </div>
                <div style="padding: 15px;">
                    <label for="">Room</label>
                    <input type="text" name="room" value="{{$data->room}}">
                </div>
                <div style="padding: 15px;">
                    <label for="">Old Image</label>
                    <img height="50px" width="50px" src="doctorimage/{{$data->image}}" alt="">
                </div>
                <div style="padding: 15px;">
                    <label for="">Change Image</label>
                    <input type="file" name="file" >
                </div>
                <div style="padding: 15px;">
                    <input type="submit" class="btn btn-primary" >
                </div>
            </form>
        </div>
      </div>
   </div>
   @include('admin.script')
  </body>
</html>