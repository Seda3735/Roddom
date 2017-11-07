
function onFbBtnBlockShow(el) {
    el.classList.add('open');
    var btn = document.getElementById('showBtn');
    if (btn) {
        btn.title = "Свернуть";
    }
}
function onFbBtnBlockHide(el) {
    el.classList.remove('open');
    var btn = document.getElementById('showBtn');
    if (btn) {
        btn.title = "Развернуть";
    }
}
function onFbBtnBlockBtnClick() {
    var el = document.getElementById('fbBtnBlock');
    if (el) {
        (el.className.indexOf('open') === -1) ? onFbBtnBlockShow(el) : onFbBtnBlockHide(el);
    }
}

function popupWindow(name) {
    var el = (name === 'fbForm') ? document.getElementById('fbWindow') : document.getElementById('fbCallWindow');
    if (el) {
        (el.className.indexOf('hidden') > -1) ? el.classList.remove('hidden') : el.classList.add('hidden');
    }
}

   