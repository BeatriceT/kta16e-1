window.onload = function () {
        (function () {
            var date = new Date();
            // paneme aja õigel kujul kokku
            var time = date.getHours() + ':' + date.getMinutes() + ':' + date.getSeconds(); //javascriptis arvestatakse aega millisek-s
            document.getElementsByTagName('div')[0].innerHTML = "Aeg JS'is: " + time; // otsime lehelt esimese div tag´i
            window.setTimeout(arguments.callee, 1000); //innerhtml otsib esimest tagi vahel, outerhtml otsib viimast,lõpetab.
        })();
    };