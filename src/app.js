 let $ = require("jquery");

 $(document).ready(function(){


     $.ajax(
 	{
 		url: "http://localhost/php-ajax-dischi/server.php",
 		method: "GET",
 		success: function (risposta) {
            printCd(risposta);
            selectAuthor(risposta);
        },
 		error: function () {
 			alert("E' avvenuto un errore.");
 		}
 	}
 );
});


function printCd(data) {
    var source = document.getElementById("entry-template").innerHTML;
    var template = Handlebars.compile(source);
    for (var i = 0; i < data.length; i++) {
        var context = {
            "title" : data[i].title,
            "author" : data[i].author,
            "year" : data[i].year,
            "poster" : data[i].poster
        };
        var html = template(context);
        $(".dischi").append(html);
    }
};


function selectAuthor(data) {
    var autori = [];
    for (var i = 0; i < data.length; i++) {
        var autore = data[i].author;
        if (autori.includes(autore) == false) {
            autori.push(autore);
        }
    }
    var source = document.getElementById("entry-template-author").innerHTML;
    var template = Handlebars.compile(source);
    for (var i = 0; i < autori.length; i++) {
        var context = {
            "author" : autori[i],
        };
        var html = template(context);
        $(".select").append(html);
    }
}
