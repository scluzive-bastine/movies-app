<div>
    <div class="mt-8">
        <a href=" {{ route('tv.show', $tvshow['id']) }} ">
            <img src="{{$tvshow['poster_path']}}" alt="poster" class="hover:opacity-75 transition ease-in-out duration-150">
        </a>
        <div class="mt-2">
            <a href=" {{ route('tv.show', $tvshow['id']) }} " class="text-lg mt-2 hover:text-gray-300"> {{ $tvshow['name'] }} </a>
            <div class="flex items-center text-gray-400 text-sm mb-0">
                <span>
                    <svg class="fill-current text-orange-500 w-4" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><title>favourite-31</title><g><path fill="#EFD358" d="M43.75391,17.60889C43.59717,17.23975,43.23486,17,42.8335,17H30.63623L24.90576,4.74316 C24.74121,4.39111,24.38818,4.1665,24,4.1665s-0.74121,0.22461-0.90576,0.57666L17.36377,17H5.1665 c-0.40137,0-0.76367,0.23975-0.92041,0.60889s-0.07812,0.79639,0.20068,1.08545l9.03223,9.36719l-3.63232,14.5293 c-0.09717,0.38867,0.04688,0.79785,0.36621,1.03955s0.75244,0.26953,1.1001,0.07129L24,36.45166l12.68701,7.25 c0.1543,0.08838,0.3252,0.13184,0.49609,0.13184c0.21338,0,0.42627-0.06836,0.604-0.20312 c0.31934-0.2417,0.46338-0.65088,0.36621-1.03955L34.521,28.06152l9.03223-9.36719 C43.83203,18.40527,43.91064,17.97803,43.75391,17.60889z"></path></g></svg>
                </span>
                <span class="ml-1"> {{$tvshow['vote_average']}} </span>
                <span class="mx-2">|</span>
                <span> {{ $tvshow['first_air_date'] }} </span>
            </div>
            <div class="text-gray-600 text-sm">
               {{ $tvshow['genres'] }}
            </div>
        </div>
    </div>
</div>
