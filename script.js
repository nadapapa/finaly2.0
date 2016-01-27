// defining constants
var URL = "finaly.dev";

function clickSearchButton(){
    var word = $('#searchInput').val();
    //console.log(word);
    searchPerseus(word)
}

function searchPerseus(word){
    $.get("http://www.perseus.tufts.edu/hopper/xmlmorph",
        {"lang": "la", "lookup": word})
        .done(function( data ) {
            unique_lemmas = [];
            unique_words = [];

            $(data).find('lemma').each(function(){
                unique_lemmas.push($(this).text());
            });
            unique_lemmas = unique_lemmas.getUnique();

             $(data).find('analysis').each(function(){
                 var lemma = $(this).find("lemma").text();
                 if (unique_lemmas.indexOf(lemma) === -1){
                     unique_words.push($(this).text());
                 }
                 //unique_lemmas.push(this);
               //console.log($(this).find('pos').text());
             });

            //for(var i = 0, l = unique_lemmas.length; i < l; ++i){
            //    $("#answer").append('<a href="#">'+ unique_lemmas[i] +'</a><br>')
            //}

        });
}


//function searchFinaly(unique_lemmas){
//    var iframe = document.getElementById("finalyFrame");
//
//    // for(var i = 0, l = unique_lemmas.length; i < l; ++i){
//
//    // var url = "http://latin.oszk.hu/cgi-bin3/index.cgi" +
//    // "?function=hitlist&amp;query=title:"+unique_lemmas[0]+"&amp;ajax=1";
//    //
//    // iframe.attr('src',url);
//    // console.log(iframe.contents().find("#hit0"))
////
//    iframe.contentWindow.postMessage(
//        {
//            "function": "hitlist",
//            "amp;query": "title:"+unique_lemmas[i],
//            "amp;ajax": 1
//        },
//
//        'http://latin.oszk.hu/cgi-bin3/index.cgi');
////
////
////
////         // $.ajax({
////         //   url: "http://latin.oszk.hu/cgi-bin3/index.cgi",
////         //
////         //   data:{
////         //     "function": "hitlist",
////         //     "amp;query": "title:"+unique_lemmas[i],
////         //     "amp;ajax": 1
////         //   },
////         //
////         //
////         //
////         // })
////         //   .done(function( data ) {
////         //     console.log($(data));
////         //   });
//    // }
//}

//
//$(window).on("message", function( event ){
//    console.log( event);
//});


Array.prototype.getUnique = function(){
    var u = {}, a = [];

    for(var i = 0, l = this.length; i < l; ++i){
        if(u.hasOwnProperty(this[i])) {
            continue;
        }
        a.push(this[i]);
        u[this[i]] = 1;
    }
    return a;
};

