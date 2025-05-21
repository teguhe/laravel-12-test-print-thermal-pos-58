<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Cetak Struk</title>
<script
</head>
src="https://cdn.tailwindcss.com"></script>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
<div class="bg-white shadow-xl rounded-2x1 p-10 text-center max-w-md w-full"> <h1 class="text-2x1 font-bold text-gray-800 mb-4"> Cetak Struk</h1>
@if (session('success'))
<div class="■bg-green-100 text-green-800 px-4 py-2 rounded-1g mb-4 text-sm"> {{session('success') }}
</div>
@elseif (session('danger'))
<div class="bg-red-100 text-red-800 px-4 py-2 rounded-1g mb-4 text-sm"> {{ session('danger') }}
</div>
@endif
<form method="GET" action="{{ route('print.struk') }}">
@csrf
<button type="submit"
class="bg-indigo-600
hover:bg-indigo-700 ■text-white font-semibold
px-6 py-3 rounded-xl transition-all duration-200"> Cetak Sekarang
</button>
</form>
</div>
</body>
</html>