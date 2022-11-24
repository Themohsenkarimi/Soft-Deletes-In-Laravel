<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soft Deletes In Laravel</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.2/js/bootstrap.min.js" integrity="sha512-5BqtYqlWfJemW5+v+TZUs22uigI8tXeVah5S/1Z6qBLVO7gakAOtkOzUtgq6dsIo5c0NJdmGPs0H9I+2OHUHVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.2/css/bootstrap.min.css" integrity="sha512-CpIKUSyh9QX2+zSdfGP+eWLx23C8Dj9/XmHjZY2uDtfkdLGo0uY12jgcnkX9vXOgYajEKb/jiw67EYm+kBf+6g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div id="viewport">
        <div id="sidebar">
          <header>
            <a href="#"> My App</a>
          </header>
          <ul>
              <li class="nav"><a class="btn btn-default m-2" href="/"> <i class="fa fa-thin fa-newspaper"></i> Article</a></li>
              <li class="nav"><a class="btn btn-default m-2" href="trashed"> <i class="fa fa-duotone fa-trash"></i>   Trashed</a></li>
          </ul>
        </div>
        
        <!-- Content -->
          <div class="container-fluid ">
                 <h1 class="text-center text-danger py-4">Restore Articles</h1>
           <table class="table">
            <h3><a class="btn btn-success" href="restore-all"><i class="fa fa-sharp fa-solid fa-trash-arrow-up"></i> Restore All</a></h3>
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Author</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Restore</th>
                  </tr>
                </thead>
                <tbody>

                    @foreach ($articles as $article)
                    <tr>
                        <th scope="row">{{$article->id}}</th>
                        <td>{{$article->author}}</td>
                        <td>{{$article->title}}</td>
                        <td>{{subStr($article->description,0,30)}}</td>
                    <td><a href="restore/{{$article->id}}" class="text-primary btn"><i class="fa fa-sharp fa-solid fa-trash-arrow-up"></i></a></td>
                    </tr>
                    @endforeach
                    
                </tbody>
              </table>
          </div>
      </div>
</body>
</html>