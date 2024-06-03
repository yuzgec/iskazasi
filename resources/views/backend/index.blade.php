@extends('backend.layout.app')
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <p class="mb-3">Kullanılan Alan <strong>276MB </strong>of 8 GB</p>
                <div class="progress progress-separated mb-3">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 44%"></div>
                    <div class="progress-bar bg-info" role="progressbar" style="width: 19%"></div>
                    <div class="progress-bar bg-success" role="progressbar" style="width: 9%"></div>
                </div>
                <div class="row">
                    <div class="col-auto d-flex align-items-center pe-2">
                        <span class="legend me-2 bg-primary"></span>
                        <span>Regular</span>
                        <span class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-muted">915MB</span>
                    </div>
                    <div class="col-auto d-flex align-items-center px-2">
                        <span class="legend me-2 bg-info"></span>
                        <span>System</span>
                        <span class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-muted">415MB</span>
                    </div>
                    <div class="col-auto d-flex align-items-center px-2">
                        <span class="legend me-2 bg-success"></span>
                        <span>Shared</span>
                        <span class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-muted">201MB</span>
                    </div>
                    <div class="col-auto d-flex align-items-center ps-2">
                        <span class="legend me-2"></span>
                        <span>Free</span>
                        <span class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-muted">612MB</span>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="col-12 col-md-12 mt-3">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Form</h3>
            </div>
            <table class="table card-table table-vcenter table-responsive">
                <thead>
                <tr>
                    <th>Adı</th>
                    <th>Telefon</th>
                    <th>Email</th>
                    <th>Konu</th>
                    <th>Tarih</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($form as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->subject }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>Oku</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="col-12 col-md-12 mt-3">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">İş Kazası Tazminat Hesaplama</h3>
            </div>
            <table class="table card-table table-vcenter table-responsive">
                <thead>
                <tr>
                    <th>Adı</th>
                    <th>Telefon</th>
                    <th>Şehir</th>
                    <th>Sakatlık</th>
                    <th>Kusur Oranı</th>
                    <th>Maaş</th>

                    <th>Tarih</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($calc as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->city }}</td>
                        <td>{{ $item->disability }}</td>
                        <td>{{ $item->fault_rate }}</td>
                        <td>{{ $item->income }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>Oku</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    

@endsection

