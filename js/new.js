// function validateSize(input) {
//     const fileSize = input.files[0].size / 1024 / 1024; // in MiB
//     if (fileSize > 0.05) {
//       alert('File size must not exceed 50kb');
//       clearInputFile(input);
//       window.open('https://www.img2go.com/compress-image', '_blank');
//     }
// }
// function validateSizeHead(input) {
//     const fileSize = input.files[0].size / 1024 / 1024; // in MiB
//     if (fileSize > 0.10) {
//       alert('File size must not exceed 100kb');
//       clearInputFile(input);
//       window.open('https://www.img2go.com/compress-image', '_blank');
//     }
// }

function clearInputFile(f){
    if(f.value){
        try{
            f.value = ''; //for IE11, latest Chrome/Firefox/Opera...
        }catch(err){
        }
        if(f.value){ //for IE5 ~ IE10
            var form = document.createElement('form'), ref = f.nextSibling;
            form.appendChild(f);
            form.reset();
            ref.parentNode.insertBefore(f,ref);
        }
    }
}