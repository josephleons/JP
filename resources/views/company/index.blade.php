@extends('layouts.admin')

@section('content')
  <div class="container-flex justify-content-center">
    <div class="row">
      <div class="col-md-12 col-md-offset-2">
          <ul class="nav nav-tabs justify-content-left" id="myTab" role="tablist" style="text-transform: capitalize">
              <li class="nav-item">
                  <a class="nav-link active " id="home-tab" href="{{url('#')}}" role="tab" aria-controls="home" aria-selected="true">Company</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" id="contact-tab"  href="{{url('/form')}}" role="tab" aria-controls="regi" aria-selected="true">Registered</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" id="contact-tab" href="{{url('users.index')}}" role="tab" aria-controls="contact" aria-selected="false">user</a>
              </li>
             </ul>
            
       </div>
  </div>
  <div class="row ml-3">
    <div class="col-lg-12 col-sm-6 col-xm-12 ">
          <div class="table-responsive">
            <table class="table table-borderless">
              <thead class="table-light">
                <tr class="text-dark" style="text-transform: capitalize;font-size:14px;">
                <th>ID</th>
                <th>Name of Company</th>
                <th>Logo</th>
                <th>Location</th>
                <th>Email</th>
                <th>Description</th>
                <th>Actions</th>
                <th>UserID</th>
              </tr>
            </thead>
            <tbody>
              {{-- @if(count($company)> 0)
                  @foreach($company as $comp)
                  <tr>
                     <td>{{$comp->id}}</td>
                     <td>{{$comp->company_name}}</td>
                     <td>{{$comp->hasImage}}</td>
                     <td>{{$comp->location}}</td>
                     <td>{{$comp->email}}</td>
                     <td>{{$comp->description}}</td>
                     <td><span class="badge badge-success">{{$comp->user_id}}</span></td>
                         <td>
                    <span>
                    <a onclick="return confirm('Are you sure you wnat to delete this entry?')" 
                    href="{{url('delete/'.$user->id)}}"><em class="bi bi-trash" style="color:#F56565;font-size:22px;"></em>
                    </a>
                     </span>
                     </td>
                  </tr>
               @endforeach
              @else
                <p>no user found</p>
              @endif --}}
            </tbody>
          </table>
        </div>
      </div>
</div>
</div>


@endsection