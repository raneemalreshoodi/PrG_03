<!doctype html>
<html lang="ar">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>العملاء</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="bg-dark py-3">
        <h3 class="text-white text-center">اضافة عميل </h3>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center mt-4">
            <div class="col-md-10 d-flex justify-center-end">
            <a href="{{ route('clients.create') }}" class="btn btn-dark">اضافة</a>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            @if (Session::has('success'))
        <div class="col-md-10 mt-4">
            <div class="alert alert-success">
                {{Session::get('success')}}   
            </div>
        </div>  
        @endif
        <div class="col-md-10">
            <div class="card border-0 shadow-lg my-4">
                <div class="card-header bg-dark">
                    <h3 class="text-white">العملاء</h3>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th></th>
                            <th>Title</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                        @if ($clients->isNotEmpty())
                        @foreach ($clients as $client)
                        <tr>
                            <td>{{ $client->id }}</td>
                            <td>
                                @if ($client->image != "")
                                    <img width="50" src="{{ asset('uploads/clients/'.$client->image) }}" alt="">
                                @endif
                            </td>
                            <td>{{ $client->name }}</td>
                            <td>{{ \Carbon\Carbon::parse($client->created_at)->format('d M, Y') }}</td>
                            <td>
                                <a href="{{ route('clients.edit',$client->id) }}" class="btn btn-dark">تعديل</a>
                                <a href="#" onclick="deleteClient({{ $client->id  }});" class="btn btn-danger">حذف</a>
                                <form id="delete-client-from-{{ $client->id  }}" action="{{ route('clients.destroy',$client->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                </form>
                            </td>
                        </tr>   
                        @endforeach
                        
                        @endif
                        
                    </table>
                </div>
            </div>
        </div>
     </div>
    </div>
  </body>
</html>

<script>
    function deleteClient(id) {
        if (confirm("هل اريد حذف العميل؟")) {
            document.getElementById("delete-client-from-"+id).submit();
        }
    }
</script>