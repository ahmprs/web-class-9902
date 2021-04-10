function init() {
    console.log('Init');
}

function add_client_side() {
    // debugger;
    var x = parseInt($('#txt_x').val());
    var y = parseInt($('#txt_y').val());
    var z = x + y;

    $("#h_result").text(z);
    // alert('HELLO');
}


function add_server_side() {
    // debugger;
    var x = parseInt($('#txt_x').val());
    var y = parseInt($('#txt_y').val());
    
    $.post('http://localhost/web-class-9902/srv/add.php',
        {x,y},
        function(d,s){
            debugger;
            console.log(d);
            $("#h_result").text(d['z']);
        }
    );

    // $("#h_result").text(z);
    // alert('HELLO');
}


