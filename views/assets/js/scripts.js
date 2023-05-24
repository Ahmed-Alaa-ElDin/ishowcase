$(function () {
  var id = $("#id").val();

  var largeTitleInp = $("#large_title");

  largeTitleInp.on("blur", function () {
    let largeTitle = $(this).val();

    let data = {
      watch_id: id,
      large_title: largeTitle
    };

    $.ajax({
      url: "/edit/large-title",
      method: "POST",
      data: data,
      success : function(response){
        console.log(response);
      }
    });
  });
});
