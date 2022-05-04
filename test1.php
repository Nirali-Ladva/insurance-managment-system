<html>
<body>
<form id="myForm">
    <div class="form-group col-lg-2">
        <label>Country</label>
        <select id="country" name="country" class="form-control">
            <option value="1">Japan</option>
            <option value="2">China</option>
            <option value="3">New Zealand</option>
        </select>
    </div>
    <div class="form-group col-lg-2">
        <label>province</label>
        <select name="province" class="form-control" disabled>
            <option value="1">a province</option>
        </select>
    </div>

    <div class="form-group col-lg-2">
        <label>city</label>
        <select name="city" class="form-control" disabled>
            <option value="1">a city</option>
        </select>
    </div>
    <input type="submit">
</form>

<script>
 //Select country first
$('select[name="country"]').on('change', function() {
    var countryId = $(this).val();

    $.ajax({
        type: "POST",
        url: "get-province.php",
        data: {country : countryId },
        success: function (data) {
                    //remove disabled from province and change the options
                    $('select[name="province"]').prop("disabled", false);
                    $('select[name="province"]').html(data.response);
        }
    });
});


$('select[name="province"]').on('change', function() {
    var provinceId = $(this).val();

    $.ajax({
        type: "POST",
        url: "get-city.php",
        data: {province : provinceId },
        success: function (data) {
                    //remove disabled from city and change the options
                    $('select[name="city"]').prop("disabled", false);
                    $('select[name="city"]').html(data.response);
        }
    });
});

//once all field are set, submit
$('#myForm').submit(function () { 
    $.ajax({
        type: "POST",
        url: "find.php",
        data: $('#myForm').serialize(),
        success: function (data) {
                //success
        }
      });
    });
});
</script>
</body>
</html>