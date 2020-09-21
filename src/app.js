 let $ = require("jquery");

 $(document).ready(function(){


     $.ajax(
 	{
 		url: "http://localhost/php-ajax-dischi/server.php",
 		method: "GET",
 		success: function (risposta) {
            console.log(risposta);
            printCd(risposta);
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
