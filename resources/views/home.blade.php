@extends('layouts.app')

@section('content')

<div class="main">
    <div class="table-responsive">
        <div class="container" id="container-home">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="title" align="center">Patients Registry</h3>
                     @include('flash::message')
                    <table id="example" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Last Name</th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th style="text-align: center;">Impression</th>
                                <th style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($retrieves as $info)
                            <tr>
                                <td>{{ $info->id }}</td>
                                <td>{{ $info->lastname }}</td>
                                <td>{{ $info->firstname }}</td>
                                <td>{{ $info->middlename }}</td> 
                                <td align="center">{{ $info->assessments->last()['assessment'] }}</td> 
                                <td align="center"><a href="/update/{{ $info->id }}" class="btn btn-default btn-sm">Update</a><a href="/proceed/{{ $info->id }}" class="btn btn-default btn-sm">Proceed</a></td>   
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br>
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
        });
    } );
</script>
<script>
$('div.alert').not('.alert-important').delay(5000).fadeOut(350);
</script>
@endsection

