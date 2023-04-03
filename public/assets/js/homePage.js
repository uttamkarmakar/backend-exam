$(".downloadBtn").on("click", selectApp);

function selectApp() {
  var id = $(this).attr('rel');
  console.log(id);
  var size = $(".compare").length;
  console.log(size);
  if (size == 0) {
    $(".post__content" + id).addClass("compare");
    var pro1 = $("#card_one").val();
    if (pro1 == "") {
      $("#card_one").val(id);
    }
    $("#download").show();
  }
  else if ($(".post__content" + id).hasClass("compare")) {
    $(".post__content" + id).removeClass("compare");
  }
  else {
    alert("Please select one app at a time to download");
  }
}
