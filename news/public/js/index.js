
$(document).ready(function(){
    getTopNews();
    getSportsNews();
    getEntertainmentNews();
    getFashionNews();
    getTechnologyNews();
});

function getTopNews(){
    var str='';
    var i;
    var title;
    var description;
    var urlToImage;

    $.ajax({
        url: 'https://newsapi.org/v2/top-headlines?' +
        'country=us&' +
        'apiKey=6d665ff7b2a04d55aacb45df87ee0001',
        type: 'GET',
        crossDomain: true,
        dataType: 'json',
        data:{
            format:"json"
        },
        success:function(response){
           console.log(response);
            console.log(response.articles.length);
            for (i = 0; i < response.articles.length; i++) {

              title = response.articles[i].title;
              description = response.articles[i].description;
              urlToImage = response.articles[i].urlToImage;
              url = response.articles[i].url;

              str=str+"<article>";
        			str=str+"<a href=\"#\"><img src="+urlToImage+" alt=\"\"/></a>";
        			str=str+"<h1>"+title+"</h1>";
        			str=str+"<p>"+description+"</p>"
        			str=str+"<a  target=\"_blank\" href=\""+url+"\" class=\"readmore\">Read more</a>"
        			str=str+"</article>";

              $(".news").append(str);
              str="";
            }
        }
    });

}


function getSportsNews(){
    var str='';
    var i;
    var title;
    var description;
    var urlToImage;

    $.ajax({
        url: 'https://newsapi.org/v2/everything?q=sports&apiKey=6d665ff7b2a04d55aacb45df87ee0001',
        type: 'GET',
        crossDomain: true,
        dataType: 'json',
        data:{
            format:"json"
        },
        success:function(response){
           console.log(response);
            console.log(response.articles.length);
            for (i = 0; i < response.articles.length; i++) {

              title = response.articles[i].title;
              description = response.articles[i].description;
              urlToImage = response.articles[i].urlToImage;
              url = response.articles[i].url;

              str=str+"<article>";
        			str=str+"<a href=\"#\"><img src="+urlToImage+" alt=\"\"/></a>";
        			str=str+"<h1>"+title+"</h1>";
        			str=str+"<p>"+description+"</p>"
        			str=str+"<a  target=\"_blank\" href=\""+url+"\" class=\"readmore\">Read more</a>"
        			str=str+"</article>";

              $(".sports").append(str);
              str="";
            }
        }
    });

}

function getEntertainmentNews(){
    var str='';
    var i;
    var title;
    var description;
    var urlToImage;

    $.ajax({
        url: 'https://newsapi.org/v2/everything?q=entertainment&apiKey=6d665ff7b2a04d55aacb45df87ee0001',
        type: 'GET',
        crossDomain: true,
        dataType: 'json',
        data:{
            format:"json"
        },
        success:function(response){
           console.log(response);
            console.log(response.articles.length);
            for (i = 0; i < response.articles.length; i++) {

              title = response.articles[i].title;
              description = response.articles[i].description;
              urlToImage = response.articles[i].urlToImage;
              url = response.articles[i].url;

              str=str+"<article>";
        			str=str+"<a href=\"#\"><img src="+urlToImage+" alt=\"\"/></a>";
        			str=str+"<h1>"+title+"</h1>";
        			str=str+"<p>"+description+"</p>"
        			str=str+"<a  target=\"_blank\" href=\""+url+"\" class=\"readmore\">Read more</a>"
        			str=str+"</article>";

              $(".entertainment").append(str);
              str="";
            }
        }
    });

}

function getTechnologyNews(){
    var str='';
    var i;
    var title;
    var description;
    var urlToImage;

    $.ajax({
        url: 'https://newsapi.org/v2/everything?q=technology&apiKey=6d665ff7b2a04d55aacb45df87ee0001',
        type: 'GET',
        crossDomain: true,
        dataType: 'json',
        data:{
            format:"json"
        },
        success:function(response){
           console.log(response);
            console.log(response.articles.length);
            for (i = 0; i < response.articles.length; i++) {

              title = response.articles[i].title;
              description = response.articles[i].description;
              urlToImage = response.articles[i].urlToImage;
              url = response.articles[i].url;

              str=str+"<article>";
        			str=str+"<a href=\"#\"><img src="+urlToImage+" alt=\"\"/></a>";
        			str=str+"<h1>"+title+"</h1>";
        			str=str+"<p>"+description+"</p>"
        			str=str+"<a  target=\"_blank\" href=\""+url+"\" class=\"readmore\">Read more</a>"
        			str=str+"</article>";

              $(".technology").append(str);
              str="";
            }
        }
    });

}

function getFashionNews(){
    var str='';
    var i;
    var title;
    var description;
    var urlToImage;

    $.ajax({
        url: 'https://newsapi.org/v2/everything?q=fashion&apiKey=6d665ff7b2a04d55aacb45df87ee0001',
        type: 'GET',
        crossDomain: true,
        dataType: 'json',
        data:{
            format:"json"
        },
        success:function(response){
           console.log(response);
            console.log(response.articles.length);
            for (i = 0; i < response.articles.length; i++) {

              title = response.articles[i].title;
              description = response.articles[i].description;
              urlToImage = response.articles[i].urlToImage;
              url = response.articles[i].url;

              str=str+"<article>";
        			str=str+"<a href=\"#\"><img src="+urlToImage+" alt=\"\"/></a>";
        			str=str+"<h1>"+title+"</h1>";
        			str=str+"<p>"+description+"</p>"
        			str=str+"<a  target=\"_blank\" href=\""+url+"\" class=\"readmore\">Read more</a>"
        			str=str+"</article>";

              $(".fashion").append(str);
              str="";
            }
        }
    });

}
