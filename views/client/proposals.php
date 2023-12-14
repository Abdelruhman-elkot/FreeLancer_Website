<?php
require 'c:\xampp\htdocs\SW1_Project\include\headerProfile.php';
include_once 'c:\xampp\htdocs\SW1_Project\models\ProposalClass.php';
$prop = new Proposal();
if($_SESSION['username'] && $_SESSION['userRole'] === "Client")
{
?>
        <nav id="navbar" class="nav-menu navbar">
          <ul>
            <li><a href="<?php echo APPURL;?>/views/client/overview.php" class="nav-link scrollto"><i class="bx bx-home"></i><span>Overview</span></a></li>
            <li><a href="<?php echo APPURL;?>/views/client/edit_profile.php" class="nav-link scrollto"><i class="bx bx-user"></i><span>Edit Profile</span></a></li>
            <li><a href="<?php echo APPURL;?>/views/client/change_password.php" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Change Password</span></a></li>
            <li><a href="<?php echo APPURL;?>/views/client/create_post.php" class="nav-link scrollto"><i class="bx bx-file-blank"></i><span>Create Post</span></a></li>
            <li><a href="<?php echo APPURL;?>/views/client/view_posts.php" class="nav-link scrollto"><i class="bx bx-file-blank"></i><span>MY Posts</span></a></li>
            <li><a href="#proposals" class="nav-link scrollto active"><i class="bx bx-file-blank"></i><span>Proposals</span></a></li>
            <li><a href="<?php echo APPURL;?>/controllers/LogoutController.php" class="nav-link scrollto"><i class="bx bx-log-out"></i><span>Logout</span></a></li>
          </ul>
        </nav>
      </div>
      
    </header>

    <main id="main">

        <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
            <symbol id="house-door-fill" viewBox="0 0 16 16">
              <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
            </symbol>
          </svg>
          
        <div class="container my-5" style="padding-right: 87px;">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-custom overflow-hidden text-center bg-body-tertiary border rounded-3">
                <li class="breadcrumb-item">
                  <a class="link-body-emphasis fw-semibold text-decoration-none" href="<?php echo APPURL;?>/index.php">
                    <svg class="bi" width="16" height="16"><use xlink:href="#house-door-fill"></use></svg>
                    Home
                  </a>
                </li>
                <li class="breadcrumb-item">
                  <a class="link-body-emphasis fw-semibold text-decoration-none" href="<?php echo APPURL;?>/views/client/overview.php">Profile</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Proposals
                </li>
              </ol>
            </nav>
          </div>

          <section id="proposals" style = "padding: 25px 85px;">
            <?php
              $result = $prop->showProposals();
            ?>
            <div class="row">
              <div class="col">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title mb-4 d-inline">Proposals</h5>

                    <table class="table mt-3">
                      <thead>
                        <tr>
                          <th scope="col">FreelancerID</th>
                          <th scope="col">Post</th>
                          <th scope="col">CV</th>
                          <th scope="col">ProposalDate</th>
                          <th scope="col"></th>
                          <th scope="col">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        if(!empty($result)){
                         foreach($result as $row) : ?>
                          <tr>
                            <td><?php echo $row['FreelancerID'];?></td>
                            <td><a href="<?php echo APPURL;?>/views/client/view_posts.php?id=<?php echo $row['PostID'];?>" class="btn btn-success text-center">Show Post</a></td>
                            <td><?php echo $row['CV'];?></td>
                            <td><?php echo $row['ProposalDate'];?></td>
                            <td>
                              <form action="<?php echo APPURL ?>/controllers/ClientController.php" method="POST">
                                <button type="submit" name="accept_prop" value="<?= $row["ProposalID"]; ?>" class="btn btn-success text-center">Accept</button>
                              </form>
                            </td>
                            <td>
                              <form action="<?php echo APPURL ?>/controllers/ClientController.php" method="POST">
                                <button type="submit" name="refuse_prop" value="<?= $row["ProposalID"]; ?>" class="btn btn-danger text-center">Refuse</button>
                              </form>
                            </td>
                          </tr>
                        <?php 
                        endforeach;
                        } else { ?>
                        <div class="bg-success text-white">You Don't have any Proposals just yet</div>
                        <?php }?>
                      </tbody>
                      </table>
                  </div>
                </div>
              </div>
            </div>
          </section>
    </main>




<?php
require 'c:\xampp\htdocs\SW1_Project\include\footerProfile.php';
}
else {
  header("Location:../../index.php");
}
?>