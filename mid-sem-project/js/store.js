if (document.readyState == 'loading')
    document.addEventListener('DOMContentLoaded', ready)
} else{
    ready()
}

function ready(){
var removeCartItemButtons = document.getElementsByClassName('btn-danger')
console.log(removeCartItemButtons)
for( var i=0; i < removeCartItemButtons.length; i++) {
    var button = removeCartItemButtons[i]
    button.addEventListener('click', function (event){
    var buttonClicked =event.target
})
}
}

function removeCartItem(event){
    var buttonClicked = event.target
    buttonClicked.parentElement.parentElement.remove()
    updateCartTotal()
}

function updateCartTotal(){
    var cartItemContainer = document.getElementsByClassName('cart-items')[0]
    var cartRows = cartItemContainer.getElementsByClassName('cart-row')
    for (var 1= 0; i< cartRows.length; i++){
        var cartRow =cartRow[i]
        var priceElement =cartRow.getElementsByClassName('cart-price')[0]
        var quantityElement =cartRow.getElementsByClassName('cart-quantity-input')
        [0]
        var price = parseFloat(priceElement.innerText('KSH', '')
        var quantity = quantityElement.value
        total = total + (price * quantity)

    }
    document.getElementsByClassName('cart-total-price')[0].innerText = 'KSH' + total

}
