
function add_server_side() {
  var x = parseInt($("#txt_x").val());
  var y = parseInt($("#txt_y").val());

  // $.post('http://localhost/web-class-9902/srv/add.php',
  $.post(
    "http://localhost/web-class-9902/lbe/public/api/calc-sum",
    { x, y },
    function (d, s) {
      debugger;
      console.log(d);
      $("#h_result").text(d["resp"]);
    }
  );
}
