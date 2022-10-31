<div class="row">
    <div class="col-lg-12">
        <div class="dash-user-area">
            <div class="dash-left-user-area d-flex flex-wrap align-items-center">
                <div class="user-icon badge-wrapper">
                    <img class="ppic" src="upload/<?php echo $row->imagename?>" alt="<?php echo $row->uname ?>">
                    
                </div>
                <div class="user-details d-flex flex-wrap align-items-center justify-content-between">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent p-0 w-100">
                        <h3 class="title w-auto user-name">
                            <?php echo $row->uname ?>
                            <span>
                                <img class="user-badge" src="../assets/images/user/badge/veri.png" alt="badge">
                            </span>
                        </h3>
                        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href=".">Dashboard</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarNavDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Miner </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarNavDropdown">
                                        <a class="dropdown-item" href="mine">Mine Engine</a>
                                        <a class="dropdown-item" href="mine-log">Mine Log</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarNavDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Withdraw </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarNavDropdown">
                                        <a class="dropdown-item" href="withdrawal">Withdraw Funds</a>
                                        <a class="dropdown-item" href="history">Withdraw Log</a>
                                        <a class="dropdown-item" href="cashout">Self Cashout</a>
                                        <a class="dropdown-item" href="codes">All Codes</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="referral/log">Referrals</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="transfer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Transfer </a>
                                    <div class="dropdown-menu" aria-labelledby="transfer">
                                        <a class="dropdown-item" href="transfer">Transfer PU</a>
                                        <a class="dropdown-item" href="transfer-log">Transfer Log</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="buy-sell/home">Buy/Sell</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="profile-setting">Profile</a>
                                        <a class="dropdown-item" href="tick">Support Tickets</a>
                                        <a class="dropdown-item" href="twofactor">2FA Security</a>
                                        <a class="dropdown-item" href="change-password">Change Password</a>
                                        <a class="dropdown-item" href="logout">Logout</a>
                                    </div>
                                </li>
                                <li class="nav-item upgrade">
                                    <a class="nav-link" href="upgrade">Upgrade</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>