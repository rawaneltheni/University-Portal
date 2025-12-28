<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Optional Bootstrap (alerts layout only) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Auth CSS -->
    <link rel="stylesheet" href="{{ asset('storage/CSS/auth.css') }}">
</head>

<body>

<div class="auth-wrapper">
    <div class="auth-card">

        <div class="auth-header">
            <h4>Admin Login</h4>
        </div>

        <div class="auth-body">

            {{-- Error Message --}}
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            {{-- Validation Errors --}}
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.adminCheckLogin') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email"
                           name="email"
                           class="form-control"
                           value="{{ old('email') }}"
                           placeholder="admin@example.com">
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password"
                           name="password"
                           class="form-control"
                           placeholder="••••••••">
                </div>

                <button class="auth-btn">Login</button>
            </form>
        </div>

        <div class="auth-footer">
            Admin Panel © {{ date('Y') }}
        </div>

    </div>
</div>

</body>
</html>
