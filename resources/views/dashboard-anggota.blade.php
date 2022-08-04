@extends('layouts.main-competition')
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
                Tim {{ auth()->user()->competition->name }}
            </p>
        </div>
    </div>
    <div class="main-content d-flex justify-content-center align-items-center">
        <div class="container d-flex flex-column-reverse align-items-center justify-content-around position-relative">
            @if ($member1)
            <table id="example" class="table table-striped w-100 text-center" style="width:100%">
                <thead>
                    <tr>
                        <th>Status</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Instansi</th>
                        <th>KTM UMS</th>
                        <th>Kartu Identitas</th>
                        <th>Setting</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td>Anggota 1</td>
                        <td>{{ $member1->name }}</td>
                        <td>{{ $member1->email }}</td>
                        <td>{{ $member1->agency }}</td>
                        <td>@if ($member1->agency == 'ums')
                            @if ($member1->ktm == '-')
                            {{ $member1->ktm }}
                            @else
                            <img src="{{ asset('/storage/'. $member1->ktm) }}" style="width:100px;height:75px;">
                            @endif
                            @else
                            {{ $member1->ktm }}
                            @endif
                        </td>
                        <td><img src="{{ asset('/storage/'. $member1->idcard) }}" style="width:100px;height:75px;">
                        </td>
                        <td><a href="{{ route('showEditMember1', $member1->id) }}"
                                class="btn btn-success text-decoration-none text-white"
                                onclick="return confirm('Are you sure you want to edit this?')">Edit</a></td>
                    </tr>
                    @if ($member2)
                    <tr>
                        <td>Anggota 2</td>
                        <td>{{ $member2->name }}</td>
                        <td>{{ $member2->email }}</td>
                        <td>{{ $member2->agency }}</td>
                        <td>@if ($member2->agency == 'ums')
                            @if ($member2->ktm == '-')
                            {{ $member2->ktm }}
                            @else
                            <img src="{{ asset('/storage/'. $member2->ktm) }}" style="width:100px;height:75px;">
                            @endif
                            @else
                            {{ $member2->ktm }}
                            @endif
                        </td>
                        <td><img src="{{ asset('/storage/'. $member2->idcard) }}" style="width:100px;height:75px;">
                        </td>
                        <td><a href="{{ route('showEditMember2', $member2->id) }}"
                                class="btn btn-success text-decoration-none text-white"
                                onclick="return confirm('Are you sure you want to edit this?')">Edit</a></td>
                    </tr>
                    @endif
                </tbody>
            </table>
            @endif
            @if (!$member2)
            <form action="{{ route('storeMember2') }}" method="POST" class="text-center" enctype="multipart/form-data">
                @csrf
                <p class="form-limit text-center ms-4 fw-bold">Identitas Anggota 2</p>
                <div class="input-form position-relative">
                    <p class="label position-absolute">Nama TIM</p>
                    <input type="text" name="team_name2" id="form-input"
                        class="form-input px-4 bg-secondary bg-opacity-10"
                        value="{{ auth()->user()->competition->name }}" required readonly>
                    <span class="req position-absolute">*</span>
                </div>
                <div class="input-form position-relative">
                    <p class="label position-absolute">Email Anggota 2</p>
                    <input type="email" name="email2" id="form-input" class="form-input px-4" value="" required>
                    <span class="req position-absolute">*</span>
                </div>
                <div class="input-form position-relative">
                    <p class="label position-absolute">Nama Anggota 2</p>
                    <input type="text" name="name2" id="form-input" class="form-input px-4" placeholder="" required>
                    <span class="req position-absolute">*</span>
                </div>
                <div class="input-form position-relative">
                    <p class="label position-absolute">Instansi Anggota 2</p>
                    <select class="form-input px-4" name="agency2" id="agency2" onChange="getValue('2')">
                        <option value="ums">Universitas Muhammadiyah Surakarta</option>
                        <option value="umum">Umum</option>
                    </select>
                    <span class="req position-absolute"><i class="fa-solid fa-angle-down"></i></span>
                </div>
                <div id="from-ums-2" class="">
                    <p class="form-limit text-start ms-4 fw-bold">KTM UMS Anggota 2</p>
                    <div class="input-form-file position-relative d-flex align-items-center">
                        <input type="file" name="ktm2" id="form-input-file" class="custom-file-input" placeholder="">
                        <!-- <span class="req position-absolute">*</span> -->
                    </div>
                </div>
                <p class="form-limit text-start ms-4 fw-bold">Kartu Identitas Anggota 2 (KTP/SIM/Paspor)</p>
                <div class="input-form-file position-relative d-flex align-items-center">
                    <input type="file" name="idcard2" id="form-input-file" class="custom-file-input" placeholder="">
                    <!-- <span class="req position-absolute">*</span> -->
                </div>
                <input type="submit" value="Change" name="submit-anggota-2">
            </form>
            @endif
            @if (!$member1)
            <form action="{{ route('storeMember1') }}" method="POST" class="text-center" enctype="multipart/form-data">
                @csrf
                <p class="form-limit text-center ms-4 fw-bold">Identitas Anggota 1</p>
                <div class="input-form position-relative">
                    <p class="label position-absolute">Nama TIM</p>
                    <input type="text" name="team_name1" id="form-input"
                        class="form-input px-4 bg-secondary bg-opacity-10"
                        value="{{ auth()->user()->competition->name }}" required readonly>
                    <span class="req position-absolute">*</span>
                </div>
                <div class="input-form position-relative">
                    <p class="label position-absolute">Email Anggota 1</p>
                    <input type="email" name="email1" id="form-input" class="form-input px-4" value="" required>
                    <span class="req position-absolute">*</span>
                </div>
                <div class="input-form position-relative">
                    <p class="label position-absolute">Nama Anggota 1</p>
                    <input type="text" name="name1" id="form-input" class="form-input px-4" placeholder="" required>
                    <span class="req position-absolute">*</span>
                </div>
                <div class="input-form position-relative">
                    <p class="label position-absolute">Instansi Anggota 1</p>
                    <select class="form-input px-4" name="agency1" id="agency1" onChange="getValue('1')">
                        <option value="ums">Universitas Muhammadiyah Surakarta</option>
                        <option value="umum">Umum</option>
                    </select>
                    <span class="req position-absolute"><i class="fa-solid fa-angle-down"></i></span>
                </div>
                <div id="from-ums-1" class="">
                    <p class="form-limit text-start ms-4 fw-bold">KTM UMS Anggota 1</p>
                    <div class="input-form-file position-relative d-flex align-items-center">
                        <input type="file" name="ktm1" id="form-input-file" class="custom-file-input" placeholder="">
                        <!-- <span class="req position-absolute">*</span> -->
                    </div>
                </div>
                <p class="form-limit text-start ms-4 fw-bold">Kartu Identitas Anggota 1 (KTP/SIM/Paspor)</p>
                <div class="input-form-file position-relative d-flex align-items-center">
                    <input type="file" name="idcard1" id="form-input-file" class="custom-file-input" placeholder="">
                    <!-- <span class="req position-absolute">*</span> -->
                </div>
                <input type="submit" value="Change" name="submit-anggota-1">
            </form>
            @endif
        </div>
    </div>
    <div class="nav-bot p-2 d-flex justify-content-center align-items-center">
        <div class="container text-center">
            <p class="nav-title m-0 p-2">Copyright &copy; FOSTIFEST 2.0</p>
        </div>
    </div>
</section>
@endsection