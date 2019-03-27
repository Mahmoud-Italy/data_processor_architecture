<div id="api_news_list"><br/></div> 
    <h5>News - List</h5>
    <div class="card mb-3">
    <div class="card-header">GET &nbsp;&nbsp;  api/news</div>
      <?php echo Form::Open(['url'=>'api/news','method'=>'GET']); ?>

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




<div id="api_news_detail"><br/></div> 
    <h5>News - Detail</h5>
    <div class="card mb-3">
    <div class="card-header">POST &nbsp;&nbsp;  api/news/show</div>
      <?php echo Form::Open(['url'=>'api/news/show']); ?>

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
                   <td>news_id</td>
                   <td>int</td>
                   <td><xmp><input type="text" name="news_id"></xmp></td>
                   <td><input type="text" name="news_id"></td>
                 </tr>
               </table>
            </div>
          </div>
          <div class="card-footer small text-muted">
            <input type="submit" class="btn btn-info" style="cursor:pointer" value="Submit">
          </div>
      <?php echo Form::Close(); ?>

  </div>


<div id="api_news_create"><br/></div> 
    <h5>News - Create</h5>
    <div class="card mb-3">
    <div class="card-header">POST &nbsp;&nbsp;  api/news/create</div>
      <?php echo Form::Open(['url'=>'api/news/create']); ?>

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
                 <tr>
                   <td>short_content</td>
                   <td>string</td>
                   <td><xmp><input type="text" name="short_content"></xmp></td>
                   <td><input type="text" name="short_content"></td>
                 </tr>
                 <tr>
                   <td>long_content</td>
                   <td>string</td>
                   <td><xmp><input type="text" name="long_content"></xmp></td>
                   <td><input type="text" name="long_content"></td>
                 </tr>
               </table>
            </div>
          </div>
          <div class="card-footer small text-muted">
            <input type="submit" class="btn btn-info" style="cursor:pointer" value="Submit">
          </div>
      <?php echo Form::Close(); ?>

  </div>


<div id="api_news_update"><br/></div> 
    <h5>News - Update</h5>
    <div class="card mb-3">
    <div class="card-header">POST &nbsp;&nbsp;  api/news/update</div>
      <?php echo Form::Open(['url'=>'api/news/update']); ?>

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
                   <td>news_id</td>
                   <td>int</td>
                   <td><xmp><input type="text" name="news_id"></xmp></td>
                   <td><input type="text" name="news_id"></td>
                 </tr>
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
                 <tr>
                   <td>short_content</td>
                   <td>string</td>
                   <td><xmp><input type="text" name="short_content"></xmp></td>
                   <td><input type="text" name="short_content"></td>
                 </tr>
                 <tr>
                   <td>long_content</td>
                   <td>string</td>
                   <td><xmp><input type="text" name="long_content"></xmp></td>
                   <td><input type="text" name="long_content"></td>
                 </tr>
               </table>
            </div>
          </div>
          <div class="card-footer small text-muted">
            <input type="submit" class="btn btn-info" style="cursor:pointer" value="Submit">
          </div>
      <?php echo Form::Close(); ?>

  </div>

<div id="api_news_destroy"><br/></div> 
    <h5>News - Destroy</h5>
    <div class="card mb-3">
    <div class="card-header">POST &nbsp;&nbsp;  api/news/destroy</div>
      <?php echo Form::Open(['url'=>'api/news/destroy']); ?>

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
                   <td>news_id</td>
                   <td>int</td>
                   <td><xmp><input type="text" name="news_id"></xmp></td>
                   <td><input type="text" name="news_id"></td>
                 </tr>
               </table>
            </div>
          </div>
          <div class="card-footer small text-muted">
            <input type="submit" class="btn btn-info" style="cursor:pointer" value="Submit">
          </div>
      <?php echo Form::Close(); ?>

  </div>



<div id="api_news_search"><br/></div> 
    <h5>News - Search</h5>
    <div class="card mb-3">
    <div class="card-header">POST &nbsp;&nbsp;  api/news/search</div>
      <?php echo Form::Open(['url'=>'api/news/search']); ?>

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
                   <td>search</td>
                   <td>string</td>
                   <td><xmp><input type="text" name="search"></xmp></td>
                   <td><input type="text" name="search"></td>
                 </tr>
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





<?php /* /Users/apple/Sites/ideas/data_processor_architecture/resources/views/api/sections/news.blade.php */ ?>