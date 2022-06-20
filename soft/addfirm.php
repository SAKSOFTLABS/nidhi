
<?php include('header.php'); ?>
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <!-- Layout Demo -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4" id="addfirmdiv">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Add Branch</h5>
                      <small class="text-muted float-end">Nidhi Soft</small>
                    </div>
                    <div class="card-body">
                      <form>
                        <div class="row g-2" style="padding-bottom:1%">
                            <div class="col mb-0">
                              <label for="nameLarge" class="form-label">Firm Name</label>
                              <input type="text" id="nameLarge" class="form-control" placeholder="Firm Name" />
                            </div>
                            <div class="col mb-0">
                              <label for="nameLarge" class="form-label">Address 1</label>
                              <input type="text" id="nameLarge" class="form-control" placeholder="Address 1" />
                            </div>
                        </div>
                        <div class="row g-2" style="padding-bottom:1%">
                            <div class="col mb-0">
                              <label for="nameLarge" class="form-label">Address 2</label>
                              <input type="text" id="nameLarge" class="form-control" placeholder="Address 2" />
                            </div>
                            <div class="col mb-0">
                              <label for="nameLarge" class="form-label">Address 3</label>
                              <input type="text" id="nameLarge" class="form-control" placeholder="Address 3" />
                            </div>
                        </div>
                        <div class="row g-2" style="padding-bottom:1%">
                            <div class="col mb-0">
                            <label for="nameLarge" class="form-label">Country</label>
                              <input type="text" id="nameLarge" class="form-control" placeholder="Country" />
                            </div>
                            <div class="col mb-0">
                            <label for="nameLarge" class="form-label">State</label>
                              <input type="text" id="nameLarge" class="form-control" placeholder="State" />
                            </div>
                        </div>
                          <div class="row g-2" style="padding-bottom:1%">
                            <div class="col mb-0">
                            <label for="nameLarge" class="form-label">District</label>
                              <input type="text" id="nameLarge" class="form-control" placeholder="District" />
                            </div>
                            <div class="col mb-0">
                            <label for="nameLarge" class="form-label">Location</label>
                              <input type="text" id="nameLarge" class="form-control" placeholder="Location" />
                            </div>
                              </div>
                              <div class="row g-2" style="padding-bottom:1%">
                                <div class="col mb-0">
                                <label for="nameLarge" class="form-label">Pin code</label>
                                  <input type="text" id="nameLarge" class="form-control" placeholder="Pin code" />
                                </div>
                                <div class="col mb-0">
                                <label for="nameLarge" class="form-label">Website</label>
                                  <input type="text" id="nameLarge" class="form-control" placeholder="Website" />
                                </div>
                              </div><div class="row g-2" style="padding-bottom:1%">
                                <div class="col mb-0">
                                <label for="nameLarge" class="form-label">Email Address</label>
                                  <input type="text" id="nameLarge" class="form-control" placeholder="Email Address" />
                                </div>
                                <div class="col mb-0">
                                <!-- <div class="form-check form-switch mb-2"> -->
                                  <!-- <div style="padding-top:2.5rem;"> -->
                                  <label for="defaultSelect" class="form-label">Active/Deactivate</label>
                                    <select id="defaultSelect" class="form-select">
                                      <option value="" disabled selected hidden></option>
                                      <option value="1">Activate</option>
                                      <option value="2">Deactivate</option>
                                    </select>
                                  <!-- </div> -->
                                </div>
                              </div>
                          <div class="row justify-content-inherit" style="padding-top:1.5rem;">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Save</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- <div class="layout-demo-info">
                  <h4>Layout container</h4>
                  <p>Container layout sets a <code>max-width</code> at each responsive breakpoint.</p>
                </div>
              </div>
              <!--/ Layout Demo -->
            </div>
            <!-- / Content -->

            <?php include('footer.php'); ?>

