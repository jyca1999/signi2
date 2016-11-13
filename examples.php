function checkCount() {

    var cnt = 0;

    for ( var i = 0; i < document.form.checkbox.length; i++ ) {

        if ( document.form.checkbox[i].checked ) cnt++

    }

    return cnt;

}
