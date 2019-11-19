@extends('layouts.admin_app')

@section('title', 'Packages')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-md-12">
            <a href="{{route('package.create')}}" role="button" class="btn btn-success float-right">Create Package</a>
        </div>
          <div class="col-md-6">
            <h1>Pcakages</h1>
          </div>
          
          <div class="col-md-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Packages</li>
            </ol>
          </div>
        
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
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
                  <th>Price</th>
                  <th>Renewal Time</th>
                  <th>Package Type</th>
                  <th>Net Profit</th>
                  <th>Wait Time</th>
                  <th>Refferal Bonus</th>
                  <th>Signals</th>
                  <th>Min. Investment</th>
                  <th>Max. Investment</th>
                  <th>Training Sessions</th>
                  <th>Trading Material</th>
                  <th>Support</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($packages as $package)
                  <tr>
                    <td>{{ $package->package_name }}</td>
                    <td>
                      @if($package->price)
                        {{ $package->price }}
                      @else
                        <span class="badge badge-danger">N/A</span>
                      @endif
                    </td>
                    <td>
                      @if($package->renewal_time)
                      {{ $package->renewal_time }}
                      @else 
                      <span class="badge badge-danger">N/A</span>
                      @endif
                    </td>
                    <td>{{ $package->package_type }}</td>
                    <td>
                      @if($package->net_profit)
                      {{ $package->net_profit }}
                      @else
                      <span class="badge badge-danger">N/A</span>
                      @endif
                    </td>
                    <td>
                      @if($package->wait_time)
                      {{ $package->wait_time }}
                      @else 
                      <span class="badge badge-danger">N/A</span>
                      @endif
                    </td>
                    <td>
                      @if($package->referral_bonus)
                      {{ $package->referral_bonus }}
                      @else 
                      <span class="badge badge-danger">N/A</span>
                      @endif 
                    </td>
                    <td>
                      @if($package->signals)
                      {{ $package->signals }}
                      @else 
                      <span class="badge badge-danger">N/A</span>
                      @endif
                    </td>
                    <td>
                      @if($package->min_investment)
                      {{ $package->min_investment }}
                      @else
                      <span class="badge badge-danger">N/A</span>
                      @endif
                    </td>
                    <td>
                      @if($package->max_investment)
                      {{ $package->max_investment }}
                      @else 
                      <span class="badge badge-danger">N/A</span>
                      @endif
                    </td>
                    <td>
                      @if($package->training_sesssions)
                      {{ $package->training_sesssions }}
                      @else 
                      <span class="badge badge-danger">N/A</span>
                      @endif
                    </td>
                    <td>
                      @if($package->trading_material)
                      {{ $package->trading_material }}
                      @else 
                      <span class="badge badge-danger">N/A</span>
                      @endif
                    </td>
                    <td>
                      @if($package->has_support)
                      {{ $package->has_support }}
                      @else 
                      <span class="badge badge-danger">N/A</span>
                      @endif
                    </td>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  <th>Package Name</th>
                  <th>Price</th>
                  <th>Renewal Time</th>
                  <th>Package Type</th>
                  <th>Net Profit</th>
                  <th>Wait Time</th>
                  <th>Refferal Bonus</th>
                  <th>Signals</th>
                  <th>Min. Investment</th>
                  <th>Max. Investment</th>
                  <th>Training Sessions</th>
                  <th>Trading Material</th>
                  <th>Support</th>
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

</body>
</html>
@endsection