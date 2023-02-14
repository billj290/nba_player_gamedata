<h3>更新球隊隊徽圖片</h3>
<form action="./api/upload_teampic.php" method="post" enctype="multipart/form-data">
<table>
    <tr>
        <td>球隊隊徽圖片</td>
        <td>
            <input type="file" name="img">
        </td>
    </tr>
</table>
    <input type="hidden" name="id" value="<?=$_GET['id'];?>">
    <input type="hidden" name="table" value="Image">
    <input type="submit" value="更新">
</form>