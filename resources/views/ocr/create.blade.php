@extends('layouts.app')
@section('content')
<form method="POST" enctype="multipart/form-data" action="{{route('home.store')}}" class="bg-white p-3">
    @csrf
<div class="flex justify-center">
    <div class="mb-3 w-96">
      <label for="formFile" class="form-label inline-block mb-2 text-gray-700">Fiche tajnid</label>
      <input class="form-control
      block
      w-full
      px-3
      py-1.5
      text-base
      font-normal
      text-gray-700
      bg-white bg-clip-padding
      border border-solid border-gray-300
      rounded
      transition
      ease-in-out
      m-0
      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="file" id="formFile" name="fichier">
    </div>
  </div>
  <button type="submit" class="bg-slate-900 text-white px-3 py-2">Ajouter</button>
</form>
@endsection