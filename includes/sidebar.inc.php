  <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
          <div class="sidebar-brand-text mx-3">WC <sup>LOAN</sup></div>
      </a>

      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
          <a class="nav-link" href="index.php">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
          System Users
      </div>
      <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
              <i class="fas fa-fw fa-cog"></i>
              <span>User</span>
          </a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                  <h6 class="collapse-header">Users Info:</h6>
                  <a class="collapse-item" href="addUser.php">Add User</a>
                  <a class="collapse-item" href="users.php">View User</a>
              </div>
          </div>
      </li>

      <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
              <i class="fas fa-fw fa-wrench"></i>
              <span>Members</span>
          </a>
          <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                  <h6 class="collapse-header">Member Info:</h6>
                  <a class="collapse-item" href="addMember.php">Add Member</a>
                  <a class="collapse-item" href="member.php">View Member</a>
              </div>
          </div>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
          LOAN DETAILS
      </div>
      <li class="nav-item">
          <a class="nav-link" href="loan.php">
              <i class="fas fa-fw fa-chart-area"></i>
              <span>Refunded Loan</span></a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="missedPayment.php">
              <i class="fas fa-fw fa-chart-area"></i>
              <span>Missed Payment</span></a>
      </li>

      <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagess" aria-expanded="true" aria-controls="collapsePages">
              <i class="fas fa-fw fa-folder"></i>
              <span>Payments</span>
          </a>
          <div id="collapsePagess" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                  <h6 class="collapse-header">Payment Info:</h6>
                  <a class="collapse-item" href="addPayment.php">Add Payment</a>
                  <a class="collapse-item" href="payment.php">View Payment</a>
              </div>
          </div>
      </li>

      <li class="nav-item">
          <a class="nav-link" href="wallet.php">
              <i class="fas fa-fw fa-chart-area"></i>
              <span>Transaction</span></a>
      </li>

      <hr class="sidebar-divider">
      <div class="sidebar-heading">
          SETTINGS
      </div>
      <li class="nav-item">
          <a class="nav-link" href="editUser.php">
              <i class="fas fa-fw fa-chart-area"></i>
              <span>Change Password</span></a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="logout.php">
              <i class="fas fa-fw fa-chart-area"></i>
              <span>Logout</span></a>
      </li>

      <hr class="sidebar-divider d-none d-md-block">
      <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

  </ul>
