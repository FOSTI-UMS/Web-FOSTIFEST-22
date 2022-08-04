@extends('layouts.main')
@section('container')
<section id="content">
    <div class="nav-top d-flex align-items-center sticky-top">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="hamburger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <p class="nav-title m-0 p-2">
                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M9.92327 11.7759C9.81494 11.7651 9.68494 11.7651 9.56577 11.7759C6.98744 11.6892 4.93994 9.57675 4.93994 6.97675C4.93994 4.32258 7.08494 2.16675 9.74994 2.16675C12.4041 2.16675 14.5599 4.32258 14.5599 6.97675C14.5491 9.57675 12.5016 11.6892 9.92327 11.7759Z"
                        stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M17.7776 4.33325C19.8792 4.33325 21.5692 6.03409 21.5692 8.12492C21.5692 10.1724 19.9442 11.8408 17.9184 11.9166C17.8317 11.9058 17.7342 11.9058 17.6367 11.9166"
                        stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M4.50678 15.7733C1.88511 17.5283 1.88511 20.3883 4.50678 22.1324C7.48594 24.1258 12.3718 24.1258 15.3509 22.1324C17.9726 20.3774 17.9726 17.5174 15.3509 15.7733C12.3826 13.7908 7.49678 13.7908 4.50678 15.7733Z"
                        stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M19.8684 21.6667C20.6484 21.5042 21.3851 21.1901 21.9917 20.7242C23.6817 19.4567 23.6817 17.3659 21.9917 16.0984C21.3959 15.6434 20.6701 15.3401 19.9009 15.1667"
                        stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                Admin
            </p>
        </div>
    </div>
    <div class="main-content d-flex justify-content-center align-items-center">
        <div class="container d-flex flex-column align-items-center justify-content-center position-relative">
            <a href="{{ route('exportExcelMem') }}" class="btn btn-warning text-decoration-none text-white">Cetak</a>
            <table id="example" class="table table-striped w-100 text-center" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama Tim</th>
                        <th>Status</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Instansi</th>
                        <th>KTM UMS</th>
                        <th>Kartu Identitas</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($leader as $ld)
                    <tr>
                        <td>{{ $ld->competition->name }}</td>
                        <td>Ketua</td>
                        <td>{{ $ld->name }}</td>
                        <td>{{ $ld->email }}</td>
                        <td>{{ $ld->agency }}</td>
                        <td>@if ($ld->agency == 'ums')
                            <img src="{{ asset('/storage/'.$ld->ktm) }}" width="100">
                            @else
                            {{ $ld->ktm }}
                            @endif
                        </td>
                        <td> <img src="{{ asset('/storage/'.$ld->idcard) }}" width="100"></td>
                    </tr>
                    @endforeach
                    @foreach ($member1 as $m1)
                    <tr>
                        <td>{{ $m1->competition->name }}</td>
                        <td>Anggota 1</td>
                        <td>{{ $m1->name }}</td>
                        <td>{{ $m1->email }}</td>
                        <td>{{ $m1->agency }}</td>
                        <td>@if ($m1->agency == 'ums')
                            <img src="{{ asset('/storage/'.$m1->ktm) }}" width="100">
                            @else
                            {{ $m1->ktm }}
                            @endif
                        </td>
                        <td> <img src="{{ asset('/storage/'.$m1->idcard) }}" width="100"></td>
                    </tr>
                    @endforeach
                    @foreach ($member2 as $m2)
                    <tr>
                        <td>{{ $m2->competition->name }}</td>
                        <td>Anggota 2</td>
                        <td>{{ $m2->name }}</td>
                        <td>{{ $m2->email }}</td>
                        <td>{{ $m2->agency }}</td>
                        <td>@if ($m2->agency == 'ums')
                            <img src="{{ asset('/storage/'.$m2->ktm) }}" width="100">
                            @else
                            {{ $m2->ktm }}
                            @endif
                        </td>
                        <td> <img src="{{ asset('/storage/'.$m2->idcard) }}" width="100"></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="nav-bot p-2 d-flex justify-content-center align-items-center">
        <div class="container text-center">
            <p class="nav-title m-0 p-2">Copyright &copy; FOSTIFEST 2.0</p>
        </div>
    </div>
</section>
@endsection