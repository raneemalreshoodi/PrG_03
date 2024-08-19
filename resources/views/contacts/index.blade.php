<!doctype html>
<html lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>تواصل معنا</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .form-heading {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            text-align: center;
            color: #333;
        }
        .form-field {
            margin-bottom: 1rem;
        }
        .input-field {
            width: 100%;
            padding: 0.75rem;
            border-radius: 0.5rem;
            border: 1px solid #ced4da;
        }
        .input-field:focus {
            border-color: #80bdff;
            box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25);
        }
        .sendMessage-btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            font-size: 1rem;
            cursor: pointer;
        }
        .sendMessage-btn:hover {
            background-color: #0056b3;
        }
        .form-container {
            background-color: #f8f9fa;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 0 1rem rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="bg-dark py-3">
        <h3 class="text-white text-center">تواصل معنا</h3>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center mt-4">
            <div class="col-md-8">
                <div class="form-container">
                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <p class="form-heading">تواصل معنا</p>

                        <div class="form-field">
                            <input required placeholder="الاسم" name="name" class="input-field" type="text" />
                        </div>

                        <div class="form-field">
                            <input required placeholder="ايميلك" name="email" class="input-field" type="email" />
                        </div>

                        <div class="form-field">
                            <input required placeholder="العنوان" name="title" class="input-field" type="text" />
                        </div>

                        <div class="form-field">
                            <textarea required placeholder="الرسالة" name="message" cols="30" rows="3" class="input-field"></textarea>
                        </div>

                        <button class="sendMessage-btn" type="submit">ارسال</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
