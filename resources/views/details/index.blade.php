@extends('template.main')

@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="list-group">
        <a href="#" class="list-group-item active">All Owner <span class="badge">{{ $details->count()}}</span></a>

        @foreach($owners as $owner)
          <a href="" class="list-group-item">{{$owner->name}} <span class="badge">4</span></a>
        @endforeach
        {{-- <a href="" class="list-group-item">Friends <span class="badge">3</span></a>
        <a href="" class="list-group-item">Other <span class="badge">3</span></a> --}}
      </div>
    </div><!-- /.col-md-3 -->

    <div class="col-md-9">
      <div class="panel panel-default">
        <table class="table">
          @foreach($details as $detail)
          <tr>
            <td class="middle">
              <div class="media">
                <div class="media-left">
                  <a href="#">
                    <img class="media-object" src="http://placehold.it/100x100" alt="...">
                  </a>
                </div>
                <div class="media-body">
                  <h4 class="media-heading">No Dokumen : {{ $detail->no_dokumen }}</h4>
                  <address>
                    <strong>
                      Jenis Dokumen : {{ $detail->dokumen->name }} <br>
                    </strong><br>
                      Tgl. Dokumen  : {{ $detail->tgl_dokumen }}  || Tgl. Expired  : {{ $detail->tgl_expired }}  <br>
                      Pemilik Dokumen : {{ $detail->owner->name }}
                  </address>
                  Warna Stopmaps :  {{ $detail->stopmap->name }}
                </div>
              </div>
            </td>
            <td width="100" class="middle">
              <div>
                <a href="#" class="btn btn-circle btn-default btn-xs" title="Edit">
                  <i class="glyphicon glyphicon-edit"></i>
                </a>
                <a href="#" class="btn btn-circle btn-danger btn-xs" title="Edit">
                  <i class="glyphicon glyphicon-remove"></i>
                </a>
              </div>
            </td>
          </tr>

        @endforeach()

          {{-- <tr>
            <td class="middle">
              <div class="media">
                <div class="media-left">
                  <a href="#">
                    <img class="media-object" src="http://placehold.it/100x100" alt="...">
                  </a>
                </div>
                <div class="media-body">
                  <h4 class="media-heading">Contact 2</h4>
                  <address>
                    <strong>Job 2</strong><br>
                    contact2@sample.com
                  </address>
                </div>
              </div>
            </td>
            <td width="100" class="middle">
              <div>
                <a href="#" class="btn btn-circle btn-default btn-xs" title="Edit">
                  <i class="glyphicon glyphicon-edit"></i>
                </a>
                <a href="#" class="btn btn-circle btn-danger btn-xs" title="Edit">
                  <i class="glyphicon glyphicon-remove"></i>
                </a>
              </div>
            </td>
          </tr> --}}
        </table>
      </div>

      <div class="text-center">
        {!! $details->links() !!}
        {{-- <nav>
          <ul class="pagination">
            <li>
              <a href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li>
              <a href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav> --}}
      </div>
    </div>
  </div>

@endsection()
