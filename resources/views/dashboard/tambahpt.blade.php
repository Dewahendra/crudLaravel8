<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Tambah Data Purnama_Tilem</title>
	<meta name="author" content="">
    <meta name="description" content="">

    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .body-bg {
            background-color: #9921e8;
            background-image: linear-gradient(315deg, #9921e8 0%, #5f72be 74%);
        }
    </style>
</head>
<body class="body-bg min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0" style="font-family:'Lato',sans-serif;">
    <header class="max-w-lg mx-auto">
        <a>
            <h1 class="text-4xl font-bold text-white text-center">{{$title}}</h1>
        </a>
    </header>

    <main class="bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">

        <section class="mt-10">
            <form class="flex flex-col" action="{{(isset($purnama_tilem))?route('purnama_tilem.update', $purnama_tilem->id_pt):route('purnama_tilem.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @if (isset($purnama_tilem))
                    @method('PUT')           
                @endif

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="id_pt">Id_pt</label>
                    <input type="number" name="id_pt" value="{{(isset($purnama_tilem))?$purnama_tilem->id_pt:old('id_pt') }}" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3">
                </div>
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="nama">Nama</label>
                    <input type="text" name="nama" value="{{(isset($purnama_tilem))?$purnama_tilem->nama:old('nama') }}" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3">
                </div>
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="jumlah">Jumlah</label>
                    <input type="text" name="jumlah" value="{{(isset($purnama_tilem))?$purnama_tilem->jumlah:old('jumlah') }}" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3">
                </div>
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="keterangan">Keterangan</label>
                    <input type="text" name="keterangan" value="{{(isset($purnama_tilem))?$purnama_tilem->keterangan:old('keterangan') }}" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3">
                </div>
    
                <button class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">Submit</button>
            </form>
        </section>
    </main>
    <footer class="max-w-lg mx-auto flex justify-center text-white">
        
        <span class="mx-3">Copyright &copy; Dewa Ketut Mahendra Putra</span>
        
    </footer>
</body>
</html>