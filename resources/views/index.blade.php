<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOA Site</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <form class="w-full max-w-lg" action="{{ route('data.store') }}" method="POST">
         <div class="flex flex-wrap -mx-3 mb-6">
            @csrf
                <div class="w-full px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="uuid">
                        UUID
                        <input type="text" id="uuid" name="uuid" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                    </label>
                </div>
                <div class="w-full px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                        Name
                        <input type="text" id="name" name="name" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                    </label>
                </div>
                <div class="w-full px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="content">
                        Content
                       <textarea name="content" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 resize border rounded focus:outline-none focus:shadow-outline" rows="10"></textarea>
                    </label>
                </div>
                <div class="w-full px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="meta_keywords">
                        Meta Keywords
                        <input type="text" id="meta_keywords" name="meta_keywords" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                    </label>
                </div>
                <div class="w-full px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="meta_description">
                        Meta Description
                        <input type="text" id="meta_description" name="meta_description" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                    </label>
                </div>
                <div class="w-full px-3 mb-6 md:mb-0">
                    @if($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            @foreach($errors->all() as $error)
                                <div class="block">{{ $error }}</div>
                            @endforeach
                        </div>
                    @endif
                    
                    {{ Str::uuid() }}
                </div>
                <div class="w-full px-3 mb-6 md:mb-0">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
                    Check & Create
                    </button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>