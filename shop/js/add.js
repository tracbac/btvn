const btn = document.querySelectorAll("button#addToCart");
// console.log(btn)
btn.forEach(function (button, index) {
  button.addEventListener("click", function (event) {
    {
      var btnIteam = event.target;
      var product = btnIteam.parentElement;
      var productImg = product.querySelector("img").src;
      var productName = product.querySelector("h1#ten").innerText;
      var productGia = product.querySelector("h1#gia").innerText;
      addCart(productImg, productName, productGia);
    }
  });
});
function addCart(productImg, productName, productGia) {
  var addtr = document.createElement("tr");
  var cartItem = document.querySelectorAll("tbody tr");
  for (var i = 0; i < cartItem.length; i++) {
    var productT = document.querySelectorAll(".title");
    if (productT[i].innerHTML == productName) {
      document.getElementById("thongBao").style.display = "block";
      return;
    }
  }
  var trcontent =
    '<tr > <td style="display:flex ; align-items: center;width: 350px; height: 70px"><img style="width: 70px; height: 70px" src="' +
    productImg +
    '"/><span class="title">' +
    productName +
    '</span></td><td style="width: 100px; height: 70px; align-items: center; "><p style="text-align: center; "> <span class="prices">' +
    productGia +
    '</span></p></td><td style="width: 50px; height: 70px; "><input style="width: 45px; height: 20px;outline: none; "type="number"  value="1" min="0" /></td><td style="cursor: pointer;" > <span class="delete">Xóa</span></td></tr>';
  addtr.innerHTML = trcontent;
  var cartTable = document.querySelector("tbody");
  // console.log(productTable)
  cartTable.append(addtr);
  carttotal();
  deleteCart();
  inputChange();
}
//......................................tien.................................................................//
function carttotal() {
  var cartItem = document.querySelectorAll("tbody tr");
  var totalC = 0;
  //    console.log(cartItem)
  for (var i = 0; i < cartItem.length; i++) {
    var inputValua = cartItem[i].querySelector("input").value;
    var productPrice = cartItem[i].querySelector(".prices").innerHTML;
    console.log(inputValua);
    console.log(productPrice);
    totalA = inputValua * productPrice * 1000;

    totalC = totalC + totalA;

    // totalC.toLocaleString('de-DE')
  }
  var carttotalA = document.querySelector(".price-total p span");
  var cartPrice = document.querySelector(".TongTienOGio");
  carttotalA.innerHTML = totalC.toLocaleString("de-DE");
  cartPrice.innerHTML = totalC.toLocaleString("de-DE");
  // console.log(cartPrice)
}
//...............................................................................................................................xóa
function deleteCart() {
  var cartItem = document.querySelectorAll("tbody tr");
  for (var i = 0; i < cartItem.length; i++) {
    var productT = document.querySelectorAll(".delete");
    productT[i].addEventListener("click", function (event) {
      var cartDelete = event.target;
      var cartItemD = cartDelete.parentElement.parentElement;
      cartItemD.remove();
      carttotal();
    });
  }
};
function inputChange() {
  var cartItem = document.querySelectorAll("tbody tr");
  for (var i = 0; i < cartItem.length; i++) {
    var inputValua = cartItem[i].querySelector("input");
    inputValua.addEventListener("change", function () {
      carttotal();
    });
  }
};





const up = document.querySelector("#to-top");
window.addEventListener("scroll", () =>  {
  if(window.pageYOffset >250){
    up.classList.add("active")
  }else{
    up.classList.remove("active")
  }
})