<?php

  // Calling header
  get_header();
?>
  <section id="blog" class="">
  <div class="container">
      <div class="row">
          <div class="col-12 col-lg-8 col-sm-12 col-md-8 order-2 order-lg-1">

          <?php
              while(have_posts()){
                  the_post()
              ?>

              <div class="pt-5">
                  <div class="section_image">
                      <img class="img-fluid" src="<?php echo get_theme_file_uri('/images/bg-img/img1.jpg') ?>" alt="image">
                  </div>
                  <div class="section_heading">
                      <h4 class="mt-4 mb-3 font-weight-bold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                      <p class="mb-3">
                        <?php
                          echo substr(get_the_content(), 0, 100);
                          ?>
                      </p>
                      <a class="btn btn-primary" href="<?php the_permalink(); ?>">View More</a>
                  </div>
              </div>

              <?php
              }
              ?>
              
              <!-- <div class="pt-5">
                  <div class="section_image">
                      <img class="img-fluid" src="<?php echo get_theme_file_uri('/images/bg-img/post.jpg') ?>" alt="image">
                  </div>
                  <div class="section_heading">
                      <h4 class="mt-4 mb-3 font-weight-bold"><a href="#">What brexit means for data protection law</a></h4>
                      <p class="mb-3">Assuming that the referendum is not ignored completely, there are two possible futures for the UK. Some people do not understand why you should have to spend money on boot camp when you 
                      can get the MCSE study materials yourself at a fraction.</p>
                      <a class="btn btn-primary" href="blog_detail.html">View More</a>
                  </div>
              </div>
              <div class="pt-5">
                  <div class="section_image">
                      <img class="img-fluid" src="<?php echo get_theme_file_uri('/images/bg-img/post.jpg') ?>" alt="image">
                  </div>
                  <div class="section_heading">
                      <h4 class="mt-4 mb-3 font-weight-bold"><a href="#">The growing meanace of social engineering fraud</a></h4>
                      <p class="mb-3">Social engineering involves the collection of information from various sources about a target. Some people do not understand why you should have to spend money on boot camp when you 
                      can get the MCSE study materials yourself at a fraction.</p>
                      <a class="btn btn-primary" href="blog_detail.html">View More</a>
                  </div>
              </div>
              <div class="pt-5">
                  <div class="section_image">
                      <img class="img-fluid" src="<?php echo get_theme_file_uri('/images/bg-img/post.jpg') ?>" alt="image">
                  </div>
                  <div class="section_heading">
                      <h4 class="mt-5 mb-3 font-weight-bold"><a href="#">Tax makes a good change</a></h4>
                      <p class="mb-3">Taxes have given to all people whether it is rich or poor. Some people do not understand why you should have to spend money on boot camp when you 
                      can get the MCSE study materials yourself at a fraction.</p>
                      <a class="btn btn-primary" href="blog_detail.html">View More</a>
                  </div>
              </div> -->

          </div>

          <div class="col-12 col-lg-4 col-md-4 col-sm-12 order-1 order-lg-2">
          
                  <div class="section_wrap">
                      <div class="section_single search_widget m-3 pb-5">
                          <form class="search-form" action="#">
                                  <input placeholder="Search Posts" name="search" type="text" class="search-bar" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'">
                                  <button class="search-button" type="submit"><i class="fa fa-search"></i></button>
                          </form>
                      </div>
                      
                      <div class="section_single user_widget m-3 pb-5">
                          <div class="section_profile text-center">
                              <div class="section_image mb-5">
                                <img src="<?php echo get_theme_file_uri('/images/bg-img/120x120.jpg') ?>" alt="Image">
                              </div>
                              <div class="section_heading">
                                  <h4>Charlie Barber</h4>
                                  <p>Senior Blog Writer</p>
                              </div>
                              <div class="section_social">
                                  <ul class="d-inline-flex list-unstyled">
                                      <li><a class="p-2" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                      <li><a class="p-2" href="#"><i class="fab fa-twitter"></i></a></li>
                                      <li><a class="p-2" href="#"><i class="fab fa-github-alt"></i></a></li>
                                      <li><a class="p-2" href="#"><i class="fab fa-behance"></i></a></li>
                                  </ul>
                              </div>
                              <div class="section_detail mb-4">
                                  <p class="font-weight-normal">Boot camps have its supporters andit sdetractors. Some people do not understand why you should have 
                                  to spend money on boot camp when you can get. Boot camps have itssuppor ters andits detractors.</p>
                              </div>
                          </div>
                          
                          <div class="section_popular_post mt-5">
                              <div class="section_heading">
                                  <h4 class="section_title text-capitalize p-2 text-center">popular posts</h4>
                              </div>
                              <div class="section_detail mb-5">
                                  <div class="media mt-4">
                                    <img class="mr-3" src="<?php echo get_theme_file_uri('/images/bg-img/101.jpg') ?>" alt="Generic placeholder image">
                                    <div class="media-body">
                                      <h6 class="font-weight-bold mt-0">Space the final Fronties</h6>
                                      <p>2 hours ago</p>
                                      
                                    </div>
                                  </div>
                                  
                                  <div class="media mt-4">
                                    <img class="mr-3" src="<?php echo get_theme_file_uri('/images/bg-img/102.jpg') ?>" alt="Generic placeholder image">
                                    <div class="media-body">
                                      <h6 class="font-weight-bold mt-0">The Amazing Hubble</h6>
                                      <p>2 hours ago</p>
                                      
                                    </div>
                                  </div>
                                  
                                  <div class="media mt-4">
                                    <img class="mr-3" src="<?php echo get_theme_file_uri('/images/bg-img/101.jpg') ?>" alt="Generic placeholder image">
                                    <div class="media-body">
                                      <h6 class="mt-0 font-weight-bold">Astronomy Or Astrology</h6>
                                      <p>2 hours ago</p>
                                      
                                    </div>
                                  </div>
                                  
                                  <div class="media mt-4">
                                    <img class="mr-3" src="<?php echo get_theme_file_uri('/images/bg-img/102.jpg') ?>" alt="Generic placeholder image">
                                    <div class="media-body">
                                      <h6 class="font-weight-bold mt-0">Asteroids telescope</h6>
                                      <p>2 hours ago</p>
                                      
                                    </div>
                                  </div>
                              </div>
                          </div>
                          
                          <div class="section_ad mt-4">
                              <div class="section_image mb-4">
                                  <a href="#"><img src="<?php echo get_theme_file_uri('/images/bg-img/380x300.jpg') ?>" alt=""/></a>
                              </div>
                          </div>
                          
                          <div class="section_categories mt-4">
                              <div class="section_heading">
                                  <h4 class="section_title text-capitalize p-2 text-center">post categories</h4>
                              </div>
                              <div class="section_detail mb-5">
                                  <ul class="list-unstyled">
                                      <li class="pt-2"><a class="d-flex justify-content-between" href="#"><p>Technology</p> <p>37</p></a></li>
                                      <li class="pt-2"><a class="d-flex justify-content-between" href="#"><p>Life Style</p> <p>24</p></a></li>
                                      <li class="pt-2"><a class="d-flex justify-content-between" href="#"><p>Fashion</p> <p>59</p></a></li>
                                      <li class="pt-2"><a class="d-flex justify-content-between" href="#"><p>Art</p> <p>29</p></a></li>
                                      <li class="pt-2"><a class="d-flex justify-content-between" href="#"><p>Food</p> <p>15</p></a></li>
                                      <li class="pt-2"><a class="d-flex justify-content-between" href="#"><p>Architecture</p> <p>09</p></a></li>
                                      <li class="pt-2"><a class="d-flex justify-content-between" href="#"><p>Adventure</p> <p>44</p></a></li>
                                  </ul>
                              </div>
                          </div>
                          
                          <div class="section_news text-center mt-4">
                              <div class="section_heading">
                                  <h4 class="section_title text-capitalize p-2 text-center">news letter</h4>
                              </div>
                              <div class="section_detail m-3 mb-5">
                                  <p>Here, I focus on a range of items and features that we use in life without giving them a second thought.</p>
                              </div>
                                  
                              <div class="section_form">
                                  <div class="col-auto">
                                    <label class="sr-only" for="inlineFormInputGroup">Enter Email</label>
                                    <div class="input-group mb-2">
                                      <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter Email">
                                       <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-paper-plane"></i></div>
                                      </div>
                                    </div>
                                  </div>  
                                      
                                  <div class="section_detail mb-3">
                                      <p class="font-weight-normal mt-2">You can unsubscribe at any time</p>
                                      
                                  </div>
                              </div>
                          </div>
                          
                          <div class="section_tag_clouds text-center mt-4">
                              <div class="section_heading">
                                  <h4 class="section_title text-capitalize p-2 text-center">tag clouds</h4>
                              </div>
                              <div class="section_detail">
                                  <ul class="list-unstyled mt-1">
                                      <li class="d-inline-block btn1 mb-2"><a class="" href="#"><p class="theme-btn-2 mt-0">Technology</p></a></li>
                                      <li class="d-inline-block btn1 mb-2"><a class="" href="#"><p class="theme-btn-2 mt-0">Fashion</p></a></li>
                                      <li class="d-inline-block btn1 mb-2"><a class="" href="#"><p class="theme-btn-2 mt-0">Architecture</p></a></li>
                                      <li class="d-inline-block btn1 mb-2"><a class="" href="#"><p class="theme-btn-2 mt-0">Fashion</p></a></li>
                                      <li class="d-inline-block btn1 mb-2"><a class="" href="#"><p class="theme-btn-2 mt-0">Food</p></a></li>
                                      <li class="d-inline-block btn1 mb-2"><a class="" href="#"><p class="theme-btn-2 mt-0">Technology</p></a></li>
                                      <li class="d-inline-block btn1 mb-2"><a class="" href="#"><p class="theme-btn-2 mt-0">LifeStyle</p></a></li>
                                      <li class="d-inline-block btn1 mb-2"><a class="" href="#"><p class="theme-btn-2 mt-0">Art</p></a></li>
                                      <li class="d-inline-block btn1 mb-2"><a class="" href="#"><p class="theme-btn-2 mt-0">Adventure</p></a></li>
                                      <li class="d-inline-block btn1 mb-2"><a class="" href="#"><p class="theme-btn-2 mt-0">Food</p></a></li>
                                      <li class="d-inline-block btn1 mb-2"><a class="" href="#"><p class="theme-btn-2 mt-0">LifeStyle</p></a></li>
                                      <li class="d-inline-block btn1 mb-2"><a class="" href="#"><p class="theme-btn-2 mt-0">Adventure</p></a></li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
          </div>
      </div>
  </div>
</section>

<?php
    // Calling footer
    get_footer();


?>