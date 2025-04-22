{{-- in layouts folder, mainStructure file has user navigation bar and footer --}}
@extends('layouts/mainStructure')

@section('content')

      {{-- Home Image --}}
        <img src="{{ asset('image/tourism.jpg') }}" height="750"  class="d-block w-100" style="margin-top: -120px"; alt="main image">
        {{-- Image Text --}}
            <div class="mainTextPosition text-center">
              <h5 class="mainTextSize">Explore Bangladesh at Your Own Place</h5>
              <p>Where Every Road Becomes Your Story</p>
            </div>



        {{-- 4 Packages for home page --}}
        <div class="container mt-5">
            <div class="d-flex justify-content-between">
                <div>
                    <h3>Featured Day and Round Tours</h3>
                    <pre>Explore Bangladeshi Tourism</pre>
                </div>
                <div>
                <a href="{{ url('/package') }}" class="btn btn-primary">Go to Page</a>
                </div>
            </div> 
        </div>
            {{-- close container --}}

            
        {{-- Packages cart start --}}
        <div class="container mt-4">
            <table class="table table-borderless ">
                <tr>
                    <td> 
                        <a href="{{ url('/package/page43') }}" class="no-decoration">
                            <div class="card d-inline-flex p-1" style="width: 18rem;">
                                <img src="{{ asset('image\uploads\travelPackage/1745303497_img2_680737c961f9a1.32006018.jpg') }}" class="card-img-top object-fit-fill" alt="...">
                                    <div class="card-body">
                                        <p>7 Days . Cultural Tour</p>
                                        <h5 class="card-title">Cultural Tour to Journey Through Bangladesh's Timeless Culture</h5>
                                        <p class="card-text">Immerse yourself in the rich history, diverse culture, and stunning architecture..</p>
                                    </div>
                            </div>
                        </a>
                    </td>

                    <td>            
                    <a href="{{ url('/package/page37') }}" class="no-decoration">
                            <div class="card d-inline-flex p-1" style="width: 18rem;">
                                <img src="{{ asset('image\uploads\travelPackage/1745303773_img1_680738ddd209b0.78394626.jpg') }}" class="card-img-top object-fit-fill" alt="...">
                                    <div class="card-body">
                                        <p>10 Days. Adventure Tour</p>
                                        <h5 class="card-title">Adventure Tour to Discover the Thrills of Bangladesh</h5>
                                        <p class="card-text">A thrilling escapade in the Chittagong Hill Tracts featuring trekking, boating, and caving.</p>
                                    </div>

                            </div>
                        </a>
                    </td>
                </tr>
              </table>
        </div>
        {{-- close container --}}
    </div>

        <div class="container-fluid mt-5 section-bg-color-home">
            <div class="row ">
                <div class="col m-5">
                    <pre>Elevate Your Bangladesh Adventure</pre>
                    <h2>Discover the Bangladesh Tours Difference</h2>
                    <p>At Bangladesh Tours Travels, we go beyond being just a travel agency; we're your gateway to an extraordinary Bangladeshi experience. Here's why choosing us will redefine your journey:
                    </p>

                    <br/>

                    <ol>
                        <li>
                            <div class="alignment">
                                <h5>Tailored to You</h5>
                                <p>Discover adventures as unique as you are. <br>
                                    We craft experiences to match your individual tastes and preferences.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="alignment">
                                <h5>Effortless Exploration</h5>
                                <p>Navigate your own adventure with our rental cars.<br>
                                    Explore at your own pace, uncovering hidden gems across Bangladesh.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="alignment">
                                <h5>Authentic Connections</h5>
                                <p>Immerse yourself in Bangladesh's rich culture. 
                                   <br>  Meet locals, savor authentic cuisine, and witness vibrant cultural traditions.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="alignment">
                                <h5>Safety & Security</h5>
                                <p>Your safety is paramount. 
                                    Meticulously maintained vehicles and experienced <br> drivers ensure a secure and spectacular journey.
                                </p>
                            </div>
                        </li>
                    </ol>

                </div>
                <div class="col p-4">
                    <img src="{{ asset('image/sunset.png') }}" alt="forine people image" width="100%" class="mt-4">
                </div>
            </div>
        </div>
        {{-- close container fluid --}}

        {{-- youtube video --}}
        <div class="m-5">
            <iframe width="1150" height="550" src="https://www.youtube.com/embed/Z44fFqBQQtg?si=1vN2vsVZhqAbr-MA" 
            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen class="rounded mx-auto d-block">
            </iframe>
        </div>

        {{-- review Section --}}
        <div class="container-fluid mt-5 section-bg-color-home p-5" style="height: 540px;"> 
            <h2 class="text-center mb-3">What Our Clients Have to Say</h2>
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div class="col-7 review-bg p-4 text-justify">
                            {{-- <p class="fw-bold">What Our Clients Have to Say</p> --}}
                            <q class="font-monospace">Booking a tour with Bangladesh Travels was the best decision I made for my Bangladeshi adventure. The attention to detail and personalized experience made every moment memorable. From the historic landmarks to the breathtaking boat rides along the rivers, every day was a new discovery.
                            </q>
                            <hr/>
                            <p class="font-monospace">Paul <br/> UK</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="col-7 review-bg p-4 text-justify">
                            {{-- <p class="fw-bold">What Our Clients Have to Say</p> --}}
                            <q class="font-monospace">Booking a tour with Bangladesh Travels was the best decision I made for my Bangladeshi adventure. The attention to detail and personalized experience made every moment memorable. From the historic landmarks to the breathtaking boat rides along the rivers, every day was a new discovery.
                            </q>
                            <hr/>
                            <p class="font-monospace">Joshap <br/> US</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="col-7 review-bg p-4 text-justify">
                            {{-- <p class="fw-bold">What Our Clients Have to Say</p> --}}
                            <q class="font-monospace">Booking a tour with Bangladesh Travels was the best decision I made for my Bangladeshi adventure. The attention to detail and personalized experience made every moment memorable. From the historic landmarks to the breathtaking boat rides along the rivers, every day was a new discovery.
                            </q>
                            <hr/>
                            <p class="font-monospace">Amal <br/> Sri lanka</p>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>

        </div>

@endsection