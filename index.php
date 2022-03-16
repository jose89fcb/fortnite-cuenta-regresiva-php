<script src="js/jquery.js"></script>
<div id="TiempoFortnite"></div>
<script type="text/javascript">
  $(document).ready(function() {
    setInterval(
      function(){

        $('#TiempoFortnite').load('TiempoFinalFortnite.php');
      },1000


    );
    
  });

</script>