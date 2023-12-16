// document.querySelector('#image1').addEventListener('mouseover',function(){
//     document.querySelector('#bigimg').src = document.querySelector('#image1').src;
//     // document.querySelector('#bigimg').src = "blue1.jpg";
// })

// document.querySelector('#image2').addEventListener('mouseover',function(){
//     document.querySelector('#bigimg').src = document.querySelector('#image2').src;
// })

// document.querySelector('#image3').addEventListener('mouseover',function(){
//     document.querySelector('#bigimg').src = document.querySelector('#image3').src;
// })

let gallery = document.querySelectorAll('.gallery');
console.log(gallery);

gallery.forEach(function (item) {
    console.log(item);
    item.addEventListener('mouseover', function () {
        document.querySelector('#bigimg').src = item.src;
    })
});


