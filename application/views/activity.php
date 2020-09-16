<?php $this->load->view("templates/header");?>
<div class="container">
    <div class="heading">
        <h4 class="total-count text-center">Activity Log</h4>
    </div>
    <div class="activity-table container">
    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">User</th>
            <th scope="col">Activity Type</th>
            <th scope="col">Activity Time</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($activity_log as $log) {?>
            <tr>
            <th scope="row"><?= $log["username"] ?></th>
            <td><?= $log["activity_type"] ?></td>
            <td><?= $log["time_of_activity"] ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <span class="total-count"><?= isset($count) ? $count : 0 ?> rows</span>
    <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <!-- <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li> -->
    <?php 
    $j = 1;
    for($i = 0; $i <= $count ; $i = $i + 5){ ?>
    <li class="page-item"><a class="page-link" href="<?= base_url("activity/".$j)?>"><?= $j++ ?></a></li>
    <!-- <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li> -->
    <?php }?>
  </ul>
</nav>
    </div>
</div>
<?php $this->load->view("templates/footer");?>