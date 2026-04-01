<div class="grid md:grid-cols-4 gap-8">

<!-- FILTER -->
<div>

<h3 class="font-bold mb-4">
Kategori
</h3>

@foreach($categories as $category)

<a href="?category={{ $category->id }}"
class="block mb-2 text-gray-600 hover:text-blue-600">
{{ $category->name }}
</a>

@endforeach

</div>


<!-- LIST -->
<div class="md:col-span-3 grid md:grid-cols-3 gap-6">

@foreach($services as $service)

<div class="bg-white p-6 rounded-xl shadow">

<h3 class="font-semibold">
{{ $service->name }}
</h3>

<p class="text-sm text-gray-500">
{{ $service->lab->name }}
</p>

<p class="text-blue-600 font-bold">
{{ $service->formatted_price }}
</p>

</div>

@endforeach

</div>

</div>