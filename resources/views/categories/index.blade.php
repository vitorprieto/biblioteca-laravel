<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
        <style>
            #categories {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }
            
            #categories td, #categories th {
                border: 1px solid #ddd;
                padding: 8px;
            }
            
            #categories tr:nth-child(even){background-color: #f2f2f2;}
            
            #categories tr:hover {background-color: #ddd;}
            
            #categories th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #04AA6D;
                color: white;
            }
        </style>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <table id="categories">
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                    
                        <td><a href="{{ url('categories/' . $category->id . '/edit') }}">Edit</a></td>
                        <td>
                        <form action="{{ route('categories.destroy', ['category' => $category]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                    
                        <button type="submit">Delete</button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
