<div id="api_import_json"><br/></div> 
    <h5>Products - Import JSON</h5>
    <div class="card mb-3">
    <div class="card-header">POST &nbsp;&nbsp;  api/v1/products/json/import</div>
      <?php echo Form::Open(['url'=>'api/v1/products/json/import']); ?>

          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
               <thead>
                  <td style="width:20%;font-weight:bold">PARAMETER</td>
                  <td style="width:15%;font-weight:bold">TYPE</td>
                  <td style="width:45%;font-weight:bold">DESCRIPTION</td>
                  <td style="width:20%;font-weight:bold">VALUE</td>
                </thead>
                <tbody>
                  <tr>
                   <td>data</td>
                   <td>JSON</td>
                   <td>example: 
<xmp>{"name":"pro1","description":"desc1"}</xmp></td>
                   <td><textarea rows="4" name="data" placeholder="" required=""></textarea></td>
                  </tr>
                </tbody>
               </table>
            </div>
          </div>
          <div class="card-footer small text-muted">
            <input type="submit" class="btn btn-info" style="cursor:pointer" value="Submit">
          </div>
      <?php echo Form::Close(); ?>

  </div>


<div id="api_import_xml"><br/></div> 
    <h5>Products - Import XML</h5>
    <div class="card mb-3">
    <div class="card-header">POST &nbsp;&nbsp;  api/v1/prodcuts/xml/import</div>
      <?php echo Form::Open(['url'=>'api/v1/products/xml/import']); ?>

          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
               <thead>
                  <td style="width:20%;font-weight:bold">PARAMETER</td>
                  <td style="width:15%;font-weight:bold">TYPE</td>
                  <td style="width:45%;font-weight:bold">DESCRIPTION</td>
                  <td style="width:20%;font-weight:bold">VALUE</td>
                </thead>
                 <tbody>
                  <tr>
                   <td>data</td>
                   <td>XML</td>
                   <td>example: 
<xmp><xml>
  <name>productName</name>
  <description>desc</description>
</xml></xmp></td>
                   <td><textarea rows="4" name="data" placeholder="" required=""></textarea></td>
                  </tr>
                </tbody>
               </table>
            </div>
          </div>
          <div class="card-footer small text-muted">
            <input type="submit" class="btn btn-info" style="cursor:pointer" value="Submit">
          </div>
      <?php echo Form::Close(); ?>

  </div>



<?php /* /Users/apple/Sites/ideas/data_processor_architecture/resources/views/api/sections/import.blade.php */ ?>