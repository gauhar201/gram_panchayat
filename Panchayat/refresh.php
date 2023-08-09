


  
<script type="text/javascript">
    $('#submit').on('click', function(){
        $("#myform").submit(function(e){
            e.preventDefault();
            $.ajax({
                type:"POST",
                url:"index.php",
                data:$('#myform').serialize(),
                success:function(response){
                    $("#result").html(response);
                }
            })
        })
    })
</script>