$(document).ready(function(){
    var date = new Date();
    var month = $("#month").children("h2");
    var months = {0:["January", 31], 1:["Febuary",31], 2:["March",31], 3:["April",30], 4:["May", 31], 
        5:["June", 30], 6:["July", 31], 7:["August", 31], 8:["September", 30], 9:["October", 31], 
        10:["November", 30], 11:["December", 31]
    }
    var currentMonth = date.getMonth();

    createCalendar();
    $("#next").click(function(){
        currentMonth = Math.abs((currentMonth + 1)) % 12;
        createCalendar();
    })
    $("#prev").click(function(){
        currentMonth = Math.abs((currentMonth - 1)) % 13 || 12;
        createCalendar();
    })

    function createCalendar(){
        month.html(months[currentMonth][0] + " " + date.getFullYear());
        var m = new Date(date.getFullYear(), currentMonth, 1);
        var firstday = m.getDay();
        var lastday = months[currentMonth][1];
        console.log(firstday, lastday);
        $("#num").html(gridify(firstday, lastday, currentMonth));
    }
    /*
    * Creates the calendar body for different months
    */
    function gridify(firstday, lastday, month){
        var grid = ""
        var days = 0;
        var n = 0; //actual days
        for(var i = 0; i < 5; i++){
            grid += "<tr>";
            for(var j = 0; j < 7; j++){
                if(days > (firstday - 1) && n < (lastday)){
                    var dayNumber = (days - firstday + 1);
                    if(month == date.getMonth() && dayNumber == date.getDate()){
                        // Set current day
                        grid += "<td class = \"active\">" + dayNumber + "</td>"; 
                        console.log(dayNumber);
                        n++;
                        days++;
                        continue;
                    }
                    grid += "<td>" + dayNumber + "</td>"; // days of the week
                    n++;
                } else{
                    grid += "<td></td>";
                }
                days++;
            }
            grid += "</tr>";
        }
        return grid;
    }
});

// true --> next || false --> prev
