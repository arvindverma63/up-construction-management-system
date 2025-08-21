<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content rounded-3 shadow-lg">

      <!-- Modal Header -->
      <div class="modal-header border-0 pb-0">
        <h5 class="modal-title mx-auto text-center w-100 p-4">
          <i class="fa fa-user-circle text-primary mr-2"></i> Welcome
        </h5>
        <button type="button" class="close position-absolute right-0 p-4 mr-3"
                data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="fa fa-close"></span>
        </button>
      </div>

      <!-- Tabs -->
      <ul class="nav nav-pills nav-fill px-3 mt-3 mb-2" id="authTabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="login-tab" data-toggle="tab" href="#loginTab"
             role="tab" aria-controls="loginTab" aria-selected="true">
            <i class="fa fa-sign-in mr-1"></i> Login
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="register-tab" data-toggle="tab" href="#registerTab"
             role="tab" aria-controls="registerTab" aria-selected="false">
            <i class="fa fa-user-plus mr-1"></i> Register
          </a>
        </li>
      </ul>

      <!-- Modal Body -->
      <div class="modal-body px-4 py-4">

        <div class="tab-content" id="authTabsContent">

          <!-- Login Tab -->
          <div class="tab-pane fade show active" id="loginTab" role="tabpanel" aria-labelledby="login-tab">
            <form>
              <div class="form-group mb-4">
                <input type="email" class="form-control rounded-pill" id="loginEmail" placeholder="Email" required>
              </div>
              <div class="form-group mb-4">
                <input type="password" class="form-control rounded-pill" id="loginPassword" placeholder="Password" required>
              </div>
              <button type="submit" class="btn btn-primary btn-block rounded-pill py-2 mb-3 p-3">Login</button>

              <div class="text-center my-3">or</div>

              <!-- Google Login -->
              <button type="button" class="btn btn-light border p-3 w-100 rounded-pill d-flex align-items-center justify-content-center py-2">
                <img src="https://www.svgrepo.com/show/355037/google.svg" width="20" class="mr-2" alt="Google">
                Continue with Google
              </button>
            </form>
          </div>

          <!-- Register Tab -->
          <div class="tab-pane fade" id="registerTab" role="tabpanel" aria-labelledby="register-tab">
            <form>
              <div class="form-group mb-4">
                <input type="text" class="form-control rounded-pill" id="registerName" placeholder="Full Name" required>
              </div>
              <div class="form-group mb-4">
                <input type="email" class="form-control rounded-pill" id="registerEmail" placeholder="Email" required>
              </div>
              <div class="form-group mb-4">
                <input type="password" class="form-control rounded-pill" id="registerPassword" placeholder="Password" required>
              </div>
              <div class="form-group mb-4">
                <select class="form-control rounded-pill" id="registerRole" required>
                  <option value="">Register as...</option>
                  <option value="user">User</option>
                  <option value="contractor">Contractor</option>
                </select>
              </div>
              <button type="submit" class="btn btn-success btn-block rounded-pill py-2 p-3">Register</button>
            </form>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>

<style>
  /* Improve look */
  .modal-content {
    border-radius: 1rem;
    padding-bottom: 10px;
  }
  .nav-pills .nav-link {
    border-radius: 50px;
    margin: 0 5px;
    font-weight: 500;
    padding: 10px 18px;
  }
  .form-control {
    padding: 12px 20px;
    font-size: 15px;
  }
</style>
