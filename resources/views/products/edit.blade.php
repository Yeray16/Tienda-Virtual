@extends('layouts.app')

@section('title', 'Editando: '.$product->name)

@push('styles')
  <link rel="stylesheet" href="{{ asset('css/form.css') }}">
@endpush

@section('content')
<h1>Editando: {{ $product->name }}</h1>
<form action="{{ route('products.update', $product->id) }}" method="post" class="form">
  @csrf
  @method('PUT')
  <label for="category_id">Categoría</label>
  <select name="category_id" id="category_id" required>
    <option value="" disabled>Seleccione una categoría</option>
    @foreach ($categories as $category)
      <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
    @endforeach
  <label for="name">Nombre</label>
  <input type="text" name="name" id="name" value="{{ $product->name }}" required>
  <label for="description">Descripción</label>
  <textarea name="description" id="description" required>{{ $product->description }}</textarea>
  <label for="price">Precio</label>
  <input type="number" name="price" id="price" step="0.01" value="{{ $product->price }}" required>
  <label for="stock">Stock</label>
  <input type="number" name="stock" id="stock" value="{{ $product->stock }}" required>
  <button type="submit">Guardar</button>
</form>
@endsection