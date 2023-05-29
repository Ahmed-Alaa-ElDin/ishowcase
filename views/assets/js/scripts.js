$(function () {
  var id = $("#id").val();

  var inputToText = $(".input-to-text");

  inputToText.on("click", function () {
    let text = $(this);
    let val = text.text().trim();
    let fieldName = text.data("field");
    let parent = text.parent();

    $(
      "<input id='" +
        fieldName +
        "Input' class='form-input' name='" +
        fieldName +
        "' value='" +
        val +
        "'>"
    ).appendTo(parent);

    text.hide();

    let input = $("#" + fieldName + "Input");
    input.select();

    input.on("blur", function () {
      let fieldVal = $(this).val();

      let data = {
        watch_id: id,
        fieldName: fieldName,
        fieldVal: fieldVal
      };

      if (fieldVal != val) {
        $.ajax({
          url: "/edit",
          method: "POST",
          data: data,
          success: function (response) {
            response = JSON.parse(response);
            if (response["status"] == "success") {
              input.remove();
              text.text(response["fieldVal"]);
              text.show();
            } else {
              input.remove();
              text.show();
            }
          }
        });
      } else {
        input.remove();
        text.show();
      }
    });

    input.on("keydown", function (event) {
      if (event.keyCode === 13) {
        input.blur();
      }
    });
  });
});
