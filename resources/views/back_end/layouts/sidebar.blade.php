   <!-- Main Sidebar Container -->
   <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.login') }}" class="brand-link" align="center">
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ (!empty(Auth::guard('admin')->user()->photo))?url('upload/profile/'.Auth::guard('admin')->user()->photo):url('upload/no_image.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ route('admin.profile') }}" class="d-block">{{ Auth::guard('admin')->user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Hotel Part
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('amenity.view') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Amenity</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('room.view') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Room</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Slider
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('slider.view') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Slider</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Feature
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('feature.view') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Feature</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Testimonial
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('testimonial.view') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Testimonial</p>
                </a>
              </li>
            </ul>
          </li>



          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Blog Post
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('post.view') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Post</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Photo Gallary
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('photo.view') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Photo</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Video Gallary
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('video.view') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Video</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                FAQ
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('faq.view') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>FAQ</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Setting
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('about.add') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About US</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('terms.add') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Terms</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('privacy.add') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Privacy & Policy</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('contact.add') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                SetUp Heading
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('roomheading.add') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Room Page</p>
                 </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('photoheading.add') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Photo Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('videoheading.add') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Video Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('faqheading.add') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>FAQ Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('blogheading.add') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blog Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('cartheading.add') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cart Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('cheakheading.add') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Chack Out Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('singup_heading.add') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SingUp Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('singin_heading.add') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SingIn Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('forgetpass_heading.add') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Forget Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('reset_heading.add') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reset Page</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Subscriber
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('subscriber.show') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Subscriber</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('subscriber.send_email') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Send Email</p>
                </a>
              </li>
            </ul>
          </li>

         </li>
        </ul>
       </nav>
    </div>
  </aside>
