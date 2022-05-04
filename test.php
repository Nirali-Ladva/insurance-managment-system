<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery Show Hide Elements Using Radio Buttons</title>
<style type="text/css">
    .box{
        color: #fff;
        padding: 20px;
        display: none;
        margin-top: 20px;
    }
    .red{ background: #ff0000; }
    .green{ background: #228B22; }
    .blue{ background: #0000ff; }
</style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('input[type="radio"]').click(function(){
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".box").not(targetBox).hide();
        $(targetBox).show();
    });
});
</script>
</head>
<body>
    <div>
        <label><input type="radio" name="colorRadio" value="red"> red</label>
        <label><input type="radio" name="colorRadio" value="green"> green</label>
        <label><input type="radio" name="colorRadio" value="blue"> blue</label>
    </div>
    <div class="red box"><p> Return Date:</p>
					  	<!--<input onfocus="if (this.value=='dd-mm-yyyy') this.value = ''" type="date"  value="dd-mm-yyyy" name="returndate" />-->
					 	 <input type="date" onclick="myFunction4()" id="myDate" name="returndate" min="2017-09-16">
					 	<script>
						function myFunction4()
						{
							var x= document.getElementById("myDate").min="2017-09-16";
							document.getElementById("demo").innerHTML =" THE value of min attribute was changed from '1980-01-01' to '1999-01-01'.";
						}
					 	</script>
					  
					  	<p> Return Time:</p>
					  	<input onfocus="if (this.value=='Time') this.value = ''" type="time"  value="Time" name="returntime" /></div>
    <div class="green box">You have selected <strong>green radio button</strong> so i am here</div>
    <div class="blue box">You have selected <strong>blue radio button</strong> so i am here</div>
</body>
</html>