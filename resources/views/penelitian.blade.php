@extends('layout')

@section('content')

    <!-- Daftar Penelitian -->
    <div class="penelitian container" style="margin-top: 50px;" >
        <div class="row">
            <div class="col-12">
                <hr />
                <h3 style="padding:10px">Daftar Penelitian - <span style="color: coral;">Sektor {{ $judul_jenis }}</span> </h3>
            </div>
        </div>
        <div class="row">

            @foreach($penelitian as $row)

            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <a href="{{ route('penelitian.detail', [ 'slug' => $row->link_artikel ] ) }}"><h4>{{ $row->judul }}</h4></a>
                            <small>{{ $row->tahun }}</small>
                        </div>

                        <div>
                        <b>{{ $row->akademisi->nama_peneliti }}</b><br />
                        <small>{{ $row->akademisi->universitas }}</small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


            {{-- <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <h4>Pengembangan Media Pembelajaran Animasi Powtoon pada Mata Pelajaran Matematika di Kelas IV SD</h4>
                            <small>Juni 2019</small>
                        </div>

                        <div>
                        <b>zomi Awalia, Aan S. Pamungkas, Trian P. Alamsyah</b><br />
                        <small>Universitas Sultan Ageng Tirtayasa Banten</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <a href="penelitian_detail.html" target="_blank" class="judul"><h4>Pengembangan Media Pembelajaran Animasi Powtoon pada Mata Pelajaran Matematika di Kelas IV SD</h4></a>
                            <small>Juni 2019</small>
                        </div>

                        <div>
                        <b>zomi Awalia, Aan S. Pamungkas, Trian P. Alamsyah</b><br />
                        <small>Universitas Sultan Ageng Tirtayasa Banten</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <a href="penelitian_detail.html" target="_blank" class="judul"><h4>Pengembangan Media Pembelajaran Animasi Powtoon pada Mata Pelajaran Matematika di Kelas IV SD</h4></a>
                            <small>Juni 2019</small>
                        </div>

                        <div>
                        <b>zomi Awalia, Aan S. Pamungkas, Trian P. Alamsyah</b><br />
                        <small>Universitas Sultan Ageng Tirtayasa Banten</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <a href="penelitian_detail.html" target="_blank" class="judul"><h4>Pengembangan Media Pembelajaran Animasi Powtoon pada Mata Pelajaran Matematika di Kelas IV SD</h4></a>
                            <small>Juni 2019</small>
                        </div>

                        <div>
                        <b>zomi Awalia, Aan S. Pamungkas, Trian P. Alamsyah</b><br />
                        <small>Universitas Sultan Ageng Tirtayasa Banten</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <a href="penelitian_detail.html" target="_blank" class="judul"><h4>Pengembangan Media Pembelajaran Animasi Powtoon pada Mata Pelajaran Matematika di Kelas IV SD</h4></a>
                            <small>Juni 2019</small>
                        </div>

                        <div>
                        <b>zomi Awalia, Aan S. Pamungkas, Trian P. Alamsyah</b><br />
                        <small>Universitas Sultan Ageng Tirtayasa Banten</small>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>

@endsection
