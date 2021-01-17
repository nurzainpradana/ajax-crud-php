<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Ajax</title>
    <script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>

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