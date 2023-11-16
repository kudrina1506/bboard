@extends('layouts.app')

@section('title','Правка объявления :: Мои объявления')

@section('content')
    <form action=" {{ route('bb.update',['bb' => $bb->id] ) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="txtTitle" class="form-label">Товар</label>
            <input name="title" id="txtText" class="form-control" @error('title') is-invalid
                   @enderror value="{{ $bb->title }}">
            @error('title')
            <div class="invalid-feedback">{{ $message }}
                <input name="title" id="txtText" class="form-control" value="{{ old('title',$bb->title) }}">
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="txtContent" class="form-label">Описание</label>
            <textarea name="content" id="txtContent" class="form-control" @error('content') is-invalid @enderror
            row="3">{{ $bb->content }}</textarea>
            @error('content')
            <div class="invalid-feedback">{{ $message }}
                <textarea name="content" id="txtContent" class="form-control" row="3" value="{{ old('content',$bb->content) }}">}</textarea>
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="txtPrice" class="form-label">Цена</label>
            <input name="price" id="txtPrice" class="form-control" @error('price') is-invalid
                   @enderror value="{{ $bb->price }}">
            @error('price')
            <div class="invalid-feedback">{{ $message }}
                <input name="price" id="txtPrice" class="form-control" value="{{ old('price',$bb->price) }}">
            </div>
            @enderror
        </div>
        <input type="submit" class="bnt btn-primary" value="Сохранить">
    </form>
@endsection('content')
