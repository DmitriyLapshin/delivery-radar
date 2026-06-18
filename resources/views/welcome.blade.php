<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delivery Radar</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body style="font-family: Arial; background:#f5f5f5;">

    <div style="max-width:800px; margin:50px auto;">
        <h1>🚀 Delivery Radar</h1>

        <h2>Projects</h2>

        <form method="POST" action="/projects" style="margin-bottom:30px;">

    @csrf

    <div style="margin-bottom:10px;">
        <label>Project Name</label>
        <br>
        <input
            type="text"
            name="name"
            required
            style="width:300px; padding:8px;"
        >
    </div>

    <div style="margin-bottom:10px;">
        <label>Deadline</label>
        <br>
        <input
            type="date"
            name="deadline"
            required
            style="padding:8px;"
        >
    </div>

    <button type="submit" style="padding:10px 15px;">
        Save Project
    </button>

</form>

       @foreach($projects as $project)

    <div style="background:white; padding:15px; margin-bottom:10px; border-radius:8px;">

        <strong>{{ $project->name }}</strong>

        <br>

        Release:
        {{ $project->deadline }}

    </div>

@endforeach
    </div>

</body>
</html>