@extends('layouts.app')

@section('title','Добавление объявления :: Мои объявления')

@section('content')
    <form action=" {{ route('bb.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="txtTitle" class="form-label">Товар</label>
            <input name="title" id="txtText" class="form-control" @error('title') is-invalid @enderror>
            @error('title')
            <div class="invalid-feedback">{{ $message }}
                <input name="title" id="txtText" class="form-control" value="{{ old('title') }}">
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="txtContent" class="form-label">Описание</label>
            <textarea name="content" id="txtContent" class="form-control" @error('content') is-invalid @enderror
            row="3"></textarea>
            @error('content')
            <div class="invalid-feedback">{{ $message }}
                <textarea name="content" id="txtContent" class="form-control" value="{{ old('content') }}"
                row="3"></textarea>
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="txtPrice" class="form-label">Цена</label>
            <input name="price" id="txtPrice" class="form-control" @error('price') is-invalid @enderror>
            @error('price')
            <div class="invalid-feedback">{{ $message }}
                <input name="price" id="txtPrice" class="form-control" value="{{ old('price') }}">
            </div>
            @enderror
        </div>
        <input type="submit" class="btn-primary" value="Добавить">
    </form>
@endsection('content')
