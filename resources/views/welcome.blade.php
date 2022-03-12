<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- Link CDN Boostrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <button class="btn-primary">dd</button>
    {{-- Table --}}
    <div class="container">
        <table class="table table-hover">
            <thead>
                <th>Tên</th>
                <th>Tuổi</th>
                <th>Lớp</th>
                <th>MSSV</th>
                <th>Ảnh đại diện</th>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{$student['name']}}</td>
                        <td>{{$student['age']}}</td>
                        <td>{{$student['class']}}</td>
                        <td>{{$student['id']}}</td>
                        <td><img src="" alt=""></td>
                    </tr>
                @endforeach
            
                
               
            </tbody>
        </table>
    </div>




    {{-- Link CDN Boostrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>