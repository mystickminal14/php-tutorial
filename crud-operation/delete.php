<?php
include 'connection.php';
$ids=$_GET['id'];
$del="delete from register where uid='$ids'";
$res=mysqli_query($conn,$del);

if($res){
    ?><script>
        alert('DATA Deleted SUCCESSFULLY!!')
    </script><?php
    header('location:view.php');
}else{
    ?><script>
    alert('ERROR WHILE deleting DATA!!')
</script><?php
}

?>