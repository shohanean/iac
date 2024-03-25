@extends('layouts.app')

@section('role')
    active
@endsection

@section('breadcrumb')
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Add {{ $term }}</h2>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Add {{ $term }}
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
        <div class="mb-1 breadcrumb-right">
            <div class="dropdown">
                <button
                    class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle waves-effect waves-float waves-light"
                    type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg
                        xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-grid">
                        <rect x="3" y="3" width="7" height="7"></rect>
                        <rect x="14" y="3" width="7" height="7"></rect>
                        <rect x="14" y="14" width="7" height="7"></rect>
                        <rect x="3" y="14" width="7" height="7"></rect>
                    </svg></button>
                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><svg
                            xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-check-square me-1">
                            <polyline points="9 11 12 14 22 4"></polyline>
                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                        </svg><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><svg
                            xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-message-square me-1">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                        </svg><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><svg
                            xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-mail me-1">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                            </path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg><span class="align-middle">Email</span></a><a class="dropdown-item"
                        href="app-calendar.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-calendar me-1">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg><span class="align-middle">Calendar</span></a></div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row" id="table-bordered">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add {{ $term }}</h4>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        You can <code>add</code> new {{ $term }} here
                    </p>
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">Success</h4>
                            <div class="alert-body">
                                {{ session('success') }}
                            </div>
                        </div>
                    @endif
                    <form action="{{ route('role.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label">Role Name</label>
                                    <input type="text" class="form-control @error('role_name') is-invalid @enderror"
                                        name="role_name" value="{{ old('role_name') }}">
                                    @error('role_name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label">Permissions</label>
                                    @error('permissions')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    @foreach ($permissions as $permission)
                                        <div class="form-check form-check-success mt-1">
                                            <input type="checkbox" class="form-check-input"
                                                id="permission_{{ $permission->id }}" name="permissions[]"
                                                value="{{ $permission->name }}">
                                            <label class="form-check-label"
                                                for="permission_{{ $permission->id }}">{{ Str::title($permission->name) }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-primary waves-effect waves-float waves-light"
                            type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <h3>Roles List</h3>
    <p class="mb-2">
        A role provided access to predefined menus and features so that depending on assigned role an administrator can have
        access to what he need
    </p>
    <div class="row">
        @foreach ($roles as $role)
            <div class="col-xl-2 col-lg-3 col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <span>Total {{ $role->users->count() }} users</span>
                            <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    title="" class="avatar avatar-sm pull-up"
                                    data-bs-original-title="Vinnie Mostowy">
                                    <img class="rounded-circle"
                                        src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Avatar">
                                </li>
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    title="" class="avatar avatar-sm pull-up"
                                    data-bs-original-title="Allen Rieske">
                                    <img class="rounded-circle"
                                        src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Avatar">
                                </li>
                            </ul>
                        </div>
                        <div class="d-flex justify-content-between align-items-end mt-1 pt-25">
                            <div class="role-heading">
                                <h4 class="fw-bolder">{{ Str::title($role->name) }}</h4>
                                <a href="#">
                                    <small class="fw-bolder">Edit Role</small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <h3>Users List</h3>
    <p class="mb-2">
        A role provided access to predefined menus and features so that depending on assigned role an administrator can have
        access to what he need
    </p>
    <div class="row">
        @foreach ($nonStudents as $nonStudent)
            <div class="col-2">
                <div class="card">
                    <div class="card-body">
                        <form action="asd" method="POST">
                            @csrf
                            <h6>{{ $nonStudent->name }}</h6>
                            <select onchange="this.form.submit()" name="shohan" class="form-select">
                                <option value="">-Select One-</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->name }}"
                                        {{ $nonStudent->getRoleNames()->first() == $role->name ? 'selected' : '' }}>
                                        {{ $role->name }}</option>
                                @endforeach
                            </select>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
