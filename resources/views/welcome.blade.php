<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Formulario de contactos</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
           body {
            background-image: url('{{ asset('assets/img/contacto.jpg') }}');
            background-size: cover; /* Para que la imagen cubra todo el cuerpo */
            background-repeat: no-repeat; /* Para que la imagen no se repita */
            background-attachment: fixed; /* Para que la imagen se mantenga fija mientras se desplaza la página */
            /*opacity: 0.5; /* Para hacer la imagen opaca */
        }
            .form-container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
            .form-header {
                background-image: url("{{ asset('assets/img/contacto-us.jpg') }}");
                background-size: cover;
                padding: 100px;
                border-top-left-radius: 20px;
                border-top-right-radius: 20px;
                text-align: center;
            }
            .form-group {
            margin-bottom: 20px;
        }
        .form-group input[type="text"], .form-group input[type="email"], .form-group textarea {
            border: none;
            border-bottom: 1px solid #ccc;
            border-radius: 0;
            padding: 10px 0;
            background-color: transparent;
            box-shadow: none;
        }
        .form-group input[type="text"]:focus, .form-group input[type="email"]:focus, .form-group textarea:focus {
            border-color: #007bff;
            outline: none;
        }
        
                
        </style>
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <div class="container">
                <div style="background-color: aliceblue" class="form-container">
                    <div class="form-header">
                        <h2 style="color:aliceblue">Formulario de Contacto</h2>
                                               
                    </div>
                 
                    <form action="{{ route('contact.store') }}" method="post" class="mt-5 {{ $errors->any() ? 'needs-validated' : 'was-validation' }}" novalidate>
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control {{ $errors->has('nombre') ? 'is-invalid' : '' }}" placeholder="Nombres" name="nombre" {{ $errors->has('nombre')?'required':'' }} value="{{ old('nombre') }}">
                           @if ($errors->has('nombre'))
                           <div class="invalid-feedback">{{ $errors->first('nombre') }}</div>
                           @endif
                           
                            
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control {{ $errors->has('mail') ? 'is-invalid' : '' }}" placeholder="Correo Electrónico" name="mail"  {{ $errors->has('mail')?'required':'' }} value="{{ old('mail') }}">
                            @if ($errors->has('mail'))
                            <div class="invalid-feedback">{{ $errors->first('mail') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <textarea class="form-control {{ $errors->has('mensaje') ? 'is-invalid' : '' }}" rows="5" placeholder="Mensaje" name="mensaje" {{ $errors->has('mensaje')?'required':'' }}></textarea>
                            @if ($errors->has('mensaje'))
                            <div class="invalid-feedback">{{ $errors->first('mensaje') }}</div>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                    </form>
                </div>
            </div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
       
    </body>
</html>
