var btn_log = document.getElementById('label_login');
btn_log.onclick = () => {
    var state =btn_log.getAttribute('aria-expanded').toString();
    if(state=='true'){
        document.getElementById('div_login').style.animationName='ShowLogin';
        btn_log.removeAttribute('aria-expanded');
        btn_log.setAttribute('aria-expanded','false');
    }
    else if(state=='false'){
        document.getElementById('div_login').style.animationName='HideLogin';
        btn_log.removeAttribute('aria-expanded');
        btn_log.setAttribute('aria-expanded','true');
    }
};