<html lang="en">
  
<!-- Mirrored from themepixels.me/bracket/app/cards.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Jan 2018 10:32:33 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">


    <title>Card UI Template Design - Bracket Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="./lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="./lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="./lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="./lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">
    <link href="./lib/highlightjs/github.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="./css/bracket.css">
    <link rel="stylesheet" href="./css/custom.css">
    
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href="#"><span>[</span>bracket<span>]</span></a></div>
    <div class="br-sideleft overflow-y-auto">
      <label class="sidebar-label pd-x-15 mg-t-20">Navigation</label>
      <div class="br-sideleft-menu">
        <a href="index-2.php" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
     
      
        <a href="#" class="br-menu-link active show-sub">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
            <span class="menu-item-label">Manage Order</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
          <li class="nav-item"><a href="accordion.php" class="nav-link">Order List</a></li>
          <li class="nav-item"><a href="alerts.php" class="nav-link">Current Delivery Order</a></li>
          <li class="nav-item"><a href="buttons.php" class="nav-link">Failed Order List</a></li>
          
        </ul>

        <a href="#" class="br-menu-link ">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
            <span class="menu-item-label">User</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
          <li class="nav-item"><a href="userList.php" class="nav-link">User Detail</a></li>
          <li class="nav-item"><a href="alerts.php" class="nav-link">Current Delivery Order</a></li>
          <li class="nav-item"><a href="buttons.php" class="nav-link">Failed Order List</a></li>
        </ul>
       
        <a href="#" class="br-menu-link ">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
            <span class="menu-item-label">Manage Category</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
          <li class="nav-item"><a href="category.php" class="nav-link">Category List</a></li>
        </ul>

        <a href="#" class="br-menu-link ">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
            <span class="menu-item-label">Manage Product</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
          <li class="nav-item"><a href="addProduct.php" class="nav-link">Cakes</a></li>
          <li class="nav-item"><a href="alerts.php" class="nav-link">Free Cakes</a></li>
          <li class="nav-item"><a href="buttons.php" class="nav-link">Flowers</a></li> 
        </ul>

        <a href="#" class="br-menu-link ">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
            <span class="menu-item-label">Manage Coupon</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
          <li class="nav-item"><a href="accordion.php" class="nav-link">Coupon</a></li> 
        </ul>

        <a href="#" class="br-menu-link ">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
            <span class="menu-item-label">Manage NewsLetter</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
          <li class="nav-item"><a href="accordion.php" class="nav-link">News Letter</a></li>
        </ul>

       
        
      </div><!-- br-sideleft-menu -->

     

      <br>
    </div><!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="br-header">
      <div class="br-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href="#"><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href="#"><i class="icon ion-navicon-round"></i></a></div>
        <!-- <div class="input-group hidden-xs-down wd-170 transition">
          <input id="searchbox" type="text" class="form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-secondary" type="button"><i class="fa fa-search"></i></button>
          </span>
        </div> -->
        <!-- input-group -->
      </div><!-- br-header-left -->
      <div class="br-header-right">
        <nav class="nav">
         
          <div class="dropdown">
            <a href="#" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
              <i class="icon ion-ios-bell-outline tx-24"></i>
              <!-- start: if statement -->
              <span class="square-8 bg-danger pos-absolute t-15 r-5 rounded-circle"></span>
              <!-- end: if statement -->
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-300 pd-0-force">
              <div class="d-flex align-items-center justify-content-between pd-y-10 pd-x-20 bd-b bd-gray-200">
                <label class="tx-12 tx-info tx-uppercase tx-semibold tx-spacing-2 mg-b-0">Notifications</label>
                <a href="#" class="tx-11">Mark All as Read</a>
              </div><!-- d-flex -->

              <div class="media-list">
                <!-- loop starts here -->
                <a href="#" class="media-list-link read">
                  <div class="media pd-x-20 pd-y-15">
                    <img src="./img/img8.jpg" class="wd-40 rounded-circle" alt="">
                    <div class="media-body">
                      <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                      <span class="tx-12">October 03, 2017 8:45am</span>
                    </div>
                  </div><!-- media -->
                </a>
                <!-- loop ends here -->
                <a href="#" class="media-list-link read">
                  <div class="media pd-x-20 pd-y-15">
                    <img src="./img/img9.jpg" class="wd-40 rounded-circle" alt="">
                    <div class="media-body">
                      <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The Social Network</strong></p>
                      <span class="tx-12">October 02, 2017 12:44am</span>
                    </div>
                  </div><!-- media -->
                </a>
                <a href="#" class="media-list-link read">
                  <div class="media pd-x-20 pd-y-15">
                    <img src="./img/img10.jpg" class="wd-40 rounded-circle" alt="">
                    <div class="media-body">
                      <p class="tx-13 mg-b-0 tx-gray-700">20+ new items added are for sale in your <strong class="tx-medium tx-gray-800">Sale Group</strong></p>
                      <span class="tx-12">October 01, 2017 10:20pm</span>
                    </div>
                  </div><!-- media -->
                </a>
                <a href="#" class="media-list-link read">
                  <div class="media pd-x-20 pd-y-15">
                    <img src="./img/img5.jpg" class="wd-40 rounded-circle" alt="">
                    <div class="media-body">
                      <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                      <span class="tx-12">October 01, 2017 6:08pm</span>
                    </div>
                  </div><!-- media -->
                </a>
                <div class="pd-y-10 tx-center bd-t">
                  <a href="#" class="tx-12"><i class="fa fa-angle-down mg-r-5"></i> Show All Notifications</a>
                </div>
              </div><!-- media-list -->
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
          <div class="dropdown">
            <a href="#" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name hidden-md-down">admin</span>
              <img src="./img/img1.jpg" class="wd-32 rounded-circle" alt="">
              <span class="square-10 bg-success"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href="#"><i class="icon ion-ios-person"></i> Edit Profile</a></li>
                <li><a href="#"><i class="icon ion-ios-gear"></i> Settings</a></li>
                <li><a href="#"><i class="icon ion-ios-download"></i> Downloads</a></li>
                <li><a href="#"><i class="icon ion-ios-star"></i> Favorites</a></li>
                <li><a href="#"><i class="icon ion-ios-folder"></i> Collections</a></li>
                <li><a href="#"><i class="icon ion-power"></i> Sign Out</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
 
      </div><!-- br-header-right -->
    </div><!-- br-header -->
    <!-- ########## END: HEAD PANEL ########## -->



    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="index-2.php">Home</a>
          <a class="breadcrumb-item" href="#">Manage Category</a>
          <span class="breadcrumb-item active"> CategoryList</span>
        </nav>
      </div><!-- br-pageheader -->
      <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 style="display:inline" class="tx-gray-800 mg-b-5">Food Category</h4><span style="display:inline">List</span>
        
        <!-- <button type="button" class="pull-right btn btn-primary">Add Category</button> -->
        
        <!-- <p class="mg-b-0">A card is a flexible and extensible content container that includes options for headers and footers, etc.</p> -->
      </div>

      <div class="br-pagebody">
        <!-- <div class="br-section-wrapper"> -->

            <div class="panel panel-primary">
                <div class="panel-heading">Add  Product</div>

                <div class="panel-body">
                    <div class="row mg-t-80">
               
                        <div class="col-xl-12 mg-t-20 mg-xl-t-0">
                          <div class="form-layout form-layout-5">
                            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Right Label Alignment</h6>
                            <p class="mg-b-30 tx-gray-600">A basic form where labels are aligned in right.</p>
                            <div class="row">
                                    <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span>Select Category:</label>
                                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                            <select class="form-control select2" data-placeholder="Choose country">
                                                    <option label="Choose country"></option>
                                                    <option value="USA">United States of America</option>
                                                    <option value="UK">United Kingdom</option>
                                                    <option value="China">China</option>
                                                    <option value="Japan">Japan</option>
                                            </select>
                                    </div>

                              <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> Firstname:</label>
                              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" class="form-control" placeholder="Enter firstname">
                              </div>
                            </div><!-- row -->
                            <div class="row mg-t-20">
                              <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> Lastname:</label>
                              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" class="form-control" placeholder="Enter lastname">
                              </div>
                            </div>
                            <div class="row mg-t-20">
                              <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> Email:</label>
                              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" class="form-control" placeholder="Enter email address">
                              </div>
                            </div>
                            <div class="row mg-t-20">
                              <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> Address:</label>
                              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <textarea rows="2" class="form-control" placeholder="Enter your address"></textarea>
                              </div>
                            </div><!-- row -->
                            <div class="row mg-t-30">
                              <div class="col-sm-8 mg-l-auto">
                                <div class="form-layout-footer">
                                  <button class="btn btn-info">Submit Form</button>
                                  <button class="btn btn-secondary">Cancel</button>
                                </div><!-- form-layout-footer -->
                              </div><!-- col-8 -->
                            </div>
                          </div><!-- form-layout -->
                        </div><!-- col-6 -->
                      </div><!-- row -->
                </div>
              </div>




        <!-- </div>br-section-wrapper -->
      </div><!-- br-pagebody -->

      <!-- <footer class="br-footer">
        <div class="footer-left">
          <div class="mg-b-2">Copyright &copy; 2017. Bracket. All Rights Reserved.</div>
          <div>Attentively and carefully made by ThemePixels.</div>
        </div>
        <div class="footer-right d-flex align-items-center">
          <span class="tx-uppercase mg-r-10">Share:</span>
          <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/bracket/intro"><i class="fa fa-facebook tx-20"></i></a>
          <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Bracket,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/bracket/intro"><i class="fa fa-twitter tx-20"></i></a>
        </div>
      </footer> -->
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="./lib/jquery/jquery.js"></script>
    <script src="./lib/popper.js/popper.js"></script>
    <script src="./lib/bootstrap/bootstrap.js"></script>
    <script src="./lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="./lib/moment/moment.js"></script>
    <script src="./lib/jquery-ui/jquery-ui.js"></script>
    <script src="./lib/jquery-switchbutton/jquery.switchButton.js"></script>
    <script src="./lib/peity/jquery.peity.js"></script>
    <script src="./lib/highlightjs/highlight.pack.js"></script>

    <script src="./js/bracket.js"></script>
  </body>


</html>
