
    <div class="sidebar">
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-mini">
            Hai
          </a>
          <a href="javascript:void(0)" class="simple-text logo-normal">
            <?= $this->session->userdata('name'); ?> !
          </a>
        </div>
        <ul class="nav">
          <li class="<?= $dashboard_class; ?>">
            <a href="<?php echo base_url() . 'Dashboard' ?>">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Dashboard</p> 
            </a>
          </li>
        </ul>
      </div>
    </div>