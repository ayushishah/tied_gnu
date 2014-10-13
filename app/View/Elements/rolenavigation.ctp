<?php
echo $this->Html->css('rolenavigation');
?><br>
<div class="navbar navbar-default navbar-static-top" style="background-color:#fff;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        
        </div>
        
        <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li><?php echo $this->Html->link(__("Home"),array('plugin'=>false,'controller' => 'users', 'action' => 'dashboard')) ?></li>
        <li class="dropdown menu-large">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">ST<b class="caret"></b></a>        
        <ul class="dropdown-menu megamenu row">
          <li class="col-sm-3">
            <ul>
              <?php if(Auth::hasRoles(['developer'])) {?>
              <li class="dropdown-header">Manage Super Admins</li>
              <li><?php echo $this->Html->link(__("New Super Admin",true),array('plugin'=>false,'controller' => 'manageroles', 'action' => 'manage_superadmin')) ?></li>
              <li><?php echo $this->Html->link(__("View Super Admins",true),array('plugin'=>false,'controller' => 'manageroles', 'action' => 'view_superadmin'))  ?></li>
              <li class="divider"></li>
              <?php } ?>


              <?php if(Auth::hasRoles(['superadmin'])) {?>
              <li class="dropdown-header">Manage Admin</li>
              <li><?php echo $this->Html->link(__("New Admin",true),array('plugin'=>false,'controller' => 'manageroles', 'action' => 'manage_admin')) ?></li>
              <?php } ?>

              <?php  if(Auth::hasRoles(['developer'])) {?>
              <li class="dropdown-header">Manage Admin</li>
              <li><?php echo $this->Html->link(__("New Admin",true),array('plugin'=>false,'controller' => 'manageroles', 'action' => 'manage_dev_admin')) ?></li>
              <?php } ?>

              <?php if(Auth::hasRoles(['developer','superadmin'])) {?>
              <li><?php echo $this->Html->link(__("View Admins",true),array('plugin'=>false,'controller' => 'manageroles', 'action' => 'view_admin'))  ?></li>
              <li class="divider"></li>
              <?php } ?>



               <?php if(Auth::hasRoles(['developer'])) {?>
              <li class="dropdown-header">Manage Department Coordinator</li>
              <li><?php echo $this->Html->link(__("New Department Coordinator",true),array('plugin'=>false,'controller' => 'manageroles', 'action' => 'manage_dev_coordinator')) ?></li>
              <?php } ?>

              <?php if(Auth::hasRoles(['superadmin','stadmin'])) {?>
              <li class="dropdown-header">Manage Department Coordinator</li>
              <li><?php echo $this->Html->link(__("New Department Coordinator",true),array('plugin'=>false,'controller' => 'manageroles', 'action' => 'manage_super_coordinator')) ?></li>
              <?php } ?>

              <?php if(Auth::hasRoles(['developer','superadmin','stadmin'])) {?>
              <li><?php echo $this->Html->link(__("View Department Coordinator",true),array('plugin'=>false,'controller' => 'manageroles', 'action' => 'view_coordinator'))  ?></li>
              <li class="divider"></li>
              <?php } ?>

              <?php if(Auth::hasRoles(['developer'])) {?>
              <li class="dropdown-header">Manage Categories</li>
              <li><?php echo $this->Html->link(__("New Category",true),array('plugin'=>'support_ticket_system','controller' => 'categories', 'action' => 'add_dev_category')) ?></li>
              <?php } ?>

              <?php if(Auth::hasRoles(['superadmin','stadmin'])) {?>
              <li class="dropdown-header">Manage Categories</li>
              <li><?php echo $this->Html->link(__("New Category",true),array('plugin'=>'support_ticket_system','controller' => 'categories', 'action' => 'add')) ?></li>
              <?php } ?>

              <?php if(Auth::hasRoles(['developer','superadmin','stadmin'])) {?>
              <li><?php echo $this->Html->link(__("View Categories",true),array('plugin'=>'support_ticket_system','controller' => 'categories', 'action' => 'index'))  ?></li>
              <li class="divider"></li>
              <?php } ?>



              
        
        
       </div>
    </div>
  </div>
