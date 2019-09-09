function init() {
    getAlbums();
}

function getAlbums(){
  $.ajax({
    url: 'api.php',
    method: 'GET',
    success: function(data){
      console.log(data);
    },
    error: function (err){
      console.log('errore', err);
    }
  });
}

$(document).ready(init);
