<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Ajax</title>
    <script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>

    <form action="simpan.php" method="post">
        <input type="text" name="nama" id="" placeholder="Nama Anda ..">
        <input type="text" name="alamat" id="" placeholder="Alamat Anda ..">
        <input type="submit" name="submti" value="Simpan">
    </form>
    <hr>
    <div id="content">
    
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            loadData();
        })

        function loadData(){
            $.get('data.php', function(data){
                $('#content').html(data)
            })
        }
    </script>
</body>
</html>