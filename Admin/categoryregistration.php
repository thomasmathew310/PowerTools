<?php

include("header.php");

?>


<!-- Content wrapper -->
<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Category Registration</h4>

              <div class="row">
              <div class="col-md-3">
              </div>
                <div class="col-md-6">
                  <div class="card mb-4">
                    <h5 class="card-header">Category Registration</h5>
                    <!-- Account -->
                  
                    <hr class="my-0" />
                    <div class="card-body">
                      <form id="formAccountSettings" method="POST" action="categoryaction.php" enctype="multipart/form-data">
                        <div class="row">
                          <div class="mb-3 col-md-12">
                            <label for="category" class="form-label">Category</label>
                            <input class="form-control" type="text"  name="category" value="" autofocus/>
                          </div>
                         
                          <div class="mb-3 col-md-12">
                            <label for="description" class="form-label">Description</label>
                            <input class="form-control" type="text" name="description"  value="" />
                          </div>
                        <input type="submit" class="btn btn-danger deactivate-account" name="submit">
                        </div>
                      </form>
                    </div>
                   </div>
                  </div>
                </div>
              </div>
            </div>


<?php
include("footer.php");
?>