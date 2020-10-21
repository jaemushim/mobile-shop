$(document).ready(function () {
  $("#banner-main .owl-carousel").owlCarousel({
    loop: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 1,
      },
    },
  });
  $("#hottest-item .owl-carousel").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    dots: false,
    responsive: {
      0: {
        items: 2,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 5,
      },
    },
  });
});

//Mobile hamberger icon animation
$(document).ready(function () {
  $("#nav-icon3").click(function () {
    $(this).toggleClass("open");
  });
});

$(".navbar-toggler").on("click", function () {
  $(".mobile-nav ").toggleClass("mobile-nav--active");
  $("BODY").toggleClass("overlay");
});

//
//

$(window).on("load", function (e) {
  // init Isotope
  var $grid = $(".grid").isotope({
    // options
  });
  // filter items on button click
  $(".filter-button-group").on("click", "button", function () {
    var filterValue = $(this).attr("data-filter");
    $grid.isotope({ filter: filterValue });
  });
  //button click
  // change is-checked class on buttons

  // var buttonGroup = document.querySelector(".button-group");
  // buttonGroup.addEventListener("click", function (event) {
  //   // only work with buttons
  //   if (!matchesSelector(event.target, "button")) {
  //     return;
  //   }
  //   buttonGroup.querySelector(".is-checked").classList.remove("is-checked");
  //   event.target.classList.add("is-checked");
  // });
});

// Quntitiy
$(".qty-up").on("click", function (e) {
  let product_price = $(`.product_price[data-id='${$(this).data("id")}']`);
  let input = $(`.qty-input[data-id='${$(this).data("id")}']`);
  var value = parseInt(input.val());
  let subtotal = $("#subtotal");

  removeComma = product_price.text().split(",").join("");
  let price_value = parseInt(removeComma);
  if (value < 9) {
    value = value + 1;
    // Ajax
    $item_id = $(this).data("id");
    $.ajax({
      type: "post",
      url: "template/ajax.php",
      data: { item_id: $item_id },
      success: function (result) {
        $result = JSON.parse(result);
        item_price = parseInt($result[0]["item_price"]);
        price_value += item_price;

        function numberWithCommas(x) {
          return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }
        product_price.text(numberWithCommas(price_value));

        subTotal_price = parseInt($("#subtotal").text().split(",").join(""));
        addComma = numberWithCommas(item_price + subTotal_price);
        subtotal.text(addComma);
      },
    });
  }
  input.val(value);
  e.preventDefault();
});

$(".qty-down").on("click", function (e) {
  let product_price = $(`.product_price[data-id='${$(this).data("id")}']`);
  let input = $(`.qty-input[data-id='${$(this).data("id")}']`);
  var value = parseInt(input.val());
  let subtotal = $("#subtotal");
  removeComma = product_price.text().split(",").join("");
  let price_value = parseInt(removeComma);

  if (value > 1) {
    value = value - 1;
    // Ajax
    $item_id = $(this).data("id");
    $.ajax({
      type: "post",
      url: "template/ajax.php",
      data: { item_id: $item_id },
      success: function (result) {
        $result = JSON.parse(result);
        item_price = parseInt($result[0]["item_price"]);
        price_value -= item_price;

        function numberWithCommas(x) {
          return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }
        product_price.text(numberWithCommas(price_value));

        subTotal_price = parseInt($("#subtotal").text().split(",").join(""));
        addComma = numberWithCommas(subTotal_price - item_price);
        subtotal.text(addComma);
      },
    });
  }
  input.val(value);

  e.preventDefault();
});
