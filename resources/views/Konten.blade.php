    

   
   @extends('layouts.Master')

    @section('kontenhome')
    <h1>{{ $homename1 }}</h1>
    <h1>{{ $homename2 }}</h1>
    <p><span class="typed" data-typed-items="{{ $animasi1 }}, {{ $animasi2 }}"></span></p>
    @endsection


    @section('kontenprofil')
    <div class="section-title">
                    <h2>{{ $Profil }}</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3" data-aos="fade-right">
                        <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
                    </div>
        
                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <div class="row">
                            <div class="col-lg-6">
                                 <ul>
                                 <li><i class="bi bi-chevron-right"></i> <strong>Nama Lengkap:</strong> <span> {{ $Nama }}</span></li>
                                 <li><i class="bi bi-chevron-right"></i> <strong>Tempat Tanggal Lahir:</strong> <span> {{ $ttl }}</span></li>
                                 <li><i class="bi bi-chevron-right"></i> <strong>Tinggi Badan: </strong> <span> {{ $tinggi }}</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Berat Badan:</strong> <span> {{ $berat }}</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
    @endsection



    @section('kontenSoftskills')
    <div class="container">

        <div class="section-title">
        <h2>{{ $soft }}</h2>
        </div>

            <div class="row no-gutters">

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                    <div class="count-box">
                        <i class="bi bi-people"></i>
                        <span data-purecounter-start="0" data-purecounter-end="99" data-purecounter-duration="1" class="purecounter"></span>
                        <p><strong>{{$s1}}</strong> </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="count-box">
                        <i class="bi bi-people"></i>
                        <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1" class="purecounter"></span>
                        <p><strong>{{$s2}}</strong></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="count-box">
                        <i class="bi bi-people"></i>
                        <span data-purecounter-start="0" data-purecounter-end="94" data-purecounter-duration="1" class="purecounter"></span>
                        <p><strong>{{$s3}}</strong></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="count-box">
                        <i class="bi bi-people"></i>
                        <span data-purecounter-start="0" data-purecounter-end="89" data-purecounter-duration="1" class="purecounter"></span>
                        <p><strong>{{$s4}}</strong></p>
                    </div>
                </div>

            </div>

    </div>
    @endsection


    @section('kontenHardskills')
        <div class="container">
            <div class="section-title">
                <h2>{{$hard}}</h2>
            </div>

                <div class="row skills-content">
                    <div class="col-lg-6" data-aos="fade-up">
                        <div class="progress">
                        <span class="skill">{{$h1}}<i class="val">75%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                        <span class="skill">{{$h2}} <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                        <span class="skill">{{$h3}} <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                        <span class="skill">{{$h4}} <i class="val">70%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                        <div class="progress">
                        <span class="skill">{{$h5}}<i class="val">70%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                        <span class="skill">{{$h6}} <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                        <span class="skill">{{$h7}}<i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                        <span class="skill">{{$h8}} <i class="val">80%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    @endsection


    @section('kontenPengalaman')
    <div class="row">
          <div class="col-lg-6" data-aos="fade-up">


            <h3 class="resume-title">{{$org}}</h3>
            
                @foreach($posts as $post)
                <div class="resume-item pb-0">
                <h4>{{ $post["name_organisasi"] }} </h4>
                <p><em>{{ $post["Des"] }}</em></p>
                 </div>
                
                @endforeach

            <h3 class="resume-title">{{ $pen }}</h3>

            @foreach( $posts1 as $post)
            <div class="resume-item">
            <h4>{{$post ["name_pen"] }}</h4>
              <h5>{{$post ["thn"]}}</h5>
              <p><em>{{ $post ["des1"]}}
              </em></p>
              <p><em>{{ $post ["des2"]}}
              </em></p>
            </div>
            @endforeach
            
           
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">{{$ker}}</h3>
           

            @foreach($posts2 as $post)
            <div class="resume-item">
              <h4>{{$post ["name_ker"]}}</h4>
              <h5>{{$post ["thn"]}}</h5>
              <ul>
                <p><em>{{$post ["des1"]}}</em></p>
                <p><em>{{$post ["des2"]}}</em></p>
                <p><em>{{$post ["des3"]}}</em></p>
              </ul>
            </div>

            @endforeach
          </div>
        </div>
    @endsection