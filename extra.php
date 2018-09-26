<div id="myDIV">

<input  class="in" type="button"  value="<?php echo $value10 ?>" > Process </input>
<input  class="in" type="button"  value="<?php echo $value11 ?>" > Completed </input>
<input  class="in" type="button"  value="<?php echo $value12 ?>" > Block </input>
<input  class="in" type="button"  value="<?php echo $value13 ?>" > Busy </input>


</div> 
<script>
function myFunction() {
	
	    
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>
#myDIV {
    width: 100%;
    padding: 50px 0;
    text-align: center;
    background-color: lightblue;
    margin-top: 20px;
	display: none;
}