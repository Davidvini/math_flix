var saveBtn =  document.getElementById('save');
 
saveBtn.addEventListener('click',saveImg);
 
function saveImg()
{
    var data = canvas.toDataURL();
     
    window.open(data,'_blanck','location=0, menubar=0');
}