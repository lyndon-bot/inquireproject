<?php 
  include "../Functions/innerheader.php"; 
  include "../Functions/query.php";
  $UID = $_SESSION['U_id'];
  $user = fetch("SELECT * FROM users WHERE U_id = '$UID'");
  
?>
<div class="container">
<script src='test.js'></script>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
<link rel='stylesheet prefetch' href='../Style/css/test.css'>
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Message</h4>
      </div>
      <div class="modal-body">
        <label class="col-lg-2 control-label">Subject:</label><p id='Subject'></p><br>
        <label class="col-lg-2 control-label">Message:</label><p id='Message'></p><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<div class="mail-box">
                  
                  <aside class="sm-side">
                      <div class="user-head">
                          <a class="inbox-avatar" href="javascript:;">
                              <img style="width:64px; height:60px;" src="../Functions/<?php echo $user['Profile_Pic'];?>">
                          </a>
                          <div class="user-name">
                              <h5><a href="#"><?php echo $user['F_name']. " " . $user['L_name'];?></a></h5>
                              <span><a href="#"><?php echo $user['Email'];?></a></span>
                          </div>
                          <a class="mail-dropdown pull-right" href="javascript:;">
                              <i class="fa fa-chevron-down"></i>
                          </a>
                      </div>
                      <div class="inbox-body">
                          <a href="#myModal" data-toggle="modal"  title="Compose"    class="btn btn-compose">
                              Compose
                          </a>
                          <!-- Modal -->
                          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                          <h4 class="modal-title">Compose</h4>
                                      </div>
                                      <div class="modal-body">
                                          <form role="form" method='POST' action='../Functions/sendMsg.php' class="form-horizontal">
                                              <div class="form-group">
                                                  <label class="col-lg-2 control-label">To</label>
                                                  <div class="col-lg-10">
                                                      <select value='4' class="form-control" id="sel1" name='btn'>
                                                        <?php 
                                                        $users = fetch_all("SELECT * FROM users WHERE U_id <> '$UID'");
                                                        foreach($users as $users){
                                                          echo "<option value='".$users['U_id']."'>".$users['F_name']." ".$users['L_name'] ."</option>";
                                                        }
                                                        ?>
                                                      </select>
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="col-lg-2 control-label">Subject</label>
                                                  <div class="col-lg-10">
                                                      <input name='subj' type="text" placeholder="" id="inputPassword1" class="form-control">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="col-lg-2 control-label">Message</label>
                                                  <div class="col-lg-10">
                                                      <textarea name='msg' rows="10" cols="30" class="form-control" id="" name=""></textarea>
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <div class="col-lg-offset-2 col-lg-10">
                                                      <span class="btn green fileinput-button">
                                                        <i class="fa fa-plus fa fa-white"></i>
                                                        <span>Attachment</span>
                                                        <input type="file" name="files[]" multiple="">
                                                      </span>
                                                      <button class="btn btn-send" type="submit">Send</button>
                                                  </div>
                                              </div>
                                          </form>
                                      </div>
                                  </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
                          </div><!-- /.modal -->
                      </div>
                      <ul class="inbox-nav inbox-divider">
                          <li id='inboxstatus' class="active">
                              <a href="#" onclick='displayInbox()'><i class="fa fa-inbox"></i> Inbox <span class="label label-success pull-right"><?php echo mysqli_num_rows(query("SELECT * FROM inbox where U_id2 = '$UID'"))?></span></a>

                          </li>
                          <li id='sentstatus'>
                              <a href="#" onclick='displaySent()'><i class="fa fa-envelope-o"></i> Sent Mail <span class="label label-danger pull-right"><?php echo mysqli_num_rows(query("SELECT * FROM inbox where U_id1 = '$UID'"))?></span></a>
                          </li>
                          <li>
                              <a href="#"><i class=" fa fa-trash-o"></i> Trash</a>
                          </li>
                      </ul>
                      <div class="inbox-body text-center">
                          <div class="btn-group">
                              <a class="btn mini btn-primary" href="javascript:;">
                                  <i class="fa fa-plus"></i>
                              </a>
                          </div>
                          <div class="btn-group">
                              <a class="btn mini btn-info" href="profile.php">
                                  <i class="fa fa-cog"></i>
                              </a>
                          </div>
                      </div>

                  </aside>
                  <aside class="lg-side">
                      <div class="inbox-head">
                          <h3 id='titlehead'>Inbox</h3>
                          <form action="#" class="pull-right position">
                              <div class="input-append">
                                  <input type="text" class="sr-input" placeholder="Search Mail">
                                  <button class="btn sr-btn" type="button"><i class="fa fa-search"></i></button>
                              </div>
                          </form>
                      </div>
                      <div class="inbox-body">
                             <div class="btn-group">
                                 <a href="test.php" class="btn mini tooltips">
                                     <i class=" fa fa-refresh"></i>
                                 </a>
                             </div>
                             
                             
                         <div id='inbox'>
                          <table class="table table-inbox table-hover">
                            <tbody>
                              <?php
                               $messages = fetch_all("SELECT * FROM inbox INNER JOIN users ON inbox.U_id1 = users.U_id AND inbox.U_id2 = $UID ORDER BY inbox.I_id ASC");
                                foreach($messages as $message){
                                    echo "<tr class=''>
                                            <td class='inbox-small-cells'><button href='#myModal2' data-toggle='modal' class='view btn btn-default' style='background-color: #d01d3a' value='". $message['I_id'] ."'><i style='color: #ecf0f1' class='glyphicon glyphicon-fullscreen'></i></button></td>
                                            <td class='inbox-small-cells'>".$message['F_name'] ." ". $message['L_name']."</td>
                                            <td class='view-message dont-show'>".$message['Subj']."</td>
                                            <td class='view-message view-message'>".$message['DATE']."</td>
                                            <td class='view-message inbox-small-cells'></td>
                                            <td class='view-message text-right'><button href='#myModal' data-toggle='modal' onclick='' class='Compose btn btn-success' value='". $message['U_id'] ."' ><i class='glyphicon glyphicon-pencil'></i></button></td>
                                          </tr>";
                                } 
                            
                              ?>
                            </tbody>
                          </table>
                          </div>
                          <div id='sentMessage' style='display: none;'>
                          <table class="table table-inbox table-hover">
                            <tbody>
                              <?php
                               $messages = fetch_all("SELECT * FROM inbox INNER JOIN users ON inbox.U_id2 = users.U_id AND inbox.U_id1 = '$UID' ORDER BY inbox.I_id ASC");
                                foreach($messages as $message){
                                    echo "<tr class=''>
                                            <td class='inbox-small-cells'><button href='#myModal2' data-toggle='modal' class='view btn btn-default' style='background-color: #d01d3a' value='". $message['I_id'] ."'><i style='color: #ecf0f1' class='glyphicon glyphicon-fullscreen'></i></button></td>
                                            <td class='inbox-small-cells'>".$message['F_name'] ." ". $message['L_name']."</td>
                                            <td class='view-message dont-show'>".$message['Subj']."</td>
                                            <td class='view-message view-message'>".$message['DATE']."</td>
                                            <td class='view-message inbox-small-cells'></td>
                                            <td class='view-message text-right'><form method='post' action='../Functions/deleteMsg.php'><button value='". $message['I_id'] ."' name='btn' class='btn btn-danger'><i class=' fa fa-trash-o'></i></button></form></td>
                                          </tr>";
                                } 
                            
                              ?>
                            </tbody>
                          </table>
                          </div>
                      </div>
                  </aside>
              </div>
</div>
 