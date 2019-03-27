<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav navbar-sidenav" id="exampleAccordion" 
    style="margin-top:40px">

      <center>
        <a href="<?php echo e(url('/')); ?>">
          <img src="<?php echo e(url('api/images/logo.png')); ?>" class="logo" style="width:200px;margin-top:-20px;margin-bottom:15px"></a>
      </center>

    <li class="nav-item" data-toggle="tooltip" data-placement="right">
      <a class="nav-link nav-link-collapse collapsed" 
          data-toggle="collapse" href="#collapse01">&nbsp;&nbsp;&nbsp;
        <span class="nav-link-text">Products Export</span>
      </a>
      <ul class="sidenav-second-level collapse moka" style="display: block" id="collapse01">
        <li class="hasLi "><a href="#api_exp_json">export JSON</a></li>
        <li class="hasLi "><a href="#api_exp_xml">export XML</a></li>
      </ul>
    </li>


    <li class="nav-item" data-toggle="tooltip" data-placement="right">
      <a class="nav-link nav-link-collapse collapsed" 
          data-toggle="collapse" href="#collapse02">&nbsp;&nbsp;&nbsp;
        <span class="nav-link-text">Products Import </span>
      </a>
      <ul class="sidenav-second-level collapse moka" style="display: block;" id="collapse02">
        <li class="hasLi "><a href="#api_import_json">import JSON</a></li>
        <li class="hasLi "><a href="#api_import_xml">import XML</a></li>
      </ul>
    </li>
        
    <li><br/><br/><br/><br/></li>

      </ul>
    </div>
  </nav>
<?php /* /Users/apple/Sites/ideas/data_processor_architecture/resources/views/api/docs/navigation.blade.php */ ?>