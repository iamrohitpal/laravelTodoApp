<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To Do</title>
    @vite(['resources/js/app.css', 'resources/js/app.js'])
</head>

<body>
    <div>
        <div>
            <marquee behavior="" direction="right">
                <h1>Welcome To ToDo List</h1>
            </marquee>
        </div>
        <center>
            <div>
                <form action="" method="POST">
                    @csrf
                    <input placeholder="Title" type="text" name="title" id="title"><br>
                    <textarea name="description" placeholder="Description" id="description" cols="30" rows="10"></textarea><br>
                    <input type="button" name="save" id="save" value="Save">
                </form>
            </div>
            <div>
                <table border="1" id="data">
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Updated</th>
                        <th>Created</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($data as $val)
                    <tr>
                        <td>{{$val->id}}</td>
                        <td>{{$val->title}}</td>
                        <td>{{$val->description}}</td>
                        <td>{{$val->updated_at}}</td>
                        <td>{{$val->created_at}}</td>
                        <td>
                            <a href="#">edit</a>
                            <a href="#">delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </center>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#save").click(function(){
                var title = $('#title').val();
                var description = $('#description').val();
                var token = "{{ csrf_token() }}";
                var data = {"_token": token, 'title': title, 'description': description};
            $.ajax({
                url: "{{route('addData')}}", 
                data: data,
                method: 'POST',
                success: function(result){
                    $("#data").append('<tr>' +
                        '<td>' + result.id + '</td>' +
                        '<td>' + result.title + '</td>' +
                        '<td>' + result.description + '</td>' +
                        '<td>' + result.updated_at + '</td>' +
                        '<td>' + result.created_at + '</td>' +
                        '<td>' +
                            '<a href="#">edit</a> ' +
                            '<a href="#">delete</a>' +
                        '</td>' +
                    '</tr>');
                }});
            });
        });
    </script>
</body>

</html>
