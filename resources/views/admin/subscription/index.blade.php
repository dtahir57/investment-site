@extends('layouts.admin_app')

@section('title', 'Manage Subscriptions')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-md-6">
        <h1>Subscription</h1>
      </div>
      
      <div class="col-md-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
          <li class="breadcrumb-item active">Subscriptions</li>
        </ol>
      </div>
    
  </div><!-- /.container-fluid -->
</section>
<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">List Of All Available Pacakages</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Package Name</th>
              <th>User</th>
              <th>Start Date</th>
              <th>End Date</th>
              <th>Remaining Time</th>
              <th>Active</th>
            </tr>
            </thead>
            <tbody>
              @foreach($subscriptions as $subscription)
              <tr>
                <td>{{ $subscription->package_name }}</td>
                <?php $user = App\User::find($subscription->user_id);
                ?>
                <td>{{ $user->name }}</td>
                <td>{{ $subscription->start_date }}</td>
                <td>{{ $subscription->end_date }}</td>
                <td>{{ $subscription->remaining_time }}</td>
                  @if($subscription->is_active)
                  <span class="badge badge-success">Yes</span>
                  @else 
                  <span class="badge badge-danger">Nope</span>
                  @endif
                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <th>Package Name</th>
              <th>User</th>
              <th>Start Date</th>
              <th>End Date</th>
              <th>Active</th>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
@endsection