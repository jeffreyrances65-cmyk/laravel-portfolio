<!DOCTYPE html>
<html>
<head>
    <title>Create Project</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

    <h2>Create Project</h2>

    <form action="/admin/projects" method="POST" enctype="multipart/form-data">
        @csrf

        <input type="text" name="title" class="form-control mb-2" placeholder="Title">

        <textarea name="description" class="form-control mb-2" placeholder="Description"></textarea>

        <input type="file" name="image" class="form-control mb-2">

        <button class="btn btn-primary">Save</button>
    </form>

</div>

</body>
</html>
