
<?php
if($_SERVER['REQUEST_METHOD']!="POST"){
?>
<form action="POST" enctype="multipart/form-data">
    <input type="file" name = "uploadFile">
    <button>submit</button>
</form>

<?php
}
else{
    // $file = $_FILES['uploadFile'];
    echo $file;
}