'use strict'
// vars

let result = document.querySelector('.result'),
    img_result = document.querySelector('.img-result'),
    img_w = document.querySelector('.img-w'),
    img_h = document.querySelector('.img-h'),
    options = document.querySelector('.options'),
    save = document.querySelector('.save'),
    cropped = document.querySelector('.cropped'),
    dwn = document.querySelector('.download'),
    upload = document.querySelector('#file-input'),
    cropper = '';

// on change show image with crop options
upload.addEventListener('change', (e) => {
    if (e.target.files.length) {
        // start file reader
        const reader = new FileReader();
        reader.onload = (e)=> {
            if(e.target.result){
                // create new image
                let img = document.createElement('img');
                img.id = 'image';
                img.style.width='800px';
                img.style.height='auto';
                img.src = e.target.result
                // clean result before
                result.innerHTML = '';
                // append new image
                result.appendChild(img);
                // show save btn and options
                save.classList.remove('hide');
                // options.classList.remove('hide');
                // init cropper
                // alert(img)
                cropper = new Cropper(img,
                    {
                        aspectRatio: 1,
                        viewMode: 0,
                        dragMode: 'move',
                        // autoCropArea: 1,
                        restore: true,
                        modal: false,
                        guides: false,
                        highlight: false,
                        cropBoxMovable: false,
                        cropBoxResizable: false,
                        toggleDragModeOnDblclick: false,
                        width: img_w.value // input value
                    });

            }
        };
        reader.readAsDataURL(e.target.files[0]);
    }
});

// save on click
save.addEventListener('click',(e)=>{
    e.preventDefault();
    // get result to data uri
    let imgSrc = cropper.getCroppedCanvas({
    }).toDataURL();
    // remove hide class of img
    cropped.classList.remove('hide');
    img_result.classList.remove('hide');
    // show image cropped
    cropped.src = imgSrc;
    // dwn.classList.remove('hide');
    // dwn.download = 'imagename.png';
    // dwn.setAttribute('href',imgSrc);
    setTimeout(function () {
             $("input[name='x']").val($(".cropped").attr("src"));
         },300)
});



