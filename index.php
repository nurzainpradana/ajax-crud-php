<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Ajax</title>
    <script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>

    <form action="simpan.php" method="POST">
        <input type="text" name="nama" placeholder="Nama Anda ..">
        <input type="text" name="alamat" placeholder="Alamat Anda ..">
        <input type="submit" name="submit" value="submit">
    </form>
    <hr>
    <div id="content">
    
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            loadData();

            $('form').on('submit', function(e) {
                // Agar tidak submit default
                e.preventDefault();
                $.ajax({
                    type: $(this).attr('method'),
                    url: $(this).attr('action'),
                    //Mengambil data yang di submti
                    data: $(this).serialize(),
                    success : function() {
                        loadData();
                        resetForm();
                    }
                });
            })
        })

        function loadData(){
            $.get('data.php', function(data){
                $('#content').html(data)
                $('.hapusData').click(function(e){
                    e.preventDefault();
                    $.ajax({
                        type:'get',
                        url:$(this).attr('href'),
                        success:function(){
                            loadData();
                        }
                    })
                })
            })
        }
        function resetForm(){
            // Membuat inout menjadi clear setelah submit
            $('[type=text]').val('');
            $('[name=nama]').focus();
        }
    </script>
</body>
</html>