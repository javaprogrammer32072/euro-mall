  <!-- Side Nav START -->
  <div class="side-nav">
      <div class="side-nav-inner">
          <ul class="side-nav-menu scrollable">
              <li class="nav-item active">
                  <a class="" href="{{ url('/administrator/dashboard') }}">
                      <span class="icon-holder">
                          <i class="anticon anticon-dashboard"></i>
                      </span>
                      <span class="title">Dashboard</span>
                  </a>
              </li>
              <li class="nav-item dropdown">
                  <a class="dropdown-toggle" href="javascript:void(0);">
                      <span class="icon-holder"><i class=" fas fa-user"></i> </span>
                      <span class="title">Team</span>
                      <span class="arrow"><i class="arrow-icon"></i> </span>
                  </a>
                  <ul class="dropdown-menu">
                      <li class="nav-item ">
                          <a href="{{ url('/administrator/my_teams') }}"><span>My Team</span> </a>
                      </li>
                      <li class="nav-item ">
                          <a href="{{ url('/administrator/my_referrals') }}"><span>My Referral</span> </a>
                      </li>
                      <li class="nav-item ">
                          <a href="{{ url('/administrator/my_trees') }}"><span>My Team Tree</span> </a>
                      </li>
                      <li class="nav-item ">
                          <a href="#"><span>My Team Tree</span> </a>
                      </li>
                  </ul>
              </li>
              {{-- <li class="nav-item">
                  <a class="nav-item" href="{{ url('/administrator/dashboard') }}">
                      <span class="icon-holder">
                          <i class="fas fa-wallet"></i>
                      </span>
                      <span class="title">My Wallet</span>
                  </a>
              </li> --}}
              <li class="nav-item">
                  <a class="nav-item" href="{{ url('/administrator/bonanza/view') }}">
                      <span class="icon-holder">
                          <i class="fas fa-wallet"></i>
                      </span>
                      <span class="title">My Bonanza</span>
                  </a>
              </li>
              {{-- <li class="nav-item">
                  <a class="nav-item" href="{{ url('/administrator/transaction_password') }}">
                      <span class="icon-holder">
                          <i class="fas fa-lock"></i>
                      </span>
                      <span class="title">Change TXN Password</span>
                  </a>
              </li> --}}
              <li class="nav-item dropdown">
                  <a class="dropdown-toggle" href="javascript:void(0);">
                      <span class="icon-holder"><i class="nav-icon fas fa-chart-pie"></i> </span>
                      <span class="title">My Earning</span>
                      <span class="arrow"><i class="arrow-icon"></i> </span>
                  </a>
                  <ul class="dropdown-menu">
                      <li class="nav-item ">
                          <a href="#"><span>Coin History</span> </a>
                      </li>
                      <li class="nav-item ">
                          <a href="{{ url('/administrator/view-rois') }}"><span>ROI Income</span> </a>
                      </li>
                      <li class="nav-item ">
                          <a href="#"><span>Direct Income</span> </a>
                      </li>
                      <li class="nav-item ">
                          <a href="{{ url('/administrator/today-matchings') }}"><span>Matching Income</span> </a>
                      </li>
                      <li class="nav-item ">
                          <a href="#"><span>Team Income</span> </a>
                      </li>
                      <li class="nav-item ">
                          <a href="{{ url('/administrator/view-matchings') }}"><span>Matching Income</span> </a>
                      </li>
                      <li class="nav-item ">
                          <a href="#"><span>Booster Income</span> </a>
                      </li>
                  </ul>

              </li>
              <li class="nav-item dropdown">
                  <a class="dropdown-toggle" href="javascript:void(0);">
                      <span class="icon-holder"><i class="fas fa-chart-line"></i> </span>
                      <span class="title">My History</span>
                      <span class="arrow"><i class="arrow-icon"></i> </span>
                  </a>
                  <ul class="dropdown-menu">
                      <li class="nav-item ">
                          <a href="#"><span>Add Fund List</span> </a>
                      </li>
                      <li class="nav-item ">
                          <a href="{{ url('/administrator/investments') }}"><span>Investment</span> </a>
                      </li>
                      <li class="nav-item ">
                          <a href="{{ url('/administrator/withdraws') }}"><span>Withdraw</span> </a>
                      </li>

                  </ul>

              </li>
          </ul>
      </div>
  </div>
  <!-- Side Nav END -->