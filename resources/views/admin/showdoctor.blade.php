<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
  </head>
  <body>
   <div class="container-scroller">
      @include('admin.sidebar')
      @include('admin.navbar')
      <div class="container-fluid page-body-wrapper">
      <div align="center" style="padding-top: 100px;">
            <table>
                <tr>
                    <th style="padding: 10px;" >Dr Name</th>
                    <th style="padding: 10px;">Phone</th>
                    <th style="padding: 10px;">Speciality</th>
                    <th style="padding: 10px;">Room No</th>
                    <th style="padding: 10px;">Image</th>
                    <th style="padding: 10px;">Delete</th>
                    <th style="padding: 10px;">Update</th>
                </tr>  
                @foreach ($data as $doctor )
                <tr align="center">
                    <td style="padding: 10px;">{{$doctor->name}}</td>
                    <td style="padding: 10px;">{{$doctor->phone}}</td>
                    <td style="padding: 10px;">{{$doctor->speciality}}</td>
                    <td style="padding: 10px;">{{$doctor->room}}</td>
                    <td style="padding: 10px;">
                        <img height="50px" width="50px" src="doctorimage/{{$doctor->image}}" alt="">
                    </td>
                    <td>
                        <a onclick="return confirm('Sure ?')" class="btn btn-danger" href="{{url('delete_doctor', $doctor->id)}}">Delete</a>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{url('update_doctor',$doctor->id)}}">Update</a>
                    </td>
                </tr>
                @endforeach     
            </table>
        </div>
      </div>
   </div>
   @include('admin.script')
  </body>
</html>