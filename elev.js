$(document).ready(function() {

    //function to update the URL and send elevator cars
    $('#go').click(function() {
        $floor = $('#floor').val();
        $direction = $('#direction').val();
        $currentFloor = $('#currentFloor').val();
        //if all values are present, send the info to the api
        if ($floor && $direction && $currentFloor) {
            href.location = "/floor/{$floor}/direction/{$direction}/currentFloor/{$currentFloor}"
        }
    });
});