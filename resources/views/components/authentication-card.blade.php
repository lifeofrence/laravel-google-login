<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div>
        {{--  {{ $logo }}  --}}

    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
      <a class="navbar-brand" href="#" style="display: inline-block; width: 440px; height: 120px; background-image: url('{{ asset('img/lifeofrence.jpg') }}'); background-size: cover; background-position: center;"></a>


        {{ $slot }}
        {{--  <a class="navbar-brand" href="https://github.com/lifeofrence">
    <img src="{{ asset('img/lifeofrence.jpg') }}" alt="" width="170" height="60" class="px-2">
</a>  --}}

    </div>
</div>
