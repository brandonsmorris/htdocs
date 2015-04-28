<div class="modal fade" id="editor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Import</h4>
            </div>
            <div class="modal-body"><?
$deleterecords = "TRUNCATE TABLE tablename"; //empty the table of its current records
mysql_query($deleterecords);

//Upload File
if (isset($_POST['submit'])) {
    if (is_uploaded_file($_FILES['filename']['tmp_name'])) {
        echo "<h1>" . "File ". $_FILES['filename']['name'] ." uploaded successfully." . "</h1>";
        echo "<h2>Displaying contents:</h2>";
        readfile($_FILES['filename']['tmp_name']);
    }

    //Import uploaded file to Database
    $handle = fopen($_FILES['filename']['tmp_name'], "r");

    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $import="INSERT into tablename(item1,item2,item3,item4,item5) values('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]')";

        mysql_query($import) or die(mysql_error());
    }

    fclose($handle);

    print "Import done";

    //view upload form
}else {

    print "Upload new csv by browsing to file and clicking on Upload<br />\n";

    print "<form enctype='multipart/form-data' action='importModal.php' method='post'>";

    print "File name to import:<br />\n";

    print "<input size='50' type='file' name='filename'><br />\n";

    print "<input type='submit' name='submit' value='Upload'></form>";

}

?>
        </div>
    </div>
</div>
</div>