<html>

<head>
    <title>Simple file upload using Python Flask</title>
</head>

<body>
    <?php echo "hello" ?>
    <form action="http://192.168.1.4:5000/filetest" method="post" enctype="multipart/form-data">
        Username: <input type='text' name='username' /><BR>
        Choose csv file: <input type="file" name="file1" accept='.csv' /><BR>
        Choose excel file: <input type="file" name="file2" accept='.xls, .xlsx' /><BR>
        <input type="submit" value="Upload" />
    </form>
</body>

</html>