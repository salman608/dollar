@extends('layouts.admin_layout')

@section('admin_content')


<div class="row">
    

    <div class="col-lg-10">
        <div class="card-box">
            <div class="card-block">
                <h5 class="text-bold card-title">Bordered Table</h5>
                <table class="table table-bordered">
                    <thead >
                        <tr >
                            <th class="text-center">Id</th>
                            <th class="text-center">Currency Name</th>
                            <th class="text-center">Currency Rate</th>
                            <th class="text-center">Currency Limit</th>
                            <th class="text-center">Currency Fee</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">

                        @php
                            $id=0;
                        @endphp
                        @foreach ($currencies as $currency)
                            <?php $id++; ?>
                            <tr>
                                <td>{{$id}}</td>
                                <td>{{ $currency->name }}</td>
                                <td>{{ $currency->rate }}</td>
                                <td>{{ $currency->limit }}</td>
                                <td>{{ $currency->fee }}</td>
                                <td><a href="{{ route('currency.edit',['id' =>$currency->id]) }}" class="btn btn-warning"><i class="fa fa-edit">  Edit</i></a></td>
                                
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection