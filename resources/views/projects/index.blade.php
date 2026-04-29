<!DOCTYPE html>
<html>
<head>
    <title>Admin Projects</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #0f172a;
            color: white;
        }

        .card {
            background: #1e293b;
            border-radius: 15px;
        }

        img {
            height: 180px;
            object-fit: cover;
        }
    </style>
</head>
<body>

<div class="container mt-5">

    <h2>Admin Dashboard - Projects</h2>

    <a href="/admin/projects/create" class="btn btn-success mb-3">+ Add Project</a>

    <div class="row">

        @foreach($projects as $project)
            <div class="col-md-4 mb-3">
                <div class="card p-2">

                    @if($project->image)
                        <img src="{{ asset('storage/' . $project->image) }}" class="w-100">
                    @endif

                    <h5 class="mt-2">{{ $project->title }}</h5>
                    <p>{{ $project->description }}</p>

                </div>
            </div>
        @endforeach

    </div>

</div>

</body>
</html>
