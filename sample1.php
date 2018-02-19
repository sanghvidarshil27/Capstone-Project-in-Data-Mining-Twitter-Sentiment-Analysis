<html>


<a href="#smp1" id="click">Click</a>
<div id="smp">


<script>

    $(document).ready(function() {
        $('#click').click(function(){
            $.ajax({

                type: "POST",
                url: "sample.php",
                //data: datastr,
                success: function(msg){
                    $('#smp').(msg);
                }

            }); // Ajax Call
        }); //event handler
    }); //document.ready
</script>
</div>
</html>