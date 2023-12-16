function displayBluePurple() {
    let bluePurpleRadio = document.querySelectorAll("input[name='color']");
    console.log(bluePurpleRadio);

    // if(bluePurpleRadio.checked===)

    let selectedRadio;
    for(let item of bluePurpleRadio) {
        if(item.checked) {
            selectedRadio = item.value;
            console.log(selectedRadio); 
        }
    }

    if(selectedRadio === 'blue') {
        document.querySelector('#blue-div').style.display='block';
        document.querySelector('#purple-div').style.display='none';
        let blueGallery = document.querySelector('#blue-div').querySelectorAll('img');
        blueGallery.forEach(function (item) {
            console.log(item);
            item.addEventListener('mouseover', function () {
                document.querySelector('#bigimg1').src = item.src;
            })
        });

    } else if (selectedRadio === 'purple') {
        document.querySelector('#blue-div').style.display='none';
        document.querySelector('#purple-div').style.display='block';
        // let purpleGallery = document.querySelector('#purple-div').querySelectorAll('img');
        let purpleGallery = document.querySelectorAll("#purple-div img");
        purpleGallery.forEach(function (item) {
            console.log(item);
            item.addEventListener('mouseover', function () {
                document.querySelector('#bigimg2').src = item.src;
            })
        });
    }
}