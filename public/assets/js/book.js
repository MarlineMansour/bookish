// add to cart button
let cart_items = JSON.parse(sessionStorage.getItem('cart_items')) || [];
// const x = document.querySelectorAll(".bookBtn");
// x.forEach(element => {
//     // element.addEventListener('click', function() {
//     //     let y = document.querySelectorAll(".cart-count");
//     //     //  console.log(y);
//     //     y.forEach(element => {
//     //         let f= element.innerHTML;
//     //         //  console.log(f);
//     //         let z = parseInt(f);
//     //         z++;
//     //         element.innerHTML= z;
//     //     });
//
//         counts= 1;
//
//         let title = this.parentElement.parentElement.querySelector("h4").textContent;
//         let description= this.parentElement.parentElement.querySelector("p").textContent;
//         let cover = this.parentElement.parentElement.querySelector('img').src;
//         const unique= this.parentElement.parentElement;
//         let price = this.parentElement.parentElement.querySelector("bdi").textContent;
//         let unique_id = unique.getAttribute("data-id");
//         // using html appendchild
//         const cartItem = document.createElement('div');
//         addElementsToCart( cartItem, unique_id, cover,title,description,price,counts)
//
//         // push items-data to the array
//         cart_items.push({
//             id: unique_id,
//             title,
//             description,
//             cover,
//             price,
//             counts
//         });
//         // Save to localStorage
//         localStorage.setItem('cart_items', JSON.stringify(cart_items));
//         //console.log( 'new items when add'+ $('.new').html());
//         let add = cartItem.querySelector(".pluss").addEventListener('click', function (e) { //plus in cart item
//             let c='';
//             if (e.target.tagName == "I") {
//                 c = e.target.parentElement.previousElementSibling
//             } else c = e.target.previousElementSibling
//
//
//
//                     bookNo= parseInt(c.innerHTML);
//                     bookNo++;
//                     c.innerHTML=bookNo;
//
//                     let y = document.querySelectorAll(".cart-count");
//                     y.forEach(element => {
//                         let f= element.innerHTML;
//                        // console.log(f);
//                         let z = parseInt(f);
//                         z++;
//                         element.innerHTML= z;
//
//                     });
//                     // compare between id of cart-item and all card-data-id then assign the counts to be the same in both
//                     let i= document.querySelectorAll(".item");
//                     // console.log( 'this is i:' +i);
//                     i.forEach(element => {
//                         let iD = element.parentElement.parentElement.parentElement;
//                         // console.log( 'this is' +iD);
//                         if(unique.id == iD.getAttribute("id")){
//                             let newCount=cartItem.querySelector(".book-item-counts").innerHTML;
//                             //console.log(newCount)
//                             element.innerHTML=newCount;
//
//                             // console.log(iD.querySelector(".book-counts"))
//                             //console.log(test)
//                         }
//                         // console.log(unique);
//                         //   console.log(i.innerHTML);
//
//                         //  console.log(j);
//
//                     });
//
//                     localStorage.setItem('cart-count',$('.cart-count').html())
//
//
//             });
//
//
//
//         let sub = cartItem.querySelector(".minuss").addEventListener('click', function(e){
//             let q='';
//             if (e.target.tagName == "I") {
//                 q = e.target.parentElement.nextElementSibling
//             } else q = e.target.nextElementSibling
//             //console.log(e.target);
//             quantity=parseInt(q.innerHTML);
//
//             if(q.innerHTML>0){
//                 q.innerHTML=quantity-1;
//                 let r = document.querySelectorAll(".cart-count");
//                 r.forEach(element => {
//                     let h= element.innerHTML;
//                     //  console.log(h);
//                     let l= parseInt(h);
//                     if(l>0){
//                         element.innerHTML= l-1;
//                     }
//                 });
//             }
//             // compare between id of cart-item and all card-data-id then assign the counts to be the same in both
//             let m=document.querySelectorAll('.item');
//             m.forEach(element =>{
//                 let p = element.parentElement.parentElement.parentElement;
//
//                 if(unique.id==p.getAttribute("id")){
//                     let amount=cartItem.querySelector(".book-item-counts").innerHTML;
//                     element.innerHTML=amount;
//                     if( element.innerHTML==0){
//                         p.querySelector(".bookBtn").classList.remove("d-none");
//                         p.querySelector(".item-counts").classList.add("d-none");
//                         removeItemFromLocalStorage(element.getAttribute("data-id"));
//                     }
//                 }
//             });
//             if(q.innerHTML== 0){
//                 e.target.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.parentNode.removeChild(cartItem);
//
//             }
//
//             localStorage.setItem('cart-count',$('.cart-count').html())
//         } );
//
//     });

