// document.addEventListener('DOMContentLoaded',function(){
//     document.querySelector('#on').addEventListener('click',function(){
//         document.querySelector('#myImage').src = "bulbon.gif";
//     });
//     document.querySelector('#off').addEventListener('click',function(){
//         document.querySelector('#myImage').src = "bulboff.gif";
//     })
// })

document.addEventListener('DOMContentLoaded',function(){
    document.querySelector('#on').addEventListener('click',bulbOn);
    document.querySelector('#off').addEventListener('click',bulbOff)
})

function bulbOn() {
    document.querySelector('#myImage').src = "bulbon.gif";
}

function bulbOff(){
    document.querySelector('#myImage').src = "bulboff.gif";
}