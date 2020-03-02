function translate(lang) {
    lang = lang || localStorage.getItem('app.lang') || 'en';
    localStorage.setItem('app.lang', lang);

    var elems = document.querySelectorAll('[data-tr]');

    $.ajax({
        url: 'module/lang/' + lang + '.json',
            type: 'POST',
            dataType: 'JSON',
            success: function(data) {
                for (var x = 0; x < elems.length; x++) {
                    elems[x].innerHTML = data.hasOwnProperty(lang)
                    ? data[lang][elems[x].dataset.tr]
                    : elems[x].dataset.tr;
                }
            }
    });
}

    $(document).ready(function(){
        translate();

        $("#btn-en").on("click", function(){
            translate("en");
        });

        $("#btn-es").on("click", function(){
            translate("es");
        });

        $("#btn-va").on("click", function(){
            translate("va");
        });
    });