// });
// x.forEach(element => {
//     element.addEventListener('click', function(e) {
//         e.target.classList.add("d-none");
//         e.target.nextElementSibling.classList.remove("d-none");
//         e.target.nextElementSibling.querySelector('.book-counts').innerHTML = 1
//
//     });
// });

// const a = document.querySelectorAll(".pluss");
// // console.log(a);
// a.forEach(element => {
//     element.addEventListener('click', function(e) {
//         let b='';
//         if (e.target.tagName == "I") {
//             b = e.target.parentElement.previousElementSibling
//         } else b = e.target.previousElementSibling
//         // console.log(e.target.parentElement.parentElement.parentElement.parentElement.id )
//         addItems(e.target.parentElement.parentElement.parentElement.parentElement.id , b.innerHTML);
//
//                 let c = parseInt(b.innerHTML);
//                 b.innerHTML = c + 1;
//
//
//                 let y = document.querySelectorAll(".cart-count");
//                 y.forEach(element => {
//                     let f= element.innerHTML;
//                     let z = parseInt(f);
//                     element.innerHTML= z+1;
//                     // console.log(element.innerHTML);
//
//                 });
//                 // compare between id of cart-item and all card-data-id then assign the counts to be the same in both
//                 let k = element.parentElement.parentElement.parentElement;
//                 // console.log('k is :'+k.getAttribute("data-id"));
//                 let t =document.querySelectorAll(".new");
//                 t.forEach(element =>{
//                     if (k.id == element.getAttribute("id")){
//                         let newQuantity = k.querySelector(".book-counts").innerHTML
//                         // console.log('here is the span'+newQuantity);
//                         let nQ = element.nextElementSibling.querySelector(".book-item-counts");
//                         nQ.innerHTML = newQuantity;
//                     }
//
//                 });
//
//
//
//                 //update counts in local storage cart-counts
//                 localStorage.setItem('cart-count',$('.cart-count').html());
//
//
//
//
//         } );
//
//
//
//     });

// const s = document.querySelectorAll(".minuss");
// // console.log(a);
// s.forEach(element => {
//     element.addEventListener('click', function(e) {
//
//         let s='';
//         if (e.target.tagName == "I") {
//             s = e.target.parentElement.nextElementSibling
//         } else s = e.target.nextElementSibling
//
//         let m = parseInt(s.innerHTML);
//         if(m >0) {
//             s.innerHTML = m - 1;
//         }
//
//         if (s.innerHTML == 0) {
//             e.target.parentElement.parentElement.classList.add("d-none");
//             e.target.parentElement.parentElement.previousElementSibling.classList.remove("d-none");
//         }
//
//         let y = document.querySelectorAll(".cart-count");
//         y.forEach(element => {
//             let f= element.innerHTML;
//             let z = parseInt(f);
//             if(z>0) {
//                 element.innerHTML = z-1;
//             }
//
//         });
//         // compare between id of cart-item and all card-data-id then assign the counts to be the same in both
//         let k=element.parentElement.parentElement.parentElement;
//         let t =document.querySelectorAll(".new");
//         // console.log('this is' + t);
//         t.forEach(element =>{
//             if( k.id==element.getAttribute("id")){
//                 let newQuantity  = k.querySelector(".book-counts").innerHTML
//                 let nQ = element.nextElementSibling.querySelector(".book-item-counts");
//                 nQ.innerHTML = newQuantity;
//                 if( nQ.innerHTML==0){
//                     // console.log(t.parentElement);
//                     // console.log(element.getAttribute("data-id"));
//                     element.parentElement.remove();
//                     removeItemFromLocalStorage(k.getAttribute("data-id"));
//                 }
//             }
//         });
//         //update counts in localstorage cart-counts
//         localStorage.setItem('cart-count',$('.cart-count').html());
//     });
//
//
//
//
// });
// const c= document.getElementById("add").addEventListener('click',function(){
//     let p = document.getElementById("cart-show").classList.remove("d-none");
//     document.getElementById("cart-show").classList.add("col-3");
// });
// const d=document.getElementById("close").addEventListener('click',function(){
//     let p = document.getElementById("cart-show").classList.add("d-none");
// });

