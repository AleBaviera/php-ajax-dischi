function init() {
    getAlbums();
}

function getAlbums(){
  $.ajax({
    url: 'api.php',
    method: 'GET',
    success: function(data){
      printAlbums(data);
    },
    error: function (err){
      console.log('errore', err);
    }
  });
}

function printAlbums(data){
  
  var source   = document.getElementById("albums-template").innerHTML;
  var template = Handlebars.compile(source);

  for (var i = 0; i < data.length; i++) {
    var album = data[i];

    var context = {
      author: album.author,
      title: album.title,
      year: album.year,
      poster: album.poster
    };
    var html = template(context);
    $('.container').append(html);
  }
}
$(document).ready(init);
