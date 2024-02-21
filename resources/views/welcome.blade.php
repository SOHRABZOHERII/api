<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs"></script>










</head>
<body class="container mx-auto mt-10 mb-10 max-w-lg h-14 bg-gradient-to-r from-cyan-100 ">
      <h2 class="py-5 mb-6 text-2xl block uppercase text-slate-800">Send Mail</h2>

      <div x-data="{ flash: true }" >
        @if (session()->has('success'))
          <div x-show="flash"
          class="relative mb-10 rounded border border-green-400 bg-green-100 px-4 py-2  text-green-500   hover:bg-green-100"
          role="alert">
            <strong class="font-bold">Success!</strong>
            <div>{{ session('success') }}</div>
                                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" @click="flash = false"
                                            stroke="currentColor" class="h-6 w-6 cursor-pointer">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                        </span>

          </div>
        @endif

     <form action="{{route('texts.store')}}" method="POST" class="mb-4 flex items-center space-x-2">
        @csrf
        <div>
            <div class="py-5 mb-5">
                <textarea class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full focus:outline-none bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white  dark:border-gray-700 rounded-lg " name="text" id="" cols="30" rows="10">
            </textarea>
        </div>
        @error('text')
       <p class=" text-red-500 border-red-500">{{ $message}}</p>
        @enderror
          <div >
            <button class="transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" >Submit</button>
          </div>
        </div>

     </form>


</body>
</html>
