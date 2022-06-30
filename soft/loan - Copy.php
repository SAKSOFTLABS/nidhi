
<?php include('user-header.php'); ?>
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <!-- Layout Demo -->
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Registration /</span> Loan</h4>
                      <div class="demo-inline-spacing">
                      <a href="../soft/add-loan.php" class="btn btn-primary">Add Loan</a>
                
                        
                        <!--Add Branch Prompt-->
                        <div class="modal fade" id="largeModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel3">Edit Loan</h5>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                              ></button>
                            </div>
                            <div class="modal-body">  
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
                                      <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <!--END Add Branch Prompt-->
                    <!--Delete Prompt-->
                    <div class="modal fade" id="smallModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-sm" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel2">Delete Loan</h5>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                              ></button>
                            </div>
                            <div class="modal-body">
                            <div class="row">
                                <div class="col mb-3">
                                  <label for="nameSmall" class="form-label">Enter security key to delete this loan.</label>
                                  <div class="form-password-toggle">
                                    <label class="form-label" for="basic-default-password12"></label>
                                    <div class="input-group">
                                      <input
                                        type="password"
                                        class="form-control"
                                        id="basic-default-password12"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="basic-default-password2"
                                      />
                                      <span id="basic-default-password2" class="input-group-text cursor-pointer"
                                      ><i class="bx bx-hide"></i
                                      ></span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                              </button>
                              <button type="button" class="btn btn-danger">Delete</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    <!--END Delete Prompt-->
              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Loan List</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Firm Name</th>
                        <th>Phone Number</th>
                        <th>Users</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Westfort Main Branch</strong></td>
                        <td>987456321</td>
                        <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Lilian Fuller"
                            >
                              <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                            </li>
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Sophia Wilkerson"
                            >
                              <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                            </li>
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Christina Parker"
                            >
                              <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                            </li>
                          </ul>
                        </td>
                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                  data-bs-target="#largeModal"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                  data-bs-target="#smallModal"
                                ><i class="bx bx-trash me-1"></i> Delete</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Olarikkara</strong></td>
                        <td>952368548</td>
                        <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Lilian Fuller"
                            >
                              <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                            </li>
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Sophia Wilkerson"
                            >
                              <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                            </li>
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Christina Parker"
                            >
                              <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                            </li>
                          </ul>
                        </td>
                        <td><span class="badge bg-label-success me-1">Completed</span></td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                  data-bs-target="#largeModal"
                                ><i class="bx bx-edit-alt me-2"></i> Edit</a
                              >
                              <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                  data-bs-target="#smallModal"
                                ><i class="bx bx-trash me-2"></i> Delete</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Pullazhy Branch</strong></td>
                        <td>9645550271</td>
                        <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Lilian Fuller"
                            >
                              <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                            </li>
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Sophia Wilkerson"
                            >
                              <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                            </li>
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Christina Parker"
                            >
                              <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                            </li>
                          </ul>
                        </td>
                        <td><span class="badge bg-label-info me-1">Scheduled</span></td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                  data-bs-target="#largeModal"
                                ><i class="bx bx-edit-alt me-2"></i> Edit</a
                              >
                              <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                  data-bs-target="#smallModal"
                                ><i class="bx bx-trash me-2"></i> Delete</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Peringavu branch</strong>
                        </td>
                        <td>7907764288</td>
                        <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Lilian Fuller"
                            >
                              <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                            </li>
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Sophia Wilkerson"
                            >
                              <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                            </li>
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Christina Parker"
                            >
                              <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                            </li>
                          </ul>
                        </td>
                        <td><span class="badge bg-label-warning me-1">Pending</span></td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                  data-bs-target="#largeModal"
                                ><i class="bx bx-edit-alt me-2"></i> Edit</a
                              >
                              <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                  data-bs-target="#smallModal"
                                ><i class="bx bx-trash me-2"></i> Delete</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr
                    </tbody>
                  </table>
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
            <?php include('user-footer.php'); ?>

