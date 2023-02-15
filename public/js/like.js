var xhr = new XMLHttpRequest();

function like(gotouti_men) {
 ajax({
    headers: {
      "X-CSRF-TOKEN": ('meta[name="csrf-token"]').attr("content"),
    },
    url: `/like/${gotouti_men}`,
    type: "POST",
  })
    .done(function (data, status, xhr) {
      console.log(data);
    })
    .fail(function (xhr, status, error) {
      console.log();
    });
}

