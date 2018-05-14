var items = [];

var addItem = function(name) {
  var id = "item-count-" + name;
  var element = document.getElementById(id);
  element.innerHTML++;

  var item = {
    name: name,
    count: element.innerHTML
  }

  var exists = false;

  if (items.length > 0) {
    for (var i = 0; i < items.length; i++){
      if (items[i].name == item.name) {
        exists = true;
        items[i].count = item.count;
      }
    }
    if (!exists) {
      items.push(item);
    }
  } else if (items.length == 0) {
    items.push(item);
  }
}

var subItem = function(name) {
  var id = "item-count-" + name;
  var element = document.getElementById(id);
  if (element.innerHTML > 0) {
    element.innerHTML--;
  }

  if (items.length != 0) {
    for (var i = 0; i < items.length; i++){
      if (items[i].name == name) {
        items[i].count--;
        if (items[i].count == 0) {
          items.splice(i, 1);
        }
      }
    }
  }
}

var onSubmit = function() {

    $.ajax({
      type: 'POST',
      url: "./addToCart.php",
      data: JSON.stringify(items),
      success: function(result) { 
        console.log(result);
        window.location.href = "./cart-page.php";
      }
  });
}