@extends('layouts.plantilla')

@section('title','Admin Dashboard')

@section('content')

  @include('components.add-button')

  <!-- Works section -->

  @if (Session::has('msg'))
    @include('components.alert')
  @endif  

  <section id="works" class="p-10 bg-slate-200">
    <div id="work-cards" class="content-center grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 2xl:grid-cols-3 ">
      @foreach ($works as $work)
          <div class="w-full m-2 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
          <a href="#">
              <img class="rounded-t-lg max-w-382 @if(!$work->is_visible) opacity-20 @endif" src="{{ asset('storage/'. $work->img_name) }}">
          </a>
          <div class="p-5">
              <a href="#">
                  <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$work->name}}</h5>
              </a>
              <p class="mb-4 font-normal text-gray-700 dark:text-gray-400">{{$work->description}}</p>

                <a href="{{route('admin.edit', $work)}}" class="inline-flex items-center mr-2 py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-5 h-5 pr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" /></svg> Editar
              </a>
              <form action="{{route('admin.delete', $work)}}"  method="POST" class="inline"> @csrf @method('DELETE') <button class="inline-flex items-center mr-2 py-2 px-3 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                <svg class="w-5 h-5 pr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg> Eliminar
              </button></form>
          </div>
        </div>
      @endforeach
    </div>
  </section>
@endsection