function addElementsToCart( cartItem , unique_id , cover , title , description , price , counts)
{
    cartItem.innerHTML = `
                                     <div class="row g-0">
                                        <div class="col-md-4 new" data-id=${unique_id}>
                                        <img src=${cover} class="img-fluid rounded-start" >
                                        </div>
                                           <div class="col-md-8">
                                             <div class="card-body">
                                             <h4>${title}</h4>
                                             <p class="card-text">${description}</p>
                                             <span><small class="text-muted">${price}</small></span>
                                             <div style="border: solid #0b8f96; background-color:white; width:50%; text-align: center;">
                                                <a class="minuss" style ="color:black;" >
                                                  <i class="fa-solid fa-minus"></i>
                                                </a>
                                                <span class="book-item-counts item">${counts}</span>
                                                <a class="pluss"style ="color:black;">
                                                  <i class="fa-solid fa-plus"></i>
                                                </a>
                                              </div>
                                            </div>
                                        </div>
                                       </div>`;

    cartItem.classList.add("card","mb-3");
    document.getElementById('cart-top').appendChild(cartItem);
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
    // console.log("updated_cart_items",updated_cart_items)
    sessionStorage.setItem("cart_items", JSON.stringify(updated_cart_items));
}
function updateCountsInSessionStorage(unique_id,counts){
    let updated_item_counts = cart_items.filter(item => {
        if (item.id == unique_id){
            console.log('before:',item.id, item.counts);
            item.counts= counts;
            console.log('after:',item.id, item.counts);
        }
    });
    sessionStorage.setItem("cart_items", JSON.stringify(cart_items));

}
$(document).ready(function(){
    $('#add').click(function(){
        $('#cart-show').removeClass('d-none');
        $('#cart-show').addClass('col-3');
    });

    $('#close').click(function(){
        $('#cart-show').addClass("d-none");
    });
    var cart_count ;
    if(!sessionStorage.getItem('cart-count'))
    {
        sessionStorage.setItem('cart-count',0);
    }
    cart_count = sessionStorage.getItem('cart-count');
    $('.cart-count').html(cart_count);

    // $('.pluss').click(function (){
    // localStorage.setItem('cart-count',$('.cart-count').html());
    //   // 'cart-count' = $('.cart-count').html();
    // });
    // cart-count increses when we click add to cart
    // $('.bookBtn').click(function () {
    //     sessionStorage.setItem('cart-count',$('.cart-count').html())
    // });
    // $('.minuss').click(function () {
    //     localStorage.setItem('cart-count',$('.cart-count').html())
    // });

    cart_items.forEach( element =>  {
        const cartItem = document.createElement('div');
        addElementsToCart(cartItem , element.id ,element.cover, element.title,element.description , element.price,element.counts)

        // if($('.card-bg-color').attr("data-id")== element.id){
        //     $(".bookBtn").add
        // }
        //in jquery we use each instead of forEach amd must function not arrow function when we use $(this)

        $('.card-bg-color').each(function() {
            // console.log(element.id);
            if(element.id == $(this).attr("data-id")){
                $(this).find('.bookBtn').addClass('d-none');
                $(this).find('.item-counts').removeClass('d-none');
                // console.log( $(this).find('.book-counts').html())
                $(this).find('.book-counts').html(element.counts) ;
            }
        })


    });

 $(".bookBtn").click( function(){
     $(this).addClass("d-none")
     $(this).next().removeClass('d-none');
     $(this).next().find('.item').html(1);
     let y= $(".cart-count").html();
     // console.log(y)
     let z=parseInt(y);
     // console.log(z)
    $(".cart-count").html( z+1);

    //set variables by values of each element data to append item in cart
     let title = $(this).parent().parent().find("h4").html();
     let description= $(this).parent().parent().find("p").html();
     let cover = $(this).parent().parent().find('img').attr('src');
     const unique= $(this).parent().parent();
     let price = $(this).parent().parent().find("bdi").html();
     let unique_id = unique.attr("data-id");
     let counts=1;
     // using html appendchild
     const cartItem = document.createElement('div');
     addElementsToCart( cartItem, unique_id, cover,title,description,price,counts) // function for creating the html structure for the cart item
     cart_items.push({
            id: unique_id,
            title,
            description,
            cover,
            price,
            counts
        });
     sessionStorage.setItem('cart_items', JSON.stringify(cart_items));
     sessionStorage.setItem('cart-count',$('.cart-count').html());
 });

 $('body').on('click','.minuss', function (){

        let clicked = $(this);
        let dataElement="";
        let otherElement ="";
        let Book_id="";
        let count_span="";
        let Quantity="";
        let newQuantity="";
        if(clicked.prop('tagName') =='BUTTON'){
            dataElement = clicked.closest('[data-id]');
            Book_id= dataElement.attr('data-id');
            count_span=clicked.next();
            otherElement = $('[data-id='+Book_id+']').not(dataElement).parent();
            console.log(otherElement);
             Quantity = count_span.html();
            if(Quantity>0){
                newQuantity = parseInt(Quantity) - 1;
                count_span.html(newQuantity);
                otherElement.find('.item').html(newQuantity);
                updateCountsInSessionStorage(Book_id,newQuantity);
            }
            if(newQuantity==0){
                clicked.parent().prev().removeClass('d-none');
                clicked.parent().addClass('d-none');
                otherElement.remove();
                removeItemFromSessionStorage(Book_id);
            }
        }else{
            dataElement= clicked.parent().parent().parent().prev();
            Book_id= dataElement.attr('data-id');
            otherElement = $('[data-id='+Book_id+']').not(dataElement);
            count_span=clicked.next();
            Quantity= count_span.html();
            if(Quantity>0){
                newQuantity = parseInt(Quantity) - 1;
                count_span.html(newQuantity);
                otherElement.find('.item').html(newQuantity);
                updateCountsInSessionStorage(Book_id,newQuantity);
            }
            if(newQuantity==0){
              clicked.parent().parent().parent().parent().parent().remove();
                otherElement.find('.item-counts').addClass('d-none');
                otherElement.find('.bookBtn').removeClass('d-none');
                removeItemFromSessionStorage(Book_id);
            }
        }

       let y= $(".cart-count").html();
       let z=parseInt(y);
       if($(".cart-count").html()>0){
           $(".cart-count").html(z-1);
       }
     sessionStorage.setItem('cart-count',$('.cart-count').html());






});

});

// function addItems(id , quantity , callback) {
//     $.ajax({
//         url: "{{Route('check')}}",
//         data:{
//
//         },
//         method: " Get",
//         success: function (result)  {
//             let flag=null;
//             console.log(quantity);
//             result.forEach(element => {
//
//                 if(element.id == id){
//                     if(element.quantity > quantity){
//                         flag= true;
//                     }
//                     else{
//                         flag= false;
//                     }
//                 }
//
//             });
//             callback(flag);
//         }
//     });
// };


