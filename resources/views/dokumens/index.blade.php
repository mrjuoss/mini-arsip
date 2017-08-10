@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard >> Master Dokumen</div>

                <div class="panel-body">
                    <table class="table">
                      <tr>
                        <th>No</th>
                        <th>Nama Dokumen</td>
                      </tr>

                      @foreach($dokumens as $dokumen)
                      <tr>
                        <td> {{ $dokumen->id }} </td>
                        <td> {{ $dokumen->name }} </td>
                      </tr>
                      @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
