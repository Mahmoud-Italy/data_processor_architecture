<div id="api_cat_list"><br/></div> 
    <h5>Categories - List</h5>
    <div class="card mb-3">
    <div class="card-header">GET &nbsp;&nbsp;  api/categories</div>
      <?php echo Form::Open(['url'=>'api/categories','method'=>'GET']); ?>

          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
               <thead>
                  <td style="width:20%;font-weight:bold">PARAMETER</td>
                  <td style="width:15%;font-weight:bold">TYPE</td>
                  <td style="width:45%;font-weight:bold">DESCRIPTION</td>
                  <td style="width:20%;font-weight:bold">VALUE</td>
                </thead>
                 <tr>
                   <td>orderBy_date</td>
                   <td>string</td>
                   <td><xmp><select name="orderBy_date">
    <option value="asc">asc</option>
    <option value="desc">desc</option>
</select></xmp></td>
                   <td><select name="orderBy_date">
    <option value="asc">asc</option>
    <option value="desc">desc</option>
</select></td>
                 </tr>
                 <tr>
                   <td>orderBy_title</td>
                   <td>string</td>
                   <td><xmp><select name="orderBy_title">
    <option value="asc">asc</option>
    <option value="desc">desc</option>
</select></xmp></td>
                   <td><select name="orderBy_title">
    <option value="asc">asc</option>
    <option value="desc">desc</option>
</select></td>
                 </tr>
                 <tr>
                   <td>page</td>
                   <td>int</td>
                   <td><xmp><input type="text" name="page" value="1"></xmp></td>
                   <td><input type="text" name="page" value="1"></td>
                 </tr>
               </table>
            </div>
          </div>
          <div class="card-footer small text-muted">
            <input type="submit" class="btn btn-info" style="cursor:pointer" value="Submit">
          </div>
      <?php echo Form::Close(); ?>

  </div>


<div id="api_cat_create"><br/></div> 
    <h5>Categories - Create</h5>
    <div class="card mb-3">
    <div class="card-header">POST &nbsp;&nbsp;  api/categories/create</div>
      <?php echo Form::Open(['url'=>'api/categories/create']); ?>

          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
               <thead>
                  <td style="width:20%;font-weight:bold">PARAMETER</td>
                  <td style="width:15%;font-weight:bold">TYPE</td>
                  <td style="width:45%;font-weight:bold">DESCRIPTION</td>
                  <td style="width:20%;font-weight:bold">VALUE</td>
                </thead>
                 <tr>
                   <td>title</td>
                   <td>string</td>
                   <td><xmp><input type="text" name="title"></xmp></td>
                   <td><input type="text" name="title"></td>
                 </tr>
               </table>
            </div>
          </div>
          <div class="card-footer small text-muted">
            <input type="submit" class="btn btn-info" style="cursor:pointer" value="Submit">
          </div>
      <?php echo Form::Close(); ?>

  </div>


<div id="api_cat_update"><br/></div> 
    <h5>Categories - Update</h5>
    <div class="card mb-3">
    <div class="card-header">POST &nbsp;&nbsp;  api/categories/update</div>
      <?php echo Form::Open(['url'=>'api/categories/update']); ?>

          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
               <thead>
                  <td style="width:20%;font-weight:bold">PARAMETER</td>
                  <td style="width:15%;font-weight:bold">TYPE</td>
                  <td style="width:45%;font-weight:bold">DESCRIPTION</td>
                  <td style="width:20%;font-weight:bold">VALUE</td>
                </thead>
                 <tr>
                   <td>cat_id</td>
                   <td>int</td>
                   <td><xmp><input type="text" name="cat_id"></xmp></td>
                   <td><input type="text" name="cat_id"></td>
                 </tr>
                 <tr>
                   <td>title</td>
                   <td>string</td>
                   <td><xmp><input type="text" name="title"></xmp></td>
                   <td><input type="text" name="title"></td>
                 </tr>
               </table>
            </div>
          </div>
          <div class="card-footer small text-muted">
            <input type="submit" class="btn btn-info" style="cursor:pointer" value="Submit">
          </div>
      <?php echo Form::Close(); ?>

  </div>

<div id="api_cat_destroy"><br/></div> 
    <h5>Categories - Destroy</h5>
    <div class="card mb-3">
    <div class="card-header">POST &nbsp;&nbsp;  api/categories/destroy</div>
      <?php echo Form::Open(['url'=>'api/categories/destroy']); ?>

          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
               <thead>
                  <td style="width:20%;font-weight:bold">PARAMETER</td>
                  <td style="width:15%;font-weight:bold">TYPE</td>
                  <td style="width:45%;font-weight:bold">DESCRIPTION</td>
                  <td style="width:20%;font-weight:bold">VALUE</td>
                </thead>
                 <tr>
                   <td>cat_id</td>
                   <td>int</td>
                   <td><xmp><input type="text" name="cat_id"></xmp></td>
                   <td><input type="text" name="cat_id"></td>
                 </tr>
               </table>
            </div>
          </div>
          <div class="card-footer small text-muted">
            <input type="submit" class="btn btn-info" style="cursor:pointer" value="Submit">
          </div>
      <?php echo Form::Close(); ?>

  </div>






<?php /* /Users/apple/Sites/ideas/data_processor_architecture/resources/views/api/sections/categories.blade.php */ ?>