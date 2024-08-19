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
        <h3 class="text-white text-center">تعديل الخدمة</h3>
    </div>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-10 d-flex justify-content-end">
                <a href="{{ route('services.index') }}" class="btn btn-dark">رجوع</a>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card borde-0 shadow-lg my-4">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">تعديل الخدمة</h3>
                    </div>
                    <form enctype="multipart/form-data" action="{{ route('services.update', $service->id) }}" method="post">
                        @method('put')
                        @csrf
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="" class="form-label h5">العنوان</label>
                                <input value="{{ old('title', $service->title ?? '') }}" type="text" class="@error('title') is-invalid @enderror form-control form-control-lg" placeholder="العنوان" name="title">
                                @error('title')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label h5">الوصف</label>
                                <textarea placeholder="الوصف" class="form-control" name="desc" cols="30" rows="5">{{ old('desc', $service->desc) }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label h5">الصورة</label>
                                <input type="file" class="form-control form-control-lg" placeholder="الصورة" name="image">
                                
                                @if ($service->image != "")
                                    <img class="w-50 my-3" src="{{ asset('uploads/services/'.$service->image) }}" alt="">
                                @endif
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-lg btn-primary">تحديث</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
  </body>
</html>
