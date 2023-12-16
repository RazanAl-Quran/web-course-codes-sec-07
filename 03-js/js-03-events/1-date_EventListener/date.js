document.addEventListener('DOMContentLoaded',function(){
    document.querySelector('#myBtn').addEventListener('click',function(){
        document.querySelector('#demo').innerHTML = new Date();
    });
})
