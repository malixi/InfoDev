<!DOCTYPE html>
<html>
<head>
</head>
<body>
<a class="btn btn-info btn-fill" id="import" role="button">Import CSV</a>
</body>
</html>




               		<!-- Import -->
                    <div class="modal fade" id="showimport" role="dialog">
                    <div class="modal-dialog modal-sm modal-dialog-centered">
                    <div class="row" >

 
                        <div class="card">

                            <div class="header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="title">Import</h4>
                            </div>

                            <div class="content">
                                <div class="panel-body">

                                  Please upload CSV format only
                                  <br><br>

                                <form method="post" action="importprocess.php" enctype="multipart/form-data">
                                    <fieldset>
                                        <div class="form-group">
                                          <input type="file" name="file" required="required" />
                                        </div>
                                    <input class="btn btn-info btn-fill" type="submit" onclick="ConfirmDelete()" name="submit_file" value="Submit"  />
                                    </fieldset>
                                </form>

                            </div>
                 
                            </div>
                        </div>
 
                </div>
                </div>
                </div>


