<div class="container">
    <h2>Customers</h2>
    <ul class="responsive-table">
      <li class="table-header">
        <div class="col col-1">First Name</div>
        <div class="col col-2">Last Name</div>
        <div class="col col-3">Email</div>
        <div class="col col-4">Telephone</div>
      </li>
      @foreach ($users as $user )
      <li class="table-row">
        <div class="col col-1" data-label="Job Id">{{$user->firstname}}</div>
        <div class="col col-2" data-label="Customer Name">{{$user->lastname}}</div>
        <div class="col col-3" data-label="Amount">{{$user->email}}</div>
        <div class="col col-4" data-label="Payment Status">{{$user->contact}}</div>
      </li>
      @endforeach
      
      
    </ul>
  </div>