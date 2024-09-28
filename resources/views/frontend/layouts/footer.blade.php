<footer class="footer mt-50">
      <div class="container">
        <div class="row">
          <div class="footer-col-1 col-md-3 col-sm-12"><a href="index.html"><img alt="Uainternational" src="assets/imgs/template/footer-logo.jpeg"></a>
            <div class="mt-20 mb-20 font-xs color-text-paragraph-2">UA International, your trusted partner in recruitment consultancy for the Gulf region..</div>
            <div class="footer-social"><a href="https://wa.me/<+966 5495-782-34>" target="_blank">
              <i class="fa-brands fa-whatsapp fa-xl me-2" style="color: #25D366"></i>
          </a> <a href="https://www.linkedin.com/in/umar-ansari-mba-11330a225/" target="_blank">
            <i class="fab fa-linkedin fa-xl" style="color: #0077B5"></i>
        </a></div>
          </div>

          <div class="footer-col-2 col-md-2 col-xs-6">
            <h6 class="mb-20">Resources</h6>
            <ul class="menu-footer">
              <li><a href="{{ route('why.choose.us') }}">Why choose us</a></li>
              <li><a href="{{ route('board.of.directors') }}">Board of Directors</a></li>
              <li><a href="{{ route('leadership.team') }}">Leadership Team</a></li>
              <li><a href="{{ route('mission.vission') }}">Mission & Vission</a></li>
            </ul>
          </div>
          <div class="footer-col-3 col-md-2 col-xs-6">
            <h6 class="mb-20">Services</h6>
            <ul class="menu-footer">
              <li><a href="{{ route('umrah') }}">Umrah</a></li>
              <li><a href="{{ route('web.app.development') }}">Web Development</a></li>
              <li><a href="{{ route('digital.marketing') }}">Digital Marketing</a></li>
              <li><a href="{{ route('travel.tourism') }}">Travel & Tourism</a></li>
            </ul>
          </div>
          <div class="footer-col-4 col-md-2 col-xs-6">
            <h6 class="mb-20">Gallery</h6>
            <ul class="menu-footer">
              <li><a href="{{ route('photo.gallery') }}">Photo Gallery</a></li>
              <li><a href="{{ route('technical.trade') }}">Technical Trade</a></li>
            </ul>
          </div>
          <div class="footer-col-5 col-md-2 col-xs-6">
            <h6 class="mb-20">More</h6>
            <ul class="menu-footer">
              <li><a href="{{ route('privacy.policy') }}">Privacy</a></li>
              <li><a href="{{ route('help.desk') }}">Help</a></li>
              <li><a href="{{ route('terms.conditions') }}">Terms</a></li>
            </ul>
          </div>
          <div class="footer-col-6 col-md-3 col-sm-12">
            <h6 class="mb-20">Know more</h6>
            <p class="color-text-paragraph-2 font-xs">Recruitment consultancies specializing in the Gulf region have deep knowledge of local market trends, industry demands, and the regulatory framework...</p>
            <!-- <div class="mt-15"><a class="mr-5" href="#"><img src="assets/imgs/template/icons/app-store.png" alt="joxBox"></a><a href="#"><img src="assets/imgs/template/icons/android.png" alt="joxBox"></a></div> -->
          </div>
        </div>
        <div class="footer-bottom mt-50">
          <div class="row">
            <div class="col-md-6"><span class="font-xs color-text-paragraph">Copyright &copy; {{ now()->year }} UA International. All rights reserved.</span></div>
            <div class="col-md-6 text-md-end text-start">
              <div class="footer-social">
                <a class="font-xs color-text-paragraph" href="{{ route('privacy.policy') }}">Privacy Policy</a>
                <a class="font-xs color-text-paragraph mr-30 ml-30" href="{{ route('terms.conditions') }}">Terms &amp; Conditions</a>
                <!-- <a class="font-xs color-text-paragraph" href="#">Security</a></div> -->
            </div>
          </div>
        </div>
      </div>
    </footer>