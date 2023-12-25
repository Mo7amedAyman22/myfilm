
function opendropdown(e){
    let elm = e.parentNode.childNodes[3];

    if (elm.style.display == 'none'){
        elm.style.display='block';
    } else if (elm.style.display == 'block') {
        elm.style.display='none';
    }
}