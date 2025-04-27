<x-headerfooter>
     <!-- Hero Section -->
  <section class="hero">
    <div class="container text-center">
      <h1>Welcome to the Event Hub</h1>
      <p>Plan and manage your events with ease</p>
      @if(auth()->check() && auth()->user()->role == 'organizer')
      <a href="/createevent" class="btn btn-primary">Create Events</a>
      @endif
    </div>
  </section>


  <!-- Featured Events Section -->
  <section class="featured-events">
    <div class="container">
      <h2 class="text-center">Featured Events</h2>
      <div class="row">
        @foreach ($events as $event)
        <div class="col-md-4 mb-3 border-1">
          <div class="card">
            <img src="{{ $event->logo? asset('storage/'. $event->logo):asset('/images/eventhub.jpg') }}"alt="Event Logo">
            <div class="card-body">
              <h5 class="card-title">{{ $event->title }}</h5>
              <p class="card-text">Location: {{ $event->location }}</p>
              <a href="/details/{{ $event->id }}" class="btn btn-primary">Details</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <div>

<div>
  <h1 class="text-center mt-5">Live Nature Event</h1>
  <div class="text-center mt-3 mb-5">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/daqB3i9WYIY?si=I1MvmjD1zDoP8rX0"
      title="YouTube video player" frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/B4-L2nfGcuE?si=86lIES0B1cqSPF5-"
      title="YouTube video player" frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/k7HTZrwW2Bo?si=xFEonnBJ2v0JGgQC"
      title="YouTube video player" frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
  </div>
</div>

<div>
  <h1 class="text-center mt-5">Live Gaming Events</h1>
  <div class="text-center mt-3 mb-5">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/tvQ4JlGrYZQ?si=DF_8Y6JWCpQ08Qr7"
      title="YouTube video player" frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/zD15w2465p4?si=JwynySt3L4_m-hgr"
      title="YouTube video player" frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/HB27rkCAK5I?si=paHHA8FegyMVmgFW"
      title="YouTube video player" frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
  </div>
</div>

<div>
  <h1 class="text-center mt-5">Live Space Events</h1>
  <div class="text-center mt-3 mb-5">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/0FBiyFpV__g?si=W-m9FRFN2sl2-FNo"
      title="YouTube video player" frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/xRPjKQtRXR8?si=S7DNDRj5_aiy0Qu1"
      title="YouTube video player" frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/r-TPJDQSqv0?si=Z1LzapRO-ERFv111"
      title="YouTube video player" frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
  </div>
</div>

<div>
  <h1 class="text-center mt-5">Other Live Events </h1>
  <div class="text-center mt-3 mb-5">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/YDfiTGGPYCk?si=03BqHxsSJjEe25e1"
      title="YouTube video player" frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/fG1qW6z7hwU?si=60oJz2T5kB_hxmeM"
      title="YouTube video player" frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
  </div>
</div>
</div>

    </div>
  </section>
</x-headerfooter>
