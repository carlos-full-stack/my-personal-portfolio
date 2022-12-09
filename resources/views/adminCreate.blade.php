@extends('layouts.plantilla')

@section('title','Editar trabajo')

@section('content')

  <!-- Work section -->

  <section id="works" class="p-10 bg-slate-200">
    <form method="POST" enctype="multipart/form-data">
        @csrf      

        <div id="work-cards" class="flex justify-center">

            <!-- Modal content -->
            <div class=" bg-white rounded-lg shadow dark:bg-gray-700 lg:w-full">
              <!-- Modal header -->
              <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                  <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                      Añadir trabajo
                  </h3>
                  <a href="{{route('admin.index')}}">
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">
                          Cerrar
                        </span>
                    </button>
                  </a>
              </div>
              <!-- Modal body -->
              <div class="flex flex-col lg:flex-row lg:max-w-6xl lg:p-2	w-full m-2 max-w-sm">
                <div id="work-img" class="lg:max-w-md lg:p-8">
                    <img class="rounded-t-lg max-w-382" src="{{ asset('images/work-default-img.png') }}">
                    <div class="p-5 lg:p-0 lg:pt-5">
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('image') is-invalid @enderror" id="file_input" type="file" name="image"> 
                    @error('image')
                    <div class="alert alert-danger text-red-600">
                      {{ $message }}
                    </div>
                @enderror  
                  </div>
                  </div>
                <div id="work-form" class="p-6 w-full">
                  <div class="mb-6">
                    <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre del trabajo</label>    
                    <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('name') is-invalid @enderror" placeholder="Nombre del proyecto" >
                    @error('name')
                    <div class="alert alert-danger text-red-600">
                      {{ $message }}
                    </div>
                @enderror
                  </div>
                  <div class="mb-6">
                    <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción</label>
                      <input type="text" id="description" name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('description') is-invalid @enderror" placeholder="Descripcion" >
                      @error('description')
                      <div class="alert alert-danger text-red-600">{{ $message }}</div>
                  @enderror
                    </div>
                  <div class="mb-6 flex space-x-5 w-full">
                    <div class="flex flex-col w-full">
                      <label for="demo_link" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Enlace demo
                      </label>
                      <input type="text" id="demo_link" name="demo_link" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('demo_link') is-invalid @enderror" placeholder="Enlace demo" >
                      @error('demo_link')
                      <div class="alert alert-danger text-red-600">
                        {{ $message }}
                      </div>
                  @enderror
                    </div>
                    <div class="flex flex-col w-full">
                      <label for="repo_link" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enlace repositorio</label>
                      <input type="text" id="repo_link" name="repo_link" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('repo_link') is-invalid @enderror" placeholder="Enlace repositorio" >
                      @error('repo_link')
                      <div class="alert alert-danger text-red-600">
                        {{ $message }}
                      </div>
                  @enderror
                    </div>
                  </div>
                  <button type="submit" href="{{route('admin.index')}}" class="inline-flex items-center mr-2 py-2 px-3 text-sm font-medium text-center text-white bg-purple-700 rounded-lg hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300">
                    <svg class="w-5 h-5 pr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"></path></svg> 
                    Crear
                  </button>
                </div>
              </div> 
            </div>
          </div>
        </div> 
      </form>  
  </section>
@endsection