<div id="myModal" class="modal fade in">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
                <h4 class="modal-title"><center>Add New Table</center></h4>
            </div>
            <form action="includes/newTableExec.php" method="POST">
            <div class="modal-body">
                Name <input id='name' name='name' /><br/>
                
            </div>
            <div class="modal-footer">
                <div class="btn-group">
                    <button class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button class="btn btn-primary" type="submit" name="submit"><span class="glyphicon glyphicon-check"></span> Save</button>
                </div>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dalog -->
</div><!-- /.modal -->