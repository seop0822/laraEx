<!DOCTYPE>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<h1>Projects</h1>
<ul>
    @foreach($projects as $project)
        <li>
            <a href="/projects/{{ $project->id }}">
                {{ $project->title }}
            </a>
        </li>
    @endforeach
</ul>
</body>
</html>
