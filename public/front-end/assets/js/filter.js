// Filter.
document.addEventListener("DOMContentLoaded", function () {
  var priceSlider = document.getElementById("priceSlider");
  noUiSlider.create(priceSlider, {
    start: [0, 1500],
    connect: true,
    range: {
      min: 0,
      max: 1500,
    },
    tooltips: true,
    format: {
      to: function (value) {
        return "৳ " + parseInt(value);
      },
      from: function (value) {
        return Number(value.replace("৳ ", ""));
      },
    },
  });

  priceSlider.noUiSlider.on("update", function (values, handle) {
    if (handle) {
      document.getElementById("priceMax").textContent = values[handle];
    } else {
      document.getElementById("priceMin").textContent = values[handle];
    }
  });
});
