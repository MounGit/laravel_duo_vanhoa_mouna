    <!-- ======= Features Section ======= -->
    <section id="features" class="features" data-aos="fade-up">
        <div class="container">
  
          <div class="section-title">
            <h2>{{$titre[0]->titrefeatures}}</h2>
            <p>{{$titre[0]->sous_titrefeatures}}</p>
          </div>


          @php
            $i=0
          @endphp


          @foreach ($feature as $data)

              @if ($i%2)
                <div class="row content">
                  <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
                    <img src="{{asset('img/'. $data->url)}}" class="img-fluid" alt="">
                  </div>
                  <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
                    <h3>{{$data->title}}</h3>
                    <p class="fst-italic">
                      {{$data->description}}
                    </p>
                    <p>
                      {{$data->p1}}
                      {{$data->p2}}
                      {{$data->p3}}
                    </p>
                  </div>
                </div>
              @else
                <div class="row content">
                  <div class="col-md-5" data-aos="fade-right" data-aos-delay="100">
                      <img src="{{asset('img/'. $data->url)}}" class="img-fluid" alt="">
                  </div>
                  <div class="col-md-7 pt-4" data-aos="fade-left" data-aos-delay="100">
                   <h3>{{$data->title}}</h3>
                    <p class="fst-italic">{{$data->description}}</p>
                    <ul>
                      <li><i class="bi bi-check"></i>{{$data->p1}}</li>
                      <li><i class="bi bi-check"></i>{{$data->p2}}</li>
                      <li><i class="bi bi-check"></i>{{$data->p3}}</li>
                    </ul>     
                  </div>   
               </div>
              @endif  
              
              
              @php
                $i++
              @endphp

          @endforeach




          {{-- <div class="row content">
            <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
              <img src="assets/img/features-2.png" class="img-fluid" alt="">
            </div>
            <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
              <h3>Corporis temporibus maiores provident</h3>
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum
              </p>
            </div>
          </div>
  
          <div class="row content">
            <div class="col-md-5" data-aos="fade-right">
              <img src="assets/img/features-3.png" class="img-fluid" alt="">
            </div>
            <div class="col-md-7 pt-5" data-aos="fade-left">
              <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
              <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>
              <ul>
                <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
              </ul>
            </div>
          </div>
  
          <div class="row content">
            <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
              <img src="assets/img/features-4.png" class="img-fluid" alt="">
            </div>
            <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
              <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum
              </p>
            </div>
          </div> --}}
  
        </div>
      </section><!-- End Features Section -->