$(document).ready(function(){

var daysTotal;
var daysLeft;
var daysSpent;

$("#submit").click(function() {
    var day = $("#day").val();
    var month = $("#month").val();
    var year = $("#year").val();
    var gender = $("#gender").val();
    var country = $("#country").val();
  
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'day=' + day + '&month=' + month + '&year=' + year + '&gender=' + gender + '&country=' + country;
    if (year == ''){
        alert("You gotta fill out year too.");
    } else {
      // AJAX Code To Submit Form.
      var requestStr = "getData.php?";
      requestStr += "day="    + day;
      requestStr += "&month=" + month;
      requestStr += "&year="  + year;
      requestStr += "&gender="+ gender;
      requestStr += "&country="+ country;

      $.get( requestStr, function(data) {
        console.log(data);

        // Define final user-facing data
        dob = month + '/' + day + '/' + year;
        // daysTotal  = Math.round(data.usa."lifeExpectancy"+gender * 365.4);
        daysTotal  = Math.round(data["usa"]["lifeExpectancy"+gender] * 365.25);
        daysSpent  = daysBetween(dob,getToday());
        daysLeft = daysTotal - daysSpent;
        lifeSpentPerc = daysSpent / daysTotal;

        // Fill out text at top
        $("#expectancy").html(numberWithCommas(daysTotal));
        $("#daysSpent").html(numberWithCommas( Math.round(daysSpent) ));
        $("#daysLeft").html(numberWithCommas( Math.round(daysLeft) ));
        $("#percComplete").html(Math.round(lifeSpentPerc*100)+"%");

        $("#expectancy2years").html(Math.round(daysTotal/365.25*100)/100);
        $("#expectancy2days").html(numberWithCommas( Math.round(daysTotal) ));
        $("#daysSpent2years").html(Math.round(daysSpent/365.25*100)/100);
        $("#daysSpent2days").html(numberWithCommas( Math.round(daysSpent) ));
        $("#daysLeft2years").html(Math.round(daysLeft/365.25*100)/100);
        $("#daysLeft2days").html(numberWithCommas( Math.round(daysLeft) ));

        // Generate visuals
        generateGrid(daysTotal, daysSpent);
        $("#details").show();
        $("#sep").show();
        $("#calendar").show();
        $("#submit").attr("value", "Do it again! 👏");

      }, "json" );
    }
    return false;
});

function generateGrid(daysTotal, daysSpent){
  // Settings
  var daysPerGroup = 364;

  // Vars
  var dayID = 1;
  var groupID = 1;
  var thisDaySpent = 'true';
  var outputStr = "";

  // loop all days, grouping as we go
  while( dayID <= daysTotal ){

    outputStr += '<div class="group group-'+groupID+'">';

    // group into 100 day chunks
    for( i=0; i < daysPerGroup && dayID <= daysTotal; i++ ){
      if( dayID > daysSpent ){
        thisDaySpent = 'false';
      }

      outputStr += '<div class="day day-'+dayID+' spent-'+thisDaySpent+'"></div>';
      dayID++;
    }

    outputStr += '</div>';

    groupID++;
  }

  $("#calendar").html(outputStr);

}

function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

function daysBetween(dateStr1, dateStr2, excludeEnd = true){
    // https://www.geeksforgeeks.org/how-to-calculate-the-number-of-days-between-two-dates-in-javascript/
    var date1 = new Date(dateStr1);
    var date2 = new Date(dateStr2);

    // Time difference
    var Difference_In_Time = date2.getTime() - date1.getTime(); 

    // Number of days
    var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);
    if(excludeEnd){
        Difference_In_Days--;
    }

    // Return
    return Difference_In_Days;
}

function getToday(){
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();

    today = mm + '/' + dd + '/' + yyyy;
    return today;
}

function capitalizeFirstLetter(string){
    return string[0].toUpperCase() + string.slice(1); 
}

});