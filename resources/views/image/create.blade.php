@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
            <div class="card">
                <div class="card-header">
                    Subir nueva imagen
                </div>

                <div class="card-body">
                    <form action="{{ route('image.save') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-froup row">
                        
                            <label for="image_path" class="col-md-3 col-form-label text-md-right">
                                Imagen
                            </label>
                            <div class="col-md-7">
                                <input id="image_path" type="file" class="form-control @error('image_path') is-invalid @enderror" name="image_path" autocomplete="image_path">
                                
                                @error('image_path')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>

                        <div class="form-froup row">
                            <label for="description" class="col-md-3 col-form-label text-md-right">
                                Descripción
                            </label>
                            <div class="col-md-7">
                                <textarea id="description" name="description" class="form-control" require></textarea>
                                @if($errors->has('description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                                
                            </div>
                        </div>
                        <br>

                        

                        <div class="form-froup row">
                            <div class="col-md-6 offset-md-3">
                                <input type="submit" class="btn btn-primary" value="Subir Imagen">
                               
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection