let cart_items = JSON.parse(sessionStorage.getItem('cart_items')) || [];
console.log(cart_items);

function displayItemsInCheckout(purchasedItem,id,title ,cover, description ,counts,price  ){
    console.log('in');
    console.log(id,title, description,counts,price)
    purchasedItem.innerHTML =  `
                                  <div class="card-body" data-id="${id}">
                                   <div class="d-flex justify-content-between">
                                        <div class="d-flex flex-row align-items-center">
                                        <div>
                                        <img src="${cover}" class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                                        </div>
                                        <div class="ms-3">
                                        <h5>${title} </h5>
                                    <p class="small mb-0">"${description}"</p>
                                    </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center">
                                        <div style="width: 50px;">
                                        <h5 class="fw-normal mb-0">${counts}</h5>
                                        <input type="hidden" name="book_id[]" value="${id}">
                                        <input type="hidden" name="book_count[]" value="${counts}">
                                        </div>
                                      <div style="width: 80px;">
                                        <h5 class="mb-0">${price}</h5>
                                      </div>
                                         <a href="#!" style="color: #cecece;" class="trash"><i class="fas fa-trash-alt"></i></a>
                                    </div>
                                   </div>
                                  </div>`

    purchasedItem.classList.add("card","mb-3");
    document.getElementById('shopping_items').appendChild(purchasedItem);

}
function removeItemFromSessionStorage(unique_id)
{
    // console.log("uni",unique_id)
    let updated_cart_items = cart_items.filter(item => {
        if (item.id !== unique_id){
            return item
        }

    });
    cart_items=updated_cart_items;
    sessionStorage.setItem("cart_items", JSON.stringify(updated_cart_items));
}
$(document).ready(function(){
    var cart_count ;
    if(!sessionStorage.getItem('cart-count'))
    {
        sessionStorage.setItem('cart-count',0);
    }
    cart_count = sessionStorage.getItem('cart-count');
    $('.cart-count').html(cart_count);

    cart_items.forEach( element => {
        const purchasedItem = document.createElement('div');
        displayItemsInCheckout(purchasedItem,element.id,element.title, element.cover , element.description, element.counts , element.price)

        $('body').on('click', '.trash', function () {
            // console.log($(this))
            $(this).parent().parent().parent().parent().remove();
            removeItemFromSessionStorage($(this).closest('[data-id]'));
        });
    });
});
