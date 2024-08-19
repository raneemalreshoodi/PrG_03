<!doctype html>
<html lang="ar">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>الخدمات</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="bg-dark py-3">
        <h3 class="text-white text-center">الخدمات</h3>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center mt-4">
            <div class="col-md-10 d-flex justify-center-end">
                <a href="{{ route('services.create') }}" class="btn btn-dark">إضافة</a>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            @if (Session::has('success'))
                <div class="col-md-10 mt-4">
                    <div class="alert alert-success">
                        {{ Session::get('success') }}   
                    </div>
                </div>  
            @endif
            <div class="col-md-10">
                <div class="card border-0 shadow-lg my-4">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">الخدمات</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th></th>
                                <th>العنوان</th>
                                <th>تاريخ الإنشاء</th>
                                <th>الإجراءات</th>
                            </tr>
                            @if ($services->isNotEmpty())
                                @foreach ($services as $service)
                                    <tr>
                                        <td>{{ $service->id }}</td>
                                        <td>
                                            @if ($service->image != "")
                                                <img width="50" src="{{ asset('uploads/services/'.$service->image) }}" alt="">
                                            @endif
                                        </td>
                                        <td>{{ $service->title }}</td>
                                        <td>{{ \Carbon\Carbon::parse($service->created_at)->format('d M, Y') }}</td>
                                        <td>
                                            <a href="{{ route('services.edit', $service->id) }}" class="btn btn-dark">تعديل</a>
                                            <a href="#" onclick="deleteService({{ $service->id }});" class="btn btn-danger">حذف</a>
                                            <form id="delete-service-form-{{ $service->id }}" action="{{ route('services.destroy', $service->id) }}" method="post">
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
    function deleteService(id) {
        if (confirm("هل تريد حذف هذه الخدمة؟")) {
            document.getElementById('delete-service-form-' + id).submit();
        }
    }
</script>
