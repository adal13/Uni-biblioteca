$(document).ready(function () {
    
        $('.btnBorrar').click(function (e){
            e.preventDefault();
            console.log(e);

            var id_libro = $(this).attr("id_libro");

            var dataString = 'id_libro='+ id_libro;
            url = "../models/delete.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: dataString,
                    success: function(data)
                    {
                        window.location.href="http://localhost/cursos/practica/models/delete.php";
                        $('#respuesta').html(data);
                    }
                });
            return false;
        })
})

