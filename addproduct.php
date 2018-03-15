<!DOCTYPE html>
<html>
<head>
</head>
<body>
<a class="btn btn-primary btn-fill" id="addproduct" role="button">Add Product</a>
</body>
</html>




               		<!-- Login pop -->
                    <div class="modal fade" id="showproduct" role="dialog">
                    <div class="modal-dialog modal-sm modal-dialog-centered">
                    <div class="row" >

 
                        <div class="card">

                            <div class="header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="title">Add Product</h4>
                            </div>


                            <div class="content">

                                <form role="form"  action="insert.php" method="post"  class="login"> 

                                            <div class="form-group">
                                                <label>Product Area (Category)</label>
                                                <input type="text" class="form-control" name="productarea" id="productarea" required="required">
                                            </div>
                                        
                                        
                                            <div class="form-group">
                                                <label>Product Long Name</label>
                                                <input type="text" class="form-control" name="productlongname" id="productlongname" required="required">
                                            </div>
                                      
                                       
                                            <div class="form-group">
                                                <label>Product Short Name</label>
                                                <input type="text" class="form-control" name="productshortname" id="productshortname" required="required">
                                         
                                        </div>

                                            <div class="form-group">
                                                <label>Document Name</label>
                                                <input type="text" class="form-control" name="docname" id="docname" required="required">
                                         
                                        </div>
                                            <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Doc ID</label>
                                                <input type="text" class="form-control" name="docid" id="docid" required="required">
                                           
                                        </div>
                                    </div>

                                        <div class="col-md-7">
                                        
                                            <div class="form-group">
                                                <label>Author</label>
                                                <input type="text" class="form-control" name="author" id="author" required="required">
                                        
                                        </div>
                                    </div>
                                </div>

                                         <div class="row">
                                        <div class="col-md-5">

                                        <div class="form-group">
                                        <label>Supported Format</label>  
                                        <div class="form-check">
                                            <ul>
                                          <li><input class="form-check-input" type="checkbox" value="PDF"  name="format[]"  id="pdf">
                                          <label class="form-check-label" for="pdf">
                                            PDF
                                          </label></li>
                                          <li><input class="form-check-input" type="checkbox" name="format[]" value="XLS/CSV" id="pdf">
                                          <label class="form-check-label" for="pdf">
                                            XLS/CSV
                                          </label></li>
                                          <li><input class="form-check-input" type="checkbox"  name="format[]" value="Online Help" id="onlinehelp">
                                          <label class="form-check-label" for="onlinehelp">
                                            Online Help
                                          </label></li>
                                      </ul>
                                        </div>
                                    </div>
                                </div>

                                 <div class="col-md-5">
                                        <div class="form-group">
                                        <label>Where to Find</label>  
                                        <div class="form-check">
                                            <ul>
                                          <li><input class="form-check-input" type="checkbox" name="find[]" value="Documentation Central" id="doccentral">
                                          <label class="form-check-label" for="doccentral">
                                            Documentation Central
                                          </label></li>
                                          <li><input class="form-check-input" type="checkbox"  name="find[]" value="Infor Xtreme" id="inforxtreme">
                                          <label class="form-check-label" for="inforxtreme">
                                            Infor Xtreme
                                          </label></li>
                                        
                                      </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                    <button type="button" class="btn btn-secondary btn-fill" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-info btn-fill">Submit</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
 
                </div>
                </div>
                </div>


