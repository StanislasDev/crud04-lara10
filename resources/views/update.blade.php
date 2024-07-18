@extends('layout.index')
@section('title', 'Update Product')

@section('content')
    <div class="mt-5">
        <div class="container mx-auto max-w-xl shadow py-4 px-10">
        <a href="{{ route('home')}}" class="px-5 py-2 bg-red-500 rounded-md text-white text-lg shadow-md">Go back</a>
        <div class="my-3">
            <h1 class="text-center text-3xl font-bold">Update product</h1>
            <form action="" method="post">
                @csrf
                <div class="my-2 ">
                    <label for="title" class="text-md font-bold">Product Name</label>
                    <input type="text" value="{{$products->title}}" name="title" class="block w-full border border-emerald-500
                outline-emerald-800 px-2 py-2 text-md rounded-md my-2" id="title">
                @error('title')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
                </div>
                <div class="my-2 ">
                    <label for="category" class="text-md font-bold">Category</label>
                    <input type="text" value="{{$products->category}}" name="category" class="block w-full border border-emerald-500
                outline-emerald-800 px-2 py-2 text-md rounded-md my-2" id="category">
                @error('category')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
                </div>
                <div class="my-2 ">
                    <label for="price" class="text-md font-bold">Enter your price</label>
                    <input type="text" value="{{$products->price}}" name="price" class="block w-full border border-emerald-500
                outline-emerald-800 px-2 py-2 text-md rounded-md my-2" id="price">
                @error('price')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
                </div>
                <button class="px-5 py-1 bg-emerald-500 rounded-md text-black text-lg shadow-md">Update</button>
            </form>
        </div>
        </div>
    </div>
    @endsection