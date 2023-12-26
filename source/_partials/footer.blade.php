<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
  <!-- Footer -->
  <footer class="bg-dark text-white py-5">
    <div class="container" style="text-align: center;">
      <h4 class="text-uppercase mb-4" style="align: center">Contact Details</h4>
      <div class="row">
        <div class="col-lg-6">
          <div class="d-flex flex-column">
            <div class="mb-3">
              <h5>USA, Texas</h5>
              <p class="text-white">
                827 Overdell Dr Sugarland TX 77479<br />
                +18015574513
              </p>
            </div>
          </div>
        </div>
        
        <div class="col-lg-6">
          <div class="d-flex flex-column ">
            <div class="mb-3">
              <h4>Email</h4>
              <p><a href="mailto:info@itretina.com" class="text-white">info@itretina.com</a></p>
            </div>
          </div>
        </div>

      </div>
     
      <!--</div>-->
      <!--</div>-->
    </div>
    <div class="row mt-4">
      <div class="col text-center bg-white text-dark">
        <p class="mb-0">Copyright © {{ $page->year }} ITRetina. All rights reserved.</p>
      </div>
    </div>
  </footer>
</html>