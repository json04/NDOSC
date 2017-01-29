@extends('layouts.app')
@include('flash::message')

@section('content')
<div class="main">
    <div class="table-responsive">
        <div class="container">
           <div class="row">
               <div class="col-md-12">
                   <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Last Name</th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th style="text-align: center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($query as $data)
                            <tr style="color:black;">
                                <td>{{ $data->date }}</td>
                                <td>{{ $data->patients->lastname }}</td>
                                <td>{{ $data->patients->firstname }}</td>
                                <td>{{ $data->patients->middlename }}</td>
                                <td align="center">
                                    <a href="/print/{{ $data->id }}" class="btn btn-default btn-sm">Request</a>
                                    <a href="/admissionView/{{ $data->id }}" class="btn btn-default btn-sm">Admission</a>
                                    <a href="/referralview/{{ $data->id }}" class="btn btn-default btn-sm">Referral</a>
                                    <a href="/medcertview/" class="btn btn-default btn-sm">Medical Certificate</a>
                                    <a href="/patientupdate/{{ $data->id }}" class="btn btn-default btn-sm">Update</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>    
                    </table>    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable( {
            columnDefs: [
                {
                    targets: [ 0, 1, 2 ],
                    className: 'table-striped table-bordered'
                }
            ]
        } );
    } );
</script>
@endsection